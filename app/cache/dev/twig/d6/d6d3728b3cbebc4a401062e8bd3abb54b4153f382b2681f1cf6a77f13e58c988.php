<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e841898188626ff0a825969bf3992d036bd0196a8a89587a2695d5e72fe0307e extends Twig_Template
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
        $__internal_ea8b763beacc1f81d4c7c26257b91eaf634aed4291446e8656391433811690cb = $this->env->getExtension("native_profiler");
        $__internal_ea8b763beacc1f81d4c7c26257b91eaf634aed4291446e8656391433811690cb->enter($__internal_ea8b763beacc1f81d4c7c26257b91eaf634aed4291446e8656391433811690cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ea8b763beacc1f81d4c7c26257b91eaf634aed4291446e8656391433811690cb->leave($__internal_ea8b763beacc1f81d4c7c26257b91eaf634aed4291446e8656391433811690cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
