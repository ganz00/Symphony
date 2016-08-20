<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_853ab4ee36fc24bb95e8463bf9963e7e7c3d2764df23ccd222409bfa8b175397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_054d940a6644a176de81d24fd110a48888677c873bf41ba53707b7f141871829 = $this->env->getExtension("native_profiler");
        $__internal_054d940a6644a176de81d24fd110a48888677c873bf41ba53707b7f141871829->enter($__internal_054d940a6644a176de81d24fd110a48888677c873bf41ba53707b7f141871829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054d940a6644a176de81d24fd110a48888677c873bf41ba53707b7f141871829->leave($__internal_054d940a6644a176de81d24fd110a48888677c873bf41ba53707b7f141871829_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f8ec26cb0948281e8ee7940b49d474ae0e81524af8132e2820fad6121086a13 = $this->env->getExtension("native_profiler");
        $__internal_9f8ec26cb0948281e8ee7940b49d474ae0e81524af8132e2820fad6121086a13->enter($__internal_9f8ec26cb0948281e8ee7940b49d474ae0e81524af8132e2820fad6121086a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9f8ec26cb0948281e8ee7940b49d474ae0e81524af8132e2820fad6121086a13->leave($__internal_9f8ec26cb0948281e8ee7940b49d474ae0e81524af8132e2820fad6121086a13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
