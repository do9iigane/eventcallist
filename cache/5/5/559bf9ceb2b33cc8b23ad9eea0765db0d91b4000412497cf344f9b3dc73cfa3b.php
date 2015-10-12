<?php

/* wikicalender.twig */
class __TwigTemplate_d979c37d1700234cbaccc8885d56ffee92b49ad0994e7a930e6ffb6b1bed15fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>年間イベントカレンダー</title>

    <!-- Bootstrap -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
    /* ページトップ */
    #page-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 80%;
    }
    #page-top a {
    background: #666;
    text-decoration: none;
    color: #fff;
    width: 100px;
    padding: 25px 0;
    text-align: center;
    display: block;
    border-radius: 10px;
    }
    #page-top a:hover {
    text-decoration: none;
    background: #999;
    }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<div class=\"container\" id=\"content\" tabindex=\"-1\">
    <h1>年間記念日カレンダー</h1>
    <h3>各記念日を押下すると、Googleカレンダーに予定をコピーできます。<br>
        <small>※Googleカレンダーの「継続的な予定」はシステムでは制御出来ない為、予定を保存する際、任意で選択してください。</small>
    </h3>

    <center>
    <nav>
        <ul class=\"pagination pagination-lg\">
            ";
        // line 53
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["monthkey"] => $context["months"]) {
            // line 54
            echo "                <li><a href=\"#";
            if (isset($context["monthkey"])) { $_monthkey_ = $context["monthkey"]; } else { $_monthkey_ = null; }
            echo twig_escape_filter($this->env, $_monthkey_, "html", null, true);
            echo "\">";
            if (isset($context["monthkey"])) { $_monthkey_ = $context["monthkey"]; } else { $_monthkey_ = null; }
            echo twig_escape_filter($this->env, $_monthkey_, "html", null, true);
            echo "月</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['monthkey'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

        </ul>
    </nav>
    </center>

    ";
        // line 62
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["monthkey"] => $context["months"]) {
            // line 63
            echo "        <h3 id=\"";
            if (isset($context["monthkey"])) { $_monthkey_ = $context["monthkey"]; } else { $_monthkey_ = null; }
            echo twig_escape_filter($this->env, $_monthkey_, "html", null, true);
            echo "\">";
            if (isset($context["monthkey"])) { $_monthkey_ = $context["monthkey"]; } else { $_monthkey_ = null; }
            echo twig_escape_filter($this->env, $_monthkey_, "html", null, true);
            echo "月</h3>
    ";
            // line 64
            if (isset($context["months"])) { $_months_ = $context["months"]; } else { $_months_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_months_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["datas"]) {
                // line 65
                echo "        <h4><span class=\"label label-primary\">";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "</span></h4>
        ";
                // line 66
                if (isset($context["datas"])) { $_datas_ = $context["datas"]; } else { $_datas_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_datas_, "title", array()));
                foreach ($context['_seq'] as $context["key"] => $context["days"]) {
                    // line 67
                    echo "            <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
            <a target=\"_blank\"
               href=\"http://www.google.com/calendar/event?action=TEMPLATE&text=";
                    // line 69
                    if (isset($context["days"])) { $_days_ = $context["days"]; } else { $_days_ = null; }
                    echo twig_escape_filter($this->env, twig_urlencode_filter($_days_), "html", null, true);
                    echo "&dates=";
                    if (isset($context["datas"])) { $_datas_ = $context["datas"]; } else { $_datas_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datas_, "date", array()), "html", null, true);
                    echo "&details=https://ja.wikipedia.org/wiki/";
                    if (isset($context["days"])) { $_days_ = $context["days"]; } else { $_days_ = null; }
                    echo twig_escape_filter($this->env, twig_urlencode_filter($_days_), "html", null, true);
                    echo "\">
                ";
                    // line 70
                    if (isset($context["days"])) { $_days_ = $context["days"]; } else { $_days_ = null; }
                    echo twig_escape_filter($this->env, $_days_, "html", null, true);
                    echo "
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['days'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "        <br>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 75
                echo "        No users have been found.
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['datas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['monthkey'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</div>

<p id=\"page-top\"><a href=\"#\">PAGE TOP</a></p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

<script>
    \$(function() {
        var topBtn = \$('#page-top');
        topBtn.hide();
        //スクロールが200に達したらボタン表示
        \$(window).scroll(function () {
            if (\$(this).scrollTop() > 500) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        //スクロールしてトップ
        topBtn.click(function () {
            \$('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "wikicalender.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 78,  168 => 77,  161 => 75,  155 => 73,  145 => 70,  134 => 69,  130 => 67,  125 => 66,  119 => 65,  113 => 64,  104 => 63,  99 => 62,  91 => 56,  78 => 54,  73 => 53,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>年間イベントカレンダー</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/*     <style type="text/css">*/
/*     /* ページトップ *//* */
/*     #page-top {*/
/*     position: fixed;*/
/*     bottom: 20px;*/
/*     right: 20px;*/
/*     font-size: 80%;*/
/*     }*/
/*     #page-top a {*/
/*     background: #666;*/
/*     text-decoration: none;*/
/*     color: #fff;*/
/*     width: 100px;*/
/*     padding: 25px 0;*/
/*     text-align: center;*/
/*     display: block;*/
/*     border-radius: 10px;*/
/*     }*/
/*     #page-top a:hover {*/
/*     text-decoration: none;*/
/*     background: #999;*/
/*     }*/
/*     </style>*/
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* */
/* <div class="container" id="content" tabindex="-1">*/
/*     <h1>年間記念日カレンダー</h1>*/
/*     <h3>各記念日を押下すると、Googleカレンダーに予定をコピーできます。<br>*/
/*         <small>※Googleカレンダーの「継続的な予定」はシステムでは制御出来ない為、予定を保存する際、任意で選択してください。</small>*/
/*     </h3>*/
/* */
/*     <center>*/
/*     <nav>*/
/*         <ul class="pagination pagination-lg">*/
/*             {% for monthkey,months in data %}*/
/*                 <li><a href="#{{ monthkey }}">{{ monthkey }}月</a></li>*/
/*             {% endfor %}*/
/* */
/* */
/*         </ul>*/
/*     </nav>*/
/*     </center>*/
/* */
/*     {% for monthkey,months in data %}*/
/*         <h3 id="{{ monthkey }}">{{ monthkey }}月</h3>*/
/*     {% for key,datas in months %}*/
/*         <h4><span class="label label-primary">{{ key }}</span></h4>*/
/*         {% for key,days in datas.title %}*/
/*             <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>*/
/*             <a target="_blank"*/
/*                href="http://www.google.com/calendar/event?action=TEMPLATE&text={{ days|url_encode }}&dates={{ datas.date }}&details=https://ja.wikipedia.org/wiki/{{ days|url_encode }}">*/
/*                 {{ days }}*/
/*             </a>*/
/*         {% endfor %}*/
/*         <br>*/
/*     {% else %}*/
/*         No users have been found.*/
/*     {% endfor %}*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* <p id="page-top"><a href="#">PAGE TOP</a></p>*/
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* */
/* <script>*/
/*     $(function() {*/
/*         var topBtn = $('#page-top');*/
/*         topBtn.hide();*/
/*         //スクロールが200に達したらボタン表示*/
/*         $(window).scroll(function () {*/
/*             if ($(this).scrollTop() > 500) {*/
/*                 topBtn.fadeIn();*/
/*             } else {*/
/*                 topBtn.fadeOut();*/
/*             }*/
/*         });*/
/*         //スクロールしてトップ*/
/*         topBtn.click(function () {*/
/*             $('body,html').animate({*/
/*                 scrollTop: 0*/
/*             }, 500);*/
/*             return false;*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/
