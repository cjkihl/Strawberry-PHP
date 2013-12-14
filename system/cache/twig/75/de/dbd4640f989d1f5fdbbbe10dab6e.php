<?php

/* views/me.html.twig */
class __TwigTemplate_75dedbd4640f989d1f5fdbbbe10dab6e extends Twig_Template
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
    <div class=\"row\">
        <div class=\"span10 offset1\">
            <article>
                <h1>Vem är jag?</h1>
                <p> Jag heter Carl-Johan Kihl och har sen jag varit liten Älskat programmering. Har skrivit mycket skoj i java och byggt lite
                    websidor och grejer tidigare i PHP.
                </p>
                <p>Jag jobbar som showartist för Ving och reser runt i Europa och showar på Sunwing-hotell.
                    Just nu bor jag på Cypern sen April men har innan dess rest runt som showartist och jobbat 
                    i Turkiet, Teneriffa, Gran Canaraia och Mallorca
                </p>
                <p>På fritiden gillar jag att dyka, träna, och programmera. Jag gillar OO programmering bäst 
                    och mitt favorit ramverk i PHP är Symphony.
                </p>

                <p> <a href='http://www.carljohankihl.com'>Här är min hemsida (www.carljohankihl.com)</a> 
                    Jag använder ett Content Mangement System (Joomla) för hemsidan.
                    Gå gärna in och lyssna på min musik :) 
                </p>
                <img src='";
        // line 24
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/me001.jpg' alt='Me on Cyprus' style=\"width:40%; float:left;\" class='photo'>
                <img src='";
        // line 25
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "img_url"), "html", null, true);
        echo "/me002.jpg' alt='Diving on Zenobia' style=\"width:40%; float:left;\" class='photo'>
            </article>
        </div>
    </div>
</section>   
";
    }

    public function getTemplateName()
    {
        return "views/me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  51 => 24,  29 => 4,  26 => 3,);
    }
}
