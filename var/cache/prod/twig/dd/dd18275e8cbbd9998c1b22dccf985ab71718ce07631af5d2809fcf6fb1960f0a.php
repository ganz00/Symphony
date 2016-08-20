<?php

/* @css/Script/morrisjs/examples/no-grid.html */
class __TwigTemplate_5bdaf4e5f8e3b88797d8df454fbf5a2fe19be0a17e65ff6d68f7192dfad16500 extends Twig_Template
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
<h1>Formatting Dates YYYY-MM-DD</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var day_data = [
  {\"period\": \"2012-10-01\", \"licensed\": 3407, \"sorned\": 660},
  {\"period\": \"2012-09-30\", \"licensed\": 3351, \"sorned\": 629},
  {\"period\": \"2012-09-29\", \"licensed\": 3269, \"sorned\": 618},
  {\"period\": \"2012-09-20\", \"licensed\": 3246, \"sorned\": 661},
  {\"period\": \"2012-09-19\", \"licensed\": 3257, \"sorned\": 667},
  {\"period\": \"2012-09-18\", \"licensed\": 3248, \"sorned\": 627},
  {\"period\": \"2012-09-17\", \"licensed\": 3171, \"sorned\": 660},
  {\"period\": \"2012-09-16\", \"licensed\": 3171, \"sorned\": 676},
  {\"period\": \"2012-09-15\", \"licensed\": 3201, \"sorned\": 656},
  {\"period\": \"2012-09-10\", \"licensed\": 3215, \"sorned\": 622}
];
Morris.Line({
  element: 'graph',
  grid: false,
  data: day_data,
  xkey: 'period',
  ykeys: ['licensed', 'sorned'],
  labels: ['Licensed', 'SORN']
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/no-grid.html";
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
/* <h1>Formatting Dates YYYY-MM-DD</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type *//* */
/* var day_data = [*/
/*   {"period": "2012-10-01", "licensed": 3407, "sorned": 660},*/
/*   {"period": "2012-09-30", "licensed": 3351, "sorned": 629},*/
/*   {"period": "2012-09-29", "licensed": 3269, "sorned": 618},*/
/*   {"period": "2012-09-20", "licensed": 3246, "sorned": 661},*/
/*   {"period": "2012-09-19", "licensed": 3257, "sorned": 667},*/
/*   {"period": "2012-09-18", "licensed": 3248, "sorned": 627},*/
/*   {"period": "2012-09-17", "licensed": 3171, "sorned": 660},*/
/*   {"period": "2012-09-16", "licensed": 3171, "sorned": 676},*/
/*   {"period": "2012-09-15", "licensed": 3201, "sorned": 656},*/
/*   {"period": "2012-09-10", "licensed": 3215, "sorned": 622}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   grid: false,*/
/*   data: day_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
