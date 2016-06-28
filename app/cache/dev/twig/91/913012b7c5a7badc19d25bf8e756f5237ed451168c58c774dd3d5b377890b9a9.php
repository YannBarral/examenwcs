<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a27bcc6ba55e30f43f6513428d52c9f1f9ada77a91280f9a47c760b450922f05 extends Twig_Template
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
        $__internal_99f4d103a3ee955f96684c80cd1b04a73875ff765396c699dee5929d402f087e = $this->env->getExtension("native_profiler");
        $__internal_99f4d103a3ee955f96684c80cd1b04a73875ff765396c699dee5929d402f087e->enter($__internal_99f4d103a3ee955f96684c80cd1b04a73875ff765396c699dee5929d402f087e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_99f4d103a3ee955f96684c80cd1b04a73875ff765396c699dee5929d402f087e->leave($__internal_99f4d103a3ee955f96684c80cd1b04a73875ff765396c699dee5929d402f087e_prof);

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
