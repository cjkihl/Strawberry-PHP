<?php

/* views/menu/editor.html.twig */
class __TwigTemplate_add98d5df03730f5b2ce0ef8a24e3825 extends Twig_Template
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
        // line 2
        $context["navbar"] = call_user_func_array($this->env->getFunction('content')->getCallable(), array("models/navbar.json"));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<script type =\"text/javascript\" src=\"";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "js_url"), "html", null, true);
        echo "/vendor/jsoneditor-min.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 5
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "css_url"), "html", null, true);
        echo "/jsoneditor-min.css\">
<script type=\"text/javascript\" >
    \$(document).ready(function(){
        var container = document.getElementById('jsoneditor'),
        savebutton = \$('#btn-save'),
        options = {
          mode: 'tree',
          name: 'Menu',
          change: function() {
              savebutton.prop('disabled',false).html('Save');
          },
          search: false,
          error: function (err) {
            alert(err.toString());
          }
        },
        json = \$.parseJSON('";
        // line 21
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo twig_jsonencode_filter($_navbar_);
        echo "'),
        editor = new jsoneditor.JSONEditor(container, options, json);
        savebutton.prop('disabled',true).html('Saved');

        savebutton.click(function (){
            \$.ajax({
                url:'";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("menu/save")), "html", null, true);
        echo "',
                data:{'menu':editor.getText()},
                dataType:'json',
                type:'post',
                beforeSend: function(){ savebutton.prop('disabled',true).html('Saving..')},
                error: function(){ savebutton.prop('disabled',false).html('Save'); alert('En error occured: Try to save again..')},
                success: function(data) {
                if(data.error==undefined) {
                    savebutton.html('Saved');
                    window.location = '";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array()), "html", null, true);
        echo "'
                } else {
                    alert(data.error);
                    savebutton.prop('disabled',false).html('Save');
                }
                \$('#message-bar').html(data.result);
            }
            });
            
        });
    });

</script>
";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "<section>
    <div class=\"row\">
        <div id =\"message-bar\" class=\"span8 offset2\">
            ";
        // line 54
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "message")) {
            // line 55
            echo "                <div class=\"alert alert-info\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "message"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 57
        echo "            ";
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "error")) {
            // line 58
            echo "                <div class=\"alert\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "error"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 59
        echo "  
        </div>
    </div>
    <div class=\"row\">
        <div class=\"span8 offset2\">
            <h2>Menu Editor</h2>
            <div id=\"jsoneditor\"></div>
            <form id=\"menu-form\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("menu/save")), "html", null, true);
        echo "\" method=\"post\"></form>
                
            
            <button id=\"btn-save\" class=\"btn btn-primary\"></button>
        </div>
    </div>   
</section>
";
    }

    public function getTemplateName()
    {
        return "views/menu/editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 66,  127 => 59,  120 => 58,  116 => 57,  109 => 55,  106 => 54,  101 => 51,  98 => 50,  80 => 36,  68 => 27,  58 => 21,  38 => 5,  32 => 4,  29 => 3,  24 => 2,);
    }
}
