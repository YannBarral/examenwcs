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
        $__internal_3122e09b349a4a26733103f9ff490154b4dd4b7bece1d134c42f53b085857e0d = $this->env->getExtension("native_profiler");
        $__internal_3122e09b349a4a26733103f9ff490154b4dd4b7bece1d134c42f53b085857e0d->enter($__internal_3122e09b349a4a26733103f9ff490154b4dd4b7bece1d134c42f53b085857e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3122e09b349a4a26733103f9ff490154b4dd4b7bece1d134c42f53b085857e0d->leave($__internal_3122e09b349a4a26733103f9ff490154b4dd4b7bece1d134c42f53b085857e0d_prof);

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
