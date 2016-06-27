<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e74dda25c9cf115139266e4793c15294d20a3b0db75370cf54ce5d53ddb099d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4db7edfa143c9cee48b5f49b437c33365aae5143c0db6992cff2825f709e5a4 = $this->env->getExtension("native_profiler");
        $__internal_e4db7edfa143c9cee48b5f49b437c33365aae5143c0db6992cff2825f709e5a4->enter($__internal_e4db7edfa143c9cee48b5f49b437c33365aae5143c0db6992cff2825f709e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4db7edfa143c9cee48b5f49b437c33365aae5143c0db6992cff2825f709e5a4->leave($__internal_e4db7edfa143c9cee48b5f49b437c33365aae5143c0db6992cff2825f709e5a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fc7b53c6732021582a237af67717bbbc4550cf9e13f86f03e5fc155a6288d0b = $this->env->getExtension("native_profiler");
        $__internal_7fc7b53c6732021582a237af67717bbbc4550cf9e13f86f03e5fc155a6288d0b->enter($__internal_7fc7b53c6732021582a237af67717bbbc4550cf9e13f86f03e5fc155a6288d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7fc7b53c6732021582a237af67717bbbc4550cf9e13f86f03e5fc155a6288d0b->leave($__internal_7fc7b53c6732021582a237af67717bbbc4550cf9e13f86f03e5fc155a6288d0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f401e14e113adec8410a03ed88e5359695daf638f9106d80287be70c499e8dbe = $this->env->getExtension("native_profiler");
        $__internal_f401e14e113adec8410a03ed88e5359695daf638f9106d80287be70c499e8dbe->enter($__internal_f401e14e113adec8410a03ed88e5359695daf638f9106d80287be70c499e8dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f401e14e113adec8410a03ed88e5359695daf638f9106d80287be70c499e8dbe->leave($__internal_f401e14e113adec8410a03ed88e5359695daf638f9106d80287be70c499e8dbe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_192bb7c6878d7efc970032b71326d89ff9bbbd5216b2f3f8449deffc6377a514 = $this->env->getExtension("native_profiler");
        $__internal_192bb7c6878d7efc970032b71326d89ff9bbbd5216b2f3f8449deffc6377a514->enter($__internal_192bb7c6878d7efc970032b71326d89ff9bbbd5216b2f3f8449deffc6377a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_192bb7c6878d7efc970032b71326d89ff9bbbd5216b2f3f8449deffc6377a514->leave($__internal_192bb7c6878d7efc970032b71326d89ff9bbbd5216b2f3f8449deffc6377a514_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
