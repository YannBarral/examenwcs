<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_77bd22d0fa2088d0c72dc8e7f89ee5540b7544fa7639ac09fecfffe7cd833bf8 extends Twig_Template
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
        $__internal_1da9a41e648e7e0262b3cb91200eb03e01c1f2280efeeea7efe8b6fbc0134c22 = $this->env->getExtension("native_profiler");
        $__internal_1da9a41e648e7e0262b3cb91200eb03e01c1f2280efeeea7efe8b6fbc0134c22->enter($__internal_1da9a41e648e7e0262b3cb91200eb03e01c1f2280efeeea7efe8b6fbc0134c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da9a41e648e7e0262b3cb91200eb03e01c1f2280efeeea7efe8b6fbc0134c22->leave($__internal_1da9a41e648e7e0262b3cb91200eb03e01c1f2280efeeea7efe8b6fbc0134c22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d572a50166b3b9a2dd036e4d0c5c170ac4aee78cf9b4e7f0864e2ac53f92660 = $this->env->getExtension("native_profiler");
        $__internal_9d572a50166b3b9a2dd036e4d0c5c170ac4aee78cf9b4e7f0864e2ac53f92660->enter($__internal_9d572a50166b3b9a2dd036e4d0c5c170ac4aee78cf9b4e7f0864e2ac53f92660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d572a50166b3b9a2dd036e4d0c5c170ac4aee78cf9b4e7f0864e2ac53f92660->leave($__internal_9d572a50166b3b9a2dd036e4d0c5c170ac4aee78cf9b4e7f0864e2ac53f92660_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ea1b697d6dbceedde6086434a13aa61f7fa3278de4c73e4771c20d6b9062154 = $this->env->getExtension("native_profiler");
        $__internal_6ea1b697d6dbceedde6086434a13aa61f7fa3278de4c73e4771c20d6b9062154->enter($__internal_6ea1b697d6dbceedde6086434a13aa61f7fa3278de4c73e4771c20d6b9062154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ea1b697d6dbceedde6086434a13aa61f7fa3278de4c73e4771c20d6b9062154->leave($__internal_6ea1b697d6dbceedde6086434a13aa61f7fa3278de4c73e4771c20d6b9062154_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3bb4f386a263fd350a21a308bef58f912ca0b2d19a26861fdb633c57e97e3a = $this->env->getExtension("native_profiler");
        $__internal_8d3bb4f386a263fd350a21a308bef58f912ca0b2d19a26861fdb633c57e97e3a->enter($__internal_8d3bb4f386a263fd350a21a308bef58f912ca0b2d19a26861fdb633c57e97e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8d3bb4f386a263fd350a21a308bef58f912ca0b2d19a26861fdb633c57e97e3a->leave($__internal_8d3bb4f386a263fd350a21a308bef58f912ca0b2d19a26861fdb633c57e97e3a_prof);

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
