<?php

/* /themes/espacio/espacio.html.twig */
class __TwigTemplate_74206d0a888a7603685f55ff855847e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
    <!--<![endif]-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 17
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter($_title_, $this->getAttribute($_config_, "site_title"))) : ($this->getAttribute($_config_, "site_title"))), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("favicon.ico")), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "css_url"), "html", null, true);
        echo "/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "css_url"), "html", null, true);
        echo "/bootstrap-responsive.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "css_url"), "html", null, true);
        echo "/main.css\">
        <script src=\"";
        // line 24
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/modernizr-2.6.2-respond-1.1.0.min.js\"></script>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 27
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/jquery-1.8.3.min.js\"><\\/script>')</script>
        
        ";
        // line 30
        echo "        ";
        if (isset($context["scripts"])) { $_scripts_ = $context["scripts"]; } else { $_scripts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_scripts_);
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " <script src=\"";
            if (isset($context["script"])) { $_script_ = $context["script"]; } else { $_script_ = null; }
            echo twig_escape_filter($this->env, $_script_, "html", null, true);
            echo "\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "
        ";
        // line 33
        echo "        ";
        if (isset($context["styles"])) { $_styles_ = $context["styles"]; } else { $_styles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_styles_);
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " <link rel=\"stylesheet\" src=\"";
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            echo twig_escape_filter($this->env, $_style_, "html", null, true);
            echo "\">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "        <style type=\"text/css\">
        body {
        background: url(";
        // line 36
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "img_url"), "html", null, true);
        echo "/";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "bg_img"), "value"), "html", null, true);
        echo ");
        }
        .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
        background-image: linear-gradient(to bottom , ";
        // line 39
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_1"), "value"), "html", null, true);
        echo " , ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_2"), "value"), "html", null, true);
        echo ");}
        .dropdown-menu .active > a, .dropdown-menu .active > a:hover {
        background-color: ";
        // line 41
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_1"), "value"), "html", null, true);
        echo ";
        background-image: linear-gradient(to bottom, ";
        // line 42
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_1"), "value"), "html", null, true);
        echo ", ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_2"), "value"), "html", null, true);
        echo ");
        }
        a { color: ";
        // line 44
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_2"), "value"), "html", null, true);
        echo ";}
        .navbar .nav > li > a ,.navbar .brand  {color: ";
        // line 45
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_a"), "value"), "html", null, true);
        echo ";}
        body { font-family: \"";
        // line 46
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "font"), "value"), "html", null, true);
        echo "\",\"Helvetica Neue\",Helvetica,Arial,sans-serif; }
        </style>
        ";
        // line 49
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 50
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
                    <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class=\"container\">
            ";
        // line 58
        echo "            ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        $template = $this->env->resolveTemplate((("themes/" . $this->getAttribute($_theme_, "key")) . "/navbar.html.twig"));
        $template->display(array_merge($context, array("theme" => $_theme_)));
        // line 59
        echo "                <div class=\"row\">
                    <div class=\"span12\">
                                   
            ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "                        </div>
                    </div>

                </div>                

        ";
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "                

                <script src=\"";
        // line 87
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/bootstrap.min.js\"></script>

                <script src=\"";
        // line 89
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/main.js\"></script>

                <script>
                    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
                    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                    s.parentNode.insertBefore(g,s)}(document,'script'));
                    </script>
             ";
        // line 97
        $this->displayBlock('scripts', $context, $blocks);
        // line 99
        echo "            </body>
        </html>";
    }

    // line 49
    public function block_head($context, array $blocks = array())
    {
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        echo "<h2>This is content</h2>";
    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        // line 69
        echo "                <footer id=\"footer\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span6\">
                                <a href=\"http://validator.w3.org/check/referer\">HTML5 Validator</a>
                                <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS Validator</a>
                                <a href=\"http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance\">Unicorn Validator</a>
                            </div>
                            <div class=\"span4\">
                                <p><a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/3.0/deed.sv\"><img alt=\"Creative Commons-licens\" style=\"border-width:0\" src=\"http://i.creativecommons.org/l/by-sa/3.0/88x31.png\" /></a><br /><span xmlns:dct=\"http://purl.org/dc/terms/\" href=\"http://purl.org/dc/dcmitype/InteractiveResource\" property=\"dct:title\" rel=\"dct:type\">Strawberry PHP</span> by <span xmlns:cc=\"http://creativecommons.org/ns#\" property=\"cc:attributionName\">Carl-Johan Kihl</span> is licenced under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/3.0/deed.en\">Attribution-ShareAlike 3.0 Unported Licence</a>.</p> 
                            </div>
                        </div>

                    </div>\t\t
                </footer>
        ";
    }

    // line 97
    public function block_scripts($context, array $blocks = array())
    {
        // line 98
        echo "             ";
    }

    public function getTemplateName()
    {
        return "/themes/espacio/espacio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 98,  256 => 97,  237 => 69,  234 => 68,  228 => 62,  223 => 49,  218 => 99,  216 => 97,  204 => 89,  198 => 87,  194 => 85,  192 => 68,  185 => 63,  183 => 62,  178 => 59,  173 => 58,  164 => 50,  161 => 49,  155 => 46,  150 => 45,  145 => 44,  136 => 42,  131 => 41,  122 => 39,  112 => 36,  108 => 34,  94 => 33,  91 => 31,  77 => 30,  71 => 27,  64 => 24,  59 => 23,  54 => 22,  49 => 21,  45 => 20,  23 => 5,  118 => 74,  110 => 70,  102 => 66,  95 => 63,  87 => 59,  78 => 53,  40 => 17,  37 => 17,  30 => 9,  27 => 8,);
    }
}
