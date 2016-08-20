<?php

/* @css/jquery.jqplot/examples/pieTest4.html */
class __TwigTemplate_eccab169916bdc547f90aa3e10ff2a9a244a15b9e10d0944864e874ad482c734 extends Twig_Template
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
        $__internal_7044119da97ad47dad3ef7876e0b9e18ecf3c3429099e916c329e73c1998188c = $this->env->getExtension("native_profiler");
        $__internal_7044119da97ad47dad3ef7876e0b9e18ecf3c3429099e916c329e73c1998188c->enter($__internal_7044119da97ad47dad3ef7876e0b9e18ecf3c3429099e916c329e73c1998188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/pieTest4.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Pie Charts and Options 2</title>

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

    <div id=\"chart1\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    
    <pre class=\"code brush:js\"></pre>
 
    <div id=\"chart2\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart3\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>
  
    <div id=\"chart4\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart5\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart6\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart7\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart8\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart9\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

    <div id=\"chart10\" style=\"margin-top:20px; margin-left:20px; width:460px; height:300px;\"></div>
    <pre class=\"code brush:js\"></pre>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
    jQuery.jqplot.config.enablePlugins = true;
    plot1 = jQuery.jqplot('chart1', 
        [[['Verwerkende FruedenStunde Companaziert Eine industrie', 9],['Retail', 8], ['Primaire producent', 7], 
        ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], 
        {
            title: ' ', 
            seriesDefaults: {
        shadow: false, 
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: { padding: 2, sliceMargin: 2, showDataLabels: false } 
      }, 
            legend: { show:true, location: 'e' }
        }
    );
});
</script>


<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot2 = jQuery.jqplot('chart2', 
    [[['Verwerkende industrie', 9],['Retail', 0], ['Primaire producent', 0], 
    ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 3], ['Bewerkende industrie', 2]]], 
    {
      title: ' ', 
      seriesDefaults: {
        shadow: false, 
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: { 
          startAngle: 180, 
          sliceMargin: 4, 
          showDataLabels: true } 
      }, 
      legend: { show:true, location: 'w' }
    }
  );
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot3 = jQuery.jqplot('chart3', 
    [[['Verwerkende industrie', 9],['Retail', 0], ['Primaire producent', 0], 
    ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 2]]], 
    {
      title: ' ', 
      seriesDefaults: {
        shadow: false, 
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: { 
          sliceMargin: 4, 
          showDataLabels: true 
        } 
      }, 
      legend: { show:true, location: 'e' }
    }
  );

  
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot4 = jQuery.jqplot('chart4', 
    [[['Verwerkende industrie', 30],['Retail', 0], ['Primaire producent', 0], 
    ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: false, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { sliceMargin: 4, showDataLabels: true } }, 
      legend: { show:true, location: 'e' }
    }
  );

  
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot5 = jQuery.jqplot('chart5', 
    [[['Verwerkende industrie', 100],['Retail', 0], ['Primaire producent', 0], 
    ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: false, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { sliceMargin: 4, showDataLabels: true } }, 
      legend: { show:true }
    }
  );
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot6 = jQuery.jqplot('chart6', 
    [[['Verwerkende industrie', 100]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: false, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { sliceMargin: 4, showDataLabels: true } }, 
      legend: { show:true }
    }
  );
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  jQuery.jqplot.config.enablePlugins = true;
  plot7 = jQuery.jqplot('chart7', 
    [[['Verwerkende industrie', 9],['Retail', 8], ['Primaire producent', 7], 
    ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { showDataLabels: true } }, 
      legend: { show:true }
    }
  );
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot8 = jQuery.jqplot('chart8', 
    [[['Verwerkende industrie', 100],['Retail', 0], ['Primaire producent', 0], 
    ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { showDataLabels: true } }, 
      legend: { show:true }
    }
  );
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  jQuery.jqplot.config.enablePlugins = true;
  plot9 = jQuery.jqplot('chart9', 
    [[['Verwerkende industrie', 9],['Retail', 8], ['Primaire producent', 7], 
    ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { 
          fill: false, 
          sliceMargin: 4, 
          showDataLabels: true 
          } 
      }, 
      legend: { show:true }
    }
  );
});
</script>

