<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_409da1d5f9aa42205cd20101af2849113ffa1ec929427f3d3d1aeea215f4b802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ffef72269939328f5f88c7bd47bf77bc394a5113f656a41b02106fac8c9f9cbd = $this->env->getExtension("native_profiler");
        $__internal_ffef72269939328f5f88c7bd47bf77bc394a5113f656a41b02106fac8c9f9cbd->enter($__internal_ffef72269939328f5f88c7bd47bf77bc394a5113f656a41b02106fac8c9f9cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffef72269939328f5f88c7bd47bf77bc394a5113f656a41b02106fac8c9f9cbd->leave($__internal_ffef72269939328f5f88c7bd47bf77bc394a5113f656a41b02106fac8c9f9cbd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3fe0dd4affed36f4d80acc0fd8788a7ceafc3775e38eeee7a15e7b6fc8e7b48 = $this->env->getExtension("native_profiler");
        $__internal_e3fe0dd4affed36f4d80acc0fd8788a7ceafc3775e38eeee7a15e7b6fc8e7b48->enter($__internal_e3fe0dd4affed36f4d80acc0fd8788a7ceafc3775e38eeee7a15e7b6fc8e7b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e3fe0dd4affed36f4d80acc0fd8788a7ceafc3775e38eeee7a15e7b6fc8e7b48->leave($__internal_e3fe0dd4affed36f4d80acc0fd8788a7ceafc3775e38eeee7a15e7b6fc8e7b48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0291d13f57131f06db3c88a35a76dd37ffb4991e92b03b4d513fe4593cb52554 = $this->env->getExtension("native_profiler");
        $__internal_0291d13f57131f06db3c88a35a76dd37ffb4991e92b03b4d513fe4593cb52554->enter($__internal_0291d13f57131f06db3c88a35a76dd37ffb4991e92b03b4d513fe4593cb52554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0291d13f57131f06db3c88a35a76dd37ffb4991e92b03b4d513fe4593cb52554->leave($__internal_0291d13f57131f06db3c88a35a76dd37ffb4991e92b03b4d513fe4593cb52554_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e5a8e7f83c66a2b60467358054e7e6fc912aef28b62f2c787ebca5c732e4975 = $this->env->getExtension("native_profiler");
        $__internal_7e5a8e7f83c66a2b60467358054e7e6fc912aef28b62f2c787ebca5c732e4975->enter($__internal_7e5a8e7f83c66a2b60467358054e7e6fc912aef28b62f2c787ebca5c732e4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e5a8e7f83c66a2b60467358054e7e6fc912aef28b62f2c787ebca5c732e4975->leave($__internal_7e5a8e7f83c66a2b60467358054e7e6fc912aef28b62f2c787ebca5c732e4975_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
