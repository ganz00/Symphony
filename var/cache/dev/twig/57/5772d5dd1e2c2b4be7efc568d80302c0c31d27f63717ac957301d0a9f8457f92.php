<?php

/* @css/Script/morrisjs/examples/donut-colors.html */
class __TwigTemplate_413f3fecbf0b3eaa758591bfd0144d0ddf5448d8965f7dd4eaba486cd2a8bbb7 extends Twig_Template
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
        $__internal_2d34d036e7aba760346d0676d9f97fa2bc66c25d7d2882d64c93874eb7184e4e = $this->env->getExtension("native_profiler");
        $__internal_2d34d036e7aba760346d0676d9f97fa2bc66c25d7d2882d64c93874eb7184e4e->enter($__internal_2d34d036e7aba760346d0676d9f97fa2bc66c25d7d2882d64c93874eb7184e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/donut-colors.html"));

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
  <style>
    body { background:#ccc; }
  </style>
</head>
<body>
<h1>Donut Chart</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
Morris.Donut({
  element: 'graph',
  data: [
    {value: 70, label: 'foo'},
    {value: 15, label: 'bar'},
    {value: 10, label: 'baz'},
    {value: 5, label: 'A really really long label'}
  ],
  backgroundColor: '#ccc',
  labelColor: '#060',
  colors: [
    '#0BA462',
    '#39B580',
    '#67C69D',
    '#95D7BB'
  ],
  formatter: function (x) { return x + \"%\"}
});
</pre>
</body>
";
        
        $__internal_2d34d036e7aba760346d0676d9f97fa2bc66c25d7d2882d64c93874eb7184e4e->leave($__internal_2d34d036e7aba760346d0676d9f97fa2bc66c25d7d2882d64c93874eb7184e4e_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/donut-colors.html";
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
/*   <style>*/
/*     body { background:#ccc; }*/
/*   </style>*/
/* </head>*/
/* <body>*/
/* <h1>Donut Chart</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* Morris.Donut({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {value: 70, label: 'foo'},*/
/*     {value: 15, label: 'bar'},*/
/*     {value: 10, label: 'baz'},*/
/*     {value: 5, label: 'A really really long label'}*/
/*   ],*/
/*   backgroundColor: '#ccc',*/
/*   labelColor: '#060',*/
/*   colors: [*/
/*     '#0BA462',*/
/*     '#39B580',*/
/*     '#67C69D',*/
/*     '#95D7BB'*/
/*   ],*/
/*   formatter: function (x) { return x + "%"}*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
