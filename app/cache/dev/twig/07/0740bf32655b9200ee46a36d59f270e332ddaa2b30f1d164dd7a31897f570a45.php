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
        $__internal_1bdc662f3666d3be833353ef69655a73ce32d0e218cca526b417cc0148f484be = $this->env->getExtension("native_profiler");
        $__internal_1bdc662f3666d3be833353ef69655a73ce32d0e218cca526b417cc0148f484be->enter($__internal_1bdc662f3666d3be833353ef69655a73ce32d0e218cca526b417cc0148f484be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bdc662f3666d3be833353ef69655a73ce32d0e218cca526b417cc0148f484be->leave($__internal_1bdc662f3666d3be833353ef69655a73ce32d0e218cca526b417cc0148f484be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f221a2c9d718c7795e602d949c62e91b59ec8de24a5c66b79a28edc461bfaf7 = $this->env->getExtension("native_profiler");
        $__internal_0f221a2c9d718c7795e602d949c62e91b59ec8de24a5c66b79a28edc461bfaf7->enter($__internal_0f221a2c9d718c7795e602d949c62e91b59ec8de24a5c66b79a28edc461bfaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0f221a2c9d718c7795e602d949c62e91b59ec8de24a5c66b79a28edc461bfaf7->leave($__internal_0f221a2c9d718c7795e602d949c62e91b59ec8de24a5c66b79a28edc461bfaf7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80b7109b0fe0bbe4be9b9f2e24b9a89089360259c7a04bd9cf88b309b59a51d = $this->env->getExtension("native_profiler");
        $__internal_e80b7109b0fe0bbe4be9b9f2e24b9a89089360259c7a04bd9cf88b309b59a51d->enter($__internal_e80b7109b0fe0bbe4be9b9f2e24b9a89089360259c7a04bd9cf88b309b59a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e80b7109b0fe0bbe4be9b9f2e24b9a89089360259c7a04bd9cf88b309b59a51d->leave($__internal_e80b7109b0fe0bbe4be9b9f2e24b9a89089360259c7a04bd9cf88b309b59a51d_prof);

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
