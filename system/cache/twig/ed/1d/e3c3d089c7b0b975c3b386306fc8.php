<?php

/* views/content/blog.html.twig */
class __TwigTemplate_ed1de3c3d089c7b0b975c3b386306fc8 extends Twig_Template
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
        <div class=\"span6 offset1\">
            <h1>Välkommen till bloggen!</h1>
            ";
        // line 18
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blog_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "            <h2>";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
            echo "</h2>
            <p>";
            // line 20
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_page_, "created"), "Y-m-d H:i"), "html", null, true);
            echo "</p>
             
            ";
            // line 22
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "data");
            echo "
            <p>";
            // line 23
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "author"), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "        </div>
            <div class=\"span4\">
                <ul>
                ";
        // line 28
        if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blog_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 29
            echo "                        <li><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("content/page/" . $this->getAttribute($_page_, "key")))), "html", null, true);
            echo "\">";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
            echo "</a></li>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo " 
                </ul>
            </div>
    </div>
    
</section>

";
    }

    public function getTemplateName()
    {
        return "views/content/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  105 => 29,  100 => 28,  95 => 25,  86 => 23,  81 => 22,  75 => 20,  69 => 19,  64 => 18,  55 => 11,  48 => 10,  44 => 9,  37 => 7,  34 => 6,  29 => 3,  26 => 2,);
    }
}
