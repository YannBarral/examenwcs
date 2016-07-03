<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35abea544c7bfe56e2ed6693bcff44f913692bcab24913cf3e5691bd497cd612 extends Twig_Template
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
        $__internal_c57554926cfacde5e94c9920e1cb38be2aaaf12cf74c4231efbadff5823df8fd = $this->env->getExtension("native_profiler");
        $__internal_c57554926cfacde5e94c9920e1cb38be2aaaf12cf74c4231efbadff5823df8fd->enter($__internal_c57554926cfacde5e94c9920e1cb38be2aaaf12cf74c4231efbadff5823df8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c57554926cfacde5e94c9920e1cb38be2aaaf12cf74c4231efbadff5823df8fd->leave($__internal_c57554926cfacde5e94c9920e1cb38be2aaaf12cf74c4231efbadff5823df8fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
