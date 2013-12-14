<?php

/* views/content/page_not_found.html.twig */
class __TwigTemplate_b48a28ea0daa875e8310255bee20b400 extends Twig_Template
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
        <div class=\"span6 offset3\">
            <h2>Sidan hittades inte</h2>
            <p><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("content/blog")), "html", null, true);
        echo "\">Gå till bloggen</a></p>
            <p><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("")), "html", null, true);
        echo "\">Gå till Startsidan</a></p>
        </div>
    </div>   
</section>

";
    }

    public function getTemplateName()
    {
        return "views/content/page_not_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  29 => 3,  26 => 2,);
    }
}
