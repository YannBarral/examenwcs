<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e8645cefa558ac5b818365b7219f3e818dbe83ccf44c1085dd76d22e86a810f4 extends Twig_Template
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
        $__internal_d156a3333d9fa2ba94d0a3ddbf715d3baf5d2d888b839188a85aafd5a2c3b975 = $this->env->getExtension("native_profiler");
        $__internal_d156a3333d9fa2ba94d0a3ddbf715d3baf5d2d888b839188a85aafd5a2c3b975->enter($__internal_d156a3333d9fa2ba94d0a3ddbf715d3baf5d2d888b839188a85aafd5a2c3b975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d156a3333d9fa2ba94d0a3ddbf715d3baf5d2d888b839188a85aafd5a2c3b975->leave($__internal_d156a3333d9fa2ba94d0a3ddbf715d3baf5d2d888b839188a85aafd5a2c3b975_prof);

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
