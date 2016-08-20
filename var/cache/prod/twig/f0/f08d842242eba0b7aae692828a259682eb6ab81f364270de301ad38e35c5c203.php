<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_27677af2018b014fa9ad0d898a54621579daf03c324c8bc35af4fe4df0d299d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@template/accueil.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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

    // line 3
    public function block_result_content($context, array $blocks = array())
    {
        // line 4
        echo "    <br/>
    <br/>
    <br/>
";
        // line 7
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "@template/accueil.html.twig" %}*/
/* */
/* {% block result_content %}*/
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock result_content %}*/
/* */
