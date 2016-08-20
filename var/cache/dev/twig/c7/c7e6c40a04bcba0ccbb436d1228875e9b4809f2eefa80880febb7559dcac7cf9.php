<?php

/* @css/Script/morrisjs/examples/dst.html */
class __TwigTemplate_d7b0d4bbc2b27a19ab523e757c5c46758754b8efd18c1e240a50ae7f6e52c932 extends Twig_Template
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
        $__internal_b6d1e421ac7b91ae7ab6e6b0f869debbb4b53084bba35b13fc59cbc7cf910d6e = $this->env->getExtension("native_profiler");
        $__internal_b6d1e421ac7b91ae7ab6e6b0f869debbb4b53084bba35b13fc59cbc7cf910d6e->enter($__internal_b6d1e421ac7b91ae7ab6e6b0f869debbb4b53084bba35b13fc59cbc7cf910d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/dst.html"));

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
<h1>Daylight-savings time</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
// This crosses a DST boundary in the UK.
Morris.Area({
  element: 'graph',
  data: [
    {x: '2013-03-30 22:00:00', y: 3, z: 3},
    {x: '2013-03-31 00:00:00', y: 2, z: 0},
    {x: '2013-03-31 02:00:00', y: 0, z: 2},
    {x: '2013-03-31 04:00:00', y: 4, z: 4}
  ],
  xkey: 'x',
  ykeys: ['y', 'z'],
  labels: ['Y', 'Z']
});
</pre>
</body>
";
        
        $__internal_b6d1e421ac7b91ae7ab6e6b0f869debbb4b53084bba35b13fc59cbc7cf910d6e->leave($__internal_b6d1e421ac7b91ae7ab6e6b0f869debbb4b53084bba35b13fc59cbc7cf910d6e_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/dst.html";
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
/* <h1>Daylight-savings time</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* // This crosses a DST boundary in the UK.*/
/* Morris.Area({*/
/*   element: 'graph',*/
/*   data: [*/
/*     {x: '2013-03-30 22:00:00', y: 3, z: 3},*/
/*     {x: '2013-03-31 00:00:00', y: 2, z: 0},*/
/*     {x: '2013-03-31 02:00:00', y: 0, z: 2},*/
/*     {x: '2013-03-31 04:00:00', y: 4, z: 4}*/
/*   ],*/
/*   xkey: 'x',*/
/*   ykeys: ['y', 'z'],*/
/*   labels: ['Y', 'Z']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */
