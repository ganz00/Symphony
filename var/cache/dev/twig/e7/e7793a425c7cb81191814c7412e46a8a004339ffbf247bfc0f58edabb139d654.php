<?php

/* @css/Script/morrisjs/spec/viz/test.html */
class __TwigTemplate_16497adbafd14568ee1ec771f954f80fddfb18f14074e13767d162485c273f8b extends Twig_Template
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
        $__internal_53e84e0cc4bfdc469738fc0a02f6ae7eca567c670e1344aa55370fefc96e08cc = $this->env->getExtension("native_profiler");
        $__internal_53e84e0cc4bfdc469738fc0a02f6ae7eca567c670e1344aa55370fefc96e08cc->enter($__internal_53e84e0cc4bfdc469738fc0a02f6ae7eca567c670e1344aa55370fefc96e08cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/viz/test.html"));

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
        
        $__internal_53e84e0cc4bfdc469738fc0a02f6ae7eca567c670e1344aa55370fefc96e08cc->leave($__internal_53e84e0cc4bfdc469738fc0a02f6ae7eca567c670e1344aa55370fefc96e08cc_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/test.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
