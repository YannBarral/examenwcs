<?php

/* client/index.html.twig */
class __TwigTemplate_02f1fa3b79eb3c1ad8b78f4685e228380d5ff08c8a9428bf74762135ec79c780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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
        $__internal_17fceba71efb7ee3a6e587e944de1b05a0867d35532ae010b48f39db08dca9b8 = $this->env->getExtension("native_profiler");
        $__internal_17fceba71efb7ee3a6e587e944de1b05a0867d35532ae010b48f39db08dca9b8->enter($__internal_17fceba71efb7ee3a6e587e944de1b05a0867d35532ae010b48f39db08dca9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fceba71efb7ee3a6e587e944de1b05a0867d35532ae010b48f39db08dca9b8->leave($__internal_17fceba71efb7ee3a6e587e944de1b05a0867d35532ae010b48f39db08dca9b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9705fd3fa5befd73913cf3a7262ded10dd9d4c3ede1433bd2dae28438efa412b = $this->env->getExtension("native_profiler");
        $__internal_9705fd3fa5befd73913cf3a7262ded10dd9d4c3ede1433bd2dae28438efa412b->enter($__internal_9705fd3fa5befd73913cf3a7262ded10dd9d4c3ede1433bd2dae28438efa412b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9705fd3fa5befd73913cf3a7262ded10dd9d4c3ede1433bd2dae28438efa412b->leave($__internal_9705fd3fa5befd73913cf3a7262ded10dd9d4c3ede1433bd2dae28438efa412b_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
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
/*     <h1>Client list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for client in clients %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('client_show', { 'id': client.id }) }}">{{ client.id }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('client_show', { 'id': client.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('client_edit', { 'id': client.id }) }}">edit</a>*/
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
/*             <a href="{{ path('client_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
