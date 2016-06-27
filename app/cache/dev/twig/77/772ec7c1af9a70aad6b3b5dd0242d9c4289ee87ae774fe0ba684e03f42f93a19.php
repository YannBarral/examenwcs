<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_de4f8776fe000a3e8a32b392ae153f619f56c8f0d9d3f18e52b9cd058f76076f extends Twig_Template
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
        $__internal_e7d4b5d964d9488976240624094bb6f6dada6f291bb3963196b4179e9190f73f = $this->env->getExtension("native_profiler");
        $__internal_e7d4b5d964d9488976240624094bb6f6dada6f291bb3963196b4179e9190f73f->enter($__internal_e7d4b5d964d9488976240624094bb6f6dada6f291bb3963196b4179e9190f73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e7d4b5d964d9488976240624094bb6f6dada6f291bb3963196b4179e9190f73f->leave($__internal_e7d4b5d964d9488976240624094bb6f6dada6f291bb3963196b4179e9190f73f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
