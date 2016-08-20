<?php

/* @css/Script/morrisjs/examples/years.html */
class __TwigTemplate_25b6be739d611294a5184e7fa8c734dc8569108df80b872f7c70205c273862f2 extends Twig_Template
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
        $__internal_12f0198b0f77bb27cb80a83a6e69f98b7478635becd9268494ddd5a9f1a1cb2d = $this->env->getExtension("native_profiler");
        $__internal_12f0198b0f77bb27cb80a83a6e69f98b7478635becd9268494ddd5a9f1a1cb2d->enter($__internal_12f0198b0f77bb27cb80a83a6e69f98b7478635becd9268494ddd5a9f1a1cb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/years.html"));

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
        
        $__internal_12f0198b0f77bb27cb80a83a6e69f98b7478635becd9268494ddd5a9f1a1cb2d->leave($__internal_12f0198b0f77bb27cb80a83a6e69f98b7478635becd9268494ddd5a9f1a1cb2d_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/years.html";
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
