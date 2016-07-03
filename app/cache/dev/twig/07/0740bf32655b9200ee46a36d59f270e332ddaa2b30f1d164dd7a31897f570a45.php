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
        $__internal_66b2634651de0273ed7d2667033304f3e9071ed5307d063a81340a033ce9886e = $this->env->getExtension("native_profiler");
        $__internal_66b2634651de0273ed7d2667033304f3e9071ed5307d063a81340a033ce9886e->enter($__internal_66b2634651de0273ed7d2667033304f3e9071ed5307d063a81340a033ce9886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b2634651de0273ed7d2667033304f3e9071ed5307d063a81340a033ce9886e->leave($__internal_66b2634651de0273ed7d2667033304f3e9071ed5307d063a81340a033ce9886e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e134230bf2e3e7f023b70a55c0ed7abf9795b6e35f1a6571470ab1a3a2c87946 = $this->env->getExtension("native_profiler");
        $__internal_e134230bf2e3e7f023b70a55c0ed7abf9795b6e35f1a6571470ab1a3a2c87946->enter($__internal_e134230bf2e3e7f023b70a55c0ed7abf9795b6e35f1a6571470ab1a3a2c87946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e134230bf2e3e7f023b70a55c0ed7abf9795b6e35f1a6571470ab1a3a2c87946->leave($__internal_e134230bf2e3e7f023b70a55c0ed7abf9795b6e35f1a6571470ab1a3a2c87946_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6bfb330688ae5f6fdbd350b6492aa0fb51aee992de0b76084dc90d82010a68f = $this->env->getExtension("native_profiler");
        $__internal_b6bfb330688ae5f6fdbd350b6492aa0fb51aee992de0b76084dc90d82010a68f->enter($__internal_b6bfb330688ae5f6fdbd350b6492aa0fb51aee992de0b76084dc90d82010a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6bfb330688ae5f6fdbd350b6492aa0fb51aee992de0b76084dc90d82010a68f->leave($__internal_b6bfb330688ae5f6fdbd350b6492aa0fb51aee992de0b76084dc90d82010a68f_prof);

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
