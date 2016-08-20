<?php

/* ::Heebari.html.twig */
class __TwigTemplate_4be5e6648cb476fc46a3a60a8da2ca49ffa2cc10502f0b8b7198e9b82e6975b0 extends Twig_Template
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
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Heebaridata/css/response/connection.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
    }

    // line 18
    public function block_page_content($context, array $blocks = array())
    {
        // line 19
        echo "                        
        ";
    }

    // line 22
    public function block_Script($context, array $blocks = array())
    {
        echo "    
    
";
    }

    public function getTemplateName()
    {
        return "::Heebari.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 19,  73 => 18,  65 => 13,  62 => 12,  56 => 11,  51 => 25,  49 => 22,  46 => 21,  44 => 18,  40 => 16,  38 => 12,  34 => 11,  23 => 2,);
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
