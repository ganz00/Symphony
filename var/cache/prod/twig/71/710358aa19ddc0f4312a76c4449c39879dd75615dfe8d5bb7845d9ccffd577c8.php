<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_48a21f5c84fd778a82b1980283b7980a5a0ef82146a7018240c49b1c6907ece2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

<div class=\"login-form\">
  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    
    <div class=\"group\">
        ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.first_name", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 16
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.last_name", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 22
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idCountry", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.country", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idCountry", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idCountry", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthDate", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.birth_date", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthDate", array()), 'errors');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthDate", array()), 'widget', array("attr" => array("class" => "date")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.profession", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 39
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.email_adress", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 45
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    
    <div class=\"group\">
        ";
        // line 52
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.password", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div> 
    <div class=\"group\">
        ";
        // line 58
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.password_confirmation", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        <input type=\"submit\" class=\"button\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
    </div>
    <div class=\"hr\"></div>
    <div class=\"foot-lnk\">
        <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Alaready member?</a>
    </div>
</div>
";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 70,  176 => 67,  169 => 63,  163 => 60,  159 => 59,  154 => 58,  148 => 54,  144 => 53,  139 => 52,  132 => 47,  128 => 46,  123 => 45,  117 => 41,  113 => 40,  108 => 39,  102 => 35,  98 => 34,  93 => 33,  87 => 29,  83 => 28,  79 => 27,  73 => 24,  69 => 23,  64 => 22,  58 => 18,  54 => 17,  49 => 16,  43 => 12,  39 => 11,  34 => 10,  28 => 6,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* <div class="login-form">*/
/*   {{ form_errors(form) }}*/
/*     */
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.firstName, 'form.first_name'|trans ,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.firstName) }}*/
/*         {{ form_widget(form.firstName, {'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.lastName,'form.last_name'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.lastName) }}*/
/*         {{ form_widget(form.lastName, {'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.idCountry,'form.country'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.idCountry) }}*/
/*         {{ form_widget(form.idCountry, {'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*     {{form_label(form.birthDate,'form.birth_date'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*     {{ form_errors(form.birthDate) }}*/
/*     {{ form_widget(form.birthDate,{'attr': {'class': 'date'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.profession,'form.profession'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.profession) }}*/
/*         {{ form_widget(form.profession, {'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.email,'form.email_adress'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.email)}}*/
/*         {{ form_widget(form.email,{'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.username,'form.username'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.username)}}*/
/*         {{ form_widget(form.username,{'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     */
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.plainPassword.first,'form.password'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.plainPassword.first) }}*/
/*         {{ form_widget(form.plainPassword.first, {'attr': {'class': 'input'} }) }}*/
/*     </div> */
/*     <div class="group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.plainPassword.second,'form.password_confirmation'|trans,{'label_attr': {'class': 'label'} }) }}*/
/*         {{ form_errors(form.plainPassword.second) }}*/
/*         {{ form_widget(form.plainPassword.second, {'attr': {'class': 'input'} }) }}*/
/*     </div>*/
/*     <div class="group">*/
/*         <input type="submit" class="button" value="{{ 'registration.submit'|trans }}">*/
/*     </div>*/
/*     <div class="hr"></div>*/
/*     <div class="foot-lnk">*/
/*         <a href="{{ path('fos_user_security_login') }}">Alaready member?</a>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
