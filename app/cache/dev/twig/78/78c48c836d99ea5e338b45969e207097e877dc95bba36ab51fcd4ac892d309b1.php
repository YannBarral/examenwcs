<?php

/* client/edit.html.twig */
class __TwigTemplate_b2b5a9853e0ade0369532ac6c0d2494d20afaf6a4212b82b52ac8aa3d52897ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_763c5285203fe304767b71864710c8aad38e282ef433a380be8192e19286db0c = $this->env->getExtension("native_profiler");
        $__internal_763c5285203fe304767b71864710c8aad38e282ef433a380be8192e19286db0c->enter($__internal_763c5285203fe304767b71864710c8aad38e282ef433a380be8192e19286db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763c5285203fe304767b71864710c8aad38e282ef433a380be8192e19286db0c->leave($__internal_763c5285203fe304767b71864710c8aad38e282ef433a380be8192e19286db0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82892aae863308e39097a37673554bfa4fb63d830e3ac4c3e409b6745558da19 = $this->env->getExtension("native_profiler");
        $__internal_82892aae863308e39097a37673554bfa4fb63d830e3ac4c3e409b6745558da19->enter($__internal_82892aae863308e39097a37673554bfa4fb63d830e3ac4c3e409b6745558da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_82892aae863308e39097a37673554bfa4fb63d830e3ac4c3e409b6745558da19->leave($__internal_82892aae863308e39097a37673554bfa4fb63d830e3ac4c3e409b6745558da19_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
