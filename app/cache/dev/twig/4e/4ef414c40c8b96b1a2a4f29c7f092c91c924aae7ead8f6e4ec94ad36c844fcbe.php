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
        $__internal_cde56c5d5877183db9b3dba6e622c857f56a69aa163fafe27e0a1316745d5359 = $this->env->getExtension("native_profiler");
        $__internal_cde56c5d5877183db9b3dba6e622c857f56a69aa163fafe27e0a1316745d5359->enter($__internal_cde56c5d5877183db9b3dba6e622c857f56a69aa163fafe27e0a1316745d5359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde56c5d5877183db9b3dba6e622c857f56a69aa163fafe27e0a1316745d5359->leave($__internal_cde56c5d5877183db9b3dba6e622c857f56a69aa163fafe27e0a1316745d5359_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2401b6e9bde2341881210f66bdcd19c1bb3573d7d05706191d034606c4e70a9b = $this->env->getExtension("native_profiler");
        $__internal_2401b6e9bde2341881210f66bdcd19c1bb3573d7d05706191d034606c4e70a9b->enter($__internal_2401b6e9bde2341881210f66bdcd19c1bb3573d7d05706191d034606c4e70a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2401b6e9bde2341881210f66bdcd19c1bb3573d7d05706191d034606c4e70a9b->leave($__internal_2401b6e9bde2341881210f66bdcd19c1bb3573d7d05706191d034606c4e70a9b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68e21c445bd18a9ec3991beca740331f6b339f3ad5593a107ca4c426404f2abc = $this->env->getExtension("native_profiler");
        $__internal_68e21c445bd18a9ec3991beca740331f6b339f3ad5593a107ca4c426404f2abc->enter($__internal_68e21c445bd18a9ec3991beca740331f6b339f3ad5593a107ca4c426404f2abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68e21c445bd18a9ec3991beca740331f6b339f3ad5593a107ca4c426404f2abc->leave($__internal_68e21c445bd18a9ec3991beca740331f6b339f3ad5593a107ca4c426404f2abc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93c8b4da8587eebcee59b684079388d51b88f829d14ebb2cb1d81c23fa3340b5 = $this->env->getExtension("native_profiler");
        $__internal_93c8b4da8587eebcee59b684079388d51b88f829d14ebb2cb1d81c23fa3340b5->enter($__internal_93c8b4da8587eebcee59b684079388d51b88f829d14ebb2cb1d81c23fa3340b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93c8b4da8587eebcee59b684079388d51b88f829d14ebb2cb1d81c23fa3340b5->leave($__internal_93c8b4da8587eebcee59b684079388d51b88f829d14ebb2cb1d81c23fa3340b5_prof);

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
