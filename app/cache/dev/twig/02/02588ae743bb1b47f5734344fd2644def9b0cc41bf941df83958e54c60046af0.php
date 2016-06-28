<?php

/* ::base.html.twig */
class __TwigTemplate_6383e8b87d55a0cbd8cde5855ee4b90d46e046da5150902775f0f98b2e485ac0 extends Twig_Template
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
        $__internal_1c027536ae91504f83117e6eb03596d3ca106fb3c46d572014caf33e04ab9347 = $this->env->getExtension("native_profiler");
        $__internal_1c027536ae91504f83117e6eb03596d3ca106fb3c46d572014caf33e04ab9347->enter($__internal_1c027536ae91504f83117e6eb03596d3ca106fb3c46d572014caf33e04ab9347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1c027536ae91504f83117e6eb03596d3ca106fb3c46d572014caf33e04ab9347->leave($__internal_1c027536ae91504f83117e6eb03596d3ca106fb3c46d572014caf33e04ab9347_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b446e745c293da923d0c18285ca5a2b4b84aa65ce1c3ef95b395e510326f85b8 = $this->env->getExtension("native_profiler");
        $__internal_b446e745c293da923d0c18285ca5a2b4b84aa65ce1c3ef95b395e510326f85b8->enter($__internal_b446e745c293da923d0c18285ca5a2b4b84aa65ce1c3ef95b395e510326f85b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_b446e745c293da923d0c18285ca5a2b4b84aa65ce1c3ef95b395e510326f85b8->leave($__internal_b446e745c293da923d0c18285ca5a2b4b84aa65ce1c3ef95b395e510326f85b8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e21d681f04edcd59f1c48a4cbb2a833fc0962fb5a2a66dcec59541625e62c787 = $this->env->getExtension("native_profiler");
        $__internal_e21d681f04edcd59f1c48a4cbb2a833fc0962fb5a2a66dcec59541625e62c787->enter($__internal_e21d681f04edcd59f1c48a4cbb2a833fc0962fb5a2a66dcec59541625e62c787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
            <link href='https://fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_e21d681f04edcd59f1c48a4cbb2a833fc0962fb5a2a66dcec59541625e62c787->leave($__internal_e21d681f04edcd59f1c48a4cbb2a833fc0962fb5a2a66dcec59541625e62c787_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d754f99f960961bb985c97194f13e090620f1e67a805af36c5b694e52a565185 = $this->env->getExtension("native_profiler");
        $__internal_d754f99f960961bb985c97194f13e090620f1e67a805af36c5b694e52a565185->enter($__internal_d754f99f960961bb985c97194f13e090620f1e67a805af36c5b694e52a565185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d754f99f960961bb985c97194f13e090620f1e67a805af36c5b694e52a565185->leave($__internal_d754f99f960961bb985c97194f13e090620f1e67a805af36c5b694e52a565185_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_491eb60c095a82c2c805e6a128841ea72f03880a6942c3ff5a5fc618c5d61917 = $this->env->getExtension("native_profiler");
        $__internal_491eb60c095a82c2c805e6a128841ea72f03880a6942c3ff5a5fc618c5d61917->enter($__internal_491eb60c095a82c2c805e6a128841ea72f03880a6942c3ff5a5fc618c5d61917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_491eb60c095a82c2c805e6a128841ea72f03880a6942c3ff5a5fc618c5d61917->leave($__internal_491eb60c095a82c2c805e6a128841ea72f03880a6942c3ff5a5fc618c5d61917_prof);

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
