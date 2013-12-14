<?php

/* views/main/guestbook.html.twig */
class __TwigTemplate_bf8f3ed472d580818aaa81a7a6396fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
        .blog-post {
            background: #ccc;
            padding: 1em;

            border-radius: 1em 1em 1em 0;
        }
    </style>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <section>
        <div class=\"hero-unit header-small\" id=\"header\">
            <h1>Strawberry <span style=\"color: #FAA;\">PHP</span></h1>
            <h4>Guestbook</h4>
        </div>
        <div class=\"row\">
            <div class=\"span6\">
                <article>
                    <form method=\"post\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("guestbook/create")), "html", null, true);
        echo "\">
                        <label for=\"form-text\" >";
        // line 24
        echo twig_escape_filter($this->env, i18n("content"), "html", null, true);
        echo "</label>
                        <textarea id=\"form-text\" name=\"text\" required=\"\"></textarea>
                        <span class=\"help-block\"></span>
                        <label>";
        // line 27
        echo twig_escape_filter($this->env, i18n("author"), "html", null, true);
        echo "</label>
                        <input name=\"author\" required=\"\">
                        <span class=\"help-block\"></span>
                        <button class=\"btn btn-primary\" type=\"submit\">Ok</button>
                        <button class=\"btn\" type=\"reset\">";
        // line 31
        echo twig_escape_filter($this->env, i18n("cancel"), "html", null, true);
        echo "</button>
                        <a class=\"btn btn-danger\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("guestbook/delete")), "html", null, true);
        echo "\">Clean guestbook</a>
                    </form>
                </article>
            </div>
            <div class=\"span6\">
                <article>
        ";
        // line 39
        echo "        ";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "                        <p class=\"blog-post\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "text"), "html", null, true);
            echo "</p>
                        <small># ";
            // line 41
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "author"), "html", null, true);
            echo "</small>
                        <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "                    </article>
                </div>
            </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "views/main/guestbook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 44,  97 => 41,  91 => 40,  85 => 39,  76 => 32,  72 => 31,  65 => 27,  59 => 24,  55 => 23,  45 => 15,  42 => 14,  30 => 3,  27 => 2,);
    }
}
