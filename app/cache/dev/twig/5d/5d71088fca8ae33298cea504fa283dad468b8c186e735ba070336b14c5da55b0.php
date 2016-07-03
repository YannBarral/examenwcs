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
        $__internal_fbbc818893d07a4382955e6b0abe7d33835f3814e2e84d76c1870d5b45761b7d = $this->env->getExtension("native_profiler");
        $__internal_fbbc818893d07a4382955e6b0abe7d33835f3814e2e84d76c1870d5b45761b7d->enter($__internal_fbbc818893d07a4382955e6b0abe7d33835f3814e2e84d76c1870d5b45761b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fbbc818893d07a4382955e6b0abe7d33835f3814e2e84d76c1870d5b45761b7d->leave($__internal_fbbc818893d07a4382955e6b0abe7d33835f3814e2e84d76c1870d5b45761b7d_prof);

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
