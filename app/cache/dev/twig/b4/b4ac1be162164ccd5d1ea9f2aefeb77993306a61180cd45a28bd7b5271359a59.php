<?php

/* client/new.html.twig */
class __TwigTemplate_6d1235d661c2e45ed2015ff885a6201d4603ad9210d463ead020655d6827b409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26d05773c7b0d1b77718fbfbb5c55589b76c59458a04ffe4ace462b0d69745c6 = $this->env->getExtension("native_profiler");
        $__internal_26d05773c7b0d1b77718fbfbb5c55589b76c59458a04ffe4ace462b0d69745c6->enter($__internal_26d05773c7b0d1b77718fbfbb5c55589b76c59458a04ffe4ace462b0d69745c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d05773c7b0d1b77718fbfbb5c55589b76c59458a04ffe4ace462b0d69745c6->leave($__internal_26d05773c7b0d1b77718fbfbb5c55589b76c59458a04ffe4ace462b0d69745c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_562cf270ee99eb7808c26d602a16a621f99b61bd8f28706751dc5e0fdd292518 = $this->env->getExtension("native_profiler");
        $__internal_562cf270ee99eb7808c26d602a16a621f99b61bd8f28706751dc5e0fdd292518->enter($__internal_562cf270ee99eb7808c26d602a16a621f99b61bd8f28706751dc5e0fdd292518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_562cf270ee99eb7808c26d602a16a621f99b61bd8f28706751dc5e0fdd292518->leave($__internal_562cf270ee99eb7808c26d602a16a621f99b61bd8f28706751dc5e0fdd292518_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
