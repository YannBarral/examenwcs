<?php

/* FruitBundle:Default:page1.html.twig */
class __TwigTemplate_f2195ef3104fe8e57fa4fe1d1a6edae4c04b8eacffa8571ce431de685567317e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FruitBundle:Default:page1.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e29c09e3a25da5edd2ec29bf3966d8781e8c333d8d61015064fa1c414e1e1347 = $this->env->getExtension("native_profiler");
        $__internal_e29c09e3a25da5edd2ec29bf3966d8781e8c333d8d61015064fa1c414e1e1347->enter($__internal_e29c09e3a25da5edd2ec29bf3966d8781e8c333d8d61015064fa1c414e1e1347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FruitBundle:Default:page1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e29c09e3a25da5edd2ec29bf3966d8781e8c333d8d61015064fa1c414e1e1347->leave($__internal_e29c09e3a25da5edd2ec29bf3966d8781e8c333d8d61015064fa1c414e1e1347_prof);

    }

    public function getTemplateName()
    {
        return "FruitBundle:Default:page1.html.twig";
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
