<?php

/* @template/result.html.twig */
class __TwigTemplate_49cbcf9b9f0caecc2b2637df8dabdb9108ba476e334c485a407e06390f67d0e1 extends Twig_Template
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
        $__internal_6a842a41d55f52662cc486858137a56e2e7653017c01a84bd6dbb5703f369259 = $this->env->getExtension("native_profiler");
        $__internal_6a842a41d55f52662cc486858137a56e2e7653017c01a84bd6dbb5703f369259->enter($__internal_6a842a41d55f52662cc486858137a56e2e7653017c01a84bd6dbb5703f369259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@template/result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a842a41d55f52662cc486858137a56e2e7653017c01a84bd6dbb5703f369259->leave($__internal_6a842a41d55f52662cc486858137a56e2e7653017c01a84bd6dbb5703f369259_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_39ca5003af8ce0a5c4f22cb7b87fa3900ac472d9ee96e8bc75918a57503bb872 = $this->env->getExtension("native_profiler");
        $__internal_39ca5003af8ce0a5c4f22cb7b87fa3900ac472d9ee96e8bc75918a57503bb872->enter($__internal_39ca5003af8ce0a5c4f22cb7b87fa3900ac472d9ee96e8bc75918a57503bb872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_39ca5003af8ce0a5c4f22cb7b87fa3900ac472d9ee96e8bc75918a57503bb872->leave($__internal_39ca5003af8ce0a5c4f22cb7b87fa3900ac472d9ee96e8bc75918a57503bb872_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_8db830b93d349b20716fd6e3283ba3aee350484121f36e480e8588c13d6fe136 = $this->env->getExtension("native_profiler");
        $__internal_8db830b93d349b20716fd6e3283ba3aee350484121f36e480e8588c13d6fe136->enter($__internal_8db830b93d349b20716fd6e3283ba3aee350484121f36e480e8588c13d6fe136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "    ";
        
        $__internal_8db830b93d349b20716fd6e3283ba3aee350484121f36e480e8588c13d6fe136->leave($__internal_8db830b93d349b20716fd6e3283ba3aee350484121f36e480e8588c13d6fe136_prof);

    }

    // line 7
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_3042e989a0e71588c7b57d085e8df3af7c73a5f5be49e8c734bf9a8c20718821 = $this->env->getExtension("native_profiler");
        $__internal_3042e989a0e71588c7b57d085e8df3af7c73a5f5be49e8c734bf9a8c20718821->enter($__internal_3042e989a0e71588c7b57d085e8df3af7c73a5f5be49e8c734bf9a8c20718821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        echo " 

            ";
        
        $__internal_3042e989a0e71588c7b57d085e8df3af7c73a5f5be49e8c734bf9a8c20718821->leave($__internal_3042e989a0e71588c7b57d085e8df3af7c73a5f5be49e8c734bf9a8c20718821_prof);

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
        return array (  81 => 7,  69 => 5,  57 => 12,  52 => 9,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 2,);
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
