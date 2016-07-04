<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7992e2db8ace088548a76c4eee7550b38e335536563930e9e90a88845fdf2ccb extends Twig_Template
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
        $__internal_d173df9f994670a5cd34f66ca7428f3b9b35c47c06d26a59caff5cf3678280c8 = $this->env->getExtension("native_profiler");
        $__internal_d173df9f994670a5cd34f66ca7428f3b9b35c47c06d26a59caff5cf3678280c8->enter($__internal_d173df9f994670a5cd34f66ca7428f3b9b35c47c06d26a59caff5cf3678280c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d173df9f994670a5cd34f66ca7428f3b9b35c47c06d26a59caff5cf3678280c8->leave($__internal_d173df9f994670a5cd34f66ca7428f3b9b35c47c06d26a59caff5cf3678280c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
