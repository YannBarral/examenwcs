<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e057a4d7d16d0dd73be78900c2a6ec748ca0b86d5f57b111923178a573bf4186 extends Twig_Template
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
        $__internal_09fc565036391d757578a284f10750bbe261b362dbcd0fc74944a90437e018f1 = $this->env->getExtension("native_profiler");
        $__internal_09fc565036391d757578a284f10750bbe261b362dbcd0fc74944a90437e018f1->enter($__internal_09fc565036391d757578a284f10750bbe261b362dbcd0fc74944a90437e018f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_09fc565036391d757578a284f10750bbe261b362dbcd0fc74944a90437e018f1->leave($__internal_09fc565036391d757578a284f10750bbe261b362dbcd0fc74944a90437e018f1_prof);

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
