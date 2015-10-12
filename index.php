<?php
/**
 * Created by PhpStorm.
 * User: do9iigane
 * Date: 2015/10/11
 * Time: 11:14
 */
require_once './vendor/autoload.php';

new wiki_calender();

class wiki_calender
{

    public function __construct()
    {
        //twig load.
        $loader = new Twig_Loader_Filesystem('./template');
        $twig = new Twig_Environment($loader, array(
            'cache' => './cache',
            'debug' => true
        ));

        $titles = urlencode("日本の記念日一覧");
        $pageid = "456328";
        $format = "json";//json or xml
        $url = "http://ja.wikipedia.org/w/api.php?format={$format}&action=query&prop=revisions&rvprop=content&pageids={$pageid}";
//$url = "http://ja.wikipedia.org/w/api.php?format={$format}&action=query&prop=revisions&rvprop=content&rvparse&titles={$titles}";
        $content = file_get_contents($url);
        $decode_content = json_decode($content, true);

        $page_contents = $decode_content['query']['pages']['456328']['revisions']['0']['*'];
        $lines = explode("\n", $page_contents);

        $cnt = 0;
        while ($cnt < count($lines)) {
            preg_match("/\*(.*) - (.*)/", $lines[$cnt], $match1);
            $cnt++;

            if (!empty($match1)) {
                $day_title ="";
                $day_content=array();
                $this->parse_title_contents($day_title, $day_content, $match1);
                preg_match('/(.*)月(.*)日/',$day_title,$match2);

                if(!empty($match2[1])){
                    $timerange =
                        date('Y').
                        @str_pad($match2[1],2,0,STR_PAD_LEFT).
                        @str_pad($match2[2],2,0,STR_PAD_LEFT)."/".
                        date('Y').
                        @str_pad($match2[1],2,0,STR_PAD_LEFT).
                        @str_pad((int) $match2[2]+1,2,0,STR_PAD_LEFT);

                    $result[$match2[1]][$day_title] = array(
                        'title'=>$day_content,
                        'date'=> $timerange);
                }

            }
        }

//            var_dump($result);

        echo $twig->render('wikicalender.twig', array('data' => $result));
    }

    public function parse_title_contents(&$day_title, &$day_content, $match_arr)
    {
        preg_match("/\[\[(.*?)\|(.*?)\]\]/", $match_arr[1], $title_match);

        if (empty($title_match[1])) return;
        $day_title = $title_match[1];
        $day_arr = explode("、",$match_arr[2]);

        $cnt = 0;
        while($cnt<count($day_arr)){
            $day_content[$cnt] = strtr($day_arr[$cnt],array('[['=>'',']]'=>''));
        $cnt++;
        }
    }
}
