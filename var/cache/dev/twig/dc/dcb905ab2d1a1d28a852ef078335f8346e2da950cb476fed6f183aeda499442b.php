<?php

/* @css/jquery.jqplot/examples/kcp_lorenz.html */
class __TwigTemplate_1dfb85afa53ecd55eb1c08b9d69963368699585cdfc717043dc4c4a4c4140c6e extends Twig_Template
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
        $__internal_130d69a2485cdbad8cf92920bd82b94e39debf6ac883c03c82c3fdfbd192312c = $this->env->getExtension("native_profiler");
        $__internal_130d69a2485cdbad8cf92920bd82b94e39debf6ac883c03c82c3fdfbd192312c->enter($__internal_130d69a2485cdbad8cf92920bd82b94e39debf6ac883c03c82c3fdfbd192312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/kcp_lorenz.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>

    <title>Lorenz Curves</title>

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


  <link class=\"include\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.csss\" rel=\"Stylesheet\" /> 

  <style type=\"text/css\">

    .chart-container {
        border: 1px solid darkblue;
        padding: 30px;
        width: 500px;
        height: 400px;
        
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

    <table class=\"app\">
        <td class=\"controls\">

            <div>
                Data Series:
                <ul>
                    <li><input class=\"dataSeries-checkbox\" name=\"dataSeries_national\" value=\"national\" type=\"checkbox\" checked />National</li>
                    <li><input class=\"dataSeries-checkbox\" name=\"dataSeries_urban\" value=\"urban\" type=\"checkbox\" />Urban</li>
                    <li><input class=\"dataSeries-checkbox\" name=\"dataSeries_rural\" value=\"rural\" type=\"checkbox\" />Rural</li>
                </ul>
            </div>

            <div>
                Background Color:
                <ul>
                    <li><input name=\"backgroundColor\" value=\"white\" type=\"radio\" checked />Default</li>
                    <li><input name=\"backgroundColor\" value=\"#efefef\" type=\"radio\" />Gray</li>
                </ul>
            </div>

            <div>
                Line Width:
                <ul>
                    <li><input name=\"lineWidth\" value=\"2.5\" type=\"radio\" checked />Thin</li>
                    <li><input name=\"lineWidth\" value=\"5\" type=\"radio\" />Thick</li>
                </ul>
            </div>

            <div>
                Grids:
                <ul>
                    <li><input name=\"gridsVertical\" value=\"vertical\" type=\"checkbox\" checked />Vertical</li>
                    <li><input name=\"gridsHorizontal\" value=\"horizontal\" type=\"checkbox\" checked />Horizontal</li>
                </ul>
            </div>

            <div>
                Cutoff Lines:
                <ul>
                    <li><input name=\"cutoffLines\" value=\"showCutoffLines\" type=\"checkbox\" checked />Show</li>
                    <li>Low:&nbsp;&nbsp;<input name=\"userLine1\" value=\"42\" type=\"text\" size=\"6\" /></li>
                    <li>High:&nbsp;<input name=\"userLine2\" value=\"75\" type=\"text\" size=\"6\" /></li>
                </ul>
            </div>
        </td>
        
        <td class=\"chart\">
            <div class=\"chart-container\">    
                <div id=\"chart1\"></div>
                <div class=\"jqplot-datestamp\"></div>
            </div>
        </td>

    </table>

    <pre class=\"code brush:js\"></pre>
  

  
  <script class=\"code\" type=\"text/javascript\">
\$(document).ready(function(){
    var dataSets = {
        national: [[0, 0], [0.034259, 0.000122], [0.036908, 0.000271], [0.039957, 0.000457], [0.043623, 0.000699], [0.048008, 0.001005], [0.053278, 0.001404], [0.059665, 0.001916], [0.067405, 0.002587], [0.076951, 0.003482], [0.088909, 0.004676], [0.103706, 0.006234], [0.121406, 0.008198], [0.142376, 0.010698], [0.167456, 0.013945], [0.198392, 0.018266], [0.237371, 0.024152], [0.287096, 0.03217], [0.350664, 0.043128], [0.43322, 0.058856], [0.546538, 0.08196], [0.703419, 0.116382], [0.921534, 0.167573], [1.225405, 0.244101], [1.658248, 0.362099], [2.286919, 0.545089], [3.168531, 0.811148], [4.338121, 1.180312], [5.828025, 1.677699], [7.674282, 2.317937], [9.856185, 3.124879], [12.427952, 4.135038], [15.374906, 5.337835], [18.559853, 6.704187], [21.938501, 8.240167], [25.480211, 9.968066], [29.195872, 11.896316], [33.040813, 13.995922], [36.929108, 16.268393], [40.883239, 18.753271], [44.934876, 21.456742], [48.979949, 24.281483], [52.874709, 27.163823], [56.569122, 30.090586], [60.143349, 33.155912], [63.632698, 36.332609], [67.019887, 39.647977], [70.272329, 42.982924], [73.31569, 46.301522], [76.137996, 49.580067], [78.734309, 52.80729], [81.144203, 56.013671], [83.364771, 59.154237], [85.40072, 62.237023], [87.276365, 65.274088], [88.994984, 68.231226], [90.547773, 71.063226], [91.930153, 73.740825], [93.143588, 76.235257], [94.19365, 78.526502], [95.093093, 80.626967], [95.863261, 82.534767], [96.518119, 84.276606], [97.07861, 85.871008], [97.555507, 87.313822], [97.958887, 88.612275], [98.29631, 89.76839], [98.57645, 90.788966], [98.805892, 91.680096], [98.994988, 92.471419], [99.15183, 93.168954], [99.279882, 93.771844], [99.384116, 94.303287], [99.470272, 94.773123], [99.541871, 95.191639], [99.601871, 95.572501], [99.653556, 95.924822], [99.698334, 96.25129], [99.737113, 96.553878], [99.770733, 96.834228], [99.800151, 97.099569], [99.826487, 97.355328], [99.85018, 97.600349], [99.871291, 97.832168], [99.889939, 98.050737], [99.906286, 98.254414], [99.92045, 98.442305], [99.932702, 98.616245], [99.9433, 98.776877], [99.952485, 98.926517], [99.960528, 99.066855], [99.96755, 99.196967], [99.9736, 99.316087], [99.978742, 99.423943], [99.983126, 99.523155], [99.986929, 99.615949], [99.990275, 99.703425], [99.993221, 99.785398], [99.995794, 99.861721], [99.998031, 99.932812], [100, 100]],

        urban: [[0, 0], [0.022476, 0.000211], [0.026364, 0.000483], [0.031079, 0.000832], [0.03683, 0.001286], [0.043812, 0.001867], [0.052123, 0.002596], [0.061977, 0.003523], [0.07392, 0.00472], [0.08836, 0.006245], [0.105627, 0.008192], [0.126649, 0.010745], [0.152991, 0.014185], [0.186685, 0.01887], [0.230466, 0.025421], [0.288337, 0.034602], [0.364009, 0.047302], [0.462362, 0.064833], [0.591815, 0.0896], [0.763717, 0.124292], [0.990265, 0.173076], [1.291577, 0.242086], [1.689361, 0.337485], [2.197829, 0.465168], [2.833156, 0.632983], [3.607935, 0.847553], [4.531058, 1.117227], [5.612064, 1.448077], [6.829389, 1.832426], [8.150496, 2.276607], [9.587093, 2.787319], [11.139531, 3.375891], [12.843232, 4.068491], [14.744, 4.894875], [16.882944, 5.879821], [19.274088, 7.043989], [21.898373, 8.377077], [24.70402, 9.889069], [27.725078, 11.639484], [31.02485, 13.647365], [34.577391, 15.957918], [38.361881, 18.496115], [42.220399, 21.242326], [46.204947, 24.281703], [50.279452, 27.501128], [54.284933, 30.800251], [58.020934, 34.003512], [61.527083, 37.314968], [65.059633, 40.928214], [68.631977, 44.751812], [72.134933, 48.615769], [75.35901, 52.332308], [78.289798, 55.927374], [80.980675, 59.439449], [83.426691, 62.80086], [85.63051, 66.024375], [87.600439, 69.040545], [89.324337, 71.839628], [90.82494, 74.405703], [92.132382, 76.808559], [93.28344, 79.051197], [94.291515, 81.128944], [95.165628, 83.025406], [95.917569, 84.765777], [96.566309, 86.346045], [97.111687, 87.728898], [97.557321, 88.935715], [97.923776, 89.98232], [98.224115, 90.896808], [98.472073, 91.712405], [98.683427, 92.454973], [98.864412, 93.127257], [99.018636, 93.73762], [99.150765, 94.298112], [99.266909, 94.826197], [99.369967, 95.321988], [99.460335, 95.779249], [99.538693, 96.200706], [99.60658, 96.587402], [99.665149, 96.942925], [99.716006, 97.27086], [99.76009, 97.572073], [99.798168, 97.847633], [99.830962, 98.099393], [99.858805, 98.322381], [99.881656, 98.513678], [99.900176, 98.68098], [99.91564, 98.83196], [99.928971, 98.970904], [99.940546, 99.098968], [99.950572, 99.216266], [99.959091, 99.321169], [99.966315, 99.415471], [99.97239, 99.500041], [99.97761, 99.578707], [99.982252, 99.653757], [99.986425, 99.725788], [99.990223, 99.796075], [99.993742, 99.865362], [99.996997, 99.933105], [100, 100]],

        rural: [[0, 0], [0.044856, 0.00021], [0.048153, 0.000449], [0.051764, 0.000737], [0.055907, 0.001092], [0.060801, 0.00155], [0.066762, 0.002138], [0.073899, 0.002894], [0.082612, 0.003876], [0.093168, 0.005148], [0.106164, 0.006835], [0.122508, 0.009095], [0.142886, 0.012069], [0.16758, 0.015833], [0.19669, 0.020566], [0.23118, 0.026579], [0.273098, 0.034447], [0.325019, 0.044958], [0.390807, 0.059161], [0.474177, 0.078318], [0.579565, 0.104359], [0.719638, 0.14226], [0.911325, 0.197784], [1.175054, 0.278915], [1.537895, 0.397967], [2.041596, 0.57646], [2.758826, 0.848809], [3.776691, 1.250019], [5.133703, 1.8048], [6.852621, 2.537016], [8.948744, 3.478047], [11.417648, 4.640509], [14.293846, 6.085098], [17.634387, 7.851123], [21.360828, 9.886831], [25.29956, 12.160142], [29.428878, 14.674388], [33.707138, 17.452533], [38.129755, 20.506174], [42.671778, 23.796002], [47.229102, 27.303349], [51.800588, 31.060857], [56.383771, 35.053496], [60.886558, 39.145526], [65.12792, 43.181575], [69.030354, 47.116849], [72.617033, 51.025646], [75.986887, 54.923636], [79.112304, 58.743632], [81.975561, 62.443223], [84.537139, 65.922443], [86.782817, 69.135506], [88.71901, 72.103335], [90.413815, 74.878966], [91.908817, 77.500639], [93.228911, 79.953304], [94.381653, 82.20716], [95.359352, 84.209133], [96.170082, 85.973719], [96.837248, 87.5051], [97.378991, 88.838761], [97.8273, 90.020506], [98.200135, 91.065991], [98.506646, 91.96714], [98.752685, 92.735267], [98.949784, 93.390185], [99.10766, 93.94721], [99.232528, 94.417506], [99.334335, 94.838423], [99.42121, 95.226477], [99.497035, 95.589049], [99.563629, 95.927413], [99.621726, 96.240868], [99.672192, 96.530566], [99.715746, 96.794464], [99.752893, 97.034788], [99.784601, 97.251679], [99.811139, 97.442528], [99.833203, 97.614678], [99.852181, 97.774104], [99.868723, 97.92227], [99.883153, 98.05955], [99.89576, 98.188276], [99.906951, 98.310902], [99.917064, 98.429897], [99.926265, 98.545001], [99.9346, 98.656238], [99.942191, 98.76409], [99.949086, 98.868769], [99.955426, 98.971691], [99.961279, 99.072938], [99.966677, 99.172455], [99.971673, 99.270765], [99.976302, 99.367541], [99.980575, 99.462525], [99.984496, 99.554946], [99.988063, 99.644199], [99.991314, 99.731953], [99.994366, 99.820708], [99.997264, 99.910225], [100, 100]]
    } 

    // Initial values for the user lines.
    var userLine1Val = 42;
    var userLine2Val = 75;   

    // find the index of the data point with the closest y value.
    // assumes y values are monotonically increasing.
    var findXValue = function (y, data) {
        var l = data.length;
        var temp;
        var d;
        var idx;
        var mid = Math.round(l/2);
        var interval = mid;
        var prevInterval = mid;
        var dist = null;
        var absDist = null;
        var hold = null;
        var ret = null;
        var x, x0, x1, y0, y1, lowidx, hiidx;

        // check to see if we're in range
        if (y > data[l-1][1]) {
            return [l-1, data[l-1]];
        }
        else if (y < data[0][1]) {
            return [0, data[0]];
        }

        for (var i=0; i<l; i++) {
            d = data[mid][1];
            dist = d - y;
            absDist = Math.abs(dist);
            interval = Math.round(interval/2);
            
            if (absDist < hold || hold === null) {
                hold = absDist;
                idx = mid;
            }

            // if we're right on the pont, get out of here
            if (dist === 0) { 
                ret = [idx, data[idx]];
                break;
            }

            // if we've narrowed it down to an interval, 
            // interpolate and get out of here
            else if (prevInterval === 1) {
                // to the right, interpolate -1 to here
                if (dist > 0) {
                    lowidx = idx - 1;
                    hiidx = idx;
                }
                else {
                    lowidx = idx;
                    hiidx = idx + 1;
                }

                x0 = data[lowidx][0];
                x1 = data[hiidx][0];
                y0 = data[lowidx][1];
                y1 = data[hiidx][1];

                x = x0 + (y - y0) / (y1 - y0) * (x1 - x0);

                ret = [idx, [x, y]];
                break;
            }
            // to the right, go left and reduce
            else if (dist > 0) {
                mid -= interval;
            }
            // to the left go right and increase
            else if (dist < 0) {
                mid += interval;
            }

            prevInterval = interval;
        }
        return ret;
    }

    // determine initial values for horizontal and vertical overlay lines.

    var line1x = findXValue(userLine1Val, dataSets.national)[1][0];
    var line2x = findXValue(userLine2Val, dataSets.national)[1][0];;
    var line3y = userLine1Val;
    var line4y = userLine2Val;

    // make the plot
    
    plot1 = \$.jqplot(\"chart1\", [dataSets.national, dataSets.urban, dataSets.rural], {
        title: \"Lorenz Curve\",
        // To control the size of the grid, can set the gridPadding option,

        // gridPadding: {top: 40, bottom: 60, left: 70, right: 50},

        // but must know size of container ahead of time and figure out what paddings
        // you want to get a square grid.
        // Alternatively, can use the gridDimensions option.
        // gridDimensions doesn't get reapplied on replot() because plots
        // _gridPadding attribute is set the first time it is drawn and it
        // won't be overwritten.

        gridDimensions: {height: 290, width: 290},
        seriesColors: [\"#4bb2c5\", \"#c54b62\", \"#b2c54b\"],
        cursor: {
            show: false
        },
        highlighter: {
            show: true,
            showMarker: false,
            useAxesFormatters: false,
            formatString: '%d, %.1f'
        },
        axesDefaults: {
            labelRenderer: \$.jqplot.CanvasAxisLabelRenderer
        },
        seriesDefaults: {
            showMarker: false
        },
        series: [
            {show: true},
            {show: false},
            {show: false}
        ],
        axes: {
            xaxis: {
                label: '% of Population',
                pad:0
            },
            yaxis: {
                label: '% of Expenditure',
                pad: 0
            }
        },
        grid: {
            drawBorder: false,
            shadow: false,
            // background: 'rgba(0,0,0,0)'  works.
            background: \"white\"
        },
        canvasOverlay: {
            show: true,
            objects: [,
                {line: {
                    name: \"line5\",
                    start: [0,0],
                    stop: [100,100],
                    color: \"#666666\",
                    shadow: false,
                    showTooltip: false,
                    lineWidth: 3
                }},
                {horizontalLine: {
                    name: \"line1\",
                    y: userLine1Val,
                    color: \"#d4c35D\",
                    xmin: 0,
                    xmax: line1x,
                    shadow: false,
                    showTooltip: true,
                    tooltipFormatString: \"%nPS=%'d\",
                    showTooltipPrecision: 0.5
                }},
                {horizontalLine: {
                    name: \"line2\",
                    y: userLine2Val,
                    color: \"#d4c35D\",
                    xmin: 0,
                    xmax: line2x,
                    shadow: false,
                    showTooltip: true,
                    tooltipFormatString: \"%nPS=%'d\",
                    showTooltipPrecision: 0.5
                }},
                {verticalLine: {
                    name: \"line3\",
                    x: line1x,
                    color: \"#d4c35D\",
                    ymin: 0,
                    ymax: line3y,
                    shadow: false,
                    showTooltip: true,
                    tooltipFormatString: \"PCE=%'d\",
                    showTooltipPrecision: 0.5
                }},
                {verticalLine: {
                    name: \"line4\",
                    x: line2x,
                    color: \"#d4c35D\",
                    ymin: 0,
                    ymax: line4y,
                    shadow: false,
                    showTooltip: true,
                    tooltipFormatString: \"PCE=%'d\",
                    showTooltipPrecision: 0.5
                }}
            ]
        }
    });

    // add a date at the bottom.

    var d = new \$.jsDate();
    \$(\"div.jqplot-datestamp\").html(\"Generated on \"+d.strftime(\"%v\"));

    // initialize form elements
    // set these before attaching event handlers.

    \$(\"input.dataSeries-checkbox\").attr(\"checked\", false);
    \$(\"input.dataSeries-checkbox[name=dataSeries_national]\").attr(\"checked\", true);

    \$(\"input[type=radio][name=backgroundColor]\").attr(\"checked\", false);
    \$(\"input[type=radio][name=backgroundColor][value=white]\").attr(\"checked\", true);

    \$(\"input[type=radio][name=lineWidth]\").attr(\"checked\", false);
    \$('input[type=radio][name=lineWidth][value=\"2.5\"]').attr(\"checked\", true);

    \$(\"input[type=text][name=userLine1]\").val(userLine1Val);
    \$(\"input[type=text][name=userLine2]\").val(userLine2Val);

    \$(\"input[type=checkbox][name=gridsVertical]\").attr(\"checked\", true);
    \$(\"input[type=checkbox][name=gridsHorizontal]\").attr(\"checked\", true);
    \$(\"input[type=checkbox][name=cutoffLines]\").attr(\"checked\", true);


    // attach event handlers to form elements

    \$(\"input[type=radio][name=backgroundColor]\").change(function(){ 
        plot1.grid.background = \$(this).val();
        plot1.replot();
    });

    \$(\"input.dataSeries-checkbox\").change(function(){ 

        plot1.series[0].show = false;
        plot1.series[1].show = false;
        plot1.series[2].show = false;

        if (\$('input[name=dataSeries_national]').get(0).checked === true) {
            plot1.series[0].show = true;
        }

        if (\$('input[name=dataSeries_urban]').get(0).checked === true) {
            plot1.series[1].show = true;
        }

        if (\$('input[name=dataSeries_rural]').get(0).checked === true) {
            plot1.series[2].show = true;
        }

        // var co = plot1.plugins.canvasOverlay;
        // var x1max = findXValue(\$(\"input[type=text][name=userLine1]\").val(), dataSets[val])[1][0];
        // co.get(\"line1\").options.xmax = co.get(\"line3\").options.x = x1max;
        // var x2max = findXValue(\$(\"input[type=text][name=userLine2]\").val(), dataSets[val])[1][0];
        // co.get(\"line2\").options.xmax = co.get(\"line4\").options.x = x2max;

        plot1.replot();
    });

    \$(\"input[type=checkbox][name=gridsVertical]\").change(function(){
        plot1.axes.xaxis.tickOptions.showGridline = this.checked;
        plot1.replot();
    });

    \$(\"input[type=checkbox][name=gridsHorizontal]\").change(function(){
        plot1.axes.yaxis.tickOptions.showGridline = this.checked;
        plot1.replot();
    });

    \$(\"input[type=checkbox][name=cutoffLines]\").change(function(){
        var co = plot1.plugins.canvasOverlay;
        if (this.checked) {
            co.get('line1').options.show = true;
            co.get('line2').options.show = true;
            co.get('line3').options.show = true;
            co.get('line4').options.show = true;
        }
        else {
            co.get('line1').options.show = false;
            co.get('line2').options.show = false;
            co.get('line3').options.show = false;
            co.get('line4').options.show = false;
        }
        plot1.replot();
    });

    \$(\"input[type=text][name=userLine1]\").keyup(function(){
        var val = parseFloat(\$(this).val());

        var co = plot1.plugins.canvasOverlay;

        co.get(\"line1\").options.y = val;
        co.get(\"line3\").options.ymax = val;

        var xx = findXValue(val, plot1.series[0].data)[1][0];
        co.get(\"line1\").options.xmax = co.get(\"line3\").options.x = xx;

        plot1.replot();
    });

    \$(\"input[type=text][name=userLine2]\").keyup(function(){
        var val = parseFloat(\$(this).val());

        var co = plot1.plugins.canvasOverlay;

        co.get(\"line2\").options.y = val;
        co.get(\"line4\").options.ymax = val;
        
        var xx = findXValue(val, plot1.series[0].data)[1][0];
        co.get(\"line2\").options.xmax = co.get(\"line4\").options.x = xx;

        plot1.replot();
    });

    \$(\"input[type=radio][name=lineWidth]\").change(function(){
        var val = parseFloat(\$(this).val()), shadowOffset; 
        plot1.series[0].renderer.shapeRenderer.lineWidth = val;
        plot1.series[0].renderer.shadowRenderer.lineWidth = val;
        // for thick lines, scale shadow offset.
        if (val > 2.5) {
            shadowOffset = 1.25 * (1 + (Math.atan((val/2.5))/0.785398163 - 1)*0.6);
            // var shadow_offset = this.shadowOffset;
        }
        // for skinny lines, don't make such a big shadow.
        else {
            shadowOffset = 1.25*Math.atan((val/2.5))/0.785398163;
        }
        plot1.series[0].renderer.shadowRenderer.offset = shadowOffset;
        for (var i=0, l=plot1.plugins.canvasOverlay.objects.length; i<l; i++) {
            plot1.plugins.canvasOverlay.objects[i].options.lineWidth = val;
        }
        plot1.replot();
    });
    
    
    \$(\"div.chart-container\").resizable({delay:20, aspectRatio: true});    

    \$(\"div.chart-container\").bind(\"resize\", function(event, ui) {
        plot1.replot();
    });

    \$(\".jqplot-target\").mouseleave(function(){ \$('.jqplot-canvasOverlay-tooltip, .jqplot-highlighter-tooltip, .jqpot-cursor-tooltip').hide(); });
});

</script>


<!-- End example scripts -->

<!-- Don't touch this! -->


    <script class=\"include\" type=\"text/javascript\" src=\"../jquery.jqplot.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shCore.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shBrushJScript.min.js\"></script>
    <script type=\"text/javascript\" src=\"syntaxhighlighter/scripts/shBrushXml.min.js\"></script>
<!-- End Don't touch this! -->

<!-- Additional plugins go here -->>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.logAxisRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.cursor.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasTextRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasAxisLabelRenderer.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.highlighter.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"../plugins/jqplot.canvasOverlay.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js\"></script>

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
        
        $__internal_130d69a2485cdbad8cf92920bd82b94e39debf6ac883c03c82c3fdfbd192312c->leave($__internal_130d69a2485cdbad8cf92920bd82b94e39debf6ac883c03c82c3fdfbd192312c_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/kcp_lorenz.html";
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
/*     <title>Lorenz Curves</title>*/
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
/*   <link class="include" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.csss" rel="Stylesheet" /> */
/* */
/*   <style type="text/css">*/
/* */
/*     .chart-container {*/
/*         border: 1px solid darkblue;*/
/*         padding: 30px;*/
/*         width: 500px;*/
/*         height: 400px;*/
/*         */
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
/*     <table class="app">*/
/*         <td class="controls">*/
/* */
/*             <div>*/
/*                 Data Series:*/
/*                 <ul>*/
/*                     <li><input class="dataSeries-checkbox" name="dataSeries_national" value="national" type="checkbox" checked />National</li>*/
/*                     <li><input class="dataSeries-checkbox" name="dataSeries_urban" value="urban" type="checkbox" />Urban</li>*/
/*                     <li><input class="dataSeries-checkbox" name="dataSeries_rural" value="rural" type="checkbox" />Rural</li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 Background Color:*/
/*                 <ul>*/
/*                     <li><input name="backgroundColor" value="white" type="radio" checked />Default</li>*/
/*                     <li><input name="backgroundColor" value="#efefef" type="radio" />Gray</li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 Line Width:*/
/*                 <ul>*/
/*                     <li><input name="lineWidth" value="2.5" type="radio" checked />Thin</li>*/
/*                     <li><input name="lineWidth" value="5" type="radio" />Thick</li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 Grids:*/
/*                 <ul>*/
/*                     <li><input name="gridsVertical" value="vertical" type="checkbox" checked />Vertical</li>*/
/*                     <li><input name="gridsHorizontal" value="horizontal" type="checkbox" checked />Horizontal</li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 Cutoff Lines:*/
/*                 <ul>*/
/*                     <li><input name="cutoffLines" value="showCutoffLines" type="checkbox" checked />Show</li>*/
/*                     <li>Low:&nbsp;&nbsp;<input name="userLine1" value="42" type="text" size="6" /></li>*/
/*                     <li>High:&nbsp;<input name="userLine2" value="75" type="text" size="6" /></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </td>*/
/*         */
/*         <td class="chart">*/
/*             <div class="chart-container">    */
/*                 <div id="chart1"></div>*/
/*                 <div class="jqplot-datestamp"></div>*/
/*             </div>*/
/*         </td>*/
/* */
/*     </table>*/
/* */
/*     <pre class="code brush:js"></pre>*/
/*   */
/* */
/*   */
/*   <script class="code" type="text/javascript">*/
/* $(document).ready(function(){*/
/*     var dataSets = {*/
/*         national: [[0, 0], [0.034259, 0.000122], [0.036908, 0.000271], [0.039957, 0.000457], [0.043623, 0.000699], [0.048008, 0.001005], [0.053278, 0.001404], [0.059665, 0.001916], [0.067405, 0.002587], [0.076951, 0.003482], [0.088909, 0.004676], [0.103706, 0.006234], [0.121406, 0.008198], [0.142376, 0.010698], [0.167456, 0.013945], [0.198392, 0.018266], [0.237371, 0.024152], [0.287096, 0.03217], [0.350664, 0.043128], [0.43322, 0.058856], [0.546538, 0.08196], [0.703419, 0.116382], [0.921534, 0.167573], [1.225405, 0.244101], [1.658248, 0.362099], [2.286919, 0.545089], [3.168531, 0.811148], [4.338121, 1.180312], [5.828025, 1.677699], [7.674282, 2.317937], [9.856185, 3.124879], [12.427952, 4.135038], [15.374906, 5.337835], [18.559853, 6.704187], [21.938501, 8.240167], [25.480211, 9.968066], [29.195872, 11.896316], [33.040813, 13.995922], [36.929108, 16.268393], [40.883239, 18.753271], [44.934876, 21.456742], [48.979949, 24.281483], [52.874709, 27.163823], [56.569122, 30.090586], [60.143349, 33.155912], [63.632698, 36.332609], [67.019887, 39.647977], [70.272329, 42.982924], [73.31569, 46.301522], [76.137996, 49.580067], [78.734309, 52.80729], [81.144203, 56.013671], [83.364771, 59.154237], [85.40072, 62.237023], [87.276365, 65.274088], [88.994984, 68.231226], [90.547773, 71.063226], [91.930153, 73.740825], [93.143588, 76.235257], [94.19365, 78.526502], [95.093093, 80.626967], [95.863261, 82.534767], [96.518119, 84.276606], [97.07861, 85.871008], [97.555507, 87.313822], [97.958887, 88.612275], [98.29631, 89.76839], [98.57645, 90.788966], [98.805892, 91.680096], [98.994988, 92.471419], [99.15183, 93.168954], [99.279882, 93.771844], [99.384116, 94.303287], [99.470272, 94.773123], [99.541871, 95.191639], [99.601871, 95.572501], [99.653556, 95.924822], [99.698334, 96.25129], [99.737113, 96.553878], [99.770733, 96.834228], [99.800151, 97.099569], [99.826487, 97.355328], [99.85018, 97.600349], [99.871291, 97.832168], [99.889939, 98.050737], [99.906286, 98.254414], [99.92045, 98.442305], [99.932702, 98.616245], [99.9433, 98.776877], [99.952485, 98.926517], [99.960528, 99.066855], [99.96755, 99.196967], [99.9736, 99.316087], [99.978742, 99.423943], [99.983126, 99.523155], [99.986929, 99.615949], [99.990275, 99.703425], [99.993221, 99.785398], [99.995794, 99.861721], [99.998031, 99.932812], [100, 100]],*/
/* */
/*         urban: [[0, 0], [0.022476, 0.000211], [0.026364, 0.000483], [0.031079, 0.000832], [0.03683, 0.001286], [0.043812, 0.001867], [0.052123, 0.002596], [0.061977, 0.003523], [0.07392, 0.00472], [0.08836, 0.006245], [0.105627, 0.008192], [0.126649, 0.010745], [0.152991, 0.014185], [0.186685, 0.01887], [0.230466, 0.025421], [0.288337, 0.034602], [0.364009, 0.047302], [0.462362, 0.064833], [0.591815, 0.0896], [0.763717, 0.124292], [0.990265, 0.173076], [1.291577, 0.242086], [1.689361, 0.337485], [2.197829, 0.465168], [2.833156, 0.632983], [3.607935, 0.847553], [4.531058, 1.117227], [5.612064, 1.448077], [6.829389, 1.832426], [8.150496, 2.276607], [9.587093, 2.787319], [11.139531, 3.375891], [12.843232, 4.068491], [14.744, 4.894875], [16.882944, 5.879821], [19.274088, 7.043989], [21.898373, 8.377077], [24.70402, 9.889069], [27.725078, 11.639484], [31.02485, 13.647365], [34.577391, 15.957918], [38.361881, 18.496115], [42.220399, 21.242326], [46.204947, 24.281703], [50.279452, 27.501128], [54.284933, 30.800251], [58.020934, 34.003512], [61.527083, 37.314968], [65.059633, 40.928214], [68.631977, 44.751812], [72.134933, 48.615769], [75.35901, 52.332308], [78.289798, 55.927374], [80.980675, 59.439449], [83.426691, 62.80086], [85.63051, 66.024375], [87.600439, 69.040545], [89.324337, 71.839628], [90.82494, 74.405703], [92.132382, 76.808559], [93.28344, 79.051197], [94.291515, 81.128944], [95.165628, 83.025406], [95.917569, 84.765777], [96.566309, 86.346045], [97.111687, 87.728898], [97.557321, 88.935715], [97.923776, 89.98232], [98.224115, 90.896808], [98.472073, 91.712405], [98.683427, 92.454973], [98.864412, 93.127257], [99.018636, 93.73762], [99.150765, 94.298112], [99.266909, 94.826197], [99.369967, 95.321988], [99.460335, 95.779249], [99.538693, 96.200706], [99.60658, 96.587402], [99.665149, 96.942925], [99.716006, 97.27086], [99.76009, 97.572073], [99.798168, 97.847633], [99.830962, 98.099393], [99.858805, 98.322381], [99.881656, 98.513678], [99.900176, 98.68098], [99.91564, 98.83196], [99.928971, 98.970904], [99.940546, 99.098968], [99.950572, 99.216266], [99.959091, 99.321169], [99.966315, 99.415471], [99.97239, 99.500041], [99.97761, 99.578707], [99.982252, 99.653757], [99.986425, 99.725788], [99.990223, 99.796075], [99.993742, 99.865362], [99.996997, 99.933105], [100, 100]],*/
/* */
/*         rural: [[0, 0], [0.044856, 0.00021], [0.048153, 0.000449], [0.051764, 0.000737], [0.055907, 0.001092], [0.060801, 0.00155], [0.066762, 0.002138], [0.073899, 0.002894], [0.082612, 0.003876], [0.093168, 0.005148], [0.106164, 0.006835], [0.122508, 0.009095], [0.142886, 0.012069], [0.16758, 0.015833], [0.19669, 0.020566], [0.23118, 0.026579], [0.273098, 0.034447], [0.325019, 0.044958], [0.390807, 0.059161], [0.474177, 0.078318], [0.579565, 0.104359], [0.719638, 0.14226], [0.911325, 0.197784], [1.175054, 0.278915], [1.537895, 0.397967], [2.041596, 0.57646], [2.758826, 0.848809], [3.776691, 1.250019], [5.133703, 1.8048], [6.852621, 2.537016], [8.948744, 3.478047], [11.417648, 4.640509], [14.293846, 6.085098], [17.634387, 7.851123], [21.360828, 9.886831], [25.29956, 12.160142], [29.428878, 14.674388], [33.707138, 17.452533], [38.129755, 20.506174], [42.671778, 23.796002], [47.229102, 27.303349], [51.800588, 31.060857], [56.383771, 35.053496], [60.886558, 39.145526], [65.12792, 43.181575], [69.030354, 47.116849], [72.617033, 51.025646], [75.986887, 54.923636], [79.112304, 58.743632], [81.975561, 62.443223], [84.537139, 65.922443], [86.782817, 69.135506], [88.71901, 72.103335], [90.413815, 74.878966], [91.908817, 77.500639], [93.228911, 79.953304], [94.381653, 82.20716], [95.359352, 84.209133], [96.170082, 85.973719], [96.837248, 87.5051], [97.378991, 88.838761], [97.8273, 90.020506], [98.200135, 91.065991], [98.506646, 91.96714], [98.752685, 92.735267], [98.949784, 93.390185], [99.10766, 93.94721], [99.232528, 94.417506], [99.334335, 94.838423], [99.42121, 95.226477], [99.497035, 95.589049], [99.563629, 95.927413], [99.621726, 96.240868], [99.672192, 96.530566], [99.715746, 96.794464], [99.752893, 97.034788], [99.784601, 97.251679], [99.811139, 97.442528], [99.833203, 97.614678], [99.852181, 97.774104], [99.868723, 97.92227], [99.883153, 98.05955], [99.89576, 98.188276], [99.906951, 98.310902], [99.917064, 98.429897], [99.926265, 98.545001], [99.9346, 98.656238], [99.942191, 98.76409], [99.949086, 98.868769], [99.955426, 98.971691], [99.961279, 99.072938], [99.966677, 99.172455], [99.971673, 99.270765], [99.976302, 99.367541], [99.980575, 99.462525], [99.984496, 99.554946], [99.988063, 99.644199], [99.991314, 99.731953], [99.994366, 99.820708], [99.997264, 99.910225], [100, 100]]*/
/*     } */
/* */
/*     // Initial values for the user lines.*/
/*     var userLine1Val = 42;*/
/*     var userLine2Val = 75;   */
/* */
/*     // find the index of the data point with the closest y value.*/
/*     // assumes y values are monotonically increasing.*/
/*     var findXValue = function (y, data) {*/
/*         var l = data.length;*/
/*         var temp;*/
/*         var d;*/
/*         var idx;*/
/*         var mid = Math.round(l/2);*/
/*         var interval = mid;*/
/*         var prevInterval = mid;*/
/*         var dist = null;*/
/*         var absDist = null;*/
/*         var hold = null;*/
/*         var ret = null;*/
/*         var x, x0, x1, y0, y1, lowidx, hiidx;*/
/* */
/*         // check to see if we're in range*/
/*         if (y > data[l-1][1]) {*/
/*             return [l-1, data[l-1]];*/
/*         }*/
/*         else if (y < data[0][1]) {*/
/*             return [0, data[0]];*/
/*         }*/
/* */
/*         for (var i=0; i<l; i++) {*/
/*             d = data[mid][1];*/
/*             dist = d - y;*/
/*             absDist = Math.abs(dist);*/
/*             interval = Math.round(interval/2);*/
/*             */
/*             if (absDist < hold || hold === null) {*/
/*                 hold = absDist;*/
/*                 idx = mid;*/
/*             }*/
/* */
/*             // if we're right on the pont, get out of here*/
/*             if (dist === 0) { */
/*                 ret = [idx, data[idx]];*/
/*                 break;*/
/*             }*/
/* */
/*             // if we've narrowed it down to an interval, */
/*             // interpolate and get out of here*/
/*             else if (prevInterval === 1) {*/
/*                 // to the right, interpolate -1 to here*/
/*                 if (dist > 0) {*/
/*                     lowidx = idx - 1;*/
/*                     hiidx = idx;*/
/*                 }*/
/*                 else {*/
/*                     lowidx = idx;*/
/*                     hiidx = idx + 1;*/
/*                 }*/
/* */
/*                 x0 = data[lowidx][0];*/
/*                 x1 = data[hiidx][0];*/
/*                 y0 = data[lowidx][1];*/
/*                 y1 = data[hiidx][1];*/
/* */
/*                 x = x0 + (y - y0) / (y1 - y0) * (x1 - x0);*/
/* */
/*                 ret = [idx, [x, y]];*/
/*                 break;*/
/*             }*/
/*             // to the right, go left and reduce*/
/*             else if (dist > 0) {*/
/*                 mid -= interval;*/
/*             }*/
/*             // to the left go right and increase*/
/*             else if (dist < 0) {*/
/*                 mid += interval;*/
/*             }*/
/* */
/*             prevInterval = interval;*/
/*         }*/
/*         return ret;*/
/*     }*/
/* */
/*     // determine initial values for horizontal and vertical overlay lines.*/
/* */
/*     var line1x = findXValue(userLine1Val, dataSets.national)[1][0];*/
/*     var line2x = findXValue(userLine2Val, dataSets.national)[1][0];;*/
/*     var line3y = userLine1Val;*/
/*     var line4y = userLine2Val;*/
/* */
/*     // make the plot*/
/*     */
/*     plot1 = $.jqplot("chart1", [dataSets.national, dataSets.urban, dataSets.rural], {*/
/*         title: "Lorenz Curve",*/
/*         // To control the size of the grid, can set the gridPadding option,*/
/* */
/*         // gridPadding: {top: 40, bottom: 60, left: 70, right: 50},*/
/* */
/*         // but must know size of container ahead of time and figure out what paddings*/
/*         // you want to get a square grid.*/
/*         // Alternatively, can use the gridDimensions option.*/
/*         // gridDimensions doesn't get reapplied on replot() because plots*/
/*         // _gridPadding attribute is set the first time it is drawn and it*/
/*         // won't be overwritten.*/
/* */
/*         gridDimensions: {height: 290, width: 290},*/
/*         seriesColors: ["#4bb2c5", "#c54b62", "#b2c54b"],*/
/*         cursor: {*/
/*             show: false*/
/*         },*/
/*         highlighter: {*/
/*             show: true,*/
/*             showMarker: false,*/
/*             useAxesFormatters: false,*/
/*             formatString: '%d, %.1f'*/
/*         },*/
/*         axesDefaults: {*/
/*             labelRenderer: $.jqplot.CanvasAxisLabelRenderer*/
/*         },*/
/*         seriesDefaults: {*/
/*             showMarker: false*/
/*         },*/
/*         series: [*/
/*             {show: true},*/
/*             {show: false},*/
/*             {show: false}*/
/*         ],*/
/*         axes: {*/
/*             xaxis: {*/
/*                 label: '% of Population',*/
/*                 pad:0*/
/*             },*/
/*             yaxis: {*/
/*                 label: '% of Expenditure',*/
/*                 pad: 0*/
/*             }*/
/*         },*/
/*         grid: {*/
/*             drawBorder: false,*/
/*             shadow: false,*/
/*             // background: 'rgba(0,0,0,0)'  works.*/
/*             background: "white"*/
/*         },*/
/*         canvasOverlay: {*/
/*             show: true,*/
/*             objects: [,*/
/*                 {line: {*/
/*                     name: "line5",*/
/*                     start: [0,0],*/
/*                     stop: [100,100],*/
/*                     color: "#666666",*/
/*                     shadow: false,*/
/*                     showTooltip: false,*/
/*                     lineWidth: 3*/
/*                 }},*/
/*                 {horizontalLine: {*/
/*                     name: "line1",*/
/*                     y: userLine1Val,*/
/*                     color: "#d4c35D",*/
/*                     xmin: 0,*/
/*                     xmax: line1x,*/
/*                     shadow: false,*/
/*                     showTooltip: true,*/
/*                     tooltipFormatString: "%nPS=%'d",*/
/*                     showTooltipPrecision: 0.5*/
/*                 }},*/
/*                 {horizontalLine: {*/
/*                     name: "line2",*/
/*                     y: userLine2Val,*/
/*                     color: "#d4c35D",*/
/*                     xmin: 0,*/
/*                     xmax: line2x,*/
/*                     shadow: false,*/
/*                     showTooltip: true,*/
/*                     tooltipFormatString: "%nPS=%'d",*/
/*                     showTooltipPrecision: 0.5*/
/*                 }},*/
/*                 {verticalLine: {*/
/*                     name: "line3",*/
/*                     x: line1x,*/
/*                     color: "#d4c35D",*/
/*                     ymin: 0,*/
/*                     ymax: line3y,*/
/*                     shadow: false,*/
/*                     showTooltip: true,*/
/*                     tooltipFormatString: "PCE=%'d",*/
/*                     showTooltipPrecision: 0.5*/
/*                 }},*/
/*                 {verticalLine: {*/
/*                     name: "line4",*/
/*                     x: line2x,*/
/*                     color: "#d4c35D",*/
/*                     ymin: 0,*/
/*                     ymax: line4y,*/
/*                     shadow: false,*/
/*                     showTooltip: true,*/
/*                     tooltipFormatString: "PCE=%'d",*/
/*                     showTooltipPrecision: 0.5*/
/*                 }}*/
/*             ]*/
/*         }*/
/*     });*/
/* */
/*     // add a date at the bottom.*/
/* */
/*     var d = new $.jsDate();*/
/*     $("div.jqplot-datestamp").html("Generated on "+d.strftime("%v"));*/
/* */
/*     // initialize form elements*/
/*     // set these before attaching event handlers.*/
/* */
/*     $("input.dataSeries-checkbox").attr("checked", false);*/
/*     $("input.dataSeries-checkbox[name=dataSeries_national]").attr("checked", true);*/
/* */
/*     $("input[type=radio][name=backgroundColor]").attr("checked", false);*/
/*     $("input[type=radio][name=backgroundColor][value=white]").attr("checked", true);*/
/* */
/*     $("input[type=radio][name=lineWidth]").attr("checked", false);*/
/*     $('input[type=radio][name=lineWidth][value="2.5"]').attr("checked", true);*/
/* */
/*     $("input[type=text][name=userLine1]").val(userLine1Val);*/
/*     $("input[type=text][name=userLine2]").val(userLine2Val);*/
/* */
/*     $("input[type=checkbox][name=gridsVertical]").attr("checked", true);*/
/*     $("input[type=checkbox][name=gridsHorizontal]").attr("checked", true);*/
/*     $("input[type=checkbox][name=cutoffLines]").attr("checked", true);*/
/* */
/* */
/*     // attach event handlers to form elements*/
/* */
/*     $("input[type=radio][name=backgroundColor]").change(function(){ */
/*         plot1.grid.background = $(this).val();*/
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input.dataSeries-checkbox").change(function(){ */
/* */
/*         plot1.series[0].show = false;*/
/*         plot1.series[1].show = false;*/
/*         plot1.series[2].show = false;*/
/* */
/*         if ($('input[name=dataSeries_national]').get(0).checked === true) {*/
/*             plot1.series[0].show = true;*/
/*         }*/
/* */
/*         if ($('input[name=dataSeries_urban]').get(0).checked === true) {*/
/*             plot1.series[1].show = true;*/
/*         }*/
/* */
/*         if ($('input[name=dataSeries_rural]').get(0).checked === true) {*/
/*             plot1.series[2].show = true;*/
/*         }*/
/* */
/*         // var co = plot1.plugins.canvasOverlay;*/
/*         // var x1max = findXValue($("input[type=text][name=userLine1]").val(), dataSets[val])[1][0];*/
/*         // co.get("line1").options.xmax = co.get("line3").options.x = x1max;*/
/*         // var x2max = findXValue($("input[type=text][name=userLine2]").val(), dataSets[val])[1][0];*/
/*         // co.get("line2").options.xmax = co.get("line4").options.x = x2max;*/
/* */
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input[type=checkbox][name=gridsVertical]").change(function(){*/
/*         plot1.axes.xaxis.tickOptions.showGridline = this.checked;*/
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input[type=checkbox][name=gridsHorizontal]").change(function(){*/
/*         plot1.axes.yaxis.tickOptions.showGridline = this.checked;*/
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input[type=checkbox][name=cutoffLines]").change(function(){*/
/*         var co = plot1.plugins.canvasOverlay;*/
/*         if (this.checked) {*/
/*             co.get('line1').options.show = true;*/
/*             co.get('line2').options.show = true;*/
/*             co.get('line3').options.show = true;*/
/*             co.get('line4').options.show = true;*/
/*         }*/
/*         else {*/
/*             co.get('line1').options.show = false;*/
/*             co.get('line2').options.show = false;*/
/*             co.get('line3').options.show = false;*/
/*             co.get('line4').options.show = false;*/
/*         }*/
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input[type=text][name=userLine1]").keyup(function(){*/
/*         var val = parseFloat($(this).val());*/
/* */
/*         var co = plot1.plugins.canvasOverlay;*/
/* */
/*         co.get("line1").options.y = val;*/
/*         co.get("line3").options.ymax = val;*/
/* */
/*         var xx = findXValue(val, plot1.series[0].data)[1][0];*/
/*         co.get("line1").options.xmax = co.get("line3").options.x = xx;*/
/* */
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input[type=text][name=userLine2]").keyup(function(){*/
/*         var val = parseFloat($(this).val());*/
/* */
/*         var co = plot1.plugins.canvasOverlay;*/
/* */
/*         co.get("line2").options.y = val;*/
/*         co.get("line4").options.ymax = val;*/
/*         */
/*         var xx = findXValue(val, plot1.series[0].data)[1][0];*/
/*         co.get("line2").options.xmax = co.get("line4").options.x = xx;*/
/* */
/*         plot1.replot();*/
/*     });*/
/* */
/*     $("input[type=radio][name=lineWidth]").change(function(){*/
/*         var val = parseFloat($(this).val()), shadowOffset; */
/*         plot1.series[0].renderer.shapeRenderer.lineWidth = val;*/
/*         plot1.series[0].renderer.shadowRenderer.lineWidth = val;*/
/*         // for thick lines, scale shadow offset.*/
/*         if (val > 2.5) {*/
/*             shadowOffset = 1.25 * (1 + (Math.atan((val/2.5))/0.785398163 - 1)*0.6);*/
/*             // var shadow_offset = this.shadowOffset;*/
/*         }*/
/*         // for skinny lines, don't make such a big shadow.*/
/*         else {*/
/*             shadowOffset = 1.25*Math.atan((val/2.5))/0.785398163;*/
/*         }*/
/*         plot1.series[0].renderer.shadowRenderer.offset = shadowOffset;*/
/*         for (var i=0, l=plot1.plugins.canvasOverlay.objects.length; i<l; i++) {*/
/*             plot1.plugins.canvasOverlay.objects[i].options.lineWidth = val;*/
/*         }*/
/*         plot1.replot();*/
/*     });*/
/*     */
/*     */
/*     $("div.chart-container").resizable({delay:20, aspectRatio: true});    */
/* */
/*     $("div.chart-container").bind("resize", function(event, ui) {*/
/*         plot1.replot();*/
/*     });*/
/* */
/*     $(".jqplot-target").mouseleave(function(){ $('.jqplot-canvasOverlay-tooltip, .jqplot-highlighter-tooltip, .jqpot-cursor-tooltip').hide(); });*/
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
/* <!-- Additional plugins go here -->>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.logAxisRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.cursor.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasTextRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.highlighter.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="../plugins/jqplot.canvasOverlay.min.js"></script>*/
/*   <script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>*/
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