<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_85139b55fd7a179ebd5a337322b91799c770d139c958dd848e6129ebbc061e68 extends Twig_Template
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
        $__internal_1f04fd0e245ac642e403a9f322e18e4a96ee330a3be73f2ab94267b7d7ecb4f6 = $this->env->getExtension("native_profiler");
        $__internal_1f04fd0e245ac642e403a9f322e18e4a96ee330a3be73f2ab94267b7d7ecb4f6->enter($__internal_1f04fd0e245ac642e403a9f322e18e4a96ee330a3be73f2ab94267b7d7ecb4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1f04fd0e245ac642e403a9f322e18e4a96ee330a3be73f2ab94267b7d7ecb4f6->leave($__internal_1f04fd0e245ac642e403a9f322e18e4a96ee330a3be73f2ab94267b7d7ecb4f6_prof);

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
