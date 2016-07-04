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
        $__internal_ebe70f64b072e7baf7aacb8d1bacf3eeeb53c3882f9f1d27d8b1c18e8f0fd043 = $this->env->getExtension("native_profiler");
        $__internal_ebe70f64b072e7baf7aacb8d1bacf3eeeb53c3882f9f1d27d8b1c18e8f0fd043->enter($__internal_ebe70f64b072e7baf7aacb8d1bacf3eeeb53c3882f9f1d27d8b1c18e8f0fd043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ebe70f64b072e7baf7aacb8d1bacf3eeeb53c3882f9f1d27d8b1c18e8f0fd043->leave($__internal_ebe70f64b072e7baf7aacb8d1bacf3eeeb53c3882f9f1d27d8b1c18e8f0fd043_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_15469989c63eda69091b5f6bc8f582a5fbb5a403ab97468ba6c104abac27e237 = $this->env->getExtension("native_profiler");
        $__internal_15469989c63eda69091b5f6bc8f582a5fbb5a403ab97468ba6c104abac27e237->enter($__internal_15469989c63eda69091b5f6bc8f582a5fbb5a403ab97468ba6c104abac27e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15469989c63eda69091b5f6bc8f582a5fbb5a403ab97468ba6c104abac27e237->leave($__internal_15469989c63eda69091b5f6bc8f582a5fbb5a403ab97468ba6c104abac27e237_prof);

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
