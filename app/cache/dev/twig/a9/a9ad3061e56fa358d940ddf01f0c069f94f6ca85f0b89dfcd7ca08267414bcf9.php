<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_86ef0dd66b878fb956de06653e8fe5616c4ca14ca72193c6efd8ca253d8d3e8f extends Twig_Template
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
        $__internal_14c618262c180629255c4a1bf86e63aa11b3fa43a0944cfb0504f19e8a8b5a10 = $this->env->getExtension("native_profiler");
        $__internal_14c618262c180629255c4a1bf86e63aa11b3fa43a0944cfb0504f19e8a8b5a10->enter($__internal_14c618262c180629255c4a1bf86e63aa11b3fa43a0944cfb0504f19e8a8b5a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_14c618262c180629255c4a1bf86e63aa11b3fa43a0944cfb0504f19e8a8b5a10->leave($__internal_14c618262c180629255c4a1bf86e63aa11b3fa43a0944cfb0504f19e8a8b5a10_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  51 => 12,  47 => 11,  44 => 10,  40 => 9,  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* <table class="{{ class|default('') }}">*/
/*     <thead>*/
/*         <tr>*/
/*             <th scope="col" class="key">{{ labels is defined ? labels[0] : 'Key' }}</th>*/
/*             <th scope="col">{{ labels is defined ? labels[1] : 'Value' }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for key in data|keys|sort %}*/
/*             <tr>*/
/*                 <th scope="row">{{ key }}</th>*/
/*                 <td>{{ profiler_dump(data[key]) }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */