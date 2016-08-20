<?php

/* @css/Script/morrisjs/examples/donut.html */
class __TwigTemplate_011eeb0a1ce8d03ec2abe31b7b01e6b176254f50da18876fe0d0efd394cdeaad extends Twig_Template
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
<h1>Donut Chart</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
Morris.Donut({
  element: 'graph',
  data: [
    {value: 70, label: 'foo'},
    {value: 15, label: 'bar'},
    {value: 10, label: 'baz'},
    {value: 5, label: 'A really really long label'}
  ],
  formatter: function (x) { return x + \"%\"}
}).on('click', function(i, row){
  console.log(i, row);
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/donut.html";
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
/* <h1>Donut Chart</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* Morris.Donut({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {value: 70, label: 'foo'},*/
/*     {value: 15, label: 'bar'},*/
/*     {value: 10, label: 'baz'},*/
/*     {value: 5, label: 'A really really long label'}*/
/*   ],*/
/*   formatter: function (x) { return x + "%"}*/
/* }).on('click', function(i, row){*/
/*   console.log(i, row);*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
