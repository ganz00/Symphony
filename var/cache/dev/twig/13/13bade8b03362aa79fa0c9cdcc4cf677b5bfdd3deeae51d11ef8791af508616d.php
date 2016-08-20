<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_93a26f5c2c0751f1e2a0420deb69aa44c8c2d42905fd3a89ef4d1d8ad49d71b8 extends Twig_Template
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
        $__internal_7835a98590ebaa7811102abfbd69bb1b9285b0ee6289eeafa6fff594d7055062 = $this->env->getExtension("native_profiler");
        $__internal_7835a98590ebaa7811102abfbd69bb1b9285b0ee6289eeafa6fff594d7055062->enter($__internal_7835a98590ebaa7811102abfbd69bb1b9285b0ee6289eeafa6fff594d7055062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7835a98590ebaa7811102abfbd69bb1b9285b0ee6289eeafa6fff594d7055062->leave($__internal_7835a98590ebaa7811102abfbd69bb1b9285b0ee6289eeafa6fff594d7055062_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
