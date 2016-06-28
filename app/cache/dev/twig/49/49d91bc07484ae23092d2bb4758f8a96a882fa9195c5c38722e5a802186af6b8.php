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
        $__internal_759ae74b6641035f195691b38b2d9229945a6747ff83fc5da58ac593179a4855 = $this->env->getExtension("native_profiler");
        $__internal_759ae74b6641035f195691b38b2d9229945a6747ff83fc5da58ac593179a4855->enter($__internal_759ae74b6641035f195691b38b2d9229945a6747ff83fc5da58ac593179a4855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_759ae74b6641035f195691b38b2d9229945a6747ff83fc5da58ac593179a4855->leave($__internal_759ae74b6641035f195691b38b2d9229945a6747ff83fc5da58ac593179a4855_prof);

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
