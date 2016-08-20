<?php

/* @css/Script/morrisjs/examples/goals.html */
class __TwigTemplate_2bcdb277c18a301eca182e2f6d6dc885cde97e357f5a7fd20a949449b18720cf extends Twig_Template
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
        $__internal_c6ceb99849ad1af6f102482d66cb64a30387f36dd4da061a421637ca8965acbb = $this->env->getExtension("native_profiler");
        $__internal_c6ceb99849ad1af6f102482d66cb64a30387f36dd4da061a421637ca8965acbb->enter($__internal_c6ceb99849ad1af6f102482d66cb64a30387f36dd4da061a421637ca8965acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/goals.html"));

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
<h1>Value Goals</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
var decimal_data = [];
for (var x = 0; x <= 360; x += 10) {
  decimal_data.push({
    x: x,
    y: Math.sin(Math.PI * x / 180).toFixed(4)
  });
}
window.m = Morris.Line({
  element: 'graph',
  data: decimal_data,
  xkey: 'x',
  ykeys: ['y'],
  labels: ['sin(x)'],
  parseTime: false,
  goals: [-1, 0, 1]
});
</pre>
</body>
";
        
        $__internal_c6ceb99849ad1af6f102482d66cb64a30387f36dd4da061a421637ca8965acbb->leave($__internal_c6ceb99849ad1af6f102482d66cb64a30387f36dd4da061a421637ca8965acbb_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/goals.html";
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
/* <h1>Value Goals</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* var decimal_data = [];*/
/* for (var x = 0; x <= 360; x += 10) {*/
/*   decimal_data.push({*/
/*     x: x,*/
/*     y: Math.sin(Math.PI * x / 180).toFixed(4)*/
/*   });*/
/* }*/
/* window.m = Morris.Line({*/
/*   element: 'graph',*/
/*   data: decimal_data,*/
/*   xkey: 'x',*/
/*   ykeys: ['y'],*/
/*   labels: ['sin(x)'],*/
/*   parseTime: false,*/
/*   goals: [-1, 0, 1]*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
