<?php

/* @css/Script/morrisjs/examples/quarters.html */
class __TwigTemplate_0fef202cc2c7ceee2174cc23d11aac208d08d177ac1e228fb3a2af2c12158519 extends Twig_Template
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
        $__internal_0395df288fdeb492e683dc5e48ba9acd69b8fada0ef398eb94ce8a73f9078f32 = $this->env->getExtension("native_profiler");
        $__internal_0395df288fdeb492e683dc5e48ba9acd69b8fada0ef398eb94ce8a73f9078f32->enter($__internal_0395df288fdeb492e683dc5e48ba9acd69b8fada0ef398eb94ce8a73f9078f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/examples/quarters.html"));

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
<h1>Formatting Dates with Quarters</h1>
<div id=\"graph\"></div>
<pre id=\"code\" class=\"prettyprint linenums\">
/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_e_type */
var quarter_data = [
  {\"period\": \"2011 Q3\", \"licensed\": 3407, \"sorned\": 660},
  {\"period\": \"2011 Q2\", \"licensed\": 3351, \"sorned\": 629},
  {\"period\": \"2011 Q1\", \"licensed\": 3269, \"sorned\": 618},
  {\"period\": \"2010 Q4\", \"licensed\": 3246, \"sorned\": 661},
  {\"period\": \"2010 Q3\", \"licensed\": 3257, \"sorned\": 667},
  {\"period\": \"2010 Q2\", \"licensed\": 3248, \"sorned\": 627},
  {\"period\": \"2010 Q1\", \"licensed\": 3171, \"sorned\": 660},
  {\"period\": \"2009 Q4\", \"licensed\": 3171, \"sorned\": 676},
  {\"period\": \"2009 Q3\", \"licensed\": 3201, \"sorned\": 656},
  {\"period\": \"2009 Q2\", \"licensed\": 3215, \"sorned\": 622},
  {\"period\": \"2009 Q1\", \"licensed\": 3148, \"sorned\": 632},
  {\"period\": \"2008 Q4\", \"licensed\": 3155, \"sorned\": 681},
  {\"period\": \"2008 Q3\", \"licensed\": 3190, \"sorned\": 667},
  {\"period\": \"2007 Q4\", \"licensed\": 3226, \"sorned\": 620},
  {\"period\": \"2006 Q4\", \"licensed\": 3245, \"sorned\": null},
  {\"period\": \"2005 Q4\", \"licensed\": 3289, \"sorned\": null},
  {\"period\": \"2004 Q4\", \"licensed\": 3263, \"sorned\": null},
  {\"period\": \"2003 Q4\", \"licensed\": 3189, \"sorned\": null},
  {\"period\": \"2002 Q4\", \"licensed\": 3079, \"sorned\": null},
  {\"period\": \"2001 Q4\", \"licensed\": 3085, \"sorned\": null},
  {\"period\": \"2000 Q4\", \"licensed\": 3055, \"sorned\": null},
  {\"period\": \"1999 Q4\", \"licensed\": 3063, \"sorned\": null},
  {\"period\": \"1998 Q4\", \"licensed\": 2943, \"sorned\": null},
  {\"period\": \"1997 Q4\", \"licensed\": 2806, \"sorned\": null},
  {\"period\": \"1996 Q4\", \"licensed\": 2674, \"sorned\": null},
  {\"period\": \"1995 Q4\", \"licensed\": 1702, \"sorned\": null},
  {\"period\": \"1994 Q4\", \"licensed\": 1732, \"sorned\": null}
];
Morris.Line({
  element: 'graph',
  data: quarter_data,
  xkey: 'period',
  ykeys: ['licensed', 'sorned'],
  labels: ['Licensed', 'SORN']
});
</pre>
</body>
";
        
        $__internal_0395df288fdeb492e683dc5e48ba9acd69b8fada0ef398eb94ce8a73f9078f32->leave($__internal_0395df288fdeb492e683dc5e48ba9acd69b8fada0ef398eb94ce8a73f9078f32_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/examples/quarters.html";
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
/* <h1>Formatting Dates with Quarters</h1>*/
/* <div id="graph"></div>*/
/* <pre id="code" class="prettyprint linenums">*/
/* /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_e_type *//* */
/* var quarter_data = [*/
/*   {"period": "2011 Q3", "licensed": 3407, "sorned": 660},*/
/*   {"period": "2011 Q2", "licensed": 3351, "sorned": 629},*/
/*   {"period": "2011 Q1", "licensed": 3269, "sorned": 618},*/
/*   {"period": "2010 Q4", "licensed": 3246, "sorned": 661},*/
/*   {"period": "2010 Q3", "licensed": 3257, "sorned": 667},*/
/*   {"period": "2010 Q2", "licensed": 3248, "sorned": 627},*/
/*   {"period": "2010 Q1", "licensed": 3171, "sorned": 660},*/
/*   {"period": "2009 Q4", "licensed": 3171, "sorned": 676},*/
/*   {"period": "2009 Q3", "licensed": 3201, "sorned": 656},*/
/*   {"period": "2009 Q2", "licensed": 3215, "sorned": 622},*/
/*   {"period": "2009 Q1", "licensed": 3148, "sorned": 632},*/
/*   {"period": "2008 Q4", "licensed": 3155, "sorned": 681},*/
/*   {"period": "2008 Q3", "licensed": 3190, "sorned": 667},*/
/*   {"period": "2007 Q4", "licensed": 3226, "sorned": 620},*/
/*   {"period": "2006 Q4", "licensed": 3245, "sorned": null},*/
/*   {"period": "2005 Q4", "licensed": 3289, "sorned": null},*/
/*   {"period": "2004 Q4", "licensed": 3263, "sorned": null},*/
/*   {"period": "2003 Q4", "licensed": 3189, "sorned": null},*/
/*   {"period": "2002 Q4", "licensed": 3079, "sorned": null},*/
/*   {"period": "2001 Q4", "licensed": 3085, "sorned": null},*/
/*   {"period": "2000 Q4", "licensed": 3055, "sorned": null},*/
/*   {"period": "1999 Q4", "licensed": 3063, "sorned": null},*/
/*   {"period": "1998 Q4", "licensed": 2943, "sorned": null},*/
/*   {"period": "1997 Q4", "licensed": 2806, "sorned": null},*/
/*   {"period": "1996 Q4", "licensed": 2674, "sorned": null},*/
/*   {"period": "1995 Q4", "licensed": 1702, "sorned": null},*/
/*   {"period": "1994 Q4", "licensed": 1732, "sorned": null}*/
/* ];*/
/* Morris.Line({*/
/*   element: 'graph',*/
/*   data: quarter_data,*/
/*   xkey: 'period',*/
/*   ykeys: ['licensed', 'sorned'],*/
/*   labels: ['Licensed', 'SORN']*/
/* });*/
/* </pre>*/
/* </body>*/
/* */