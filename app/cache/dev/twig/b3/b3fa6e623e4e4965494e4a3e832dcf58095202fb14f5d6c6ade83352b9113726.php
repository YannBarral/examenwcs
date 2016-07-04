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
        $__internal_fd0566a7896c7ddeab543421d6a29cbf2ca854dbe081563acf2cf1bc9de2d054 = $this->env->getExtension("native_profiler");
        $__internal_fd0566a7896c7ddeab543421d6a29cbf2ca854dbe081563acf2cf1bc9de2d054->enter($__internal_fd0566a7896c7ddeab543421d6a29cbf2ca854dbe081563acf2cf1bc9de2d054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fd0566a7896c7ddeab543421d6a29cbf2ca854dbe081563acf2cf1bc9de2d054->leave($__internal_fd0566a7896c7ddeab543421d6a29cbf2ca854dbe081563acf2cf1bc9de2d054_prof);

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
