<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cbf4b0f8f90c2b438e83d7c8024d9c40dd2a5abd994f5108236b49f09fbd132f extends Twig_Template
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
        $__internal_4da21a06d4e8fd11480e36fa6261fe84008ab7dc6dd5fd78bb5ff3a5a25ce894 = $this->env->getExtension("native_profiler");
        $__internal_4da21a06d4e8fd11480e36fa6261fe84008ab7dc6dd5fd78bb5ff3a5a25ce894->enter($__internal_4da21a06d4e8fd11480e36fa6261fe84008ab7dc6dd5fd78bb5ff3a5a25ce894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4da21a06d4e8fd11480e36fa6261fe84008ab7dc6dd5fd78bb5ff3a5a25ce894->leave($__internal_4da21a06d4e8fd11480e36fa6261fe84008ab7dc6dd5fd78bb5ff3a5a25ce894_prof);

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
