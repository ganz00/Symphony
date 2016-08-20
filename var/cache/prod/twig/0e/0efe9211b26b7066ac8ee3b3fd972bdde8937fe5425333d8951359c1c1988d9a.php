<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_89087d4401ff5fe710f1312d32b2dcad65bc86d42f457d5fde54a95c06528996 extends Twig_Template
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


<div class=\"fos_user_user_show\">
    <div class=\"row\">
                <div class=\"col-lg-7\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("account.png"), "html", null, true);
        echo "\" id=\"userInfo\" style=\"height: 100px\" />
                </div>
                <div class=\"col-lg-1\">&nbsp;</div>
                <div class=\"col-lg-4\"> 
                </div>
            </div>
                    <br>
                    <br>
            <div class=\"col-lg-1\"></div>
                <div class=\"col-lg-10\">
                    <form class=\"col-lg-6 col-xs-3 col-sm-6\">
                         <label for=\"text\"> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.first_name", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
                         <input id=\"text\" type=\"text\" disabled=\"true\" class=\"disabled form-control \" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "FirstName", array()), "html", null, true);
        echo "\">
                         <label for=\"text\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.last_name", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
                         <input id=\"text\" type=\"text\" disabled=\"true\" class=\"form-control\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "LastName", array()), "html", null, true);
        echo "\">
                         <label for=\"text\">Date de naissance : </label>
                         <input id=\"text\" type=\"text\" disabled=\"true\" class=\"form-control\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "birthDate", array()), "d-M-Y"), "html", null, true);
        echo "\">
                    </form>
                    <form  class=\"col-lg-6 col-xs-3 col-sm-6\">
                        <div class=\"form-group\">
                            <label for=\"text\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.profession", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
                            <input id=\"text\" disabled=\"true\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profession", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"text\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
                            <input id=\"text\" disabled=\"true\" type=\"text\" class=\"form-control\" placeholder=\" ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"text\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
                            <input id=\"text\" disabled=\"true\" type=\"text\" class=\"form-control\" placeholder=\" ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo " \">
                        </div>
                        
                    </form>
                </div>
                <div class=\"col-lg-1\"></div>   
        </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  85 => 36,  79 => 33,  75 => 32,  69 => 29,  65 => 28,  58 => 24,  53 => 22,  49 => 21,  45 => 20,  41 => 19,  27 => 8,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* <div class="fos_user_user_show">*/
/*     <div class="row">*/
/*                 <div class="col-lg-7">*/
/*                     <img src="{{ asset('account.png') }}" id="userInfo" style="height: 100px" />*/
/*                 </div>*/
/*                 <div class="col-lg-1">&nbsp;</div>*/
/*                 <div class="col-lg-4"> */
/*                 </div>*/
/*             </div>*/
/*                     <br>*/
/*                     <br>*/
/*             <div class="col-lg-1"></div>*/
/*                 <div class="col-lg-10">*/
/*                     <form class="col-lg-6 col-xs-3 col-sm-6">*/
/*                          <label for="text"> {{ 'form.first_name'|trans }} </label>*/
/*                          <input id="text" type="text" disabled="true" class="disabled form-control " placeholder="{{ user.FirstName }}">*/
/*                          <label for="text">{{ 'form.last_name'|trans }} </label>*/
/*                          <input id="text" type="text" disabled="true" class="form-control" placeholder="{{ user.LastName }}">*/
/*                          <label for="text">Date de naissance : </label>*/
/*                          <input id="text" type="text" disabled="true" class="form-control" placeholder="{{ user.birthDate |date('d-M-Y') }}">*/
/*                     </form>*/
/*                     <form  class="col-lg-6 col-xs-3 col-sm-6">*/
/*                         <div class="form-group">*/
/*                             <label for="text">{{ 'form.profession'|trans }} </label>*/
/*                             <input id="text" disabled="true" type="text" class="form-control" placeholder="{{ user.profession }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="text">{{ 'profile.show.username'|trans }} </label>*/
/*                             <input id="text" disabled="true" type="text" class="form-control" placeholder=" {{ user.username }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="text">{{ 'profile.show.email'|trans }} </label>*/
/*                             <input id="text" disabled="true" type="text" class="form-control" placeholder=" {{ user.email }} ">*/
/*                         </div>*/
/*                         */
/*                     </form>*/
/*                 </div>*/
/*                 <div class="col-lg-1"></div>   */
/*         </div>*/
/* */
/* */
/* </div>*/
/* */
