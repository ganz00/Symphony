<?php

/* @css/jquery.jqplot/examples/zoomOptions.html */
class __TwigTemplate_d5397c50d67a30c6255af956533696877600763635419f9fa1928861f15a6b1b extends Twig_Template
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

    <title>Zoom Options</title>

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
    .jqplot-axis {
      font-size: 0.85em;
    }
    .jqplot-axis{
      font-size: 0.75em;
    }
  </style>

<p>Zooming has been enhanced to maintain plot zoom while the mouse moves over the entire document, not just the plot.  Two new options have been added to the cursor plugin to further enhance zooming:</p>

<dl>
   <dt>constrainOutsideZoom</dt>
    <dd>True to limit the resulting zoom area to the edges of grid, even if the cursor is outside of the grid.  That is, you can't expand the axis ranges by moving the cursor outside of the plot area when this is true.  If set to false, you can effectively zoom out by mousing outside of the plot region.  Default false.</dd>
    <dt>showTooltipOutsideZoom</dt>
    <dd>True to keep showing and updating the tooltip even when the cursor is outside of the plot area.  Not applicable if zoomOutsidePlot is false.  Default false</dd>
</dl>

<p>The first plot demonstrates the default functionality where you can move the mouse off of the plot while zooming but the actual area zoomed will not extend beyond the axes.</p>
    <div id=\"chart1\" style=\"margin-top:20px; margin-left:20px; width:400px; height:200px;\"></div>
    <div style=\"padding-top:20px\"><button value=\"reset\" type=\"button\" onclick=\"plot1.resetZoom();\">Reset Zoom</button></div>

    <pre class=\"code brush:js\"></pre>

<p>The second plot sets constrainOutsideZoom to false, so zooming will not only function when the mouse is outside of the plot, but the zoom range will be extended to the mouse position outside of the grid.</p>
    <div id=\"chart2\" style=\"margin-top:20px; margin-left:20px; width:400px; height:200px;\"></div>
    <div style=\"padding-top:20px\"><button value=\"reset\" type=\"button\" onclick=\"plot2.resetZoom();\">Reset Zoom</button></div>

    <pre class=\"code brush:js\"></pre>

