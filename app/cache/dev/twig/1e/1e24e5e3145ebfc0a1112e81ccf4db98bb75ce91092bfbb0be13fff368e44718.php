<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2962a74b4fd118e894c874c504cab72b6a3e57c2062465b788472a7f8e5a6c85 extends Twig_Template
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
        $__internal_bc547dda7639357cd3cf3b05e1224dad56fd7d1692035703d2f53b5ee6e9f89f = $this->env->getExtension("native_profiler");
        $__internal_bc547dda7639357cd3cf3b05e1224dad56fd7d1692035703d2f53b5ee6e9f89f->enter($__internal_bc547dda7639357cd3cf3b05e1224dad56fd7d1692035703d2f53b5ee6e9f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc547dda7639357cd3cf3b05e1224dad56fd7d1692035703d2f53b5ee6e9f89f->leave($__internal_bc547dda7639357cd3cf3b05e1224dad56fd7d1692035703d2f53b5ee6e9f89f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
