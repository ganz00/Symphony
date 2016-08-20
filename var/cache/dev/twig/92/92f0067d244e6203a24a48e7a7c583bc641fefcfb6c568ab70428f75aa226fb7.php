<?php

/* @css/Script/flot/jquery.flot.pie.js */
class __TwigTemplate_f6a910ecab6d6981a8a26e1b7c3055181566a5096233af4f8c8051e780073257 extends Twig_Template
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
        $__internal_3d1ac6d72768f8d15c7f549af96204f98b246bd34410ede3dba041c217df27e8 = $this->env->getExtension("native_profiler");
        $__internal_3d1ac6d72768f8d15c7f549af96204f98b246bd34410ede3dba041c217df27e8->enter($__internal_3d1ac6d72768f8d15c7f549af96204f98b246bd34410ede3dba041c217df27e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/flot/jquery.flot.pie.js"));

        // line 1
        echo "/* Flot plugin for rendering pie charts.

Copyright (c) 2007-2014 IOLA and Ole Laursen.
Licensed under the MIT license.

The plugin assumes that each series has a single data value, and that each
value is a positive integer or zero.  Negative numbers don't make sense for a
pie chart, and have unpredictable results.  The values do NOT need to be
passed in as percentages; the plugin will calculate the total and per-slice
percentages internally.

* Created by Brian Medendorp

* Updated with contributions from btburnett3, Anthony Aragues and Xavi Ivars

The plugin supports these options:

\tseries: {
\t\tpie: {
\t\t\tshow: true/false
\t\t\tradius: 0-1 for percentage of fullsize, or a specified pixel length, or 'auto'
\t\t\tinnerRadius: 0-1 for percentage of fullsize or a specified pixel length, for creating a donut effect
\t\t\tstartAngle: 0-2 factor of PI used for starting angle (in radians) i.e 3/2 starts at the top, 0 and 2 have the same result
\t\t\ttilt: 0-1 for percentage to tilt the pie, where 1 is no tilt, and 0 is completely flat (nothing will show)
\t\t\toffset: {
\t\t\t\ttop: integer value to move the pie up or down
\t\t\t\tleft: integer value to move the pie left or right, or 'auto'
\t\t\t},
\t\t\tstroke: {
\t\t\t\tcolor: any hexidecimal color value (other formats may or may not work, so best to stick with something like '#FFF')
\t\t\t\twidth: integer pixel width of the stroke
\t\t\t},
\t\t\tlabel: {
\t\t\t\tshow: true/false, or 'auto'
\t\t\t\tformatter:  a user-defined function that modifies the text/style of the label text
\t\t\t\tradius: 0-1 for percentage of fullsize, or a specified pixel length
\t\t\t\tbackground: {
\t\t\t\t\tcolor: any hexidecimal color value (other formats may or may not work, so best to stick with something like '#000')
\t\t\t\t\topacity: 0-1
\t\t\t\t},
\t\t\t\tthreshold: 0-1 for the percentage value at which to hide labels (if they're too small)
\t\t\t},
\t\t\tcombine: {
\t\t\t\tthreshold: 0-1 for the percentage value at which to combine slices (if they're too small)
\t\t\t\tcolor: any hexidecimal color value (other formats may or may not work, so best to stick with something like '#CCC'), if null, the plugin will automatically use the color of the first slice to be combined
\t\t\t\tlabel: any text value of what the combined slice should be labeled
\t\t\t}
\t\t\thighlight: {
\t\t\t\topacity: 0-1
\t\t\t}
\t\t}
\t}

More detail and specific examples can be found in the included HTML file.

*/

(function(\$) {

\t// Maximum redraw attempts when fitting labels within the plot

\tvar REDRAW_ATTEMPTS = 10;

\t// Factor by which to shrink the pie when fitting labels within the plot

\tvar REDRAW_SHRINK = 0.95;

\tfunction init(plot) {

\t\tvar canvas = null,
\t\t\ttarget = null,
\t\t\toptions = null,
\t\t\tmaxRadius = null,
\t\t\tcenterLeft = null,
\t\t\tcenterTop = null,
\t\t\tprocessed = false,
\t\t\tctx = null;

\t\t// interactive variables

\t\tvar highlights = [];

\t\t// add hook to determine if pie plugin in enabled, and then perform necessary operations

\t\tplot.hooks.processOptions.push(function(plot, options) {
\t\t\tif (options.series.pie.show) {

\t\t\t\toptions.grid.show = false;

\t\t\t\t// set labels.show

\t\t\t\tif (options.series.pie.label.show == \"auto\") {
\t\t\t\t\tif (options.legend.show) {
\t\t\t\t\t\toptions.series.pie.label.show = false;
\t\t\t\t\t} else {
\t\t\t\t\t\toptions.series.pie.label.show = true;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// set radius

\t\t\t\tif (options.series.pie.radius == \"auto\") {
\t\t\t\t\tif (options.series.pie.label.show) {
\t\t\t\t\t\toptions.series.pie.radius = 3/4;
\t\t\t\t\t} else {
\t\t\t\t\t\toptions.series.pie.radius = 1;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// ensure sane tilt

\t\t\t\tif (options.series.pie.tilt > 1) {
\t\t\t\t\toptions.series.pie.tilt = 1;
\t\t\t\t} else if (options.series.pie.tilt < 0) {
\t\t\t\t\toptions.series.pie.tilt = 0;
\t\t\t\t}
\t\t\t}
\t\t});

\t\tplot.hooks.bindEvents.push(function(plot, eventHolder) {
\t\t\tvar options = plot.getOptions();
\t\t\tif (options.series.pie.show) {
\t\t\t\tif (options.grid.hoverable) {
\t\t\t\t\teventHolder.unbind(\"mousemove\").mousemove(onMouseMove);
\t\t\t\t}
\t\t\t\tif (options.grid.clickable) {
\t\t\t\t\teventHolder.unbind(\"click\").click(onClick);
\t\t\t\t}
\t\t\t}
\t\t});

\t\tplot.hooks.processDatapoints.push(function(plot, series, data, datapoints) {
\t\t\tvar options = plot.getOptions();
\t\t\tif (options.series.pie.show) {
\t\t\t\tprocessDatapoints(plot, series, data, datapoints);
\t\t\t}
\t\t});

\t\tplot.hooks.drawOverlay.push(function(plot, octx) {
\t\t\tvar options = plot.getOptions();
\t\t\tif (options.series.pie.show) {
\t\t\t\tdrawOverlay(plot, octx);
\t\t\t}
\t\t});

\t\tplot.hooks.draw.push(function(plot, newCtx) {
\t\t\tvar options = plot.getOptions();
\t\t\tif (options.series.pie.show) {
\t\t\t\tdraw(plot, newCtx);
\t\t\t}
\t\t});

\t\tfunction processDatapoints(plot, series, datapoints) {
\t\t\tif (!processed)\t{
\t\t\t\tprocessed = true;
\t\t\t\tcanvas = plot.getCanvas();
\t\t\t\ttarget = \$(canvas).parent();
\t\t\t\toptions = plot.getOptions();
\t\t\t\tplot.setData(combine(plot.getData()));
\t\t\t}
\t\t}

\t\tfunction combine(data) {

\t\t\tvar total = 0,
\t\t\t\tcombined = 0,
\t\t\t\tnumCombined = 0,
\t\t\t\tcolor = options.series.pie.combine.color,
\t\t\t\tnewdata = [];

\t\t\t// Fix up the raw data from Flot, ensuring the data is numeric

\t\t\tfor (var i = 0; i < data.length; ++i) {

\t\t\t\tvar value = data[i].data;

\t\t\t\t// If the data is an array, we'll assume that it's a standard
\t\t\t\t// Flot x-y pair, and are concerned only with the second value.

\t\t\t\t// Note how we use the original array, rather than creating a
\t\t\t\t// new one; this is more efficient and preserves any extra data
\t\t\t\t// that the user may have stored in higher indexes.

\t\t\t\tif (\$.isArray(value) && value.length == 1) {
    \t\t\t\tvalue = value[0];
\t\t\t\t}

\t\t\t\tif (\$.isArray(value)) {
\t\t\t\t\t// Equivalent to \$.isNumeric() but compatible with jQuery < 1.7
\t\t\t\t\tif (!isNaN(parseFloat(value[1])) && isFinite(value[1])) {
\t\t\t\t\t\tvalue[1] = +value[1];
\t\t\t\t\t} else {
\t\t\t\t\t\tvalue[1] = 0;
\t\t\t\t\t}
\t\t\t\t} else if (!isNaN(parseFloat(value)) && isFinite(value)) {
\t\t\t\t\tvalue = [1, +value];
\t\t\t\t} else {
\t\t\t\t\tvalue = [1, 0];
\t\t\t\t}

\t\t\t\tdata[i].data = [value];
\t\t\t}

\t\t\t// Sum up all the slices, so we can calculate percentages for each

\t\t\tfor (var i = 0; i < data.length; ++i) {
\t\t\t\ttotal += data[i].data[0][1];
\t\t\t}

\t\t\t// Count the number of slices with percentages below the combine
\t\t\t// threshold; if it turns out to be just one, we won't combine.

\t\t\tfor (var i = 0; i < data.length; ++i) {
\t\t\t\tvar value = data[i].data[0][1];
\t\t\t\tif (value / total <= options.series.pie.combine.threshold) {
\t\t\t\t\tcombined += value;
\t\t\t\t\tnumCombined++;
\t\t\t\t\tif (!color) {
\t\t\t\t\t\tcolor = data[i].color;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor (var i = 0; i < data.length; ++i) {
\t\t\t\tvar value = data[i].data[0][1];
\t\t\t\tif (numCombined < 2 || value / total > options.series.pie.combine.threshold) {
\t\t\t\t\tnewdata.push(
\t\t\t\t\t\t\$.extend(data[i], {     /* extend to allow keeping all other original data values
\t\t\t\t\t\t                           and using them e.g. in labelFormatter. */
\t\t\t\t\t\t\tdata: [[1, value]],
\t\t\t\t\t\t\tcolor: data[i].color,
\t\t\t\t\t\t\tlabel: data[i].label,
\t\t\t\t\t\t\tangle: value * Math.PI * 2 / total,
\t\t\t\t\t\t\tpercent: value / (total / 100)
\t\t\t\t\t\t})
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}

\t\t\tif (numCombined > 1) {
\t\t\t\tnewdata.push({
\t\t\t\t\tdata: [[1, combined]],
\t\t\t\t\tcolor: color,
\t\t\t\t\tlabel: options.series.pie.combine.label,
\t\t\t\t\tangle: combined * Math.PI * 2 / total,
\t\t\t\t\tpercent: combined / (total / 100)
\t\t\t\t});
\t\t\t}

\t\t\treturn newdata;
\t\t}

\t\tfunction draw(plot, newCtx) {

\t\t\tif (!target) {
\t\t\t\treturn; // if no series were passed
\t\t\t}

\t\t\tvar canvasWidth = plot.getPlaceholder().width(),
\t\t\t\tcanvasHeight = plot.getPlaceholder().height(),
\t\t\t\tlegendWidth = target.children().filter(\".legend\").children().width() || 0;

\t\t\tctx = newCtx;

\t\t\t// WARNING: HACK! REWRITE THIS CODE AS SOON AS POSSIBLE!

\t\t\t// When combining smaller slices into an 'other' slice, we need to
\t\t\t// add a new series.  Since Flot gives plugins no way to modify the
\t\t\t// list of series, the pie plugin uses a hack where the first call
\t\t\t// to processDatapoints results in a call to setData with the new
\t\t\t// list of series, then subsequent processDatapoints do nothing.

\t\t\t// The plugin-global 'processed' flag is used to control this hack;
\t\t\t// it starts out false, and is set to true after the first call to
\t\t\t// processDatapoints.

\t\t\t// Unfortunately this turns future setData calls into no-ops; they
\t\t\t// call processDatapoints, the flag is true, and nothing happens.

\t\t\t// To fix this we'll set the flag back to false here in draw, when
\t\t\t// all series have been processed, so the next sequence of calls to
\t\t\t// processDatapoints once again starts out with a slice-combine.
\t\t\t// This is really a hack; in 0.9 we need to give plugins a proper
\t\t\t// way to modify series before any processing begins.

\t\t\tprocessed = false;

\t\t\t// calculate maximum radius and center point

\t\t\tmaxRadius =  Math.min(canvasWidth, canvasHeight / options.series.pie.tilt) / 2;
\t\t\tcenterTop = canvasHeight / 2 + options.series.pie.offset.top;
\t\t\tcenterLeft = canvasWidth / 2;

\t\t\tif (options.series.pie.offset.left == \"auto\") {
\t\t\t\tif (options.legend.position.match(\"w\")) {
\t\t\t\t\tcenterLeft += legendWidth / 2;
\t\t\t\t} else {
\t\t\t\t\tcenterLeft -= legendWidth / 2;
\t\t\t\t}
\t\t\t\tif (centerLeft < maxRadius) {
\t\t\t\t\tcenterLeft = maxRadius;
\t\t\t\t} else if (centerLeft > canvasWidth - maxRadius) {
\t\t\t\t\tcenterLeft = canvasWidth - maxRadius;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcenterLeft += options.series.pie.offset.left;
\t\t\t}

\t\t\tvar slices = plot.getData(),
\t\t\t\tattempts = 0;

\t\t\t// Keep shrinking the pie's radius until drawPie returns true,
\t\t\t// indicating that all the labels fit, or we try too many times.

\t\t\tdo {
\t\t\t\tif (attempts > 0) {
\t\t\t\t\tmaxRadius *= REDRAW_SHRINK;
\t\t\t\t}
\t\t\t\tattempts += 1;
\t\t\t\tclear();
\t\t\t\tif (options.series.pie.tilt <= 0.8) {
\t\t\t\t\tdrawShadow();
\t\t\t\t}
\t\t\t} while (!drawPie() && attempts < REDRAW_ATTEMPTS)

\t\t\tif (attempts >= REDRAW_ATTEMPTS) {
\t\t\t\tclear();
\t\t\t\ttarget.prepend(\"<div class='error'>Could not draw pie with labels contained inside canvas</div>\");
\t\t\t}

\t\t\tif (plot.setSeries && plot.insertLegend) {
\t\t\t\tplot.setSeries(slices);
\t\t\t\tplot.insertLegend();
\t\t\t}

\t\t\t// we're actually done at this point, just defining internal functions at this point

\t\t\tfunction clear() {
\t\t\t\tctx.clearRect(0, 0, canvasWidth, canvasHeight);
\t\t\t\ttarget.children().filter(\".pieLabel, .pieLabelBackground\").remove();
\t\t\t}

\t\t\tfunction drawShadow() {

\t\t\t\tvar shadowLeft = options.series.pie.shadow.left;
\t\t\t\tvar shadowTop = options.series.pie.shadow.top;
\t\t\t\tvar edge = 10;
\t\t\t\tvar alpha = options.series.pie.shadow.alpha;
\t\t\t\tvar radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius;

\t\t\t\tif (radius >= canvasWidth / 2 - shadowLeft || radius * options.series.pie.tilt >= canvasHeight / 2 - shadowTop || radius <= edge) {
\t\t\t\t\treturn;\t// shadow would be outside canvas, so don't draw it
\t\t\t\t}

\t\t\t\tctx.save();
\t\t\t\tctx.translate(shadowLeft,shadowTop);
\t\t\t\tctx.globalAlpha = alpha;
\t\t\t\tctx.fillStyle = \"#000\";

\t\t\t\t// center and rotate to starting position

\t\t\t\tctx.translate(centerLeft,centerTop);
\t\t\t\tctx.scale(1, options.series.pie.tilt);

\t\t\t\t//radius -= edge;

\t\t\t\tfor (var i = 1; i <= edge; i++) {
\t\t\t\t\tctx.beginPath();
\t\t\t\t\tctx.arc(0, 0, radius, 0, Math.PI * 2, false);
\t\t\t\t\tctx.fill();
\t\t\t\t\tradius -= i;
\t\t\t\t}

\t\t\t\tctx.restore();
\t\t\t}

\t\t\tfunction drawPie() {

\t\t\t\tvar startAngle = Math.PI * options.series.pie.startAngle;
\t\t\t\tvar radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius;

\t\t\t\t// center and rotate to starting position

\t\t\t\tctx.save();
\t\t\t\tctx.translate(centerLeft,centerTop);
\t\t\t\tctx.scale(1, options.series.pie.tilt);
\t\t\t\t//ctx.rotate(startAngle); // start at top; -- This doesn't work properly in Opera

\t\t\t\t// draw slices

\t\t\t\tctx.save();
\t\t\t\tvar currentAngle = startAngle;
\t\t\t\tfor (var i = 0; i < slices.length; ++i) {
\t\t\t\t\tslices[i].startAngle = currentAngle;
\t\t\t\t\tdrawSlice(slices[i].angle, slices[i].color, true);
\t\t\t\t}
\t\t\t\tctx.restore();

\t\t\t\t// draw slice outlines

\t\t\t\tif (options.series.pie.stroke.width > 0) {
\t\t\t\t\tctx.save();
\t\t\t\t\tctx.lineWidth = options.series.pie.stroke.width;
\t\t\t\t\tcurrentAngle = startAngle;
\t\t\t\t\tfor (var i = 0; i < slices.length; ++i) {
\t\t\t\t\t\tdrawSlice(slices[i].angle, options.series.pie.stroke.color, false);
\t\t\t\t\t}
\t\t\t\t\tctx.restore();
\t\t\t\t}

\t\t\t\t// draw donut hole

\t\t\t\tdrawDonutHole(ctx);

\t\t\t\tctx.restore();

\t\t\t\t// Draw the labels, returning true if they fit within the plot

\t\t\t\tif (options.series.pie.label.show) {
\t\t\t\t\treturn drawLabels();
\t\t\t\t} else return true;

\t\t\t\tfunction drawSlice(angle, color, fill) {

\t\t\t\t\tif (angle <= 0 || isNaN(angle)) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tif (fill) {
\t\t\t\t\t\tctx.fillStyle = color;
\t\t\t\t\t} else {
\t\t\t\t\t\tctx.strokeStyle = color;
\t\t\t\t\t\tctx.lineJoin = \"round\";
\t\t\t\t\t}

\t\t\t\t\tctx.beginPath();
\t\t\t\t\tif (Math.abs(angle - Math.PI * 2) > 0.000000001) {
\t\t\t\t\t\tctx.moveTo(0, 0); // Center of the pie
\t\t\t\t\t}

\t\t\t\t\t//ctx.arc(0, 0, radius, 0, angle, false); // This doesn't work properly in Opera
\t\t\t\t\tctx.arc(0, 0, radius,currentAngle, currentAngle + angle / 2, false);
\t\t\t\t\tctx.arc(0, 0, radius,currentAngle + angle / 2, currentAngle + angle, false);
\t\t\t\t\tctx.closePath();
\t\t\t\t\t//ctx.rotate(angle); // This doesn't work properly in Opera
\t\t\t\t\tcurrentAngle += angle;

\t\t\t\t\tif (fill) {
\t\t\t\t\t\tctx.fill();
\t\t\t\t\t} else {
\t\t\t\t\t\tctx.stroke();
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfunction drawLabels() {

\t\t\t\t\tvar currentAngle = startAngle;
\t\t\t\t\tvar radius = options.series.pie.label.radius > 1 ? options.series.pie.label.radius : maxRadius * options.series.pie.label.radius;

\t\t\t\t\tfor (var i = 0; i < slices.length; ++i) {
\t\t\t\t\t\tif (slices[i].percent >= options.series.pie.label.threshold * 100) {
\t\t\t\t\t\t\tif (!drawLabel(slices[i], currentAngle, i)) {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tcurrentAngle += slices[i].angle;
\t\t\t\t\t}

\t\t\t\t\treturn true;

\t\t\t\t\tfunction drawLabel(slice, startAngle, index) {

\t\t\t\t\t\tif (slice.data[0][1] == 0) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\t// format label text

\t\t\t\t\t\tvar lf = options.legend.labelFormatter, text, plf = options.series.pie.label.formatter;

\t\t\t\t\t\tif (lf) {
\t\t\t\t\t\t\ttext = lf(slice.label, slice);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\ttext = slice.label;
\t\t\t\t\t\t}

\t\t\t\t\t\tif (plf) {
\t\t\t\t\t\t\ttext = plf(text, slice);
\t\t\t\t\t\t}

\t\t\t\t\t\tvar halfAngle = ((startAngle + slice.angle) + startAngle) / 2;
\t\t\t\t\t\tvar x = centerLeft + Math.round(Math.cos(halfAngle) * radius);
\t\t\t\t\t\tvar y = centerTop + Math.round(Math.sin(halfAngle) * radius) * options.series.pie.tilt;

\t\t\t\t\t\tvar html = \"<span class='pieLabel' id='pieLabel\" + index + \"' style='position:absolute;top:\" + y + \"px;left:\" + x + \"px;'>\" + text + \"</span>\";
\t\t\t\t\t\ttarget.append(html);

\t\t\t\t\t\tvar label = target.children(\"#pieLabel\" + index);
\t\t\t\t\t\tvar labelTop = (y - label.height() / 2);
\t\t\t\t\t\tvar labelLeft = (x - label.width() / 2);

\t\t\t\t\t\tlabel.css(\"top\", labelTop);
\t\t\t\t\t\tlabel.css(\"left\", labelLeft);

\t\t\t\t\t\t// check to make sure that the label is not outside the canvas

\t\t\t\t\t\tif (0 - labelTop > 0 || 0 - labelLeft > 0 || canvasHeight - (labelTop + label.height()) < 0 || canvasWidth - (labelLeft + label.width()) < 0) {
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\tif (options.series.pie.label.background.opacity != 0) {

\t\t\t\t\t\t\t// put in the transparent background separately to avoid blended labels and label boxes

\t\t\t\t\t\t\tvar c = options.series.pie.label.background.color;

\t\t\t\t\t\t\tif (c == null) {
\t\t\t\t\t\t\t\tc = slice.color;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar pos = \"top:\" + labelTop + \"px;left:\" + labelLeft + \"px;\";
\t\t\t\t\t\t\t\$(\"<div class='pieLabelBackground' style='position:absolute;width:\" + label.width() + \"px;height:\" + label.height() + \"px;\" + pos + \"background-color:\" + c + \";'></div>\")
\t\t\t\t\t\t\t\t.css(\"opacity\", options.series.pie.label.background.opacity)
\t\t\t\t\t\t\t\t.insertBefore(label);
\t\t\t\t\t\t}

\t\t\t\t\t\treturn true;
\t\t\t\t\t} // end individual label function
\t\t\t\t} // end drawLabels function
\t\t\t} // end drawPie function
\t\t} // end draw function

\t\t// Placed here because it needs to be accessed from multiple locations

\t\tfunction drawDonutHole(layer) {
\t\t\tif (options.series.pie.innerRadius > 0) {

\t\t\t\t// subtract the center

\t\t\t\tlayer.save();
\t\t\t\tvar innerRadius = options.series.pie.innerRadius > 1 ? options.series.pie.innerRadius : maxRadius * options.series.pie.innerRadius;
\t\t\t\tlayer.globalCompositeOperation = \"destination-out\"; // this does not work with excanvas, but it will fall back to using the stroke color
\t\t\t\tlayer.beginPath();
\t\t\t\tlayer.fillStyle = options.series.pie.stroke.color;
\t\t\t\tlayer.arc(0, 0, innerRadius, 0, Math.PI * 2, false);
\t\t\t\tlayer.fill();
\t\t\t\tlayer.closePath();
\t\t\t\tlayer.restore();

\t\t\t\t// add inner stroke

\t\t\t\tlayer.save();
\t\t\t\tlayer.beginPath();
\t\t\t\tlayer.strokeStyle = options.series.pie.stroke.color;
\t\t\t\tlayer.arc(0, 0, innerRadius, 0, Math.PI * 2, false);
\t\t\t\tlayer.stroke();
\t\t\t\tlayer.closePath();
\t\t\t\tlayer.restore();

\t\t\t\t// TODO: add extra shadow inside hole (with a mask) if the pie is tilted.
\t\t\t}
\t\t}

\t\t//-- Additional Interactive related functions --

\t\tfunction isPointInPoly(poly, pt) {
\t\t\tfor(var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)
\t\t\t\t((poly[i][1] <= pt[1] && pt[1] < poly[j][1]) || (poly[j][1] <= pt[1] && pt[1]< poly[i][1]))
\t\t\t\t&& (pt[0] < (poly[j][0] - poly[i][0]) * (pt[1] - poly[i][1]) / (poly[j][1] - poly[i][1]) + poly[i][0])
\t\t\t\t&& (c = !c);
\t\t\treturn c;
\t\t}

\t\tfunction findNearbySlice(mouseX, mouseY) {

\t\t\tvar slices = plot.getData(),
\t\t\t\toptions = plot.getOptions(),
\t\t\t\tradius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius,
\t\t\t\tx, y;

\t\t\tfor (var i = 0; i < slices.length; ++i) {

\t\t\t\tvar s = slices[i];

\t\t\t\tif (s.pie.show) {

\t\t\t\t\tctx.save();
\t\t\t\t\tctx.beginPath();
\t\t\t\t\tctx.moveTo(0, 0); // Center of the pie
\t\t\t\t\t//ctx.scale(1, options.series.pie.tilt);\t// this actually seems to break everything when here.
\t\t\t\t\tctx.arc(0, 0, radius, s.startAngle, s.startAngle + s.angle / 2, false);
\t\t\t\t\tctx.arc(0, 0, radius, s.startAngle + s.angle / 2, s.startAngle + s.angle, false);
\t\t\t\t\tctx.closePath();
\t\t\t\t\tx = mouseX - centerLeft;
\t\t\t\t\ty = mouseY - centerTop;

\t\t\t\t\tif (ctx.isPointInPath) {
\t\t\t\t\t\tif (ctx.isPointInPath(mouseX - centerLeft, mouseY - centerTop)) {
\t\t\t\t\t\t\tctx.restore();
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tdatapoint: [s.percent, s.data],
\t\t\t\t\t\t\t\tdataIndex: 0,
\t\t\t\t\t\t\t\tseries: s,
\t\t\t\t\t\t\t\tseriesIndex: i
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t} else {

\t\t\t\t\t\t// excanvas for IE doesn;t support isPointInPath, this is a workaround.

\t\t\t\t\t\tvar p1X = radius * Math.cos(s.startAngle),
\t\t\t\t\t\t\tp1Y = radius * Math.sin(s.startAngle),
\t\t\t\t\t\t\tp2X = radius * Math.cos(s.startAngle + s.angle / 4),
\t\t\t\t\t\t\tp2Y = radius * Math.sin(s.startAngle + s.angle / 4),
\t\t\t\t\t\t\tp3X = radius * Math.cos(s.startAngle + s.angle / 2),
\t\t\t\t\t\t\tp3Y = radius * Math.sin(s.startAngle + s.angle / 2),
\t\t\t\t\t\t\tp4X = radius * Math.cos(s.startAngle + s.angle / 1.5),
\t\t\t\t\t\t\tp4Y = radius * Math.sin(s.startAngle + s.angle / 1.5),
\t\t\t\t\t\t\tp5X = radius * Math.cos(s.startAngle + s.angle),
\t\t\t\t\t\t\tp5Y = radius * Math.sin(s.startAngle + s.angle),
\t\t\t\t\t\t\tarrPoly = [[0, 0], [p1X, p1Y], [p2X, p2Y], [p3X, p3Y], [p4X, p4Y], [p5X, p5Y]],
\t\t\t\t\t\t\tarrPoint = [x, y];

\t\t\t\t\t\t// TODO: perhaps do some mathmatical trickery here with the Y-coordinate to compensate for pie tilt?

\t\t\t\t\t\tif (isPointInPoly(arrPoly, arrPoint)) {
\t\t\t\t\t\t\tctx.restore();
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tdatapoint: [s.percent, s.data],
\t\t\t\t\t\t\t\tdataIndex: 0,
\t\t\t\t\t\t\t\tseries: s,
\t\t\t\t\t\t\t\tseriesIndex: i
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tctx.restore();
\t\t\t\t}
\t\t\t}

\t\t\treturn null;
\t\t}

\t\tfunction onMouseMove(e) {
\t\t\ttriggerClickHoverEvent(\"plothover\", e);
\t\t}

\t\tfunction onClick(e) {
\t\t\ttriggerClickHoverEvent(\"plotclick\", e);
\t\t}

\t\t// trigger click or hover event (they send the same parameters so we share their code)

\t\tfunction triggerClickHoverEvent(eventname, e) {

\t\t\tvar offset = plot.offset();
\t\t\tvar canvasX = parseInt(e.pageX - offset.left);
\t\t\tvar canvasY =  parseInt(e.pageY - offset.top);
\t\t\tvar item = findNearbySlice(canvasX, canvasY);

\t\t\tif (options.grid.autoHighlight) {

\t\t\t\t// clear auto-highlights

\t\t\t\tfor (var i = 0; i < highlights.length; ++i) {
\t\t\t\t\tvar h = highlights[i];
\t\t\t\t\tif (h.auto == eventname && !(item && h.series == item.series)) {
\t\t\t\t\t\tunhighlight(h.series);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// highlight the slice

\t\t\tif (item) {
\t\t\t\thighlight(item.series, eventname);
\t\t\t}

\t\t\t// trigger any hover bind events

\t\t\tvar pos = { pageX: e.pageX, pageY: e.pageY };
\t\t\ttarget.trigger(eventname, [pos, item]);
\t\t}

\t\tfunction highlight(s, auto) {
\t\t\t//if (typeof s == \"number\") {
\t\t\t//\ts = series[s];
\t\t\t//}

\t\t\tvar i = indexOfHighlight(s);

\t\t\tif (i == -1) {
\t\t\t\thighlights.push({ series: s, auto: auto });
\t\t\t\tplot.triggerRedrawOverlay();
\t\t\t} else if (!auto) {
\t\t\t\thighlights[i].auto = false;
\t\t\t}
\t\t}

\t\tfunction unhighlight(s) {
\t\t\tif (s == null) {
\t\t\t\thighlights = [];
\t\t\t\tplot.triggerRedrawOverlay();
\t\t\t}

\t\t\t//if (typeof s == \"number\") {
\t\t\t//\ts = series[s];
\t\t\t//}

\t\t\tvar i = indexOfHighlight(s);

\t\t\tif (i != -1) {
\t\t\t\thighlights.splice(i, 1);
\t\t\t\tplot.triggerRedrawOverlay();
\t\t\t}
\t\t}

\t\tfunction indexOfHighlight(s) {
\t\t\tfor (var i = 0; i < highlights.length; ++i) {
\t\t\t\tvar h = highlights[i];
\t\t\t\tif (h.series == s)
\t\t\t\t\treturn i;
\t\t\t}
\t\t\treturn -1;
\t\t}

\t\tfunction drawOverlay(plot, octx) {

\t\t\tvar options = plot.getOptions();

\t\t\tvar radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius;

\t\t\toctx.save();
\t\t\toctx.translate(centerLeft, centerTop);
\t\t\toctx.scale(1, options.series.pie.tilt);

\t\t\tfor (var i = 0; i < highlights.length; ++i) {
\t\t\t\tdrawHighlight(highlights[i].series);
\t\t\t}

\t\t\tdrawDonutHole(octx);

\t\t\toctx.restore();

\t\t\tfunction drawHighlight(series) {

\t\t\t\tif (series.angle <= 0 || isNaN(series.angle)) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t//octx.fillStyle = parseColor(options.series.pie.highlight.color).scale(null, null, null, options.series.pie.highlight.opacity).toString();
\t\t\t\toctx.fillStyle = \"rgba(255, 255, 255, \" + options.series.pie.highlight.opacity + \")\"; // this is temporary until we have access to parseColor
\t\t\t\toctx.beginPath();
\t\t\t\tif (Math.abs(series.angle - Math.PI * 2) > 0.000000001) {
\t\t\t\t\toctx.moveTo(0, 0); // Center of the pie
\t\t\t\t}
\t\t\t\toctx.arc(0, 0, radius, series.startAngle, series.startAngle + series.angle / 2, false);
\t\t\t\toctx.arc(0, 0, radius, series.startAngle + series.angle / 2, series.startAngle + series.angle, false);
\t\t\t\toctx.closePath();
\t\t\t\toctx.fill();
\t\t\t}
\t\t}
\t} // end init (plugin body)

\t// define pie specific options and their default values

\tvar options = {
\t\tseries: {
\t\t\tpie: {
\t\t\t\tshow: false,
\t\t\t\tradius: \"auto\",\t// actual radius of the visible pie (based on full calculated radius if <=1, or hard pixel value)
\t\t\t\tinnerRadius: 0, /* for donut */
\t\t\t\tstartAngle: 3/2,
\t\t\t\ttilt: 1,
\t\t\t\tshadow: {
\t\t\t\t\tleft: 5,\t// shadow left offset
\t\t\t\t\ttop: 15,\t// shadow top offset
\t\t\t\t\talpha: 0.02\t// shadow alpha
\t\t\t\t},
\t\t\t\toffset: {
\t\t\t\t\ttop: 0,
\t\t\t\t\tleft: \"auto\"
\t\t\t\t},
\t\t\t\tstroke: {
\t\t\t\t\tcolor: \"#fff\",
\t\t\t\t\twidth: 1
\t\t\t\t},
\t\t\t\tlabel: {
\t\t\t\t\tshow: \"auto\",
\t\t\t\t\tformatter: function(label, slice) {
\t\t\t\t\t\treturn \"<div style='font-size:x-small;text-align:center;padding:2px;color:\" + slice.color + \";'>\" + label + \"<br/>\" + Math.round(slice.percent) + \"%</div>\";
\t\t\t\t\t},\t// formatter function
\t\t\t\t\tradius: 1,\t// radius at which to place the labels (based on full calculated radius if <=1, or hard pixel value)
\t\t\t\t\tbackground: {
\t\t\t\t\t\tcolor: null,
\t\t\t\t\t\topacity: 0
\t\t\t\t\t},
\t\t\t\t\tthreshold: 0\t// percentage at which to hide the label (i.e. the slice is too narrow)
\t\t\t\t},
\t\t\t\tcombine: {
\t\t\t\t\tthreshold: -1,\t// percentage at which to combine little slices into one larger slice
\t\t\t\t\tcolor: null,\t// color to give the new slice (auto-generated if null)
\t\t\t\t\tlabel: \"Other\"\t// label to give the new slice
\t\t\t\t},
\t\t\t\thighlight: {
\t\t\t\t\t//color: \"#fff\",\t\t// will add this functionality once parseColor is available
\t\t\t\t\topacity: 0.5
\t\t\t\t}
\t\t\t}
\t\t}
\t};

\t\$.plot.plugins.push({
\t\tinit: init,
\t\toptions: options,
\t\tname: \"pie\",
\t\tversion: \"1.1\"
\t});

})(jQuery);
";
        
        $__internal_3d1ac6d72768f8d15c7f549af96204f98b246bd34410ede3dba041c217df27e8->leave($__internal_3d1ac6d72768f8d15c7f549af96204f98b246bd34410ede3dba041c217df27e8_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/flot/jquery.flot.pie.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /* Flot plugin for rendering pie charts.*/
/* */
/* Copyright (c) 2007-2014 IOLA and Ole Laursen.*/
/* Licensed under the MIT license.*/
/* */
/* The plugin assumes that each series has a single data value, and that each*/
/* value is a positive integer or zero.  Negative numbers don't make sense for a*/
/* pie chart, and have unpredictable results.  The values do NOT need to be*/
/* passed in as percentages; the plugin will calculate the total and per-slice*/
/* percentages internally.*/
/* */
/* * Created by Brian Medendorp*/
/* */
/* * Updated with contributions from btburnett3, Anthony Aragues and Xavi Ivars*/
/* */
/* The plugin supports these options:*/
/* */
/* 	series: {*/
/* 		pie: {*/
/* 			show: true/false*/
/* 			radius: 0-1 for percentage of fullsize, or a specified pixel length, or 'auto'*/
/* 			innerRadius: 0-1 for percentage of fullsize or a specified pixel length, for creating a donut effect*/
/* 			startAngle: 0-2 factor of PI used for starting angle (in radians) i.e 3/2 starts at the top, 0 and 2 have the same result*/
/* 			tilt: 0-1 for percentage to tilt the pie, where 1 is no tilt, and 0 is completely flat (nothing will show)*/
/* 			offset: {*/
/* 				top: integer value to move the pie up or down*/
/* 				left: integer value to move the pie left or right, or 'auto'*/
/* 			},*/
/* 			stroke: {*/
/* 				color: any hexidecimal color value (other formats may or may not work, so best to stick with something like '#FFF')*/
/* 				width: integer pixel width of the stroke*/
/* 			},*/
/* 			label: {*/
/* 				show: true/false, or 'auto'*/
/* 				formatter:  a user-defined function that modifies the text/style of the label text*/
/* 				radius: 0-1 for percentage of fullsize, or a specified pixel length*/
/* 				background: {*/
/* 					color: any hexidecimal color value (other formats may or may not work, so best to stick with something like '#000')*/
/* 					opacity: 0-1*/
/* 				},*/
/* 				threshold: 0-1 for the percentage value at which to hide labels (if they're too small)*/
/* 			},*/
/* 			combine: {*/
/* 				threshold: 0-1 for the percentage value at which to combine slices (if they're too small)*/
/* 				color: any hexidecimal color value (other formats may or may not work, so best to stick with something like '#CCC'), if null, the plugin will automatically use the color of the first slice to be combined*/
/* 				label: any text value of what the combined slice should be labeled*/
/* 			}*/
/* 			highlight: {*/
/* 				opacity: 0-1*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* More detail and specific examples can be found in the included HTML file.*/
/* */
/* *//* */
/* */
/* (function($) {*/
/* */
/* 	// Maximum redraw attempts when fitting labels within the plot*/
/* */
/* 	var REDRAW_ATTEMPTS = 10;*/
/* */
/* 	// Factor by which to shrink the pie when fitting labels within the plot*/
/* */
/* 	var REDRAW_SHRINK = 0.95;*/
/* */
/* 	function init(plot) {*/
/* */
/* 		var canvas = null,*/
/* 			target = null,*/
/* 			options = null,*/
/* 			maxRadius = null,*/
/* 			centerLeft = null,*/
/* 			centerTop = null,*/
/* 			processed = false,*/
/* 			ctx = null;*/
/* */
/* 		// interactive variables*/
/* */
/* 		var highlights = [];*/
/* */
/* 		// add hook to determine if pie plugin in enabled, and then perform necessary operations*/
/* */
/* 		plot.hooks.processOptions.push(function(plot, options) {*/
/* 			if (options.series.pie.show) {*/
/* */
/* 				options.grid.show = false;*/
/* */
/* 				// set labels.show*/
/* */
/* 				if (options.series.pie.label.show == "auto") {*/
/* 					if (options.legend.show) {*/
/* 						options.series.pie.label.show = false;*/
/* 					} else {*/
/* 						options.series.pie.label.show = true;*/
/* 					}*/
/* 				}*/
/* */
/* 				// set radius*/
/* */
/* 				if (options.series.pie.radius == "auto") {*/
/* 					if (options.series.pie.label.show) {*/
/* 						options.series.pie.radius = 3/4;*/
/* 					} else {*/
/* 						options.series.pie.radius = 1;*/
/* 					}*/
/* 				}*/
/* */
/* 				// ensure sane tilt*/
/* */
/* 				if (options.series.pie.tilt > 1) {*/
/* 					options.series.pie.tilt = 1;*/
/* 				} else if (options.series.pie.tilt < 0) {*/
/* 					options.series.pie.tilt = 0;*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		plot.hooks.bindEvents.push(function(plot, eventHolder) {*/
/* 			var options = plot.getOptions();*/
/* 			if (options.series.pie.show) {*/
/* 				if (options.grid.hoverable) {*/
/* 					eventHolder.unbind("mousemove").mousemove(onMouseMove);*/
/* 				}*/
/* 				if (options.grid.clickable) {*/
/* 					eventHolder.unbind("click").click(onClick);*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		plot.hooks.processDatapoints.push(function(plot, series, data, datapoints) {*/
/* 			var options = plot.getOptions();*/
/* 			if (options.series.pie.show) {*/
/* 				processDatapoints(plot, series, data, datapoints);*/
/* 			}*/
/* 		});*/
/* */
/* 		plot.hooks.drawOverlay.push(function(plot, octx) {*/
/* 			var options = plot.getOptions();*/
/* 			if (options.series.pie.show) {*/
/* 				drawOverlay(plot, octx);*/
/* 			}*/
/* 		});*/
/* */
/* 		plot.hooks.draw.push(function(plot, newCtx) {*/
/* 			var options = plot.getOptions();*/
/* 			if (options.series.pie.show) {*/
/* 				draw(plot, newCtx);*/
/* 			}*/
/* 		});*/
/* */
/* 		function processDatapoints(plot, series, datapoints) {*/
/* 			if (!processed)	{*/
/* 				processed = true;*/
/* 				canvas = plot.getCanvas();*/
/* 				target = $(canvas).parent();*/
/* 				options = plot.getOptions();*/
/* 				plot.setData(combine(plot.getData()));*/
/* 			}*/
/* 		}*/
/* */
/* 		function combine(data) {*/
/* */
/* 			var total = 0,*/
/* 				combined = 0,*/
/* 				numCombined = 0,*/
/* 				color = options.series.pie.combine.color,*/
/* 				newdata = [];*/
/* */
/* 			// Fix up the raw data from Flot, ensuring the data is numeric*/
/* */
/* 			for (var i = 0; i < data.length; ++i) {*/
/* */
/* 				var value = data[i].data;*/
/* */
/* 				// If the data is an array, we'll assume that it's a standard*/
/* 				// Flot x-y pair, and are concerned only with the second value.*/
/* */
/* 				// Note how we use the original array, rather than creating a*/
/* 				// new one; this is more efficient and preserves any extra data*/
/* 				// that the user may have stored in higher indexes.*/
/* */
/* 				if ($.isArray(value) && value.length == 1) {*/
/*     				value = value[0];*/
/* 				}*/
/* */
/* 				if ($.isArray(value)) {*/
/* 					// Equivalent to $.isNumeric() but compatible with jQuery < 1.7*/
/* 					if (!isNaN(parseFloat(value[1])) && isFinite(value[1])) {*/
/* 						value[1] = +value[1];*/
/* 					} else {*/
/* 						value[1] = 0;*/
/* 					}*/
/* 				} else if (!isNaN(parseFloat(value)) && isFinite(value)) {*/
/* 					value = [1, +value];*/
/* 				} else {*/
/* 					value = [1, 0];*/
/* 				}*/
/* */
/* 				data[i].data = [value];*/
/* 			}*/
/* */
/* 			// Sum up all the slices, so we can calculate percentages for each*/
/* */
/* 			for (var i = 0; i < data.length; ++i) {*/
/* 				total += data[i].data[0][1];*/
/* 			}*/
/* */
/* 			// Count the number of slices with percentages below the combine*/
/* 			// threshold; if it turns out to be just one, we won't combine.*/
/* */
/* 			for (var i = 0; i < data.length; ++i) {*/
/* 				var value = data[i].data[0][1];*/
/* 				if (value / total <= options.series.pie.combine.threshold) {*/
/* 					combined += value;*/
/* 					numCombined++;*/
/* 					if (!color) {*/
/* 						color = data[i].color;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			for (var i = 0; i < data.length; ++i) {*/
/* 				var value = data[i].data[0][1];*/
/* 				if (numCombined < 2 || value / total > options.series.pie.combine.threshold) {*/
/* 					newdata.push(*/
/* 						$.extend(data[i], {     /* extend to allow keeping all other original data values*/
/* 						                           and using them e.g. in labelFormatter. *//* */
/* 							data: [[1, value]],*/
/* 							color: data[i].color,*/
/* 							label: data[i].label,*/
/* 							angle: value * Math.PI * 2 / total,*/
/* 							percent: value / (total / 100)*/
/* 						})*/
/* 					);*/
/* 				}*/
/* 			}*/
/* */
/* 			if (numCombined > 1) {*/
/* 				newdata.push({*/
/* 					data: [[1, combined]],*/
/* 					color: color,*/
/* 					label: options.series.pie.combine.label,*/
/* 					angle: combined * Math.PI * 2 / total,*/
/* 					percent: combined / (total / 100)*/
/* 				});*/
/* 			}*/
/* */
/* 			return newdata;*/
/* 		}*/
/* */
/* 		function draw(plot, newCtx) {*/
/* */
/* 			if (!target) {*/
/* 				return; // if no series were passed*/
/* 			}*/
/* */
/* 			var canvasWidth = plot.getPlaceholder().width(),*/
/* 				canvasHeight = plot.getPlaceholder().height(),*/
/* 				legendWidth = target.children().filter(".legend").children().width() || 0;*/
/* */
/* 			ctx = newCtx;*/
/* */
/* 			// WARNING: HACK! REWRITE THIS CODE AS SOON AS POSSIBLE!*/
/* */
/* 			// When combining smaller slices into an 'other' slice, we need to*/
/* 			// add a new series.  Since Flot gives plugins no way to modify the*/
/* 			// list of series, the pie plugin uses a hack where the first call*/
/* 			// to processDatapoints results in a call to setData with the new*/
/* 			// list of series, then subsequent processDatapoints do nothing.*/
/* */
/* 			// The plugin-global 'processed' flag is used to control this hack;*/
/* 			// it starts out false, and is set to true after the first call to*/
/* 			// processDatapoints.*/
/* */
/* 			// Unfortunately this turns future setData calls into no-ops; they*/
/* 			// call processDatapoints, the flag is true, and nothing happens.*/
/* */
/* 			// To fix this we'll set the flag back to false here in draw, when*/
/* 			// all series have been processed, so the next sequence of calls to*/
/* 			// processDatapoints once again starts out with a slice-combine.*/
/* 			// This is really a hack; in 0.9 we need to give plugins a proper*/
/* 			// way to modify series before any processing begins.*/
/* */
/* 			processed = false;*/
/* */
/* 			// calculate maximum radius and center point*/
/* */
/* 			maxRadius =  Math.min(canvasWidth, canvasHeight / options.series.pie.tilt) / 2;*/
/* 			centerTop = canvasHeight / 2 + options.series.pie.offset.top;*/
/* 			centerLeft = canvasWidth / 2;*/
/* */
/* 			if (options.series.pie.offset.left == "auto") {*/
/* 				if (options.legend.position.match("w")) {*/
/* 					centerLeft += legendWidth / 2;*/
/* 				} else {*/
/* 					centerLeft -= legendWidth / 2;*/
/* 				}*/
/* 				if (centerLeft < maxRadius) {*/
/* 					centerLeft = maxRadius;*/
/* 				} else if (centerLeft > canvasWidth - maxRadius) {*/
/* 					centerLeft = canvasWidth - maxRadius;*/
/* 				}*/
/* 			} else {*/
/* 				centerLeft += options.series.pie.offset.left;*/
/* 			}*/
/* */
/* 			var slices = plot.getData(),*/
/* 				attempts = 0;*/
/* */
/* 			// Keep shrinking the pie's radius until drawPie returns true,*/
/* 			// indicating that all the labels fit, or we try too many times.*/
/* */
/* 			do {*/
/* 				if (attempts > 0) {*/
/* 					maxRadius *= REDRAW_SHRINK;*/
/* 				}*/
/* 				attempts += 1;*/
/* 				clear();*/
/* 				if (options.series.pie.tilt <= 0.8) {*/
/* 					drawShadow();*/
/* 				}*/
/* 			} while (!drawPie() && attempts < REDRAW_ATTEMPTS)*/
/* */
/* 			if (attempts >= REDRAW_ATTEMPTS) {*/
/* 				clear();*/
/* 				target.prepend("<div class='error'>Could not draw pie with labels contained inside canvas</div>");*/
/* 			}*/
/* */
/* 			if (plot.setSeries && plot.insertLegend) {*/
/* 				plot.setSeries(slices);*/
/* 				plot.insertLegend();*/
/* 			}*/
/* */
/* 			// we're actually done at this point, just defining internal functions at this point*/
/* */
/* 			function clear() {*/
/* 				ctx.clearRect(0, 0, canvasWidth, canvasHeight);*/
/* 				target.children().filter(".pieLabel, .pieLabelBackground").remove();*/
/* 			}*/
/* */
/* 			function drawShadow() {*/
/* */
/* 				var shadowLeft = options.series.pie.shadow.left;*/
/* 				var shadowTop = options.series.pie.shadow.top;*/
/* 				var edge = 10;*/
/* 				var alpha = options.series.pie.shadow.alpha;*/
/* 				var radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius;*/
/* */
/* 				if (radius >= canvasWidth / 2 - shadowLeft || radius * options.series.pie.tilt >= canvasHeight / 2 - shadowTop || radius <= edge) {*/
/* 					return;	// shadow would be outside canvas, so don't draw it*/
/* 				}*/
/* */
/* 				ctx.save();*/
/* 				ctx.translate(shadowLeft,shadowTop);*/
/* 				ctx.globalAlpha = alpha;*/
/* 				ctx.fillStyle = "#000";*/
/* */
/* 				// center and rotate to starting position*/
/* */
/* 				ctx.translate(centerLeft,centerTop);*/
/* 				ctx.scale(1, options.series.pie.tilt);*/
/* */
/* 				//radius -= edge;*/
/* */
/* 				for (var i = 1; i <= edge; i++) {*/
/* 					ctx.beginPath();*/
/* 					ctx.arc(0, 0, radius, 0, Math.PI * 2, false);*/
/* 					ctx.fill();*/
/* 					radius -= i;*/
/* 				}*/
/* */
/* 				ctx.restore();*/
/* 			}*/
/* */
/* 			function drawPie() {*/
/* */
/* 				var startAngle = Math.PI * options.series.pie.startAngle;*/
/* 				var radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius;*/
/* */
/* 				// center and rotate to starting position*/
/* */
/* 				ctx.save();*/
/* 				ctx.translate(centerLeft,centerTop);*/
/* 				ctx.scale(1, options.series.pie.tilt);*/
/* 				//ctx.rotate(startAngle); // start at top; -- This doesn't work properly in Opera*/
/* */
/* 				// draw slices*/
/* */
/* 				ctx.save();*/
/* 				var currentAngle = startAngle;*/
/* 				for (var i = 0; i < slices.length; ++i) {*/
/* 					slices[i].startAngle = currentAngle;*/
/* 					drawSlice(slices[i].angle, slices[i].color, true);*/
/* 				}*/
/* 				ctx.restore();*/
/* */
/* 				// draw slice outlines*/
/* */
/* 				if (options.series.pie.stroke.width > 0) {*/
/* 					ctx.save();*/
/* 					ctx.lineWidth = options.series.pie.stroke.width;*/
/* 					currentAngle = startAngle;*/
/* 					for (var i = 0; i < slices.length; ++i) {*/
/* 						drawSlice(slices[i].angle, options.series.pie.stroke.color, false);*/
/* 					}*/
/* 					ctx.restore();*/
/* 				}*/
/* */
/* 				// draw donut hole*/
/* */
/* 				drawDonutHole(ctx);*/
/* */
/* 				ctx.restore();*/
/* */
/* 				// Draw the labels, returning true if they fit within the plot*/
/* */
/* 				if (options.series.pie.label.show) {*/
/* 					return drawLabels();*/
/* 				} else return true;*/
/* */
/* 				function drawSlice(angle, color, fill) {*/
/* */
/* 					if (angle <= 0 || isNaN(angle)) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					if (fill) {*/
/* 						ctx.fillStyle = color;*/
/* 					} else {*/
/* 						ctx.strokeStyle = color;*/
/* 						ctx.lineJoin = "round";*/
/* 					}*/
/* */
/* 					ctx.beginPath();*/
/* 					if (Math.abs(angle - Math.PI * 2) > 0.000000001) {*/
/* 						ctx.moveTo(0, 0); // Center of the pie*/
/* 					}*/
/* */
/* 					//ctx.arc(0, 0, radius, 0, angle, false); // This doesn't work properly in Opera*/
/* 					ctx.arc(0, 0, radius,currentAngle, currentAngle + angle / 2, false);*/
/* 					ctx.arc(0, 0, radius,currentAngle + angle / 2, currentAngle + angle, false);*/
/* 					ctx.closePath();*/
/* 					//ctx.rotate(angle); // This doesn't work properly in Opera*/
/* 					currentAngle += angle;*/
/* */
/* 					if (fill) {*/
/* 						ctx.fill();*/
/* 					} else {*/
/* 						ctx.stroke();*/
/* 					}*/
/* 				}*/
/* */
/* 				function drawLabels() {*/
/* */
/* 					var currentAngle = startAngle;*/
/* 					var radius = options.series.pie.label.radius > 1 ? options.series.pie.label.radius : maxRadius * options.series.pie.label.radius;*/
/* */
/* 					for (var i = 0; i < slices.length; ++i) {*/
/* 						if (slices[i].percent >= options.series.pie.label.threshold * 100) {*/
/* 							if (!drawLabel(slices[i], currentAngle, i)) {*/
/* 								return false;*/
/* 							}*/
/* 						}*/
/* 						currentAngle += slices[i].angle;*/
/* 					}*/
/* */
/* 					return true;*/
/* */
/* 					function drawLabel(slice, startAngle, index) {*/
/* */
/* 						if (slice.data[0][1] == 0) {*/
/* 							return true;*/
/* 						}*/
/* */
/* 						// format label text*/
/* */
/* 						var lf = options.legend.labelFormatter, text, plf = options.series.pie.label.formatter;*/
/* */
/* 						if (lf) {*/
/* 							text = lf(slice.label, slice);*/
/* 						} else {*/
/* 							text = slice.label;*/
/* 						}*/
/* */
/* 						if (plf) {*/
/* 							text = plf(text, slice);*/
/* 						}*/
/* */
/* 						var halfAngle = ((startAngle + slice.angle) + startAngle) / 2;*/
/* 						var x = centerLeft + Math.round(Math.cos(halfAngle) * radius);*/
/* 						var y = centerTop + Math.round(Math.sin(halfAngle) * radius) * options.series.pie.tilt;*/
/* */
/* 						var html = "<span class='pieLabel' id='pieLabel" + index + "' style='position:absolute;top:" + y + "px;left:" + x + "px;'>" + text + "</span>";*/
/* 						target.append(html);*/
/* */
/* 						var label = target.children("#pieLabel" + index);*/
/* 						var labelTop = (y - label.height() / 2);*/
/* 						var labelLeft = (x - label.width() / 2);*/
/* */
/* 						label.css("top", labelTop);*/
/* 						label.css("left", labelLeft);*/
/* */
/* 						// check to make sure that the label is not outside the canvas*/
/* */
/* 						if (0 - labelTop > 0 || 0 - labelLeft > 0 || canvasHeight - (labelTop + label.height()) < 0 || canvasWidth - (labelLeft + label.width()) < 0) {*/
/* 							return false;*/
/* 						}*/
/* */
/* 						if (options.series.pie.label.background.opacity != 0) {*/
/* */
/* 							// put in the transparent background separately to avoid blended labels and label boxes*/
/* */
/* 							var c = options.series.pie.label.background.color;*/
/* */
/* 							if (c == null) {*/
/* 								c = slice.color;*/
/* 							}*/
/* */
/* 							var pos = "top:" + labelTop + "px;left:" + labelLeft + "px;";*/
/* 							$("<div class='pieLabelBackground' style='position:absolute;width:" + label.width() + "px;height:" + label.height() + "px;" + pos + "background-color:" + c + ";'></div>")*/
/* 								.css("opacity", options.series.pie.label.background.opacity)*/
/* 								.insertBefore(label);*/
/* 						}*/
/* */
/* 						return true;*/
/* 					} // end individual label function*/
/* 				} // end drawLabels function*/
/* 			} // end drawPie function*/
/* 		} // end draw function*/
/* */
/* 		// Placed here because it needs to be accessed from multiple locations*/
/* */
/* 		function drawDonutHole(layer) {*/
/* 			if (options.series.pie.innerRadius > 0) {*/
/* */
/* 				// subtract the center*/
/* */
/* 				layer.save();*/
/* 				var innerRadius = options.series.pie.innerRadius > 1 ? options.series.pie.innerRadius : maxRadius * options.series.pie.innerRadius;*/
/* 				layer.globalCompositeOperation = "destination-out"; // this does not work with excanvas, but it will fall back to using the stroke color*/
/* 				layer.beginPath();*/
/* 				layer.fillStyle = options.series.pie.stroke.color;*/
/* 				layer.arc(0, 0, innerRadius, 0, Math.PI * 2, false);*/
/* 				layer.fill();*/
/* 				layer.closePath();*/
/* 				layer.restore();*/
/* */
/* 				// add inner stroke*/
/* */
/* 				layer.save();*/
/* 				layer.beginPath();*/
/* 				layer.strokeStyle = options.series.pie.stroke.color;*/
/* 				layer.arc(0, 0, innerRadius, 0, Math.PI * 2, false);*/
/* 				layer.stroke();*/
/* 				layer.closePath();*/
/* 				layer.restore();*/
/* */
/* 				// TODO: add extra shadow inside hole (with a mask) if the pie is tilted.*/
/* 			}*/
/* 		}*/
/* */
/* 		//-- Additional Interactive related functions --*/
/* */
/* 		function isPointInPoly(poly, pt) {*/
/* 			for(var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)*/
/* 				((poly[i][1] <= pt[1] && pt[1] < poly[j][1]) || (poly[j][1] <= pt[1] && pt[1]< poly[i][1]))*/
/* 				&& (pt[0] < (poly[j][0] - poly[i][0]) * (pt[1] - poly[i][1]) / (poly[j][1] - poly[i][1]) + poly[i][0])*/
/* 				&& (c = !c);*/
/* 			return c;*/
/* 		}*/
/* */
/* 		function findNearbySlice(mouseX, mouseY) {*/
/* */
/* 			var slices = plot.getData(),*/
/* 				options = plot.getOptions(),*/
/* 				radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius,*/
/* 				x, y;*/
/* */
/* 			for (var i = 0; i < slices.length; ++i) {*/
/* */
/* 				var s = slices[i];*/
/* */
/* 				if (s.pie.show) {*/
/* */
/* 					ctx.save();*/
/* 					ctx.beginPath();*/
/* 					ctx.moveTo(0, 0); // Center of the pie*/
/* 					//ctx.scale(1, options.series.pie.tilt);	// this actually seems to break everything when here.*/
/* 					ctx.arc(0, 0, radius, s.startAngle, s.startAngle + s.angle / 2, false);*/
/* 					ctx.arc(0, 0, radius, s.startAngle + s.angle / 2, s.startAngle + s.angle, false);*/
/* 					ctx.closePath();*/
/* 					x = mouseX - centerLeft;*/
/* 					y = mouseY - centerTop;*/
/* */
/* 					if (ctx.isPointInPath) {*/
/* 						if (ctx.isPointInPath(mouseX - centerLeft, mouseY - centerTop)) {*/
/* 							ctx.restore();*/
/* 							return {*/
/* 								datapoint: [s.percent, s.data],*/
/* 								dataIndex: 0,*/
/* 								series: s,*/
/* 								seriesIndex: i*/
/* 							};*/
/* 						}*/
/* 					} else {*/
/* */
/* 						// excanvas for IE doesn;t support isPointInPath, this is a workaround.*/
/* */
/* 						var p1X = radius * Math.cos(s.startAngle),*/
/* 							p1Y = radius * Math.sin(s.startAngle),*/
/* 							p2X = radius * Math.cos(s.startAngle + s.angle / 4),*/
/* 							p2Y = radius * Math.sin(s.startAngle + s.angle / 4),*/
/* 							p3X = radius * Math.cos(s.startAngle + s.angle / 2),*/
/* 							p3Y = radius * Math.sin(s.startAngle + s.angle / 2),*/
/* 							p4X = radius * Math.cos(s.startAngle + s.angle / 1.5),*/
/* 							p4Y = radius * Math.sin(s.startAngle + s.angle / 1.5),*/
/* 							p5X = radius * Math.cos(s.startAngle + s.angle),*/
/* 							p5Y = radius * Math.sin(s.startAngle + s.angle),*/
/* 							arrPoly = [[0, 0], [p1X, p1Y], [p2X, p2Y], [p3X, p3Y], [p4X, p4Y], [p5X, p5Y]],*/
/* 							arrPoint = [x, y];*/
/* */
/* 						// TODO: perhaps do some mathmatical trickery here with the Y-coordinate to compensate for pie tilt?*/
/* */
/* 						if (isPointInPoly(arrPoly, arrPoint)) {*/
/* 							ctx.restore();*/
/* 							return {*/
/* 								datapoint: [s.percent, s.data],*/
/* 								dataIndex: 0,*/
/* 								series: s,*/
/* 								seriesIndex: i*/
/* 							};*/
/* 						}*/
/* 					}*/
/* */
/* 					ctx.restore();*/
/* 				}*/
/* 			}*/
/* */
/* 			return null;*/
/* 		}*/
/* */
/* 		function onMouseMove(e) {*/
/* 			triggerClickHoverEvent("plothover", e);*/
/* 		}*/
/* */
/* 		function onClick(e) {*/
/* 			triggerClickHoverEvent("plotclick", e);*/
/* 		}*/
/* */
/* 		// trigger click or hover event (they send the same parameters so we share their code)*/
/* */
/* 		function triggerClickHoverEvent(eventname, e) {*/
/* */
/* 			var offset = plot.offset();*/
/* 			var canvasX = parseInt(e.pageX - offset.left);*/
/* 			var canvasY =  parseInt(e.pageY - offset.top);*/
/* 			var item = findNearbySlice(canvasX, canvasY);*/
/* */
/* 			if (options.grid.autoHighlight) {*/
/* */
/* 				// clear auto-highlights*/
/* */
/* 				for (var i = 0; i < highlights.length; ++i) {*/
/* 					var h = highlights[i];*/
/* 					if (h.auto == eventname && !(item && h.series == item.series)) {*/
/* 						unhighlight(h.series);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// highlight the slice*/
/* */
/* 			if (item) {*/
/* 				highlight(item.series, eventname);*/
/* 			}*/
/* */
/* 			// trigger any hover bind events*/
/* */
/* 			var pos = { pageX: e.pageX, pageY: e.pageY };*/
/* 			target.trigger(eventname, [pos, item]);*/
/* 		}*/
/* */
/* 		function highlight(s, auto) {*/
/* 			//if (typeof s == "number") {*/
/* 			//	s = series[s];*/
/* 			//}*/
/* */
/* 			var i = indexOfHighlight(s);*/
/* */
/* 			if (i == -1) {*/
/* 				highlights.push({ series: s, auto: auto });*/
/* 				plot.triggerRedrawOverlay();*/
/* 			} else if (!auto) {*/
/* 				highlights[i].auto = false;*/
/* 			}*/
/* 		}*/
/* */
/* 		function unhighlight(s) {*/
/* 			if (s == null) {*/
/* 				highlights = [];*/
/* 				plot.triggerRedrawOverlay();*/
/* 			}*/
/* */
/* 			//if (typeof s == "number") {*/
/* 			//	s = series[s];*/
/* 			//}*/
/* */
/* 			var i = indexOfHighlight(s);*/
/* */
/* 			if (i != -1) {*/
/* 				highlights.splice(i, 1);*/
/* 				plot.triggerRedrawOverlay();*/
/* 			}*/
/* 		}*/
/* */
/* 		function indexOfHighlight(s) {*/
/* 			for (var i = 0; i < highlights.length; ++i) {*/
/* 				var h = highlights[i];*/
/* 				if (h.series == s)*/
/* 					return i;*/
/* 			}*/
/* 			return -1;*/
/* 		}*/
/* */
/* 		function drawOverlay(plot, octx) {*/
/* */
/* 			var options = plot.getOptions();*/
/* */
/* 			var radius = options.series.pie.radius > 1 ? options.series.pie.radius : maxRadius * options.series.pie.radius;*/
/* */
/* 			octx.save();*/
/* 			octx.translate(centerLeft, centerTop);*/
/* 			octx.scale(1, options.series.pie.tilt);*/
/* */
/* 			for (var i = 0; i < highlights.length; ++i) {*/
/* 				drawHighlight(highlights[i].series);*/
/* 			}*/
/* */
/* 			drawDonutHole(octx);*/
/* */
/* 			octx.restore();*/
/* */
/* 			function drawHighlight(series) {*/
/* */
/* 				if (series.angle <= 0 || isNaN(series.angle)) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				//octx.fillStyle = parseColor(options.series.pie.highlight.color).scale(null, null, null, options.series.pie.highlight.opacity).toString();*/
/* 				octx.fillStyle = "rgba(255, 255, 255, " + options.series.pie.highlight.opacity + ")"; // this is temporary until we have access to parseColor*/
/* 				octx.beginPath();*/
/* 				if (Math.abs(series.angle - Math.PI * 2) > 0.000000001) {*/
/* 					octx.moveTo(0, 0); // Center of the pie*/
/* 				}*/
/* 				octx.arc(0, 0, radius, series.startAngle, series.startAngle + series.angle / 2, false);*/
/* 				octx.arc(0, 0, radius, series.startAngle + series.angle / 2, series.startAngle + series.angle, false);*/
/* 				octx.closePath();*/
/* 				octx.fill();*/
/* 			}*/
/* 		}*/
/* 	} // end init (plugin body)*/
/* */
/* 	// define pie specific options and their default values*/
/* */
/* 	var options = {*/
/* 		series: {*/
/* 			pie: {*/
/* 				show: false,*/
/* 				radius: "auto",	// actual radius of the visible pie (based on full calculated radius if <=1, or hard pixel value)*/
/* 				innerRadius: 0, /* for donut *//* */
/* 				startAngle: 3/2,*/
/* 				tilt: 1,*/
/* 				shadow: {*/
/* 					left: 5,	// shadow left offset*/
/* 					top: 15,	// shadow top offset*/
/* 					alpha: 0.02	// shadow alpha*/
/* 				},*/
/* 				offset: {*/
/* 					top: 0,*/
/* 					left: "auto"*/
/* 				},*/
/* 				stroke: {*/
/* 					color: "#fff",*/
/* 					width: 1*/
/* 				},*/
/* 				label: {*/
/* 					show: "auto",*/
/* 					formatter: function(label, slice) {*/
/* 						return "<div style='font-size:x-small;text-align:center;padding:2px;color:" + slice.color + ";'>" + label + "<br/>" + Math.round(slice.percent) + "%</div>";*/
/* 					},	// formatter function*/
/* 					radius: 1,	// radius at which to place the labels (based on full calculated radius if <=1, or hard pixel value)*/
/* 					background: {*/
/* 						color: null,*/
/* 						opacity: 0*/
/* 					},*/
/* 					threshold: 0	// percentage at which to hide the label (i.e. the slice is too narrow)*/
/* 				},*/
/* 				combine: {*/
/* 					threshold: -1,	// percentage at which to combine little slices into one larger slice*/
/* 					color: null,	// color to give the new slice (auto-generated if null)*/
/* 					label: "Other"	// label to give the new slice*/
/* 				},*/
/* 				highlight: {*/
/* 					//color: "#fff",		// will add this functionality once parseColor is available*/
/* 					opacity: 0.5*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	};*/
/* */
/* 	$.plot.plugins.push({*/
/* 		init: init,*/
/* 		options: options,*/
/* 		name: "pie",*/
/* 		version: "1.1"*/
/* 	});*/
/* */
/* })(jQuery);*/
/* */
