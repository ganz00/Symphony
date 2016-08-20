<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_763aeab6f026dd53966ea7ca0fe763021017c0e59f60ffb5f397613444490d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@template/accueil.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'result_content' => array($this, 'block_result_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@template/accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_result_content($context, array $blocks = array())
    {
        // line 3
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "@template/accueil.html.twig" %}*/
/* {% block result_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock result_content %}*/
/* */
