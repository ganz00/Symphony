<?php

/* @css/jquery.jqplot/examples/bubble-plots.html */
class __TwigTemplate_f155ccf164a168ed2c279dc081d08df82f893ffe763d61981f3e7cea7804bfdb extends Twig_Template
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
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Bubble Plots</title>

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

  <style type=\"text/css\">
    
    .note {
        font-size: 0.8em;
    }
    
    #tooltip1b {
        font-size: 12px;
        color: rgb(15%, 15%, 15%);
        padding:2px;
        background-color: rgba(95%, 95%, 95%, 0.8);
    }
    
    #legend1b {
        font-size: 12px;
        border: 1px solid #cdcdcd;
        border-collapse: collapse;
    }
    #legend1b td, #legend1b th {
        border: 1px solid #cdcdcd;
        padding: 1px 4px;
    }


  </style>

<p>Bubble charts represent 3 dimensional data.  First, a basic bubble chart with the \"bubbleGradients: true\" option to specify gradient fills.  Radial gradients are not supported in IE version before IE 9 and will be automatically disabled.</p>  

<div id=\"chart1\" style=\"height:340px; width:460px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>


<p>Data is passed in to a bubble chart as a series of [x, y, radius, &lt;label or object&gt;].  The optional fourth element of the data point can either be either a label string or an object having 'label' and/or 'color' properties to assign to the bubble.</p>

<p>By default, all bubbles are scaled according to the size of the plot area.  The radius value in the data point will be adjusted to fit the bubbles in the chart.  If the \"autoscaleBubbles\" option is set to false, the radius value in the data will be taken as a literal pixel value for the radius of the points.</p>

<p>Next are some basic customizations of bubble appearance with the \"bubbleAlpha\" and \"highlightAlpha\" options.</p>

<div id=\"chart2\" style=\"height:340px; width:460px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>


<p>In the following example, display of a custom toolip and highlighting of a custom table legend is performed by binding to the \"jqplotDataHighlight\" and \"jqplotDataUnhighlight\" events.  The custom legend table here is dynamically created with a few lines of jQuery (O.K., it could be done in one line) based on the data array of the plot.</p>

<div style=\"position:absolute;z-index:99;display:none;\" id=\"tooltip1b\"></div>

<table style=\"margin-left:auto; margin-right:auto;\"><tr>
    <td><div id=\"chart1b\" style=\"width:460px;height:340px;\"></div></td>
    <td><div style=\"height:340px;\"><table id=\"legend1b\"><tr><th>Company</th><th>R Value</th></tr></table></div></td>
</tr></table>

<pre class=\"code prettyprint brush: js\"></pre>


