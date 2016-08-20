<?php

/* @template/accueil.html.twig */
class __TwigTemplate_07cc521782849c4ddc7c338a9d4b268f07ca0f80a6a23d21720bde5b0e74d0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/Template.html.twig", "@template/accueil.html.twig", 2);
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
        $__internal_02553dea447044b7ffceacbe8ca2732b9234380ddfbe8cd054f3f9f90e3a2576 = $this->env->getExtension("native_profiler");
        $__internal_02553dea447044b7ffceacbe8ca2732b9234380ddfbe8cd054f3f9f90e3a2576->enter($__internal_02553dea447044b7ffceacbe8ca2732b9234380ddfbe8cd054f3f9f90e3a2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@template/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02553dea447044b7ffceacbe8ca2732b9234380ddfbe8cd054f3f9f90e3a2576->leave($__internal_02553dea447044b7ffceacbe8ca2732b9234380ddfbe8cd054f3f9f90e3a2576_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b636d6f7bfa64ebbe506ce9d9757a3685227a9ed4a652ff6e206470352d0328 = $this->env->getExtension("native_profiler");
        $__internal_8b636d6f7bfa64ebbe506ce9d9757a3685227a9ed4a652ff6e206470352d0328->enter($__internal_8b636d6f7bfa64ebbe506ce9d9757a3685227a9ed4a652ff6e206470352d0328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8b636d6f7bfa64ebbe506ce9d9757a3685227a9ed4a652ff6e206470352d0328->leave($__internal_8b636d6f7bfa64ebbe506ce9d9757a3685227a9ed4a652ff6e206470352d0328_prof);

    }

    // line 6
    public function block_result_content($context, array $blocks = array())
    {
        $__internal_16c964173187229e2fa45887eee1c67f57f13df673784385dac973290274df4b = $this->env->getExtension("native_profiler");
        $__internal_16c964173187229e2fa45887eee1c67f57f13df673784385dac973290274df4b->enter($__internal_16c964173187229e2fa45887eee1c67f57f13df673784385dac973290274df4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "result_content"));

        // line 7
        echo "                    
                ";
        
        $__internal_16c964173187229e2fa45887eee1c67f57f13df673784385dac973290274df4b->leave($__internal_16c964173187229e2fa45887eee1c67f57f13df673784385dac973290274df4b_prof);

    }

    // line 11
    public function block_result_content2($context, array $blocks = array())
    {
        $__internal_759562b4de989a80f6aefba45ceb05b2996c2fd893cb26e4c842b85bcdd03b37 = $this->env->getExtension("native_profiler");
        $__internal_759562b4de989a80f6aefba45ceb05b2996c2fd893cb26e4c842b85bcdd03b37->enter($__internal_759562b4de989a80f6aefba45ceb05b2996c2fd893cb26e4c842b85bcdd03b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "result_content2"));

        // line 12
        echo "                    
                ";
        
        $__internal_759562b4de989a80f6aefba45ceb05b2996c2fd893cb26e4c842b85bcdd03b37->leave($__internal_759562b4de989a80f6aefba45ceb05b2996c2fd893cb26e4c842b85bcdd03b37_prof);

    }

    public function getTemplateName()
    {
        return "@template/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  75 => 11,  67 => 7,  61 => 6,  53 => 14,  51 => 11,  47 => 9,  45 => 6,  42 => 5,  36 => 4,  11 => 2,);
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
