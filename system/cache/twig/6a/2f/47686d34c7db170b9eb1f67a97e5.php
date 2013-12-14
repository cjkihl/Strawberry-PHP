<?php

/* views/main/testbed.html.twig */
class __TwigTemplate_6a2f47686d34c7db170b9eb1f67a97e5 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section>

    <div class=\"hero-unit header-small\" id=\"header\">
        <h1>Strawberry <span style=\"color: #FAA;\">PHP</span></h1>
        <h4>Take a look under the hood...</h4>
    </div>

    <div class=\"row\">
        <div class=\"span6\">
            <article>
                <h1> <img src=\"";
        // line 14
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Request:</h1>
                <h4> To the controller</h4>
                <table class=\"table table-hover\">
                    <tr><td>Action</td><td>";
        // line 17
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "action"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Controller</td><td>";
        // line 18
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "controller"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Method</td><td>";
        // line 19
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "method"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Params</td><td>";
        // line 20
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_request_, "params"), "|"), "html", null, true);
        echo "</td></tr>
                    <tr><td>GET variables</td><td>";
        // line 21
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_request_, "get"), "|"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Ajax</td><td>";
        // line 22
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo (($this->getAttribute($_request_, "isAjax")) ? ("yes") : ("no"));
        echo "</td></tr>
                    <tr><td>Language</td><td>";
        // line 23
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "lang"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Encoding</td><td>";
        // line 24
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "encoding"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Uri</td><td>";
        // line 25
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "uri"), "html", null, true);
        echo "</td></tr>
                    <tr><td>Ip</td><td>";
        // line 26
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "ip"), "html", null, true);
        echo "</td></tr>
                    <tr><td>HTTP User</td><td>";
        // line 27
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "authUser"), "html", null, true);
        echo "</td></tr>
                    <tr><td>HTTP Password</td><td>";
        // line 28
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "authPassword"), "html", null, true);
        echo "</td></tr>
                    <tr><td>User Agent</td><td>";
        // line 29
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "userAgent"), "html", null, true);
        echo "</td></tr>
                    <tr><td>If modified since</td><td>";
        // line 30
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "ifModifiedSince"), "html", null, true);
        echo "</td></tr>
                </table>
            </article>
        </div>
        <div class=\"span6\">
            <article>
                <div class=\"well2\">
                    <h1><img src=\"";
        // line 37
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Response:</h1>
                    <h4>Data from the controller to the browser</h4>
                    <table class=\"table table-hover\">
\t\t\t";
        // line 40
        if (isset($context["response"])) { $_response_ = $context["response"]; } else { $_response_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_response_, "headers"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 41
            echo "                            <tr><td>";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $_key_, "html", null, true);
            echo "</td><td>";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $_val_, "html", null, true);
            echo "</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "                            <tr><td>Statuscode</td><td>";
        if (isset($context["response"])) { $_response_ = $context["response"]; } else { $_response_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_response_, "status"), "html", null, true);
        echo "</td></tr>
                            <tr><td>Force donwload:</td><td><a class=\"btn btn-primary pull-right\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("test/download/my_file.txt")), "html", null, true);
        echo "\"> Download</a></td></tr>
                            <tr><td> Response with JSON-rpc data</td><td><a class=\"btn btn-success pull-right\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("test/json")), "html", null, true);
        echo "\"> Get JSON</a></td></tr>
                            <tr><td>Force update (clean old cache):</td><td><a class=\"btn btn-warning pull-right\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("test/nochache")), "html", null, true);
        echo "\"> No Chache</a></td></tr>
                            <tr><th>Response with different headers</th></tr>
                        ";
        // line 48
        if (isset($context["response"])) { $_response_ = $context["response"]; } else { $_response_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_response_, "messages"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 49
            echo "                                    <tr><td>";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $_val_, "html", null, true);
            echo "</td>
                                        <td><a class=\"btn ";
            // line 50
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo (((($_key_ > 199) && ($_key_ < 300))) ? ("btn-success") : ((((($_key_ > 399) && ($_key_ < 500))) ? ("btn-warning") : (((($_key_ > 499)) ? ("btn-danger") : (""))))));
            echo " pull-right\" href=\"";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("test/status/" . $_key_))), "html", null, true);
            echo "\">";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $_key_, "html", null, true);
            echo "</a></td>
                                    </tr>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "                                </table>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
";
    }

    public function getTemplateName()
    {
        return "views/main/testbed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 53,  179 => 50,  173 => 49,  168 => 48,  163 => 46,  159 => 45,  155 => 44,  149 => 43,  136 => 41,  131 => 40,  124 => 37,  113 => 30,  108 => 29,  103 => 28,  98 => 27,  93 => 26,  88 => 25,  83 => 24,  78 => 23,  73 => 22,  68 => 21,  63 => 20,  58 => 19,  53 => 18,  48 => 17,  41 => 14,  29 => 4,  26 => 3,);
    }
}
