<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6051289f19e931f34d0066462369ccbd0b2def826597c1338df6ebd75535dbcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_38a921b34f65bc1d8fe1d69771536aa78b2cb493a754f5d57d3f0f1b4b753cd9 = $this->env->getExtension("native_profiler");
        $__internal_38a921b34f65bc1d8fe1d69771536aa78b2cb493a754f5d57d3f0f1b4b753cd9->enter($__internal_38a921b34f65bc1d8fe1d69771536aa78b2cb493a754f5d57d3f0f1b4b753cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a921b34f65bc1d8fe1d69771536aa78b2cb493a754f5d57d3f0f1b4b753cd9->leave($__internal_38a921b34f65bc1d8fe1d69771536aa78b2cb493a754f5d57d3f0f1b4b753cd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f26a042f1dc76ce61fd82668464d9d6eb865ebecffad871eadbbebaa67e757f = $this->env->getExtension("native_profiler");
        $__internal_1f26a042f1dc76ce61fd82668464d9d6eb865ebecffad871eadbbebaa67e757f->enter($__internal_1f26a042f1dc76ce61fd82668464d9d6eb865ebecffad871eadbbebaa67e757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1f26a042f1dc76ce61fd82668464d9d6eb865ebecffad871eadbbebaa67e757f->leave($__internal_1f26a042f1dc76ce61fd82668464d9d6eb865ebecffad871eadbbebaa67e757f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
