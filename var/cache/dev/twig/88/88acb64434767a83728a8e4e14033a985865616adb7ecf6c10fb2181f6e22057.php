<?php

/* @css/Script/morrisjs/spec/lib/pad_spec.coffee */
class __TwigTemplate_8a0d54d7a501c1a40938b3b11d0fa6cd5771b204248487fa6dcbd8d06a153b92 extends Twig_Template
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
        $__internal_e9c2a04b81cdaf395aefc14f7da1847453340c04de2b1b01983aaa4ae5ee9a1b = $this->env->getExtension("native_profiler");
        $__internal_e9c2a04b81cdaf395aefc14f7da1847453340c04de2b1b01983aaa4ae5ee9a1b->enter($__internal_e9c2a04b81cdaf395aefc14f7da1847453340c04de2b1b01983aaa4ae5ee9a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/lib/pad_spec.coffee"));

        // line 1
        echo "describe '#pad', ->

  it 'should pad numbers', ->
    Morris.pad2(0).should.equal(\"00\")
    Morris.pad2(1).should.equal(\"01\")
    Morris.pad2(2).should.equal(\"02\")
    Morris.pad2(3).should.equal(\"03\")
    Morris.pad2(4).should.equal(\"04\")
    Morris.pad2(5).should.equal(\"05\")
    Morris.pad2(6).should.equal(\"06\")
    Morris.pad2(7).should.equal(\"07\")
    Morris.pad2(8).should.equal(\"08\")
    Morris.pad2(9).should.equal(\"09\")
    Morris.pad2(10).should.equal(\"10\")
    Morris.pad2(12).should.equal(\"12\")
    Morris.pad2(34).should.equal(\"34\")
    Morris.pad2(123).should.equal(\"123\")";
        
        $__internal_e9c2a04b81cdaf395aefc14f7da1847453340c04de2b1b01983aaa4ae5ee9a1b->leave($__internal_e9c2a04b81cdaf395aefc14f7da1847453340c04de2b1b01983aaa4ae5ee9a1b_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/lib/pad_spec.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* describe '#pad', ->*/
/* */
/*   it 'should pad numbers', ->*/
/*     Morris.pad2(0).should.equal("00")*/
/*     Morris.pad2(1).should.equal("01")*/
/*     Morris.pad2(2).should.equal("02")*/
/*     Morris.pad2(3).should.equal("03")*/
/*     Morris.pad2(4).should.equal("04")*/
/*     Morris.pad2(5).should.equal("05")*/
/*     Morris.pad2(6).should.equal("06")*/
/*     Morris.pad2(7).should.equal("07")*/
/*     Morris.pad2(8).should.equal("08")*/
/*     Morris.pad2(9).should.equal("09")*/
/*     Morris.pad2(10).should.equal("10")*/
/*     Morris.pad2(12).should.equal("12")*/
/*     Morris.pad2(34).should.equal("34")*/
/*     Morris.pad2(123).should.equal("123")*/
