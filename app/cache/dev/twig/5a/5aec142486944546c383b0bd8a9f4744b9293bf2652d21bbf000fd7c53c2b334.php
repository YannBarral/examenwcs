<?php

/* FruitBundle:Default:page1.html.twig */
class __TwigTemplate_f2195ef3104fe8e57fa4fe1d1a6edae4c04b8eacffa8571ce431de685567317e extends Twig_Template
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
        $__internal_889922458f2f008704e2d2a5a39577f5174d99531ef44c7fc0bede241f64f8e7 = $this->env->getExtension("native_profiler");
        $__internal_889922458f2f008704e2d2a5a39577f5174d99531ef44c7fc0bede241f64f8e7->enter($__internal_889922458f2f008704e2d2a5a39577f5174d99531ef44c7fc0bede241f64f8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FruitBundle:Default:page1.html.twig"));

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
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</body>
</html>
";
        
        $__internal_889922458f2f008704e2d2a5a39577f5174d99531ef44c7fc0bede241f64f8e7->leave($__internal_889922458f2f008704e2d2a5a39577f5174d99531ef44c7fc0bede241f64f8e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_907cbb9b82856575847d6d84f81ab0d7bdbc7921fb007c0803d64ac201cc9a8e = $this->env->getExtension("native_profiler");
        $__internal_907cbb9b82856575847d6d84f81ab0d7bdbc7921fb007c0803d64ac201cc9a8e->enter($__internal_907cbb9b82856575847d6d84f81ab0d7bdbc7921fb007c0803d64ac201cc9a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_907cbb9b82856575847d6d84f81ab0d7bdbc7921fb007c0803d64ac201cc9a8e->leave($__internal_907cbb9b82856575847d6d84f81ab0d7bdbc7921fb007c0803d64ac201cc9a8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cfdc48298db6c4ca5e7e6dcb0a51651a07173dc89356f7b05ea6a801680e021 = $this->env->getExtension("native_profiler");
        $__internal_6cfdc48298db6c4ca5e7e6dcb0a51651a07173dc89356f7b05ea6a801680e021->enter($__internal_6cfdc48298db6c4ca5e7e6dcb0a51651a07173dc89356f7b05ea6a801680e021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examenwcs/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >

    ";
        
        $__internal_6cfdc48298db6c4ca5e7e6dcb0a51651a07173dc89356f7b05ea6a801680e021->leave($__internal_6cfdc48298db6c4ca5e7e6dcb0a51651a07173dc89356f7b05ea6a801680e021_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d765f7b2284e655a59b57af277f8d19eb5cf2e91e424db5fc4190569bab337d3 = $this->env->getExtension("native_profiler");
        $__internal_d765f7b2284e655a59b57af277f8d19eb5cf2e91e424db5fc4190569bab337d3->enter($__internal_d765f7b2284e655a59b57af277f8d19eb5cf2e91e424db5fc4190569bab337d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<h1>En vla une Belle Poire !!!!</h1>

";
        
        $__internal_d765f7b2284e655a59b57af277f8d19eb5cf2e91e424db5fc4190569bab337d3->leave($__internal_d765f7b2284e655a59b57af277f8d19eb5cf2e91e424db5fc4190569bab337d3_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c574f4d22340cd3175758fbee2fac29ad914cc3237f362ec947444bb9231bf97 = $this->env->getExtension("native_profiler");
        $__internal_c574f4d22340cd3175758fbee2fac29ad914cc3237f362ec947444bb9231bf97->enter($__internal_c574f4d22340cd3175758fbee2fac29ad914cc3237f362ec947444bb9231bf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c574f4d22340cd3175758fbee2fac29ad914cc3237f362ec947444bb9231bf97->leave($__internal_c574f4d22340cd3175758fbee2fac29ad914cc3237f362ec947444bb9231bf97_prof);

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
        return array (  107 => 20,  97 => 16,  91 => 15,  81 => 8,  78 => 7,  72 => 6,  60 => 5,  51 => 21,  49 => 20,  47 => 15,  41 => 12,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Bonne Poire{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/examenwcs/css/style.css') }}" type="text/css" >*/
/* */
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/* */
/* <h1>En vla une Belle Poire !!!!</h1>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
