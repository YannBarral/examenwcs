<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8d61f4d95b062d92bbeb001faabe202bc6fccde33c2223e5080705814e843c13 extends Twig_Template
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
        $__internal_2f5f6de98084a730d8e4e23625f6659d3ba0737922668e442bb939f80f647975 = $this->env->getExtension("native_profiler");
        $__internal_2f5f6de98084a730d8e4e23625f6659d3ba0737922668e442bb939f80f647975->enter($__internal_2f5f6de98084a730d8e4e23625f6659d3ba0737922668e442bb939f80f647975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2f5f6de98084a730d8e4e23625f6659d3ba0737922668e442bb939f80f647975->leave($__internal_2f5f6de98084a730d8e4e23625f6659d3ba0737922668e442bb939f80f647975_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
