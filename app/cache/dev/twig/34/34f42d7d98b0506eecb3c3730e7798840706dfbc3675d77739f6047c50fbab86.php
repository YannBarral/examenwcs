<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a13cf57ff4921584d02918ef2b052a422f8998e316bd0ad5238b633023adeff7 extends Twig_Template
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
        $__internal_4e8ccbac75e4b4bbcf1fed8b93fcae3b8bc7f93044f4fdab02e61abe4ce913bd = $this->env->getExtension("native_profiler");
        $__internal_4e8ccbac75e4b4bbcf1fed8b93fcae3b8bc7f93044f4fdab02e61abe4ce913bd->enter($__internal_4e8ccbac75e4b4bbcf1fed8b93fcae3b8bc7f93044f4fdab02e61abe4ce913bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4e8ccbac75e4b4bbcf1fed8b93fcae3b8bc7f93044f4fdab02e61abe4ce913bd->leave($__internal_4e8ccbac75e4b4bbcf1fed8b93fcae3b8bc7f93044f4fdab02e61abe4ce913bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
