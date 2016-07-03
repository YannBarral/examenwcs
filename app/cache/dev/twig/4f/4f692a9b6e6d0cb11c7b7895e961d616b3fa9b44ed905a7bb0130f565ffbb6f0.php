<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_926880365ad243a89c75e65e98708bb888a3425e7795f544aa40cd2bb756c806 extends Twig_Template
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
        $__internal_50c4fec348da6f4724c31ead13fde235c179219ae65bb6be6fdd96d49bb3c102 = $this->env->getExtension("native_profiler");
        $__internal_50c4fec348da6f4724c31ead13fde235c179219ae65bb6be6fdd96d49bb3c102->enter($__internal_50c4fec348da6f4724c31ead13fde235c179219ae65bb6be6fdd96d49bb3c102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_50c4fec348da6f4724c31ead13fde235c179219ae65bb6be6fdd96d49bb3c102->leave($__internal_50c4fec348da6f4724c31ead13fde235c179219ae65bb6be6fdd96d49bb3c102_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
