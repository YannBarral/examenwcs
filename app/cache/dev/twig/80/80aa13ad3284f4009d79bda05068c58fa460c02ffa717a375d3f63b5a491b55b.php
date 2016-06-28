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
        $__internal_aa3f1d15a1382bd88c6316309279f5bbd8a6370a0e08b090a2a1fae5bf643c97 = $this->env->getExtension("native_profiler");
        $__internal_aa3f1d15a1382bd88c6316309279f5bbd8a6370a0e08b090a2a1fae5bf643c97->enter($__internal_aa3f1d15a1382bd88c6316309279f5bbd8a6370a0e08b090a2a1fae5bf643c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aa3f1d15a1382bd88c6316309279f5bbd8a6370a0e08b090a2a1fae5bf643c97->leave($__internal_aa3f1d15a1382bd88c6316309279f5bbd8a6370a0e08b090a2a1fae5bf643c97_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_71a6f6852949f7bb4d43dd76cd454e81647fc9f2e92393b092f450089af8c000 = $this->env->getExtension("native_profiler");
        $__internal_71a6f6852949f7bb4d43dd76cd454e81647fc9f2e92393b092f450089af8c000->enter($__internal_71a6f6852949f7bb4d43dd76cd454e81647fc9f2e92393b092f450089af8c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_71a6f6852949f7bb4d43dd76cd454e81647fc9f2e92393b092f450089af8c000->leave($__internal_71a6f6852949f7bb4d43dd76cd454e81647fc9f2e92393b092f450089af8c000_prof);

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
