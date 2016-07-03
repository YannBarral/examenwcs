<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2dcef5c9abacfae477dd0915281a616b2e649aaf038f3fd719a6b8010f719c6d extends Twig_Template
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
        $__internal_f81f2357e9db86c2cb7919dad731ae9fbe420b38ec2bb436a370f623a25ccec9 = $this->env->getExtension("native_profiler");
        $__internal_f81f2357e9db86c2cb7919dad731ae9fbe420b38ec2bb436a370f623a25ccec9->enter($__internal_f81f2357e9db86c2cb7919dad731ae9fbe420b38ec2bb436a370f623a25ccec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f81f2357e9db86c2cb7919dad731ae9fbe420b38ec2bb436a370f623a25ccec9->leave($__internal_f81f2357e9db86c2cb7919dad731ae9fbe420b38ec2bb436a370f623a25ccec9_prof);

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
