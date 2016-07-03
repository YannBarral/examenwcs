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
        $__internal_7bed2133f962227fa049804e50683719011a6935c95a8fea963939b08ebc822f = $this->env->getExtension("native_profiler");
        $__internal_7bed2133f962227fa049804e50683719011a6935c95a8fea963939b08ebc822f->enter($__internal_7bed2133f962227fa049804e50683719011a6935c95a8fea963939b08ebc822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7bed2133f962227fa049804e50683719011a6935c95a8fea963939b08ebc822f->leave($__internal_7bed2133f962227fa049804e50683719011a6935c95a8fea963939b08ebc822f_prof);

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
