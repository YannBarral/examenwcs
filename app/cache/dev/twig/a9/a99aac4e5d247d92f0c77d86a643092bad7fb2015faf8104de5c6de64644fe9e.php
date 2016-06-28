<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ded0bd47e9771801b0f9c796e8ca2612111f95566f367f2261ea60523b65a26f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d750adcb801db47bcdb256fb0a72a15a1b0ae42d246d3cb833bfef455cef4b34 = $this->env->getExtension("native_profiler");
        $__internal_d750adcb801db47bcdb256fb0a72a15a1b0ae42d246d3cb833bfef455cef4b34->enter($__internal_d750adcb801db47bcdb256fb0a72a15a1b0ae42d246d3cb833bfef455cef4b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d750adcb801db47bcdb256fb0a72a15a1b0ae42d246d3cb833bfef455cef4b34->leave($__internal_d750adcb801db47bcdb256fb0a72a15a1b0ae42d246d3cb833bfef455cef4b34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24e84fa1f36fef4f2a540591e07c503860236ee982f4646efcb3012547aac725 = $this->env->getExtension("native_profiler");
        $__internal_24e84fa1f36fef4f2a540591e07c503860236ee982f4646efcb3012547aac725->enter($__internal_24e84fa1f36fef4f2a540591e07c503860236ee982f4646efcb3012547aac725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24e84fa1f36fef4f2a540591e07c503860236ee982f4646efcb3012547aac725->leave($__internal_24e84fa1f36fef4f2a540591e07c503860236ee982f4646efcb3012547aac725_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_365f109e36ba8fad7983f178ec962def571889706e1a6ebd6d51c3e031c2aa29 = $this->env->getExtension("native_profiler");
        $__internal_365f109e36ba8fad7983f178ec962def571889706e1a6ebd6d51c3e031c2aa29->enter($__internal_365f109e36ba8fad7983f178ec962def571889706e1a6ebd6d51c3e031c2aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_365f109e36ba8fad7983f178ec962def571889706e1a6ebd6d51c3e031c2aa29->leave($__internal_365f109e36ba8fad7983f178ec962def571889706e1a6ebd6d51c3e031c2aa29_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d284924dfd65145eae29e900767a2e681a934542e23cd21f9def52d6df417e8 = $this->env->getExtension("native_profiler");
        $__internal_8d284924dfd65145eae29e900767a2e681a934542e23cd21f9def52d6df417e8->enter($__internal_8d284924dfd65145eae29e900767a2e681a934542e23cd21f9def52d6df417e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8d284924dfd65145eae29e900767a2e681a934542e23cd21f9def52d6df417e8->leave($__internal_8d284924dfd65145eae29e900767a2e681a934542e23cd21f9def52d6df417e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
