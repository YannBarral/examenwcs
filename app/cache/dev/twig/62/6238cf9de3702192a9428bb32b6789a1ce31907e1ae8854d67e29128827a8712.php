<?php

/* FruitBundle:Default:page1.html.twig */
class __TwigTemplate_0d98b5650e15cefc531a5522909ab61cdd1f74e07553a3cd0e070c8236f70ac7 extends Twig_Template
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
        $__internal_451999982e19e149d84da305efdf4df6e67e2b6a22f732ba4054d3b98edab7f7 = $this->env->getExtension("native_profiler");
        $__internal_451999982e19e149d84da305efdf4df6e67e2b6a22f732ba4054d3b98edab7f7->enter($__internal_451999982e19e149d84da305efdf4df6e67e2b6a22f732ba4054d3b98edab7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FruitBundle:Default:page1.html.twig"));

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
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "</body>
</html>
";
        
        $__internal_451999982e19e149d84da305efdf4df6e67e2b6a22f732ba4054d3b98edab7f7->leave($__internal_451999982e19e149d84da305efdf4df6e67e2b6a22f732ba4054d3b98edab7f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79dc7e1883762e5228a63c9f26d644f07d4f77ac12bf5b8611d3d9a21a7eb114 = $this->env->getExtension("native_profiler");
        $__internal_79dc7e1883762e5228a63c9f26d644f07d4f77ac12bf5b8611d3d9a21a7eb114->enter($__internal_79dc7e1883762e5228a63c9f26d644f07d4f77ac12bf5b8611d3d9a21a7eb114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_79dc7e1883762e5228a63c9f26d644f07d4f77ac12bf5b8611d3d9a21a7eb114->leave($__internal_79dc7e1883762e5228a63c9f26d644f07d4f77ac12bf5b8611d3d9a21a7eb114_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_452ec9b9575172d8be82a83865819ca01fc77911953d84649dd735c83792ec4d = $this->env->getExtension("native_profiler");
        $__internal_452ec9b9575172d8be82a83865819ca01fc77911953d84649dd735c83792ec4d->enter($__internal_452ec9b9575172d8be82a83865819ca01fc77911953d84649dd735c83792ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    ";
        
        $__internal_452ec9b9575172d8be82a83865819ca01fc77911953d84649dd735c83792ec4d->leave($__internal_452ec9b9575172d8be82a83865819ca01fc77911953d84649dd735c83792ec4d_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_a770c6b0b7728c38c609867073dea32e4d4cd6c65f9a5949e52cf438ace69b55 = $this->env->getExtension("native_profiler");
        $__internal_a770c6b0b7728c38c609867073dea32e4d4cd6c65f9a5949e52cf438ace69b55->enter($__internal_a770c6b0b7728c38c609867073dea32e4d4cd6c65f9a5949e52cf438ace69b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "


";
        
        $__internal_a770c6b0b7728c38c609867073dea32e4d4cd6c65f9a5949e52cf438ace69b55->leave($__internal_a770c6b0b7728c38c609867073dea32e4d4cd6c65f9a5949e52cf438ace69b55_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c34575daf041da34be14d545dd29283e3ab0be568af8e1a6590d9826a44158c2 = $this->env->getExtension("native_profiler");
        $__internal_c34575daf041da34be14d545dd29283e3ab0be568af8e1a6590d9826a44158c2->enter($__internal_c34575daf041da34be14d545dd29283e3ab0be568af8e1a6590d9826a44158c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c34575daf041da34be14d545dd29283e3ab0be568af8e1a6590d9826a44158c2->leave($__internal_c34575daf041da34be14d545dd29283e3ab0be568af8e1a6590d9826a44158c2_prof);

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
        return array (  106 => 19,  96 => 15,  90 => 14,  81 => 8,  78 => 7,  72 => 6,  60 => 5,  51 => 20,  49 => 19,  47 => 14,  41 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Bonne Poire{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/style.css') }}" type="text/css">*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
