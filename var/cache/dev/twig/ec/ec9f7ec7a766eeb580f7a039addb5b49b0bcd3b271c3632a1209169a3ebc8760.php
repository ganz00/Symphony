<?php

/* @css/jquery.jqplot/examples/mekkoCharts.html */
class __TwigTemplate_0c7e5fdc7bbef439e4e7b91414dbc5051e4118dd51cb0c47a49179f8af4d86b6 extends Twig_Template
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
        $__internal_ae79236cc8b04d1b5c2ce8cef72173511ca930fd401f6d2c1397d480a9110dab = $this->env->getExtension("native_profiler");
        $__internal_ae79236cc8b04d1b5c2ce8cef72173511ca930fd401f6d2c1397d480a9110dab->enter($__internal_ae79236cc8b04d1b5c2ce8cef72173511ca930fd401f6d2c1397d480a9110dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/mekkoCharts.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Mekko Charts</title>

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
  <style type=\"text/css\" media=\"screen\">
    body {
        margin: 15px;
        font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
    }
    
    p {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    
    .jqplot-target {
        margin: 60px;
    }
    
    pre {
        padding: 10px;
        background-color: #efead9;
        margin: 10px;
    }
    .jqplot-axis {
      font-size: 0.8em;
    }
    
    .jqplot-mekko-barLabel {
        font-size: 1em;
    }
    
    #chart2 .jqplot-axis {
        font-size: 0.7em;
    }
    
    #chart3 .jqplot-title {
        padding-bottom: 40px;
    }
  </style>
<p>Data is specified per bar in the chart.  You can specify data as an array of y values, or as an array of [label, value] pairs.  Note that labels are used only on the first series.  Labels on subsequent series are ignored:</p>
<pre>
bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];
bar2 = [15,6,9,13,6];
bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];
</pre>

  <p>If you want to place labels for each bar under the axis, you use the barLabels option on the axes.  The bar labels can be styled with the \".jqplot-mekko-barLabel\" css class.</p>
<pre>
barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];
axes:{xaxis:{barLabels:barLabels}}
</pre>

    <div id=\"chart1\" style=\"width:500px; height:300px;\"></div>
    
    <p>You can add a secondary x axes, and the tick spacing of the axes can be separately controlled with the \"tickMode\" option.  \"bar\" will produce tics at bar boundaries, \"even\" will produce evenly spaced ticks.  If you set the axes max greater than the sum of the data range (the maximum x value), the plot will be padded.  Note that you should set the max on both axes to the same value.</p>

<pre>
axes:{
    xaxis:{
        barLabels:barLabels,
        max: 175
    }, 
    x2axis:{
        show:true, 
        tickMode:'even', 
        max: 175
    }
}
</pre>

    <p>Here the borders between chart areas have been given a custom color using the \"borderColor\" option on the series renderer.</p>
    
<pre>
    seriesDefaults:{renderer:\$.jqplot.MekkoRenderer, rendererOptions: {borderColor: '#dddddd'}}
</pre>

    <p>Additionally, the legend can be placed \"outside\" (the default for a mekko chart) or \"inside\" of the grid area with the \"placement\" option on the legend renderer.</p>

