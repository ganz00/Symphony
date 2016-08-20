<?php

/* @css/Script/morrisjs/examples/updating.html */
class __TwigTemplate_6b0d4c9005faf8f1dfeeecd04e056856be938a85463e4bd577d916a5f1432d47 extends Twig_Template
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
        $__internal_775c079f3a081917f7eb7aad2733d17b0d10ba16ed128fb9d05c49160c6f7bbc = $this->env->getExtension("native_profiler");
        $__internal_775c079f3a081917f7eb7aad2733d17b0d10ba16ed128fb9d05c49160c6f7bbc->enter($__internal_775c079f3a081917f7eb7aad2733d17b0d10ba16ed128fb9d05c49160c6f7bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/updating.html"));

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
<h1>Updating data</h1>
<div id=\"graph\"></div>
<div id=\"reloadStatus\">
<pre id=\"code\" class=\"prettyprint linenums\">

var nReloads = 0;
function data(offset) {
  var ret = [];
  for (var x = 0; x <= 360; x += 10) {
    var v = (offset + x) % 360;
    ret.push({
      x: x,
      y: Math.sin(Math.PI * v / 180).toFixed(4),
      z: Math.cos(Math.PI * v / 180).toFixed(4)
    });
  }
  return ret;
}
var graph = Morris.Line({
    element: 'graph',
    data: data(0),
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['sin()', 'cos()'],
    parseTime: false,
    ymin: -1.0,
    ymax: 1.0,
    hideHover: true
});
function update() {
  nReloads++;
  graph.setData(data(5 * nReloads));
  \$('#reloadStatus').text(nReloads + ' reloads');
}
setInterval(update, 100);
</pre>
</body>
";
        
        $__internal_775c079f3a081917f7eb7aad2733d17b0d10ba16ed128fb9d05c49160c6f7bbc->leave($__internal_775c079f3a081917f7eb7aad2733d17b0d10ba16ed128fb9d05c49160c6f7bbc_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/updating.html";
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
/* <h1>Updating data</h1>*/
/* <div id="graph"></div>*/
/* <div id="reloadStatus">*/
/* <pre id="code" class="prettyprint linenums">*/
/* */
/* var nReloads = 0;*/
/* function data(offset) {*/
/*   var ret = [];*/
/*   for (var x = 0; x <= 360; x += 10) {*/
/*     var v = (offset + x) % 360;*/
/*     ret.push({*/
/*       x: x,*/
/*       y: Math.sin(Math.PI * v / 180).toFixed(4),*/
/*       z: Math.cos(Math.PI * v / 180).toFixed(4)*/
/*     });*/
/*   }*/
/*   return ret;*/
/* }*/
/* var graph = Morris.Line({*/
/*     element: 'graph',*/
/*     data: data(0),*/
/*     xkey: 'x',*/
/*     ykeys: ['y', 'z'],*/
/*     labels: ['sin()', 'cos()'],*/
/*     parseTime: false,*/
/*     ymin: -1.0,*/
/*     ymax: 1.0,*/
/*     hideHover: true*/
/* });*/
/* function update() {*/
/*   nReloads++;*/
/*   graph.setData(data(5 * nReloads));*/
/*   $('#reloadStatus').text(nReloads + ' reloads');*/
/* }*/
/* setInterval(update, 100);*/
/* </pre>*/
/* </body>*/
/* */
