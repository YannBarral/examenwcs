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
        $__internal_fc7b1ed1801945e3d497ad359566b7c789d55165d8e312f5107f78b8fd13c948 = $this->env->getExtension("native_profiler");
        $__internal_fc7b1ed1801945e3d497ad359566b7c789d55165d8e312f5107f78b8fd13c948->enter($__internal_fc7b1ed1801945e3d497ad359566b7c789d55165d8e312f5107f78b8fd13c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FruitBundle:Default:page1.html.twig"));

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
        
        $__internal_fc7b1ed1801945e3d497ad359566b7c789d55165d8e312f5107f78b8fd13c948->leave($__internal_fc7b1ed1801945e3d497ad359566b7c789d55165d8e312f5107f78b8fd13c948_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a74ba5074c919a7f2efbf085a986e5a96167fb5ac2043d35c18bf4ef5725b715 = $this->env->getExtension("native_profiler");
        $__internal_a74ba5074c919a7f2efbf085a986e5a96167fb5ac2043d35c18bf4ef5725b715->enter($__internal_a74ba5074c919a7f2efbf085a986e5a96167fb5ac2043d35c18bf4ef5725b715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_a74ba5074c919a7f2efbf085a986e5a96167fb5ac2043d35c18bf4ef5725b715->leave($__internal_a74ba5074c919a7f2efbf085a986e5a96167fb5ac2043d35c18bf4ef5725b715_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a5e7955c6a80f8fc65f9c47ad22b257895b7f3a28e88b8c80868e8482b540eb = $this->env->getExtension("native_profiler");
        $__internal_1a5e7955c6a80f8fc65f9c47ad22b257895b7f3a28e88b8c80868e8482b540eb->enter($__internal_1a5e7955c6a80f8fc65f9c47ad22b257895b7f3a28e88b8c80868e8482b540eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examenwcs/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >

    ";
        
        $__internal_1a5e7955c6a80f8fc65f9c47ad22b257895b7f3a28e88b8c80868e8482b540eb->leave($__internal_1a5e7955c6a80f8fc65f9c47ad22b257895b7f3a28e88b8c80868e8482b540eb_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bfd787b5b71543fbd6a5444ca3ae8cc2d58502870dda1aa4104bed63dcbd69 = $this->env->getExtension("native_profiler");
        $__internal_95bfd787b5b71543fbd6a5444ca3ae8cc2d58502870dda1aa4104bed63dcbd69->enter($__internal_95bfd787b5b71543fbd6a5444ca3ae8cc2d58502870dda1aa4104bed63dcbd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<h1>En vla une Belle Poire !!!!</h1>

";
        
        $__internal_95bfd787b5b71543fbd6a5444ca3ae8cc2d58502870dda1aa4104bed63dcbd69->leave($__internal_95bfd787b5b71543fbd6a5444ca3ae8cc2d58502870dda1aa4104bed63dcbd69_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df4251ae7698605fcc0a1941c14626dd302e8a99a8767a8336cafedcb1b95fa4 = $this->env->getExtension("native_profiler");
        $__internal_df4251ae7698605fcc0a1941c14626dd302e8a99a8767a8336cafedcb1b95fa4->enter($__internal_df4251ae7698605fcc0a1941c14626dd302e8a99a8767a8336cafedcb1b95fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df4251ae7698605fcc0a1941c14626dd302e8a99a8767a8336cafedcb1b95fa4->leave($__internal_df4251ae7698605fcc0a1941c14626dd302e8a99a8767a8336cafedcb1b95fa4_prof);

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
