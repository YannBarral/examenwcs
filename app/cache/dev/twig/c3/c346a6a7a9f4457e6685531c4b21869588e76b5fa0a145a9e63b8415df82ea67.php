<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4e0139dfb128f3090e60bc9dee6be368036cf40ebe9b1035fc779b15fc6ea32 extends Twig_Template
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
        $__internal_cfde55554756412f5beac49672e370d79ae7b835b1a33c673f9d401236b0744e = $this->env->getExtension("native_profiler");
        $__internal_cfde55554756412f5beac49672e370d79ae7b835b1a33c673f9d401236b0744e->enter($__internal_cfde55554756412f5beac49672e370d79ae7b835b1a33c673f9d401236b0744e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cfde55554756412f5beac49672e370d79ae7b835b1a33c673f9d401236b0744e->leave($__internal_cfde55554756412f5beac49672e370d79ae7b835b1a33c673f9d401236b0744e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
