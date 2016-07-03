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
        $__internal_466bd4a9c14cc4143dcd934bbf8b4df4c2b51ac7b5bbb290aeb7382ff0a2443f = $this->env->getExtension("native_profiler");
        $__internal_466bd4a9c14cc4143dcd934bbf8b4df4c2b51ac7b5bbb290aeb7382ff0a2443f->enter($__internal_466bd4a9c14cc4143dcd934bbf8b4df4c2b51ac7b5bbb290aeb7382ff0a2443f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_466bd4a9c14cc4143dcd934bbf8b4df4c2b51ac7b5bbb290aeb7382ff0a2443f->leave($__internal_466bd4a9c14cc4143dcd934bbf8b4df4c2b51ac7b5bbb290aeb7382ff0a2443f_prof);

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
