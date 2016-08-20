<?php

/* @css/Script/morrisjs/spec/support/placeholder.coffee */
class __TwigTemplate_641cf8d0e757f7c2a86e3a68fc47b77aea9a67ad57ba74f4242f115d6cc1d4db extends Twig_Template
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
        echo "beforeEach ->
  placeholder = \$('<div id=\"graph\" style=\"width: 600px; height: 400px\"></div>')
  \$('#test').append(placeholder)

afterEach ->
  \$('#test').empty()
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/support/placeholder.coffee";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* beforeEach ->*/
/*   placeholder = $('<div id="graph" style="width: 600px; height: 400px"></div>')*/
/*   $('#test').append(placeholder)*/
/* */
/* afterEach ->*/
/*   $('#test').empty()*/
/* */
