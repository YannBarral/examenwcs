<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8597b79839ee065dda21bc3ecbc95173227f88c326c2d09c3f33d8cdcd2473fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ddc70ac870ca4efee509e70d430153cf67984cd8b9214aa58f8ee0d9299d42ce = $this->env->getExtension("native_profiler");
        $__internal_ddc70ac870ca4efee509e70d430153cf67984cd8b9214aa58f8ee0d9299d42ce->enter($__internal_ddc70ac870ca4efee509e70d430153cf67984cd8b9214aa58f8ee0d9299d42ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc70ac870ca4efee509e70d430153cf67984cd8b9214aa58f8ee0d9299d42ce->leave($__internal_ddc70ac870ca4efee509e70d430153cf67984cd8b9214aa58f8ee0d9299d42ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_792ecd02cd3ffde1bdefd365c0b450c419e35c6d8416c96cb18a560f59b5a2c6 = $this->env->getExtension("native_profiler");
        $__internal_792ecd02cd3ffde1bdefd365c0b450c419e35c6d8416c96cb18a560f59b5a2c6->enter($__internal_792ecd02cd3ffde1bdefd365c0b450c419e35c6d8416c96cb18a560f59b5a2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_792ecd02cd3ffde1bdefd365c0b450c419e35c6d8416c96cb18a560f59b5a2c6->leave($__internal_792ecd02cd3ffde1bdefd365c0b450c419e35c6d8416c96cb18a560f59b5a2c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f854f90dd95c057304fc375f02bfcbc124301d3cae05848cd9303db32534fa01 = $this->env->getExtension("native_profiler");
        $__internal_f854f90dd95c057304fc375f02bfcbc124301d3cae05848cd9303db32534fa01->enter($__internal_f854f90dd95c057304fc375f02bfcbc124301d3cae05848cd9303db32534fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f854f90dd95c057304fc375f02bfcbc124301d3cae05848cd9303db32534fa01->leave($__internal_f854f90dd95c057304fc375f02bfcbc124301d3cae05848cd9303db32534fa01_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
