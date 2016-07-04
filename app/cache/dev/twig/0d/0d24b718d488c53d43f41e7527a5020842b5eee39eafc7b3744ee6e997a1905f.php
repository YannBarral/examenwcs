<?php

/* :post:new.html.twig */
class __TwigTemplate_b1834b733a5b9a4a0a81616f176f6f43d7dd8ec778780dc9e5949ad6255d7311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
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
        $__internal_ded82806393574cdf3754e404fb0c1567d03fdad5d110aeb7a41b9697d224b95 = $this->env->getExtension("native_profiler");
        $__internal_ded82806393574cdf3754e404fb0c1567d03fdad5d110aeb7a41b9697d224b95->enter($__internal_ded82806393574cdf3754e404fb0c1567d03fdad5d110aeb7a41b9697d224b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded82806393574cdf3754e404fb0c1567d03fdad5d110aeb7a41b9697d224b95->leave($__internal_ded82806393574cdf3754e404fb0c1567d03fdad5d110aeb7a41b9697d224b95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf05a3cd906137a95094cf2b67792f968c4307a44c72ea7fecd76acd7cc88368 = $this->env->getExtension("native_profiler");
        $__internal_cf05a3cd906137a95094cf2b67792f968c4307a44c72ea7fecd76acd7cc88368->enter($__internal_cf05a3cd906137a95094cf2b67792f968c4307a44c72ea7fecd76acd7cc88368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cf05a3cd906137a95094cf2b67792f968c4307a44c72ea7fecd76acd7cc88368->leave($__internal_cf05a3cd906137a95094cf2b67792f968c4307a44c72ea7fecd76acd7cc88368_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
