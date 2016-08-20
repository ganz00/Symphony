<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b701bff4fcad42f827632a68c7949cba8985d908cbb5491c46f1f12caf6662b4 extends Twig_Template
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
        $__internal_ce757caf86b6f5630835d8dce393f5acb352dc7544840333bf0742e8046652b6 = $this->env->getExtension("native_profiler");
        $__internal_ce757caf86b6f5630835d8dce393f5acb352dc7544840333bf0742e8046652b6->enter($__internal_ce757caf86b6f5630835d8dce393f5acb352dc7544840333bf0742e8046652b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce757caf86b6f5630835d8dce393f5acb352dc7544840333bf0742e8046652b6->leave($__internal_ce757caf86b6f5630835d8dce393f5acb352dc7544840333bf0742e8046652b6_prof);

    }

    // line 3
    public function block_result_content($context, array $blocks = array())
    {
        $__internal_ad06e54c7ba819cb662a659598c1edda096cc14a6288c0d9ec9a31530bc1c2fc = $this->env->getExtension("native_profiler");
        $__internal_ad06e54c7ba819cb662a659598c1edda096cc14a6288c0d9ec9a31530bc1c2fc->enter($__internal_ad06e54c7ba819cb662a659598c1edda096cc14a6288c0d9ec9a31530bc1c2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "result_content"));

        // line 4
        echo "    <br/>
    <br/>
    <br/>
";
        // line 7
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        
        $__internal_ad06e54c7ba819cb662a659598c1edda096cc14a6288c0d9ec9a31530bc1c2fc->leave($__internal_ad06e54c7ba819cb662a659598c1edda096cc14a6288c0d9ec9a31530bc1c2fc_prof);

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
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
