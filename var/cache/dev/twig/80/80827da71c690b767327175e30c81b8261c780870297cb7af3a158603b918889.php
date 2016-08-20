<?php

/* @css/jquery.jqplot/examples/rotated-tick-labels.html */
class __TwigTemplate_d247f3cc8e9234ece63bd905dfcc5dfe1c0676c6fbabd513e97f28a5196ce32b extends Twig_Template
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
        $__internal_61cbc0d6c2f604a0d983a1ad2b507ba2d8d438250a0eed99fead7004b1f1033f = $this->env->getExtension("native_profiler");
        $__internal_61cbc0d6c2f604a0d983a1ad2b507ba2d8d438250a0eed99fead7004b1f1033f->enter($__internal_61cbc0d6c2f604a0d983a1ad2b507ba2d8d438250a0eed99fead7004b1f1033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/rotated-tick-labels.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Rotated Labels and Font Styling</title>

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

<p>Rotated axis tick labels are possible through the \"jqplot.canvasTextRenderer.min.js\" and \"jqplot.canvasAxisTickRenderer.min.js\" plugins. Native canvas font rendering capabilities are used in supported browsers.  This includes most recent browsers (including IE 9).  In browsers which don't support native canvas font text, text is rendered in the Hershey font.</p>

<div id=\"chart1\" style=\"height:300px; width:500px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>



<p>For comparison, here is the same graph with the \"fontFamily\" and \"fontSize\" set.  If you have a supported browser, you should see a difference in label fonts.</p>
 
<div id=\"chart1b\" style=\"height:300px; width:500px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>

 
<p>The default positioning applies to either primary or secondary axes and accounts for label rotation to ensure that the labels point to the appropriate bar or tick position.</p>

<p>Also note here the use of the \"autoscale\" option on the y axes.  Turning this option on will force the y axes to line up tick marks for consistend grid lines across the grid.</p>

<div id=\"chart2\" style=\"height:300px; width:500px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>


<p>You can override the default position by specifying a labelPosition of 'start', 'middle' or 'end'. The results probably are not as pleasing as the default 'auto' setting.</p>

<div id=\"chart3\" style=\"height:300px; width:500px;\"></div>

<pre class=\"code prettyprint brush: js\"></pre>

  
<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], 
  ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], 
  ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];

  var plot1 = \$.jqplot('chart1', [line1], {
    title: 'Concern vs. Occurrance',
    series:[{renderer:\$.jqplot.BarRenderer}],
    axesDefaults: {
        tickRenderer: \$.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          angle: -30,
          fontSize: '10pt'
        }
    },
    axes: {
      xaxis: {
        renderer: \$.jqplot.CategoryAxisRenderer
      }
    }
  });
});
</script>


<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], 
  ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], 
  ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];
  var plot1b = \$.jqplot('chart1b', [line1], {
    title: 'Concern vs. Occurrance',
    series:[{renderer:\$.jqplot.BarRenderer}],
    axesDefaults: {
        tickRenderer: \$.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          fontFamily: 'Georgia',
          fontSize: '10pt',
          angle: -30
        }
    },
    axes: {
      xaxis: {
        renderer: \$.jqplot.CategoryAxisRenderer
      }
    }
  });
});
</script>


<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], 
  ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], 
  ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];
  var line2 = [['Nickle', 28], ['Aluminum', 13], ['Xenon', 54], ['Silver', 47], 
  ['Sulfer', 16], ['Silicon', 14], ['Vanadium', 23]];

  var plot2 = \$.jqplot('chart2', [line1, line2], {
    series:[{renderer:\$.jqplot.BarRenderer}, {xaxis:'x2axis', yaxis:'y2axis'}],
    axesDefaults: {
        tickRenderer: \$.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          angle: 30
        }
    },
    axes: {
      xaxis: {
        renderer: \$.jqplot.CategoryAxisRenderer
      },
      x2axis: {
        renderer: \$.jqplot.CategoryAxisRenderer
      },
      yaxis: {
        autoscale:true
      },
      y2axis: {
        autoscale:true
      }
    }
  });
});
</script>

