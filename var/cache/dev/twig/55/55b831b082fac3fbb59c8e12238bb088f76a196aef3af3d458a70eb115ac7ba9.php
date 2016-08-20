<?php

/* @css/Script/morrisjs/examples/area-as-line.html */
class __TwigTemplate_228b493e2d4134c8e18f7895787cc680b04106e398d3eea52924746ec2c82a43 extends Twig_Template
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
        $__internal_dd88f38548fc2e07b2760d61031554b32a0084588180b3717922cf335e15c1cf = $this->env->getExtension("native_profiler");
        $__internal_dd88f38548fc2e07b2760d61031554b32a0084588180b3717922cf335e15c1cf->enter($__internal_dd88f38548fc2e07b2760d61031554b32a0084588180b3717922cf335e15c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/area-as-line.html"));

        // line 1
        echo "<!doctype html>
<head>
  <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
  <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js\"></script>
  <script src=\"../morris.js\"></script>
  <script src=\"http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js\"></script>
  <script src=\"lib/example.js\"></script>
  <link rel=\"stylesheet\" href=\"lib/example.css\">
  <link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css\">
  <link rel=\"stylesheet\" href=\"../morris.css\">
</head>
<body>
<h1>Area charts behaving like line charts</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// Use Morris.Area instead of Morris.Line
Morris.Area({
  element: 'graph',
  behaveLikeLine: true,
  data: [
    {x: '2011 Q1', y: 3, z: 3},
    {x: '2011 Q2', y: 2, z: 1},
    {x: '2011 Q3', y: 2, z: 4},
    {x: '2011 Q4', y: 3, z: 3}
  ],
  xkey: 'x',
  ykeys: ['y', 'z'],
  labels: ['Y', 'Z']
});
</pre>
</body>
";
        
        $__internal_dd88f38548fc2e07b2760d61031554b32a0084588180b3717922cf335e15c1cf->leave($__internal_dd88f38548fc2e07b2760d61031554b32a0084588180b3717922cf335e15c1cf_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/area-as-line.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!doctype html>*/
/* <head>*/
/*   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*   <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>*/
/*   <script src="../morris.js"></script>*/
/*   <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>*/
/*   <script src="lib/example.js"></script>*/
/*   <link rel="stylesheet" href="lib/example.css">*/
/*   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">*/
/*   <link rel="stylesheet" href="../morris.css">*/
/* </head>*/
/* <body>*/
/* <h1>Area charts behaving like line charts</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // Use Morris.Area instead of Morris.Line*/
/* Morris.Area({*/
/*   element: 'graph',*/
/*   behaveLikeLine: true,*/
/*   data: [*/
/*     {x: '2011 Q1', y: 3, z: 3},*/
/*     {x: '2011 Q2', y: 2, z: 1},*/
/*     {x: '2011 Q3', y: 2, z: 4},*/
/*     {x: '2011 Q4', y: 3, z: 3}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z'],*/
/*   labels: ['Y', 'Z']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
