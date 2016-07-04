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
        $__internal_8a0426fb97c5c8c2d864050ad5e01d693d906a364331da7f063c82aa64bd279a = $this->env->getExtension("native_profiler");
        $__internal_8a0426fb97c5c8c2d864050ad5e01d693d906a364331da7f063c82aa64bd279a->enter($__internal_8a0426fb97c5c8c2d864050ad5e01d693d906a364331da7f063c82aa64bd279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8a0426fb97c5c8c2d864050ad5e01d693d906a364331da7f063c82aa64bd279a->leave($__internal_8a0426fb97c5c8c2d864050ad5e01d693d906a364331da7f063c82aa64bd279a_prof);

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
