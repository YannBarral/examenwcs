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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7940a67c16d22e66298836fe90fa005882beddbc94e407d14f8eb596a091cf5e = $this->env->getExtension("native_profiler");
        $__internal_7940a67c16d22e66298836fe90fa005882beddbc94e407d14f8eb596a091cf5e->enter($__internal_7940a67c16d22e66298836fe90fa005882beddbc94e407d14f8eb596a091cf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    <style>
        form[action\$=new],
        form[action\$=edit],
        form[action\$=delete] {
            display:inline; !important
        }
    </style>
</head>





<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/\">Bonne Poire </br> Les fruits, c'est la vie !!!</a>
        </div>
        <ul class=\"nav navbar-nav\">

            <li><a href=\"\">Client</a></li>
            <li><a href=\"/personne\">Achat</a></li>
            <li><a href=\"/plat\">Commande</a></li>



        </ul>
    </div>
</nav>
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
</body>
</html>

";
        
        $__internal_7940a67c16d22e66298836fe90fa005882beddbc94e407d14f8eb596a091cf5e->leave($__internal_7940a67c16d22e66298836fe90fa005882beddbc94e407d14f8eb596a091cf5e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d28e126c7eeb32e7b9da69468004c62e7183901b9f349a8d381cbf163f4e5d1 = $this->env->getExtension("native_profiler");
        $__internal_7d28e126c7eeb32e7b9da69468004c62e7183901b9f349a8d381cbf163f4e5d1->enter($__internal_7d28e126c7eeb32e7b9da69468004c62e7183901b9f349a8d381cbf163f4e5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_7d28e126c7eeb32e7b9da69468004c62e7183901b9f349a8d381cbf163f4e5d1->leave($__internal_7d28e126c7eeb32e7b9da69468004c62e7183901b9f349a8d381cbf163f4e5d1_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f3f82566d5a5bfc57678b905f2f22751243df88baa2a4c7160dcbb6fd10ff3e = $this->env->getExtension("native_profiler");
        $__internal_3f3f82566d5a5bfc57678b905f2f22751243df88baa2a4c7160dcbb6fd10ff3e->enter($__internal_3f3f82566d5a5bfc57678b905f2f22751243df88baa2a4c7160dcbb6fd10ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >
    ";
        
        $__internal_3f3f82566d5a5bfc57678b905f2f22751243df88baa2a4c7160dcbb6fd10ff3e->leave($__internal_3f3f82566d5a5bfc57678b905f2f22751243df88baa2a4c7160dcbb6fd10ff3e_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e96efa148815f9e679ce802d9f85c80c0156a2eb464e51fa52b5cfb143d7d22 = $this->env->getExtension("native_profiler");
        $__internal_4e96efa148815f9e679ce802d9f85c80c0156a2eb464e51fa52b5cfb143d7d22->enter($__internal_4e96efa148815f9e679ce802d9f85c80c0156a2eb464e51fa52b5cfb143d7d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "
";
        
        $__internal_4e96efa148815f9e679ce802d9f85c80c0156a2eb464e51fa52b5cfb143d7d22->leave($__internal_4e96efa148815f9e679ce802d9f85c80c0156a2eb464e51fa52b5cfb143d7d22_prof);

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
        return array (  126 => 46,  120 => 45,  111 => 13,  107 => 11,  101 => 10,  89 => 6,  78 => 48,  76 => 45,  44 => 15,  42 => 10,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Bonne Poire{% endblock %}</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/style.css') }}" type="text/css" >*/
/*     {% endblock %}*/
/* */
/*     <style>*/
/*         form[action$=new],*/
/*         form[action$=edit],*/
/*         form[action$=delete] {*/
/*             display:inline; !important*/
/*         }*/
/*     </style>*/
/* </head>*/
/* */
/* */
/* */
/* */
/* */
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <a class="navbar-brand" href="/">Bonne Poire </br> Les fruits, c'est la vie !!!</a>*/
/*         </div>*/
/*         <ul class="nav navbar-nav">*/
/* */
/*             <li><a href="">Client</a></li>*/
/*             <li><a href="/personne">Achat</a></li>*/
/*             <li><a href="/plat">Commande</a></li>*/
/* */
/* */
/* */
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* {%  block body %}*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
