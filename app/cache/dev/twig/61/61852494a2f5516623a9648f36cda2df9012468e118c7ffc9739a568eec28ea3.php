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
        $__internal_984477eb11d85da65567ee63ff5ee112ce243eb22896fb8cd4cba591642c235f = $this->env->getExtension("native_profiler");
        $__internal_984477eb11d85da65567ee63ff5ee112ce243eb22896fb8cd4cba591642c235f->enter($__internal_984477eb11d85da65567ee63ff5ee112ce243eb22896fb8cd4cba591642c235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_984477eb11d85da65567ee63ff5ee112ce243eb22896fb8cd4cba591642c235f->leave($__internal_984477eb11d85da65567ee63ff5ee112ce243eb22896fb8cd4cba591642c235f_prof);

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
