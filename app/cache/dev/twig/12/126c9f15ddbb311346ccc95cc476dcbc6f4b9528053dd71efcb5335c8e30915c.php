<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cedf7d560645f676fe047c64f41b2a4abf59a599d501666ae679ee4aca5b9e88 extends Twig_Template
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
        $__internal_6e0fa96b8d29de01746f109f54d7627747a584c1b4150025bd32f72c142a9b8a = $this->env->getExtension("native_profiler");
        $__internal_6e0fa96b8d29de01746f109f54d7627747a584c1b4150025bd32f72c142a9b8a->enter($__internal_6e0fa96b8d29de01746f109f54d7627747a584c1b4150025bd32f72c142a9b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6e0fa96b8d29de01746f109f54d7627747a584c1b4150025bd32f72c142a9b8a->leave($__internal_6e0fa96b8d29de01746f109f54d7627747a584c1b4150025bd32f72c142a9b8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
