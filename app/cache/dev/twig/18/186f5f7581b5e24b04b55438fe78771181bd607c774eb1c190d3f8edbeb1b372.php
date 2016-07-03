<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3cd7772730d62cfc74595c555c1211be0832ebf9a35a2095cac6742fb6cc9b5f extends Twig_Template
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
        $__internal_9f6dd07e048fc84362cd92b3b6e4d869935119f9a63267fc1ee9289d4cbe7990 = $this->env->getExtension("native_profiler");
        $__internal_9f6dd07e048fc84362cd92b3b6e4d869935119f9a63267fc1ee9289d4cbe7990->enter($__internal_9f6dd07e048fc84362cd92b3b6e4d869935119f9a63267fc1ee9289d4cbe7990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9f6dd07e048fc84362cd92b3b6e4d869935119f9a63267fc1ee9289d4cbe7990->leave($__internal_9f6dd07e048fc84362cd92b3b6e4d869935119f9a63267fc1ee9289d4cbe7990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
