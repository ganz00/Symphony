<?php

/* @css/jquery.jqplot/jqPlotCssStyling.txt */
class __TwigTemplate_7ed1e63a2c2ce1d17c2e5f4764f94d9c1eb03135ac9662548fb9e9ebb1e549e5 extends Twig_Template
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
        $__internal_9bde07e5799cec138491d85a01cf690de7690a7d87f359de671ee266787ca71a = $this->env->getExtension("native_profiler");
        $__internal_9bde07e5799cec138491d85a01cf690de7690a7d87f359de671ee266787ca71a->enter($__internal_9bde07e5799cec138491d85a01cf690de7690a7d87f359de671ee266787ca71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/jqPlotCssStyling.txt"));

        // line 1
        echo "Title: jqPlot CSS Customization

Much of the styling of jqPlot is done by css.  The jqPlot css file is, unremarkably, 
jquery.jqplot.css and resides in the same directory as jqPlot itself.

There exist some styling related javascript properties on the plot objects themselves
(like fontStyle, fontSize, etc.).  These can be set with the options object at plot creation.  
Generally, setting these options is *NOT* the preferred way to customize the look of the
plot.  Use the css file instead.  *These options are deprecated and may disappear*.  The
exceptions are certain background and color options which control attributes of something
renderered on a canvas.  This would be line color, grid background, etc.  These must
be set by the options object.  For a list of available options, see <jqPlot Options>.

Objects in the plot that can be customized by css are given a css class like \".jqplot-*\".
For example, the plot title will have a \".jqplot-title\" class, the axes \".jqplot-axis\", etc.

Currently assigned classes in jqPlot 
are as follows:

.jqplot-target - Styles for the plot target div.  These will be cascaded down 
to all plot elements according to css rules.

.jqplot-axis - Styles for all axes

.jqplot-xaxis - Styles applied to the primary x axis only.

.jqplot-yaxis - Styles applied to the primary y axis only.

.jqplot-x2axis, .jqplot-x3axis, ... - Styles applied to the 2nd, 3rd, etc. x axis only.

.jqplot-y2axis, .jqplot-y3axis, ... - Styles applied to the 2nd, 3rd, etc.y axis only.

.jqplot-axis-tick - Styles applied to all axis ticks

.jqplot-xaxis-tick - Styles applied to primary x axis ticks only.

.jqplot-x2axis-tick - Styles applied to secondary x axis ticks only.

.jqplot-yaxis-tick - Styles applied to primary y axis ticks only.

.jqplot-y2axis-tick - Styles applied to secondary y axis ticks only.

table.jqplot-table-legend - Styles applied to the legend box table.

.jqplot-title - Styles applied to the title.

.jqplot-cursor-tooltip - Styles applied to the cursor tooltip

.jqplot-highlighter-tooltip - Styles applied to the highlighter tooltip.

div.jqplot-table-legend-swatch - the div element used for the colored swatch on the legend.

Note that axes will be assigned 2 classes like: class=\".jqplot-axis .jqplot-xaxis\".";
        
        $__internal_9bde07e5799cec138491d85a01cf690de7690a7d87f359de671ee266787ca71a->leave($__internal_9bde07e5799cec138491d85a01cf690de7690a7d87f359de671ee266787ca71a_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/jqPlotCssStyling.txt";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Title: jqPlot CSS Customization*/
/* */
/* Much of the styling of jqPlot is done by css.  The jqPlot css file is, unremarkably, */
/* jquery.jqplot.css and resides in the same directory as jqPlot itself.*/
/* */
/* There exist some styling related javascript properties on the plot objects themselves*/
/* (like fontStyle, fontSize, etc.).  These can be set with the options object at plot creation.  */
/* Generally, setting these options is *NOT* the preferred way to customize the look of the*/
/* plot.  Use the css file instead.  *These options are deprecated and may disappear*.  The*/
/* exceptions are certain background and color options which control attributes of something*/
/* renderered on a canvas.  This would be line color, grid background, etc.  These must*/
/* be set by the options object.  For a list of available options, see <jqPlot Options>.*/
/* */
/* Objects in the plot that can be customized by css are given a css class like ".jqplot-*".*/
/* For example, the plot title will have a ".jqplot-title" class, the axes ".jqplot-axis", etc.*/
/* */
/* Currently assigned classes in jqPlot */
/* are as follows:*/
/* */
/* .jqplot-target - Styles for the plot target div.  These will be cascaded down */
/* to all plot elements according to css rules.*/
/* */
/* .jqplot-axis - Styles for all axes*/
/* */
/* .jqplot-xaxis - Styles applied to the primary x axis only.*/
/* */
/* .jqplot-yaxis - Styles applied to the primary y axis only.*/
/* */
/* .jqplot-x2axis, .jqplot-x3axis, ... - Styles applied to the 2nd, 3rd, etc. x axis only.*/
/* */
/* .jqplot-y2axis, .jqplot-y3axis, ... - Styles applied to the 2nd, 3rd, etc.y axis only.*/
/* */
/* .jqplot-axis-tick - Styles applied to all axis ticks*/
/* */
/* .jqplot-xaxis-tick - Styles applied to primary x axis ticks only.*/
/* */
/* .jqplot-x2axis-tick - Styles applied to secondary x axis ticks only.*/
/* */
/* .jqplot-yaxis-tick - Styles applied to primary y axis ticks only.*/
/* */
/* .jqplot-y2axis-tick - Styles applied to secondary y axis ticks only.*/
/* */
/* table.jqplot-table-legend - Styles applied to the legend box table.*/
/* */
/* .jqplot-title - Styles applied to the title.*/
/* */
/* .jqplot-cursor-tooltip - Styles applied to the cursor tooltip*/
/* */
/* .jqplot-highlighter-tooltip - Styles applied to the highlighter tooltip.*/
/* */
/* div.jqplot-table-legend-swatch - the div element used for the colored swatch on the legend.*/
/* */
/* Note that axes will be assigned 2 classes like: class=".jqplot-axis .jqplot-xaxis".*/
