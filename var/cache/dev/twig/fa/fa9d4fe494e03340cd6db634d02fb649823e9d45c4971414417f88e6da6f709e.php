<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5961e1e1a2a21064f17a87391420eb6fef6531a2b38cb666883d3a383281db33 extends Twig_Template
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
        $__internal_df6af8322d84a87803f30e38a93f2fda8166a200264d98c912868575310be946 = $this->env->getExtension("native_profiler");
        $__internal_df6af8322d84a87803f30e38a93f2fda8166a200264d98c912868575310be946->enter($__internal_df6af8322d84a87803f30e38a93f2fda8166a200264d98c912868575310be946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_df6af8322d84a87803f30e38a93f2fda8166a200264d98c912868575310be946->leave($__internal_df6af8322d84a87803f30e38a93f2fda8166a200264d98c912868575310be946_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
