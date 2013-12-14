<?php

/* views/themes/all.html.twig */
class __TwigTemplate_e78ff827997961004e876246130b1c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "theme"), "template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section>
    <div class=\"row\">
        <div class=\"span11\">
            
            <div style=\"margin-left:1em;\">
            ";
        // line 8
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "message")) {
            // line 9
            echo "                <div class=\"alert alert-info\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "message"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 11
        echo "            ";
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "error")) {
            // line 12
            echo "                <div class=\"alert\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "error"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 13
        echo "  
            </div>     
        </div>
    </div>
    <div class=\"row\">
        <div class=\"span11\">
            <table  style=\"border: 1px solid #ccc; margin-left: 1em; width: 100%; \" class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Id</th><th>";
        // line 22
        echo twig_escape_filter($this->env, i18n("type"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, i18n("name"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, i18n("created"), "html", null, true);
        echo "</th><th>Standard</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context["user"] = call_user_func_array($this->env->getFunction('logged_in_user')->getCallable(), array());
        // line 27
        echo "                    ";
        if (isset($context["themes"])) { $_themes_ = $context["themes"]; } else { $_themes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_themes_);
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 28
            echo "                        <tr style=\"height: 1em;\">
                            <td>";
            // line 29
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "id"), "html", null, true);
            echo "</td><td>";
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "key"), "html", null, true);
            echo "</td><td>";
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "name"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_theme_, "created"), "m/d - y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            if (isset($context["default_theme"])) { $_default_theme_ = $context["default_theme"]; } else { $_default_theme_ = null; }
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo ((($this->getAttribute($_default_theme_, "id") == $this->getAttribute($_theme_, "id"))) ? ("Yes") : (""));
            echo "</td>
                            <td>
                            <a href=\"";
            // line 33
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("themes/all/select/" . $this->getAttribute($_theme_, "id")))), "html", null, true);
            echo "\" class=\"btn\"><i class=\"icon-heart\"></i></a>
                            ";
            // line 34
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "permission", array(0 => "Admin"), "method")) {
                // line 35
                echo "                            <a href=\"";
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("themes/edit/" . $this->getAttribute($_theme_, "id")))), "html", null, true);
                echo "\" class=\"btn btn-success\"><i class=\"icon-pencil\"></i></a>
                            <a href=\"";
                // line 36
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("themes/all/copy/" . $this->getAttribute($_theme_, "id")))), "html", null, true);
                echo "\" class=\"btn\"><i class=\"icon-plus\"></i></a>
                            ";
                // line 37
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                if ((!$this->getAttribute($_theme_, "locked"))) {
                    // line 38
                    echo "                            <a href=\"";
                    if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("themes/all/delete/" . $this->getAttribute($_theme_, "id")))), "html", null, true);
                    echo "\" class=\"btn btn-danger\"><i class=\"icon-trash\"></i></a>
                            ";
                }
                // line 40
                echo "                            ";
            }
            // line 41
            echo "                            </td> 
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "                </tbody>
            </table>
        </div>
    </div>   
</section>

";
    }

    public function getTemplateName()
    {
        return "views/themes/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 44,  145 => 41,  142 => 40,  135 => 38,  132 => 37,  127 => 36,  121 => 35,  118 => 34,  113 => 33,  106 => 31,  101 => 30,  90 => 29,  87 => 28,  81 => 27,  79 => 26,  68 => 22,  57 => 13,  50 => 12,  46 => 11,  39 => 9,  36 => 8,  29 => 3,  26 => 2,);
    }
}
