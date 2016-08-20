<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_cc3dcbc1673742d3bcc528329d995b7409ede938f54082fb90426739b0759b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_80c112bb2ffcd9bcea7ac9ee442abc9ee60b2457f01dc2bc4754a1b86bd6790a = $this->env->getExtension("native_profiler");
        $__internal_80c112bb2ffcd9bcea7ac9ee442abc9ee60b2457f01dc2bc4754a1b86bd6790a->enter($__internal_80c112bb2ffcd9bcea7ac9ee442abc9ee60b2457f01dc2bc4754a1b86bd6790a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c112bb2ffcd9bcea7ac9ee442abc9ee60b2457f01dc2bc4754a1b86bd6790a->leave($__internal_80c112bb2ffcd9bcea7ac9ee442abc9ee60b2457f01dc2bc4754a1b86bd6790a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a53959f20aa25c6b510f0326be6de9956482674d923db75652b8220fcfdf03a7 = $this->env->getExtension("native_profiler");
        $__internal_a53959f20aa25c6b510f0326be6de9956482674d923db75652b8220fcfdf03a7->enter($__internal_a53959f20aa25c6b510f0326be6de9956482674d923db75652b8220fcfdf03a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a53959f20aa25c6b510f0326be6de9956482674d923db75652b8220fcfdf03a7->leave($__internal_a53959f20aa25c6b510f0326be6de9956482674d923db75652b8220fcfdf03a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
