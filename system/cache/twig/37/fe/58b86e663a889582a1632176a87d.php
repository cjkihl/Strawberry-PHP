<?php

/* themes/espacio/espacio.html.twig */
class __TwigTemplate_37fe58b86e663a889582a1632176a87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        echo "/rough_diagonal.png);
        }
        .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
        background-image: linear-gradient(to bottom , ";
        // line 35
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "color1"), "html", null, true);
        echo ", ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "color2"), "html", null, true);
        echo ");}
        </style>
        ";
        // line 38
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
                    <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class=\"container\">
            ";
        // line 47
        echo "            ";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        $template = $this->env->resolveTemplate((("themes/" . $this->getAttribute($_theme_, "key")) . "/navbar.html.twig"));
        $template->display(array_merge($context, array("theme" => $_theme_)));
        // line 48
        echo "                <div class=\"row\">
                    <div class=\"span12\">
                                   
            ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "                        </div>
                    </div>

                </div>                

        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "                <script
                src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
                <script>window.jQuery || document.write('<script src=\"";
        // line 77
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/jquery-1.8.3.min.js\"><\\/script>')</script>

                <script src=\"";
        // line 79
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/bootstrap.min.js\"></script>

                <script src=\"";
        // line 81
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/main.js\"></script>

                <script>
                    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
                    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                    s.parentNode.insertBefore(g,s)}(document,'script'));
                    </script>
            </body>
        </html>";
    }

    // line 38
    public function block_head($context, array $blocks = array())
    {
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        echo "<h2>This is content</h2>";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
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

    public function getTemplateName()
    {
        return "themes/espacio/espacio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 58,  194 => 57,  188 => 51,  183 => 38,  168 => 81,  162 => 79,  156 => 77,  152 => 75,  150 => 57,  143 => 52,  141 => 51,  136 => 48,  131 => 47,  122 => 39,  119 => 38,  110 => 35,  103 => 32,  99 => 30,  85 => 29,  82 => 27,  68 => 26,  62 => 23,  57 => 22,  52 => 21,  47 => 20,  43 => 19,  35 => 16,  22 => 5,);
    }
}
