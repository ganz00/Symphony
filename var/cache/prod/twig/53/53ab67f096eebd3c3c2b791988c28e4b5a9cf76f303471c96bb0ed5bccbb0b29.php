<?php

/* @css/Script/morrisjs/examples/dst.html */
class __TwigTemplate_448f9f1af024ad032f20dd8111b3364b8fc430bf44e7017458fa744a2610c558 extends Twig_Template
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
<h1>Daylight-savings time</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// This crosses a DST boundary in the UK.
Morris.Area({
  element: 'graph',
  data: [
    {x: '2013-03-30 22:00:00', y: 3, z: 3},
    {x: '2013-03-31 00:00:00', y: 2, z: 0},
    {x: '2013-03-31 02:00:00', y: 0, z: 2},
    {x: '2013-03-31 04:00:00', y: 4, z: 4}
  ],
  xkey: 'x',
  ykeys: ['y', 'z'],
  labels: ['Y', 'Z']
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/dst.html";
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
/* <h1>Daylight-savings time</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // This crosses a DST boundary in the UK.*/
/* Morris.Area({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {x: '2013-03-30 22:00:00', y: 3, z: 3},*/
/*     {x: '2013-03-31 00:00:00', y: 2, z: 0},*/
/*     {x: '2013-03-31 02:00:00', y: 0, z: 2},*/
/*     {x: '2013-03-31 04:00:00', y: 4, z: 4}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z'],*/
/*   labels: ['Y', 'Z']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
