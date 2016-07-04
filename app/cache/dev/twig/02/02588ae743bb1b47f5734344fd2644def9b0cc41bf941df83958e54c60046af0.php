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
        $__internal_69ff8ad7a235f6d9b35953d907898bc4aa934655a9e5eef345bc5679d78cdc90 = $this->env->getExtension("native_profiler");
        $__internal_69ff8ad7a235f6d9b35953d907898bc4aa934655a9e5eef345bc5679d78cdc90->enter($__internal_69ff8ad7a235f6d9b35953d907898bc4aa934655a9e5eef345bc5679d78cdc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
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
            <a class=\"navbar-brand\" href=\"/\">Bonne poire </br> Les fruits, c'est la vie !!!</a>
        </div>
        <ul class=\"nav navbar-nav\">

            <li><a href=\"/diner)\">Clients</a></li>
            <li><a href=\"/personne\">Achat</a></li>
            <li><a href=\"/plat\">Commande</a></li>



        </ul>
    </div>
</nav>
";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
</body>
</html>

";
        
        $__internal_69ff8ad7a235f6d9b35953d907898bc4aa934655a9e5eef345bc5679d78cdc90->leave($__internal_69ff8ad7a235f6d9b35953d907898bc4aa934655a9e5eef345bc5679d78cdc90_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_78338024ff6651b2f6ca9aada12480ff912689679dda30ddd9c395d5a5f8ed9b = $this->env->getExtension("native_profiler");
        $__internal_78338024ff6651b2f6ca9aada12480ff912689679dda30ddd9c395d5a5f8ed9b->enter($__internal_78338024ff6651b2f6ca9aada12480ff912689679dda30ddd9c395d5a5f8ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_78338024ff6651b2f6ca9aada12480ff912689679dda30ddd9c395d5a5f8ed9b->leave($__internal_78338024ff6651b2f6ca9aada12480ff912689679dda30ddd9c395d5a5f8ed9b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee51d59e7fa2439647332465303bb8ce8ce7827b0305d6e17bc9ba6a30c351d4 = $this->env->getExtension("native_profiler");
        $__internal_ee51d59e7fa2439647332465303bb8ce8ce7827b0305d6e17bc9ba6a30c351d4->enter($__internal_ee51d59e7fa2439647332465303bb8ce8ce7827b0305d6e17bc9ba6a30c351d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >
    ";
        
        $__internal_ee51d59e7fa2439647332465303bb8ce8ce7827b0305d6e17bc9ba6a30c351d4->leave($__internal_ee51d59e7fa2439647332465303bb8ce8ce7827b0305d6e17bc9ba6a30c351d4_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_811494439872de37f8ebfe275a6a66985692fb3b69edce9ff8db9608baf794ee = $this->env->getExtension("native_profiler");
        $__internal_811494439872de37f8ebfe275a6a66985692fb3b69edce9ff8db9608baf794ee->enter($__internal_811494439872de37f8ebfe275a6a66985692fb3b69edce9ff8db9608baf794ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "
";
        
        $__internal_811494439872de37f8ebfe275a6a66985692fb3b69edce9ff8db9608baf794ee->leave($__internal_811494439872de37f8ebfe275a6a66985692fb3b69edce9ff8db9608baf794ee_prof);

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
        return array (  124 => 45,  118 => 44,  108 => 12,  102 => 11,  90 => 6,  79 => 47,  77 => 44,  45 => 14,  43 => 11,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Bonne Poire{% endblock %}</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/* */
/*     {% block stylesheets %}*/
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
/*             <a class="navbar-brand" href="/">Bonne poire </br> Les fruits, c'est la vie !!!</a>*/
/*         </div>*/
/*         <ul class="nav navbar-nav">*/
/* */
/*             <li><a href="/diner)">Clients</a></li>*/
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
