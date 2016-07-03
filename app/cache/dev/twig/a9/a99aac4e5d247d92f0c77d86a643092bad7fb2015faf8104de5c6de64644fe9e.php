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
        $__internal_9d342943baa17cd935b77a56f0251ef3221d6ebe261380679af5a2459d6e53ae = $this->env->getExtension("native_profiler");
        $__internal_9d342943baa17cd935b77a56f0251ef3221d6ebe261380679af5a2459d6e53ae->enter($__internal_9d342943baa17cd935b77a56f0251ef3221d6ebe261380679af5a2459d6e53ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d342943baa17cd935b77a56f0251ef3221d6ebe261380679af5a2459d6e53ae->leave($__internal_9d342943baa17cd935b77a56f0251ef3221d6ebe261380679af5a2459d6e53ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4e0542a74ef71e47b5b65428489a16736f5bc8cf1f5d6e6b5a2c292e5027be3 = $this->env->getExtension("native_profiler");
        $__internal_e4e0542a74ef71e47b5b65428489a16736f5bc8cf1f5d6e6b5a2c292e5027be3->enter($__internal_e4e0542a74ef71e47b5b65428489a16736f5bc8cf1f5d6e6b5a2c292e5027be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e4e0542a74ef71e47b5b65428489a16736f5bc8cf1f5d6e6b5a2c292e5027be3->leave($__internal_e4e0542a74ef71e47b5b65428489a16736f5bc8cf1f5d6e6b5a2c292e5027be3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b44ab5c151d43d4cf45a8b4d672fe503ee1170efb4e56a9989675aff3f5947f7 = $this->env->getExtension("native_profiler");
        $__internal_b44ab5c151d43d4cf45a8b4d672fe503ee1170efb4e56a9989675aff3f5947f7->enter($__internal_b44ab5c151d43d4cf45a8b4d672fe503ee1170efb4e56a9989675aff3f5947f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b44ab5c151d43d4cf45a8b4d672fe503ee1170efb4e56a9989675aff3f5947f7->leave($__internal_b44ab5c151d43d4cf45a8b4d672fe503ee1170efb4e56a9989675aff3f5947f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4fcaa51e12d63ac15d84c0f263c9726dd0198238d96f6802621a48cc2a9aa10 = $this->env->getExtension("native_profiler");
        $__internal_b4fcaa51e12d63ac15d84c0f263c9726dd0198238d96f6802621a48cc2a9aa10->enter($__internal_b4fcaa51e12d63ac15d84c0f263c9726dd0198238d96f6802621a48cc2a9aa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b4fcaa51e12d63ac15d84c0f263c9726dd0198238d96f6802621a48cc2a9aa10->leave($__internal_b4fcaa51e12d63ac15d84c0f263c9726dd0198238d96f6802621a48cc2a9aa10_prof);

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
