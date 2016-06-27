<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8dc20ceb88b255487df76178fcada34a876c93d015a6bb51e830febd838d6355 extends Twig_Template
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
        $__internal_522c2ccedcbef693726f68b06f276d61c70fc163f82addde63b842f8d9d3a59e = $this->env->getExtension("native_profiler");
        $__internal_522c2ccedcbef693726f68b06f276d61c70fc163f82addde63b842f8d9d3a59e->enter($__internal_522c2ccedcbef693726f68b06f276d61c70fc163f82addde63b842f8d9d3a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_522c2ccedcbef693726f68b06f276d61c70fc163f82addde63b842f8d9d3a59e->leave($__internal_522c2ccedcbef693726f68b06f276d61c70fc163f82addde63b842f8d9d3a59e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
