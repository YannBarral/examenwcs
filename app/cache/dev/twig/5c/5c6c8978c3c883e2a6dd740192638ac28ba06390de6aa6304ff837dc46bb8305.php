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
        $__internal_24706dffa53269bbb4007636ad02419d586fa2a8ead4336d3183093b62ebeb17 = $this->env->getExtension("native_profiler");
        $__internal_24706dffa53269bbb4007636ad02419d586fa2a8ead4336d3183093b62ebeb17->enter($__internal_24706dffa53269bbb4007636ad02419d586fa2a8ead4336d3183093b62ebeb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_24706dffa53269bbb4007636ad02419d586fa2a8ead4336d3183093b62ebeb17->leave($__internal_24706dffa53269bbb4007636ad02419d586fa2a8ead4336d3183093b62ebeb17_prof);

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
