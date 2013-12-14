<?php

/* views/main/error.html.twig */
class __TwigTemplate_4bb69d1787bb2b76a3054b9444b6d410 extends Twig_Template
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
        <div class=\"span8 offset2\">
            <h2>";
        // line 6
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h2>
            <p>";
        // line 7
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $_message_, "html", null, true);
        echo "</p>
            <p><a class=\"btn btn-primary\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, i18n("go_to_firstpage"), "html", null, true);
        echo "</a></p>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "views/main/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  39 => 7,  34 => 6,  29 => 3,  26 => 2,);
    }
}
