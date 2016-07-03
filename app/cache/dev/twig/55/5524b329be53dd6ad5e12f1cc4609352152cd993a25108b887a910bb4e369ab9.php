<?php

/* :post:index.html.twig */
class __TwigTemplate_6f82e0879ed83471f8a54c582e082178ddc97af564aa0fda1e0a8720c49a11a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:index.html.twig", 1);
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
        $__internal_ad29bfa5c7aa8dd551173eee2d6a9c7865bce6e720c3d5c79dbb98891b7b4e63 = $this->env->getExtension("native_profiler");
        $__internal_ad29bfa5c7aa8dd551173eee2d6a9c7865bce6e720c3d5c79dbb98891b7b4e63->enter($__internal_ad29bfa5c7aa8dd551173eee2d6a9c7865bce6e720c3d5c79dbb98891b7b4e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad29bfa5c7aa8dd551173eee2d6a9c7865bce6e720c3d5c79dbb98891b7b4e63->leave($__internal_ad29bfa5c7aa8dd551173eee2d6a9c7865bce6e720c3d5c79dbb98891b7b4e63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d7a46a65b435584133f95a8d8ea41e6734e313ad7517ac68893df0fdc93c3b3 = $this->env->getExtension("native_profiler");
        $__internal_9d7a46a65b435584133f95a8d8ea41e6734e313ad7517ac68893df0fdc93c3b3->enter($__internal_9d7a46a65b435584133f95a8d8ea41e6734e313ad7517ac68893df0fdc93c3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9d7a46a65b435584133f95a8d8ea41e6734e313ad7517ac68893df0fdc93c3b3->leave($__internal_9d7a46a65b435584133f95a8d8ea41e6734e313ad7517ac68893df0fdc93c3b3_prof);

    }

    public function getTemplateName()
    {
        return ":post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('post_show', { 'id': post.id }) }}">{{ post.id }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('post_show', { 'id': post.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('post_edit', { 'id': post.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