<pre>
legend:{
    show:true, 
    rendererOptions:{placement: \"insideGrid\"}, 
    location:'e'
},
</pre>
    
    <div id=\"chart2\" style=\"width:500px; height:300px;\"></div>
    
    <p>Legend labels can be specified independently of the series with the \"labels\" option on the legend.  These will override any labels specified with the series. There are also options to control the number of rows and number of columns in the legend as well as placement.</p>
    
    <p>Here the legend is positioned to the \"north\" and set to render 1 row tall (number of columns determined automatically).  Note that an extra css specification was added to pad the bottom of the title of this chart to give room for the legend above the plot.</p>
    
<pre>
legendLabels = ['hotels', 'rides', 'buses', 'instruments', 'totes'];

legend:{
    show:true, 
    location: 'n',
    labels: legendLabels,
    rendererOptions:{numberRows: 1, placement: \"outside\"}
},    
</pre>

    <p>Also, the borders between the chart areas have been turned off with the \"showBorders: false\" option.</p>
    
<pre>
    seriesDefaults:{renderer:\$.jqplot.MekkoRenderer, rendererOptions: {showBorders: false}}
</pre>

    <div id=\"chart3\" style=\"width:500px; height:300px;\"></div>

<script type=\"text/javascript\" class=\"code\">
\$(document).ready(function(){
    var bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];
    var bar2 = [15,6,9,13,6];
    var bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];
    var barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];

    var plot1 = \$.jqplot('chart1', [bar1, bar2, bar3], {
        title: 'Revenue Breakdown per Character',
        seriesDefaults:{renderer:\$.jqplot.MekkoRenderer},
        legend:{show:true},
        axesDefaults:{
            renderer:\$.jqplot.MekkoAxisRenderer
        },
        axes:{
            xaxis:{ 
                barLabels:barLabels,
                tickOptions:{formatString:'\$%dM'}
            }
        }
    });
});
</script>

<script type=\"text/javascript\" class=\"code\">
\$(document).ready(function(){
    var bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];
    var bar2 = [15,6,9,13,6];
    var bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];
    var barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];

    var plot2 = \$.jqplot('chart2', [bar1, bar2, bar3], {
        title: 'Revenue Breakdown per Character',
        seriesDefaults:{renderer:\$.jqplot.MekkoRenderer, rendererOptions: {borderColor: '#dddddd'}},
        legend:{
            show:true, 
            rendererOptions:{placement: \"insideGrid\"}, 
            location:'e'
        },
        axesDefaults:{
            renderer:\$.jqplot.MekkoAxisRenderer, 
            tickOptions:{}
        },
        axes:{
            xaxis:{
                barLabels:barLabels,
\t\t\t\trendererOptions: {
\t\t\t\t    barLabelOptions: {
\t\t\t\t      angle: -35
\t\t\t\t    },
    \t\t\t\tbarLabelRenderer: \$.jqplot.CanvasAxisLabelRenderer
\t\t\t\t}, 
                max: 175,
                tickOptions:{formatString:'\$%dM'}
            }, 
            x2axis:{
                show:true, 
                tickMode:'even', 
                max: 175,
                tickOptions:{formatString:'\$%dM'}
            }
        }
    });
});
</script>

