<?php

/* @css/Script/morrisjs/examples/months-no-smooth.html */
class __TwigTemplate_ce0fb04e735c2976a37299ed91b79c421c6d23a2ed4c6c6f83471777876a5b06 extends Twig_Template
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
        $__internal_823ade0fbc3ee5d8e930735b5420570a568880ac734067df4956b28ca4d73bac = $this->env->getExtension("native_profiler");
        $__internal_823ade0fbc3ee5d8e930735b5420570a568880ac734067df4956b28ca4d73bac->enter($__internal_823ade0fbc3ee5d8e930735b5420570a568880ac734067df4956b28ca4d73bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/months-no-smooth.html"));

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
        
        $__internal_823ade0fbc3ee5d8e930735b5420570a568880ac734067df4956b28ca4d73bac->leave($__internal_823ade0fbc3ee5d8e930735b5420570a568880ac734067df4956b28ca4d73bac_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/months-no-smooth.html";
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
