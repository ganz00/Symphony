<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bb81c1e06e38f0badf9f586a2672a123aea19c5c3dbd1a390ab58e23a67d182b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::user.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd5224165c7b9f6273a0655a367ff37fdf5d623b61bc55e2b25d8d54adb63c49 = $this->env->getExtension("native_profiler");
        $__internal_bd5224165c7b9f6273a0655a367ff37fdf5d623b61bc55e2b25d8d54adb63c49->enter($__internal_bd5224165c7b9f6273a0655a367ff37fdf5d623b61bc55e2b25d8d54adb63c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5224165c7b9f6273a0655a367ff37fdf5d623b61bc55e2b25d8d54adb63c49->leave($__internal_bd5224165c7b9f6273a0655a367ff37fdf5d623b61bc55e2b25d8d54adb63c49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_449e2f19ed4fe2af61ca5eb1e54fba6b133e0cc6a08bc14145124acc47c5a019 = $this->env->getExtension("native_profiler");
        $__internal_449e2f19ed4fe2af61ca5eb1e54fba6b133e0cc6a08bc14145124acc47c5a019->enter($__internal_449e2f19ed4fe2af61ca5eb1e54fba6b133e0cc6a08bc14145124acc47c5a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->displayParentBlock("fos_user_content", $context, $blocks);
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        
        $__internal_449e2f19ed4fe2af61ca5eb1e54fba6b133e0cc6a08bc14145124acc47c5a019->leave($__internal_449e2f19ed4fe2af61ca5eb1e54fba6b133e0cc6a08bc14145124acc47c5a019_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::user.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {{ parent() }}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
