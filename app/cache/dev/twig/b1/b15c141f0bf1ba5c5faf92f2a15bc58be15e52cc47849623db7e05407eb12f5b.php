<?php

/* ::base.html.twig */
class __TwigTemplate_071073d23e06d10fcfe9903df69c451b4776d3c1c8657ed9f781dfdb2094c90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_776ccd31a8cb7516aeef75fcc786c5b03ad9b77ef54242bc8480808d36f61798 = $this->env->getExtension("native_profiler");
        $__internal_776ccd31a8cb7516aeef75fcc786c5b03ad9b77ef54242bc8480808d36f61798->enter($__internal_776ccd31a8cb7516aeef75fcc786c5b03ad9b77ef54242bc8480808d36f61798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_776ccd31a8cb7516aeef75fcc786c5b03ad9b77ef54242bc8480808d36f61798->leave($__internal_776ccd31a8cb7516aeef75fcc786c5b03ad9b77ef54242bc8480808d36f61798_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f28b5815737f65857ca04874faaddd2c40e079d43fe58d8566a909e6c40f8b87 = $this->env->getExtension("native_profiler");
        $__internal_f28b5815737f65857ca04874faaddd2c40e079d43fe58d8566a909e6c40f8b87->enter($__internal_f28b5815737f65857ca04874faaddd2c40e079d43fe58d8566a909e6c40f8b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_f28b5815737f65857ca04874faaddd2c40e079d43fe58d8566a909e6c40f8b87->leave($__internal_f28b5815737f65857ca04874faaddd2c40e079d43fe58d8566a909e6c40f8b87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77c6f30c8ef639a4c56dc720b48d3c1d1be2f41a6deb99026f0d0ad35a3b2823 = $this->env->getExtension("native_profiler");
        $__internal_77c6f30c8ef639a4c56dc720b48d3c1d1be2f41a6deb99026f0d0ad35a3b2823->enter($__internal_77c6f30c8ef639a4c56dc720b48d3c1d1be2f41a6deb99026f0d0ad35a3b2823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
            <link href='https://fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_77c6f30c8ef639a4c56dc720b48d3c1d1be2f41a6deb99026f0d0ad35a3b2823->leave($__internal_77c6f30c8ef639a4c56dc720b48d3c1d1be2f41a6deb99026f0d0ad35a3b2823_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_3123275c987b097bb6196e85752b8c2b7ebe16c3873feb0db78e2a97dfbb5f66 = $this->env->getExtension("native_profiler");
        $__internal_3123275c987b097bb6196e85752b8c2b7ebe16c3873feb0db78e2a97dfbb5f66->enter($__internal_3123275c987b097bb6196e85752b8c2b7ebe16c3873feb0db78e2a97dfbb5f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3123275c987b097bb6196e85752b8c2b7ebe16c3873feb0db78e2a97dfbb5f66->leave($__internal_3123275c987b097bb6196e85752b8c2b7ebe16c3873feb0db78e2a97dfbb5f66_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fa95c0ff8ef1af18dfad8c61525c190bb7c7731bda77da018e61821d1508c37 = $this->env->getExtension("native_profiler");
        $__internal_2fa95c0ff8ef1af18dfad8c61525c190bb7c7731bda77da018e61821d1508c37->enter($__internal_2fa95c0ff8ef1af18dfad8c61525c190bb7c7731bda77da018e61821d1508c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fa95c0ff8ef1af18dfad8c61525c190bb7c7731bda77da018e61821d1508c37->leave($__internal_2fa95c0ff8ef1af18dfad8c61525c190bb7c7731bda77da018e61821d1508c37_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 15,  88 => 14,  79 => 7,  73 => 6,  61 => 5,  52 => 16,  49 => 15,  47 => 14,  41 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bonne Poire{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />*/
/*             <link href='https://fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
