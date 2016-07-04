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
        $__internal_605ce1f27c68c6770e9f2e775348a7398cc1a6753fa1bfc706bf151cf0df6771 = $this->env->getExtension("native_profiler");
        $__internal_605ce1f27c68c6770e9f2e775348a7398cc1a6753fa1bfc706bf151cf0df6771->enter($__internal_605ce1f27c68c6770e9f2e775348a7398cc1a6753fa1bfc706bf151cf0df6771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605ce1f27c68c6770e9f2e775348a7398cc1a6753fa1bfc706bf151cf0df6771->leave($__internal_605ce1f27c68c6770e9f2e775348a7398cc1a6753fa1bfc706bf151cf0df6771_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f3ff7a55c7cec6977fe5ca286f645b1faf0f24cc17ad5282a14b206811fe0db = $this->env->getExtension("native_profiler");
        $__internal_8f3ff7a55c7cec6977fe5ca286f645b1faf0f24cc17ad5282a14b206811fe0db->enter($__internal_8f3ff7a55c7cec6977fe5ca286f645b1faf0f24cc17ad5282a14b206811fe0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\">Revenir à la liste client</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Effacer\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8f3ff7a55c7cec6977fe5ca286f645b1faf0f24cc17ad5282a14b206811fe0db->leave($__internal_8f3ff7a55c7cec6977fe5ca286f645b1faf0f24cc17ad5282a14b206811fe0db_prof);

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
/*             <a href="{{ path('client_index') }}">Revenir à la liste client</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('client_edit', { 'id': client.id }) }}">Modifier</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Effacer">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
