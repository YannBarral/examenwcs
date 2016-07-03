<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_57eff094340d7c046b6b0b46e689f412640fbb93a8ba17b1d5c544e57a9ef1b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebf0a7b05d9559a6388096c21b8c8fbe934088a930d27f001e9da327f292d43b = $this->env->getExtension("native_profiler");
        $__internal_ebf0a7b05d9559a6388096c21b8c8fbe934088a930d27f001e9da327f292d43b->enter($__internal_ebf0a7b05d9559a6388096c21b8c8fbe934088a930d27f001e9da327f292d43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ebf0a7b05d9559a6388096c21b8c8fbe934088a930d27f001e9da327f292d43b->leave($__internal_ebf0a7b05d9559a6388096c21b8c8fbe934088a930d27f001e9da327f292d43b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6871041b6b7f465ccc95dbd39b337ec51da57ad2af97bfdfa26a923108260326 = $this->env->getExtension("native_profiler");
        $__internal_6871041b6b7f465ccc95dbd39b337ec51da57ad2af97bfdfa26a923108260326->enter($__internal_6871041b6b7f465ccc95dbd39b337ec51da57ad2af97bfdfa26a923108260326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6871041b6b7f465ccc95dbd39b337ec51da57ad2af97bfdfa26a923108260326->leave($__internal_6871041b6b7f465ccc95dbd39b337ec51da57ad2af97bfdfa26a923108260326_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
