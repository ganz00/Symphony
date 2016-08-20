<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_83e58ddb49262ea06d864c0909d2cfb4f8faf66394a12061954043873b2e4cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2251745ee0dd6edf3759dd29489bb523485e069a9e9c1f6180a4d523e3135f0a = $this->env->getExtension("native_profiler");
        $__internal_2251745ee0dd6edf3759dd29489bb523485e069a9e9c1f6180a4d523e3135f0a->enter($__internal_2251745ee0dd6edf3759dd29489bb523485e069a9e9c1f6180a4d523e3135f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2251745ee0dd6edf3759dd29489bb523485e069a9e9c1f6180a4d523e3135f0a->leave($__internal_2251745ee0dd6edf3759dd29489bb523485e069a9e9c1f6180a4d523e3135f0a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_23fc039ec3de19c08458e188db74c7a282b1cdfa9642b121ff73525e331f1503 = $this->env->getExtension("native_profiler");
        $__internal_23fc039ec3de19c08458e188db74c7a282b1cdfa9642b121ff73525e331f1503->enter($__internal_23fc039ec3de19c08458e188db74c7a282b1cdfa9642b121ff73525e331f1503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_23fc039ec3de19c08458e188db74c7a282b1cdfa9642b121ff73525e331f1503->leave($__internal_23fc039ec3de19c08458e188db74c7a282b1cdfa9642b121ff73525e331f1503_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bd8ad993072bf569a0b792d282c894cefd0b1f1160122141e2f728c56860dcc9 = $this->env->getExtension("native_profiler");
        $__internal_bd8ad993072bf569a0b792d282c894cefd0b1f1160122141e2f728c56860dcc9->enter($__internal_bd8ad993072bf569a0b792d282c894cefd0b1f1160122141e2f728c56860dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bd8ad993072bf569a0b792d282c894cefd0b1f1160122141e2f728c56860dcc9->leave($__internal_bd8ad993072bf569a0b792d282c894cefd0b1f1160122141e2f728c56860dcc9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d40eec1e695f08990ff6e23decc0f37fdd454f67ece567b514f2255024180362 = $this->env->getExtension("native_profiler");
        $__internal_d40eec1e695f08990ff6e23decc0f37fdd454f67ece567b514f2255024180362->enter($__internal_d40eec1e695f08990ff6e23decc0f37fdd454f67ece567b514f2255024180362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d40eec1e695f08990ff6e23decc0f37fdd454f67ece567b514f2255024180362->leave($__internal_d40eec1e695f08990ff6e23decc0f37fdd454f67ece567b514f2255024180362_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
