<?php

/* views/main/welcome.html.twig */
class __TwigTemplate_e3d7f219b8a4a5dca5ab797cd217c693 extends Twig_Template
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

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "<style type=\"text/css\">
        h4 img { width:32px;}
</style>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "<section>
            <div class=\"hero-unit\" id=\"header\">
                <h1>Strawberry <span style=\"color: #FAA;\">PHP</span></h1>
                <h4>Sweet strawberry-powered mvc-framework for PHP</h4>
                <p><a class=\"btn btn-primary btn-large\" href=\"https://github.com/caki0915/StrawberryPHP\">Get the latest release on Github &raquo;</a></p>
            </div>

           
            <div class=\"row\">
                <div class=\"span4\">
                    <article>
                    <h2>Congratulations for installing Strawberry PHP!</h2>
                    <p>Strawberry PHP is PHP-framework and MVC for creating 
                        web-applications and websites in an instant. 
                        Strawberry PHP uses a flexible yet fast framework that
                    assist you in the procces by making adapters to common functionality for
                    making requests and responses in HTML and PHP. It have never been easier to 
                    make AJAX-rpc requests, force downloads, read HTTP-headers and use HTTP-Authorization!</p>
                    <p>Strawberry PHP also comes bundled with a lot of modules for creating forms, 
                        authorization usergroups and web-mangement, Content- and blog- mangement and much more!</p>
                    </article>
                </div>

                <div class=\"span4\">
                    <article>
                    <h2>Features:</h2>
                    <ul>
                    <li>Dynamic HTTP-Routing och SEO (Sökmotor-optimering)</li>
                    <li>Expandlable MVC structure</li>
                    <li>Logical flow and abstraction http-request and responses</li>
                    <li>Dynamic models with PHP-active record!</li>
                    <li>Internationalisation(i18n) support for creating multi-language applications!!</li>
                    <li>Support for easy templates med Twig template engine!</li>
                    <li>Authorization and Security module with usergroups and permissions</li>
                    <li>Theme-rendering module for styling and making custom templates easier</li>
                    <li>Content-module for create/read/update and delete content and blogs to you application</li>
                    <li>And much more!</li>
                    </ul>
                    <p><a class=\"btn btn-primary\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("test")), "html", null, true);
        echo "\">Try the testbed! &raquo;</a></p>
                    </article>
                </div>
                <div class=\"span4\">
                    <article>
                    <h3>So what's the next step?</h3>
                    <h4><img src=\"";
        // line 61
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Create your account!</h4>
                    <p>Login with the default account described in the installer
                    and create your own admin-account. Then you can start exploring
                    the different modules in Strawberry PHP.</p>
                    <h4><img src=\"";
        // line 65
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Start creating pages!</h4>
                    <p>With the content module you can create you own pages and 
                        bloggposts with TinyMCE an easy-to-use WYSIWYG-editor!</p>
                    <h4><img src=\"";
        // line 68
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Create your own menues!</h4>
                    <p>With the menu-module you can create you own menu-system
                    with optional dropdowns. Now you can make nice links to your
                     freshly created pages!</p>
                    <h4><img src=\"";
        // line 72
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Make you own style!</h4>
                    <p>With the theme module you can style Strawberry PHP as you want it
                    and make different themes so each user can choose their own favourite theme.
                    Start by exprimenting with the default theme-template <b>Espacio</b></p>
                    <h4><img src=\"";
        // line 76
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/strawberry-icon.png\">Design with templates!</h4>
                    <p>Strawberry PHP uses the popular Template-rendering engine
                     TWIG. Go to TWIGS website and learn the power of writing effective
                    templates. Start by changing the template of the firstpage found in:
                    <b>views/main/welcome.html.twig</b></p>
                    </article>
               </div>
            </div>
</section>
            <hr>
";
    }

    public function getTemplateName()
    {
        return "views/main/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 76,  112 => 72,  104 => 68,  97 => 65,  89 => 61,  80 => 55,  40 => 17,  37 => 16,  30 => 9,  27 => 8,);
    }
}
