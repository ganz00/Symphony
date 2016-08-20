<?php

/* @css/Script/morrisjs/spec/lib/grid/auto_grid_lines_spec.coffee */
class __TwigTemplate_b44592376e55ec2a48c3746942ffa0c99aa988c237389c9b5a81b7c774898590 extends Twig_Template
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
        $__internal_a99289a6c116093f064baec266c683aa3ddbf096dd683935555bf4dbf4d493a5 = $this->env->getExtension("native_profiler");
        $__internal_a99289a6c116093f064baec266c683aa3ddbf096dd683935555bf4dbf4d493a5->enter($__internal_a99289a6c116093f064baec266c683aa3ddbf096dd683935555bf4dbf4d493a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/grid/auto_grid_lines_spec.coffee"));

        // line 1
        echo "describe 'Morris.Grid#autoGridLines', ->

  beforeEach ->
    @subject = Morris.Grid.prototype.autoGridLines

  it 'should draw at fixed intervals', ->
    @subject(0, 4, 5).should.deep.equal [0, 1, 2, 3, 4]
    @subject(0, 400, 5).should.deep.equal [0, 100, 200, 300, 400]

  it 'should pick intervals that show significant numbers', ->
    @subject(102, 499, 5).should.deep.equal [100, 200, 300, 400, 500]

  it 'should draw zero when it falls within [ymin..ymax]', ->
    @subject(-100, 300, 5).should.deep.equal [-100, 0, 100, 200, 300]
    @subject(-50, 350, 5).should.deep.equal [-125, 0, 125, 250, 375]
    @subject(-400, 400, 5).should.deep.equal [-400, -200, 0, 200, 400]
    @subject(100, 500, 5).should.deep.equal [100, 200, 300, 400, 500]
    @subject(-500, -100, 5).should.deep.equal [-500, -400, -300, -200, -100]

  it 'should generate decimal labels to 2 significant figures', ->
    @subject(0, 1, 5).should.deep.equal [0, 0.25, 0.5, 0.75, 1]
    @subject(0.1, 0.5, 5).should.deep.equal [0.1, 0.2, 0.3, 0.4, 0.5]

  it 'should use integer intervals for intervals larger than 1', ->
    @subject(0, 9, 5).should.deep.equal [0, 3, 6, 9, 12]
";
        
        $__internal_a99289a6c116093f064baec266c683aa3ddbf096dd683935555bf4dbf4d493a5->leave($__internal_a99289a6c116093f064baec266c683aa3ddbf096dd683935555bf4dbf4d493a5_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/grid/auto_grid_lines_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* describe 'Morris.Grid#autoGridLines', ->*/
/* */
/*   beforeEach ->*/
/*     @subject = Morris.Grid.prototype.autoGridLines*/
/* */
/*   it 'should draw at fixed intervals', ->*/
/*     @subject(0, 4, 5).should.deep.equal [0, 1, 2, 3, 4]*/
/*     @subject(0, 400, 5).should.deep.equal [0, 100, 200, 300, 400]*/
/* */
/*   it 'should pick intervals that show significant numbers', ->*/
/*     @subject(102, 499, 5).should.deep.equal [100, 200, 300, 400, 500]*/
/* */
/*   it 'should draw zero when it falls within [ymin..ymax]', ->*/
/*     @subject(-100, 300, 5).should.deep.equal [-100, 0, 100, 200, 300]*/
/*     @subject(-50, 350, 5).should.deep.equal [-125, 0, 125, 250, 375]*/
/*     @subject(-400, 400, 5).should.deep.equal [-400, -200, 0, 200, 400]*/
/*     @subject(100, 500, 5).should.deep.equal [100, 200, 300, 400, 500]*/
/*     @subject(-500, -100, 5).should.deep.equal [-500, -400, -300, -200, -100]*/
/* */
/*   it 'should generate decimal labels to 2 significant figures', ->*/
/*     @subject(0, 1, 5).should.deep.equal [0, 0.25, 0.5, 0.75, 1]*/
/*     @subject(0.1, 0.5, 5).should.deep.equal [0.1, 0.2, 0.3, 0.4, 0.5]*/
/* */
/*   it 'should use integer intervals for intervals larger than 1', ->*/
/*     @subject(0, 9, 5).should.deep.equal [0, 3, 6, 9, 12]*/
/* */
