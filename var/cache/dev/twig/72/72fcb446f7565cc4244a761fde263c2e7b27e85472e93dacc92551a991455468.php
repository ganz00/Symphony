<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2d27655a51ee42ac5d06c95baf0667f9a7287d713b4405b31847860a29efa56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7a1ba3370a257aa75480f9d87e366e779ef5645c18001d2abb5584f5e98f5013 = $this->env->getExtension("native_profiler");
        $__internal_7a1ba3370a257aa75480f9d87e366e779ef5645c18001d2abb5584f5e98f5013->enter($__internal_7a1ba3370a257aa75480f9d87e366e779ef5645c18001d2abb5584f5e98f5013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1ba3370a257aa75480f9d87e366e779ef5645c18001d2abb5584f5e98f5013->leave($__internal_7a1ba3370a257aa75480f9d87e366e779ef5645c18001d2abb5584f5e98f5013_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f387ebeb46c54f3c6816927321d23179539025d8bfb1868854347eca086610f3 = $this->env->getExtension("native_profiler");
        $__internal_f387ebeb46c54f3c6816927321d23179539025d8bfb1868854347eca086610f3->enter($__internal_f387ebeb46c54f3c6816927321d23179539025d8bfb1868854347eca086610f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f387ebeb46c54f3c6816927321d23179539025d8bfb1868854347eca086610f3->leave($__internal_f387ebeb46c54f3c6816927321d23179539025d8bfb1868854347eca086610f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
