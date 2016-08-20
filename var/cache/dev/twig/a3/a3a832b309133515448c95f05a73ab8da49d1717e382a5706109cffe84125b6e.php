<?php

/* @css/Script/morrisjs/spec/lib/grid/y_label_format_spec.coffee */
class __TwigTemplate_92ba1ee8ecf149f1f87c153be8580b6076b4a2f5eab912c1fdd4f78ffa0e6ae8 extends Twig_Template
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
        $__internal_b1dd40025ec93dde78dd5cadff3063b2adc27b8d7a9e9f483b4fbc65879a9bca = $this->env->getExtension("native_profiler");
        $__internal_b1dd40025ec93dde78dd5cadff3063b2adc27b8d7a9e9f483b4fbc65879a9bca->enter($__internal_b1dd40025ec93dde78dd5cadff3063b2adc27b8d7a9e9f483b4fbc65879a9bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/grid/y_label_format_spec.coffee"));

        // line 1
        echo "describe 'Morris.Grid#yLabelFormat', ->

  it 'should use custom formatter for y labels', ->
    formatter = (label) ->
      flabel = parseFloat(label) / 1000
      \"#{flabel.toFixed(1)}k\"
    line = Morris.Line
      element: 'graph'
      data: [{x: 1, y: 1500}, {x: 2, y: 2500}]
      xkey: 'x'
      ykeys: ['y']
      labels: ['dontcare']
      preUnits: \"\$\"
      yLabelFormat: formatter
    line.yLabelFormat(1500).should.equal \"1.5k\"
";
        
        $__internal_b1dd40025ec93dde78dd5cadff3063b2adc27b8d7a9e9f483b4fbc65879a9bca->leave($__internal_b1dd40025ec93dde78dd5cadff3063b2adc27b8d7a9e9f483b4fbc65879a9bca_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/grid/y_label_format_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* describe 'Morris.Grid#yLabelFormat', ->*/
/* */
/*   it 'should use custom formatter for y labels', ->*/
/*     formatter = (label) ->*/
/*       flabel = parseFloat(label) / 1000*/
/*       "#{flabel.toFixed(1)}k"*/
/*     line = Morris.Line*/
/*       element: 'graph'*/
/*       data: [{x: 1, y: 1500}, {x: 2, y: 2500}]*/
/*       xkey: 'x'*/
/*       ykeys: ['y']*/
/*       labels: ['dontcare']*/
/*       preUnits: "$"*/
/*       yLabelFormat: formatter*/
/*     line.yLabelFormat(1500).should.equal "1.5k"*/
/* */
