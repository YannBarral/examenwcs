<?php

/* :post:show.html.twig */
class __TwigTemplate_32d21168154b537803ef3ad3b2a052236af321baef0b7aa2e696ca0f2ca91fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:show.html.twig", 1);
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
        $__internal_7411bb0e762990781a94b5b097c81bbf92005667a47eb03b33149df3a82a7114 = $this->env->getExtension("native_profiler");
        $__internal_7411bb0e762990781a94b5b097c81bbf92005667a47eb03b33149df3a82a7114->enter($__internal_7411bb0e762990781a94b5b097c81bbf92005667a47eb03b33149df3a82a7114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7411bb0e762990781a94b5b097c81bbf92005667a47eb03b33149df3a82a7114->leave($__internal_7411bb0e762990781a94b5b097c81bbf92005667a47eb03b33149df3a82a7114_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7ffc3dd41d191cd74380675bc07d90533b4a16a25f47020ee080172e5f109b8 = $this->env->getExtension("native_profiler");
        $__internal_a7ffc3dd41d191cd74380675bc07d90533b4a16a25f47020ee080172e5f109b8->enter($__internal_a7ffc3dd41d191cd74380675bc07d90533b4a16a25f47020ee080172e5f109b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
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
        
        $__internal_a7ffc3dd41d191cd74380675bc07d90533b4a16a25f47020ee080172e5f109b8->leave($__internal_a7ffc3dd41d191cd74380675bc07d90533b4a16a25f47020ee080172e5f109b8_prof);

    }

    public function getTemplateName()
    {
        return ":post:show.html.twig";
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
/*     <h1>Post</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ post.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('post_edit', { 'id': post.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
