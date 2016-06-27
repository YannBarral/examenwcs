<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_76ce999098930246359c286ae7f1603f4d0e03cbb77fb964e1004ab599752d8a extends Twig_Template
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
        $__internal_44778fd6f97be8fbbc5911ab845219c58e0d47167e85e189458d5aa59f82b072 = $this->env->getExtension("native_profiler");
        $__internal_44778fd6f97be8fbbc5911ab845219c58e0d47167e85e189458d5aa59f82b072->enter($__internal_44778fd6f97be8fbbc5911ab845219c58e0d47167e85e189458d5aa59f82b072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44778fd6f97be8fbbc5911ab845219c58e0d47167e85e189458d5aa59f82b072->leave($__internal_44778fd6f97be8fbbc5911ab845219c58e0d47167e85e189458d5aa59f82b072_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f567d1c5871d1aac694e46f47de0b630dd2d35902f4fc5f48934d178fce3da18 = $this->env->getExtension("native_profiler");
        $__internal_f567d1c5871d1aac694e46f47de0b630dd2d35902f4fc5f48934d178fce3da18->enter($__internal_f567d1c5871d1aac694e46f47de0b630dd2d35902f4fc5f48934d178fce3da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f567d1c5871d1aac694e46f47de0b630dd2d35902f4fc5f48934d178fce3da18->leave($__internal_f567d1c5871d1aac694e46f47de0b630dd2d35902f4fc5f48934d178fce3da18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_08615451eea64c19c28e281e63ebae9a991aa286cede0fda1eb854d362621ffa = $this->env->getExtension("native_profiler");
        $__internal_08615451eea64c19c28e281e63ebae9a991aa286cede0fda1eb854d362621ffa->enter($__internal_08615451eea64c19c28e281e63ebae9a991aa286cede0fda1eb854d362621ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08615451eea64c19c28e281e63ebae9a991aa286cede0fda1eb854d362621ffa->leave($__internal_08615451eea64c19c28e281e63ebae9a991aa286cede0fda1eb854d362621ffa_prof);

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
