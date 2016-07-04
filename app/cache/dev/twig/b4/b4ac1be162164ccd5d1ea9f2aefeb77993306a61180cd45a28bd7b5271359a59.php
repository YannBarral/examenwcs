<?php

/* :client:new.html.twig */
class __TwigTemplate_6d1235d661c2e45ed2015ff885a6201d4603ad9210d463ead020655d6827b409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
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
        $__internal_77a4e85c06b1486ebe3d00c038d9148f62f43c0a4f8d037be21e5d9bf8252eab = $this->env->getExtension("native_profiler");
        $__internal_77a4e85c06b1486ebe3d00c038d9148f62f43c0a4f8d037be21e5d9bf8252eab->enter($__internal_77a4e85c06b1486ebe3d00c038d9148f62f43c0a4f8d037be21e5d9bf8252eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77a4e85c06b1486ebe3d00c038d9148f62f43c0a4f8d037be21e5d9bf8252eab->leave($__internal_77a4e85c06b1486ebe3d00c038d9148f62f43c0a4f8d037be21e5d9bf8252eab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65c81bdd10b2560cf3bea0b254235900ebaa21186ef5fbb9f44d2b05af352fa4 = $this->env->getExtension("native_profiler");
        $__internal_65c81bdd10b2560cf3bea0b254235900ebaa21186ef5fbb9f44d2b05af352fa4->enter($__internal_65c81bdd10b2560cf3bea0b254235900ebaa21186ef5fbb9f44d2b05af352fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'un nouveau Client</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Revenir à la liste des clients</a>
        </li>
    </ul>
";
        
        $__internal_65c81bdd10b2560cf3bea0b254235900ebaa21186ef5fbb9f44d2b05af352fa4->leave($__internal_65c81bdd10b2560cf3bea0b254235900ebaa21186ef5fbb9f44d2b05af352fa4_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
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
/*     <h1>Création d'un nouveau Client</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Créer" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Revenir à la liste des clients</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
