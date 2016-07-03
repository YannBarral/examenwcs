<?php

/* :post:edit.html.twig */
class __TwigTemplate_609cc16b0980f60ce55dd17c623c8b96c6101c6479d56370664f200be644d6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90dd5c56b76df0fbf6a4cf24c355fdfb60e8f896d121a4ebab86c74b5e216594 = $this->env->getExtension("native_profiler");
        $__internal_90dd5c56b76df0fbf6a4cf24c355fdfb60e8f896d121a4ebab86c74b5e216594->enter($__internal_90dd5c56b76df0fbf6a4cf24c355fdfb60e8f896d121a4ebab86c74b5e216594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90dd5c56b76df0fbf6a4cf24c355fdfb60e8f896d121a4ebab86c74b5e216594->leave($__internal_90dd5c56b76df0fbf6a4cf24c355fdfb60e8f896d121a4ebab86c74b5e216594_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65647d18f892687f64a97c6dadbe4f9c858eaa51a5f64c255a5dcb8f13e0abc = $this->env->getExtension("native_profiler");
        $__internal_e65647d18f892687f64a97c6dadbe4f9c858eaa51a5f64c255a5dcb8f13e0abc->enter($__internal_e65647d18f892687f64a97c6dadbe4f9c858eaa51a5f64c255a5dcb8f13e0abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e65647d18f892687f64a97c6dadbe4f9c858eaa51a5f64c255a5dcb8f13e0abc->leave($__internal_e65647d18f892687f64a97c6dadbe4f9c858eaa51a5f64c255a5dcb8f13e0abc_prof);

    }

    public function getTemplateName()
    {
        return ":post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
