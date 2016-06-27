<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ab01a976d792f9ecf91848df04b8a54bf34b2b28a7e4ec7d686c97377c9b2058 extends Twig_Template
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
        $__internal_57a1b1b9bee556e83fb62a6d24f12533e513c068df2f3699c4d30ab4aff0e19b = $this->env->getExtension("native_profiler");
        $__internal_57a1b1b9bee556e83fb62a6d24f12533e513c068df2f3699c4d30ab4aff0e19b->enter($__internal_57a1b1b9bee556e83fb62a6d24f12533e513c068df2f3699c4d30ab4aff0e19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_57a1b1b9bee556e83fb62a6d24f12533e513c068df2f3699c4d30ab4aff0e19b->leave($__internal_57a1b1b9bee556e83fb62a6d24f12533e513c068df2f3699c4d30ab4aff0e19b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
