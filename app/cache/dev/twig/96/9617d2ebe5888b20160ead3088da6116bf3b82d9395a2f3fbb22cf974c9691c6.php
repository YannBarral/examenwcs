<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_459eab9adf383c38cb2f8d93c73d9006c094760799e54041d8e2942523052f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21f07b3a6a57d65bc6dc32cc49c5ad18f187fb6a9492c7b00fa0c5ecdbfe15cf = $this->env->getExtension("native_profiler");
        $__internal_21f07b3a6a57d65bc6dc32cc49c5ad18f187fb6a9492c7b00fa0c5ecdbfe15cf->enter($__internal_21f07b3a6a57d65bc6dc32cc49c5ad18f187fb6a9492c7b00fa0c5ecdbfe15cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_21f07b3a6a57d65bc6dc32cc49c5ad18f187fb6a9492c7b00fa0c5ecdbfe15cf->leave($__internal_21f07b3a6a57d65bc6dc32cc49c5ad18f187fb6a9492c7b00fa0c5ecdbfe15cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
