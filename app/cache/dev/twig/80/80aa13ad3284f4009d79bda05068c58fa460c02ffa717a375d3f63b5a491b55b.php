<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_57eff094340d7c046b6b0b46e689f412640fbb93a8ba17b1d5c544e57a9ef1b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cd26a5b507af62055670f8d77e7fc1aad1be12d92bc54383ce4885dfd0c6496 = $this->env->getExtension("native_profiler");
        $__internal_2cd26a5b507af62055670f8d77e7fc1aad1be12d92bc54383ce4885dfd0c6496->enter($__internal_2cd26a5b507af62055670f8d77e7fc1aad1be12d92bc54383ce4885dfd0c6496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2cd26a5b507af62055670f8d77e7fc1aad1be12d92bc54383ce4885dfd0c6496->leave($__internal_2cd26a5b507af62055670f8d77e7fc1aad1be12d92bc54383ce4885dfd0c6496_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb820bd43a44a21e41ef82c78881887134babe69288fcf5e036c595832a42a3f = $this->env->getExtension("native_profiler");
        $__internal_bb820bd43a44a21e41ef82c78881887134babe69288fcf5e036c595832a42a3f->enter($__internal_bb820bd43a44a21e41ef82c78881887134babe69288fcf5e036c595832a42a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bb820bd43a44a21e41ef82c78881887134babe69288fcf5e036c595832a42a3f->leave($__internal_bb820bd43a44a21e41ef82c78881887134babe69288fcf5e036c595832a42a3f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
