<?php

/* @css/Script/morrisjs/examples/bar-colors.html */
class __TwigTemplate_548c63da1f28d7556f5f6eb209e6c840ba467b52a2078b3d8b260378d1f2826b extends Twig_Template
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
        $__internal_d18888dc6f686041e015eb2ff395742313fe8a7aba5fd42bc1143f103411cb13 = $this->env->getExtension("native_profiler");
        $__internal_d18888dc6f686041e015eb2ff395742313fe8a7aba5fd42bc1143f103411cb13->enter($__internal_d18888dc6f686041e015eb2ff395742313fe8a7aba5fd42bc1143f103411cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/bar-colors.html"));

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
<h1>Bar charts</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// Use Morris.Bar
Morris.Bar({
  element: 'graph',
  data: [
    {x: '2011 Q1', y: 0},
    {x: '2011 Q2', y: 1},
    {x: '2011 Q3', y: 2},
    {x: '2011 Q4', y: 3},
    {x: '2012 Q1', y: 4},
    {x: '2012 Q2', y: 5},
    {x: '2012 Q3', y: 6},
    {x: '2012 Q4', y: 7},
    {x: '2013 Q1', y: 8}
  ],
  xkey: 'x',
  ykeys: ['y'],
  labels: ['Y'],
  barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return 'rgb(' + red + ',0,0)';
    }
    else {
      return '#000';
    }
  }
});
</pre>
</body>
";
        
        $__internal_d18888dc6f686041e015eb2ff395742313fe8a7aba5fd42bc1143f103411cb13->leave($__internal_d18888dc6f686041e015eb2ff395742313fe8a7aba5fd42bc1143f103411cb13_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/bar-colors.html";
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
/* <h1>Bar charts</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // Use Morris.Bar*/
/* Morris.Bar({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {x: '2011 Q1', y: 0},*/
/*     {x: '2011 Q2', y: 1},*/
/*     {x: '2011 Q3', y: 2},*/
/*     {x: '2011 Q4', y: 3},*/
/*     {x: '2012 Q1', y: 4},*/
/*     {x: '2012 Q2', y: 5},*/
/*     {x: '2012 Q3', y: 6},*/
/*     {x: '2012 Q4', y: 7},*/
/*     {x: '2013 Q1', y: 8}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y'],*/
/*   labels: ['Y'],*/
/*   barColors: function (row, series, type) {*/
/*     if (type === 'bar') {*/
/*       var red = Math.ceil(255 * row.y / this.ymax);*/
/*       return 'rgb(' + red + ',0,0)';*/
/*     }*/
/*     else {*/
/*       return '#000';*/
/*     }*/
/*   }*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
