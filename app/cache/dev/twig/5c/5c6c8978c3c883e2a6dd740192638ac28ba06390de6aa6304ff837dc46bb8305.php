<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a7ac3d865e1c667ebeb833372ba0c76f5535a73a5e87517f09c265e564c5011c extends Twig_Template
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
        $__internal_a358043cb43e0b9fb3e76f6dd7f7bf74b0ae4aa2bc9aa53c97a0a481dff2a000 = $this->env->getExtension("native_profiler");
        $__internal_a358043cb43e0b9fb3e76f6dd7f7bf74b0ae4aa2bc9aa53c97a0a481dff2a000->enter($__internal_a358043cb43e0b9fb3e76f6dd7f7bf74b0ae4aa2bc9aa53c97a0a481dff2a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a358043cb43e0b9fb3e76f6dd7f7bf74b0ae4aa2bc9aa53c97a0a481dff2a000->leave($__internal_a358043cb43e0b9fb3e76f6dd7f7bf74b0ae4aa2bc9aa53c97a0a481dff2a000_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
