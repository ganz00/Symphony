<?php

/* @css/Script/morrisjs/spec/viz/test.html */
class __TwigTemplate_97bb20251e9793d37dd216b87922b4f1b3e865e280f62a8a004b0d8d16f8b93f extends Twig_Template
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
        // line 1
        echo "<!doctype html>
<head>
  <!-- jQuery packaging changed for 2.1.0, so try to load both paths, one will work. -->
  <script src=\"../../bower_components/jquery/dist/jquery.js\"></script>
  <script src=\"../../bower_components/jquery/jquery.js\"></script>
  <script src=\"../../bower_components/raphael/raphael-min.js\"></script>
  <script src=\"../../morris.js\"></script>
  <link rel=\"stylesheet\" href=\"../../morris.css\">
  <style>
    body {
      padding: 0;
      margin: 0;
      background-color: white;
    }
    #chart {
      width: 500px;
      height: 300px;
    }
  </style>
  <script>
    function bridge(e) {
      window.alert(JSON.stringify(e));
    }
    window.snapshot = function () {
      bridge({ fn: \"snapshot\" });
    };
    window.mousemove = function (x, y) {
      bridge({ fn: \"mousemove\", x: x, y: y });
    };
  </script>
</head>
<body>
<div id=\"chart\"></div>
</body>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/test.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!doctype html>*/
/* <head>*/
/*   <!-- jQuery packaging changed for 2.1.0, so try to load both paths, one will work. -->*/
/*   <script src="../../bower_components/jquery/dist/jquery.js"></script>*/
/*   <script src="../../bower_components/jquery/jquery.js"></script>*/
/*   <script src="../../bower_components/raphael/raphael-min.js"></script>*/
/*   <script src="../../morris.js"></script>*/
/*   <link rel="stylesheet" href="../../morris.css">*/
/*   <style>*/
/*     body {*/
/*       padding: 0;*/
/*       margin: 0;*/
/*       background-color: white;*/
/*     }*/
/*     #chart {*/
/*       width: 500px;*/
/*       height: 300px;*/
/*     }*/
/*   </style>*/
/*   <script>*/
/*     function bridge(e) {*/
/*       window.alert(JSON.stringify(e));*/
/*     }*/
/*     window.snapshot = function () {*/
/*       bridge({ fn: "snapshot" });*/
/*     };*/
/*     window.mousemove = function (x, y) {*/
/*       bridge({ fn: "mousemove", x: x, y: y });*/
/*     };*/
/*   </script>*/
/* </head>*/
/* <body>*/
/* <div id="chart"></div>*/
/* </body>*/
/* */
