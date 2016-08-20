<?php

/* @css/Script/morrisjs/examples/non-continuous.html */
class __TwigTemplate_c87973dd8257aa17664e325b35fdeb436254ac9963b61200774f20167ddee94b extends Twig_Template
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
<h1>Non-continuous data</h1>
<p>Null series values will break the line when rendering, missing values will be skipped</p>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var day_data = [
  {\"period\": \"2012-10-01\", \"licensed\": 3407},
  {\"period\": \"2012-09-30\", \"sorned\": 0},
  {\"period\": \"2012-09-29\", \"sorned\": 618},
  {\"period\": \"2012-09-20\", \"licensed\": 3246, \"sorned\": 661},
  {\"period\": \"2012-09-19\", \"licensed\": 3257, \"sorned\": null},
  {\"period\": \"2012-09-18\", \"licensed\": 3248, \"other\": 1000},
  {\"period\": \"2012-09-17\", \"sorned\": 0},
  {\"period\": \"2012-09-16\", \"sorned\": 0},
  {\"period\": \"2012-09-15\", \"licensed\": 3201, \"sorned\": 656},
  {\"period\": \"2012-09-10\", \"licensed\": 3215}
];
Morris.Line({
  element: 'graph',
  data: day_data,
  xkey: 'period',
  ykeys: ['licensed', 'sorned', 'other'],
  labels: ['Licensed', 'SORN', 'Other'],
  /* custom label formatting with `xLabelFormat` */
  xLabelFormat: function(d) { return (d.getMonth()+1)+'/'+d.getDate()+'/'+d.getFullYear(); },
  /* setting `xLabels` is recommended when using xLabelFormat */
  xLabels: 'day'
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/non-continuous.html";
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
/* <h1>Non-continuous data</h1>*/
/* <p>Null series values will break the line when rendering, missing values will be skipped</p>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type *//* */
/* var day_data = [*/
/*   {"period": "2012-10-01", "licensed": 3407},*/
/*   {"period": "2012-09-30", "sorned": 0},*/
/*   {"period": "2012-09-29", "sorned": 618},*/
/*   {"period": "2012-09-20", "licensed": 3246, "sorned": 661},*/
/*   {"period": "2012-09-19", "licensed": 3257, "sorned": null},*/
/*   {"period": "2012-09-18", "licensed": 3248, "other": 1000},*/
/*   {"period": "2012-09-17", "sorned": 0},*/
/*   {"period": "2012-09-16", "sorned": 0},*/
/*   {"period": "2012-09-15", "licensed": 3201, "sorned": 656},*/
/*   {"period": "2012-09-10", "licensed": 3215}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: day_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned', 'other'],*/
/*   labels: ['Licensed', 'SORN', 'Other'],*/
/*   /* custom label formatting with `xLabelFormat` *//* */
/*   xLabelFormat: function(d) { return (d.getMonth()+1)+'/'+d.getDate()+'/'+d.getFullYear(); },*/
/*   /* setting `xLabels` is recommended when using xLabelFormat *//* */
/*   xLabels: 'day'*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
