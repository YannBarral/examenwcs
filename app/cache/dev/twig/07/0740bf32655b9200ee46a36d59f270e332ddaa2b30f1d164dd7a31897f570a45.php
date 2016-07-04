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
        $__internal_4701b1173500b685d734d5e18bf68f2009fdbd8f4458897b0b492a1a0da4c47a = $this->env->getExtension("native_profiler");
        $__internal_4701b1173500b685d734d5e18bf68f2009fdbd8f4458897b0b492a1a0da4c47a->enter($__internal_4701b1173500b685d734d5e18bf68f2009fdbd8f4458897b0b492a1a0da4c47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4701b1173500b685d734d5e18bf68f2009fdbd8f4458897b0b492a1a0da4c47a->leave($__internal_4701b1173500b685d734d5e18bf68f2009fdbd8f4458897b0b492a1a0da4c47a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e561b0926a6bc97de8b49870bbe81a5292072994ec41577a7e087c11a4ba3305 = $this->env->getExtension("native_profiler");
        $__internal_e561b0926a6bc97de8b49870bbe81a5292072994ec41577a7e087c11a4ba3305->enter($__internal_e561b0926a6bc97de8b49870bbe81a5292072994ec41577a7e087c11a4ba3305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e561b0926a6bc97de8b49870bbe81a5292072994ec41577a7e087c11a4ba3305->leave($__internal_e561b0926a6bc97de8b49870bbe81a5292072994ec41577a7e087c11a4ba3305_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99e91a2ce4626939e5fc4b1c498dd4b78528b04b14789db949464c54ef033018 = $this->env->getExtension("native_profiler");
        $__internal_99e91a2ce4626939e5fc4b1c498dd4b78528b04b14789db949464c54ef033018->enter($__internal_99e91a2ce4626939e5fc4b1c498dd4b78528b04b14789db949464c54ef033018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99e91a2ce4626939e5fc4b1c498dd4b78528b04b14789db949464c54ef033018->leave($__internal_99e91a2ce4626939e5fc4b1c498dd4b78528b04b14789db949464c54ef033018_prof);

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
