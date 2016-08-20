<?php

/* @css/Script/raphael/dev/amdDev.js */
class __TwigTemplate_3cbe2fc5937f9fbae57dd63676289d926cecc5728910a76efbcc5c10860e344c extends Twig_Template
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
        echo "require(['../raphael'], function(Raphael){
    var paper = Raphael(0, 0, 640, 720, \"container\");
    //paper.circle(100, 100, 100); //example

    // Work here
});
";
    }

    public function getTemplateName()
    {
        return "@css/Script/raphael/dev/amdDev.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* require(['../raphael'], function(Raphael){*/
/*     var paper = Raphael(0, 0, 640, 720, "container");*/
/*     //paper.circle(100, 100, 100); //example*/
/* */
/*     // Work here*/
/* });*/
/* */
