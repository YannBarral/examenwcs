<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f66706f8b5f97ac5e67dccc9082206f273ed4a58a67eb9999c02ec1696e1c8a3 extends Twig_Template
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
        $__internal_1f367a0a6f43918205cf5113e1c24401daa344700ffb6d585b85a5682450a6e3 = $this->env->getExtension("native_profiler");
        $__internal_1f367a0a6f43918205cf5113e1c24401daa344700ffb6d585b85a5682450a6e3->enter($__internal_1f367a0a6f43918205cf5113e1c24401daa344700ffb6d585b85a5682450a6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f367a0a6f43918205cf5113e1c24401daa344700ffb6d585b85a5682450a6e3->leave($__internal_1f367a0a6f43918205cf5113e1c24401daa344700ffb6d585b85a5682450a6e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c9825ee75503e2a4c724bfe71fc6b63ad2f7c9f3ee3b201a0d082c8d4aaafd8 = $this->env->getExtension("native_profiler");
        $__internal_2c9825ee75503e2a4c724bfe71fc6b63ad2f7c9f3ee3b201a0d082c8d4aaafd8->enter($__internal_2c9825ee75503e2a4c724bfe71fc6b63ad2f7c9f3ee3b201a0d082c8d4aaafd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c9825ee75503e2a4c724bfe71fc6b63ad2f7c9f3ee3b201a0d082c8d4aaafd8->leave($__internal_2c9825ee75503e2a4c724bfe71fc6b63ad2f7c9f3ee3b201a0d082c8d4aaafd8_prof);

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
