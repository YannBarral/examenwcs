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
        $__internal_c330ab9b06f0f2e59ce1f32a3feb1f9c7a2a63c7b9e70a12b5fe35709b05f637 = $this->env->getExtension("native_profiler");
        $__internal_c330ab9b06f0f2e59ce1f32a3feb1f9c7a2a63c7b9e70a12b5fe35709b05f637->enter($__internal_c330ab9b06f0f2e59ce1f32a3feb1f9c7a2a63c7b9e70a12b5fe35709b05f637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c330ab9b06f0f2e59ce1f32a3feb1f9c7a2a63c7b9e70a12b5fe35709b05f637->leave($__internal_c330ab9b06f0f2e59ce1f32a3feb1f9c7a2a63c7b9e70a12b5fe35709b05f637_prof);

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
