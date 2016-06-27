<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5c0b730f1103afdb7c34bf4976102a135656fd41d301c48204013bd974dc3ce0 extends Twig_Template
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
        $__internal_d77f24ae7637a2d2941183114fb59be30797954b66d63fea57593198bb13ff4e = $this->env->getExtension("native_profiler");
        $__internal_d77f24ae7637a2d2941183114fb59be30797954b66d63fea57593198bb13ff4e->enter($__internal_d77f24ae7637a2d2941183114fb59be30797954b66d63fea57593198bb13ff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d77f24ae7637a2d2941183114fb59be30797954b66d63fea57593198bb13ff4e->leave($__internal_d77f24ae7637a2d2941183114fb59be30797954b66d63fea57593198bb13ff4e_prof);

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
