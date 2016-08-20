<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_df2607417ac63ea18e614b1bb1185997723cc3176c6fc2c4dc2372b74e5160ed extends Twig_Template
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
        $__internal_3b1c243d73e20370889ef3746ad305bf92f635b826fab8802a1f41a5e3b7acf4 = $this->env->getExtension("native_profiler");
        $__internal_3b1c243d73e20370889ef3746ad305bf92f635b826fab8802a1f41a5e3b7acf4->enter($__internal_3b1c243d73e20370889ef3746ad305bf92f635b826fab8802a1f41a5e3b7acf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3b1c243d73e20370889ef3746ad305bf92f635b826fab8802a1f41a5e3b7acf4->leave($__internal_3b1c243d73e20370889ef3746ad305bf92f635b826fab8802a1f41a5e3b7acf4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
