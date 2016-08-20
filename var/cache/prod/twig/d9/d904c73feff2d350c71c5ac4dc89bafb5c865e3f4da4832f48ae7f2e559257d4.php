<?php

/* @css/Script/morrisjs/examples/non-date.html */
class __TwigTemplate_99f2767e425e56f0b9c61f7fd1105f6bddefe192327f0540b8f4e50498cc6a09 extends Twig_Template
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
<h1>Formatting Non-date Arbitrary X-axis</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
var day_data = [
  {\"elapsed\": \"I\", \"value\": 34},
  {\"elapsed\": \"II\", \"value\": 24},
  {\"elapsed\": \"III\", \"value\": 3},
  {\"elapsed\": \"IV\", \"value\": 12},
  {\"elapsed\": \"V\", \"value\": 13},
  {\"elapsed\": \"VI\", \"value\": 22},
  {\"elapsed\": \"VII\", \"value\": 5},
  {\"elapsed\": \"VIII\", \"value\": 26},
  {\"elapsed\": \"IX\", \"value\": 12},
  {\"elapsed\": \"X\", \"value\": 19}
];
Morris.Line({
  element: 'graph',
  data: day_data,
  xkey: 'elapsed',
  ykeys: ['value'],
  labels: ['value'],
  parseTime: false
});
</pre>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/non-date.html";
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
/* <h1>Formatting Non-date Arbitrary X-axis</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* var day_data = [*/
/*   {"elapsed": "I", "value": 34},*/
/*   {"elapsed": "II", "value": 24},*/
/*   {"elapsed": "III", "value": 3},*/
/*   {"elapsed": "IV", "value": 12},*/
/*   {"elapsed": "V", "value": 13},*/
/*   {"elapsed": "VI", "value": 22},*/
/*   {"elapsed": "VII", "value": 5},*/
/*   {"elapsed": "VIII", "value": 26},*/
/*   {"elapsed": "IX", "value": 12},*/
/*   {"elapsed": "X", "value": 19}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: day_data,*/
/*   xkey: 'elapsed',*/
/*   ykeys: ['value'],*/
/*   labels: ['value'],*/
/*   parseTime: false*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
