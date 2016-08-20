<?php

/* FOSUserBundle::user.html.twig */
class __TwigTemplate_398c141bdb2592b151ca0fb445685a637593a3b372452801801ce52d104f5491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Heebari.html.twig", "FOSUserBundle::user.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Heebari.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6866ddcbc1193a87bdd94d734bf79c25995511a6eb77448dc1d9e77280bd41e0 = $this->env->getExtension("native_profiler");
        $__internal_6866ddcbc1193a87bdd94d734bf79c25995511a6eb77448dc1d9e77280bd41e0->enter($__internal_6866ddcbc1193a87bdd94d734bf79c25995511a6eb77448dc1d9e77280bd41e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6866ddcbc1193a87bdd94d734bf79c25995511a6eb77448dc1d9e77280bd41e0->leave($__internal_6866ddcbc1193a87bdd94d734bf79c25995511a6eb77448dc1d9e77280bd41e0_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ba3ead789a28bebf56d3587894497f009c85070621bc8ec3f14ed0e3ec02a53c = $this->env->getExtension("native_profiler");
        $__internal_ba3ead789a28bebf56d3587894497f009c85070621bc8ec3f14ed0e3ec02a53c->enter($__internal_ba3ead789a28bebf56d3587894497f009c85070621bc8ec3f14ed0e3ec02a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "        <div class=\"login-wrap\">        
            <div class=\"login-html\">  
                <a f class=\"tab\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><label  class=\"tab\">Sign In</label></a>
                <a  class=\"tab\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><label class=\"tab\">Sign Up</label></a>
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "            </div>
        </div>
";
        
        $__internal_ba3ead789a28bebf56d3587894497f009c85070621bc8ec3f14ed0e3ec02a53c->leave($__internal_ba3ead789a28bebf56d3587894497f009c85070621bc8ec3f14ed0e3ec02a53c_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_934e9b964e847529a353dabcb2866d6c4137849c058f29962f68b104eb9f04de = $this->env->getExtension("native_profiler");
        $__internal_934e9b964e847529a353dabcb2866d6c4137849c058f29962f68b104eb9f04de->enter($__internal_934e9b964e847529a353dabcb2866d6c4137849c058f29962f68b104eb9f04de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "                        
                ";
        
        $__internal_934e9b964e847529a353dabcb2866d6c4137849c058f29962f68b104eb9f04de->leave($__internal_934e9b964e847529a353dabcb2866d6c4137849c058f29962f68b104eb9f04de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  64 => 7,  55 => 10,  53 => 7,  49 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::Heebari.html.twig" %}*/
/*  {% block page_content %}*/
/*         <div class="login-wrap">        */
/*             <div class="login-html">  */
/*                 <a f class="tab" href="{{ path('fos_user_security_login') }}"><label  class="tab">Sign In</label></a>*/
/*                 <a  class="tab" href="{{ path('fos_user_registration_register') }}"><label class="tab">Sign Up</label></a>*/
/*                 {% block fos_user_content %}*/
/*                         */
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         </div>*/
/* {% endblock page_content %}*/
/*  */
/* */
