<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f4aa73e14ccef508e8386612091bd6222ebd0565380339073e9240375a34b660 extends Twig_Template
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
        $__internal_9b8fc47e3075ea1ca8d5ef88463bc5ead71d51e095b8cbecc276b00a50d8a8bb = $this->env->getExtension("native_profiler");
        $__internal_9b8fc47e3075ea1ca8d5ef88463bc5ead71d51e095b8cbecc276b00a50d8a8bb->enter($__internal_9b8fc47e3075ea1ca8d5ef88463bc5ead71d51e095b8cbecc276b00a50d8a8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9b8fc47e3075ea1ca8d5ef88463bc5ead71d51e095b8cbecc276b00a50d8a8bb->leave($__internal_9b8fc47e3075ea1ca8d5ef88463bc5ead71d51e095b8cbecc276b00a50d8a8bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
