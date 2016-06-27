<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b3250885fa6e1b1e7dc48e1f152518e9e6a996a6e1b0e0952818d496fe708688 extends Twig_Template
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
        $__internal_5d08de1212a3343b65e3356fd424e063fa4bb5ad6bb899f2e4bf8b6936f75c78 = $this->env->getExtension("native_profiler");
        $__internal_5d08de1212a3343b65e3356fd424e063fa4bb5ad6bb899f2e4bf8b6936f75c78->enter($__internal_5d08de1212a3343b65e3356fd424e063fa4bb5ad6bb899f2e4bf8b6936f75c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5d08de1212a3343b65e3356fd424e063fa4bb5ad6bb899f2e4bf8b6936f75c78->leave($__internal_5d08de1212a3343b65e3356fd424e063fa4bb5ad6bb899f2e4bf8b6936f75c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
