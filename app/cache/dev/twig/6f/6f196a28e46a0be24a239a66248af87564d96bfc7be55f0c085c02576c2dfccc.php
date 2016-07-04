<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_be2da6bff8bdba197397157204afb99d449b63e0e00fd6152e4a7f644fefc2ae extends Twig_Template
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
        $__internal_0564de2e03f76a5436bb83f7b242e302f1220e939e0479a2b6c374151d0920b7 = $this->env->getExtension("native_profiler");
        $__internal_0564de2e03f76a5436bb83f7b242e302f1220e939e0479a2b6c374151d0920b7->enter($__internal_0564de2e03f76a5436bb83f7b242e302f1220e939e0479a2b6c374151d0920b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0564de2e03f76a5436bb83f7b242e302f1220e939e0479a2b6c374151d0920b7->leave($__internal_0564de2e03f76a5436bb83f7b242e302f1220e939e0479a2b6c374151d0920b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
