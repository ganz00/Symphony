<?php

/* @css/Script/morrisjs/examples/timestamps.html */
class __TwigTemplate_a820a8a8289ee851d39e28c1c57c3bfe5e3e410cd9f49349d99650a2e7df0185 extends Twig_Template
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
<h1>Timestamps</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var timestamp_data = [
  {\"period\": 1349046000000, \"licensed\": 3407, \"sorned\": 660},
  {\"period\": 1313103600000, \"licensed\": 3351, \"sorned\": 629},
  {\"period\": 1299110400000, \"licensed\": 3269, \"sorned\": 618},
  {\"period\": 1281222000000, \"licensed\": 3246, \"sorned\": 661},
  {\"period\": 1273446000000, \"licensed\": 3257, \"sorned\": 667},
  {\"period\": 1268524800000, \"licensed\": 3248, \"sorned\": 627},
  {\"period\": 1263081600000, \"licensed\": 3171, \"sorned\": 660},
  {\"period\": 1260403200000, \"licensed\": 3171, \"sorned\": 676},
  {\"period\": 1254870000000, \"licensed\": 3201, \"sorned\": 656},
  {\"period\": 1253833200000, \"licensed\": 3215, \"sorned\": 622}
];
Morris.Line({
  element: 'graph',
  data: timestamp_data,
  xkey: 'period',
  ykeys: ['licensed', 'sorned'],
  labels: ['Licensed', 'SORN'],
  dateFormat: function (x) { return new Date(x).toDateString(); }
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/timestamps.html";
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
/* <h1>Timestamps</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type *//* */
/* var timestamp_data = [*/
/*   {"period": 1349046000000, "licensed": 3407, "sorned": 660},*/
/*   {"period": 1313103600000, "licensed": 3351, "sorned": 629},*/
/*   {"period": 1299110400000, "licensed": 3269, "sorned": 618},*/
/*   {"period": 1281222000000, "licensed": 3246, "sorned": 661},*/
/*   {"period": 1273446000000, "licensed": 3257, "sorned": 667},*/
/*   {"period": 1268524800000, "licensed": 3248, "sorned": 627},*/
/*   {"period": 1263081600000, "licensed": 3171, "sorned": 660},*/
/*   {"period": 1260403200000, "licensed": 3171, "sorned": 676},*/
/*   {"period": 1254870000000, "licensed": 3201, "sorned": 656},*/
/*   {"period": 1253833200000, "licensed": 3215, "sorned": 622}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: timestamp_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN'],*/
/*   dateFormat: function (x) { return new Date(x).toDateString(); }*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
