<?php

/* views/welcome.html.twig */
class __TwigTemplate_f14fd0523000c34019c87646a1e4cb8c extends Twig_Template
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
            <div class=\"hero-unit\" id=\"header\">
                <h1>Strawberry <span style=\"color: #FAA;\">PHP</span></h1>
                <h4>Sweet strawberry-powered mvc-framework for PHP</h4>
                <p><a class=\"btn btn-primary btn-large\" href=\"https://github.com/caki0915/StrawberryPHP\">Ladda ner v 0.1 från Github &raquo;</a></p>
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
                    <p><a class=\"btn btn-primary\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("me")), "html", null, true);
        echo "\">Läs mer &raquo;</a></p>
                    </article>
                </div>

                <div class=\"span4\">
                    <article>
                    <h2>Functionality</h2>
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
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("test")), "html", null, true);
        echo "\">Pröva i testbed! &raquo;</a></p>
                    </article>
                </div>
                <div class=\"span4\">
                    <article>
                    <h2>Vad är ett MVC-ramverk?</h2>
                    <p>Model-View-Controller (MVC) är ett designmönster som används inom systemutveckling. I komplexa datorapplikationer kan det vara lämpligt att separera data (Model) och presentation (View) så att inte datahanteringen får konsekvenser på grund av förändringar i presentationslagret, samt att data kan omorganiseras utan behöva ändra i presentationslagret. MVC löser detta problem genom att separera data och affärslogiken från presentationen och användarinteraktionen, genom att introducera en mellanliggande komponent: Controllern.</p>
                    <p><a class=\"btn btn-primary\" href=\"http://sv.wikipedia.org/wiki/Model-View-Controller\">Läs mer &raquo;</a></p>
                    </article>
               </div>
            </div>
</section>
            <hr>
";
    }

    public function getTemplateName()
    {
        return "views/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 43,  51 => 24,  29 => 4,  26 => 3,);
    }
}
