<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d084d355899cdc0b9e45fa2c0c58006e5a4a4ed46cba02d24849ac37ebf551ed extends Twig_Template
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
        $__internal_3969951445499123e022bd5b5abfeba8f295a3b1b6ec9f085707bfa1960a602a = $this->env->getExtension("native_profiler");
        $__internal_3969951445499123e022bd5b5abfeba8f295a3b1b6ec9f085707bfa1960a602a->enter($__internal_3969951445499123e022bd5b5abfeba8f295a3b1b6ec9f085707bfa1960a602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3969951445499123e022bd5b5abfeba8f295a3b1b6ec9f085707bfa1960a602a->leave($__internal_3969951445499123e022bd5b5abfeba8f295a3b1b6ec9f085707bfa1960a602a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
