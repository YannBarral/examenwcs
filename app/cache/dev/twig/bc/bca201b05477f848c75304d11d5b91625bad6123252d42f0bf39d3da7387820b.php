<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4be6d99f3934f83ac3055fa575f18fa1050eba5c3404627f252a036229fb694c extends Twig_Template
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
        $__internal_f3a4c63222ea3cd97a0a3b9afdc9526ba151af74fb878fd39145648db9b2c9f2 = $this->env->getExtension("native_profiler");
        $__internal_f3a4c63222ea3cd97a0a3b9afdc9526ba151af74fb878fd39145648db9b2c9f2->enter($__internal_f3a4c63222ea3cd97a0a3b9afdc9526ba151af74fb878fd39145648db9b2c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f3a4c63222ea3cd97a0a3b9afdc9526ba151af74fb878fd39145648db9b2c9f2->leave($__internal_f3a4c63222ea3cd97a0a3b9afdc9526ba151af74fb878fd39145648db9b2c9f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
