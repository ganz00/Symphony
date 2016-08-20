<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a2fb70e138432660456621a83894eca739225a3e9908d47e31661d16eb38c9d2 extends Twig_Template
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
        $__internal_3e8529331f04a49c18458329354546207470a6f874b9b96c12ff70addda498da = $this->env->getExtension("native_profiler");
        $__internal_3e8529331f04a49c18458329354546207470a6f874b9b96c12ff70addda498da->enter($__internal_3e8529331f04a49c18458329354546207470a6f874b9b96c12ff70addda498da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_3e8529331f04a49c18458329354546207470a6f874b9b96c12ff70addda498da->leave($__internal_3e8529331f04a49c18458329354546207470a6f874b9b96c12ff70addda498da_prof);

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
