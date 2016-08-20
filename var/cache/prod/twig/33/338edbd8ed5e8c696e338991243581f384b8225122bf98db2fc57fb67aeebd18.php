<?php

/* @css/Script/morrisjs/examples/bar.html */
class __TwigTemplate_b48e501341232ab79cfbbcc82bdf674d7466b3c7c192672bb89aa325cfd732ac extends Twig_Template
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
<h1>Bar charts</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// Use Morris.Bar
Morris.Bar({
  element: 'graph',
  data: [
    {x: '2011 Q1', y: 3, z: 2, a: 3},
    {x: '2011 Q2', y: 2, z: null, a: 1},
    {x: '2011 Q3', y: 0, z: 2, a: 4},
    {x: '2011 Q4', y: 2, z: 4, a: 3}
  ],
  xkey: 'x',
  ykeys: ['y', 'z', 'a'],
  labels: ['Y', 'Z', 'A']
}).on('click', function(i, row){
  console.log(i, row);
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/bar.html";
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
/* <h1>Bar charts</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // Use Morris.Bar*/
/* Morris.Bar({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {x: '2011 Q1', y: 3, z: 2, a: 3},*/
/*     {x: '2011 Q2', y: 2, z: null, a: 1},*/
/*     {x: '2011 Q3', y: 0, z: 2, a: 4},*/
/*     {x: '2011 Q4', y: 2, z: 4, a: 3}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z', 'a'],*/
/*   labels: ['Y', 'Z', 'A']*/
/* }).on('click', function(i, row){*/
/*   console.log(i, row);*/
/* });*/
/* </pre>*/
/* </body>*/
/* */