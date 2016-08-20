<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_82e8ca34ef99c0f3ade5e9b802a287a2a921c0c7f9c18d3e3ce84eac6711cedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@template/accueil.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'result_content' => array($this, 'block_result_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@template/accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4240ffd96974e61e4637e9c311ea7d7b2d07615eeeda12f0021b4a23231f4352 = $this->env->getExtension("native_profiler");
        $__internal_4240ffd96974e61e4637e9c311ea7d7b2d07615eeeda12f0021b4a23231f4352->enter($__internal_4240ffd96974e61e4637e9c311ea7d7b2d07615eeeda12f0021b4a23231f4352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4240ffd96974e61e4637e9c311ea7d7b2d07615eeeda12f0021b4a23231f4352->leave($__internal_4240ffd96974e61e4637e9c311ea7d7b2d07615eeeda12f0021b4a23231f4352_prof);

    }

    // line 2
    public function block_result_content($context, array $blocks = array())
    {
        $__internal_e1f398d5c8fdea0c67f2e5ba39e43b0978d8c8430795e9108d03fb2357f5d3b3 = $this->env->getExtension("native_profiler");
        $__internal_e1f398d5c8fdea0c67f2e5ba39e43b0978d8c8430795e9108d03fb2357f5d3b3->enter($__internal_e1f398d5c8fdea0c67f2e5ba39e43b0978d8c8430795e9108d03fb2357f5d3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "result_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 3)->display($context);
        
        $__internal_e1f398d5c8fdea0c67f2e5ba39e43b0978d8c8430795e9108d03fb2357f5d3b3->leave($__internal_e1f398d5c8fdea0c67f2e5ba39e43b0978d8c8430795e9108d03fb2357f5d3b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "@template/accueil.html.twig" %}*/
/* {% block result_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock result_content %}*/
/* */
