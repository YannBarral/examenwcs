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
        $__internal_5636edf510f325b1c1c313bdf172fe4b8fa46b3fa0e8d6ac048c8bfb5fd8ea93 = $this->env->getExtension("native_profiler");
        $__internal_5636edf510f325b1c1c313bdf172fe4b8fa46b3fa0e8d6ac048c8bfb5fd8ea93->enter($__internal_5636edf510f325b1c1c313bdf172fe4b8fa46b3fa0e8d6ac048c8bfb5fd8ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5636edf510f325b1c1c313bdf172fe4b8fa46b3fa0e8d6ac048c8bfb5fd8ea93->leave($__internal_5636edf510f325b1c1c313bdf172fe4b8fa46b3fa0e8d6ac048c8bfb5fd8ea93_prof);

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
