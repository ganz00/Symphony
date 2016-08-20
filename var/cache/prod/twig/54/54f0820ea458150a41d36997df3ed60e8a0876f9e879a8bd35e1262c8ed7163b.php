<?php

/* @css/Script/morrisjs/examples/months-no-smooth.html */
class __TwigTemplate_397d83329ec86cb4f425ae6feb4f48bf7d38aa0fa71754f5e37efb744bdbdbd1 extends Twig_Template
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
<h1>Formatting Dates with YYYY-MM</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var month_data = [
  {\"period\": \"2012-10\", \"licensed\": 3407, \"sorned\": 660},
  {\"period\": \"2011-08\", \"licensed\": 3351, \"sorned\": 629},
  {\"period\": \"2011-03\", \"licensed\": 3269, \"sorned\": 618},
  {\"period\": \"2010-08\", \"licensed\": 3246, \"sorned\": 661},
  {\"period\": \"2010-05\", \"licensed\": 3257, \"sorned\": 667},
  {\"period\": \"2010-03\", \"licensed\": 3248, \"sorned\": 627},
  {\"period\": \"2010-01\", \"licensed\": 3171, \"sorned\": 660},
  {\"period\": \"2009-12\", \"licensed\": 3171, \"sorned\": 676},
  {\"period\": \"2009-10\", \"licensed\": 3201, \"sorned\": 656},
  {\"period\": \"2009-09\", \"licensed\": 3215, \"sorned\": 622}
];
Morris.Line({
  element: 'graph',
  data: month_data,
  xkey: 'period',
  ykeys: ['licensed', 'sorned'],
  labels: ['Licensed', 'SORN'],
  smooth: false
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/months-no-smooth.html";
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
/* <h1>Formatting Dates with YYYY-MM</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type *//* */
/* var month_data = [*/
/*   {"period": "2012-10", "licensed": 3407, "sorned": 660},*/
/*   {"period": "2011-08", "licensed": 3351, "sorned": 629},*/
/*   {"period": "2011-03", "licensed": 3269, "sorned": 618},*/
/*   {"period": "2010-08", "licensed": 3246, "sorned": 661},*/
/*   {"period": "2010-05", "licensed": 3257, "sorned": 667},*/
/*   {"period": "2010-03", "licensed": 3248, "sorned": 627},*/
/*   {"period": "2010-01", "licensed": 3171, "sorned": 660},*/
/*   {"period": "2009-12", "licensed": 3171, "sorned": 676},*/
/*   {"period": "2009-10", "licensed": 3201, "sorned": 656},*/
/*   {"period": "2009-09", "licensed": 3215, "sorned": 622}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: month_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN'],*/
/*   smooth: false*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
