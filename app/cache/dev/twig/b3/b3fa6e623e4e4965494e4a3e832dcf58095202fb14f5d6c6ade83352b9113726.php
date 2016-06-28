<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4d47cc174b9dcc3fc1946d3faf19dfd3462e19976bcd630491c2a54cb0d7ed59 extends Twig_Template
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
        $__internal_a27d4f380c2b38e3c3d782c43f8cba08b5f1822716567def0fd8e93d63a0b65c = $this->env->getExtension("native_profiler");
        $__internal_a27d4f380c2b38e3c3d782c43f8cba08b5f1822716567def0fd8e93d63a0b65c->enter($__internal_a27d4f380c2b38e3c3d782c43f8cba08b5f1822716567def0fd8e93d63a0b65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a27d4f380c2b38e3c3d782c43f8cba08b5f1822716567def0fd8e93d63a0b65c->leave($__internal_a27d4f380c2b38e3c3d782c43f8cba08b5f1822716567def0fd8e93d63a0b65c_prof);

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
