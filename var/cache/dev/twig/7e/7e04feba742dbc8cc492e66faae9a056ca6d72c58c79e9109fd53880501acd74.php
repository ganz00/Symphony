<?php

/* @css/Script/morrisjs/examples/bar-no-axes.html */
class __TwigTemplate_09b67bf31dd2517cb6befa5d50e3f614973c0864df63b1956b411ede8923a35a extends Twig_Template
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
        $__internal_a8c6338dd6163caad0758979bb54390d711db6080b4cd198886efd57148c86e6 = $this->env->getExtension("native_profiler");
        $__internal_a8c6338dd6163caad0758979bb54390d711db6080b4cd198886efd57148c86e6->enter($__internal_a8c6338dd6163caad0758979bb54390d711db6080b4cd198886efd57148c86e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/bar-no-axes.html"));

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
<h1>Bar charts</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// Use Morris.Bar
Morris.Bar({
  element: 'graph',
  axes: false,
  data: [
    {x: '2011 Q1', y: 3, z: 2, a: 3},
    {x: '2011 Q2', y: 2, z: null, a: 1},
    {x: '2011 Q3', y: 0, z: 2, a: 4},
    {x: '2011 Q4', y: 2, z: 4, a: 3}
  ],
  xkey: 'x',
  ykeys: ['y', 'z', 'a'],
  labels: ['Y', 'Z', 'A']
});
</pre>
</body>
";
        
        $__internal_a8c6338dd6163caad0758979bb54390d711db6080b4cd198886efd57148c86e6->leave($__internal_a8c6338dd6163caad0758979bb54390d711db6080b4cd198886efd57148c86e6_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/bar-no-axes.html";
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
/* <h1>Bar charts</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // Use Morris.Bar*/
/* Morris.Bar({*/
/*   element: 'graph',*/
/*   axes: false,*/
/*   data: [*/
/*     {x: '2011 Q1', y: 3, z: 2, a: 3},*/
/*     {x: '2011 Q2', y: 2, z: null, a: 1},*/
/*     {x: '2011 Q3', y: 0, z: 2, a: 4},*/
/*     {x: '2011 Q4', y: 2, z: 4, a: 3}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z', 'a'],*/
/*   labels: ['Y', 'Z', 'A']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
