<?php

/* @css/Script/morrisjs/spec/lib/bar/colours.coffee */
class __TwigTemplate_814087b30b120f8c981ac3ceffc76d787b6d23380c5a841e6358474c8965791a extends Twig_Template
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
        $__internal_7dca141cbb916cdb76956dacdf5eff080744127c620c8d8bb6c5de792ec0010d = $this->env->getExtension("native_profiler");
        $__internal_7dca141cbb916cdb76956dacdf5eff080744127c620c8d8bb6c5de792ec0010d->enter($__internal_7dca141cbb916cdb76956dacdf5eff080744127c620c8d8bb6c5de792ec0010d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/bar/colours.coffee"));

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
        
        $__internal_7dca141cbb916cdb76956dacdf5eff080744127c620c8d8bb6c5de792ec0010d->leave($__internal_7dca141cbb916cdb76956dacdf5eff080744127c620c8d8bb6c5de792ec0010d_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/bar/colours.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
