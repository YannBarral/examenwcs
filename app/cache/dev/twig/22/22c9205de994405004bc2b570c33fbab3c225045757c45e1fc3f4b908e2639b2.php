<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_60f4496f983509ef4df575e45db962118bb0dd441a77dc729b18fb8495b75736 extends Twig_Template
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
        $__internal_c2d285931f29b174e3fd735ca6177098eeb6aa82e2d6afcdef3fd1808b069c58 = $this->env->getExtension("native_profiler");
        $__internal_c2d285931f29b174e3fd735ca6177098eeb6aa82e2d6afcdef3fd1808b069c58->enter($__internal_c2d285931f29b174e3fd735ca6177098eeb6aa82e2d6afcdef3fd1808b069c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c2d285931f29b174e3fd735ca6177098eeb6aa82e2d6afcdef3fd1808b069c58->leave($__internal_c2d285931f29b174e3fd735ca6177098eeb6aa82e2d6afcdef3fd1808b069c58_prof);

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
