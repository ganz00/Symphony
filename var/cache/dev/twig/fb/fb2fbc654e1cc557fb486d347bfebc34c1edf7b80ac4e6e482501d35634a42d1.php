<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_46967aa80bd2eaee87c2d9041438a8fd131c8ff92ace3b24279f25f0677ff5bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_353e347e3ed33e107986282cf830383055aded64c8687c58ff144c10608c74ca = $this->env->getExtension("native_profiler");
        $__internal_353e347e3ed33e107986282cf830383055aded64c8687c58ff144c10608c74ca->enter($__internal_353e347e3ed33e107986282cf830383055aded64c8687c58ff144c10608c74ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_353e347e3ed33e107986282cf830383055aded64c8687c58ff144c10608c74ca->leave($__internal_353e347e3ed33e107986282cf830383055aded64c8687c58ff144c10608c74ca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d349785465450322c59416c1d7ec09522f0950077ea75a72bf21b1d943b18fd = $this->env->getExtension("native_profiler");
        $__internal_1d349785465450322c59416c1d7ec09522f0950077ea75a72bf21b1d943b18fd->enter($__internal_1d349785465450322c59416c1d7ec09522f0950077ea75a72bf21b1d943b18fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1d349785465450322c59416c1d7ec09522f0950077ea75a72bf21b1d943b18fd->leave($__internal_1d349785465450322c59416c1d7ec09522f0950077ea75a72bf21b1d943b18fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
