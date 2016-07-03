<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_373ce12de85d4df81dc9f731004451b4df50768fd45ee3140812c96b26fd3666 extends Twig_Template
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
        $__internal_337e7e574a4e427cba04acefdfe73fb86799647e34e9de3fcf797561ed612a0b = $this->env->getExtension("native_profiler");
        $__internal_337e7e574a4e427cba04acefdfe73fb86799647e34e9de3fcf797561ed612a0b->enter($__internal_337e7e574a4e427cba04acefdfe73fb86799647e34e9de3fcf797561ed612a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_337e7e574a4e427cba04acefdfe73fb86799647e34e9de3fcf797561ed612a0b->leave($__internal_337e7e574a4e427cba04acefdfe73fb86799647e34e9de3fcf797561ed612a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
