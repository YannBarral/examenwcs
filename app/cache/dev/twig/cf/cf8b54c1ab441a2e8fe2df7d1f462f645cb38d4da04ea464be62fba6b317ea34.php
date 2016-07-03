<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c3750e324d1c09bd7fab81944a3b5b9bc39f650d88f57140bfb1f32cbe721b23 extends Twig_Template
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
        $__internal_7057e4c53863a0f8ac2eb349189d093fdc591fd1bada56737b440efe56f031ee = $this->env->getExtension("native_profiler");
        $__internal_7057e4c53863a0f8ac2eb349189d093fdc591fd1bada56737b440efe56f031ee->enter($__internal_7057e4c53863a0f8ac2eb349189d093fdc591fd1bada56737b440efe56f031ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7057e4c53863a0f8ac2eb349189d093fdc591fd1bada56737b440efe56f031ee->leave($__internal_7057e4c53863a0f8ac2eb349189d093fdc591fd1bada56737b440efe56f031ee_prof);

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
