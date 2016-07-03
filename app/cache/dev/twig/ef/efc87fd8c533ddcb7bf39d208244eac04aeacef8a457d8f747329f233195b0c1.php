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
        $__internal_deff9635c00157527f08c5f0e9132730064be50ca76f312dc3a91671d39b92cd = $this->env->getExtension("native_profiler");
        $__internal_deff9635c00157527f08c5f0e9132730064be50ca76f312dc3a91671d39b92cd->enter($__internal_deff9635c00157527f08c5f0e9132730064be50ca76f312dc3a91671d39b92cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_deff9635c00157527f08c5f0e9132730064be50ca76f312dc3a91671d39b92cd->leave($__internal_deff9635c00157527f08c5f0e9132730064be50ca76f312dc3a91671d39b92cd_prof);

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
