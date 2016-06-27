<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a8bb9f46df8a9887fc27ba4fe34f9e6200001df30f1b514fbc5cbafbb86f4a93 extends Twig_Template
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
        $__internal_6981b65f0243785d78a9eb5f9d1338c228a5fcbde963922f7f4cd21174069eee = $this->env->getExtension("native_profiler");
        $__internal_6981b65f0243785d78a9eb5f9d1338c228a5fcbde963922f7f4cd21174069eee->enter($__internal_6981b65f0243785d78a9eb5f9d1338c228a5fcbde963922f7f4cd21174069eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6981b65f0243785d78a9eb5f9d1338c228a5fcbde963922f7f4cd21174069eee->leave($__internal_6981b65f0243785d78a9eb5f9d1338c228a5fcbde963922f7f4cd21174069eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
