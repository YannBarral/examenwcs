<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f1b626b51b55e846cd34f433e0d1a2b7dbfa1b0f5714406b58c8e6dd3c16a902 extends Twig_Template
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
        $__internal_7cb41059712ed8cee66ee85226593de0e0492ee1e33953a43d86126e517681af = $this->env->getExtension("native_profiler");
        $__internal_7cb41059712ed8cee66ee85226593de0e0492ee1e33953a43d86126e517681af->enter($__internal_7cb41059712ed8cee66ee85226593de0e0492ee1e33953a43d86126e517681af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7cb41059712ed8cee66ee85226593de0e0492ee1e33953a43d86126e517681af->leave($__internal_7cb41059712ed8cee66ee85226593de0e0492ee1e33953a43d86126e517681af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
