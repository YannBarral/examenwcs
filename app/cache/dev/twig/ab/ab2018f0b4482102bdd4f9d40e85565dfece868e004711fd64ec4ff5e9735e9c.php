<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_db7c4e073585261c124a29e1dfd366302c57249fb380683c19416c9fa09b458d extends Twig_Template
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
        $__internal_7ffff7f235868de3003653204b8224983cdd42d26924c6e806aed167d065d200 = $this->env->getExtension("native_profiler");
        $__internal_7ffff7f235868de3003653204b8224983cdd42d26924c6e806aed167d065d200->enter($__internal_7ffff7f235868de3003653204b8224983cdd42d26924c6e806aed167d065d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7ffff7f235868de3003653204b8224983cdd42d26924c6e806aed167d065d200->leave($__internal_7ffff7f235868de3003653204b8224983cdd42d26924c6e806aed167d065d200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
