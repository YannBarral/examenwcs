<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_073edfa4b1d5a3406bc938e8635547990e323cd3812a3c16ace89455c0b7fb1c extends Twig_Template
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
        $__internal_71a7403ba7656a4f5429f0fa39c3d37e416b06e63808da37bec19db04064d921 = $this->env->getExtension("native_profiler");
        $__internal_71a7403ba7656a4f5429f0fa39c3d37e416b06e63808da37bec19db04064d921->enter($__internal_71a7403ba7656a4f5429f0fa39c3d37e416b06e63808da37bec19db04064d921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_71a7403ba7656a4f5429f0fa39c3d37e416b06e63808da37bec19db04064d921->leave($__internal_71a7403ba7656a4f5429f0fa39c3d37e416b06e63808da37bec19db04064d921_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
