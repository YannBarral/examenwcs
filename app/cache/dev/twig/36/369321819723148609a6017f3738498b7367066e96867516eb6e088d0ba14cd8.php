<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_744a784df40046b6fdd43cb49a9bafbff99ddc9d02d72b260bdb4bcd99e1b988 extends Twig_Template
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
        $__internal_ae6dc17be9efc9fcf69c7f6d8a18d315709d09ad14824cff301e9ab629bd64e6 = $this->env->getExtension("native_profiler");
        $__internal_ae6dc17be9efc9fcf69c7f6d8a18d315709d09ad14824cff301e9ab629bd64e6->enter($__internal_ae6dc17be9efc9fcf69c7f6d8a18d315709d09ad14824cff301e9ab629bd64e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ae6dc17be9efc9fcf69c7f6d8a18d315709d09ad14824cff301e9ab629bd64e6->leave($__internal_ae6dc17be9efc9fcf69c7f6d8a18d315709d09ad14824cff301e9ab629bd64e6_prof);

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
