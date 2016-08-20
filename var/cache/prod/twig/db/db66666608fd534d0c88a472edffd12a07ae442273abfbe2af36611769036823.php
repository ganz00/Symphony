<?php

/* @css/Script/morrisjs/examples/updating.html */
class __TwigTemplate_5a8c9be701963b6b068778eb3d658635c06ca64d57e599682df2b748bf975489 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/updating.html";
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
