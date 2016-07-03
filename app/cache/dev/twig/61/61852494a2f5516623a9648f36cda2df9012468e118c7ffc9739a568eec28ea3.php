<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8af20c88df8aa3d1078770f58002c0feb00f14fdaf5d27e7bdc160fbe865c53e extends Twig_Template
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
        $__internal_a80f0975c06cdf0df10793ff3ff3458e0557df169f9386e23d8f33e62bef0f45 = $this->env->getExtension("native_profiler");
        $__internal_a80f0975c06cdf0df10793ff3ff3458e0557df169f9386e23d8f33e62bef0f45->enter($__internal_a80f0975c06cdf0df10793ff3ff3458e0557df169f9386e23d8f33e62bef0f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a80f0975c06cdf0df10793ff3ff3458e0557df169f9386e23d8f33e62bef0f45->leave($__internal_a80f0975c06cdf0df10793ff3ff3458e0557df169f9386e23d8f33e62bef0f45_prof);

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
