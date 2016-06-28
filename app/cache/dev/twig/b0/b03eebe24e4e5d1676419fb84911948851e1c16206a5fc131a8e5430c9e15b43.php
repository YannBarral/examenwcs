<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_671122f0e9125abb82dbce0167ffabf1bf58c79056065df031b884fbf07efc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee6a9dd556bdba5fad3eafb6f85df2ac3485ae2078ade5c299fbb241292b745 = $this->env->getExtension("native_profiler");
        $__internal_2ee6a9dd556bdba5fad3eafb6f85df2ac3485ae2078ade5c299fbb241292b745->enter($__internal_2ee6a9dd556bdba5fad3eafb6f85df2ac3485ae2078ade5c299fbb241292b745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2ee6a9dd556bdba5fad3eafb6f85df2ac3485ae2078ade5c299fbb241292b745->leave($__internal_2ee6a9dd556bdba5fad3eafb6f85df2ac3485ae2078ade5c299fbb241292b745_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
