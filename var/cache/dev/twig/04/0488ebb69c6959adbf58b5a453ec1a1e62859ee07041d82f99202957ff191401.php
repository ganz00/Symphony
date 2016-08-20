<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f8c4d1327b8a8d6f323047f18913d08d7a6c32b6631372c7d98a9e4ecf7e5e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::user.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6e2723c3d322f9ebc241761e82db5f85e6be8faba785f3a14f64ad3301b4057 = $this->env->getExtension("native_profiler");
        $__internal_f6e2723c3d322f9ebc241761e82db5f85e6be8faba785f3a14f64ad3301b4057->enter($__internal_f6e2723c3d322f9ebc241761e82db5f85e6be8faba785f3a14f64ad3301b4057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e2723c3d322f9ebc241761e82db5f85e6be8faba785f3a14f64ad3301b4057->leave($__internal_f6e2723c3d322f9ebc241761e82db5f85e6be8faba785f3a14f64ad3301b4057_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbf977619e40d21d33267357d7f7d8c5ee6d3b7bc220de53c00715bce58b5ac5 = $this->env->getExtension("native_profiler");
        $__internal_fbf977619e40d21d33267357d7f7d8c5ee6d3b7bc220de53c00715bce58b5ac5->enter($__internal_fbf977619e40d21d33267357d7f7d8c5ee6d3b7bc220de53c00715bce58b5ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "                <form class=\"login-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t<div class=\"login-form\">
\t\t\t<div class=\"sign-in-htm\">
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label class=\"label\" for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                        <input class=\"input\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label class=\"label\" for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                         <input class=\"input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" data-type=\"password\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"check\"/>
                                        <label id=\"lab\" for=\"remember_me\"><span class=\"icon\"></span> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input type=\"submit\" id=\"_submit\" class=\"button\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t<div class=\"foot-lnk\">
\t\t\t\t\t<a href=\"#forgot\">Forgot Password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
             </form>

   
";
        
        $__internal_fbf977619e40d21d33267357d7f7d8c5ee6d3b7bc220de53c00715bce58b5ac5->leave($__internal_fbf977619e40d21d33267357d7f7d8c5ee6d3b7bc220de53c00715bce58b5ac5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  78 => 22,  70 => 17,  64 => 14,  60 => 13,  53 => 9,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::user.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/*                 <form class="login-form" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 		<div class="login-form">*/
/* 			<div class="sign-in-htm">*/
/* 				<div class="group">*/
/* 					<label class="label" for="username">{{ 'security.login.username'|trans }}</label>*/
/*                                         <input class="input" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 				</div>*/
/* 				<div class="group">*/
/* 					<label class="label" for="password">{{ 'security.login.password'|trans }}</label>*/
/*                                          <input class="input" type="password" id="password" name="_password" required="required" data-type="password"/>*/
/* 				</div>*/
/* 				<div class="group">*/
/* 					<input type="checkbox" id="remember_me" name="_remember_me" value="on" class="check"/>*/
/*                                         <label id="lab" for="remember_me"><span class="icon"></span> {{ 'security.login.remember_me'|trans }}</label>*/
/* 				</div>*/
/* 				<div class="group">*/
/* 					<input type="submit" id="_submit" class="button" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 				</div>*/
/* 				<div class="hr"></div>*/
/* 				<div class="foot-lnk">*/
/* 					<a href="#forgot">Forgot Password?</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/*              </form>*/
/* */
/*    */
/* {% endblock fos_user_content %}*/
/* */
