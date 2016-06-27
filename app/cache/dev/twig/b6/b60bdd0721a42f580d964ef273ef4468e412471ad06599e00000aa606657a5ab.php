<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0fd02f169c4a5098f2c66b6d676245a4e5611890b35510eb772059ac73b75bb8 extends Twig_Template
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
        $__internal_977dc79c2ef7bcf083547200fed271d6365075cd6ed8ebf69a58dd83b21bdf19 = $this->env->getExtension("native_profiler");
        $__internal_977dc79c2ef7bcf083547200fed271d6365075cd6ed8ebf69a58dd83b21bdf19->enter($__internal_977dc79c2ef7bcf083547200fed271d6365075cd6ed8ebf69a58dd83b21bdf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_977dc79c2ef7bcf083547200fed271d6365075cd6ed8ebf69a58dd83b21bdf19->leave($__internal_977dc79c2ef7bcf083547200fed271d6365075cd6ed8ebf69a58dd83b21bdf19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
