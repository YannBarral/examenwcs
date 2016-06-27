<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0ca742bc7b4540e03b981a876e883cf944a8df75a01b85cad548edf86ac223e6 extends Twig_Template
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
        $__internal_6c67c261014076b80cf2e58988500bcfc10a2b89d472aee55d08c839e5b4cce3 = $this->env->getExtension("native_profiler");
        $__internal_6c67c261014076b80cf2e58988500bcfc10a2b89d472aee55d08c839e5b4cce3->enter($__internal_6c67c261014076b80cf2e58988500bcfc10a2b89d472aee55d08c839e5b4cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6c67c261014076b80cf2e58988500bcfc10a2b89d472aee55d08c839e5b4cce3->leave($__internal_6c67c261014076b80cf2e58988500bcfc10a2b89d472aee55d08c839e5b4cce3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
