<?php

/* @css/Script/morrisjs/spec/support/placeholder.coffee */
class __TwigTemplate_b565f7af4aa733a26acf31af11bfdd7b9b4cf16e4183e2f2072f569ee8cf7c3c extends Twig_Template
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
        $__internal_c138a1585650a1306c1fd2c4b73209c7039b01d1ea5f0a26dfbb1a9cff985a5f = $this->env->getExtension("native_profiler");
        $__internal_c138a1585650a1306c1fd2c4b73209c7039b01d1ea5f0a26dfbb1a9cff985a5f->enter($__internal_c138a1585650a1306c1fd2c4b73209c7039b01d1ea5f0a26dfbb1a9cff985a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/support/placeholder.coffee"));

        // line 1
        echo "beforeEach ->
  placeholder = \$('<div id=\"graph\" style=\"width: 600px; height: 400px\"></div>')
  \$('#test').append(placeholder)

afterEach ->
  \$('#test').empty()
";
        
        $__internal_c138a1585650a1306c1fd2c4b73209c7039b01d1ea5f0a26dfbb1a9cff985a5f->leave($__internal_c138a1585650a1306c1fd2c4b73209c7039b01d1ea5f0a26dfbb1a9cff985a5f_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/support/placeholder.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* beforeEach ->*/
/*   placeholder = $('<div id="graph" style="width: 600px; height: 400px"></div>')*/
/*   $('#test').append(placeholder)*/
/* */
/* afterEach ->*/
/*   $('#test').empty()*/
/* */
