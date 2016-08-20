<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b8470f447222822f60cc41b822c39f62bdfdecfad1d5353cb865a7a6c8008d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c560573a6714c20e01c74b63c76a98dd78bf041135f5bf7fa014c23798e7c4 = $this->env->getExtension("native_profiler");
        $__internal_c8c560573a6714c20e01c74b63c76a98dd78bf041135f5bf7fa014c23798e7c4->enter($__internal_c8c560573a6714c20e01c74b63c76a98dd78bf041135f5bf7fa014c23798e7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c8c560573a6714c20e01c74b63c76a98dd78bf041135f5bf7fa014c23798e7c4->leave($__internal_c8c560573a6714c20e01c74b63c76a98dd78bf041135f5bf7fa014c23798e7c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
