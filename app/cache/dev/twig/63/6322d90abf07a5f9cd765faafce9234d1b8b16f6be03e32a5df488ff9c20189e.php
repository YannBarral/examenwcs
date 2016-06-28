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
        $__internal_fb354d4231d89567928685b056b500e6718b0fe95e3a8d3ae6264e0f89b6dd68 = $this->env->getExtension("native_profiler");
        $__internal_fb354d4231d89567928685b056b500e6718b0fe95e3a8d3ae6264e0f89b6dd68->enter($__internal_fb354d4231d89567928685b056b500e6718b0fe95e3a8d3ae6264e0f89b6dd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_fb354d4231d89567928685b056b500e6718b0fe95e3a8d3ae6264e0f89b6dd68->leave($__internal_fb354d4231d89567928685b056b500e6718b0fe95e3a8d3ae6264e0f89b6dd68_prof);

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
