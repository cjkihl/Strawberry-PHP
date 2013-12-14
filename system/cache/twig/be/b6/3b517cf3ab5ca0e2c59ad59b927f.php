<?php

/* views/user/registration.html.twig */
class __TwigTemplate_beb63b517cf3ab5ca0e2c59ad59b927f extends Twig_Template
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
            ";
        // line 6
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "message")) {
            // line 7
            echo "                <div class=\"alert alert-info\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "message"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 9
        echo "            ";
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "error")) {
            // line 10
            echo "                <div class=\"alert\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "error"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 11
        echo "  
        </div>
    </div>
    <div class=\"row\">
        <div class=\"span4\">
            ";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_form_, "render"), "html", null, true);
        echo "
        </div>
        <div class=\"span4\">
            <table style=\"border: 1px solid #ccc; margin-left: 1em;\" class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Id</th><th>";
        // line 22
        echo twig_escape_filter($this->env, i18n("email"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, i18n("password"), "html", null, true);
        echo "</th>
                        <th>";
        // line 23
        echo twig_escape_filter($this->env, i18n("name"), "html", null, true);
        echo "</th><th>Salt</th>
                        <th>";
        // line 24
        echo twig_escape_filter($this->env, i18n("usergroup"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, i18n("locked"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "                        <tr>
                            <td>";
            // line 30
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
            echo "</td><td>";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
            echo "</td><td><button onclick=\"alert('";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "password"), "html", null, true);
            echo "')\" class=\"btn\">sha512</a></td>
                            <td>";
            // line 31
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "name"), "html", null, true);
            echo "</td><td><button onclick=\"alert('";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "salt"), "html", null, true);
            echo "')\" class=\"btn\">sha512</a></td>
                        <td>";
            // line 32
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "groupname"), "html", null, true);
            echo "</td><td>";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "locked"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 33
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("user/register/delete/" . $this->getAttribute($_user_, "id")))), "html", null, true);
            echo "\" class=\"btn btn-warning\"><i class=\"icon-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>   
</section>

";
    }

    public function getTemplateName()
    {
        return "views/user/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 36,  126 => 33,  118 => 32,  110 => 31,  99 => 30,  96 => 29,  91 => 28,  82 => 24,  78 => 23,  72 => 22,  62 => 16,  55 => 11,  48 => 10,  44 => 9,  37 => 7,  34 => 6,  29 => 3,  26 => 2,);
    }
}
