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
        $__internal_cf1be34f1d6b6691c66a9fe2e33de89ef8c1a8a41b9d0e08fbd323d0a78f8ba3 = $this->env->getExtension("native_profiler");
        $__internal_cf1be34f1d6b6691c66a9fe2e33de89ef8c1a8a41b9d0e08fbd323d0a78f8ba3->enter($__internal_cf1be34f1d6b6691c66a9fe2e33de89ef8c1a8a41b9d0e08fbd323d0a78f8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1be34f1d6b6691c66a9fe2e33de89ef8c1a8a41b9d0e08fbd323d0a78f8ba3->leave($__internal_cf1be34f1d6b6691c66a9fe2e33de89ef8c1a8a41b9d0e08fbd323d0a78f8ba3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23a56ccd32c0c53992f5d5f90773dbac664cd92806e608b84a518dd3c64b24bd = $this->env->getExtension("native_profiler");
        $__internal_23a56ccd32c0c53992f5d5f90773dbac664cd92806e608b84a518dd3c64b24bd->enter($__internal_23a56ccd32c0c53992f5d5f90773dbac664cd92806e608b84a518dd3c64b24bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23a56ccd32c0c53992f5d5f90773dbac664cd92806e608b84a518dd3c64b24bd->leave($__internal_23a56ccd32c0c53992f5d5f90773dbac664cd92806e608b84a518dd3c64b24bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_600b9d5379fbbbd4249ada53a3379a0d544b1ca9381b7263565e73e41c880177 = $this->env->getExtension("native_profiler");
        $__internal_600b9d5379fbbbd4249ada53a3379a0d544b1ca9381b7263565e73e41c880177->enter($__internal_600b9d5379fbbbd4249ada53a3379a0d544b1ca9381b7263565e73e41c880177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_600b9d5379fbbbd4249ada53a3379a0d544b1ca9381b7263565e73e41c880177->leave($__internal_600b9d5379fbbbd4249ada53a3379a0d544b1ca9381b7263565e73e41c880177_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32868324681a409a6e1dc753ba353ba7eeb70b3c20ac0f7c18e9ef233684e95b = $this->env->getExtension("native_profiler");
        $__internal_32868324681a409a6e1dc753ba353ba7eeb70b3c20ac0f7c18e9ef233684e95b->enter($__internal_32868324681a409a6e1dc753ba353ba7eeb70b3c20ac0f7c18e9ef233684e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32868324681a409a6e1dc753ba353ba7eeb70b3c20ac0f7c18e9ef233684e95b->leave($__internal_32868324681a409a6e1dc753ba353ba7eeb70b3c20ac0f7c18e9ef233684e95b_prof);

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
