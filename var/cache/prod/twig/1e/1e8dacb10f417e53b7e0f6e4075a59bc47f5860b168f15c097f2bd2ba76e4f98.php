<?php

/* @css/Script/morrisjs/examples/weeks.html */
class __TwigTemplate_64ab42b49c3db8a3e0c9c72dac708475bb148e341fa4f4a35b57d488aa3fec8d extends Twig_Template
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
<h1>Formatting Dates With Weeks</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
var week_data = [
  {\"period\": \"2011 W27\", \"licensed\": 3407, \"sorned\": 660},
  {\"period\": \"2011 W26\", \"licensed\": 3351, \"sorned\": 629},
  {\"period\": \"2011 W25\", \"licensed\": 3269, \"sorned\": 618},
  {\"period\": \"2011 W24\", \"licensed\": 3246, \"sorned\": 661},
  {\"period\": \"2011 W23\", \"licensed\": 3257, \"sorned\": 667},
  {\"period\": \"2011 W22\", \"licensed\": 3248, \"sorned\": 627},
  {\"period\": \"2011 W21\", \"licensed\": 3171, \"sorned\": 660},
  {\"period\": \"2011 W20\", \"licensed\": 3171, \"sorned\": 676},
  {\"period\": \"2011 W19\", \"licensed\": 3201, \"sorned\": 656},
  {\"period\": \"2011 W18\", \"licensed\": 3215, \"sorned\": 622},
  {\"period\": \"2011 W17\", \"licensed\": 3148, \"sorned\": 632},
  {\"period\": \"2011 W16\", \"licensed\": 3155, \"sorned\": 681},
  {\"period\": \"2011 W15\", \"licensed\": 3190, \"sorned\": 667},
  {\"period\": \"2011 W14\", \"licensed\": 3226, \"sorned\": 620},
  {\"period\": \"2011 W13\", \"licensed\": 3245, \"sorned\": null},
  {\"period\": \"2011 W12\", \"licensed\": 3289, \"sorned\": null},
  {\"period\": \"2011 W11\", \"licensed\": 3263, \"sorned\": null},
  {\"period\": \"2011 W10\", \"licensed\": 3189, \"sorned\": null},
  {\"period\": \"2011 W09\", \"licensed\": 3079, \"sorned\": null},
  {\"period\": \"2011 W08\", \"licensed\": 3085, \"sorned\": null},
  {\"period\": \"2011 W07\", \"licensed\": 3055, \"sorned\": null},
  {\"period\": \"2011 W06\", \"licensed\": 3063, \"sorned\": null},
  {\"period\": \"2011 W05\", \"licensed\": 2943, \"sorned\": null},
  {\"period\": \"2011 W04\", \"licensed\": 2806, \"sorned\": null},
  {\"period\": \"2011 W03\", \"licensed\": 2674, \"sorned\": null},
  {\"period\": \"2011 W02\", \"licensed\": 1702, \"sorned\": null},
  {\"period\": \"2011 W01\", \"licensed\": 1732, \"sorned\": null}
];
Morris.Line({
  element: 'graph',
  data: week_data,
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
        return "@css/Script/morrisjs/examples/weeks.html";
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
/* <h1>Formatting Dates With Weeks</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* var week_data = [*/
/*   {"period": "2011 W27", "licensed": 3407, "sorned": 660},*/
/*   {"period": "2011 W26", "licensed": 3351, "sorned": 629},*/
/*   {"period": "2011 W25", "licensed": 3269, "sorned": 618},*/
/*   {"period": "2011 W24", "licensed": 3246, "sorned": 661},*/
/*   {"period": "2011 W23", "licensed": 3257, "sorned": 667},*/
/*   {"period": "2011 W22", "licensed": 3248, "sorned": 627},*/
/*   {"period": "2011 W21", "licensed": 3171, "sorned": 660},*/
/*   {"period": "2011 W20", "licensed": 3171, "sorned": 676},*/
/*   {"period": "2011 W19", "licensed": 3201, "sorned": 656},*/
/*   {"period": "2011 W18", "licensed": 3215, "sorned": 622},*/
/*   {"period": "2011 W17", "licensed": 3148, "sorned": 632},*/
/*   {"period": "2011 W16", "licensed": 3155, "sorned": 681},*/
/*   {"period": "2011 W15", "licensed": 3190, "sorned": 667},*/
/*   {"period": "2011 W14", "licensed": 3226, "sorned": 620},*/
/*   {"period": "2011 W13", "licensed": 3245, "sorned": null},*/
/*   {"period": "2011 W12", "licensed": 3289, "sorned": null},*/
/*   {"period": "2011 W11", "licensed": 3263, "sorned": null},*/
/*   {"period": "2011 W10", "licensed": 3189, "sorned": null},*/
/*   {"period": "2011 W09", "licensed": 3079, "sorned": null},*/
/*   {"period": "2011 W08", "licensed": 3085, "sorned": null},*/
/*   {"period": "2011 W07", "licensed": 3055, "sorned": null},*/
/*   {"period": "2011 W06", "licensed": 3063, "sorned": null},*/
/*   {"period": "2011 W05", "licensed": 2943, "sorned": null},*/
/*   {"period": "2011 W04", "licensed": 2806, "sorned": null},*/
/*   {"period": "2011 W03", "licensed": 2674, "sorned": null},*/
/*   {"period": "2011 W02", "licensed": 1702, "sorned": null},*/
/*   {"period": "2011 W01", "licensed": 1732, "sorned": null}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: week_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
