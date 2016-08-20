<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b1211dde60b81ba389d48fc4aae04d2073e04b781331d44f045ffcf0e4f32846 extends Twig_Template
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
        $__internal_d16df53fa656091ecab13239d3d9d402aecd4207abcc4dfe0f38e0425de3356a = $this->env->getExtension("native_profiler");
        $__internal_d16df53fa656091ecab13239d3d9d402aecd4207abcc4dfe0f38e0425de3356a->enter($__internal_d16df53fa656091ecab13239d3d9d402aecd4207abcc4dfe0f38e0425de3356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d16df53fa656091ecab13239d3d9d402aecd4207abcc4dfe0f38e0425de3356a->leave($__internal_d16df53fa656091ecab13239d3d9d402aecd4207abcc4dfe0f38e0425de3356a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83506c3a98a40625169cbcc2dfbe6cae806bce04ea3c836dce70be5fcb5d2b5f = $this->env->getExtension("native_profiler");
        $__internal_83506c3a98a40625169cbcc2dfbe6cae806bce04ea3c836dce70be5fcb5d2b5f->enter($__internal_83506c3a98a40625169cbcc2dfbe6cae806bce04ea3c836dce70be5fcb5d2b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83506c3a98a40625169cbcc2dfbe6cae806bce04ea3c836dce70be5fcb5d2b5f->leave($__internal_83506c3a98a40625169cbcc2dfbe6cae806bce04ea3c836dce70be5fcb5d2b5f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_312fbf0f45d56f7ee2ebb3342a6e67005105cd264d2ff9974bcf197a0630b194 = $this->env->getExtension("native_profiler");
        $__internal_312fbf0f45d56f7ee2ebb3342a6e67005105cd264d2ff9974bcf197a0630b194->enter($__internal_312fbf0f45d56f7ee2ebb3342a6e67005105cd264d2ff9974bcf197a0630b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_312fbf0f45d56f7ee2ebb3342a6e67005105cd264d2ff9974bcf197a0630b194->leave($__internal_312fbf0f45d56f7ee2ebb3342a6e67005105cd264d2ff9974bcf197a0630b194_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e392ed160d039b9b7fd8b1b6e9c8bc7f376d7caef5377fb692cd2e61c986fabe = $this->env->getExtension("native_profiler");
        $__internal_e392ed160d039b9b7fd8b1b6e9c8bc7f376d7caef5377fb692cd2e61c986fabe->enter($__internal_e392ed160d039b9b7fd8b1b6e9c8bc7f376d7caef5377fb692cd2e61c986fabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e392ed160d039b9b7fd8b1b6e9c8bc7f376d7caef5377fb692cd2e61c986fabe->leave($__internal_e392ed160d039b9b7fd8b1b6e9c8bc7f376d7caef5377fb692cd2e61c986fabe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
