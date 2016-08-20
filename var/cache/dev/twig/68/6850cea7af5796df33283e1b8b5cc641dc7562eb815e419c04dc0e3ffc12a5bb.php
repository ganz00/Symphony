<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a50fed9a6ef42afe3090b8095ed9b392338a2ffd2e2bfa48952e307f40054737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b4f2aca9361529db4e0cddc301cd58996cb59b47365d37d23477963bf2f5361a = $this->env->getExtension("native_profiler");
        $__internal_b4f2aca9361529db4e0cddc301cd58996cb59b47365d37d23477963bf2f5361a->enter($__internal_b4f2aca9361529db4e0cddc301cd58996cb59b47365d37d23477963bf2f5361a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f2aca9361529db4e0cddc301cd58996cb59b47365d37d23477963bf2f5361a->leave($__internal_b4f2aca9361529db4e0cddc301cd58996cb59b47365d37d23477963bf2f5361a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ae3f5ed0957a9786cd708960386626af8f0f80193472e2b3125e9274169ea46 = $this->env->getExtension("native_profiler");
        $__internal_2ae3f5ed0957a9786cd708960386626af8f0f80193472e2b3125e9274169ea46->enter($__internal_2ae3f5ed0957a9786cd708960386626af8f0f80193472e2b3125e9274169ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2ae3f5ed0957a9786cd708960386626af8f0f80193472e2b3125e9274169ea46->leave($__internal_2ae3f5ed0957a9786cd708960386626af8f0f80193472e2b3125e9274169ea46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
