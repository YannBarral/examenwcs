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
        $__internal_563c75675d43b09ca3585edc9c4316e84f9ca51f610ffc1ebe32b169dc5ab107 = $this->env->getExtension("native_profiler");
        $__internal_563c75675d43b09ca3585edc9c4316e84f9ca51f610ffc1ebe32b169dc5ab107->enter($__internal_563c75675d43b09ca3585edc9c4316e84f9ca51f610ffc1ebe32b169dc5ab107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_563c75675d43b09ca3585edc9c4316e84f9ca51f610ffc1ebe32b169dc5ab107->leave($__internal_563c75675d43b09ca3585edc9c4316e84f9ca51f610ffc1ebe32b169dc5ab107_prof);

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
