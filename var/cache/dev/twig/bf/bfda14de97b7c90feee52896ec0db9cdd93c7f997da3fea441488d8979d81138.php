<?php

/* @css/jquery.jqplot/examples/kcp_area.html */
class __TwigTemplate_d75330e27d5dcb5f3bd49fe39cb4d4b8d4b7716174329deab360c029ae5f9d64 extends Twig_Template
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
        $__internal_5c80d13e88cf9144ede5be9f40e65a5c807240d806a4ea34e395e2fa00fbb2f6 = $this->env->getExtension("native_profiler");
        $__internal_5c80d13e88cf9144ede5be9f40e65a5c807240d806a4ea34e395e2fa00fbb2f6->enter($__internal_5c80d13e88cf9144ede5be9f40e65a5c807240d806a4ea34e395e2fa00fbb2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/kcp_area.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Area Chart</title>

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


  <link class=\"include\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.css\" rel=\"Stylesheet\" /> 

   <style type=\"text/css\">

    .chart-container {
        border: 1px solid darkblue;
        padding: 30px 0px 30px 30px;
        width: 900px;
        height: 400px;
        
    }

    table.jqplot-table-legend {
        font-size: 0.65em;
        line-height: 1em;
        margin: 0px 0px 10px 15px;
        border-collapse: collapse;
    }

    td.jqplot-table-legend-label {
      width: 20em;
    }

    div.jqplot-table-legend-swatch {
        border-width: 2px 6px;
    }

    div.jqplot-table-legend-swatch-outline {
        border: none;
    }

    tr.jqplot-table-legend td {
        padding: 2px;
    }

    .legend-row-highlighted {
        background-color: #666666;
    }

    .legend-text-highlighted {
        color: #ffffff;
    }

    #chart1 {
        width: 96%;
        height: 96%;
    }

    .jqplot-datestamp {
      font-size: 0.8em;
      color: #777;
/*      margin-top: 1em;
      text-align: right;*/
      font-style: italic;
      position: absolute;
      bottom: 15px;
      right: 15px;
    }

    td.controls li {
        list-style-type: none;
    }

    td.controls ul {
        margin-top: 0.5em;
        padding-left: 0.2em;
    }

    pre.code {
        margin-top: 45px;
        clear: both;
    }

  </style>

      <div class=\"chart-container\">    
        <div id=\"chart1\"></div>
        <div class=\"jqplot-datestamp\"></div>
    </div>

    <pre class=\"code brush:js\"></pre>
  
  <script class=\"common\" type=\"text/javascript\">
    var data = [
      [15.8442,13.0993,11.2898,10.7892,10.252,9.0165,8.5287,7.7442,6.9867,6.5213,5.9473,5.4766,4.9214,4.6398,3.8935,3.5228,3.0128,2.4847,2.0357,1.0672],
      [1.7703,2.2535,2.2753,2.7927,2.2509,2.4341,2.5518,2.5547,2.4204,2.4186,2.4261,2.2927,2.4386,2.2295,2.2203,1.915,1.8791,1.7941,1.6567,0.9296],
      [8.3728,8.1221,8.3989,7.9758,8.8246,8.2377,8.432,7.8466,7.5343,7.1171,6.9801,6.9349,5.8307,5.7089,4.927,4.2237,3.6872,3.1429,2.581,1.3766],
      [9.1249,8.7326,7.6122,7.8577,7.1625,6.8527,6.5158,6.1715,6.1298,5.8702,5.3456,4.9906,4.4424,4.3022,3.5298,3.405,2.9977,2.4159,2.0832,1.1499],
      [8.0508,7.7875,7.6534,7.4448,7.3702,7.4188,7.3882,7.1647,6.9617,6.6576,6.6077,6.4823,5.9117,5.8149,5.505,5.5355,5.0907,4.569,4.3049,2.6325],
      [10.4408,9.8278,9.9293,9.5176,9.6658,9.2359,9.2842,8.6497,8.7656,8.2962,8.155,7.7294,7.3674,6.9888,6.2995,5.7314,5.2703,4.6947,3.9614,2.2509],
      [4.1883,4.7514,5.3198,5.8819,5.1732,5.5764,6.1713,6.7915,6.8511,7.2681,7.1461,8.109,9.2649,9.5322,11.2138,12.8299,12.9621,13.8936,13.7828,10.0525],
      [0.6641,0.8454,0.9018,1.0461,1.0113,1.235,1.279,1.3049,1.5024,1.4471,1.5358,1.5796,1.6471,1.6443,1.6562,1.6763,1.6097,1.5039,1.3752,0.864],
      [0.5221,0.6997,0.8513,0.8849,0.9168,0.9099,0.8339,0.9921,1.1169,1.1764,1.1936,1.1415,1.1181,1.2889,1.1378,1.023,1.1283,1.0417,0.9839,0.587],
      [1.0969,1.188,1.0713,1.2803,1.1787,1.148,1.3229,1.1726,1.3764,1.3887,1.4011,1.3034,1.4368,1.5017,1.4899,1.4123,1.3168,1.1407,0.8458,0.38],
      [2.275,2.5511,3.1025,2.9834,3.2857,3.7625,3.1928,3.7071,4.0364,3.629,3.9258,3.2208,3.7113,3.3166,3.4775,3.429,3.6121,3.4569,3.8416,4.1323],
      [16.0654,15.719,16.3773,16.0175,15.8853,16.132,16.1309,16.3491,15.8512,16.4743,16.2862,15.7327,16.2793,16.6329,17.4903,17.4425,17.3413,18.3527,18.5029,15.2763],
      [1.1145,1.176,1.1183,1.0411,1.0058,1.0796,1.0321,1.0714,1.1117,1.0278,1.136,1.1397,1.1556,1.2206,1.2871,1.2361,1.2111,1.2312,1.1545,0.7881],
      [4.5928,4.7558,4.8855,4.4684,4.6677,4.6038,4.7789,4.6098,4.4171,4.5078,4.4137,4.4645,4.2693,4.2836,4.1709,4.159,3.8423,3.9957,3.6816,2.5785],
      [2.1027,2.1576,2.0721,2.0623,2.3498,2.2573,2.2866,2.3766,2.2488,2.3665,2.3445,2.2474,2.3345,2.2479,2.158,2.355,2.0744,2.2269,3.0474,3.8925],
      [1.2709,1.6007,1.3996,1.612,1.4649,1.5875,1.7056,1.7315,1.7378,2.0401,2.3265,2.1096,2.0513,2.1548,2.0634,2.2206,1.8427,2.4817,2.3066,2.1685],
      [4.6414,5.6167,5.9571,6.5372,7.0242,7.6332,7.9823,8.3906,9.112,9.6872,10.2014,11.0074,11.375,11.6753,12.0489,12.0692,13.2962,13.2183,14.6559,32.0912],
      [0.2334,0.3642,0.5267,0.5911,0.8888,1.1633,1.0997,1.76,1.9811,2.1708,2.931,3.2634,3.6254,4.107,4.6944,5.0941,5.9984,6.2419,6.6059,5.8353],
      [2.2553,2.8903,2.9564,3.2839,3.4822,3.255,3.1666,3.4245,3.4066,3.8536,3.6333,4.0331,4.4847,4.3552,4.2768,4.1439,4.7196,4.6585,4.4286,3.921],
      [0.3437,0.3282,0.4805,0.3881,0.4796,0.9766,0.6589,0.6443,1.0423,0.7941,1.064,1.5504,1.3977,1.5226,1.8344,1.9186,2.3022,2.8188,2.8424,2.7792],
      [3.4466,3.5641,3.5711,3.4219,3.2835,3.3569,3.3416,3.4544,3.3675,3.2806,3.118,3.1881,3.2252,3.0588,3.0051,2.9868,3.0361,2.8972,2.9611,2.2867],
      [1.5831,1.9691,2.2498,2.122,2.3766,2.1273,2.3165,2.0884,2.0421,2.0067,1.8809,2.0027,1.7115,1.7734,1.6204,1.6702,1.769,1.7391,2.3607,2.9604],
      [58.4561,55.4196,53.3806,53.3059,51.7105,50.007,50.1509,48.2276,47.1521,45.5962,44.1436,43.5952,41.8242,40.8606,39.2451,38.8396,36.5095,34.4988,31.7809,20.3231],
      [41.5439,44.5804,46.6194,46.6941,48.2895,49.993,49.8491,51.7724,52.8479,54.4038,55.8564,56.4048,58.1758,59.1394,60.7549,61.1604,63.4905,65.5012,68.2191,79.6769]
    ];
  </script>
    
  <script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){

    var labels = [\"Rice\", \"Bread and other cereals\", \"Fish and seafood\", \"Fruits and vegetables\", \"Other food products\", 
        \"Catering services\", \"Non-alcoholic beverages\", \"Alcoholic beverages\", \"Tobacco and narcotics\", \"Clothing and footwear\", 
        \"Rentals (actual or imputed) and maintenance and repair of the dwelling\", \"Water supply and miscellaneous services related to the dwelling\", 
        \"Electricity gas and other fuels\", \"Furnishing household equipment and routine household maintenance\", \"Health\", \"Transport\", 
        \"Communication\", \"Recreation and culture\", \"Education\", \"Personal care\", \"Other miscellaneous goods and services\", 
        \"Food and non-alcoholic beverages\", \"Non food\"]
    var ticks = [[1, \"v01\"], [2, \"v02\"], [3, \"v03\"], [4, \"v04\"], [5, \"v05\"],
      [6, \"v06\"], [7, \"v07\"], [8, \"v08\"], [9, \"v09\"], [10, \"v10\"],
      [11, \"v11\"], [12, \"v12\"], [13, \"v13\"], [14, \"v14\"], [15, \"v15\"],
      [16, \"v16\"], [17, \"v17\"], [18, \"v18\"], [19, \"v19\"], [20, \"v20\"]];    // make the plot
    
    plot1 = \$.jqplot('chart1', data, {
        title: 'Area Plot',
        stackSeries: true,
        seriesDefaults: {
            showMarker: false,
            fill: true,
            fillAndStroke: true
        },
        legend: {
            show: true,
            placement: 'outsideGrid',
            labels: labels,
            location: 'ne',
            rowSpacing: '0px'
        },
        axesDefaults: {
            labelRenderer: \$.jqplot.CanvasAxisLabelRenderer
        },
        axes: {
            xaxis: {
                pad: 0,
                ticks: ticks,
                label: 'Population Vingtile',
                tickOptions: {
                    showGridline: false
                }
            },
            yaxis: {
                min: 0,
                max: 100,
                label: 'Share of Item in Total Expenditure (%)',
                tickOptions: {
                  showGridline: false,
                  suffix: '%'
                }
            }
        },
        grid: {
            drawBorder: false,
            shadow: false,
            // background: 'rgba(0,0,0,0)'  works to make transparent.
            background: 'white'
        }
    });

    // add a date at the bottom.

    var d = new \$.jsDate();
    \$('div.jqplot-datestamp').html('Generated on '+d.strftime('%v'));

    // make it resizable.
    
    \$(\"div.chart-container\").resizable({delay:20});

    \$('div.chart-container').bind('resize', function(event, ui) {
        plot1.replot();
    });

    \$('#chart1').bind('jqplotDataHighlight', function(ev, seriesIndex, pointIndex, data) {
        var idx = 21 - seriesIndex
        \$('tr.jqplot-table-legend').removeClass('legend-row-highlighted');  
        \$('tr.jqplot-table-legend').children('.jqplot-table-legend-label').removeClass('legend-text-highlighted');
        \$('tr.jqplot-table-legend').eq(idx).addClass('legend-row-highlighted'); 
        \$('tr.jqplot-table-legend').eq(idx).children('.jqplot-table-legend-label').addClass('legend-text-highlighted'); 
    });

    \$('#chart1').bind('jqplotDataUnhighlight', function(ev, seriesIndex, pointIndex, data) {
        \$('tr.jqplot-table-legend').removeClass('legend-row-highlighted');  
        \$('tr.jqplot-table-legend').children('.jqplot-table-legend-label').removeClass('legend-text-highlighted');
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

  <script class=\"include\" type=\"text/javascript\" src=\"jquery-ui/js/jquery-ui.min.js\"></script>
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
        
        $__internal_5c80d13e88cf9144ede5be9f40e65a5c807240d806a4ea34e395e2fa00fbb2f6->leave($__internal_5c80d13e88cf9144ede5be9f40e65a5c807240d806a4ea34e395e2fa00fbb2f6_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/kcp_area.html";
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
/*     <title>Area Chart</title>*/
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
/* */
/*   <link class="include" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.css" rel="Stylesheet" /> */
/* */
/*    <style type="text/css">*/
/* */
/*     .chart-container {*/
/*         border: 1px solid darkblue;*/
/*         padding: 30px 0px 30px 30px;*/
/*         width: 900px;*/
/*         height: 400px;*/
/*         */
/*     }*/
/* */
/*     table.jqplot-table-legend {*/
/*         font-size: 0.65em;*/
/*         line-height: 1em;*/
/*         margin: 0px 0px 10px 15px;*/
/*         border-collapse: collapse;*/
/*     }*/
/* */
/*     td.jqplot-table-legend-label {*/
/*       width: 20em;*/
/*     }*/
/* */
/*     div.jqplot-table-legend-swatch {*/
/*         border-width: 2px 6px;*/
/*     }*/
/* */
/*     div.jqplot-table-legend-swatch-outline {*/
/*         border: none;*/
/*     }*/
/* */
/*     tr.jqplot-table-legend td {*/
/*         padding: 2px;*/
/*     }*/
/* */
/*     .legend-row-highlighted {*/
/*         background-color: #666666;*/
/*     }*/
/* */
/*     .legend-text-highlighted {*/
/*         color: #ffffff;*/
/*     }*/
/* */
/*     #chart1 {*/
/*         width: 96%;*/
/*         height: 96%;*/
/*     }*/
/* */
/*     .jqplot-datestamp {*/
/*       font-size: 0.8em;*/
/*       color: #777;*/
/* /*      margin-top: 1em;*/
/*       text-align: right;*//* */
/*       font-style: italic;*/
/*       position: absolute;*/
/*       bottom: 15px;*/
/*       right: 15px;*/
/*     }*/
/* */
/*     td.controls li {*/
/*         list-style-type: none;*/
/*     }*/
/* */
/*     td.controls ul {*/
/*         margin-top: 0.5em;*/
/*         padding-left: 0.2em;*/
/*     }*/
/* */
/*     pre.code {*/
/*         margin-top: 45px;*/
/*         clear: both;*/
/*     }*/
/* */
/*   </style>*/
/* */
/*       <div class="chart-container">    */
/*         <div id="chart1"></div>*/
/*         <div class="jqplot-datestamp"></div>*/
/*     </div>*/
/* */
/*     <pre class="code brush:js"></pre>*/
/*   */
/*   <script class="common" type="text/javascript">*/
/*     var data = [*/
/*       [15.8442,13.0993,11.2898,10.7892,10.252,9.0165,8.5287,7.7442,6.9867,6.5213,5.9473,5.4766,4.9214,4.6398,3.8935,3.5228,3.0128,2.4847,2.0357,1.0672],*/
/*       [1.7703,2.2535,2.2753,2.7927,2.2509,2.4341,2.5518,2.5547,2.4204,2.4186,2.4261,2.2927,2.4386,2.2295,2.2203,1.915,1.8791,1.7941,1.6567,0.9296],*/
/*       [8.3728,8.1221,8.3989,7.9758,8.8246,8.2377,8.432,7.8466,7.5343,7.1171,6.9801,6.9349,5.8307,5.7089,4.927,4.2237,3.6872,3.1429,2.581,1.3766],*/
/*       [9.1249,8.7326,7.6122,7.8577,7.1625,6.8527,6.5158,6.1715,6.1298,5.8702,5.3456,4.9906,4.4424,4.3022,3.5298,3.405,2.9977,2.4159,2.0832,1.1499],*/
/*       [8.0508,7.7875,7.6534,7.4448,7.3702,7.4188,7.3882,7.1647,6.9617,6.6576,6.6077,6.4823,5.9117,5.8149,5.505,5.5355,5.0907,4.569,4.3049,2.6325],*/
/*       [10.4408,9.8278,9.9293,9.5176,9.6658,9.2359,9.2842,8.6497,8.7656,8.2962,8.155,7.7294,7.3674,6.9888,6.2995,5.7314,5.2703,4.6947,3.9614,2.2509],*/
/*       [4.1883,4.7514,5.3198,5.8819,5.1732,5.5764,6.1713,6.7915,6.8511,7.2681,7.1461,8.109,9.2649,9.5322,11.2138,12.8299,12.9621,13.8936,13.7828,10.0525],*/
/*       [0.6641,0.8454,0.9018,1.0461,1.0113,1.235,1.279,1.3049,1.5024,1.4471,1.5358,1.5796,1.6471,1.6443,1.6562,1.6763,1.6097,1.5039,1.3752,0.864],*/
/*       [0.5221,0.6997,0.8513,0.8849,0.9168,0.9099,0.8339,0.9921,1.1169,1.1764,1.1936,1.1415,1.1181,1.2889,1.1378,1.023,1.1283,1.0417,0.9839,0.587],*/
/*       [1.0969,1.188,1.0713,1.2803,1.1787,1.148,1.3229,1.1726,1.3764,1.3887,1.4011,1.3034,1.4368,1.5017,1.4899,1.4123,1.3168,1.1407,0.8458,0.38],*/
/*       [2.275,2.5511,3.1025,2.9834,3.2857,3.7625,3.1928,3.7071,4.0364,3.629,3.9258,3.2208,3.7113,3.3166,3.4775,3.429,3.6121,3.4569,3.8416,4.1323],*/
/*       [16.0654,15.719,16.3773,16.0175,15.8853,16.132,16.1309,16.3491,15.8512,16.4743,16.2862,15.7327,16.2793,16.6329,17.4903,17.4425,17.3413,18.3527,18.5029,15.2763],*/
/*       [1.1145,1.176,1.1183,1.0411,1.0058,1.0796,1.0321,1.0714,1.1117,1.0278,1.136,1.1397,1.1556,1.2206,1.2871,1.2361,1.2111,1.2312,1.1545,0.7881],*/
/*       [4.5928,4.7558,4.8855,4.4684,4.6677,4.6038,4.7789,4.6098,4.4171,4.5078,4.4137,4.4645,4.2693,4.2836,4.1709,4.159,3.8423,3.9957,3.6816,2.5785],*/
/*       [2.1027,2.1576,2.0721,2.0623,2.3498,2.2573,2.2866,2.3766,2.2488,2.3665,2.3445,2.2474,2.3345,2.2479,2.158,2.355,2.0744,2.2269,3.0474,3.8925],*/
/*       [1.2709,1.6007,1.3996,1.612,1.4649,1.5875,1.7056,1.7315,1.7378,2.0401,2.3265,2.1096,2.0513,2.1548,2.0634,2.2206,1.8427,2.4817,2.3066,2.1685],*/
/*       [4.6414,5.6167,5.9571,6.5372,7.0242,7.6332,7.9823,8.3906,9.112,9.6872,10.2014,11.0074,11.375,11.6753,12.0489,12.0692,13.2962,13.2183,14.6559,32.0912],*/
/*       [0.2334,0.3642,0.5267,0.5911,0.8888,1.1633,1.0997,1.76,1.9811,2.1708,2.931,3.2634,3.6254,4.107,4.6944,5.0941,5.9984,6.2419,6.6059,5.8353],*/
/*       [2.2553,2.8903,2.9564,3.2839,3.4822,3.255,3.1666,3.4245,3.4066,3.8536,3.6333,4.0331,4.4847,4.3552,4.2768,4.1439,4.7196,4.6585,4.4286,3.921],*/
/*       [0.3437,0.3282,0.4805,0.3881,0.4796,0.9766,0.6589,0.6443,1.0423,0.7941,1.064,1.5504,1.3977,1.5226,1.8344,1.9186,2.3022,2.8188,2.8424,2.7792],*/
/*       [3.4466,3.5641,3.5711,3.4219,3.2835,3.3569,3.3416,3.4544,3.3675,3.2806,3.118,3.1881,3.2252,3.0588,3.0051,2.9868,3.0361,2.8972,2.9611,2.2867],*/
/*       [1.5831,1.9691,2.2498,2.122,2.3766,2.1273,2.3165,2.0884,2.0421,2.0067,1.8809,2.0027,1.7115,1.7734,1.6204,1.6702,1.769,1.7391,2.3607,2.9604],*/
/*       [58.4561,55.4196,53.3806,53.3059,51.7105,50.007,50.1509,48.2276,47.1521,45.5962,44.1436,43.5952,41.8242,40.8606,39.2451,38.8396,36.5095,34.4988,31.7809,20.3231],*/
/*       [41.5439,44.5804,46.6194,46.6941,48.2895,49.993,49.8491,51.7724,52.8479,54.4038,55.8564,56.4048,58.1758,59.1394,60.7549,61.1604,63.4905,65.5012,68.2191,79.6769]*/
/*     ];*/
/*   </script>*/
/*     */
/*   <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/* */
/*     var labels = ["Rice", "Bread and other cereals", "Fish and seafood", "Fruits and vegetables", "Other food products", */
/*         "Catering services", "Non-alcoholic beverages", "Alcoholic beverages", "Tobacco and narcotics", "Clothing and footwear", */
/*         "Rentals (actual or imputed) and maintenance and repair of the dwelling", "Water supply and miscellaneous services related to the dwelling", */
/*         "Electricity gas and other fuels", "Furnishing household equipment and routine household maintenance", "Health", "Transport", */
/*         "Communication", "Recreation and culture", "Education", "Personal care", "Other miscellaneous goods and services", */
/*         "Food and non-alcoholic beverages", "Non food"]*/
/*     var ticks = [[1, "v01"], [2, "v02"], [3, "v03"], [4, "v04"], [5, "v05"],*/
/*       [6, "v06"], [7, "v07"], [8, "v08"], [9, "v09"], [10, "v10"],*/
/*       [11, "v11"], [12, "v12"], [13, "v13"], [14, "v14"], [15, "v15"],*/
/*       [16, "v16"], [17, "v17"], [18, "v18"], [19, "v19"], [20, "v20"]];    // make the plot*/
/*     */
/*     plot1 = $.jqplot('chart1', data, {*/
/*         title: 'Area Plot',*/
/*         stackSeries: true,*/
/*         seriesDefaults: {*/
/*             showMarker: false,*/
/*             fill: true,*/
/*             fillAndStroke: true*/
/*         },*/
/*         legend: {*/
/*             show: true,*/
/*             placement: 'outsideGrid',*/
/*             labels: labels,*/
/*             location: 'ne',*/
/*             rowSpacing: '0px'*/
/*         },*/
/*         axesDefaults: {*/
/*             labelRenderer: $.jqplot.CanvasAxisLabelRenderer*/
/*         },*/
/*         axes: {*/
/*             xaxis: {*/
/*                 pad: 0,*/
/*                 ticks: ticks,*/
/*                 label: 'Population Vingtile',*/
/*                 tickOptions: {*/
/*                     showGridline: false*/
/*                 }*/
/*             },*/
/*             yaxis: {*/
/*                 min: 0,*/
/*                 max: 100,*/
/*                 label: 'Share of Item in Total Expenditure (%)',*/
/*                 tickOptions: {*/
/*                   showGridline: false,*/
/*                   suffix: '%'*/
/*                 }*/
/*             }*/
/*         },*/
/*         grid: {*/
/*             drawBorder: false,*/
/*             shadow: false,*/
/*             // background: 'rgba(0,0,0,0)'  works to make transparent.*/
/*             background: 'white'*/
/*         }*/
/*     });*/
/* */
/*     // add a date at the bottom.*/
/* */
/*     var d = new $.jsDate();*/
/*     $('div.jqplot-datestamp').html('Generated on '+d.strftime('%v'));*/
/* */
/*     // make it resizable.*/
/*     */
/*     $("div.chart-container").resizable({delay:20});*/
/* */
/*     $('div.chart-container').bind('resize', function(event, ui) {*/
/*         plot1.replot();*/
/*     });*/
/* */
/*     $('#chart1').bind('jqplotDataHighlight', function(ev, seriesIndex, pointIndex, data) {*/
/*         var idx = 21 - seriesIndex*/
/*         $('tr.jqplot-table-legend').removeClass('legend-row-highlighted');  */
/*         $('tr.jqplot-table-legend').children('.jqplot-table-legend-label').removeClass('legend-text-highlighted');*/
/*         $('tr.jqplot-table-legend').eq(idx).addClass('legend-row-highlighted'); */
/*         $('tr.jqplot-table-legend').eq(idx).children('.jqplot-table-legend-label').addClass('legend-text-highlighted'); */
/*     });*/
/* */
/*     $('#chart1').bind('jqplotDataUnhighlight', function(ev, seriesIndex, pointIndex, data) {*/
/*         $('tr.jqplot-table-legend').removeClass('legend-row-highlighted');  */
/*         $('tr.jqplot-table-legend').children('.jqplot-table-legend-label').removeClass('legend-text-highlighted');*/
/*     });*/
/* });*/
/* */
/* </script>*/
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
/*   <script class="include" type="text/javascript" src="jquery-ui/js/jquery-ui.min.js"></script>*/
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
