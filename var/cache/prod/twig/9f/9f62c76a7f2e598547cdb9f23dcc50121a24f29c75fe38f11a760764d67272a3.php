<?php

/* @css/Script/morrisjs/examples/goals.html */
class __TwigTemplate_177168274e1a9603b09a067ad33398bb8abd36287e6999824d089f59e02f620e extends Twig_Template
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
<h1>Value Goals</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
var decimal_data = [];
for (var x = 0; x <= 360; x += 10) {
  decimal_data.push({
    x: x,
    y: Math.sin(Math.PI * x / 180).toFixed(4)
  });
}
window.m = Morris.Line({
  element: 'graph',
  data: decimal_data,
  xkey: 'x',
  ykeys: ['y'],
  labels: ['sin(x)'],
  parseTime: false,
  goals: [-1, 0, 1]
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/goals.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
/* <h1>Value Goals</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* var decimal_data = [];*/
/* for (var x = 0; x <= 360; x += 10) {*/
/*   decimal_data.push({*/
/*     x: x,*/
/*     y: Math.sin(Math.PI * x / 180).toFixed(4)*/
/*   });*/
/* }*/
/* window.m = Morris.Line({*/
/*   element: 'graph',*/
/*   data: decimal_data,*/
/*   xkey: 'x',*/
/*   ykeys: ['y'],*/
/*   labels: ['sin(x)'],*/
/*   parseTime: false,*/
/*   goals: [-1, 0, 1]*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
