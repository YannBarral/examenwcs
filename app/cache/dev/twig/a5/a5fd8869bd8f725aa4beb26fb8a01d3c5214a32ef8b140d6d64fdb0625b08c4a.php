<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_55007ab45d9383e7f1865fd5d6936bdbecf599b4c5b5ae74aa3a6e5e91faf668 extends Twig_Template
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
        $__internal_0ea7591ca3f4ea2ca6724a22113ccc827140e24ef42b083a09c871512ee9d144 = $this->env->getExtension("native_profiler");
        $__internal_0ea7591ca3f4ea2ca6724a22113ccc827140e24ef42b083a09c871512ee9d144->enter($__internal_0ea7591ca3f4ea2ca6724a22113ccc827140e24ef42b083a09c871512ee9d144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0ea7591ca3f4ea2ca6724a22113ccc827140e24ef42b083a09c871512ee9d144->leave($__internal_0ea7591ca3f4ea2ca6724a22113ccc827140e24ef42b083a09c871512ee9d144_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
