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
        $__internal_bc489c7d507e233dca8fd7716f278d66a624ff6983d9121a954f6340cd2d5977 = $this->env->getExtension("native_profiler");
        $__internal_bc489c7d507e233dca8fd7716f278d66a624ff6983d9121a954f6340cd2d5977->enter($__internal_bc489c7d507e233dca8fd7716f278d66a624ff6983d9121a954f6340cd2d5977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bc489c7d507e233dca8fd7716f278d66a624ff6983d9121a954f6340cd2d5977->leave($__internal_bc489c7d507e233dca8fd7716f278d66a624ff6983d9121a954f6340cd2d5977_prof);

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
