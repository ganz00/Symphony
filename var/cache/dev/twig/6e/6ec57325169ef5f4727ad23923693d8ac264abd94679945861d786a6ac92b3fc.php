<?php

/* @css/Script/morrisjs/examples/stacked_bars.html */
class __TwigTemplate_7e5d1f70eb9559376528eb455fab28ba3e7d50118da396a1fa45be04fc640f24 extends Twig_Template
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
        $__internal_71a83eaf8ee4e4c9eccfab24f4f3d06e89d85fc3070a7c5cae0a734b1445d338 = $this->env->getExtension("native_profiler");
        $__internal_71a83eaf8ee4e4c9eccfab24f4f3d06e89d85fc3070a7c5cae0a734b1445d338->enter($__internal_71a83eaf8ee4e4c9eccfab24f4f3d06e89d85fc3070a7c5cae0a734b1445d338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/stacked_bars.html"));

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
<h1>Stacked Bars chart</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// Use Morris.Bar
Morris.Bar({
  element: 'graph',
  data: [
    {x: '2011 Q1', y: 3, z: 2, a: 3},
    {x: '2011 Q2', y: 2, z: null, a: 1},
    {x: '2011 Q3', y: 0, z: 2, a: 4},
    {x: '2011 Q4', y: 2, z: 4, a: 3}
  ],
  xkey: 'x',
  ykeys: ['y', 'z', 'a'],
  labels: ['Y', 'Z', 'A'],
  stacked: true
});
</pre>
</body>
";
        
        $__internal_71a83eaf8ee4e4c9eccfab24f4f3d06e89d85fc3070a7c5cae0a734b1445d338->leave($__internal_71a83eaf8ee4e4c9eccfab24f4f3d06e89d85fc3070a7c5cae0a734b1445d338_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/stacked_bars.html";
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
/* <h1>Stacked Bars chart</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // Use Morris.Bar*/
/* Morris.Bar({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {x: '2011 Q1', y: 3, z: 2, a: 3},*/
/*     {x: '2011 Q2', y: 2, z: null, a: 1},*/
/*     {x: '2011 Q3', y: 0, z: 2, a: 4},*/
/*     {x: '2011 Q4', y: 2, z: 4, a: 3}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z', 'a'],*/
/*   labels: ['Y', 'Z', 'A'],*/
/*   stacked: true*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
