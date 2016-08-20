<?php

/* @css/jquery.jqplot/examples/pieTest2.js */
class __TwigTemplate_4d46aa08a69ec505b5ff3263ffc721a1c47932bce9f8c894e1552bdfde93ac6b extends Twig_Template
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
        echo "\$(document).ready(function(){

    \$.jqplot.config.enablePlugins = true;

    s1 = [['a',2], ['b',6], ['c',7], ['d',10]];
    s2 = [['a', 4], ['b', 7], ['c', 6], ['d', 3]];
    s3 = [['a', 2], ['b', 1], ['c', 3], ['d', 3]];
    s4 = [['a', 4], ['b', 3], ['c', 2], ['d', 1]];
    
    s5 = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
    
    plot1 = \$.jqplot('chart1', [s1], {
        seriesDefaults:{
            renderer:\$.jqplot.PieRenderer
        },
        legend: {show:true}
    });
    
    plot2 = \$.jqplot('chart2', [s2], {
        seriesDefaults: {
            renderer:\$.jqplot.PieRenderer,
            rendererOptions:{
                sliceMargin: 4,
                startAngle: -90
            }
        }
    });

    plot3 = \$.jqplot('chart3', [s3], {
        captureRightClick: true,
        seriesDefaults:{
            renderer:\$.jqplot.PieRenderer,
            shadow: false,
            rendererOptions:{
                startAngle: 90,
                sliceMargin: 4,
                highlightMouseDown: true
            }
        },
        legend: {
            show: true,
            location: 'e',
            placement: 'outside'
        }      
    });

    plot5 = \$.jqplot('chart5', [s5], {
        seriesDefaults:{
            renderer:\$.jqplot.PieRenderer
        }
    });
    
    plot6 = \$.jqplot('chart6', [[1,2,3,4]]);
    
    \$('#chart1').bind('jqplotDataClick', 
        function (ev, seriesIndex, pointIndex, data) {
            \$('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
        }
    );
    
    \$('#chart2').bind('jqplotDataHighlight', 
        function (ev, seriesIndex, pointIndex, data) {
            \$('#info2').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
        }
    );
    
    \$('#chart2').bind('jqplotDataUnhighlight', 
        function (ev) {
            \$('#info2').html('Nothing');
        }
    ); 
    
    \$('#chart3').bind('jqplotDataRightClick', 
        function (ev, seriesIndex, pointIndex, data) {
            \$('#info3').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
        }
    );  
    
    \$(document).unload(function() {\$('*').unbind(); });
});";
    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/pieTest2.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* $(document).ready(function(){*/
/* */
/*     $.jqplot.config.enablePlugins = true;*/
/* */
/*     s1 = [['a',2], ['b',6], ['c',7], ['d',10]];*/
/*     s2 = [['a', 4], ['b', 7], ['c', 6], ['d', 3]];*/
/*     s3 = [['a', 2], ['b', 1], ['c', 3], ['d', 3]];*/
/*     s4 = [['a', 4], ['b', 3], ['c', 2], ['d', 1]];*/
/*     */
/*     s5 = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];*/
/*     */
/*     plot1 = $.jqplot('chart1', [s1], {*/
/*         seriesDefaults:{*/
/*             renderer:$.jqplot.PieRenderer*/
/*         },*/
/*         legend: {show:true}*/
/*     });*/
/*     */
/*     plot2 = $.jqplot('chart2', [s2], {*/
/*         seriesDefaults: {*/
/*             renderer:$.jqplot.PieRenderer,*/
/*             rendererOptions:{*/
/*                 sliceMargin: 4,*/
/*                 startAngle: -90*/
/*             }*/
/*         }*/
/*     });*/
/* */
/*     plot3 = $.jqplot('chart3', [s3], {*/
/*         captureRightClick: true,*/
/*         seriesDefaults:{*/
/*             renderer:$.jqplot.PieRenderer,*/
/*             shadow: false,*/
/*             rendererOptions:{*/
/*                 startAngle: 90,*/
/*                 sliceMargin: 4,*/
/*                 highlightMouseDown: true*/
/*             }*/
/*         },*/
/*         legend: {*/
/*             show: true,*/
/*             location: 'e',*/
/*             placement: 'outside'*/
/*         }      */
/*     });*/
/* */
/*     plot5 = $.jqplot('chart5', [s5], {*/
/*         seriesDefaults:{*/
/*             renderer:$.jqplot.PieRenderer*/
/*         }*/
/*     });*/
/*     */
/*     plot6 = $.jqplot('chart6', [[1,2,3,4]]);*/
/*     */
/*     $('#chart1').bind('jqplotDataClick', */
/*         function (ev, seriesIndex, pointIndex, data) {*/
/*             $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);*/
/*         }*/
/*     );*/
/*     */
/*     $('#chart2').bind('jqplotDataHighlight', */
/*         function (ev, seriesIndex, pointIndex, data) {*/
/*             $('#info2').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);*/
/*         }*/
/*     );*/
/*     */
/*     $('#chart2').bind('jqplotDataUnhighlight', */
/*         function (ev) {*/
/*             $('#info2').html('Nothing');*/
/*         }*/
/*     ); */
/*     */
/*     $('#chart3').bind('jqplotDataRightClick', */
/*         function (ev, seriesIndex, pointIndex, data) {*/
/*             $('#info3').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);*/
/*         }*/
/*     );  */
/*     */
/*     $(document).unload(function() {$('*').unbind(); });*/
/* });*/
