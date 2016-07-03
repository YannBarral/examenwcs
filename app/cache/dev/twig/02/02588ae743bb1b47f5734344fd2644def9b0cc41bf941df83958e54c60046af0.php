<?php

/* base.html.twig */
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
        $__internal_43b2f4dc187b1308b1261bb49c213afcc426b385146e120669e7e925ce266d13 = $this->env->getExtension("native_profiler");
        $__internal_43b2f4dc187b1308b1261bb49c213afcc426b385146e120669e7e925ce266d13->enter($__internal_43b2f4dc187b1308b1261bb49c213afcc426b385146e120669e7e925ce266d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_43b2f4dc187b1308b1261bb49c213afcc426b385146e120669e7e925ce266d13->leave($__internal_43b2f4dc187b1308b1261bb49c213afcc426b385146e120669e7e925ce266d13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50614c3094cc6b634631bb5a3a07604d7bd3c076943c4e5c5956c3746491b602 = $this->env->getExtension("native_profiler");
        $__internal_50614c3094cc6b634631bb5a3a07604d7bd3c076943c4e5c5956c3746491b602->enter($__internal_50614c3094cc6b634631bb5a3a07604d7bd3c076943c4e5c5956c3746491b602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_50614c3094cc6b634631bb5a3a07604d7bd3c076943c4e5c5956c3746491b602->leave($__internal_50614c3094cc6b634631bb5a3a07604d7bd3c076943c4e5c5956c3746491b602_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6da29aa537642c443124d64d50fc7c1c152b61034bff18d1b6d1b6f347405806 = $this->env->getExtension("native_profiler");
        $__internal_6da29aa537642c443124d64d50fc7c1c152b61034bff18d1b6d1b6f347405806->enter($__internal_6da29aa537642c443124d64d50fc7c1c152b61034bff18d1b6d1b6f347405806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examenwcs/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >

        ";
        
        $__internal_6da29aa537642c443124d64d50fc7c1c152b61034bff18d1b6d1b6f347405806->leave($__internal_6da29aa537642c443124d64d50fc7c1c152b61034bff18d1b6d1b6f347405806_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_33ba54b0d4839369304a34d14c84f91426da4d1601f6b803584468d9f9c9a4d6 = $this->env->getExtension("native_profiler");
        $__internal_33ba54b0d4839369304a34d14c84f91426da4d1601f6b803584468d9f9c9a4d6->enter($__internal_33ba54b0d4839369304a34d14c84f91426da4d1601f6b803584468d9f9c9a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
        <h1> Elle est belle ma poire !!!! </h1>
        ";
        
        $__internal_33ba54b0d4839369304a34d14c84f91426da4d1601f6b803584468d9f9c9a4d6->leave($__internal_33ba54b0d4839369304a34d14c84f91426da4d1601f6b803584468d9f9c9a4d6_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9687ca16823c4d9894c7bb9e474a8a9876f9ef66b3493434e59561bafac61ab5 = $this->env->getExtension("native_profiler");
        $__internal_9687ca16823c4d9894c7bb9e474a8a9876f9ef66b3493434e59561bafac61ab5->enter($__internal_9687ca16823c4d9894c7bb9e474a8a9876f9ef66b3493434e59561bafac61ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9687ca16823c4d9894c7bb9e474a8a9876f9ef66b3493434e59561bafac61ab5->leave($__internal_9687ca16823c4d9894c7bb9e474a8a9876f9ef66b3493434e59561bafac61ab5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 19,  98 => 16,  92 => 15,  82 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 20,  49 => 19,  47 => 15,  41 => 12,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bonne Poire{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/examenwcs/css/style.css') }}" type="text/css" >*/
/* */
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/*         <h1> Elle est belle ma poire !!!! </h1>*/
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
