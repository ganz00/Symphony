<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_31694e0af36c67dc1e153b29f2f2cd0125eeb5ceebcc962d98a77e99422537fc extends Twig_Template
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
        $__internal_8d126988918273dc59d6bf3f9d6c4aec0f98bbfef518851962acee93b933d877 = $this->env->getExtension("native_profiler");
        $__internal_8d126988918273dc59d6bf3f9d6c4aec0f98bbfef518851962acee93b933d877->enter($__internal_8d126988918273dc59d6bf3f9d6c4aec0f98bbfef518851962acee93b933d877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

<div class=\"login-form\">
  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
    <div class=\"group\">
        ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.first_name", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 16
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.last_name", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 22
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCountry", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.country", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCountry", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCountry", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.birth_date", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'errors');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'widget', array("attr" => array("class" => "date")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.profession", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 39
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.email_adress", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    <div class=\"group\">
        ";
        // line 45
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div>
    
    <div class=\"group\">
        ";
        // line 52
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.password", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
    </div> 
    <div class=\"group\">
        ";
        // line 58
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.password_confirmation", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "input")));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8d126988918273dc59d6bf3f9d6c4aec0f98bbfef518851962acee93b933d877->leave($__internal_8d126988918273dc59d6bf3f9d6c4aec0f98bbfef518851962acee93b933d877_prof);

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
        return array (  185 => 70,  179 => 67,  172 => 63,  166 => 60,  162 => 59,  157 => 58,  151 => 54,  147 => 53,  142 => 52,  135 => 47,  131 => 46,  126 => 45,  120 => 41,  116 => 40,  111 => 39,  105 => 35,  101 => 34,  96 => 33,  90 => 29,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  67 => 22,  61 => 18,  57 => 17,  52 => 16,  46 => 12,  42 => 11,  37 => 10,  31 => 6,  25 => 3,  22 => 2,);
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
