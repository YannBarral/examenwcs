<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1dfe09180abd80728f6701a875d668b989548dee3bc38ec463ead560c54f3888 extends Twig_Template
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
        $__internal_491682c6e2c65a4767c945372a57b8603cdd1e5d56a562c553669a662b771aa2 = $this->env->getExtension("native_profiler");
        $__internal_491682c6e2c65a4767c945372a57b8603cdd1e5d56a562c553669a662b771aa2->enter($__internal_491682c6e2c65a4767c945372a57b8603cdd1e5d56a562c553669a662b771aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_491682c6e2c65a4767c945372a57b8603cdd1e5d56a562c553669a662b771aa2->leave($__internal_491682c6e2c65a4767c945372a57b8603cdd1e5d56a562c553669a662b771aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
