<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_86782fb05433e97a1afe3c7d7b0b9cfbe2e78a94eb210b2edbad1abf1e1db006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_670c4a4f0717266220b296608ef98ac9b00e9f073ba99278c0f137e8d7927811 = $this->env->getExtension("native_profiler");
        $__internal_670c4a4f0717266220b296608ef98ac9b00e9f073ba99278c0f137e8d7927811->enter($__internal_670c4a4f0717266220b296608ef98ac9b00e9f073ba99278c0f137e8d7927811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670c4a4f0717266220b296608ef98ac9b00e9f073ba99278c0f137e8d7927811->leave($__internal_670c4a4f0717266220b296608ef98ac9b00e9f073ba99278c0f137e8d7927811_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f48c262248c22f2a9a6bf42cb993d6b82a98145f04882421b7ec3403eab84b5 = $this->env->getExtension("native_profiler");
        $__internal_8f48c262248c22f2a9a6bf42cb993d6b82a98145f04882421b7ec3403eab84b5->enter($__internal_8f48c262248c22f2a9a6bf42cb993d6b82a98145f04882421b7ec3403eab84b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8f48c262248c22f2a9a6bf42cb993d6b82a98145f04882421b7ec3403eab84b5->leave($__internal_8f48c262248c22f2a9a6bf42cb993d6b82a98145f04882421b7ec3403eab84b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
