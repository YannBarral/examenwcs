<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da8dfcbe718393d00b0abb90270427b33be8852ac445ca8e3da27ea54ba7c6c1 extends Twig_Template
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
        $__internal_d958f89ebe25cc6b0fc07ca60513db8cd1b35d7afdcfa91ba83378a334efac22 = $this->env->getExtension("native_profiler");
        $__internal_d958f89ebe25cc6b0fc07ca60513db8cd1b35d7afdcfa91ba83378a334efac22->enter($__internal_d958f89ebe25cc6b0fc07ca60513db8cd1b35d7afdcfa91ba83378a334efac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d958f89ebe25cc6b0fc07ca60513db8cd1b35d7afdcfa91ba83378a334efac22->leave($__internal_d958f89ebe25cc6b0fc07ca60513db8cd1b35d7afdcfa91ba83378a334efac22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
