<?php

/* @css/Script/morrisjs/spec/lib/area/area_spec.coffee */
class __TwigTemplate_40fa4abc4b0b0ae9619331cff4c9390b83e47c590eb03dcb01101483156f6fc7 extends Twig_Template
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
        $__internal_9585b4847dded20ef5a35e12dda509ac1012bc3955215b36ddc1b890f511f55a = $this->env->getExtension("native_profiler");
        $__internal_9585b4847dded20ef5a35e12dda509ac1012bc3955215b36ddc1b890f511f55a->enter($__internal_9585b4847dded20ef5a35e12dda509ac1012bc3955215b36ddc1b890f511f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/area/area_spec.coffee"));

        // line 1
        echo "describe 'Morris.Area', ->

  describe 'svg structure', ->
    defaults =
      element: 'graph'
      data: [{x: '2012 Q1', y: 1}, {x: '2012 Q2', y: 1}]
      lineColors: [ '#0b62a4', '#7a92a3']
      gridLineColor: '#aaa'
      xkey: 'x'
      ykeys: ['y']
      labels: ['Y']

    it 'should contain a line path for each line', ->
      chart = Morris.Area \$.extend {}, defaults
      \$('#graph').find(\"path[stroke='#0b62a4']\").size().should.equal 1

    it 'should contain a path with stroke-width 0 for each line', ->
      chart = Morris.Area \$.extend {}, defaults
      \$('#graph').find(\"path[stroke='#0b62a4']\").size().should.equal 1

    it 'should contain 5 grid lines', ->
      chart = Morris.Area \$.extend {}, defaults
      \$('#graph').find(\"path[stroke='#aaaaaa']\").size().should.equal 5

    it 'should contain 9 text elements', ->
      chart = Morris.Area \$.extend {}, defaults
      \$('#graph').find(\"text\").size().should.equal 9

  describe 'svg attributes', ->
    defaults =
      element: 'graph'
      data: [{x: '2012 Q1', y: 1}, {x: '2012 Q2', y: 1}]
      xkey: 'x'
      ykeys: ['y']
      labels: ['Y']
      lineColors: [ '#0b62a4', '#7a92a3']
      lineWidth: 3
      pointWidths: [5]
      pointStrokeColors: ['#ffffff']
      gridLineColor: '#aaa'
      gridStrokeWidth: 0.5
      gridTextColor: '#888'
      gridTextSize: 12

    it 'should not be cumulative if behaveLikeLine', ->
      chart = Morris.Area \$.extend {}, defaults, behaveLikeLine: true
      chart.cumulative.should.equal false

    it 'should have a line with transparent fill if behaveLikeLine', ->
      chart = Morris.Area \$.extend {}, defaults, behaveLikeLine: true
      \$('#graph').find(\"path[fill-opacity='0.8']\").size().should.equal 1

    it 'should not have a line with transparent fill', ->
      chart = Morris.Area \$.extend {}, defaults
      \$('#graph').find(\"path[fill-opacity='0.8']\").size().should.equal 0

    it 'should have a line with the fill of a modified line color', ->
      chart = Morris.Area \$.extend {}, defaults
      \$('#graph').find(\"path[fill='#0b62a4']\").size().should.equal 0
      \$('#graph').find(\"path[fill='#7a92a3']\").size().should.equal 0
";
        
        $__internal_9585b4847dded20ef5a35e12dda509ac1012bc3955215b36ddc1b890f511f55a->leave($__internal_9585b4847dded20ef5a35e12dda509ac1012bc3955215b36ddc1b890f511f55a_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/area/area_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* describe 'Morris.Area', ->*/
/* */
/*   describe 'svg structure', ->*/
/*     defaults =*/
/*       element: 'graph'*/
/*       data: [{x: '2012 Q1', y: 1}, {x: '2012 Q2', y: 1}]*/
/*       lineColors: [ '#0b62a4', '#7a92a3']*/
/*       gridLineColor: '#aaa'*/
/*       xkey: 'x'*/
/*       ykeys: ['y']*/
/*       labels: ['Y']*/
/* */
/*     it 'should contain a line path for each line', ->*/
/*       chart = Morris.Area $.extend {}, defaults*/
/*       $('#graph').find("path[stroke='#0b62a4']").size().should.equal 1*/
/* */
/*     it 'should contain a path with stroke-width 0 for each line', ->*/
/*       chart = Morris.Area $.extend {}, defaults*/
/*       $('#graph').find("path[stroke='#0b62a4']").size().should.equal 1*/
/* */
/*     it 'should contain 5 grid lines', ->*/
/*       chart = Morris.Area $.extend {}, defaults*/
/*       $('#graph').find("path[stroke='#aaaaaa']").size().should.equal 5*/
/* */
/*     it 'should contain 9 text elements', ->*/
/*       chart = Morris.Area $.extend {}, defaults*/
/*       $('#graph').find("text").size().should.equal 9*/
/* */
/*   describe 'svg attributes', ->*/
/*     defaults =*/
/*       element: 'graph'*/
/*       data: [{x: '2012 Q1', y: 1}, {x: '2012 Q2', y: 1}]*/
/*       xkey: 'x'*/
/*       ykeys: ['y']*/
/*       labels: ['Y']*/
/*       lineColors: [ '#0b62a4', '#7a92a3']*/
/*       lineWidth: 3*/
/*       pointWidths: [5]*/
/*       pointStrokeColors: ['#ffffff']*/
/*       gridLineColor: '#aaa'*/
/*       gridStrokeWidth: 0.5*/
/*       gridTextColor: '#888'*/
/*       gridTextSize: 12*/
/* */
/*     it 'should not be cumulative if behaveLikeLine', ->*/
/*       chart = Morris.Area $.extend {}, defaults, behaveLikeLine: true*/
/*       chart.cumulative.should.equal false*/
/* */
/*     it 'should have a line with transparent fill if behaveLikeLine', ->*/
/*       chart = Morris.Area $.extend {}, defaults, behaveLikeLine: true*/
/*       $('#graph').find("path[fill-opacity='0.8']").size().should.equal 1*/
/* */
/*     it 'should not have a line with transparent fill', ->*/
/*       chart = Morris.Area $.extend {}, defaults*/
/*       $('#graph').find("path[fill-opacity='0.8']").size().should.equal 0*/
/* */
/*     it 'should have a line with the fill of a modified line color', ->*/
/*       chart = Morris.Area $.extend {}, defaults*/
/*       $('#graph').find("path[fill='#0b62a4']").size().should.equal 0*/
/*       $('#graph').find("path[fill='#7a92a3']").size().should.equal 0*/
/* */
