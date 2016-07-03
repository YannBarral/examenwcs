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
        $__internal_514523ea7972d797bab5f04e9e858de8852a69d6d8f5915c3ae2e3abf3ccc193 = $this->env->getExtension("native_profiler");
        $__internal_514523ea7972d797bab5f04e9e858de8852a69d6d8f5915c3ae2e3abf3ccc193->enter($__internal_514523ea7972d797bab5f04e9e858de8852a69d6d8f5915c3ae2e3abf3ccc193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FruitBundle:Default:page1.html.twig"));

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
        
        $__internal_514523ea7972d797bab5f04e9e858de8852a69d6d8f5915c3ae2e3abf3ccc193->leave($__internal_514523ea7972d797bab5f04e9e858de8852a69d6d8f5915c3ae2e3abf3ccc193_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fadde1fa099dc5a96550f64f1f8ca3051bc807bb7df5ee601f0b192f405f5528 = $this->env->getExtension("native_profiler");
        $__internal_fadde1fa099dc5a96550f64f1f8ca3051bc807bb7df5ee601f0b192f405f5528->enter($__internal_fadde1fa099dc5a96550f64f1f8ca3051bc807bb7df5ee601f0b192f405f5528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonne Poire";
        
        $__internal_fadde1fa099dc5a96550f64f1f8ca3051bc807bb7df5ee601f0b192f405f5528->leave($__internal_fadde1fa099dc5a96550f64f1f8ca3051bc807bb7df5ee601f0b192f405f5528_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cab0ba869a72c73bfaa3ca5d59ca26d523f9f965454eeab59c98d8f7782fa4b3 = $this->env->getExtension("native_profiler");
        $__internal_cab0ba869a72c73bfaa3ca5d59ca26d523f9f965454eeab59c98d8f7782fa4b3->enter($__internal_cab0ba869a72c73bfaa3ca5d59ca26d523f9f965454eeab59c98d8f7782fa4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/examenwcs/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" >

    ";
        
        $__internal_cab0ba869a72c73bfaa3ca5d59ca26d523f9f965454eeab59c98d8f7782fa4b3->leave($__internal_cab0ba869a72c73bfaa3ca5d59ca26d523f9f965454eeab59c98d8f7782fa4b3_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_34984812eddc213c791e45d9e41a18a6ee6087622a45c7fdd6f716e335c9994f = $this->env->getExtension("native_profiler");
        $__internal_34984812eddc213c791e45d9e41a18a6ee6087622a45c7fdd6f716e335c9994f->enter($__internal_34984812eddc213c791e45d9e41a18a6ee6087622a45c7fdd6f716e335c9994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<h1>En vla une Belle Poire !!!!</h1>

";
        
        $__internal_34984812eddc213c791e45d9e41a18a6ee6087622a45c7fdd6f716e335c9994f->leave($__internal_34984812eddc213c791e45d9e41a18a6ee6087622a45c7fdd6f716e335c9994f_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0baa03eacc73800c99ac3774d00e335e3f4204ce4a1f8371d3395fd629808e4 = $this->env->getExtension("native_profiler");
        $__internal_f0baa03eacc73800c99ac3774d00e335e3f4204ce4a1f8371d3395fd629808e4->enter($__internal_f0baa03eacc73800c99ac3774d00e335e3f4204ce4a1f8371d3395fd629808e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0baa03eacc73800c99ac3774d00e335e3f4204ce4a1f8371d3395fd629808e4->leave($__internal_f0baa03eacc73800c99ac3774d00e335e3f4204ce4a1f8371d3395fd629808e4_prof);

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
