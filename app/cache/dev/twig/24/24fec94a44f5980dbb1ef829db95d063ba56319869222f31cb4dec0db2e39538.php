<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3f55cdd046347e25059c0ed4da888b473f102ffce583a705fa41049b08b71271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c362598f852764128562337b6d1eadbb71f775889030a8d16e7cf1e1dd589c80 = $this->env->getExtension("native_profiler");
        $__internal_c362598f852764128562337b6d1eadbb71f775889030a8d16e7cf1e1dd589c80->enter($__internal_c362598f852764128562337b6d1eadbb71f775889030a8d16e7cf1e1dd589c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c362598f852764128562337b6d1eadbb71f775889030a8d16e7cf1e1dd589c80->leave($__internal_c362598f852764128562337b6d1eadbb71f775889030a8d16e7cf1e1dd589c80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_891fd4e130b55c8cc24fe1e89fad0f597b1e6802d72fc020d0135dd04cd6fbdc = $this->env->getExtension("native_profiler");
        $__internal_891fd4e130b55c8cc24fe1e89fad0f597b1e6802d72fc020d0135dd04cd6fbdc->enter($__internal_891fd4e130b55c8cc24fe1e89fad0f597b1e6802d72fc020d0135dd04cd6fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_891fd4e130b55c8cc24fe1e89fad0f597b1e6802d72fc020d0135dd04cd6fbdc->leave($__internal_891fd4e130b55c8cc24fe1e89fad0f597b1e6802d72fc020d0135dd04cd6fbdc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e86817f8029e3ce5b0d1b57c5c78490557b754e78eaf4559ae722c7a86406197 = $this->env->getExtension("native_profiler");
        $__internal_e86817f8029e3ce5b0d1b57c5c78490557b754e78eaf4559ae722c7a86406197->enter($__internal_e86817f8029e3ce5b0d1b57c5c78490557b754e78eaf4559ae722c7a86406197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e86817f8029e3ce5b0d1b57c5c78490557b754e78eaf4559ae722c7a86406197->leave($__internal_e86817f8029e3ce5b0d1b57c5c78490557b754e78eaf4559ae722c7a86406197_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f79739a986c297b62f3736581c0eb415219711f7b142401a33dc98e62fe9740e = $this->env->getExtension("native_profiler");
        $__internal_f79739a986c297b62f3736581c0eb415219711f7b142401a33dc98e62fe9740e->enter($__internal_f79739a986c297b62f3736581c0eb415219711f7b142401a33dc98e62fe9740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f79739a986c297b62f3736581c0eb415219711f7b142401a33dc98e62fe9740e->leave($__internal_f79739a986c297b62f3736581c0eb415219711f7b142401a33dc98e62fe9740e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
