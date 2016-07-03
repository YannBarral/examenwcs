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
        $__internal_085f01aaea6546eb7063cd21288643f51405151dc3ce7bea674f9661d0051371 = $this->env->getExtension("native_profiler");
        $__internal_085f01aaea6546eb7063cd21288643f51405151dc3ce7bea674f9661d0051371->enter($__internal_085f01aaea6546eb7063cd21288643f51405151dc3ce7bea674f9661d0051371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_085f01aaea6546eb7063cd21288643f51405151dc3ce7bea674f9661d0051371->leave($__internal_085f01aaea6546eb7063cd21288643f51405151dc3ce7bea674f9661d0051371_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81fe5e900cefec52afcea1122a2ed1ca7d71fb885e73cdce732cc219f25c4307 = $this->env->getExtension("native_profiler");
        $__internal_81fe5e900cefec52afcea1122a2ed1ca7d71fb885e73cdce732cc219f25c4307->enter($__internal_81fe5e900cefec52afcea1122a2ed1ca7d71fb885e73cdce732cc219f25c4307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_81fe5e900cefec52afcea1122a2ed1ca7d71fb885e73cdce732cc219f25c4307->leave($__internal_81fe5e900cefec52afcea1122a2ed1ca7d71fb885e73cdce732cc219f25c4307_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6d7b28a7126137f05146dbaa587e7988b1e0ada2fc97de3f4161948b04a6e12 = $this->env->getExtension("native_profiler");
        $__internal_f6d7b28a7126137f05146dbaa587e7988b1e0ada2fc97de3f4161948b04a6e12->enter($__internal_f6d7b28a7126137f05146dbaa587e7988b1e0ada2fc97de3f4161948b04a6e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examenwcs/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >

        ";
        
        $__internal_f6d7b28a7126137f05146dbaa587e7988b1e0ada2fc97de3f4161948b04a6e12->leave($__internal_f6d7b28a7126137f05146dbaa587e7988b1e0ada2fc97de3f4161948b04a6e12_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_bafe7a77e5c79cafb7e44be9541fb1e01ef97ec29412767223eda184bb41cddf = $this->env->getExtension("native_profiler");
        $__internal_bafe7a77e5c79cafb7e44be9541fb1e01ef97ec29412767223eda184bb41cddf->enter($__internal_bafe7a77e5c79cafb7e44be9541fb1e01ef97ec29412767223eda184bb41cddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
        <h1> Elle est belle ma poire !!!! </h1>
        ";
        
        $__internal_bafe7a77e5c79cafb7e44be9541fb1e01ef97ec29412767223eda184bb41cddf->leave($__internal_bafe7a77e5c79cafb7e44be9541fb1e01ef97ec29412767223eda184bb41cddf_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c81769f4b1a2c96b1b83defe62eaef57938140923cf21941d66c7e656a571f67 = $this->env->getExtension("native_profiler");
        $__internal_c81769f4b1a2c96b1b83defe62eaef57938140923cf21941d66c7e656a571f67->enter($__internal_c81769f4b1a2c96b1b83defe62eaef57938140923cf21941d66c7e656a571f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c81769f4b1a2c96b1b83defe62eaef57938140923cf21941d66c7e656a571f67->leave($__internal_c81769f4b1a2c96b1b83defe62eaef57938140923cf21941d66c7e656a571f67_prof);

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
