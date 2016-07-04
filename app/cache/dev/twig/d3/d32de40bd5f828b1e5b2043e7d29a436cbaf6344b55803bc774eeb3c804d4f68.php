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
        $__internal_07e1792b3be37c285b58685fd3b33fd78a94508e948d1fdb9f4b73fd4de4d737 = $this->env->getExtension("native_profiler");
        $__internal_07e1792b3be37c285b58685fd3b33fd78a94508e948d1fdb9f4b73fd4de4d737->enter($__internal_07e1792b3be37c285b58685fd3b33fd78a94508e948d1fdb9f4b73fd4de4d737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_07e1792b3be37c285b58685fd3b33fd78a94508e948d1fdb9f4b73fd4de4d737->leave($__internal_07e1792b3be37c285b58685fd3b33fd78a94508e948d1fdb9f4b73fd4de4d737_prof);

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
