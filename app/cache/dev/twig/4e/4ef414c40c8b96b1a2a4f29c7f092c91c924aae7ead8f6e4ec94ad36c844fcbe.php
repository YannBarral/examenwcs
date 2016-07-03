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
        $__internal_a21827942a41751282ba8c370d8695afd94004a131c61501c3a9eb6873f1f10b = $this->env->getExtension("native_profiler");
        $__internal_a21827942a41751282ba8c370d8695afd94004a131c61501c3a9eb6873f1f10b->enter($__internal_a21827942a41751282ba8c370d8695afd94004a131c61501c3a9eb6873f1f10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21827942a41751282ba8c370d8695afd94004a131c61501c3a9eb6873f1f10b->leave($__internal_a21827942a41751282ba8c370d8695afd94004a131c61501c3a9eb6873f1f10b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72dd7b1c1163f522480355c320e908665df4c0c697a1906cd44a3927fe25c2a3 = $this->env->getExtension("native_profiler");
        $__internal_72dd7b1c1163f522480355c320e908665df4c0c697a1906cd44a3927fe25c2a3->enter($__internal_72dd7b1c1163f522480355c320e908665df4c0c697a1906cd44a3927fe25c2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72dd7b1c1163f522480355c320e908665df4c0c697a1906cd44a3927fe25c2a3->leave($__internal_72dd7b1c1163f522480355c320e908665df4c0c697a1906cd44a3927fe25c2a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94a0b2b6abaf6dff862c188ab3e797c1bba2e60abf3fcbedbba85d49cd1cef17 = $this->env->getExtension("native_profiler");
        $__internal_94a0b2b6abaf6dff862c188ab3e797c1bba2e60abf3fcbedbba85d49cd1cef17->enter($__internal_94a0b2b6abaf6dff862c188ab3e797c1bba2e60abf3fcbedbba85d49cd1cef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94a0b2b6abaf6dff862c188ab3e797c1bba2e60abf3fcbedbba85d49cd1cef17->leave($__internal_94a0b2b6abaf6dff862c188ab3e797c1bba2e60abf3fcbedbba85d49cd1cef17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36755fad60767b3ce7f42d9a7b9340afabe87eee62b90cde143b0ab8ed12a7bd = $this->env->getExtension("native_profiler");
        $__internal_36755fad60767b3ce7f42d9a7b9340afabe87eee62b90cde143b0ab8ed12a7bd->enter($__internal_36755fad60767b3ce7f42d9a7b9340afabe87eee62b90cde143b0ab8ed12a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36755fad60767b3ce7f42d9a7b9340afabe87eee62b90cde143b0ab8ed12a7bd->leave($__internal_36755fad60767b3ce7f42d9a7b9340afabe87eee62b90cde143b0ab8ed12a7bd_prof);

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
