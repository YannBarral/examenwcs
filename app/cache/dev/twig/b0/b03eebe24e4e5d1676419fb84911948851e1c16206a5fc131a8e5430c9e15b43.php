<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_671122f0e9125abb82dbce0167ffabf1bf58c79056065df031b884fbf07efc89 extends Twig_Template
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
        $__internal_745c20b81196332320e0df74e2bb8af7623eda599b8b52543dd0df4417066c3d = $this->env->getExtension("native_profiler");
        $__internal_745c20b81196332320e0df74e2bb8af7623eda599b8b52543dd0df4417066c3d->enter($__internal_745c20b81196332320e0df74e2bb8af7623eda599b8b52543dd0df4417066c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_745c20b81196332320e0df74e2bb8af7623eda599b8b52543dd0df4417066c3d->leave($__internal_745c20b81196332320e0df74e2bb8af7623eda599b8b52543dd0df4417066c3d_prof);

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
