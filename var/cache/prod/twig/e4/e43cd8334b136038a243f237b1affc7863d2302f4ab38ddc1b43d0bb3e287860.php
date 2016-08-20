<?php

/* HeebaridataBundle::Seachpage.html.twig */
class __TwigTemplate_d97e2873b4a2e569ed7fbf450f39a0db1869483c7e37beded030b7b449f3867a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/Template.html.twig", "HeebaridataBundle::Seachpage.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"article col-lg-9 col-xs-9\">
            dcdscsdv
        ";
        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    </div>
    <br>
    <br>
    
";
    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::Seachpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/Template.html.twig" %}*/
/* {% block content %}*/
/*     <div class="article col-lg-9 col-xs-9">*/
/*             dcdscsdv*/
/*         {{parent()}}*/
/*     </div>*/
/*     <br>*/
/*     <br>*/
/*     */
/* {% endblock content %}*/
/* */
/* */
/* */
