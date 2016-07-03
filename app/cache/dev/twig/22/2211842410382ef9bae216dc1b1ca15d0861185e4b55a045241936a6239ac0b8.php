<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f4224a46d083c5a025e4d779b280559523e686d32668b88c1c7e6726043930ac extends Twig_Template
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
        $__internal_2203c569eeb3521ccb2a32279509991a2164372e1e85853f2ab50f4cbfc92c91 = $this->env->getExtension("native_profiler");
        $__internal_2203c569eeb3521ccb2a32279509991a2164372e1e85853f2ab50f4cbfc92c91->enter($__internal_2203c569eeb3521ccb2a32279509991a2164372e1e85853f2ab50f4cbfc92c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2203c569eeb3521ccb2a32279509991a2164372e1e85853f2ab50f4cbfc92c91->leave($__internal_2203c569eeb3521ccb2a32279509991a2164372e1e85853f2ab50f4cbfc92c91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
