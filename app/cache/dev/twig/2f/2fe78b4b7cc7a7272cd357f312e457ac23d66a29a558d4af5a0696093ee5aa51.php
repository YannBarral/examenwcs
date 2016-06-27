<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_90d4d29c173835f15a31abe6d622a7402c0825584a918ade3edcff55a554f7c1 extends Twig_Template
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
        $__internal_f6c7431d2bde7b6fb95cecfeabd80fd0523d34208c310c1d93be6bffa4cc610e = $this->env->getExtension("native_profiler");
        $__internal_f6c7431d2bde7b6fb95cecfeabd80fd0523d34208c310c1d93be6bffa4cc610e->enter($__internal_f6c7431d2bde7b6fb95cecfeabd80fd0523d34208c310c1d93be6bffa4cc610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f6c7431d2bde7b6fb95cecfeabd80fd0523d34208c310c1d93be6bffa4cc610e->leave($__internal_f6c7431d2bde7b6fb95cecfeabd80fd0523d34208c310c1d93be6bffa4cc610e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
