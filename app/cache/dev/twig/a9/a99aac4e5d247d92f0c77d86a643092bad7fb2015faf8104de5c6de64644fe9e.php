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
        $__internal_0bcf6ab0895976e312d525363e8e2f1751e5f1ef1877b719eb2d660dbd1d5840 = $this->env->getExtension("native_profiler");
        $__internal_0bcf6ab0895976e312d525363e8e2f1751e5f1ef1877b719eb2d660dbd1d5840->enter($__internal_0bcf6ab0895976e312d525363e8e2f1751e5f1ef1877b719eb2d660dbd1d5840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcf6ab0895976e312d525363e8e2f1751e5f1ef1877b719eb2d660dbd1d5840->leave($__internal_0bcf6ab0895976e312d525363e8e2f1751e5f1ef1877b719eb2d660dbd1d5840_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f926c287de9034707444730bc6ea88b15d8556bd1c58c1acf2d040127a8e4032 = $this->env->getExtension("native_profiler");
        $__internal_f926c287de9034707444730bc6ea88b15d8556bd1c58c1acf2d040127a8e4032->enter($__internal_f926c287de9034707444730bc6ea88b15d8556bd1c58c1acf2d040127a8e4032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f926c287de9034707444730bc6ea88b15d8556bd1c58c1acf2d040127a8e4032->leave($__internal_f926c287de9034707444730bc6ea88b15d8556bd1c58c1acf2d040127a8e4032_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f731063f4d562f0b646b1a21a63e34de72dfdbbada3e0d76ae779dc58d65bf6 = $this->env->getExtension("native_profiler");
        $__internal_3f731063f4d562f0b646b1a21a63e34de72dfdbbada3e0d76ae779dc58d65bf6->enter($__internal_3f731063f4d562f0b646b1a21a63e34de72dfdbbada3e0d76ae779dc58d65bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f731063f4d562f0b646b1a21a63e34de72dfdbbada3e0d76ae779dc58d65bf6->leave($__internal_3f731063f4d562f0b646b1a21a63e34de72dfdbbada3e0d76ae779dc58d65bf6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_819fe42e3e2c20499d45848a39335875c99dd22d568df0529bb4f23b069dd5ef = $this->env->getExtension("native_profiler");
        $__internal_819fe42e3e2c20499d45848a39335875c99dd22d568df0529bb4f23b069dd5ef->enter($__internal_819fe42e3e2c20499d45848a39335875c99dd22d568df0529bb4f23b069dd5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_819fe42e3e2c20499d45848a39335875c99dd22d568df0529bb4f23b069dd5ef->leave($__internal_819fe42e3e2c20499d45848a39335875c99dd22d568df0529bb4f23b069dd5ef_prof);

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
