<?php

/* @css/Script/graphe.js */
class __TwigTemplate_b9a1ec1dee548771edad6e1054a21163c0664c781baf1d13c8682c63583fa823 extends Twig_Template
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
        $__internal_5ac7a07c60f8ae35f3e61b4ddfc98d52c57357865146666107f1c289f26529e3 = $this->env->getExtension("native_profiler");
        $__internal_5ac7a07c60f8ae35f3e61b4ddfc98d52c57357865146666107f1c289f26529e3->enter($__internal_5ac7a07c60f8ae35f3e61b4ddfc98d52c57357865146666107f1c289f26529e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/graphe.js"));

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
        
        $__internal_5ac7a07c60f8ae35f3e61b4ddfc98d52c57357865146666107f1c289f26529e3->leave($__internal_5ac7a07c60f8ae35f3e61b4ddfc98d52c57357865146666107f1c289f26529e3_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/graphe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
