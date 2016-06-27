<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_42eaab2212804e25c3abed1ac84a6b9a891a12d70ce59a7726e96c7f2e2a3d67 extends Twig_Template
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
        $__internal_d66b62f994ab8ee58948fe65801487e7e705d5c43606fa716dd368b090d28bf4 = $this->env->getExtension("native_profiler");
        $__internal_d66b62f994ab8ee58948fe65801487e7e705d5c43606fa716dd368b090d28bf4->enter($__internal_d66b62f994ab8ee58948fe65801487e7e705d5c43606fa716dd368b090d28bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d66b62f994ab8ee58948fe65801487e7e705d5c43606fa716dd368b090d28bf4->leave($__internal_d66b62f994ab8ee58948fe65801487e7e705d5c43606fa716dd368b090d28bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