<p>The third plot is like the third, but showTooltipOutsideZoom is true and the tooltip is set to follow the mouse, so you have an idea of what your range is while zooming.</p>
    <div id=\"chart3\" style=\"margin-top:20px; margin-left:20px; width:400px; height:200px;\"></div>
    <div style=\"padding-top:20px\"><button value=\"reset\" type=\"button\" onclick=\"plot3.resetZoom();\">Reset Zoom</button></div>

    <pre class=\"code brush:js\"></pre>


  <script type=\"text/javascript\" class=\"code\">
  \$(document).ready(function(){
      // Enable plugins like cursor and highlighter by default.
      \$.jqplot.config.enablePlugins = true;
      // For these examples, don't show the to image button.
      \$.jqplot._noToImageButton = true;

    goog = [[\"6/22/2009\",425.32],[\"6/15/2009\",420.09],[\"6/8/2009\",424.84],[\"6/1/2009\",444.32],[\"5/26/2009\",417.23],
    [\"5/18/2009\",393.5],[\"5/11/2009\",390],[\"5/4/2009\",407.33],[\"4/27/2009\",393.69],[\"4/20/2009\",389.49],
    [\"4/13/2009\",392.24],[\"4/6/2009\",372.5],[\"3/30/2009\",369.78],[\"3/23/2009\",347.7],[\"3/16/2009\",330.16],
    [\"3/9/2009\",324.42],[\"3/2/2009\",308.57],[\"2/23/2009\",337.99],[\"2/17/2009\",346.45],[\"2/9/2009\",357.68],
    [\"2/2/2009\",371.28],[\"1/26/2009\",338.53],[\"1/20/2009\",324.7],[\"1/12/2009\",299.67],[\"1/5/2009\",315.07],
    [\"12/29/2008\",321.32],[\"12/22/2008\",300.36],[\"12/15/2008\",310.17],[\"12/8/2008\",315.76],[\"12/1/2008\",283.99],
    [\"11/24/2008\",292.96],[\"11/17/2008\",262.43],[\"11/10/2008\",310.02],[\"11/3/2008\",331.14],[\"10/27/2008\",359.36],
    [\"10/20/2008\",339.29],[\"10/13/2008\",372.54],[\"10/6/2008\",332],[\"9/29/2008\",386.91],[\"9/22/2008\",431.04],
    [\"9/15/2008\",449.15],[\"9/8/2008\",437.66],[\"9/2/2008\",444.25],[\"8/25/2008\",463.29],[\"8/18/2008\",490.59], 
    [\"8/11/2008\",510.15], [\"8/4/2008\",495.01], [\"7/28/2008\",467.86],[\"7/21/2008\",491.98], [\"7/14/2008\",481.32],
    [\"7/7/2008\",533.8],[\"6/30/2008\",537], [\"6/23/2008\",528.07], [\"6/16/2008\",546.43],[\"6/9/2008\",571.51],[\"6/2/2008\",567],
    [\"5/27/2008\",585.8],[\"5/19/2008\",544.62], [\"5/12/2008\",580.07],[\"5/5/2008\",573.2],[\"4/28/2008\",581.29],
    [\"4/21/2008\",544.06],[\"4/14/2008\",539.41],[\"4/7/2008\",457.45], [\"3/31/2008\",471.09],[\"3/24/2008\",438.08],
    [\"3/17/2008\",433.55], [\"3/10/2008\",437.92], [\"3/3/2008\",433.35],[\"2/25/2008\",471.18],[\"2/19/2008\",507.8],
    [\"2/11/2008\",529.64],[\"2/4/2008\",516.69],[\"1/28/2008\",515.9], [\"1/22/2008\",566.4],[\"1/14/2008\",600.25],
    [\"1/7/2008\",638.25],[\"12/31/2007\",657],[\"12/24/2007\",702.53],[\"12/17/2007\",696.69],[\"12/10/2007\",689.96],
    [\"12/3/2007\",714.87], [\"11/26/2007\",693], [\"11/19/2007\",676.7],[\"11/12/2007\",633.63],[\"11/5/2007\",663.97],
    [\"10/29/2007\",711.25],[\"10/22/2007\",674.6],[\"10/15/2007\",644.71],[\"10/8/2007\",637.39],[\"10/1/2007\",594.05],
    [\"9/24/2007\",567.27], [\"9/17/2007\",560.1], [\"9/10/2007\",528.75], [\"9/4/2007\",519.35],[\"8/27/2007\",515.25],
    [\"8/20/2007\",515]];


    opts = {
        title: 'Google, Inc.',
        series: [{
            neighborThreshold: 0
        }],
        axes: {
            xaxis: {
              renderer:\$.jqplot.DateAxisRenderer,
              min:'August 1, 2007',
              tickInterval: \"6 months\",
              tickOptions:{formatString:\"%Y/%#m/%#d\"}
            },
            yaxis: {
                // renderer: \$.jqplot.LogAxisRenderer,
                tickOptions:{prefix: '\$'}
            }
        },
        cursor:{zoom:true}
    };

    plot1 = \$.jqplot('chart1', [goog], opts);
    });

  </script>
  <script type=\"text/javascript\" class=\"code\">
  \$(document).ready(function(){
    opts.cursor = {
        zoom:true, 
        looseZoom: true, 
        constrainOutsideZoom: false
    };

    plot2 = \$.jqplot('chart2', [goog], opts);

    });
  </script>
  <script type=\"text/javascript\" class=\"code\">
  \$(document).ready(function(){
    opts.cursor = {
        zoom:true, 
        looseZoom: true, 
        showTooltip:true, 
        followMouse: true, 
        showTooltipOutsideZoom: true, 
        constrainOutsideZoom: false
    };
    
    plot3 = \$.jqplot('chart3', [goog], opts);
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
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.dateAxisRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.cursor.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.highlighter.min.js\"></script>
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
        return "@css/jquery.jqplot/examples/zoomOptions.html";
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
/*     <title>Zoom Options</title>*/
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
/*  <style type="text/css" media="screen">*/
/*     .jqplot-axis {*/
/*       font-size: 0.85em;*/
/*     }*/
/*     .jqplot-axis{*/
/*       font-size: 0.75em;*/
/*     }*/
/*   </style>*/
/* */
/* <p>Zooming has been enhanced to maintain plot zoom while the mouse moves over the entire document, not just the plot.  Two new options have been added to the cursor plugin to further enhance zooming:</p>*/
/* */
/* <dl>*/
/*    <dt>constrainOutsideZoom</dt>*/
/*     <dd>True to limit the resulting zoom area to the edges of grid, even if the cursor is outside of the grid.  That is, you can't expand the axis ranges by moving the cursor outside of the plot area when this is true.  If set to false, you can effectively zoom out by mousing outside of the plot region.  Default false.</dd>*/
/*     <dt>showTooltipOutsideZoom</dt>*/
/*     <dd>True to keep showing and updating the tooltip even when the cursor is outside of the plot area.  Not applicable if zoomOutsidePlot is false.  Default false</dd>*/
/* </dl>*/
/* */
/* <p>The first plot demonstrates the default functionality where you can move the mouse off of the plot while zooming but the actual area zoomed will not extend beyond the axes.</p>*/
/*     <div id="chart1" style="margin-top:20px; margin-left:20px; width:400px; height:200px;"></div>*/
/*     <div style="padding-top:20px"><button value="reset" type="button" onclick="plot1.resetZoom();">Reset Zoom</button></div>*/
/* */
/*     <pre class="code brush:js"></pre>*/
/* */
/* <p>The second plot sets constrainOutsideZoom to false, so zooming will not only function when the mouse is outside of the plot, but the zoom range will be extended to the mouse position outside of the grid.</p>*/
/*     <div id="chart2" style="margin-top:20px; margin-left:20px; width:400px; height:200px;"></div>*/
/*     <div style="padding-top:20px"><button value="reset" type="button" onclick="plot2.resetZoom();">Reset Zoom</button></div>*/
/* */
/*     <pre class="code brush:js"></pre>*/
/* */
/* <p>The third plot is like the third, but showTooltipOutsideZoom is true and the tooltip is set to follow the mouse, so you have an idea of what your range is while zooming.</p>*/
/*     <div id="chart3" style="margin-top:20px; margin-left:20px; width:400px; height:200px;"></div>*/
/*     <div style="padding-top:20px"><button value="reset" type="button" onclick="plot3.resetZoom();">Reset Zoom</button></div>*/
/* */
/*     <pre class="code brush:js"></pre>*/
/* */
/* */
/*   <script type="text/javascript" class="code">*/
/*   $(document).ready(function(){*/
/*       // Enable plugins like cursor and highlighter by default.*/
/*       $.jqplot.config.enablePlugins = true;*/
/*       // For these examples, don't show the to image button.*/
/*       $.jqplot._noToImageButton = true;*/
/* */
/*     goog = [["6/22/2009",425.32],["6/15/2009",420.09],["6/8/2009",424.84],["6/1/2009",444.32],["5/26/2009",417.23],*/
/*     ["5/18/2009",393.5],["5/11/2009",390],["5/4/2009",407.33],["4/27/2009",393.69],["4/20/2009",389.49],*/
/*     ["4/13/2009",392.24],["4/6/2009",372.5],["3/30/2009",369.78],["3/23/2009",347.7],["3/16/2009",330.16],*/
/*     ["3/9/2009",324.42],["3/2/2009",308.57],["2/23/2009",337.99],["2/17/2009",346.45],["2/9/2009",357.68],*/
/*     ["2/2/2009",371.28],["1/26/2009",338.53],["1/20/2009",324.7],["1/12/2009",299.67],["1/5/2009",315.07],*/
/*     ["12/29/2008",321.32],["12/22/2008",300.36],["12/15/2008",310.17],["12/8/2008",315.76],["12/1/2008",283.99],*/
/*     ["11/24/2008",292.96],["11/17/2008",262.43],["11/10/2008",310.02],["11/3/2008",331.14],["10/27/2008",359.36],*/
/*     ["10/20/2008",339.29],["10/13/2008",372.54],["10/6/2008",332],["9/29/2008",386.91],["9/22/2008",431.04],*/
/*     ["9/15/2008",449.15],["9/8/2008",437.66],["9/2/2008",444.25],["8/25/2008",463.29],["8/18/2008",490.59], */
/*     ["8/11/2008",510.15], ["8/4/2008",495.01], ["7/28/2008",467.86],["7/21/2008",491.98], ["7/14/2008",481.32],*/
/*     ["7/7/2008",533.8],["6/30/2008",537], ["6/23/2008",528.07], ["6/16/2008",546.43],["6/9/2008",571.51],["6/2/2008",567],*/
/*     ["5/27/2008",585.8],["5/19/2008",544.62], ["5/12/2008",580.07],["5/5/2008",573.2],["4/28/2008",581.29],*/
/*     ["4/21/2008",544.06],["4/14/2008",539.41],["4/7/2008",457.45], ["3/31/2008",471.09],["3/24/2008",438.08],*/
/*     ["3/17/2008",433.55], ["3/10/2008",437.92], ["3/3/2008",433.35],["2/25/2008",471.18],["2/19/2008",507.8],*/
/*     ["2/11/2008",529.64],["2/4/2008",516.69],["1/28/2008",515.9], ["1/22/2008",566.4],["1/14/2008",600.25],*/
/*     ["1/7/2008",638.25],["12/31/2007",657],["12/24/2007",702.53],["12/17/2007",696.69],["12/10/2007",689.96],*/
/*     ["12/3/2007",714.87], ["11/26/2007",693], ["11/19/2007",676.7],["11/12/2007",633.63],["11/5/2007",663.97],*/
/*     ["10/29/2007",711.25],["10/22/2007",674.6],["10/15/2007",644.71],["10/8/2007",637.39],["10/1/2007",594.05],*/
/*     ["9/24/2007",567.27], ["9/17/2007",560.1], ["9/10/2007",528.75], ["9/4/2007",519.35],["8/27/2007",515.25],*/
/*     ["8/20/2007",515]];*/
/* */
/* */
/*     opts = {*/
/*         title: 'Google, Inc.',*/
/*         series: [{*/
/*             neighborThreshold: 0*/
/*         }],*/
/*         axes: {*/
/*             xaxis: {*/
/*               renderer:$.jqplot.DateAxisRenderer,*/
/*               min:'August 1, 2007',*/
/*               tickInterval: "6 months",*/
/*               tickOptions:{formatString:"%Y/%#m/%#d"}*/
/*             },*/
/*             yaxis: {*/
/*                 // renderer: $.jqplot.LogAxisRenderer,*/
/*                 tickOptions:{prefix: '$'}*/
/*             }*/
/*         },*/
/*         cursor:{zoom:true}*/
/*     };*/
/* */
/*     plot1 = $.jqplot('chart1', [goog], opts);*/
/*     });*/
/* */
/*   </script>*/
/*   <script type="text/javascript" class="code">*/
/*   $(document).ready(function(){*/
/*     opts.cursor = {*/
/*         zoom:true, */
/*         looseZoom: true, */
/*         constrainOutsideZoom: false*/
/*     };*/
/* */
/*     plot2 = $.jqplot('chart2', [goog], opts);*/
/* */
/*     });*/
/*   </script>*/
/*   <script type="text/javascript" class="code">*/
/*   $(document).ready(function(){*/
/*     opts.cursor = {*/
/*         zoom:true, */
/*         looseZoom: true, */
/*         showTooltip:true, */
/*         followMouse: true, */
/*         showTooltipOutsideZoom: true, */
/*         constrainOutsideZoom: false*/
/*     };*/
/*     */
/*     plot3 = $.jqplot('chart3', [goog], opts);*/
/*   });*/
/*   </script>*/
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
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.dateAxisRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.cursor.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.highlighter.min.js"></script>*/
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
