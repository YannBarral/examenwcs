<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1a27e133f84bfc09b52f3ed9717e4fe8cc80ef41e5305a3f9419b302ec07e479 extends Twig_Template
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
        $__internal_5d01019d20a5debff4d9d6bf0aad30752949486fa69bfee24adfe96115ea7bd4 = $this->env->getExtension("native_profiler");
        $__internal_5d01019d20a5debff4d9d6bf0aad30752949486fa69bfee24adfe96115ea7bd4->enter($__internal_5d01019d20a5debff4d9d6bf0aad30752949486fa69bfee24adfe96115ea7bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5d01019d20a5debff4d9d6bf0aad30752949486fa69bfee24adfe96115ea7bd4->leave($__internal_5d01019d20a5debff4d9d6bf0aad30752949486fa69bfee24adfe96115ea7bd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
