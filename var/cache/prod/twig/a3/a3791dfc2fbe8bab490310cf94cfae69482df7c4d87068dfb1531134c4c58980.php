<?php

/* @css/Script/morrisjs/spec/specs.html */
class __TwigTemplate_18f997bff38086a0f4d1c1efb1223fd50ae8a02904f668f5a38813a63ba2c429 extends Twig_Template
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
  <meta charset=\"utf-8\">
  <title>morris.js tests</title>
  <link rel=\"stylesheet\" href=\"../bower_components/mocha/mocha.css\" type=\"text/css\" media=\"screen\" />
  <link rel=\"stylesheet\" href=\"../morris.css\" type=\"text/css\" media=\"screen\" />
  <!-- jQuery packaging changed for 2.1.0, so try to load both paths, one will work. -->
  <script src=\"../bower_components/jquery/dist/jquery.js\"></script>
  <script src=\"../bower_components/jquery/jquery.js\"></script>
  <script type=\"text/javascript\" src=\"../bower_components/raphael/raphael-min.js\"></script>
</head>
<body>
  <div id=\"mocha\"></div>

  <script type=\"text/javascript\" src=\"../bower_components/mocha/mocha.js\"></script>
  <script type=\"text/javascript\" src=\"../bower_components/chai/chai.js\"></script>
  <script type=\"text/javascript\" src=\"../bower_components/chai-jquery/chai-jquery.js\"></script>
  <script type=\"text/javascript\" src=\"../bower_components/sinon/index.js\"></script>
  <script type=\"text/javascript\" src=\"../bower_components/sinon-chai/lib/sinon-chai.js\"></script>
  <script>
    mocha.setup('bdd');
    should = chai.should();
  </script>

  <script type=\"text/javascript\" src=\"../morris.js\"></script>
  <script type=\"text/javascript\" src=\"../build/spec.js\"></script>
  <div id=\"test\" style=\"width: 400px; height: 200px;\"></div>
  <script>
    if (navigator.userAgent.indexOf('PhantomJS') < 0) {
      mocha.run();
    }
  </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/specs.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!doctype html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <title>morris.js tests</title>*/
/*   <link rel="stylesheet" href="../bower_components/mocha/mocha.css" type="text/css" media="screen" />*/
/*   <link rel="stylesheet" href="../morris.css" type="text/css" media="screen" />*/
/*   <!-- jQuery packaging changed for 2.1.0, so try to load both paths, one will work. -->*/
/*   <script src="../bower_components/jquery/dist/jquery.js"></script>*/
/*   <script src="../bower_components/jquery/jquery.js"></script>*/
/*   <script type="text/javascript" src="../bower_components/raphael/raphael-min.js"></script>*/
/* </head>*/
/* <body>*/
/*   <div id="mocha"></div>*/
/* */
/*   <script type="text/javascript" src="../bower_components/mocha/mocha.js"></script>*/
/*   <script type="text/javascript" src="../bower_components/chai/chai.js"></script>*/
/*   <script type="text/javascript" src="../bower_components/chai-jquery/chai-jquery.js"></script>*/
/*   <script type="text/javascript" src="../bower_components/sinon/index.js"></script>*/
/*   <script type="text/javascript" src="../bower_components/sinon-chai/lib/sinon-chai.js"></script>*/
/*   <script>*/
/*     mocha.setup('bdd');*/
/*     should = chai.should();*/
/*   </script>*/
/* */
/*   <script type="text/javascript" src="../morris.js"></script>*/
/*   <script type="text/javascript" src="../build/spec.js"></script>*/
/*   <div id="test" style="width: 400px; height: 200px;"></div>*/
/*   <script>*/
/*     if (navigator.userAgent.indexOf('PhantomJS') < 0) {*/
/*       mocha.run();*/
/*     }*/
/*   </script>*/
/* </body>*/
/* </html>*/
/* */
