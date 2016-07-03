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
        $__internal_984520e922e3d6b6f20505d58573b835b11fe8bef11aeed96e6dc3e71ada485b = $this->env->getExtension("native_profiler");
        $__internal_984520e922e3d6b6f20505d58573b835b11fe8bef11aeed96e6dc3e71ada485b->enter($__internal_984520e922e3d6b6f20505d58573b835b11fe8bef11aeed96e6dc3e71ada485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_984520e922e3d6b6f20505d58573b835b11fe8bef11aeed96e6dc3e71ada485b->leave($__internal_984520e922e3d6b6f20505d58573b835b11fe8bef11aeed96e6dc3e71ada485b_prof);

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
