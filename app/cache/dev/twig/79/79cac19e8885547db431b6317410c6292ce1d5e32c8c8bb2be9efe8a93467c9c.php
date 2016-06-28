<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7e3abef54ed952df2bf3cdfdbdfaedaa7383026b57bf8fc6eaf8751f907787da extends Twig_Template
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
        $__internal_b18191ad2999896e74baa0acf19e8c9107c3e47aaee271797f37ee71cd49d1e3 = $this->env->getExtension("native_profiler");
        $__internal_b18191ad2999896e74baa0acf19e8c9107c3e47aaee271797f37ee71cd49d1e3->enter($__internal_b18191ad2999896e74baa0acf19e8c9107c3e47aaee271797f37ee71cd49d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b18191ad2999896e74baa0acf19e8c9107c3e47aaee271797f37ee71cd49d1e3->leave($__internal_b18191ad2999896e74baa0acf19e8c9107c3e47aaee271797f37ee71cd49d1e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
