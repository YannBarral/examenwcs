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
        $__internal_9a03ca284d0da5da209a0a5bd43c3dfea00e6ea8a7484042ea3b74335f15214a = $this->env->getExtension("native_profiler");
        $__internal_9a03ca284d0da5da209a0a5bd43c3dfea00e6ea8a7484042ea3b74335f15214a->enter($__internal_9a03ca284d0da5da209a0a5bd43c3dfea00e6ea8a7484042ea3b74335f15214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9a03ca284d0da5da209a0a5bd43c3dfea00e6ea8a7484042ea3b74335f15214a->leave($__internal_9a03ca284d0da5da209a0a5bd43c3dfea00e6ea8a7484042ea3b74335f15214a_prof);

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
