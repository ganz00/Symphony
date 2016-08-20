<?php

/* @css/Script/morrisjs/examples/lib/example.js */
class __TwigTemplate_82f87ed4d26b21855a44c70bf6727ed0210ce160e067da1fb97acfa1b0129e11 extends Twig_Template
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
        // line 1
        echo "\$(function () {
  eval(\$('#code').text());
  prettyPrint();
});";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/lib/example.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* $(function () {*/
/*   eval($('#code').text());*/
/*   prettyPrint();*/
/* });*/
