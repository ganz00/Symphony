<?php

/* @css/Script/morrisjs/spec/lib/parse_time_spec.coffee */
class __TwigTemplate_da3c27c02c2872b1f3fb7c62432cbadd1e512908ee7c35e81c0f531a73e6cffd extends Twig_Template
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
        $__internal_9abfdbd2d6279a9034cb7486fa9bcc7ee96c538e68cc4bbdcecf087a2cd4cfb9 = $this->env->getExtension("native_profiler");
        $__internal_9abfdbd2d6279a9034cb7486fa9bcc7ee96c538e68cc4bbdcecf087a2cd4cfb9->enter($__internal_9abfdbd2d6279a9034cb7486fa9bcc7ee96c538e68cc4bbdcecf087a2cd4cfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/parse_time_spec.coffee"));

        // line 1
        echo "describe '#parseTime', ->

  it 'should parse years', ->
    Morris.parseDate('2012').should.equal(new Date(2012, 0, 1).getTime())

  it 'should parse quarters', ->
    Morris.parseDate('2012 Q1').should.equal(new Date(2012, 2, 1).getTime())

  it 'should parse months', ->
    Morris.parseDate('2012-09').should.equal(new Date(2012, 8, 1).getTime())
    Morris.parseDate('2012-10').should.equal(new Date(2012, 9, 1).getTime())

  it 'should parse dates', ->
    Morris.parseDate('2012-09-15').should.equal(new Date(2012, 8, 15).getTime())
    Morris.parseDate('2012-10-15').should.equal(new Date(2012, 9, 15).getTime())

  it 'should parse times', ->
    Morris.parseDate(\"2012-10-15 12:34\").should.equal(new Date(2012, 9, 15, 12, 34).getTime())
    Morris.parseDate(\"2012-10-15T12:34\").should.equal(new Date(2012, 9, 15, 12, 34).getTime())
    Morris.parseDate(\"2012-10-15 12:34:55\").should.equal(new Date(2012, 9, 15, 12, 34, 55).getTime())
    Morris.parseDate(\"2012-10-15T12:34:55\").should.equal(new Date(2012, 9, 15, 12, 34, 55).getTime())

  it 'should parse times with timezones', ->
    Morris.parseDate(\"2012-10-15T12:34+0100\").should.equal(Date.UTC(2012, 9, 15, 11, 34))
    Morris.parseDate(\"2012-10-15T12:34+02:00\").should.equal(Date.UTC(2012, 9, 15, 10, 34))
    Morris.parseDate(\"2012-10-15T12:34-0100\").should.equal(Date.UTC(2012, 9, 15, 13, 34))
    Morris.parseDate(\"2012-10-15T12:34-02:00\").should.equal(Date.UTC(2012, 9, 15, 14, 34))
    Morris.parseDate(\"2012-10-15T12:34:55Z\").should.equal(Date.UTC(2012, 9, 15, 12, 34, 55))
    Morris.parseDate(\"2012-10-15T12:34:55+0600\").should.equal(Date.UTC(2012, 9, 15, 6, 34, 55))
    Morris.parseDate(\"2012-10-15T12:34:55+04:00\").should.equal(Date.UTC(2012, 9, 15, 8, 34, 55))
    Morris.parseDate(\"2012-10-15T12:34:55-0600\").should.equal(Date.UTC(2012, 9, 15, 18, 34, 55))

  it 'should pass-through timestamps', ->
    Morris.parseDate(new Date(2012, 9, 15, 12, 34, 55, 123).getTime())
      .should.equal(new Date(2012, 9, 15, 12, 34, 55, 123).getTime())";
        
        $__internal_9abfdbd2d6279a9034cb7486fa9bcc7ee96c538e68cc4bbdcecf087a2cd4cfb9->leave($__internal_9abfdbd2d6279a9034cb7486fa9bcc7ee96c538e68cc4bbdcecf087a2cd4cfb9_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/parse_time_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* describe '#parseTime', ->*/
/* */
/*   it 'should parse years', ->*/
/*     Morris.parseDate('2012').should.equal(new Date(2012, 0, 1).getTime())*/
/* */
/*   it 'should parse quarters', ->*/
/*     Morris.parseDate('2012 Q1').should.equal(new Date(2012, 2, 1).getTime())*/
/* */
/*   it 'should parse months', ->*/
/*     Morris.parseDate('2012-09').should.equal(new Date(2012, 8, 1).getTime())*/
/*     Morris.parseDate('2012-10').should.equal(new Date(2012, 9, 1).getTime())*/
/* */
/*   it 'should parse dates', ->*/
/*     Morris.parseDate('2012-09-15').should.equal(new Date(2012, 8, 15).getTime())*/
/*     Morris.parseDate('2012-10-15').should.equal(new Date(2012, 9, 15).getTime())*/
/* */
/*   it 'should parse times', ->*/
/*     Morris.parseDate("2012-10-15 12:34").should.equal(new Date(2012, 9, 15, 12, 34).getTime())*/
/*     Morris.parseDate("2012-10-15T12:34").should.equal(new Date(2012, 9, 15, 12, 34).getTime())*/
/*     Morris.parseDate("2012-10-15 12:34:55").should.equal(new Date(2012, 9, 15, 12, 34, 55).getTime())*/
/*     Morris.parseDate("2012-10-15T12:34:55").should.equal(new Date(2012, 9, 15, 12, 34, 55).getTime())*/
/* */
/*   it 'should parse times with timezones', ->*/
/*     Morris.parseDate("2012-10-15T12:34+0100").should.equal(Date.UTC(2012, 9, 15, 11, 34))*/
/*     Morris.parseDate("2012-10-15T12:34+02:00").should.equal(Date.UTC(2012, 9, 15, 10, 34))*/
/*     Morris.parseDate("2012-10-15T12:34-0100").should.equal(Date.UTC(2012, 9, 15, 13, 34))*/
/*     Morris.parseDate("2012-10-15T12:34-02:00").should.equal(Date.UTC(2012, 9, 15, 14, 34))*/
/*     Morris.parseDate("2012-10-15T12:34:55Z").should.equal(Date.UTC(2012, 9, 15, 12, 34, 55))*/
/*     Morris.parseDate("2012-10-15T12:34:55+0600").should.equal(Date.UTC(2012, 9, 15, 6, 34, 55))*/
/*     Morris.parseDate("2012-10-15T12:34:55+04:00").should.equal(Date.UTC(2012, 9, 15, 8, 34, 55))*/
/*     Morris.parseDate("2012-10-15T12:34:55-0600").should.equal(Date.UTC(2012, 9, 15, 18, 34, 55))*/
/* */
/*   it 'should pass-through timestamps', ->*/
/*     Morris.parseDate(new Date(2012, 9, 15, 12, 34, 55, 123).getTime())*/
/*       .should.equal(new Date(2012, 9, 15, 12, 34, 55, 123).getTime())*/
