<?php

/* @css/Script/morrisjs/spec/lib/grid/y_label_format_spec.coffee */
class __TwigTemplate_3cc2c63cfa69da676f6429f8d9a5bf171162ee0ccef2797a15706467e84307ce extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/grid/y_label_format_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
