<?php

/* views/themes/edit.html.twig */
class __TwigTemplate_464efeebf2c27a601385b28bf450f747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "<link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" href=\"";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/colorpicker/css/colorpicker.css\" />
<script type=\"text/javascript\" src=\"";
        // line 4
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/colorpicker/colorpicker.js\"></script>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<section>
    <div class=\"row\">
        <div class=\"span11\">
            ";
        // line 10
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "message")) {
            // line 11
            echo "                <div class=\"alert alert-info\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "message"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 13
        echo "            ";
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "error")) {
            // line 14
            echo "                <div class=\"alert\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "error"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 15
        echo "  
        </div>
    </div>
    <div class=\"row\">
        <div class=\"span8 offset2\">
            <h2>Redigera tema</h2>
            ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_form_, "render"), "html", null, true);
        echo "
        </div>
    </div>   
</section>

";
    }

    // line 27
    public function block_scripts($context, array $blocks = array())
    {
        // line 28
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/colorpicker/colorpicker.js\"></script>
<script type=\"text/javascript\">
    \$(\"input[type='color']\").ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
\t\t\$(el).val('#' + hex);
\t\t\$(el).ColorPickerHide();
\t},
\tonBeforeShow: function () {
\t\t\$(this).ColorPickerSetColor(this.value);
\t}}); 
</script>
";
    }

    public function getTemplateName()
    {
        return "views/themes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  92 => 27,  81 => 21,  73 => 15,  66 => 14,  62 => 13,  55 => 11,  52 => 10,  47 => 7,  44 => 6,  37 => 4,  31 => 3,  28 => 2,);
    }
}
