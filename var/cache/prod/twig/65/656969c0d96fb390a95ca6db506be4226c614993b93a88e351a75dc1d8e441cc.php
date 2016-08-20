<?php

/* @css/Script/morrisjs/spec/lib/commas_spec.coffee */
class __TwigTemplate_97d13ef129ba8535da34a543fc77e655b897db79caa7020590a0beb6595aff59 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/commas_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
