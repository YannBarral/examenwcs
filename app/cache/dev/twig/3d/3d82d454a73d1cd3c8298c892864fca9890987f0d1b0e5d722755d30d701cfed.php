<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_db6cc1f67fe7f16a3f6b0764dfc88833f085881d890a336e2e29e7d17f4fe518 extends Twig_Template
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
        $__internal_7f42a1c6cb26d9d92f05166421db8bd4999ebc1b58ab002ae0cc45ad45b8bc5b = $this->env->getExtension("native_profiler");
        $__internal_7f42a1c6cb26d9d92f05166421db8bd4999ebc1b58ab002ae0cc45ad45b8bc5b->enter($__internal_7f42a1c6cb26d9d92f05166421db8bd4999ebc1b58ab002ae0cc45ad45b8bc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7f42a1c6cb26d9d92f05166421db8bd4999ebc1b58ab002ae0cc45ad45b8bc5b->leave($__internal_7f42a1c6cb26d9d92f05166421db8bd4999ebc1b58ab002ae0cc45ad45b8bc5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
