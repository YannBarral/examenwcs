<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_44d46690229ba3d9b4225bfa9236e2214a5b43ec003c3e5dd138ecf0f9785874 extends Twig_Template
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
        $__internal_cf35dea3f92b8288c717663d363a33c1632e0c2324b044be59e87e15e0834c5c = $this->env->getExtension("native_profiler");
        $__internal_cf35dea3f92b8288c717663d363a33c1632e0c2324b044be59e87e15e0834c5c->enter($__internal_cf35dea3f92b8288c717663d363a33c1632e0c2324b044be59e87e15e0834c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf35dea3f92b8288c717663d363a33c1632e0c2324b044be59e87e15e0834c5c->leave($__internal_cf35dea3f92b8288c717663d363a33c1632e0c2324b044be59e87e15e0834c5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
