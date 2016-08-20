<?php

/* @css/Script/morrisjs/examples/lib/example.js */
class __TwigTemplate_6b8049d3a8903275d169a53618579fbdbe4ae9d1a5ef9f579b0b2198a9aafdc0 extends Twig_Template
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
        $__internal_a0a6dc8abf1007d98acb616e4e90c45b7167b39c5073cb14a944043904319624 = $this->env->getExtension("native_profiler");
        $__internal_a0a6dc8abf1007d98acb616e4e90c45b7167b39c5073cb14a944043904319624->enter($__internal_a0a6dc8abf1007d98acb616e4e90c45b7167b39c5073cb14a944043904319624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/lib/example.js"));

        // line 1
        echo "\$(function () {
  eval(\$('#code').text());
  prettyPrint();
});";
        
        $__internal_a0a6dc8abf1007d98acb616e4e90c45b7167b39c5073cb14a944043904319624->leave($__internal_a0a6dc8abf1007d98acb616e4e90c45b7167b39c5073cb14a944043904319624_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/lib/example.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* $(function () {*/
/*   eval($('#code').text());*/
/*   prettyPrint();*/
/* });*/
