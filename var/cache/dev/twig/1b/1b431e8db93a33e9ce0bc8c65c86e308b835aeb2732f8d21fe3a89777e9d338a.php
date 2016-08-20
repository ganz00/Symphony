<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e573b42b57f14e3e34a88f5bdc96e114a0ead25aef47c8c924b6415ba9164b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::user.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2a9149fafcc3a349890147ca55c4e90ea1ded1848137d1f0533470df532decab = $this->env->getExtension("native_profiler");
        $__internal_2a9149fafcc3a349890147ca55c4e90ea1ded1848137d1f0533470df532decab->enter($__internal_2a9149fafcc3a349890147ca55c4e90ea1ded1848137d1f0533470df532decab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9149fafcc3a349890147ca55c4e90ea1ded1848137d1f0533470df532decab->leave($__internal_2a9149fafcc3a349890147ca55c4e90ea1ded1848137d1f0533470df532decab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f5a2d8664279cdcc25fc6a9e5c6464300016ac21cfd2863df380f3110d4d676 = $this->env->getExtension("native_profiler");
        $__internal_6f5a2d8664279cdcc25fc6a9e5c6464300016ac21cfd2863df380f3110d4d676->enter($__internal_6f5a2d8664279cdcc25fc6a9e5c6464300016ac21cfd2863df380f3110d4d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6f5a2d8664279cdcc25fc6a9e5c6464300016ac21cfd2863df380f3110d4d676->leave($__internal_6f5a2d8664279cdcc25fc6a9e5c6464300016ac21cfd2863df380f3110d4d676_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/* {% extends "FOSUserBundle::user.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
