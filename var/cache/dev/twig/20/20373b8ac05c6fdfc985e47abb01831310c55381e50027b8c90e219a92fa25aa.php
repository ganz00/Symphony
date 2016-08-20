<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ec3a67e7538c4b312f5ca8057f6ae7f2f9460c1d53d11d683c7410fe20cf8d54 extends Twig_Template
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
        $__internal_244642e1c9e3e33938699da267e846b83e3f4d1285c17941709f7b343c610847 = $this->env->getExtension("native_profiler");
        $__internal_244642e1c9e3e33938699da267e846b83e3f4d1285c17941709f7b343c610847->enter($__internal_244642e1c9e3e33938699da267e846b83e3f4d1285c17941709f7b343c610847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_244642e1c9e3e33938699da267e846b83e3f4d1285c17941709f7b343c610847->leave($__internal_244642e1c9e3e33938699da267e846b83e3f4d1285c17941709f7b343c610847_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
