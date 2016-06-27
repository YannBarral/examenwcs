<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ef1dba8b3a0c641166cb9af01033d8f7bd7c293adc29d23f02207a117275bd37 extends Twig_Template
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
        $__internal_6cd188df2759caa98cfe488629f10f63c3c3c147b6b93fb7657f79aacd69bb1d = $this->env->getExtension("native_profiler");
        $__internal_6cd188df2759caa98cfe488629f10f63c3c3c147b6b93fb7657f79aacd69bb1d->enter($__internal_6cd188df2759caa98cfe488629f10f63c3c3c147b6b93fb7657f79aacd69bb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_6cd188df2759caa98cfe488629f10f63c3c3c147b6b93fb7657f79aacd69bb1d->leave($__internal_6cd188df2759caa98cfe488629f10f63c3c3c147b6b93fb7657f79aacd69bb1d_prof);

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
