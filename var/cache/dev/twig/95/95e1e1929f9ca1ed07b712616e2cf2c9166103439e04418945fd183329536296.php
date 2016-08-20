<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5a2a0ead4aa73538046baaa3aef2100ea735c830de4feb92a7ec4e10310ecc29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::accueil.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c5818dcf89ebe43717e9ceb6d7712698b56482aa17c9202dab25e15032b32bd = $this->env->getExtension("native_profiler");
        $__internal_9c5818dcf89ebe43717e9ceb6d7712698b56482aa17c9202dab25e15032b32bd->enter($__internal_9c5818dcf89ebe43717e9ceb6d7712698b56482aa17c9202dab25e15032b32bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5818dcf89ebe43717e9ceb6d7712698b56482aa17c9202dab25e15032b32bd->leave($__internal_9c5818dcf89ebe43717e9ceb6d7712698b56482aa17c9202dab25e15032b32bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6df8f649722c51f92eb06890e1d63d007edd9ed4aa6697331e1eb1d520ec454 = $this->env->getExtension("native_profiler");
        $__internal_c6df8f649722c51f92eb06890e1d63d007edd9ed4aa6697331e1eb1d520ec454->enter($__internal_c6df8f649722c51f92eb06890e1d63d007edd9ed4aa6697331e1eb1d520ec454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c6df8f649722c51f92eb06890e1d63d007edd9ed4aa6697331e1eb1d520ec454->leave($__internal_c6df8f649722c51f92eb06890e1d63d007edd9ed4aa6697331e1eb1d520ec454_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% extends "FOSUserBundle::accueil.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
