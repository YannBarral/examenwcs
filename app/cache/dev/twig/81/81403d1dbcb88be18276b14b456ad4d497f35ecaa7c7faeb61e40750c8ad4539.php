<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_60de5a6710450371a686dd7b939f666ffb76beb9fb3776d76d21fa9933cc2f8c extends Twig_Template
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
        $__internal_b7d7262737573da66da42cf98b824b08491592587374a8bf230e9fefd08608fd = $this->env->getExtension("native_profiler");
        $__internal_b7d7262737573da66da42cf98b824b08491592587374a8bf230e9fefd08608fd->enter($__internal_b7d7262737573da66da42cf98b824b08491592587374a8bf230e9fefd08608fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b7d7262737573da66da42cf98b824b08491592587374a8bf230e9fefd08608fd->leave($__internal_b7d7262737573da66da42cf98b824b08491592587374a8bf230e9fefd08608fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
