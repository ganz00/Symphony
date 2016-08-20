<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a994d6d4c5a7ba648d8cf8bc5d1e485240fbaf92372ccd0e0b85dd27700fb6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_380b8a14d5a604416b676521aa3d0556e9fdb758ccd350b7395831f0843167e9 = $this->env->getExtension("native_profiler");
        $__internal_380b8a14d5a604416b676521aa3d0556e9fdb758ccd350b7395831f0843167e9->enter($__internal_380b8a14d5a604416b676521aa3d0556e9fdb758ccd350b7395831f0843167e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380b8a14d5a604416b676521aa3d0556e9fdb758ccd350b7395831f0843167e9->leave($__internal_380b8a14d5a604416b676521aa3d0556e9fdb758ccd350b7395831f0843167e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a86cdfee7d2695fd8fc25230e27e6c343f720f717f9cdbe379f626d6bf89a17b = $this->env->getExtension("native_profiler");
        $__internal_a86cdfee7d2695fd8fc25230e27e6c343f720f717f9cdbe379f626d6bf89a17b->enter($__internal_a86cdfee7d2695fd8fc25230e27e6c343f720f717f9cdbe379f626d6bf89a17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a86cdfee7d2695fd8fc25230e27e6c343f720f717f9cdbe379f626d6bf89a17b->leave($__internal_a86cdfee7d2695fd8fc25230e27e6c343f720f717f9cdbe379f626d6bf89a17b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
