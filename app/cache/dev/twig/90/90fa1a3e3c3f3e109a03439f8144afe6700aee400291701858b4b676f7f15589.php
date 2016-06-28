<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_578da71a3a52dd09531f806d4cf622249608d44ccf7bf5cc33b245b193bea0de extends Twig_Template
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
        $__internal_94dd494618d0c0ca65f510a2478d933081d81230c538901b388331b647ec3cdd = $this->env->getExtension("native_profiler");
        $__internal_94dd494618d0c0ca65f510a2478d933081d81230c538901b388331b647ec3cdd->enter($__internal_94dd494618d0c0ca65f510a2478d933081d81230c538901b388331b647ec3cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_94dd494618d0c0ca65f510a2478d933081d81230c538901b388331b647ec3cdd->leave($__internal_94dd494618d0c0ca65f510a2478d933081d81230c538901b388331b647ec3cdd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
