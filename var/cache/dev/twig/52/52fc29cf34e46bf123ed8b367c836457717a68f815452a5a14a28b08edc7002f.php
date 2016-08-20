<?php

/* @css/Script/morrisjs/examples/days.html */
class __TwigTemplate_55d12e8436b61639592e75e225cfe7de9d96431f2b68f7d71f1642aad6a03941 extends Twig_Template
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
        $__internal_64a704841a39b1680a95247c741528f7e4a7d01b6a385e077fd82b5b21446ad4 = $this->env->getExtension("native_profiler");
        $__internal_64a704841a39b1680a95247c741528f7e4a7d01b6a385e077fd82b5b21446ad4->enter($__internal_64a704841a39b1680a95247c741528f7e4a7d01b6a385e077fd82b5b21446ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/days.html"));

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
  data: day_data,
  xkey: 'period',
  ykeys: ['licensed', 'sorned'],
  labels: ['Licensed', 'SORN']
});
</pre>
</body>
";
        
        $__internal_64a704841a39b1680a95247c741528f7e4a7d01b6a385e077fd82b5b21446ad4->leave($__internal_64a704841a39b1680a95247c741528f7e4a7d01b6a385e077fd82b5b21446ad4_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/days.html";
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
/*   data: day_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
