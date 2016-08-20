<?php

/* @css/Script/morrisjs/examples/years.html */
class __TwigTemplate_826aa2c42608ba096a8f8f3e89c003c3ce47fd29ff0411e2b08dba2bd5dc6adb extends Twig_Template
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
<h1>Formatting Dates YYYY</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
var year_data = [
  {\"period\": \"2012\", \"licensed\": 3407, \"sorned\": 660},
  {\"period\": \"2011\", \"licensed\": 3351, \"sorned\": 629},
  {\"period\": \"2010\", \"licensed\": 3269, \"sorned\": 618},
  {\"period\": \"2009\", \"licensed\": 3246, \"sorned\": 661},
  {\"period\": \"2008\", \"licensed\": 3257, \"sorned\": 667},
  {\"period\": \"2007\", \"licensed\": 3248, \"sorned\": 627},
  {\"period\": \"2006\", \"licensed\": 3171, \"sorned\": 660},
  {\"period\": \"2005\", \"licensed\": 3171, \"sorned\": 676},
  {\"period\": \"2004\", \"licensed\": 3201, \"sorned\": 656},
  {\"period\": \"2003\", \"licensed\": 3215, \"sorned\": 622}
];
Morris.Line({
  element: 'graph',
  data: year_data,
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
        return "@css/Script/morrisjs/examples/years.html";
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
/* <h1>Formatting Dates YYYY</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type *//* */
/* var year_data = [*/
/*   {"period": "2012", "licensed": 3407, "sorned": 660},*/
/*   {"period": "2011", "licensed": 3351, "sorned": 629},*/
/*   {"period": "2010", "licensed": 3269, "sorned": 618},*/
/*   {"period": "2009", "licensed": 3246, "sorned": 661},*/
/*   {"period": "2008", "licensed": 3257, "sorned": 667},*/
/*   {"period": "2007", "licensed": 3248, "sorned": 627},*/
/*   {"period": "2006", "licensed": 3171, "sorned": 660},*/
/*   {"period": "2005", "licensed": 3171, "sorned": 676},*/
/*   {"period": "2004", "licensed": 3201, "sorned": 656},*/
/*   {"period": "2003", "licensed": 3215, "sorned": 622}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: year_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
