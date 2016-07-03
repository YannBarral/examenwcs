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
        $__internal_e6a2d1b9e7f82531e01b89c98c61a664d3ef1fa545d220ffa30dd9b2de43886a = $this->env->getExtension("native_profiler");
        $__internal_e6a2d1b9e7f82531e01b89c98c61a664d3ef1fa545d220ffa30dd9b2de43886a->enter($__internal_e6a2d1b9e7f82531e01b89c98c61a664d3ef1fa545d220ffa30dd9b2de43886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e6a2d1b9e7f82531e01b89c98c61a664d3ef1fa545d220ffa30dd9b2de43886a->leave($__internal_e6a2d1b9e7f82531e01b89c98c61a664d3ef1fa545d220ffa30dd9b2de43886a_prof);

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
