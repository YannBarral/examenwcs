<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2440e40a1cda7bcc5e51e9b9f7a38b660f556dac85cd22cbb0db15dd7cc2fbfe extends Twig_Template
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
        $__internal_3c65fe6eeabc82cefbffaeb05943d69b0a3fe10b907e7e3a82d57cec42d7e816 = $this->env->getExtension("native_profiler");
        $__internal_3c65fe6eeabc82cefbffaeb05943d69b0a3fe10b907e7e3a82d57cec42d7e816->enter($__internal_3c65fe6eeabc82cefbffaeb05943d69b0a3fe10b907e7e3a82d57cec42d7e816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3c65fe6eeabc82cefbffaeb05943d69b0a3fe10b907e7e3a82d57cec42d7e816->leave($__internal_3c65fe6eeabc82cefbffaeb05943d69b0a3fe10b907e7e3a82d57cec42d7e816_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
