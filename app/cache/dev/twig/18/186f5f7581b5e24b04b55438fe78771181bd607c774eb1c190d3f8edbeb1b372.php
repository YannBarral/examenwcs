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
        $__internal_4dfb093e9a4e4882d281dbc46ae04497310796e0ea0f7f4ad0f52f7bbda77de7 = $this->env->getExtension("native_profiler");
        $__internal_4dfb093e9a4e4882d281dbc46ae04497310796e0ea0f7f4ad0f52f7bbda77de7->enter($__internal_4dfb093e9a4e4882d281dbc46ae04497310796e0ea0f7f4ad0f52f7bbda77de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4dfb093e9a4e4882d281dbc46ae04497310796e0ea0f7f4ad0f52f7bbda77de7->leave($__internal_4dfb093e9a4e4882d281dbc46ae04497310796e0ea0f7f4ad0f52f7bbda77de7_prof);

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
