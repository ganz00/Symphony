<?php

/* @css/Script/morrisjs/examples/timestamps.html */
class __TwigTemplate_28eb099e26f3b368836fd1dc0b73efb160d05446f75515429ac353b863cca23c extends Twig_Template
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
        $__internal_d1b74dd1c9d73c88b3226d28606331dd57393bae35f0d47e2f1c62601b75cabb = $this->env->getExtension("native_profiler");
        $__internal_d1b74dd1c9d73c88b3226d28606331dd57393bae35f0d47e2f1c62601b75cabb->enter($__internal_d1b74dd1c9d73c88b3226d28606331dd57393bae35f0d47e2f1c62601b75cabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/timestamps.html"));

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
        
        $__internal_d1b74dd1c9d73c88b3226d28606331dd57393bae35f0d47e2f1c62601b75cabb->leave($__internal_d1b74dd1c9d73c88b3226d28606331dd57393bae35f0d47e2f1c62601b75cabb_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/timestamps.html";
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
