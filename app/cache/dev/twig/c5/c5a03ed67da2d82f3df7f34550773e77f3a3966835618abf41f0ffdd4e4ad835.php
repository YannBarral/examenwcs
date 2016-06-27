<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a6131f69286b92e521c0e5cdf4dcf5eae1024b830beb7af4960aae343b913e24 extends Twig_Template
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
        $__internal_d572386464ef80b20d9f858b85f3ab3e6febdd2efc6153b900438d481ef412c2 = $this->env->getExtension("native_profiler");
        $__internal_d572386464ef80b20d9f858b85f3ab3e6febdd2efc6153b900438d481ef412c2->enter($__internal_d572386464ef80b20d9f858b85f3ab3e6febdd2efc6153b900438d481ef412c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d572386464ef80b20d9f858b85f3ab3e6febdd2efc6153b900438d481ef412c2->leave($__internal_d572386464ef80b20d9f858b85f3ab3e6febdd2efc6153b900438d481ef412c2_prof);

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
