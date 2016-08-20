<?php

/* @css/jquery.jqplot/examples/candlestick-charts.html */
class __TwigTemplate_619e466396bf33fa8422548e805293d08d8d4558518585797565694c064f7bdb extends Twig_Template
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
        $__internal_becbab8c85180042ebe9fec1e0cd41d8279f6d289aad5434b03311fda891e40b = $this->env->getExtension("native_profiler");
        $__internal_becbab8c85180042ebe9fec1e0cd41d8279f6d289aad5434b03311fda891e40b->enter($__internal_becbab8c85180042ebe9fec1e0cd41d8279f6d289aad5434b03311fda891e40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/candlestick-charts.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Open Hi Low Close and Candlestick Charts</title>

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

<p>OHLC, HLC and Candlestick charts are all created using the \$.jqplot.OHLCRenderer plugin.  The plots on this page make use of the highlighter plugin which shows a customized tooltip as the mouse moves over a data point.</p>
<div id=\"chart1\" style=\"height:250px; width:600px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>

<div id=\"chart2\" style=\"height:250px; width:600px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>

<p>The previous plots use the following data set.  jqPlot will parse most human readable date formats.  It is always safest, however, to pass a date in as a JavaScript timestamp rather than have jqPlot parse an arbitrary date string.</p>

<pre class=\"code prettyprint brush: js\"></pre>


<script class=\"code\" language=\"javascript\" type=\"text/javascript\">
\$(document).ready(function(){ 
  // Note, the ohlc data is specified below     
  var plot1 = \$.jqplot('chart1',[ohlc],{
    // use the y2 axis on the right of the plot 
    //rather than the y axis on the left.
    seriesDefaults:{yaxis:'y2axis'},
    axes: {
      xaxis: {
        renderer:\$.jqplot.DateAxisRenderer,
        tickOptions:{formatString:'%b %e'}, 
        // For date axes, we can specify ticks options as human 
        // readable dates.  You should be as specific as possible, 
        // however, and include a date and time since some 
        // browser treat dates without a time as UTC and some 
        // treat dates without time as local time.
        // Generally, if  a time is specified without a time zone,
        // the browser assumes the time zone of the client.
        min: \"09-01-2008 16:00\",
        max: \"06-22-2009 16:00\",
        tickInterval: \"6 weeks\"
      },
      y2axis: {
        tickOptions:{formatString:'\$%d'}
      }
    },
    series: [{renderer:\$.jqplot.OHLCRenderer}],
    highlighter: {
      show: true,
      showMarker:false,
      tooltipAxes: 'xy',
      yvalues: 4,
      // You can customize the tooltip format string of the highlighter
      // to include any arbitrary text or html and use format string
      // placeholders (%s here) to represent x and y values.
      formatString:'<table class=\"jqplot-highlighter\"> \\
      <tr><td>date:</td><td>%s</td></tr> \\
      <tr><td>open:</td><td>%s</td></tr> \\
      <tr><td>hi:</td><td>%s</td></tr> \\
      <tr><td>low:</td><td>%s</td></tr> \\
      <tr><td>close:</td><td>%s</td></tr></table>'
    }
  });
    
});
</script>

<script class=\"code\" language=\"javascript\" type=\"text/javascript\">
\$(document).ready(function(){            
  var plot2 = \$.jqplot('chart2',[ohlc],{
    seriesDefaults:{yaxis:'y2axis'},
    axes: {
      xaxis: {
        renderer:\$.jqplot.DateAxisRenderer,
        tickOptions:{formatString:'%b %e'}, 
        min: \"09-01-2008\",
        max: \"06-22-2009\",
        tickInterval: \"6 weeks\"
      },
      y2axis: {
        tickOptions:{formatString:'\$%d'}
      }
    },
    // To make a candle stick chart, set the \"candleStick\" option to true.
    series: [
      {
        renderer:\$.jqplot.OHLCRenderer, 
        rendererOptions:{ candleStick:true }
      }
    ],
    highlighter: {
      show: true,
      showMarker:false,
      tooltipAxes: 'xy',
      yvalues: 4,
      formatString:'<table class=\"jqplot-highlighter\"> \\
      <tr><td>date:</td><td>%s</td></tr> \\
      <tr><td>open:</td><td>%s</td></tr> \\
      <tr><td>hi:</td><td>%s</td></tr> \\
      <tr><td>low:</td><td>%s</td></tr> \\
      <tr><td>close:</td><td>%s</td></tr></table>'
    }
  });
    
});
</script>


<script class=\"code\" language=\"javascript\" type=\"text/javascript\">
ohlc = [
  ['06/15/2009 16:00:00', 136.01, 139.5, 134.53, 139.48],
  ['06/08/2009 16:00:00', 143.82, 144.56, 136.04, 136.97],
  ['06/01/2009 16:00:00', 136.47, 146.4, 136, 144.67],
  ['05/26/2009 16:00:00', 124.76, 135.9, 124.55, 135.81],
  ['05/18/2009 16:00:00', 123.73, 129.31, 121.57, 122.5],
  ['05/11/2009 16:00:00', 127.37, 130.96, 119.38, 122.42],
  ['05/04/2009 16:00:00', 128.24, 133.5, 126.26, 129.19],
  ['04/27/2009 16:00:00', 122.9, 127.95, 122.66, 127.24],
  ['04/20/2009 16:00:00', 121.73, 127.2, 118.6, 123.9],
  ['04/13/2009 16:00:00', 120.01, 124.25, 115.76, 123.42],
  ['04/06/2009 16:00:00', 114.94, 120, 113.28, 119.57],
  ['03/30/2009 16:00:00', 104.51, 116.13, 102.61, 115.99],
  ['03/23/2009 16:00:00', 102.71, 109.98, 101.75, 106.85],
  ['03/16/2009 16:00:00', 96.53, 103.48, 94.18, 101.59],
  ['03/09/2009 16:00:00', 84.18, 97.2, 82.57, 95.93],
  ['03/02/2009 16:00:00', 88.12, 92.77, 82.33, 85.3],
  ['02/23/2009 16:00:00', 91.65, 92.92, 86.51, 89.31],
  ['02/17/2009 16:00:00', 96.87, 97.04, 89, 91.2],
  ['02/09/2009 16:00:00', 100, 103, 95.77, 99.16],
  ['02/02/2009 16:00:00', 89.1, 100, 88.9, 99.72],
  ['01/26/2009 16:00:00', 88.86, 95, 88.3, 90.13],
  ['01/20/2009 16:00:00', 81.93, 90, 78.2, 88.36],
  ['01/12/2009 16:00:00', 90.46, 90.99, 80.05, 82.33],
  ['01/05/2009 16:00:00', 93.17, 97.17, 90.04, 90.58],
  ['12/29/2008 16:00:00', 86.52, 91.04, 84.72, 90.75],
  ['12/22/2008 16:00:00', 90.02, 90.03, 84.55, 85.81],
  ['12/15/2008 16:00:00', 95.99, 96.48, 88.02, 90],
  ['12/08/2008 16:00:00', 97.28, 103.6, 92.53, 98.27],
  ['12/01/2008 16:00:00', 91.3, 96.23, 86.5, 94],
  ['11/24/2008 16:00:00', 85.21, 95.25, 84.84, 92.67],
  ['11/17/2008 16:00:00', 88.48, 91.58, 79.14, 82.58],    
  ['11/10/2008 16:00:00', 100.17, 100.4, 86.02, 90.24],
  ['11/03/2008 16:00:00', 105.93, 111.79, 95.72, 98.24],
  ['10/27/2008 16:00:00', 95.07, 112.19, 91.86, 107.59],
  ['10/20/2008 16:00:00', 99.78, 101.25, 90.11, 96.38],
  ['10/13/2008 16:00:00', 104.55, 116.4, 85.89, 97.4],
  ['10/06/2008 16:00:00', 91.96, 101.5, 85, 96.8],
  ['09/29/2008 16:00:00', 119.62, 119.68, 94.65, 97.07],
  ['09/22/2008 16:00:00', 139.94, 140.25, 123, 128.24],
  ['09/15/2008 16:00:00', 142.03, 147.69, 120.68, 140.91]
];
</script>

<!-- End example scripts -->

<!-- Don't touch this! -->


    <script class=\"include\" type=\"text/javascript\" src=\"../jquery.jqplot.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shCore.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shBrushJScript.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shBrushXml.min.js\"></script>
<!-- End Don't touch this! -->

<!-- Additional plugins go here -->

    <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.dateAxisRenderer.min.js\"></script>
    <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.ohlcRenderer.min.js\"></script>
    <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.highlighter.min.js\"></script>

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
        
        $__internal_becbab8c85180042ebe9fec1e0cd41d8279f6d289aad5434b03311fda891e40b->leave($__internal_becbab8c85180042ebe9fec1e0cd41d8279f6d289aad5434b03311fda891e40b_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/candlestick-charts.html";
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
/*     <title>Open Hi Low Close and Candlestick Charts</title>*/
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
/* <p>OHLC, HLC and Candlestick charts are all created using the $.jqplot.OHLCRenderer plugin.  The plots on this page make use of the highlighter plugin which shows a customized tooltip as the mouse moves over a data point.</p>*/
/* <div id="chart1" style="height:250px; width:600px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* <div id="chart2" style="height:250px; width:600px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* <p>The previous plots use the following data set.  jqPlot will parse most human readable date formats.  It is always safest, however, to pass a date in as a JavaScript timestamp rather than have jqPlot parse an arbitrary date string.</p>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* */
/* <script class="code" language="javascript" type="text/javascript">*/
/* $(document).ready(function(){ */
/*   // Note, the ohlc data is specified below     */
/*   var plot1 = $.jqplot('chart1',[ohlc],{*/
/*     // use the y2 axis on the right of the plot */
/*     //rather than the y axis on the left.*/
/*     seriesDefaults:{yaxis:'y2axis'},*/
/*     axes: {*/
/*       xaxis: {*/
/*         renderer:$.jqplot.DateAxisRenderer,*/
/*         tickOptions:{formatString:'%b %e'}, */
/*         // For date axes, we can specify ticks options as human */
/*         // readable dates.  You should be as specific as possible, */
/*         // however, and include a date and time since some */
/*         // browser treat dates without a time as UTC and some */
/*         // treat dates without time as local time.*/
/*         // Generally, if  a time is specified without a time zone,*/
/*         // the browser assumes the time zone of the client.*/
/*         min: "09-01-2008 16:00",*/
/*         max: "06-22-2009 16:00",*/
/*         tickInterval: "6 weeks"*/
/*       },*/
/*       y2axis: {*/
/*         tickOptions:{formatString:'$%d'}*/
/*       }*/
/*     },*/
/*     series: [{renderer:$.jqplot.OHLCRenderer}],*/
/*     highlighter: {*/
/*       show: true,*/
/*       showMarker:false,*/
/*       tooltipAxes: 'xy',*/
/*       yvalues: 4,*/
/*       // You can customize the tooltip format string of the highlighter*/
/*       // to include any arbitrary text or html and use format string*/
/*       // placeholders (%s here) to represent x and y values.*/
/*       formatString:'<table class="jqplot-highlighter"> \*/
/*       <tr><td>date:</td><td>%s</td></tr> \*/
/*       <tr><td>open:</td><td>%s</td></tr> \*/
/*       <tr><td>hi:</td><td>%s</td></tr> \*/
/*       <tr><td>low:</td><td>%s</td></tr> \*/
/*       <tr><td>close:</td><td>%s</td></tr></table>'*/
/*     }*/
/*   });*/
/*     */
/* });*/
/* </script>*/
/* */
/* <script class="code" language="javascript" type="text/javascript">*/
/* $(document).ready(function(){            */
/*   var plot2 = $.jqplot('chart2',[ohlc],{*/
/*     seriesDefaults:{yaxis:'y2axis'},*/
/*     axes: {*/
/*       xaxis: {*/
/*         renderer:$.jqplot.DateAxisRenderer,*/
/*         tickOptions:{formatString:'%b %e'}, */
/*         min: "09-01-2008",*/
/*         max: "06-22-2009",*/
/*         tickInterval: "6 weeks"*/
/*       },*/
/*       y2axis: {*/
/*         tickOptions:{formatString:'$%d'}*/
/*       }*/
/*     },*/
/*     // To make a candle stick chart, set the "candleStick" option to true.*/
/*     series: [*/
/*       {*/
/*         renderer:$.jqplot.OHLCRenderer, */
/*         rendererOptions:{ candleStick:true }*/
/*       }*/
/*     ],*/
/*     highlighter: {*/
/*       show: true,*/
/*       showMarker:false,*/
/*       tooltipAxes: 'xy',*/
/*       yvalues: 4,*/
/*       formatString:'<table class="jqplot-highlighter"> \*/
/*       <tr><td>date:</td><td>%s</td></tr> \*/
/*       <tr><td>open:</td><td>%s</td></tr> \*/
/*       <tr><td>hi:</td><td>%s</td></tr> \*/
/*       <tr><td>low:</td><td>%s</td></tr> \*/
/*       <tr><td>close:</td><td>%s</td></tr></table>'*/
/*     }*/
/*   });*/
/*     */
/* });*/
/* </script>*/
/* */
/* */
/* <script class="code" language="javascript" type="text/javascript">*/
/* ohlc = [*/
/*   ['06/15/2009 16:00:00', 136.01, 139.5, 134.53, 139.48],*/
/*   ['06/08/2009 16:00:00', 143.82, 144.56, 136.04, 136.97],*/
/*   ['06/01/2009 16:00:00', 136.47, 146.4, 136, 144.67],*/
/*   ['05/26/2009 16:00:00', 124.76, 135.9, 124.55, 135.81],*/
/*   ['05/18/2009 16:00:00', 123.73, 129.31, 121.57, 122.5],*/
/*   ['05/11/2009 16:00:00', 127.37, 130.96, 119.38, 122.42],*/
/*   ['05/04/2009 16:00:00', 128.24, 133.5, 126.26, 129.19],*/
/*   ['04/27/2009 16:00:00', 122.9, 127.95, 122.66, 127.24],*/
/*   ['04/20/2009 16:00:00', 121.73, 127.2, 118.6, 123.9],*/
/*   ['04/13/2009 16:00:00', 120.01, 124.25, 115.76, 123.42],*/
/*   ['04/06/2009 16:00:00', 114.94, 120, 113.28, 119.57],*/
/*   ['03/30/2009 16:00:00', 104.51, 116.13, 102.61, 115.99],*/
/*   ['03/23/2009 16:00:00', 102.71, 109.98, 101.75, 106.85],*/
/*   ['03/16/2009 16:00:00', 96.53, 103.48, 94.18, 101.59],*/
/*   ['03/09/2009 16:00:00', 84.18, 97.2, 82.57, 95.93],*/
/*   ['03/02/2009 16:00:00', 88.12, 92.77, 82.33, 85.3],*/
/*   ['02/23/2009 16:00:00', 91.65, 92.92, 86.51, 89.31],*/
/*   ['02/17/2009 16:00:00', 96.87, 97.04, 89, 91.2],*/
/*   ['02/09/2009 16:00:00', 100, 103, 95.77, 99.16],*/
/*   ['02/02/2009 16:00:00', 89.1, 100, 88.9, 99.72],*/
/*   ['01/26/2009 16:00:00', 88.86, 95, 88.3, 90.13],*/
/*   ['01/20/2009 16:00:00', 81.93, 90, 78.2, 88.36],*/
/*   ['01/12/2009 16:00:00', 90.46, 90.99, 80.05, 82.33],*/
/*   ['01/05/2009 16:00:00', 93.17, 97.17, 90.04, 90.58],*/
/*   ['12/29/2008 16:00:00', 86.52, 91.04, 84.72, 90.75],*/
/*   ['12/22/2008 16:00:00', 90.02, 90.03, 84.55, 85.81],*/
/*   ['12/15/2008 16:00:00', 95.99, 96.48, 88.02, 90],*/
/*   ['12/08/2008 16:00:00', 97.28, 103.6, 92.53, 98.27],*/
/*   ['12/01/2008 16:00:00', 91.3, 96.23, 86.5, 94],*/
/*   ['11/24/2008 16:00:00', 85.21, 95.25, 84.84, 92.67],*/
/*   ['11/17/2008 16:00:00', 88.48, 91.58, 79.14, 82.58],    */
/*   ['11/10/2008 16:00:00', 100.17, 100.4, 86.02, 90.24],*/
/*   ['11/03/2008 16:00:00', 105.93, 111.79, 95.72, 98.24],*/
/*   ['10/27/2008 16:00:00', 95.07, 112.19, 91.86, 107.59],*/
/*   ['10/20/2008 16:00:00', 99.78, 101.25, 90.11, 96.38],*/
/*   ['10/13/2008 16:00:00', 104.55, 116.4, 85.89, 97.4],*/
/*   ['10/06/2008 16:00:00', 91.96, 101.5, 85, 96.8],*/
/*   ['09/29/2008 16:00:00', 119.62, 119.68, 94.65, 97.07],*/
/*   ['09/22/2008 16:00:00', 139.94, 140.25, 123, 128.24],*/
/*   ['09/15/2008 16:00:00', 142.03, 147.69, 120.68, 140.91]*/
/* ];*/
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
/*     <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.dateAxisRenderer.min.js"></script>*/
/*     <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.ohlcRenderer.min.js"></script>*/
/*     <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.highlighter.min.js"></script>*/
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
