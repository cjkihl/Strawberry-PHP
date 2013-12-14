<?php

/* views/content/all.html.twig */
class __TwigTemplate_9bbedb85660a9b7b1c11d63c8f38f12d extends Twig_Template
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
            <div style=\"margin-left:1em;\">
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
            echo "                <div class=\"alert\">";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "error"), "html", null, true);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
            ";
        }
        // line 12
        echo "  
            </div>     
        </div>
    </div>
    <div class=\"row\">
        <div class=\"span11\">
            <table  style=\"border: 1px solid #ccc; margin-left: 1em; width: 100%; \" class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Id</th><th>Alias</th><th>Typ</th>
                        <th>Titel</th><th>Author</th>
                        <th>Skapad</th><th>Updaterad</th><th>Borttagen</th>
                        <th><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("content/edit")), "html", null, true);
        echo "\" class=\"btn btn-info\">Ny sida <i class=\"icon-star\"></i></a> </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_pages_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 29
            echo "                        <tr style=\"height: 1em;\">
                            <td>";
            // line 30
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "id"), "html", null, true);
            echo "</td><td><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("content/page/" . $this->getAttribute($_page_, "key")))), "html", null, true);
            echo "\" >";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "key"), "html", null, true);
            echo "</a></td><td>";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "type"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
            echo "</td><td>";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "author"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_page_, "created"), "m/d - y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($_page_, "updated"))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($_page_, "updated"), "m/d - y"))), "html", null, true);
            echo "</td>
                        
                        <td>";
            // line 35
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($_page_, "deleted"))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($_page_, "deleted"), "m/d - y"))), "html", null, true);
            echo "</td>
                        <td>
                        <a href=\"";
            // line 37
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("content/edit/" . $this->getAttribute($_page_, "id")))), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"icon-pencil\"></i></a>    
                        ";
            // line 38
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (twig_test_empty($this->getAttribute($_page_, "deleted"))) {
                echo "       
                        <a href=\"";
                // line 39
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("content/all/unpublish/" . $this->getAttribute($_page_, "id")))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"icon-ban-circle\"></i></a>
                        ";
            } else {
                // line 41
                echo "                        <a href=\"";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("content/all/publish/" . $this->getAttribute($_page_, "id")))), "html", null, true);
                echo "\" class=\"btn \"><i class=\"icon-ok-circle\"></i></a>      
                        ";
            }
            // line 42
            echo "        
                        <a href=\"";
            // line 43
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("content/all/delete/" . $this->getAttribute($_page_, "id")))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"icon-trash\"></i></a>
                        </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                </tbody>
            </table>
        </div>
    </div>   
</section>

";
    }

    public function getTemplateName()
    {
        return "views/content/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  150 => 43,  147 => 42,  140 => 41,  134 => 39,  129 => 38,  124 => 37,  118 => 35,  112 => 33,  107 => 32,  99 => 31,  85 => 30,  82 => 29,  77 => 28,  70 => 24,  56 => 12,  49 => 11,  45 => 10,  38 => 8,  35 => 7,  29 => 3,  26 => 2,);
    }
}
