<?php

/* @css/Script/morrisjs/examples/negative.html */
class __TwigTemplate_7295fb9dd26f8e536886900174b7f0951698e0664855159b6e4401fe7de41e9c extends Twig_Template
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
<h1>Negative values</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
var neg_data = [
  {\"period\": \"2011-08-12\", \"a\": 100},
  {\"period\": \"2011-03-03\", \"a\": 75},
  {\"period\": \"2010-08-08\", \"a\": 50},
  {\"period\": \"2010-05-10\", \"a\": 25},
  {\"period\": \"2010-03-14\", \"a\": 0},
  {\"period\": \"2010-01-10\", \"a\": -25},
  {\"period\": \"2009-12-10\", \"a\": -50},
  {\"period\": \"2009-10-07\", \"a\": -75},
  {\"period\": \"2009-09-25\", \"a\": -100}
];
Morris.Line({
  element: 'graph',
  data: neg_data,
  xkey: 'period',
  ykeys: ['a'],
  labels: ['Series A'],
  units: '%'
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/negative.html";
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
/* <h1>Negative values</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* var neg_data = [*/
/*   {"period": "2011-08-12", "a": 100},*/
/*   {"period": "2011-03-03", "a": 75},*/
/*   {"period": "2010-08-08", "a": 50},*/
/*   {"period": "2010-05-10", "a": 25},*/
/*   {"period": "2010-03-14", "a": 0},*/
/*   {"period": "2010-01-10", "a": -25},*/
/*   {"period": "2009-12-10", "a": -50},*/
/*   {"period": "2009-10-07", "a": -75},*/
/*   {"period": "2009-09-25", "a": -100}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: neg_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['a'],*/
/*   labels: ['Series A'],*/
/*   units: '%'*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
