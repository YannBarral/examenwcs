<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a27bcc6ba55e30f43f6513428d52c9f1f9ada77a91280f9a47c760b450922f05 extends Twig_Template
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
        $__internal_68505103c84c7ea255c24ad6746f177d6dcd5f1d4bdbeeb1f83d72572bd0a066 = $this->env->getExtension("native_profiler");
        $__internal_68505103c84c7ea255c24ad6746f177d6dcd5f1d4bdbeeb1f83d72572bd0a066->enter($__internal_68505103c84c7ea255c24ad6746f177d6dcd5f1d4bdbeeb1f83d72572bd0a066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_68505103c84c7ea255c24ad6746f177d6dcd5f1d4bdbeeb1f83d72572bd0a066->leave($__internal_68505103c84c7ea255c24ad6746f177d6dcd5f1d4bdbeeb1f83d72572bd0a066_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
