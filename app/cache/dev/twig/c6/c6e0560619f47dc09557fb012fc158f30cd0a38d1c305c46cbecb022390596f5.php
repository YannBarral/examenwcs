<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0a25934e47f359629ded07c57fba5d63b8243679156f8039b5525fa2e306bac7 extends Twig_Template
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
        $__internal_398613c4ed937b6674a80b30794904a97a0b0de3c7b83cb24faaa0981dfaf7d2 = $this->env->getExtension("native_profiler");
        $__internal_398613c4ed937b6674a80b30794904a97a0b0de3c7b83cb24faaa0981dfaf7d2->enter($__internal_398613c4ed937b6674a80b30794904a97a0b0de3c7b83cb24faaa0981dfaf7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_398613c4ed937b6674a80b30794904a97a0b0de3c7b83cb24faaa0981dfaf7d2->leave($__internal_398613c4ed937b6674a80b30794904a97a0b0de3c7b83cb24faaa0981dfaf7d2_prof);

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
