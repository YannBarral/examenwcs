<?php

/* client/show.html.twig */
class __TwigTemplate_aece91649fc65b37dc911c1ef0f1ad5c5f01bd4b7712fb0d9ab7ddcb77ae86de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_a9e284cb7e2772633afc156d311d494dc67551892e1d3afc8fe2503b1c6ce6ba = $this->env->getExtension("native_profiler");
        $__internal_a9e284cb7e2772633afc156d311d494dc67551892e1d3afc8fe2503b1c6ce6ba->enter($__internal_a9e284cb7e2772633afc156d311d494dc67551892e1d3afc8fe2503b1c6ce6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9e284cb7e2772633afc156d311d494dc67551892e1d3afc8fe2503b1c6ce6ba->leave($__internal_a9e284cb7e2772633afc156d311d494dc67551892e1d3afc8fe2503b1c6ce6ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8d849cd508698d84ef5ffa32a3e332f8d3cba5a6dff54c2d71e4bac00f8d8c1 = $this->env->getExtension("native_profiler");
        $__internal_d8d849cd508698d84ef5ffa32a3e332f8d3cba5a6dff54c2d71e4bac00f8d8c1->enter($__internal_d8d849cd508698d84ef5ffa32a3e332f8d3cba5a6dff54c2d71e4bac00f8d8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d8d849cd508698d84ef5ffa32a3e332f8d3cba5a6dff54c2d71e4bac00f8d8c1->leave($__internal_d8d849cd508698d84ef5ffa32a3e332f8d3cba5a6dff54c2d71e4bac00f8d8c1_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ client.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('client_edit', { 'id': client.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
