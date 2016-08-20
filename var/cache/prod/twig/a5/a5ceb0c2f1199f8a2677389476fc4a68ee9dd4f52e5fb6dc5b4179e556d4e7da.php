<?php

/* @template/result.html.twig */
class __TwigTemplate_55964d9fa02db8c34f1fac8b1039039e01e8013c788669b2b43564671fc13db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/Template.html.twig", "@template/result.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'titre' => array($this, 'block_titre'),
            'resultat' => array($this, 'block_resultat'),
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
        echo "    <div class=\"article col-lg-10 col-xs-10\">
        <div class=\" title_article\"><h4>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</h4></div>
        <div class=\"row\">
            ";
        // line 7
        $this->displayBlock('resultat', $context, $blocks);
        // line 9
        echo " 
        </div>
        <div class=\"col-lg-2 col-xs-12 section_description\">
            ";
        // line 12
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        </div>
    </div>

";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "    ";
    }

    // line 7
    public function block_resultat($context, array $blocks = array())
    {
        echo " 

            ";
    }

    public function getTemplateName()
    {
        return "@template/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  57 => 5,  48 => 12,  43 => 9,  41 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/Template.html.twig" %}*/
/* {% block content %}*/
/*     <div class="article col-lg-10 col-xs-10">*/
/*         <div class=" title_article"><h4>{% block titre %}    {% endblock titre %}</h4></div>*/
/*         <div class="row">*/
/*             {% block resultat %} */
/* */
/*             {% endblock resultat %} */
/*         </div>*/
/*         <div class="col-lg-2 col-xs-12 section_description">*/
/*             {{ parent()}}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* */
