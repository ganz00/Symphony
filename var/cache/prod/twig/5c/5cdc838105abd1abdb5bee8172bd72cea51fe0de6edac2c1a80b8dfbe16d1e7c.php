<?php

/* @css/Script/morrisjs/examples/donut-formatter.html */
class __TwigTemplate_ddfe62fd85685f7faa0e4f68c8de6532408f095ce4bb56f61111b382e903c8f6 extends Twig_Template
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
    {value: 70, label: 'foo', formatted: 'at least 70%' },
    {value: 15, label: 'bar', formatted: 'approx. 15%' },
    {value: 10, label: 'baz', formatted: 'approx. 10%' },
    {value: 5, label: 'A really really long label', formatted: 'at most 5%' }
  ],
  formatter: function (x, data) { return data.formatted; }
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/donut-formatter.html";
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
/*     {value: 70, label: 'foo', formatted: 'at least 70%' },*/
/*     {value: 15, label: 'bar', formatted: 'approx. 15%' },*/
/*     {value: 10, label: 'baz', formatted: 'approx. 10%' },*/
/*     {value: 5, label: 'A really really long label', formatted: 'at most 5%' }*/
/*   ],*/
/*   formatter: function (x, data) { return data.formatted; }*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
