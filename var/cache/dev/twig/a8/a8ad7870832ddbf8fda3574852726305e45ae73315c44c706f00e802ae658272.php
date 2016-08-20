<?php

/* @css/Script/morrisjs/examples/non-date.html */
class __TwigTemplate_9ed8e377b80d751206e7b162f86a02df491d7a16ceff4f248dfe1534648db73a extends Twig_Template
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
        $__internal_b4e4969eff0dfd58542f3813044eb9ada1bb8e8b09eb676365dbdfb38388f3d8 = $this->env->getExtension("native_profiler");
        $__internal_b4e4969eff0dfd58542f3813044eb9ada1bb8e8b09eb676365dbdfb38388f3d8->enter($__internal_b4e4969eff0dfd58542f3813044eb9ada1bb8e8b09eb676365dbdfb38388f3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/non-date.html"));

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
        
        $__internal_b4e4969eff0dfd58542f3813044eb9ada1bb8e8b09eb676365dbdfb38388f3d8->leave($__internal_b4e4969eff0dfd58542f3813044eb9ada1bb8e8b09eb676365dbdfb38388f3d8_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/non-date.html";
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
