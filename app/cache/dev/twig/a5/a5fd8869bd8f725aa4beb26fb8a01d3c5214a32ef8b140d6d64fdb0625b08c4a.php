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
        $__internal_c0135eba956bf65e407ee8a52e69559a843c64a331a39ff8bedce32c3e3338bd = $this->env->getExtension("native_profiler");
        $__internal_c0135eba956bf65e407ee8a52e69559a843c64a331a39ff8bedce32c3e3338bd->enter($__internal_c0135eba956bf65e407ee8a52e69559a843c64a331a39ff8bedce32c3e3338bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c0135eba956bf65e407ee8a52e69559a843c64a331a39ff8bedce32c3e3338bd->leave($__internal_c0135eba956bf65e407ee8a52e69559a843c64a331a39ff8bedce32c3e3338bd_prof);

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
