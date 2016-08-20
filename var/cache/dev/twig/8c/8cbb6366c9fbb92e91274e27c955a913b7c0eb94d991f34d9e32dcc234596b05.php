<?php

/* @css/Script/morrisjs/examples/donut-formatter.html */
class __TwigTemplate_556b0085542555f918d62c8db752bc1e20603165250119c3bde7c777ea5c7c68 extends Twig_Template
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
        $__internal_fe751c87e4b5583734fa0c95dabba2466bd3bae62849cb93a8c6fdc799ea2497 = $this->env->getExtension("native_profiler");
        $__internal_fe751c87e4b5583734fa0c95dabba2466bd3bae62849cb93a8c6fdc799ea2497->enter($__internal_fe751c87e4b5583734fa0c95dabba2466bd3bae62849cb93a8c6fdc799ea2497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/donut-formatter.html"));

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
<h1>Donut Chart</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
Morris.Donut({
  element: 'graph',
  data: [
    {value: 70, label: 'foo', formatted: 'at least 70%' },
    {value: 15, label: 'bar', formatted: 'approx. 15%' },
    {value: 10, label: 'baz', formatted: 'approx. 10%' },
    {value: 5, label: 'A really really long label', formatted: 'at most 5%' }
  ],
  formatter: function (x, data) { return data.formatted; }
});
</pre>
</body>
";
        
        $__internal_fe751c87e4b5583734fa0c95dabba2466bd3bae62849cb93a8c6fdc799ea2497->leave($__internal_fe751c87e4b5583734fa0c95dabba2466bd3bae62849cb93a8c6fdc799ea2497_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/donut-formatter.html";
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
/* <h1>Donut Chart</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* Morris.Donut({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {value: 70, label: 'foo', formatted: 'at least 70%' },*/
/*     {value: 15, label: 'bar', formatted: 'approx. 15%' },*/
/*     {value: 10, label: 'baz', formatted: 'approx. 10%' },*/
/*     {value: 5, label: 'A really really long label', formatted: 'at most 5%' }*/
/*   ],*/
/*   formatter: function (x, data) { return data.formatted; }*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
