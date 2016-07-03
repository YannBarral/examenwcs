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
        $__internal_75ebf010ff838508c377f9129d8728e60d79d6b522d0fee26b890484adef3487 = $this->env->getExtension("native_profiler");
        $__internal_75ebf010ff838508c377f9129d8728e60d79d6b522d0fee26b890484adef3487->enter($__internal_75ebf010ff838508c377f9129d8728e60d79d6b522d0fee26b890484adef3487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_75ebf010ff838508c377f9129d8728e60d79d6b522d0fee26b890484adef3487->leave($__internal_75ebf010ff838508c377f9129d8728e60d79d6b522d0fee26b890484adef3487_prof);

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
