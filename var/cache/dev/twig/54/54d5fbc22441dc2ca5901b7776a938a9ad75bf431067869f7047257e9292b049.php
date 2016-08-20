<?php

/* @css/jquery.jqplot/examples/draw-rectangles.html */
class __TwigTemplate_b966d052d948ec0c1194fc507a8e1e812b2d838985cbcb4d07840c422ce52889 extends Twig_Template
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
        $__internal_258cb823d1ec54c2c0c961c7e9b448e8bc0db614f3bdddd8a2089aef98b75f55 = $this->env->getExtension("native_profiler");
        $__internal_258cb823d1ec54c2c0c961c7e9b448e8bc0db614f3bdddd8a2089aef98b75f55->enter($__internal_258cb823d1ec54c2c0c961c7e9b448e8bc0db614f3bdddd8a2089aef98b75f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/draw-rectangles.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Draw Rectangles on Plots</title>

    <link class=\"include\" rel=\"stylesheet\" type=\"text/css\" href=\"../jquery.jqplot.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"examples.min.css\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"syntaxhighlighter/styles/shCoreDefault.min.css\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"syntaxhighlighter/styles/shThemejqPlot.min.css\" />
  
    <!--[if lt IE 9]><script language=\"javascript\" type=\"text/javascript\" src=\"../excanvas.js\"></script><![endif]-->
    <script class=\"include\" type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    
   
</head>
<body>
    <div id=\"header\">
        <div class=\"nav\">
            <a class=\"nav\" href=\"/index.html\">Home</a>
            <a class=\"nav\" href=\"/examples/\">Examples</a>
            <a class=\"nav\" href=\"/docs/\">Docs</a>
            <a class=\"nav\" href=\"/download/\">Download</a>
            <a class=\"nav\" href=\"/info.html\">Info</a>
            <a class=\"nav\" href=\"/donate.html\">Donate</a>
        </div>
    </div>
    <div class=\"colmask leftmenu\">
      <div class=\"colleft\">
        <div class=\"col1\" id=\"example-content\">

  
<!-- Example scripts go here -->

<p>These examples use rectangle overlays to show various ranges.
xmin, xmax, ymin, ymax are all optional -- the rectangle will go to the end of the plot area if they are not specified.
Colors are specified in the canvas drawing format (use rgba for transparency).
</p>

    <div id=\"chart1\" style=\"margin-top:20px; margin-left:20px; width:400px; height:300px;\"></div>
    <button onclick=\"lineup()\">Up</button>
    <button onclick=\"linedown()\">Down</button>

<pre class=\"code prettyprint brush: js\"></pre>

    <div id=\"chart2\" style=\"margin-top:20px; margin-left:20px; width:400px; height:300px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>
  
    <div id=\"chart3\" style=\"margin-top:20px; margin-left:20px; width:400px; height:300px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>
  
<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var plot1 = \$.jqplot ('chart1', [[30,-10,90,20,50,130,80,120,50]], {
      canvasOverlay: {
        show: true,
        objects: [
          { rectangle: { ymax: 0, xminOffset: \"0px\", xmaxOffset: \"0px\", yminOffset: \"0px\", ymaxOffset: \"0px\",
                    color: \"rgba(0, 0, 200, 0.3)\", showTooltip: true, tooltipFormatString: \"Too Cold\" } },
          { rectangle: { ymin: 100, xminOffset: \"0px\", xmaxOffset: \"0px\", yminOffset: \"0px\", ymaxOffset: \"0px\",
                    color: \"rgba(200, 0, 0, 0.3)\", showTooltip: true, tooltipFormatString: \"Too Warm\" } }
        ]
      } 
  });
});
</script>
  
<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var plot2 = \$.jqplot ('chart2',
          [ [ [\"2012-01-01\", 30], [\"2012-01-02\", -10], [\"2012-01-03\", 90], [\"2012-01-04\", 20], [\"2012-01-05\", 50], 
              [\"2012-01-06\", 130], [\"2012-01-07\", 80], [\"2012-01-08\", 120],[\"2012-01-09\", 50] ]], {
      axes : {
        xaxis : {
          label : \"X Axis Label\",
          renderer:\$.jqplot.DateAxisRenderer,
        }
      },
      canvasOverlay: {
        show: true,
        objects: [
          { rectangle: { xmin: new Date(\"2012-01-03\"), xmax: new Date(\"2012-01-07\"), xminOffset: \"0px\", xmaxOffset: \"0px\", yminOffset: \"0px\", ymaxOffset: \"0px\",
                    color: \"rgba(0, 200, 200, 0.3)\", showTooltip: true, tooltipFormatString: \"Holidays\" } },
        ]
      } 
  });
});
</script>

<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var plot3 = \$.jqplot ('chart3', [[30,-10,90,20,50,130,80,120,50]], {
      canvasOverlay: {
        show: true,
        objects: [
          { rectangle: { xmin:3.5, xmax: 8.2, ymin: 10, ymax: 70, xminOffset: \"0px\", xmaxOffset: \"0px\", yminOffset: \"0px\", ymaxOffset: \"0px\",
                    color: \"rgba(200, 100, 100, 0.3)\", showTooltip: true, tooltipFormatString: \"Ideal Zone\" } },
        ]
      } 
  });
});
</script>

<!-- End example scripts -->

<!-- Don't touch this! -->


    <script class=\"include\" type=\"text/javascript\" src=\"../jquery.jqplot.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shCore.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shBrushJScript.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shBrushXml.min.js\"></script>
<!-- End Don't touch this! -->

<!-- Additional plugins go here -->

  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasOverlay.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasTextRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasAxisLabelRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.dateAxisRenderer.min.js\"></script>

<!-- End additional plugins -->

        </div>
         <div class=\"col2\">

           <div class=\"example-link\"><a class=\"example-link\" href=\"data-renderers.html\">AJAX and JSON Data Loading via Data Renderers</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"barLineAnimated.html\">Animated Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"dashboardWidget.html\">Animated Dashboard Sample - Filled Line with Log Axis</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_area.html\">Area Chart</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_area2.html\">Area Chart 2</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"axisLabelTests.html\">Axis Labels</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"axisLabelsRotatedText.html\">Axis Labels and Rotated Text</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"barTest.html\">Bar Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"multipleBarColors.html\">Bar Colors Example</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"bezierCurve.html\">Bezier Curve Plots</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"blockPlot.html\">Block Plots</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"bubbleChart.html\">Bubble Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"bubble-plots.html\">Bubble Plots</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"candlestick.html\">Candlestick and Open Hi Low Close Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"theming.html\">Chart Theming</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"fillBetweenLines.html\">Charts with Fill Between Lines</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_cdf.html\">Cumulative Density Function Chart</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"dashedLines.html\">Dashed Lines with Smoothing</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"cursor-highlighter.html\">Data Point Highlighting, Tooltips and Cursor Tracking</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"point-labels.html\">Data Point labels</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"date-axes.html\">Date Axes</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"dateAxisRenderer.html\">Date Axes 2</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"rotatedTickLabelsZoom.html\">Date Axes, Rotated Labels and Zooming</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"canvas-overlay.html\">Draw Lines on Plots - Canvas Overlay</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"draw-rectangles.html\">Draw Rectangles on Plots</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_engel.html\">Engel Curves</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"bandedLine.html\">Error Bands and Confidence Intervals</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"area.html\">Filled (Area) Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"axisScalingForceTickAt.html\">Force Plot to Have Tick at 0 or 100</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"hiddenPlotsInTabs.html\">Hidden Plots</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"customHighlighterCursorTrendline.html\">Highlighting, Dragging Points, Cursor and Trend Lines</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"line-charts.html\">Line Charts and Options</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_lorenz.html\">Lorenz Curves</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"mekkoCharts.html\">Mekko Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"meterGauge.html\">Meter Gauge</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"candlestick-charts.html\">Open Hi Low Close and Candlestick Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"pieTest.html\">Pie Charts and Options</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"pieTest4.html\">Pie Charts and Options 2</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"pieChartsEnhancedLegend.html\">Pie Charts with Enhanced Legend Renderer</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"pie-donut-charts.html\">Pie and Donut Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"selectorSyntax.html\">Plot Creation with jQuery Selectors</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"zooming.html\">Plot Zooming and Cursor Control</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_pdf.html\">Probability Density Function Chart</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_pyramid_by_age.html\">Pyramid Chart By Age</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_pyramid.html\">Pyramid Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_pyramid2.html\">Pyramid Charts 2</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"kcp_quintiles.html\">Quintile Pyramid Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"resizablePlot.html\">Resizable Plots</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"rotated-tick-labels.html\">Rotated Labels and Font Styling</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"smoothedLine.html\">Smoothed Lines</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"step-charts.html\">Step Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"bar-charts.html\">Vertical and Horizontal Bar Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"waterfall.html\">Waterfall Charts</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"waterfall2.html\">Waterfall Charts 2</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"zoomOptions.html\">Zoom Options</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"zoomProxy.html\">Zoom Proxy - Control one plot from another</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"zoom1.html\">Zooming</a></div>
           <div class=\"example-link\"><a class=\"example-link\" href=\"dateAxisLogAxisZooming.html\">Zooming with Date and Log Axes</a></div>

         </div>
               </div>
    </div>
    <script type=\"text/javascript\" src=\"example.min.js\"></script>

</body>


</html>";
        
        $__internal_258cb823d1ec54c2c0c961c7e9b448e8bc0db614f3bdddd8a2089aef98b75f55->leave($__internal_258cb823d1ec54c2c0c961c7e9b448e8bc0db614f3bdddd8a2089aef98b75f55_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/draw-rectangles.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* <head>*/
/* */
/*     <title>Draw Rectangles on Plots</title>*/
/* */
/*     <link class="include" rel="stylesheet" type="text/css" href="../jquery.jqplot.min.css" />*/
/*     <link rel="stylesheet" type="text/css" href="examples.min.css" />*/
/*     <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shCoreDefault.min.css" />*/
/*     <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shThemejqPlot.min.css" />*/
/*   */
/*     <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->*/
/*     <script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*/
/*     */
/*    */
/* </head>*/
/* <body>*/
/*     <div id="header">*/
/*         <div class="nav">*/
/*             <a class="nav" href="/index.html">Home</a>*/
/*             <a class="nav" href="/examples/">Examples</a>*/
/*             <a class="nav" href="/docs/">Docs</a>*/
/*             <a class="nav" href="/download/">Download</a>*/
/*             <a class="nav" href="/info.html">Info</a>*/
/*             <a class="nav" href="/donate.html">Donate</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="colmask leftmenu">*/
/*       <div class="colleft">*/
/*         <div class="col1" id="example-content">*/
/* */
/*   */
/* <!-- Example scripts go here -->*/
/* */
/* <p>These examples use rectangle overlays to show various ranges.*/
/* xmin, xmax, ymin, ymax are all optional -- the rectangle will go to the end of the plot area if they are not specified.*/
/* Colors are specified in the canvas drawing format (use rgba for transparency).*/
/* </p>*/
/* */
/*     <div id="chart1" style="margin-top:20px; margin-left:20px; width:400px; height:300px;"></div>*/
/*     <button onclick="lineup()">Up</button>*/
/*     <button onclick="linedown()">Down</button>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/*     <div id="chart2" style="margin-top:20px; margin-left:20px; width:400px; height:300px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/*   */
/*     <div id="chart3" style="margin-top:20px; margin-left:20px; width:400px; height:300px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/*   */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var plot1 = $.jqplot ('chart1', [[30,-10,90,20,50,130,80,120,50]], {*/
/*       canvasOverlay: {*/
/*         show: true,*/
/*         objects: [*/
/*           { rectangle: { ymax: 0, xminOffset: "0px", xmaxOffset: "0px", yminOffset: "0px", ymaxOffset: "0px",*/
/*                     color: "rgba(0, 0, 200, 0.3)", showTooltip: true, tooltipFormatString: "Too Cold" } },*/
/*           { rectangle: { ymin: 100, xminOffset: "0px", xmaxOffset: "0px", yminOffset: "0px", ymaxOffset: "0px",*/
/*                     color: "rgba(200, 0, 0, 0.3)", showTooltip: true, tooltipFormatString: "Too Warm" } }*/
/*         ]*/
/*       } */
/*   });*/
/* });*/
/* </script>*/
/*   */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var plot2 = $.jqplot ('chart2',*/
/*           [ [ ["2012-01-01", 30], ["2012-01-02", -10], ["2012-01-03", 90], ["2012-01-04", 20], ["2012-01-05", 50], */
/*               ["2012-01-06", 130], ["2012-01-07", 80], ["2012-01-08", 120],["2012-01-09", 50] ]], {*/
/*       axes : {*/
/*         xaxis : {*/
/*           label : "X Axis Label",*/
/*           renderer:$.jqplot.DateAxisRenderer,*/
/*         }*/
/*       },*/
/*       canvasOverlay: {*/
/*         show: true,*/
/*         objects: [*/
/*           { rectangle: { xmin: new Date("2012-01-03"), xmax: new Date("2012-01-07"), xminOffset: "0px", xmaxOffset: "0px", yminOffset: "0px", ymaxOffset: "0px",*/
/*                     color: "rgba(0, 200, 200, 0.3)", showTooltip: true, tooltipFormatString: "Holidays" } },*/
/*         ]*/
/*       } */
/*   });*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var plot3 = $.jqplot ('chart3', [[30,-10,90,20,50,130,80,120,50]], {*/
/*       canvasOverlay: {*/
/*         show: true,*/
/*         objects: [*/
/*           { rectangle: { xmin:3.5, xmax: 8.2, ymin: 10, ymax: 70, xminOffset: "0px", xmaxOffset: "0px", yminOffset: "0px", ymaxOffset: "0px",*/
/*                     color: "rgba(200, 100, 100, 0.3)", showTooltip: true, tooltipFormatString: "Ideal Zone" } },*/
/*         ]*/
/*       } */
/*   });*/
/* });*/
/* </script>*/
/* */
/* <!-- End example scripts -->*/
/* */
/* <!-- Don't touch this! -->*/
/* */
/* */
/*     <script class="include" type="text/javascript" src="../jquery.jqplot.min.js"></script>*/
/*     <script type="text/javascript" src="syntaxhighlighter/scripts/shCore.min.js"></script>*/
/*     <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushJScript.min.js"></script>*/
/*     <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushXml.min.js"></script>*/
/* <!-- End Don't touch this! -->*/
/* */
/* <!-- Additional plugins go here -->*/
/* */
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasOverlay.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasTextRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.dateAxisRenderer.min.js"></script>*/
/* */
/* <!-- End additional plugins -->*/
/* */
/*         </div>*/
/*          <div class="col2">*/
/* */
/*            <div class="example-link"><a class="example-link" href="data-renderers.html">AJAX and JSON Data Loading via Data Renderers</a></div>*/
/*            <div class="example-link"><a class="example-link" href="barLineAnimated.html">Animated Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="dashboardWidget.html">Animated Dashboard Sample - Filled Line with Log Axis</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_area.html">Area Chart</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_area2.html">Area Chart 2</a></div>*/
/*            <div class="example-link"><a class="example-link" href="axisLabelTests.html">Axis Labels</a></div>*/
/*            <div class="example-link"><a class="example-link" href="axisLabelsRotatedText.html">Axis Labels and Rotated Text</a></div>*/
/*            <div class="example-link"><a class="example-link" href="barTest.html">Bar Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="multipleBarColors.html">Bar Colors Example</a></div>*/
/*            <div class="example-link"><a class="example-link" href="bezierCurve.html">Bezier Curve Plots</a></div>*/
/*            <div class="example-link"><a class="example-link" href="blockPlot.html">Block Plots</a></div>*/
/*            <div class="example-link"><a class="example-link" href="bubbleChart.html">Bubble Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="bubble-plots.html">Bubble Plots</a></div>*/
/*            <div class="example-link"><a class="example-link" href="candlestick.html">Candlestick and Open Hi Low Close Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="theming.html">Chart Theming</a></div>*/
/*            <div class="example-link"><a class="example-link" href="fillBetweenLines.html">Charts with Fill Between Lines</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_cdf.html">Cumulative Density Function Chart</a></div>*/
/*            <div class="example-link"><a class="example-link" href="dashedLines.html">Dashed Lines with Smoothing</a></div>*/
/*            <div class="example-link"><a class="example-link" href="cursor-highlighter.html">Data Point Highlighting, Tooltips and Cursor Tracking</a></div>*/
/*            <div class="example-link"><a class="example-link" href="point-labels.html">Data Point labels</a></div>*/
/*            <div class="example-link"><a class="example-link" href="date-axes.html">Date Axes</a></div>*/
/*            <div class="example-link"><a class="example-link" href="dateAxisRenderer.html">Date Axes 2</a></div>*/
/*            <div class="example-link"><a class="example-link" href="rotatedTickLabelsZoom.html">Date Axes, Rotated Labels and Zooming</a></div>*/
/*            <div class="example-link"><a class="example-link" href="canvas-overlay.html">Draw Lines on Plots - Canvas Overlay</a></div>*/
/*            <div class="example-link"><a class="example-link" href="draw-rectangles.html">Draw Rectangles on Plots</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_engel.html">Engel Curves</a></div>*/
/*            <div class="example-link"><a class="example-link" href="bandedLine.html">Error Bands and Confidence Intervals</a></div>*/
/*            <div class="example-link"><a class="example-link" href="area.html">Filled (Area) Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="axisScalingForceTickAt.html">Force Plot to Have Tick at 0 or 100</a></div>*/
/*            <div class="example-link"><a class="example-link" href="hiddenPlotsInTabs.html">Hidden Plots</a></div>*/
/*            <div class="example-link"><a class="example-link" href="customHighlighterCursorTrendline.html">Highlighting, Dragging Points, Cursor and Trend Lines</a></div>*/
/*            <div class="example-link"><a class="example-link" href="line-charts.html">Line Charts and Options</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_lorenz.html">Lorenz Curves</a></div>*/
/*            <div class="example-link"><a class="example-link" href="mekkoCharts.html">Mekko Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="meterGauge.html">Meter Gauge</a></div>*/
/*            <div class="example-link"><a class="example-link" href="candlestick-charts.html">Open Hi Low Close and Candlestick Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="pieTest.html">Pie Charts and Options</a></div>*/
/*            <div class="example-link"><a class="example-link" href="pieTest4.html">Pie Charts and Options 2</a></div>*/
/*            <div class="example-link"><a class="example-link" href="pieChartsEnhancedLegend.html">Pie Charts with Enhanced Legend Renderer</a></div>*/
/*            <div class="example-link"><a class="example-link" href="pie-donut-charts.html">Pie and Donut Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="selectorSyntax.html">Plot Creation with jQuery Selectors</a></div>*/
/*            <div class="example-link"><a class="example-link" href="zooming.html">Plot Zooming and Cursor Control</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_pdf.html">Probability Density Function Chart</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_pyramid_by_age.html">Pyramid Chart By Age</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_pyramid.html">Pyramid Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_pyramid2.html">Pyramid Charts 2</a></div>*/
/*            <div class="example-link"><a class="example-link" href="kcp_quintiles.html">Quintile Pyramid Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="resizablePlot.html">Resizable Plots</a></div>*/
/*            <div class="example-link"><a class="example-link" href="rotated-tick-labels.html">Rotated Labels and Font Styling</a></div>*/
/*            <div class="example-link"><a class="example-link" href="smoothedLine.html">Smoothed Lines</a></div>*/
/*            <div class="example-link"><a class="example-link" href="step-charts.html">Step Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="bar-charts.html">Vertical and Horizontal Bar Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="waterfall.html">Waterfall Charts</a></div>*/
/*            <div class="example-link"><a class="example-link" href="waterfall2.html">Waterfall Charts 2</a></div>*/
/*            <div class="example-link"><a class="example-link" href="zoomOptions.html">Zoom Options</a></div>*/
/*            <div class="example-link"><a class="example-link" href="zoomProxy.html">Zoom Proxy - Control one plot from another</a></div>*/
/*            <div class="example-link"><a class="example-link" href="zoom1.html">Zooming</a></div>*/
/*            <div class="example-link"><a class="example-link" href="dateAxisLogAxisZooming.html">Zooming with Date and Log Axes</a></div>*/
/* */
/*          </div>*/
/*                </div>*/
/*     </div>*/
/*     <script type="text/javascript" src="example.min.js"></script>*/
/* */
/* </body>*/
/* */
/* */
/* </html>*/
