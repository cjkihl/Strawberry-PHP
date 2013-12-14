<?php

/* themes/espacio/navbar.html.twig */
class __TwigTemplate_757a79cf8400bf486fe8f2f5716bc4b2 extends Twig_Template
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
        echo "
";
        // line 2
        $context["navbar"] = call_user_func_array($this->env->getFunction('content')->getCallable(), array("models/navbar.json"));
        // line 3
        echo "
";
        // line 4
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        if ($_navbar_) {
            // line 5
            echo "<div class=\"container\">
<div class=\"row\">
<div class=\"span12\">
<div class=\"navbar\">
    <div class=\"navbar-inner\">

        ";
            // line 12
            echo "        ";
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            if ($this->getAttribute($_navbar_, "brand", array(), "any", true, true)) {
                // line 13
                echo "        <a class=\"brand\" href=\"";
                if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((($this->getAttribute($this->getAttribute($_navbar_, "brand", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_navbar_, "brand", array(), "any", false, true), "url"), "")) : ("")))), "html", null, true);
                echo "\">
                ";
                // line 14
                if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
                if ($this->getAttribute($this->getAttribute($_navbar_, "brand", array(), "any", false, true), "img", array(), "any", true, true)) {
                    // line 15
                    echo "                <img src=\"";
                    if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_theme_, "img_url") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute($_theme_, "params"), "menu_icon"), "value")), "html", null, true);
                    echo "\">
                ";
                }
                // line 17
                echo "                 ";
                if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_navbar_, "brand", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_navbar_, "brand", array(), "any", false, true), "title"), "Home")) : ("Home")), "html", null, true);
                echo "
                 
        </a>
        ";
            }
            // line 21
            echo "
        ";
            // line 23
            echo "            <ul class=\"nav\">
            ";
            // line 24
            if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_navbar_, "top_navbar"));
            foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                // line 25
                echo "                ";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                $context["href"] = call_user_func_array($this->env->getFunction('url')->getCallable(), array($_url_));
                // line 26
                echo "                    <li ";
                if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
                echo ((($_href_ == call_user_func_array($this->env->getFunction('url')->getCallable(), array()))) ? ("class=\"active\"") : (""));
                echo " >
                        <a href=\"";
                // line 27
                if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
                echo twig_escape_filter($this->env, $_href_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\">";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</a>
                    </li> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "            </ul>
        ";
            // line 31
            $context["user"] = call_user_func_array($this->env->getFunction('logged_in_user')->getCallable(), array());
            // line 32
            echo "
        ";
            // line 33
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 34
                echo "                ";
                // line 35
                echo "                <ul class=\"nav pull-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle \"
                           data-toggle=\"dropdown\">";
                // line 38
                if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_navbar_, "user_dropdown"), "title"), "html", null, true);
                echo " ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "name"), "html", null, true);
                echo "<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                        ";
                // line 40
                if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_navbar_, "user_dropdown"), "elements"));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (((!$this->getAttribute($_section_, "visible", array(), "any", true, true)) || $this->getAttribute($_user_, "permission", array(0 => $this->getAttribute($_section_, "visible")), "method"))) {
                        // line 41
                        echo "
                            ";
                        // line 42
                        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                        if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
                        if (($this->getAttribute($_section_, "divider", array(), "any", true, true) && $this->getAttribute($_sections_, "divider"))) {
                            // line 43
                            echo "                                <li class=\"divider\"></li>
                            ";
                        }
                        // line 45
                        echo "
                            ";
                        // line 46
                        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                        if ($this->getAttribute($_section_, "title", array(), "any", true, true)) {
                            // line 47
                            echo "                                    <li class=\"nav-header\">";
                            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_section_, "title"), "html", null, true);
                            echo "</li>
                            ";
                        }
                        // line 49
                        echo "
                            ";
                        // line 50
                        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_section_, "elements"));
                        foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                            // line 51
                            echo "                                ";
                            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                            $context["href"] = call_user_func_array($this->env->getFunction('url')->getCallable(), array($_url_));
                            // line 52
                            echo "                                        <li ";
                            if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
                            echo ((($_href_ == call_user_func_array($this->env->getFunction('url')->getCallable(), array()))) ? ("class=\"active\"") : (""));
                            echo " >
                                            <a href=\"";
                            // line 53
                            if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
                            echo twig_escape_filter($this->env, $_href_, "html", null, true);
                            echo "\">";
                            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                            echo twig_escape_filter($this->env, $_name_, "html", null, true);
                            echo "</a>
                                        </li> 
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 56
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 57
                echo "                        </ul>
                    </li>
                </ul>          
        ";
            } else {
                // line 61
                echo "            ";
                // line 62
                echo "            <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("user/login/process")), "html", null, true);
                echo "\" class=\"navbar-form pull-right\">                                    
                <input class=\"span2\" name=\"email\" type=\"email\" placeholder=\"Email\"> 
                <input class=\"span2\" name=\"password\" type=\"password\" placeholder=\"Password\">
                <button type=\"submit\" class=\"btn btn-primary\">";
                // line 65
                if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_navbar_, "top_login"), "title"), "html", null, true);
                echo "</button>
            </form>
        ";
            }
            // line 68
            echo "    </div>
</div>
</div>
</div>
</div>
";
        } else {
            // line 74
            echo "<h1>Not found</h1>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/espacio/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 74,  223 => 68,  216 => 65,  209 => 62,  207 => 61,  201 => 57,  194 => 56,  181 => 53,  175 => 52,  171 => 51,  166 => 50,  163 => 49,  156 => 47,  153 => 46,  150 => 45,  146 => 43,  142 => 42,  139 => 41,  131 => 40,  122 => 38,  117 => 35,  115 => 34,  112 => 33,  109 => 32,  107 => 31,  104 => 30,  88 => 27,  82 => 26,  78 => 25,  73 => 24,  70 => 23,  67 => 21,  58 => 17,  51 => 15,  48 => 14,  42 => 13,  38 => 12,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
