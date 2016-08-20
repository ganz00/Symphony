<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_701ecca199f2ce320fefc8b12aea7ec46dfaeeb93345de47c1aad4636c797404 extends Twig_Template
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
        $__internal_bb0dc2d717d349c78e09fd0ca156ee56e40165a46dafb0cd247f4bd39c32ba61 = $this->env->getExtension("native_profiler");
        $__internal_bb0dc2d717d349c78e09fd0ca156ee56e40165a46dafb0cd247f4bd39c32ba61->enter($__internal_bb0dc2d717d349c78e09fd0ca156ee56e40165a46dafb0cd247f4bd39c32ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bb0dc2d717d349c78e09fd0ca156ee56e40165a46dafb0cd247f4bd39c32ba61->leave($__internal_bb0dc2d717d349c78e09fd0ca156ee56e40165a46dafb0cd247f4bd39c32ba61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
