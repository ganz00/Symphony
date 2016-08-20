<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9486f2d7141848dd9239567d7663eda1b40b59f2873834a9008a3abf3c24a931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_301ca8412dfdf67d1d84e509d6d7e113f76a1d96dcc2bc113fe731dd75e58bfc = $this->env->getExtension("native_profiler");
        $__internal_301ca8412dfdf67d1d84e509d6d7e113f76a1d96dcc2bc113fe731dd75e58bfc->enter($__internal_301ca8412dfdf67d1d84e509d6d7e113f76a1d96dcc2bc113fe731dd75e58bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301ca8412dfdf67d1d84e509d6d7e113f76a1d96dcc2bc113fe731dd75e58bfc->leave($__internal_301ca8412dfdf67d1d84e509d6d7e113f76a1d96dcc2bc113fe731dd75e58bfc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcded443fa93747eb4752262082601086d5853a5a2b7caff9345c80e59d94c2d = $this->env->getExtension("native_profiler");
        $__internal_fcded443fa93747eb4752262082601086d5853a5a2b7caff9345c80e59d94c2d->enter($__internal_fcded443fa93747eb4752262082601086d5853a5a2b7caff9345c80e59d94c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fcded443fa93747eb4752262082601086d5853a5a2b7caff9345c80e59d94c2d->leave($__internal_fcded443fa93747eb4752262082601086d5853a5a2b7caff9345c80e59d94c2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
