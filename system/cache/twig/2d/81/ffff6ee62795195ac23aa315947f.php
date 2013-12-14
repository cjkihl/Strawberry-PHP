<?php

/* views/welcome.html.twig */
class __TwigTemplate_2d81ffff6ee62795195ac23aa315947f extends Twig_Template
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
                    <h2>Vem är jag?</h2>
                    <p>Jag heter Carl-Johan Kihl och har sen jag varit liten älskat programmering. Har skrivit mycket skoj i java och byggt lite websidor och grejer tidigare i PHP.
\t\t\t\t\t\tJag jobbar som showartist för Ving och reser runt i Europa och showar på Sunwing hotell. Just nu bor jag på Cypern sen April men har innan dess rest runt som showartist och jobbat i Turkiet, Teneriffa, Gran Canaraia och Mallorca
\t\t\t\t\t\tPå fritiden gillar jag att dyka, träna, och programmera. Jag gillar OO programmering bäst och mina favorit ramverk i PHP är Codeigniter och Symphony</p>
                    <p><a class=\"btn btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("me")), "html", null, true);
        echo "\">Läs mer &raquo;</a></p>
                    </article>
                </div>

                <div class=\"span4\">
                    <article>
                    <h2>Funktionalitet</h2>
                    <ul>
                    <li>Dynamisk HTTP-Routing och SEO (Sökmotor-optimering)</li>
                    <li>MVC Struktur</li>
                    <li>Logiskt flöde</li>
                    <li>Dynamiska modeller med PHP-active record</li>
                    <li>Smart abstraktion av http-response/http-request</li>
                    <li>Stöd för Templates med Twig!</li>
                    <li>Och mycket mer kommer att komma!</li>
                    </ul>
                    <p><a class=\"btn btn-primary\" href=\"";
        // line 36
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
        return array (  66 => 36,  47 => 20,  29 => 4,  26 => 3,);
    }
}
