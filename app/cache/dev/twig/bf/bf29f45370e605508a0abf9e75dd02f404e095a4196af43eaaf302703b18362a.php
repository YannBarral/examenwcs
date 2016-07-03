<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa59f0fff2d7dbe74d6428665cc76e355c509154a34e6ea5fdc512324ecbf5d6 extends Twig_Template
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
        $__internal_b036de1953cc77d125b388962b052ee31a41b9d0655f3b7359cc1114c2d717b4 = $this->env->getExtension("native_profiler");
        $__internal_b036de1953cc77d125b388962b052ee31a41b9d0655f3b7359cc1114c2d717b4->enter($__internal_b036de1953cc77d125b388962b052ee31a41b9d0655f3b7359cc1114c2d717b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b036de1953cc77d125b388962b052ee31a41b9d0655f3b7359cc1114c2d717b4->leave($__internal_b036de1953cc77d125b388962b052ee31a41b9d0655f3b7359cc1114c2d717b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
