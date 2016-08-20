<?php

/* FOSUserBundle::user.html.twig */
class __TwigTemplate_04502409231c06eb28c59ae3817bf0b2b4997991bbcc1c47485d2022f3bd6b5c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
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
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "                        
                ";
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
        return array (  55 => 8,  52 => 7,  46 => 10,  44 => 7,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
