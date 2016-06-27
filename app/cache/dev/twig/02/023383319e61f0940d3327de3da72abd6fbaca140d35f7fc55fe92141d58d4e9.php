<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c3e05999a519951d7fe586a5cd2425468dbae94852db8ab17437ebe31ae00d3c extends Twig_Template
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
        $__internal_017d3617653d1c5f3c03a5ef574bc1c14d107c0fed16628b5e923f69b0917edf = $this->env->getExtension("native_profiler");
        $__internal_017d3617653d1c5f3c03a5ef574bc1c14d107c0fed16628b5e923f69b0917edf->enter($__internal_017d3617653d1c5f3c03a5ef574bc1c14d107c0fed16628b5e923f69b0917edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_017d3617653d1c5f3c03a5ef574bc1c14d107c0fed16628b5e923f69b0917edf->leave($__internal_017d3617653d1c5f3c03a5ef574bc1c14d107c0fed16628b5e923f69b0917edf_prof);

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
