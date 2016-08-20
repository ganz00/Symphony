<?php

/* @css/Script/morrisjs/spec/lib/parse_time_spec.coffee */
class __TwigTemplate_7d7a9a35e176cb63b72fab610cd5ea9a9c636475458d4461a6652272ab92c53b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/parse_time_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
