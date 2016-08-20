<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d5bcd51136c98666bbe7b58978f948e9ea0bcfb3e16651e61c8622a023d2b5e7 extends Twig_Template
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
        $__internal_5a6fbfcb5c105705ddbf1a99b26f421f18738ed53ff0938907143045123c60b4 = $this->env->getExtension("native_profiler");
        $__internal_5a6fbfcb5c105705ddbf1a99b26f421f18738ed53ff0938907143045123c60b4->enter($__internal_5a6fbfcb5c105705ddbf1a99b26f421f18738ed53ff0938907143045123c60b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5a6fbfcb5c105705ddbf1a99b26f421f18738ed53ff0938907143045123c60b4->leave($__internal_5a6fbfcb5c105705ddbf1a99b26f421f18738ed53ff0938907143045123c60b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
