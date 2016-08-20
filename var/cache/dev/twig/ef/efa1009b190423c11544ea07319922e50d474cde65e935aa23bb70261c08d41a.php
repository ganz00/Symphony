<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f46cbf86f728ce4d8378c7c8ff71c1dbc16672861972fa0d23804cd6222b421f extends Twig_Template
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
        $__internal_61c57a053235068d55f2c0ff9a57eb192808f13d4df1ffd1398a2b76c798b725 = $this->env->getExtension("native_profiler");
        $__internal_61c57a053235068d55f2c0ff9a57eb192808f13d4df1ffd1398a2b76c798b725->enter($__internal_61c57a053235068d55f2c0ff9a57eb192808f13d4df1ffd1398a2b76c798b725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_61c57a053235068d55f2c0ff9a57eb192808f13d4df1ffd1398a2b76c798b725->leave($__internal_61c57a053235068d55f2c0ff9a57eb192808f13d4df1ffd1398a2b76c798b725_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
