
function graph(arr) {

    $(document).ready(function () {
        var data = [];
        jQuery.each(arr, function (i, val) {
            data.push([i,val])
        });
        $('#chart1').jqplot([data], {
            series: [{renderer: $.jqplot.BarRenderer}],
            axesDefaults: {
                tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                tickOptions: {
                    angle: -30,
                    fontSize: '10pt'
                }
            },
            seriesColors: ['#85802b', '#00749F'],
            seriesDefaults: {
                renderer: $.jqplot.BarRenderer,
                rendererOptions: {
                    // Set varyBarColor to true to use the custom colors on the bars.
                    varyBarColor: true
                }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer
                }
            }
        });
    });
}


function effgraph() {
    $('#chart1').empty();
}
