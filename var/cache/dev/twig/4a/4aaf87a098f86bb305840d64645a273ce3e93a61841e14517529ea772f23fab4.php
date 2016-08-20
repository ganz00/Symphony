<?php

/* @css/Script/morrisjs/examples/donut.html */
class __TwigTemplate_630c9b4e677df78c292b749b9b8bee2cf493c91caaa479b307b4e860d1eb6097 extends Twig_Template
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
        $__internal_b2944c604cd3ed75fe9264f179a3df8c66e454062541e70b7b8ffa861f465d7c = $this->env->getExtension("native_profiler");
        $__internal_b2944c604cd3ed75fe9264f179a3df8c66e454062541e70b7b8ffa861f465d7c->enter($__internal_b2944c604cd3ed75fe9264f179a3df8c66e454062541e70b7b8ffa861f465d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/donut.html"));

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
    {value: 70, label: 'foo'},
    {value: 15, label: 'bar'},
    {value: 10, label: 'baz'},
    {value: 5, label: 'A really really long label'}
  ],
  formatter: function (x) { return x + \"%\"}
}).on('click', function(i, row){
  console.log(i, row);
});
</pre>
</body>
";
        
        $__internal_b2944c604cd3ed75fe9264f179a3df8c66e454062541e70b7b8ffa861f465d7c->leave($__internal_b2944c604cd3ed75fe9264f179a3df8c66e454062541e70b7b8ffa861f465d7c_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/donut.html";
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
/*     {value: 70, label: 'foo'},*/
/*     {value: 15, label: 'bar'},*/
/*     {value: 10, label: 'baz'},*/
/*     {value: 5, label: 'A really really long label'}*/
/*   ],*/
/*   formatter: function (x) { return x + "%"}*/
/* }).on('click', function(i, row){*/
/*   console.log(i, row);*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