<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){

    var arr = [[11, 123, 1236, \"Acura\"], [45, 92, 1067, \"Alfa Romeo\"], 
    [24, 104, 1176, \"AM General\"], [50, 23, 610, \"Aston Martin Lagonda\"], 
    [18, 17, 539, \"Audi\"], [7, 89, 864, \"BMW\"], [2, 13, 1026, \"Bugatti\"]];
    
    var plot1 = \$.jqplot('chart1',[arr],{
        title: 'Bubble Chart with Gradient Fills',
        seriesDefaults:{
            renderer: \$.jqplot.BubbleRenderer,
            rendererOptions: {
                bubbleGradients: true
            },
            shadow: true
        }
    });
});
</script>
  
<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
    
    var arr = [[11, 123, 1236, \"Acura\"], [45, 92, 1067, \"Alfa Romeo\"], 
    [24, 104, 1176, \"AM General\"], [50, 23, 610, \"Aston Martin Lagonda\"], 
    [18, 17, 539, \"Audi\"], [7, 89, 864, \"BMW\"], [2, 13, 1026, \"Bugatti\"]];
    
    var plot2 = \$.jqplot('chart2',[arr],{
        title: 'Transparent Bubbles',
        seriesDefaults:{
            renderer: \$.jqplot.BubbleRenderer,
            rendererOptions: {
                bubbleAlpha: 0.6,
                highlightAlpha: 0.8
            },
            shadow: true,
            shadowAlpha: 0.05
        }
    });    
});
</script>

<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  
  var arr = [[11, 123, 1236, \"Acura\"], [45, 92, 1067, \"Alfa Romeo\"], 
  [24, 104, 1176, \"AM General\"], [50, 23, 610, \"Aston Martin Lagonda\"], 
  [18, 17, 539, \"Audi\"], [7, 89, 864, \"BMW\"], [2, 13, 1026, \"Bugatti\"]];
  
  var plot1b = \$.jqplot('chart1b',[arr],{
    title: 'Tooltip and Custom Legend Highlighting',
    seriesDefaults:{
      renderer: \$.jqplot.BubbleRenderer,
      rendererOptions: {
        bubbleAlpha: 0.6,
        highlightAlpha: 0.8,
        showLabels: false
      },
      shadow: true,
      shadowAlpha: 0.05
    }
  });
  
  // Legend is a simple table in the html.
  // Dynamically populate it with the labels from each data value.
  \$.each(arr, function(index, val) {
    \$('#legend1b').append('<tr><td>'+val[3]+'</td><td>'+val[2]+'</td></tr>');
  });
  
  // Now bind function to the highlight event to show the tooltip
  // and highlight the row in the legend. 
  \$('#chart1b').bind('jqplotDataHighlight', 
    function (ev, seriesIndex, pointIndex, data, radius) {    
      var chart_left = \$('#chart1b').offset().left,
        chart_top = \$('#chart1b').offset().top,
        x = plot1b.axes.xaxis.u2p(data[0]),  // convert x axis unita to pixels
        y = plot1b.axes.yaxis.u2p(data[1]);  // convert y axis units to pixels
      var color = 'rgb(50%,50%,100%)';
      \$('#tooltip1b').css({left:chart_left+x+radius+5, top:chart_top+y});
      \$('#tooltip1b').html('<span style=\"font-size:14px;font-weight:bold;color:' + 
      color + ';\">' + data[3] + '</span><br />' + 'x: ' + data[0] + 
      '<br />' + 'y: ' + data[1] + '<br />' + 'r: ' + data[2]);
      \$('#tooltip1b').show();
      \$('#legend1b tr').css('background-color', '#ffffff');
      \$('#legend1b tr').eq(pointIndex+1).css('background-color', color);
    });
  
  // Bind a function to the unhighlight event to clean up after highlighting.
  \$('#chart1b').bind('jqplotDataUnhighlight', 
      function (ev, seriesIndex, pointIndex, data) {
          \$('#tooltip1b').empty();
          \$('#tooltip1b').hide();
          \$('#legend1b tr').css('background-color', '#ffffff');
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

    <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.bubbleRenderer.min.js\"></script>

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
    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/bubble-plots.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* <head>*/
/* */
/*     <title>Bubble Plots</title>*/
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
/*   <style type="text/css">*/
/*     */
/*     .note {*/
/*         font-size: 0.8em;*/
/*     }*/
/*     */
/*     #tooltip1b {*/
/*         font-size: 12px;*/
/*         color: rgb(15%, 15%, 15%);*/
/*         padding:2px;*/
/*         background-color: rgba(95%, 95%, 95%, 0.8);*/
/*     }*/
/*     */
/*     #legend1b {*/
/*         font-size: 12px;*/
/*         border: 1px solid #cdcdcd;*/
/*         border-collapse: collapse;*/
/*     }*/
/*     #legend1b td, #legend1b th {*/
/*         border: 1px solid #cdcdcd;*/
/*         padding: 1px 4px;*/
/*     }*/
/* */
/* */
/*   </style>*/
/* */
/* <p>Bubble charts represent 3 dimensional data.  First, a basic bubble chart with the "bubbleGradients: true" option to specify gradient fills.  Radial gradients are not supported in IE version before IE 9 and will be automatically disabled.</p>  */
/* */
/* <div id="chart1" style="height:340px; width:460px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* */
/* <p>Data is passed in to a bubble chart as a series of [x, y, radius, &lt;label or object&gt;].  The optional fourth element of the data point can either be either a label string or an object having 'label' and/or 'color' properties to assign to the bubble.</p>*/
/* */
/* <p>By default, all bubbles are scaled according to the size of the plot area.  The radius value in the data point will be adjusted to fit the bubbles in the chart.  If the "autoscaleBubbles" option is set to false, the radius value in the data will be taken as a literal pixel value for the radius of the points.</p>*/
/* */
/* <p>Next are some basic customizations of bubble appearance with the "bubbleAlpha" and "highlightAlpha" options.</p>*/
/* */
/* <div id="chart2" style="height:340px; width:460px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* */
/* <p>In the following example, display of a custom toolip and highlighting of a custom table legend is performed by binding to the "jqplotDataHighlight" and "jqplotDataUnhighlight" events.  The custom legend table here is dynamically created with a few lines of jQuery (O.K., it could be done in one line) based on the data array of the plot.</p>*/
/* */
/* <div style="position:absolute;z-index:99;display:none;" id="tooltip1b"></div>*/
/* */
/* <table style="margin-left:auto; margin-right:auto;"><tr>*/
/*     <td><div id="chart1b" style="width:460px;height:340px;"></div></td>*/
/*     <td><div style="height:340px;"><table id="legend1b"><tr><th>Company</th><th>R Value</th></tr></table></div></td>*/
/* </tr></table>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/* */
/*     var arr = [[11, 123, 1236, "Acura"], [45, 92, 1067, "Alfa Romeo"], */
/*     [24, 104, 1176, "AM General"], [50, 23, 610, "Aston Martin Lagonda"], */
/*     [18, 17, 539, "Audi"], [7, 89, 864, "BMW"], [2, 13, 1026, "Bugatti"]];*/
/*     */
/*     var plot1 = $.jqplot('chart1',[arr],{*/
/*         title: 'Bubble Chart with Gradient Fills',*/
/*         seriesDefaults:{*/
/*             renderer: $.jqplot.BubbleRenderer,*/
/*             rendererOptions: {*/
/*                 bubbleGradients: true*/
/*             },*/
/*             shadow: true*/
/*         }*/
/*     });*/
/* });*/
/* </script>*/
/*   */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*     */
/*     var arr = [[11, 123, 1236, "Acura"], [45, 92, 1067, "Alfa Romeo"], */
/*     [24, 104, 1176, "AM General"], [50, 23, 610, "Aston Martin Lagonda"], */
/*     [18, 17, 539, "Audi"], [7, 89, 864, "BMW"], [2, 13, 1026, "Bugatti"]];*/
/*     */
/*     var plot2 = $.jqplot('chart2',[arr],{*/
/*         title: 'Transparent Bubbles',*/
/*         seriesDefaults:{*/
/*             renderer: $.jqplot.BubbleRenderer,*/
/*             rendererOptions: {*/
/*                 bubbleAlpha: 0.6,*/
/*                 highlightAlpha: 0.8*/
/*             },*/
/*             shadow: true,*/
/*             shadowAlpha: 0.05*/
/*         }*/
/*     });    */
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   */
/*   var arr = [[11, 123, 1236, "Acura"], [45, 92, 1067, "Alfa Romeo"], */
/*   [24, 104, 1176, "AM General"], [50, 23, 610, "Aston Martin Lagonda"], */
/*   [18, 17, 539, "Audi"], [7, 89, 864, "BMW"], [2, 13, 1026, "Bugatti"]];*/
/*   */
/*   var plot1b = $.jqplot('chart1b',[arr],{*/
/*     title: 'Tooltip and Custom Legend Highlighting',*/
/*     seriesDefaults:{*/
/*       renderer: $.jqplot.BubbleRenderer,*/
/*       rendererOptions: {*/
/*         bubbleAlpha: 0.6,*/
/*         highlightAlpha: 0.8,*/
/*         showLabels: false*/
/*       },*/
/*       shadow: true,*/
/*       shadowAlpha: 0.05*/
/*     }*/
/*   });*/
/*   */
/*   // Legend is a simple table in the html.*/
/*   // Dynamically populate it with the labels from each data value.*/
/*   $.each(arr, function(index, val) {*/
/*     $('#legend1b').append('<tr><td>'+val[3]+'</td><td>'+val[2]+'</td></tr>');*/
/*   });*/
/*   */
/*   // Now bind function to the highlight event to show the tooltip*/
/*   // and highlight the row in the legend. */
/*   $('#chart1b').bind('jqplotDataHighlight', */
/*     function (ev, seriesIndex, pointIndex, data, radius) {    */
/*       var chart_left = $('#chart1b').offset().left,*/
/*         chart_top = $('#chart1b').offset().top,*/
/*         x = plot1b.axes.xaxis.u2p(data[0]),  // convert x axis unita to pixels*/
/*         y = plot1b.axes.yaxis.u2p(data[1]);  // convert y axis units to pixels*/
/*       var color = 'rgb(50%,50%,100%)';*/
/*       $('#tooltip1b').css({left:chart_left+x+radius+5, top:chart_top+y});*/
/*       $('#tooltip1b').html('<span style="font-size:14px;font-weight:bold;color:' + */
/*       color + ';">' + data[3] + '</span><br />' + 'x: ' + data[0] + */
/*       '<br />' + 'y: ' + data[1] + '<br />' + 'r: ' + data[2]);*/
/*       $('#tooltip1b').show();*/
/*       $('#legend1b tr').css('background-color', '#ffffff');*/
/*       $('#legend1b tr').eq(pointIndex+1).css('background-color', color);*/
/*     });*/
/*   */
/*   // Bind a function to the unhighlight event to clean up after highlighting.*/
/*   $('#chart1b').bind('jqplotDataUnhighlight', */
/*       function (ev, seriesIndex, pointIndex, data) {*/
/*           $('#tooltip1b').empty();*/
/*           $('#tooltip1b').hide();*/
/*           $('#legend1b tr').css('background-color', '#ffffff');*/
/*       });*/
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
/*     <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.bubbleRenderer.min.js"></script>*/
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
