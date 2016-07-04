<?php

/* FruitBundle:Default:index.html.twig */
class __TwigTemplate_f4abd79de0efed67a6c4a99d3c7931fb78f50087219a3142d716e8688fc1b9de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FruitBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e38f6ee35b17cfb899f909f1a79635469a85af4b08a761a65f0f22ee3a3d2aa6 = $this->env->getExtension("native_profiler");
        $__internal_e38f6ee35b17cfb899f909f1a79635469a85af4b08a761a65f0f22ee3a3d2aa6->enter($__internal_e38f6ee35b17cfb899f909f1a79635469a85af4b08a761a65f0f22ee3a3d2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FruitBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38f6ee35b17cfb899f909f1a79635469a85af4b08a761a65f0f22ee3a3d2aa6->leave($__internal_e38f6ee35b17cfb899f909f1a79635469a85af4b08a761a65f0f22ee3a3d2aa6_prof);

    }

    public function getTemplateName()
    {
        return "FruitBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
