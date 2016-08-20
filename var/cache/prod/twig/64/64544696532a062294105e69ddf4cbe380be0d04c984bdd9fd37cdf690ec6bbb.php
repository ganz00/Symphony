<?php

/* @css/Script/graphe.js */
class __TwigTemplate_624067e44c5309fd2580afd33c6d545f8172e54e1dbc06b9ba82c7b3ce6b00f3 extends Twig_Template
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
        echo "
function graph(arr) {

    \$(document).ready(function () {
        var data = [];
        jQuery.each(arr, function (i, val) {
            data.push([i,val])
        });
        \$('#chart1').jqplot([data], {
            series: [{renderer: \$.jqplot.BarRenderer}],
            axesDefaults: {
                tickRenderer: \$.jqplot.CanvasAxisTickRenderer,
                tickOptions: {
                    angle: -30,
                    fontSize: '10pt'
                }
            },
            seriesColors: ['#85802b', '#00749F'],
            seriesDefaults: {
                renderer: \$.jqplot.BarRenderer,
                rendererOptions: {
                    // Set varyBarColor to true to use the custom colors on the bars.
                    varyBarColor: true
                }
            },
            axes: {
                xaxis: {
                    renderer: \$.jqplot.CategoryAxisRenderer
                }
            }
        });
    });
}


function effgraph() {
    \$('#chart1').empty();
}
";
    }

    public function getTemplateName()
    {
        return "@css/Script/graphe.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* function graph(arr) {*/
/* */
/*     $(document).ready(function () {*/
/*         var data = [];*/
/*         jQuery.each(arr, function (i, val) {*/
/*             data.push([i,val])*/
/*         });*/
/*         $('#chart1').jqplot([data], {*/
/*             series: [{renderer: $.jqplot.BarRenderer}],*/
/*             axesDefaults: {*/
/*                 tickRenderer: $.jqplot.CanvasAxisTickRenderer,*/
/*                 tickOptions: {*/
/*                     angle: -30,*/
/*                     fontSize: '10pt'*/
/*                 }*/
/*             },*/
/*             seriesColors: ['#85802b', '#00749F'],*/
/*             seriesDefaults: {*/
/*                 renderer: $.jqplot.BarRenderer,*/
/*                 rendererOptions: {*/
/*                     // Set varyBarColor to true to use the custom colors on the bars.*/
/*                     varyBarColor: true*/
/*                 }*/
/*             },*/
/*             axes: {*/
/*                 xaxis: {*/
/*                     renderer: $.jqplot.CategoryAxisRenderer*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/* }*/
/* */
/* */
/* function effgraph() {*/
/*     $('#chart1').empty();*/
/* }*/
/* */
