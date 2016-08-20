<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ecc2e376ab6efb77b48647a343040c60ba9d035c7d2b8fc48aa2f5c0964fa476 extends Twig_Template
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
        $__internal_3874b880dbfa0714354842d2060adf581137ea79610df1c7baa0e070e6912df5 = $this->env->getExtension("native_profiler");
        $__internal_3874b880dbfa0714354842d2060adf581137ea79610df1c7baa0e070e6912df5->enter($__internal_3874b880dbfa0714354842d2060adf581137ea79610df1c7baa0e070e6912df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3874b880dbfa0714354842d2060adf581137ea79610df1c7baa0e070e6912df5->leave($__internal_3874b880dbfa0714354842d2060adf581137ea79610df1c7baa0e070e6912df5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
