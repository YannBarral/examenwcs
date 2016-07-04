<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dd75bd16cd80b35e95db377245108b3876eb74f6040330c09cdeea190d77073d extends Twig_Template
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
        $__internal_4ad3712101f42e591c83e77eb25bcf3e552e0a692393a3ba778a1d6a788bda5d = $this->env->getExtension("native_profiler");
        $__internal_4ad3712101f42e591c83e77eb25bcf3e552e0a692393a3ba778a1d6a788bda5d->enter($__internal_4ad3712101f42e591c83e77eb25bcf3e552e0a692393a3ba778a1d6a788bda5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4ad3712101f42e591c83e77eb25bcf3e552e0a692393a3ba778a1d6a788bda5d->leave($__internal_4ad3712101f42e591c83e77eb25bcf3e552e0a692393a3ba778a1d6a788bda5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
