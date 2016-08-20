<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_82c33012d9c9b361bea5dc914bbbc45e1a634d7b11f3a54bfa5446e76f990521 extends Twig_Template
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
        $__internal_1f41609e791bde8f3569c845179b18958dce6fdba002f0447e1497dda58662d6 = $this->env->getExtension("native_profiler");
        $__internal_1f41609e791bde8f3569c845179b18958dce6fdba002f0447e1497dda58662d6->enter($__internal_1f41609e791bde8f3569c845179b18958dce6fdba002f0447e1497dda58662d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1f41609e791bde8f3569c845179b18958dce6fdba002f0447e1497dda58662d6->leave($__internal_1f41609e791bde8f3569c845179b18958dce6fdba002f0447e1497dda58662d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
