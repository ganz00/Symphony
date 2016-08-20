<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f8383d24a86427a480859d392d0b5189bb5789cce3a7202731caabed4327c1ae extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "                <form class=\"login-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  75 => 25,  69 => 22,  61 => 17,  55 => 14,  51 => 13,  44 => 9,  39 => 8,  33 => 6,  31 => 5,  28 => 4,  11 => 1,);
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
