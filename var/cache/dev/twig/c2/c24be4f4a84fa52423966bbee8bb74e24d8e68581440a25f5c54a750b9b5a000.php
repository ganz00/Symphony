<?php

/* ::Heebari.html.twig */
class __TwigTemplate_6c2708445485166ca06a13874f710cb290c347398368f9b7c3acc977c6ea4629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_content' => array($this, 'block_page_content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bd6b89404fabe3c9420b64d23fb5ac911ce8c85b90bb646bb7692a454b7ef4a = $this->env->getExtension("native_profiler");
        $__internal_1bd6b89404fabe3c9420b64d23fb5ac911ce8c85b90bb646bb7692a454b7ef4a->enter($__internal_1bd6b89404fabe3c9420b64d23fb5ac911ce8c85b90bb646bb7692a454b7ef4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Heebari.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('page_content', $context, $blocks);
        // line 21
        echo "    </body>
";
        // line 22
        $this->displayBlock('Script', $context, $blocks);
        // line 25
        echo "</html>
";
        
        $__internal_1bd6b89404fabe3c9420b64d23fb5ac911ce8c85b90bb646bb7692a454b7ef4a->leave($__internal_1bd6b89404fabe3c9420b64d23fb5ac911ce8c85b90bb646bb7692a454b7ef4a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e43ace808620aa4f80eeaae4a62d51945f971fcc17454dcdd2a51ed9898743e = $this->env->getExtension("native_profiler");
        $__internal_0e43ace808620aa4f80eeaae4a62d51945f971fcc17454dcdd2a51ed9898743e->enter($__internal_0e43ace808620aa4f80eeaae4a62d51945f971fcc17454dcdd2a51ed9898743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0e43ace808620aa4f80eeaae4a62d51945f971fcc17454dcdd2a51ed9898743e->leave($__internal_0e43ace808620aa4f80eeaae4a62d51945f971fcc17454dcdd2a51ed9898743e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0e643ed4df95f87c2f728b92487762f0d7c2393a2ca44afb651abce66ece9d5 = $this->env->getExtension("native_profiler");
        $__internal_c0e643ed4df95f87c2f728b92487762f0d7c2393a2ca44afb651abce66ece9d5->enter($__internal_c0e643ed4df95f87c2f728b92487762f0d7c2393a2ca44afb651abce66ece9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Heebaridata/css/response/connection.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_c0e643ed4df95f87c2f728b92487762f0d7c2393a2ca44afb651abce66ece9d5->leave($__internal_c0e643ed4df95f87c2f728b92487762f0d7c2393a2ca44afb651abce66ece9d5_prof);

    }

    // line 18
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3da9b3107e3caebf05457b629aec435e2607eec669c7c23023ab30cc87f7a5ce = $this->env->getExtension("native_profiler");
        $__internal_3da9b3107e3caebf05457b629aec435e2607eec669c7c23023ab30cc87f7a5ce->enter($__internal_3da9b3107e3caebf05457b629aec435e2607eec669c7c23023ab30cc87f7a5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 19
        echo "                        
        ";
        
        $__internal_3da9b3107e3caebf05457b629aec435e2607eec669c7c23023ab30cc87f7a5ce->leave($__internal_3da9b3107e3caebf05457b629aec435e2607eec669c7c23023ab30cc87f7a5ce_prof);

    }

    // line 22
    public function block_Script($context, array $blocks = array())
    {
        $__internal_4a950980f5a8d23835cf7cd4b28d51f6dc33fb10c709c68f170f686c67024d1c = $this->env->getExtension("native_profiler");
        $__internal_4a950980f5a8d23835cf7cd4b28d51f6dc33fb10c709c68f170f686c67024d1c->enter($__internal_4a950980f5a8d23835cf7cd4b28d51f6dc33fb10c709c68f170f686c67024d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo "    
    
";
        
        $__internal_4a950980f5a8d23835cf7cd4b28d51f6dc33fb10c709c68f170f686c67024d1c->leave($__internal_4a950980f5a8d23835cf7cd4b28d51f6dc33fb10c709c68f170f686c67024d1c_prof);

    }

    public function getTemplateName()
    {
        return "::Heebari.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  97 => 19,  91 => 18,  80 => 13,  74 => 12,  62 => 11,  54 => 25,  52 => 22,  49 => 21,  47 => 18,  43 => 16,  41 => 12,  37 => 11,  26 => 2,);
    }
}
/* {# app/Resources/Views/Heebari.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link  href="{{ asset('bundles/Heebaridata/css/response/connection.css') }}" rel="stylesheet"/>*/
/*             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         {% endblock stylesheets%}*/
/*     </head>*/
/*     <body>*/
/*         {% block page_content %}*/
/*                         */
/*         {% endblock page_content %}*/
/*     </body>*/
/* {% block Script %}    */
/*     */
/* {% endblock Script %}*/
/* </html>*/
/* */