<script class=\"code\" type=\"text/javascript\">\$(document).ready(function(){
  plot10 = jQuery.jqplot('chart10', 
    [[['Verwerkende industrie', 100],['Retail', 0], ['Primaire producent', 0], 
    ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], 
    {
      title: ' ', 
      seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { 
          fill: false, 
          sliceMargin: 4, 
          showDataLabels: true 
        } 
      }, 
      legend: { show:true }
    }
  );
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

  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.pieRenderer.min.js\"></script>

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
        
        $__internal_7044119da97ad47dad3ef7876e0b9e18ecf3c3429099e916c329e73c1998188c->leave($__internal_7044119da97ad47dad3ef7876e0b9e18ecf3c3429099e916c329e73c1998188c_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/pieTest4.html";
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
/*     <title>Pie Charts and Options 2</title>*/
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
/*     <div id="chart1" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     */
/*     <pre class="code brush:js"></pre>*/
/*  */
/*     <div id="chart2" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     */
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart3" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/*   */
/*     <div id="chart4" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart5" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart6" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart7" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart8" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart9" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/*     <div id="chart10" style="margin-top:20px; margin-left:20px; width:460px; height:300px;"></div>*/
/*     <pre class="code brush:js"></pre>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*     jQuery.jqplot.config.enablePlugins = true;*/
/*     plot1 = jQuery.jqplot('chart1', */
/*         [[['Verwerkende FruedenStunde Companaziert Eine industrie', 9],['Retail', 8], ['Primaire producent', 7], */
/*         ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], */
/*         {*/
/*             title: ' ', */
/*             seriesDefaults: {*/
/*         shadow: false, */
/*         renderer: jQuery.jqplot.PieRenderer, */
/*         rendererOptions: { padding: 2, sliceMargin: 2, showDataLabels: false } */
/*       }, */
/*             legend: { show:true, location: 'e' }*/
/*         }*/
/*     );*/
/* });*/
/* </script>*/
/* */
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot2 = jQuery.jqplot('chart2', */
/*     [[['Verwerkende industrie', 9],['Retail', 0], ['Primaire producent', 0], */
/*     ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 3], ['Bewerkende industrie', 2]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {*/
/*         shadow: false, */
/*         renderer: jQuery.jqplot.PieRenderer, */
/*         rendererOptions: { */
/*           startAngle: 180, */
/*           sliceMargin: 4, */
/*           showDataLabels: true } */
/*       }, */
/*       legend: { show:true, location: 'w' }*/
/*     }*/
/*   );*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot3 = jQuery.jqplot('chart3', */
/*     [[['Verwerkende industrie', 9],['Retail', 0], ['Primaire producent', 0], */
/*     ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 2]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {*/
/*         shadow: false, */
/*         renderer: jQuery.jqplot.PieRenderer, */
/*         rendererOptions: { */
/*           sliceMargin: 4, */
/*           showDataLabels: true */
/*         } */
/*       }, */
/*       legend: { show:true, location: 'e' }*/
/*     }*/
/*   );*/
/* */
/*   */
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot4 = jQuery.jqplot('chart4', */
/*     [[['Verwerkende industrie', 30],['Retail', 0], ['Primaire producent', 0], */
/*     ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: false, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { sliceMargin: 4, showDataLabels: true } }, */
/*       legend: { show:true, location: 'e' }*/
/*     }*/
/*   );*/
/* */
/*   */
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot5 = jQuery.jqplot('chart5', */
/*     [[['Verwerkende industrie', 100],['Retail', 0], ['Primaire producent', 0], */
/*     ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: false, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { sliceMargin: 4, showDataLabels: true } }, */
/*       legend: { show:true }*/
/*     }*/
/*   );*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot6 = jQuery.jqplot('chart6', */
/*     [[['Verwerkende industrie', 100]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: false, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { sliceMargin: 4, showDataLabels: true } }, */
/*       legend: { show:true }*/
/*     }*/
/*   );*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   jQuery.jqplot.config.enablePlugins = true;*/
/*   plot7 = jQuery.jqplot('chart7', */
/*     [[['Verwerkende industrie', 9],['Retail', 8], ['Primaire producent', 7], */
/*     ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { showDataLabels: true } }, */
/*       legend: { show:true }*/
/*     }*/
/*   );*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot8 = jQuery.jqplot('chart8', */
/*     [[['Verwerkende industrie', 100],['Retail', 0], ['Primaire producent', 0], */
/*     ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { showDataLabels: true } }, */
/*       legend: { show:true }*/
/*     }*/
/*   );*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   jQuery.jqplot.config.enablePlugins = true;*/
/*   plot9 = jQuery.jqplot('chart9', */
/*     [[['Verwerkende industrie', 9],['Retail', 8], ['Primaire producent', 7], */
/*     ['Out of home', 6],['Groothandel', 5], ['Grondstof', 4], ['Consument', 3], ['Bewerkende industrie', 2]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { */
/*           fill: false, */
/*           sliceMargin: 4, */
/*           showDataLabels: true */
/*           } */
/*       }, */
/*       legend: { show:true }*/
/*     }*/
/*   );*/
/* });*/
/* </script>*/
/* */
/* <script class="code" type="text/javascript">$(document).ready(function(){*/
/*   plot10 = jQuery.jqplot('chart10', */
/*     [[['Verwerkende industrie', 100],['Retail', 0], ['Primaire producent', 0], */
/*     ['Out of home', 0],['Groothandel', 0], ['Grondstof', 0], ['Consument', 0], ['Bewerkende industrie', 1]]], */
/*     {*/
/*       title: ' ', */
/*       seriesDefaults: {shadow: true, renderer: jQuery.jqplot.PieRenderer, rendererOptions: { */
/*           fill: false, */
/*           sliceMargin: 4, */
/*           showDataLabels: true */
/*         } */
/*       }, */
/*       legend: { show:true }*/
/*     }*/
/*   );*/
/* });*/
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
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.pieRenderer.min.js"></script>*/
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
