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
        $__internal_b38a834d9c884c05fd89ce016c0762ed6271f0ce641d557350dba865205eee9e = $this->env->getExtension("native_profiler");
        $__internal_b38a834d9c884c05fd89ce016c0762ed6271f0ce641d557350dba865205eee9e->enter($__internal_b38a834d9c884c05fd89ce016c0762ed6271f0ce641d557350dba865205eee9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b38a834d9c884c05fd89ce016c0762ed6271f0ce641d557350dba865205eee9e->leave($__internal_b38a834d9c884c05fd89ce016c0762ed6271f0ce641d557350dba865205eee9e_prof);

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
