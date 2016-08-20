<?php

/* @css/Script/raphael/dev/index.js */
class __TwigTemplate_10731e584fb8946c9be03ffb2dc2c3f15a865bbb2efad775cac5e5d909cf931f extends Twig_Template
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
        echo "var core = require('./raphael.core');
if(core.svg){
  require('./raphael.svg');
}
if(core.vml){
  require('./raphael.vml');
}
module.exports = core;";
    }

    public function getTemplateName()
    {
        return "@css/Script/raphael/dev/index.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
