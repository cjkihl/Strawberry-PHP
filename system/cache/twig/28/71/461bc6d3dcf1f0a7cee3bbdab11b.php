<?php

/* user/login.html.twig */
class __TwigTemplate_2871461bc6d3dcf1f0a7cee3bbdab11b extends Twig_Template
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
        <div class=\"span4 offset3\">
            
            ";
        // line 7
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "message")) {
            // line 8
            echo "                <div class=\"alert alert-info\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "message"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 10
        echo "            ";
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        if ($this->getAttribute($_flash_, "error")) {
            // line 11
            echo "                <div class=\"alert alert-danger\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "error"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 12
        echo "  
            
            ";
        // line 14
        $context["user"] = call_user_func_array($this->env->getFunction('logged_in_user')->getCallable(), array());
        // line 15
        echo "                                
            ";
        // line 16
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($_user_) {
            // line 17
            echo "                <article>
                <h1>";
            // line 18
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "name"), "html", null, true);
            echo "</h1>
                <h4>";
            // line 19
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
            echo "</h4>
                <p>Sedan: ";
            // line 20
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "created"), "html", null, true);
            echo "</p>
                ";
            // line 21
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "permission", array(0 => "User"), "method")) {
                // line 22
                echo "                <div class=\"alert alert-success\">Tillgång till användargruppen User</div>
                ";
            } else {
                // line 24
                echo "                <div class=\"alert alert-error\">Inte tillgång till användargruppen User</div>
                ";
            }
            // line 26
            echo "                
                ";
            // line 27
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "permission", array(0 => "Writer"), "method")) {
                // line 28
                echo "                <div class=\"alert alert-success\">Tillgång till användargruppen Writer</div>
                ";
            } else {
                // line 30
                echo "                <div class=\"alert alert-error\">Inte tillgång till användargruppen Writer</div>
                ";
            }
            // line 32
            echo "                
                ";
            // line 33
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "permission", array(0 => "Admin"), "method")) {
                // line 34
                echo "                <div class=\"alert alert-success\">Tillgång till användargruppen Admin</div>
                ";
            } else {
                // line 36
                echo "                <div class=\"alert alert-error\">Inte tillgång till användargruppen Admin</div>
                ";
            }
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("user/logout")), "html", null, true);
            echo "\" class=\"btn btn-primary\">Logga ut</a>
                </article>
            ";
        } else {
            // line 41
            echo "            <form class=\"form-horizontal\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("user/login/process")), "html", null, true);
            echo "\">
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"input-email\">Email</label>
                    <div class=\"controls\">
                        <input type=\"email\" name=\"email\" id=\"input-email\" placeholder=\"Email\" required>
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"input-password\">Lösenord</label>
                    <div class=\"controls\">
                        <input type=\"password\" name=\"password\" id=\"input-password\" placeholder=\"Lösenord\" required>
                    </div>
                </div>
                    
                <div class=\"control-group\">
                    <div class=\"controls\">   
                    <button type=\"submit\" class=\"btn btn-primary\">Logga in</button>
                    </div>
                </div>
            </form>
            ";
        }
        // line 62
        echo "            
        </div>
       
    </div>   
</section>

";
    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  132 => 41,  125 => 38,  121 => 36,  117 => 34,  114 => 33,  111 => 32,  107 => 30,  103 => 28,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  86 => 21,  81 => 20,  76 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  56 => 12,  49 => 11,  45 => 10,  38 => 8,  35 => 7,  29 => 3,  26 => 2,);
    }
}
