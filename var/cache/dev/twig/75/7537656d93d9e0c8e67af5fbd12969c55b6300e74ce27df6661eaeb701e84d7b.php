<?php

/* @css/Script/raphael/dev/index.js */
class __TwigTemplate_cf2a4f0215ef82484bd3c578b6c06f292eb6fbb34e19e2b9533246810b39c0e0 extends Twig_Template
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
        $__internal_471c84546f554e037086afb1d4169eb652edfbbcc9a2d4f8163f0c0e10036f35 = $this->env->getExtension("native_profiler");
        $__internal_471c84546f554e037086afb1d4169eb652edfbbcc9a2d4f8163f0c0e10036f35->enter($__internal_471c84546f554e037086afb1d4169eb652edfbbcc9a2d4f8163f0c0e10036f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/raphael/dev/index.js"));

        // line 1
        echo "var core = require('./raphael.core');
if(core.svg){
  require('./raphael.svg');
}
if(core.vml){
  require('./raphael.vml');
}
module.exports = core;";
        
        $__internal_471c84546f554e037086afb1d4169eb652edfbbcc9a2d4f8163f0c0e10036f35->leave($__internal_471c84546f554e037086afb1d4169eb652edfbbcc9a2d4f8163f0c0e10036f35_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/raphael/dev/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* var core = require('./raphael.core');*/
/* if(core.svg){*/
/*   require('./raphael.svg');*/
/* }*/
/* if(core.vml){*/
/*   require('./raphael.vml');*/
/* }*/
/* module.exports = core;*/
