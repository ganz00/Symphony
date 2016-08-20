<?php

/* HeebaridataBundle::Seachpage.html.twig */
class __TwigTemplate_8964fdac9648c7f3e2dd1acb325bd077418b8b3662a5377fa67255b34b58832c extends Twig_Template
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
        $__internal_70f1206016e0867c7ee8a9bff4667172b5f69aee67565b78ba92c6c6456152e6 = $this->env->getExtension("native_profiler");
        $__internal_70f1206016e0867c7ee8a9bff4667172b5f69aee67565b78ba92c6c6456152e6->enter($__internal_70f1206016e0867c7ee8a9bff4667172b5f69aee67565b78ba92c6c6456152e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeebaridataBundle::Seachpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70f1206016e0867c7ee8a9bff4667172b5f69aee67565b78ba92c6c6456152e6->leave($__internal_70f1206016e0867c7ee8a9bff4667172b5f69aee67565b78ba92c6c6456152e6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_796ddcbd87cfe454df251e3fe748fe168e16aacd0664e8065c402c0b0eb16bcd = $this->env->getExtension("native_profiler");
        $__internal_796ddcbd87cfe454df251e3fe748fe168e16aacd0664e8065c402c0b0eb16bcd->enter($__internal_796ddcbd87cfe454df251e3fe748fe168e16aacd0664e8065c402c0b0eb16bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_796ddcbd87cfe454df251e3fe748fe168e16aacd0664e8065c402c0b0eb16bcd->leave($__internal_796ddcbd87cfe454df251e3fe748fe168e16aacd0664e8065c402c0b0eb16bcd_prof);

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
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 2,);
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
