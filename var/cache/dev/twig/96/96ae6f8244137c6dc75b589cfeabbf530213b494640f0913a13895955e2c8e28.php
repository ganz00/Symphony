<?php

/* @css/Script/morrisjs/spec/lib/commas_spec.coffee */
class __TwigTemplate_2c9da698e02ce92607499397569804be4edd5ba6412e2d33506b521790c2a69f extends Twig_Template
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
        $__internal_7169408daa2ec2f95e25995819b9d31830f0203f5cca3946046293042eace5ca = $this->env->getExtension("native_profiler");
        $__internal_7169408daa2ec2f95e25995819b9d31830f0203f5cca3946046293042eace5ca->enter($__internal_7169408daa2ec2f95e25995819b9d31830f0203f5cca3946046293042eace5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/commas_spec.coffee"));

        // line 1
        echo "describe '#commas', ->

  it 'should insert commas into long numbers', ->
    # zero
    Morris.commas(0).should.equal(\"0\")

    # positive integers
    Morris.commas(1).should.equal(\"1\")
    Morris.commas(12).should.equal(\"12\")
    Morris.commas(123).should.equal(\"123\")
    Morris.commas(1234).should.equal(\"1,234\")
    Morris.commas(12345).should.equal(\"12,345\")
    Morris.commas(123456).should.equal(\"123,456\")
    Morris.commas(1234567).should.equal(\"1,234,567\")

    # negative integers
    Morris.commas(-1).should.equal(\"-1\")
    Morris.commas(-12).should.equal(\"-12\")
    Morris.commas(-123).should.equal(\"-123\")
    Morris.commas(-1234).should.equal(\"-1,234\")
    Morris.commas(-12345).should.equal(\"-12,345\")
    Morris.commas(-123456).should.equal(\"-123,456\")
    Morris.commas(-1234567).should.equal(\"-1,234,567\")

    # positive decimals
    Morris.commas(1.2).should.equal(\"1.2\")
    Morris.commas(12.34).should.equal(\"12.34\")
    Morris.commas(123.456).should.equal(\"123.456\")
    Morris.commas(1234.56).should.equal(\"1,234.56\")

    # negative decimals
    Morris.commas(-1.2).should.equal(\"-1.2\")
    Morris.commas(-12.34).should.equal(\"-12.34\")
    Morris.commas(-123.456).should.equal(\"-123.456\")
    Morris.commas(-1234.56).should.equal(\"-1,234.56\")

    # null
    Morris.commas(null).should.equal('-')
";
        
        $__internal_7169408daa2ec2f95e25995819b9d31830f0203f5cca3946046293042eace5ca->leave($__internal_7169408daa2ec2f95e25995819b9d31830f0203f5cca3946046293042eace5ca_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/commas_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* describe '#commas', ->*/
/* */
/*   it 'should insert commas into long numbers', ->*/
/*     # zero*/
/*     Morris.commas(0).should.equal("0")*/
/* */
/*     # positive integers*/
/*     Morris.commas(1).should.equal("1")*/
/*     Morris.commas(12).should.equal("12")*/
/*     Morris.commas(123).should.equal("123")*/
/*     Morris.commas(1234).should.equal("1,234")*/
/*     Morris.commas(12345).should.equal("12,345")*/
/*     Morris.commas(123456).should.equal("123,456")*/
/*     Morris.commas(1234567).should.equal("1,234,567")*/
/* */
/*     # negative integers*/
/*     Morris.commas(-1).should.equal("-1")*/
/*     Morris.commas(-12).should.equal("-12")*/
/*     Morris.commas(-123).should.equal("-123")*/
/*     Morris.commas(-1234).should.equal("-1,234")*/
/*     Morris.commas(-12345).should.equal("-12,345")*/
/*     Morris.commas(-123456).should.equal("-123,456")*/
/*     Morris.commas(-1234567).should.equal("-1,234,567")*/
/* */
/*     # positive decimals*/
/*     Morris.commas(1.2).should.equal("1.2")*/
/*     Morris.commas(12.34).should.equal("12.34")*/
/*     Morris.commas(123.456).should.equal("123.456")*/
/*     Morris.commas(1234.56).should.equal("1,234.56")*/
/* */
/*     # negative decimals*/
/*     Morris.commas(-1.2).should.equal("-1.2")*/
/*     Morris.commas(-12.34).should.equal("-12.34")*/
/*     Morris.commas(-123.456).should.equal("-123.456")*/
/*     Morris.commas(-1234.56).should.equal("-1,234.56")*/
/* */
/*     # null*/
/*     Morris.commas(null).should.equal('-')*/
/* */
