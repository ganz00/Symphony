<?php

/* HeebaridataBundle::accueil.html.twig */
class __TwigTemplate_e2ce70abc0148be0c97945ca5c0084e76cdf3287a60c60ebeca6e0ddc57a71df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/Template.html.twig", "HeebaridataBundle::accueil.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'result_content' => array($this, 'block_result_content'),
            'result_content2' => array($this, 'block_result_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@template/Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"article col-lg-6 col-xs-6\">
                ";
        // line 6
        $this->displayBlock('result_content', $context, $blocks);
        // line 9
        echo "</div>
<div class=\"article col-lg-3 col-xs-3\">
                ";
        // line 11
        $this->displayBlock('result_content2', $context, $blocks);
        // line 14
        echo "</div>
";
    }

    // line 6
    public function block_result_content($context, array $blocks = array())
    {
        // line 7
        echo "                    
                ";
    }

    // line 11
    public function block_result_content2($context, array $blocks = array())
    {
        // line 12
        echo "                    
                ";
    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  57 => 11,  52 => 7,  49 => 6,  44 => 14,  42 => 11,  38 => 9,  36 => 6,  33 => 5,  30 => 4,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/navbar.html.twig #}*/
/* {% extends "@template/Template.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="article col-lg-6 col-xs-6">*/
/*                 {% block result_content %}*/
/*                     */
/*                 {% endblock result_content %}*/
/* </div>*/
/* <div class="article col-lg-3 col-xs-3">*/
/*                 {% block result_content2 %}*/
/*                     */
/*                 {% endblock result_content2 %}*/
/* </div>*/
/* {% endblock content %}*/
/* */