<script type=\"text/javascript\" class=\"code\">
\$(document).ready(function(){
    var bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];
    var bar2 = [15,6,9,13,6];
    var bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];
    var barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];

    var legendLabels = ['hotels', 'rides', 'buses', 'instruments', 'totes'];
    
    var plot3 = \$.jqplot('chart3', [bar1, bar2, bar3], {
        title: 'Revenue Breakdown per Character',
        seriesDefaults:{renderer:\$.jqplot.MekkoRenderer, rendererOptions: {showBorders: false}},
        legend:{
            show:true, 
            location: 'n',
            labels: legendLabels,
            rendererOptions:{numberRows: 1, placement: \"outside\"}
        },
        axesDefaults:{
            renderer:\$.jqplot.MekkoAxisRenderer, 
            tickOptions:{showGridline:false}
        },
        axes:{
            xaxis:{
                tickMode:\"bar\", 
                tickOptions:{formatString:'\$%dM'}
            }
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

  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.mekkoRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.mekkoAxisRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasTextRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasAxisLabelRenderer.min.js\"></script>

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
        
        $__internal_ae79236cc8b04d1b5c2ce8cef72173511ca930fd401f6d2c1397d480a9110dab->leave($__internal_ae79236cc8b04d1b5c2ce8cef72173511ca930fd401f6d2c1397d480a9110dab_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/mekkoCharts.html";
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
/*     <title>Mekko Charts</title>*/
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
/*   <style type="text/css" media="screen">*/
/*     body {*/
/*         margin: 15px;*/
/*         font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;*/
/*     }*/
/*     */
/*     p {*/
/*         margin-top: 20px;*/
/*         margin-bottom: 20px;*/
/*     }*/
/*     */
/*     .jqplot-target {*/
/*         margin: 60px;*/
/*     }*/
/*     */
/*     pre {*/
/*         padding: 10px;*/
/*         background-color: #efead9;*/
/*         margin: 10px;*/
/*     }*/
/*     .jqplot-axis {*/
/*       font-size: 0.8em;*/
/*     }*/
/*     */
/*     .jqplot-mekko-barLabel {*/
/*         font-size: 1em;*/
/*     }*/
/*     */
/*     #chart2 .jqplot-axis {*/
/*         font-size: 0.7em;*/
/*     }*/
/*     */
/*     #chart3 .jqplot-title {*/
/*         padding-bottom: 40px;*/
/*     }*/
/*   </style>*/
/* <p>Data is specified per bar in the chart.  You can specify data as an array of y values, or as an array of [label, value] pairs.  Note that labels are used only on the first series.  Labels on subsequent series are ignored:</p>*/
/* <pre>*/
/* bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];*/
/* bar2 = [15,6,9,13,6];*/
/* bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];*/
/* </pre>*/
/* */
/*   <p>If you want to place labels for each bar under the axis, you use the barLabels option on the axes.  The bar labels can be styled with the ".jqplot-mekko-barLabel" css class.</p>*/
/* <pre>*/
/* barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];*/
/* axes:{xaxis:{barLabels:barLabels}}*/
/* </pre>*/
/* */
/*     <div id="chart1" style="width:500px; height:300px;"></div>*/
/*     */
/*     <p>You can add a secondary x axes, and the tick spacing of the axes can be separately controlled with the "tickMode" option.  "bar" will produce tics at bar boundaries, "even" will produce evenly spaced ticks.  If you set the axes max greater than the sum of the data range (the maximum x value), the plot will be padded.  Note that you should set the max on both axes to the same value.</p>*/
/* */
/* <pre>*/
/* axes:{*/
/*     xaxis:{*/
/*         barLabels:barLabels,*/
/*         max: 175*/
/*     }, */
/*     x2axis:{*/
/*         show:true, */
/*         tickMode:'even', */
/*         max: 175*/
/*     }*/
/* }*/
/* </pre>*/
/* */
/*     <p>Here the borders between chart areas have been given a custom color using the "borderColor" option on the series renderer.</p>*/
/*     */
/* <pre>*/
/*     seriesDefaults:{renderer:$.jqplot.MekkoRenderer, rendererOptions: {borderColor: '#dddddd'}}*/
/* </pre>*/
/* */
/*     <p>Additionally, the legend can be placed "outside" (the default for a mekko chart) or "inside" of the grid area with the "placement" option on the legend renderer.</p>*/
/* */
/* <pre>*/
/* legend:{*/
/*     show:true, */
/*     rendererOptions:{placement: "insideGrid"}, */
/*     location:'e'*/
/* },*/
/* </pre>*/
/*     */
/*     <div id="chart2" style="width:500px; height:300px;"></div>*/
/*     */
/*     <p>Legend labels can be specified independently of the series with the "labels" option on the legend.  These will override any labels specified with the series. There are also options to control the number of rows and number of columns in the legend as well as placement.</p>*/
/*     */
/*     <p>Here the legend is positioned to the "north" and set to render 1 row tall (number of columns determined automatically).  Note that an extra css specification was added to pad the bottom of the title of this chart to give room for the legend above the plot.</p>*/
/*     */
/* <pre>*/
/* legendLabels = ['hotels', 'rides', 'buses', 'instruments', 'totes'];*/
/* */
/* legend:{*/
/*     show:true, */
/*     location: 'n',*/
/*     labels: legendLabels,*/
/*     rendererOptions:{numberRows: 1, placement: "outside"}*/
/* },    */
/* </pre>*/
/* */
/*     <p>Also, the borders between the chart areas have been turned off with the "showBorders: false" option.</p>*/
/*     */
/* <pre>*/
/*     seriesDefaults:{renderer:$.jqplot.MekkoRenderer, rendererOptions: {showBorders: false}}*/
/* </pre>*/
/* */
/*     <div id="chart3" style="width:500px; height:300px;"></div>*/
/* */
/* <script type="text/javascript" class="code">*/
/* $(document).ready(function(){*/
/*     var bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];*/
/*     var bar2 = [15,6,9,13,6];*/
/*     var bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];*/
/*     var barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];*/
/* */
/*     var plot1 = $.jqplot('chart1', [bar1, bar2, bar3], {*/
/*         title: 'Revenue Breakdown per Character',*/
/*         seriesDefaults:{renderer:$.jqplot.MekkoRenderer},*/
/*         legend:{show:true},*/
/*         axesDefaults:{*/
/*             renderer:$.jqplot.MekkoAxisRenderer*/
/*         },*/
/*         axes:{*/
/*             xaxis:{ */
/*                 barLabels:barLabels,*/
/*                 tickOptions:{formatString:'$%dM'}*/
/*             }*/
/*         }*/
/*     });*/
/* });*/
/* </script>*/
/* */
/* <script type="text/javascript" class="code">*/
/* $(document).ready(function(){*/
/*     var bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];*/
/*     var bar2 = [15,6,9,13,6];*/
/*     var bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];*/
/*     var barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];*/
/* */
/*     var plot2 = $.jqplot('chart2', [bar1, bar2, bar3], {*/
/*         title: 'Revenue Breakdown per Character',*/
/*         seriesDefaults:{renderer:$.jqplot.MekkoRenderer, rendererOptions: {borderColor: '#dddddd'}},*/
/*         legend:{*/
/*             show:true, */
/*             rendererOptions:{placement: "insideGrid"}, */
/*             location:'e'*/
/*         },*/
/*         axesDefaults:{*/
/*             renderer:$.jqplot.MekkoAxisRenderer, */
/*             tickOptions:{}*/
/*         },*/
/*         axes:{*/
/*             xaxis:{*/
/*                 barLabels:barLabels,*/
/* 				rendererOptions: {*/
/* 				    barLabelOptions: {*/
/* 				      angle: -35*/
/* 				    },*/
/*     				barLabelRenderer: $.jqplot.CanvasAxisLabelRenderer*/
/* 				}, */
/*                 max: 175,*/
/*                 tickOptions:{formatString:'$%dM'}*/
/*             }, */
/*             x2axis:{*/
/*                 show:true, */
/*                 tickMode:'even', */
/*                 max: 175,*/
/*                 tickOptions:{formatString:'$%dM'}*/
/*             }*/
/*         }*/
/*     });*/
/* });*/
/* </script>*/
/* */
/* <script type="text/javascript" class="code">*/
/* $(document).ready(function(){*/
/*     var bar1 = [['shirts', 8],['hats', 14],['shoes', 6],['gloves', 16],['dolls', 12]];*/
/*     var bar2 = [15,6,9,13,6];*/
/*     var bar3 = [['grumpy',4],['sneezy',2],['happy',7],['sleepy',9],['doc',7]];*/
/*     var barLabels = ['Mickey Mouse', 'Donald Duck', 'Goofy'];*/
/* */
/*     var legendLabels = ['hotels', 'rides', 'buses', 'instruments', 'totes'];*/
/*     */
/*     var plot3 = $.jqplot('chart3', [bar1, bar2, bar3], {*/
/*         title: 'Revenue Breakdown per Character',*/
/*         seriesDefaults:{renderer:$.jqplot.MekkoRenderer, rendererOptions: {showBorders: false}},*/
/*         legend:{*/
/*             show:true, */
/*             location: 'n',*/
/*             labels: legendLabels,*/
/*             rendererOptions:{numberRows: 1, placement: "outside"}*/
/*         },*/
/*         axesDefaults:{*/
/*             renderer:$.jqplot.MekkoAxisRenderer, */
/*             tickOptions:{showGridline:false}*/
/*         },*/
/*         axes:{*/
/*             xaxis:{*/
/*                 tickMode:"bar", */
/*                 tickOptions:{formatString:'$%dM'}*/
/*             }*/
/*         }*/
/*     });*/
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
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.mekkoRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.mekkoAxisRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasTextRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>*/
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
