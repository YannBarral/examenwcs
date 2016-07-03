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
        $__internal_56f7ee194a162f17ee1d6f7ae2aba8577854d6f3ac06d8b19ee30df7bb31fff9 = $this->env->getExtension("native_profiler");
        $__internal_56f7ee194a162f17ee1d6f7ae2aba8577854d6f3ac06d8b19ee30df7bb31fff9->enter($__internal_56f7ee194a162f17ee1d6f7ae2aba8577854d6f3ac06d8b19ee30df7bb31fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_56f7ee194a162f17ee1d6f7ae2aba8577854d6f3ac06d8b19ee30df7bb31fff9->leave($__internal_56f7ee194a162f17ee1d6f7ae2aba8577854d6f3ac06d8b19ee30df7bb31fff9_prof);

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
