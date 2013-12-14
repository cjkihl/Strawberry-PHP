<?php

/* views/content/page.html.twig */
class __TwigTemplate_785f7456e8869e68c4d8fd3957c9d4be extends Twig_Template
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
        <div class=\"span6 offset3\">
            <h2>";
        // line 16
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
        echo "</h2>
            <p>";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($_page_, "updated"))) ? (("Skapades: " . twig_date_format_filter($this->env, $this->getAttribute($_page_, "created"), "Y-m-d"))) : (("Updaterades: " . twig_date_format_filter($this->env, $this->getAttribute($_page_, "updated"), "Y-m-d")))), "html", null, true);
        echo "</p>
             
            ";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "data");
        echo "
            <p>";
        // line 20
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_, "author"), "html", null, true);
        echo "</p>
        </div>
    </div>   
</section>

";
    }

    public function getTemplateName()
    {
        return "views/content/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  73 => 19,  67 => 17,  62 => 16,  55 => 11,  48 => 10,  44 => 9,  37 => 7,  34 => 6,  29 => 3,  26 => 2,);
    }
}
