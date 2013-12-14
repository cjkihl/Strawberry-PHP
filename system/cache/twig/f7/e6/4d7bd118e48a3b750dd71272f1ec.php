<?php

/* /themes/espacio/espacio.html.twig */
class __TwigTemplate_f7e64d7bd118e48a3b750dd71272f1ec extends Twig_Template
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
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 16
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter($_title_, $this->getAttribute($_config_, "site_title"))) : ($this->getAttribute($_config_, "site_title"))), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("favicon.ico")), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "css_url"), "html", null, true);
        echo "/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "css_url"), "html", null, true);
        echo "/bootstrap-responsive.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "css_url"), "html", null, true);
        echo "/main.css\">
        <script src=\"";
        // line 23
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/modernizr-2.6.2-respond-1.1.0.min.js\"></script>

        ";
        // line 26
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
        // line 27
        echo "
        ";
        // line 29
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
        // line 30
        echo "        <style type=\"text/css\">
        body {
        background: url(";
        // line 32
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "img_url"), "html", null, true);
        echo "/";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "bg_img"), "value"), "html", null, true);
        echo ");
        }
        .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
        background-image: linear-gradient(to bottom , ";
        // line 35
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_1"), "value"), "html", null, true);
        echo " , ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_2"), "value"), "html", null, true);
        echo ");}
        .dropdown-menu .active > a, .dropdown-menu .active > a:hover {
        background-color: ";
        // line 37
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_1"), "value"), "html", null, true);
        echo ";
        background-image: linear-gradient(to bottom, ";
        // line 38
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_1"), "value"), "html", null, true);
        echo ", ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_2"), "value"), "html", null, true);
        echo ");
        }
        a { color: ";
        // line 40
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_2"), "value"), "html", null, true);
        echo ";}
        .navbar .nav > li > a ,.navbar .brand  {color: ";
        // line 41
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "color_a"), "value"), "html", null, true);
        echo ";}
        body { font-family: \"";
        // line 42
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "font"), "value"), "html", null, true);
        echo "\",\"Helvetica Neue\",Helvetica,Arial,sans-serif; }
        </style>
        ";
        // line 45
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
                    <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class=\"container\">
            ";
        // line 54
        echo "            ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        $template = $this->env->resolveTemplate((("themes/" . $this->getAttribute($_theme_, "key")) . "/navbar.html.twig"));
        $template->display(array_merge($context, array("theme" => $_theme_)));
        // line 55
        echo "                <div class=\"row\">
                    <div class=\"span12\">
                                   
            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "                        </div>
                    </div>

                </div>                

        ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "                <script
                src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
                <script>window.jQuery || document.write('<script src=\"";
        // line 84
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/jquery-1.8.3.min.js\"><\\/script>')</script>

                <script src=\"";
        // line 86
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/bootstrap.min.js\"></script>

                <script src=\"";
        // line 88
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
        // line 96
        $this->displayBlock('scripts', $context, $blocks);
        // line 98
        echo "            </body>
        </html>";
    }

    // line 45
    public function block_head($context, array $blocks = array())
    {
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        echo "<h2>This is content</h2>";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "                <footer id=\"footer\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span6\">
                                <a href=\"http://validator.w3.org/check/referer\">HTML5</a>
                                <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS</a>
                                <a href=\"http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance\">Unicorn</a>
                                <a href=\"source.php\">Källkod</a>
                            </div>
                            <div class=\"span4\">
                                <p><a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/3.0/deed.sv\"><img alt=\"Creative Commons-licens\" style=\"border-width:0\" src=\"http://i.creativecommons.org/l/by-sa/3.0/88x31.png\" /></a><br /><span xmlns:dct=\"http://purl.org/dc/terms/\" href=\"http://purl.org/dc/dcmitype/InteractiveResource\" property=\"dct:title\" rel=\"dct:type\">Strawberry PHP</span> av <span xmlns:cc=\"http://creativecommons.org/ns#\" property=\"cc:attributionName\">Carl-Johan Kihl</span> är licensierad under en <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/3.0/deed.sv\">Creative Commons Erkännande-DelaLika 3.0 Unported licens</a>.</p> 
                            </div>
                        </div>

                    </div>\t\t
                </footer>
        ";
    }

    // line 96
    public function block_scripts($context, array $blocks = array())
    {
        // line 97
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
        return array (  258 => 97,  255 => 96,  235 => 65,  232 => 64,  226 => 58,  221 => 45,  216 => 98,  214 => 96,  202 => 88,  196 => 86,  190 => 84,  186 => 82,  184 => 64,  177 => 59,  175 => 58,  170 => 55,  165 => 54,  156 => 46,  153 => 45,  147 => 42,  142 => 41,  137 => 40,  128 => 38,  123 => 37,  114 => 35,  104 => 32,  100 => 30,  86 => 29,  83 => 27,  69 => 26,  63 => 23,  58 => 22,  53 => 21,  48 => 20,  36 => 16,  23 => 5,  95 => 28,  92 => 27,  81 => 21,  73 => 15,  66 => 14,  62 => 13,  55 => 11,  52 => 10,  47 => 7,  44 => 19,  37 => 4,  31 => 3,  28 => 2,);
    }
}
