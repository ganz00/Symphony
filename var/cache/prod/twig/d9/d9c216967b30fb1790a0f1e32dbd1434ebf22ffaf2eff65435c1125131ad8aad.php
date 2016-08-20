<?php

/* @css/Script/morrisjs/spec/lib/bar/colours.coffee */
class __TwigTemplate_851f8fed82592648c2432180b03f3ddcfa7f64593217def957dcc95f01fae9cd extends Twig_Template
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
        echo "describe 'Morris.Bar#colorFor', ->

  defaults =
    element: 'graph'
    data: [{x: 'foo', y: 2, z: 3}, {x: 'bar', y: 4, z: 6}]
    xkey: 'x'
    ykeys: ['y', 'z']
    labels: ['Y', 'Z']

  it 'should fetch colours from an array', ->
    chart = Morris.Bar \$.extend {}, defaults, barColors: ['#f00', '#0f0', '#00f']
    chart.colorFor(chart.data[0], 0, 'bar').should.equal '#f00'
    chart.colorFor(chart.data[0], 0, 'hover').should.equal '#f00'
    chart.colorFor(chart.data[0], 1, 'bar').should.equal '#0f0'
    chart.colorFor(chart.data[0], 1, 'hover').should.equal '#0f0'
    chart.colorFor(chart.data[0], 2, 'bar').should.equal '#00f'
    chart.colorFor(chart.data[0], 2, 'hover').should.equal '#00f'
    chart.colorFor(chart.data[0], 3, 'bar').should.equal '#f00'
    chart.colorFor(chart.data[0], 4, 'hover').should.equal '#0f0'

  it 'should defer to a callback', ->
    stub = sinon.stub().returns '#f00'
    chart = Morris.Bar \$.extend {}, defaults, barColors: stub
    stub.reset()

    chart.colorFor(chart.data[0], 0, 'bar')
    stub.should.have.been.calledWith(
      {x:0, y:2, label:'foo'},
      {index:0, key:'y', label:'Y'},
      'bar')

    chart.colorFor(chart.data[0], 1, 'hover')
    stub.should.have.been.calledWith(
      {x:0, y:3, label:'foo'},
      {index:1, key:'z', label:'Z'},
      'hover')
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/bar/colours.coffee";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* describe 'Morris.Bar#colorFor', ->*/
/* */
/*   defaults =*/
/*     element: 'graph'*/
/*     data: [{x: 'foo', y: 2, z: 3}, {x: 'bar', y: 4, z: 6}]*/
/*     xkey: 'x'*/
/*     ykeys: ['y', 'z']*/
/*     labels: ['Y', 'Z']*/
/* */
/*   it 'should fetch colours from an array', ->*/
/*     chart = Morris.Bar $.extend {}, defaults, barColors: ['#f00', '#0f0', '#00f']*/
/*     chart.colorFor(chart.data[0], 0, 'bar').should.equal '#f00'*/
/*     chart.colorFor(chart.data[0], 0, 'hover').should.equal '#f00'*/
/*     chart.colorFor(chart.data[0], 1, 'bar').should.equal '#0f0'*/
/*     chart.colorFor(chart.data[0], 1, 'hover').should.equal '#0f0'*/
/*     chart.colorFor(chart.data[0], 2, 'bar').should.equal '#00f'*/
/*     chart.colorFor(chart.data[0], 2, 'hover').should.equal '#00f'*/
/*     chart.colorFor(chart.data[0], 3, 'bar').should.equal '#f00'*/
/*     chart.colorFor(chart.data[0], 4, 'hover').should.equal '#0f0'*/
/* */
/*   it 'should defer to a callback', ->*/
/*     stub = sinon.stub().returns '#f00'*/
/*     chart = Morris.Bar $.extend {}, defaults, barColors: stub*/
/*     stub.reset()*/
/* */
/*     chart.colorFor(chart.data[0], 0, 'bar')*/
/*     stub.should.have.been.calledWith(*/
/*       {x:0, y:2, label:'foo'},*/
/*       {index:0, key:'y', label:'Y'},*/
/*       'bar')*/
/* */
/*     chart.colorFor(chart.data[0], 1, 'hover')*/
/*     stub.should.have.been.calledWith(*/
/*       {x:0, y:3, label:'foo'},*/
/*       {index:1, key:'z', label:'Z'},*/
/*       'hover')*/
/* */
