<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f75fcaadda484e54fdf6711383108672f293088777848526ee0b84f50033ab70 extends Twig_Template
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
        $__internal_8fff8eec88ac12ec3062288dc7eb6492a56f9b8fe3175944577bc9ec9b978045 = $this->env->getExtension("native_profiler");
        $__internal_8fff8eec88ac12ec3062288dc7eb6492a56f9b8fe3175944577bc9ec9b978045->enter($__internal_8fff8eec88ac12ec3062288dc7eb6492a56f9b8fe3175944577bc9ec9b978045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8fff8eec88ac12ec3062288dc7eb6492a56f9b8fe3175944577bc9ec9b978045->leave($__internal_8fff8eec88ac12ec3062288dc7eb6492a56f9b8fe3175944577bc9ec9b978045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