<script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
  var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], 
  ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], 
  ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];
  var plot3 = \$.jqplot('chart3', [line1], {
    title: 'Concern vs. Occurrance',
    series:[{renderer:\$.jqplot.BarRenderer}],
    axesDefaults: {
        tickRenderer: \$.jqplot.CanvasAxisTickRenderer,
        tickOptions: {
          angle: -30
        }
    },
    axes: {
      xaxis: {
        renderer: \$.jqplot.CategoryAxisRenderer,
        tickOptions: {
          labelPosition: 'middle'
        }
      },
      yaxis: {
        autoscale:true,
        tickRenderer: \$.jqplot.CanvasAxisTickRenderer,
        tickOptions: {
          labelPosition: 'start'
        }
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

  <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.dateAxisRenderer.min.js\"></script>
  <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasTextRenderer.min.js\"></script>
  <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasAxisTickRenderer.min.js\"></script>
  <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.categoryAxisRenderer.min.js\"></script>
  <script class=\"include\" language=\"javascript\" type=\"text/javascript\" src=\"../plugins/jqplot.barRenderer.min.js\"></script>

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
        
        $__internal_61cbc0d6c2f604a0d983a1ad2b507ba2d8d438250a0eed99fead7004b1f1033f->leave($__internal_61cbc0d6c2f604a0d983a1ad2b507ba2d8d438250a0eed99fead7004b1f1033f_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/rotated-tick-labels.html";
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
/*     <title>Rotated Labels and Font Styling</title>*/
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
/* <p>Rotated axis tick labels are possible through the "jqplot.canvasTextRenderer.min.js" and "jqplot.canvasAxisTickRenderer.min.js" plugins. Native canvas font rendering capabilities are used in supported browsers.  This includes most recent browsers (including IE 9).  In browsers which don't support native canvas font text, text is rendered in the Hershey font.</p>*/
/* */
/* <div id="chart1" style="height:300px; width:500px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* */
/* */
/* <p>For comparison, here is the same graph with the "fontFamily" and "fontSize" set.  If you have a supported browser, you should see a difference in label fonts.</p>*/
/*  */
/* <div id="chart1b" style="height:300px; width:500px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/*  */
/* <p>The default positioning applies to either primary or secondary axes and accounts for label rotation to ensure that the labels point to the appropriate bar or tick position.</p>*/
/* */
/* <p>Also note here the use of the "autoscale" option on the y axes.  Turning this option on will force the y axes to line up tick marks for consistend grid lines across the grid.</p>*/
/* */
/* <div id="chart2" style="height:300px; width:500px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/* */
/* <p>You can override the default position by specifying a labelPosition of 'start', 'middle' or 'end'. The results probably are not as pleasing as the default 'auto' setting.</p>*/
/* */
/* <div id="chart3" style="height:300px; width:500px;"></div>*/
/* */
/* <pre class="code prettyprint brush: js"></pre>*/
/* */
/*   */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], */
/*   ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], */
/*   ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];*/
/* */
/*   var plot1 = $.jqplot('chart1', [line1], {*/
/*     title: 'Concern vs. Occurrance',*/
/*     series:[{renderer:$.jqplot.BarRenderer}],*/
/*     axesDefaults: {*/
/*         tickRenderer: $.jqplot.CanvasAxisTickRenderer ,*/
/*         tickOptions: {*/
/*           angle: -30,*/
/*           fontSize: '10pt'*/
/*         }*/
/*     },*/
/*     axes: {*/
/*       xaxis: {*/
/*         renderer: $.jqplot.CategoryAxisRenderer*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* </script>*/
/* */
/* */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], */
/*   ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], */
/*   ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];*/
/*   var plot1b = $.jqplot('chart1b', [line1], {*/
/*     title: 'Concern vs. Occurrance',*/
/*     series:[{renderer:$.jqplot.BarRenderer}],*/
/*     axesDefaults: {*/
/*         tickRenderer: $.jqplot.CanvasAxisTickRenderer ,*/
/*         tickOptions: {*/
/*           fontFamily: 'Georgia',*/
/*           fontSize: '10pt',*/
/*           angle: -30*/
/*         }*/
/*     },*/
/*     axes: {*/
/*       xaxis: {*/
/*         renderer: $.jqplot.CategoryAxisRenderer*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* </script>*/
/* */
/* */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], */
/*   ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], */
/*   ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];*/
/*   var line2 = [['Nickle', 28], ['Aluminum', 13], ['Xenon', 54], ['Silver', 47], */
/*   ['Sulfer', 16], ['Silicon', 14], ['Vanadium', 23]];*/
/* */
/*   var plot2 = $.jqplot('chart2', [line1, line2], {*/
/*     series:[{renderer:$.jqplot.BarRenderer}, {xaxis:'x2axis', yaxis:'y2axis'}],*/
/*     axesDefaults: {*/
/*         tickRenderer: $.jqplot.CanvasAxisTickRenderer ,*/
/*         tickOptions: {*/
/*           angle: 30*/
/*         }*/
/*     },*/
/*     axes: {*/
/*       xaxis: {*/
/*         renderer: $.jqplot.CategoryAxisRenderer*/
/*       },*/
/*       x2axis: {*/
/*         renderer: $.jqplot.CategoryAxisRenderer*/
/*       },*/
/*       yaxis: {*/
/*         autoscale:true*/
/*       },*/
/*       y2axis: {*/
/*         autoscale:true*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*   var line1 = [['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15], */
/*   ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3], */
/*   ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];*/
/*   var plot3 = $.jqplot('chart3', [line1], {*/
/*     title: 'Concern vs. Occurrance',*/
/*     series:[{renderer:$.jqplot.BarRenderer}],*/
/*     axesDefaults: {*/
/*         tickRenderer: $.jqplot.CanvasAxisTickRenderer,*/
/*         tickOptions: {*/
/*           angle: -30*/
/*         }*/
/*     },*/
/*     axes: {*/
/*       xaxis: {*/
/*         renderer: $.jqplot.CategoryAxisRenderer,*/
/*         tickOptions: {*/
/*           labelPosition: 'middle'*/
/*         }*/
/*       },*/
/*       yaxis: {*/
/*         autoscale:true,*/
/*         tickRenderer: $.jqplot.CanvasAxisTickRenderer,*/
/*         tickOptions: {*/
/*           labelPosition: 'start'*/
/*         }*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* </script>*/
/* */
/* */
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
/*   <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.dateAxisRenderer.min.js"></script>*/
/*   <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.canvasTextRenderer.min.js"></script>*/
/*   <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.canvasAxisTickRenderer.min.js"></script>*/
/*   <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.categoryAxisRenderer.min.js"></script>*/
/*   <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.barRenderer.min.js"></script>*/
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
