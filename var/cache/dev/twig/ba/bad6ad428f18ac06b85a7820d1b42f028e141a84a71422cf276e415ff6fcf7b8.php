<?php

/* @css/Script/morrisjs/examples/area.html */
class __TwigTemplate_415957dd62685dc35c65c0d1780f9d4d40cf0071ef0cf45344c9ba006d8453fa extends Twig_Template
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
        $__internal_f1f3fa72888ab26b5a4d922f49c8d199e7a3a0b4ec76001c1ce9f93e74ecd882 = $this->env->getExtension("native_profiler");
        $__internal_f1f3fa72888ab26b5a4d922f49c8d199e7a3a0b4ec76001c1ce9f93e74ecd882->enter($__internal_f1f3fa72888ab26b5a4d922f49c8d199e7a3a0b4ec76001c1ce9f93e74ecd882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/area.html"));

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
<h1>Area charts</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// Use Morris.Area instead of Morris.Line
Morris.Area({
  element: 'graph',
  data: [
    {x: '2010 Q4', y: 3, z: 7},
    {x: '2011 Q1', y: 3, z: 4},
    {x: '2011 Q2', y: null, z: 1},
    {x: '2011 Q3', y: 2, z: 5},
    {x: '2011 Q4', y: 8, z: 2},
    {x: '2012 Q1', y: 4, z: 4}
  ],
  xkey: 'x',
  ykeys: ['y', 'z'],
  labels: ['Y', 'Z']
}).on('click', function(i, row){
  console.log(i, row);
});
</pre>
</body>
";
        
        $__internal_f1f3fa72888ab26b5a4d922f49c8d199e7a3a0b4ec76001c1ce9f93e74ecd882->leave($__internal_f1f3fa72888ab26b5a4d922f49c8d199e7a3a0b4ec76001c1ce9f93e74ecd882_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/area.html";
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
/* <h1>Area charts</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // Use Morris.Area instead of Morris.Line*/
/* Morris.Area({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {x: '2010 Q4', y: 3, z: 7},*/
/*     {x: '2011 Q1', y: 3, z: 4},*/
/*     {x: '2011 Q2', y: null, z: 1},*/
/*     {x: '2011 Q3', y: 2, z: 5},*/
/*     {x: '2011 Q4', y: 8, z: 2},*/
/*     {x: '2012 Q1', y: 4, z: 4}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z'],*/
/*   labels: ['Y', 'Z']*/
/* }).on('click', function(i, row){*/
/*   console.log(i, row);*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
