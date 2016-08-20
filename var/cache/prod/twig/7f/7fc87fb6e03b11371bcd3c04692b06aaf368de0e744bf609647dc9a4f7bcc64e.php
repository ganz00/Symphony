<?php

/* @css/Script/liscroll.js */
class __TwigTemplate_8ab42248f7ac67e4edb27ddcbef3fe85b0b788cc2e1bc573da5ecbb6ba7ccc11 extends Twig_Template
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
        echo "jQuery.fn.liScroll = function(settings) {
\t\tsettings = jQuery.extend({
\t\ttravelocity: 0.07
\t\t}, settings);\t\t
\t\treturn this.each(function(){
\t\t\t\tvar \$strip = jQuery(this);
\t\t\t\t\$strip.addClass(\"newsticker\")
\t\t\t\tvar stripWidth = 1;
\t\t\t\t\$strip.find(\"li\").each(function(i){
\t\t\t\tstripWidth += jQuery(this, i).outerWidth(true); // thanks to Michael Haszprunar and Fabien Volpi
\t\t\t\t});
\t\t\t\tvar \$mask = \$strip.wrap(\"<div class='mask'></div>\");
\t\t\t\tvar \$tickercontainer = \$strip.parent().wrap(\"<div class='tickercontainer'></div>\");\t\t\t\t\t\t\t\t
\t\t\t\tvar containerWidth = \$strip.parent().parent().width();\t//a.k.a. 'mask' width \t
\t\t\t\t\$strip.width(stripWidth);\t\t\t
\t\t\t\tvar totalTravel = stripWidth+containerWidth;
\t\t\t\tvar defTiming = totalTravel/settings.travelocity;\t// thanks to Scott Waye\t\t
\t\t\t\tfunction scrollnews(spazio, tempo){
\t\t\t\t\$strip.animate({left: '-='+ spazio}, tempo, \"linear\", function(){\$strip.css(\"left\", containerWidth); scrollnews(totalTravel, defTiming);});
\t\t\t\t}
\t\t\t\tscrollnews(totalTravel, defTiming);\t\t\t\t
\t\t\t\t\$strip.hover(function(){
\t\t\t\tjQuery(this).stop();
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\tvar offset = jQuery(this).offset();
\t\t\t\tvar residualSpace = offset.left + stripWidth;
\t\t\t\tvar residualTime = residualSpace/settings.travelocity;
\t\t\t\tscrollnews(residualSpace, residualTime);
\t\t\t\t});\t\t\t
\t\t});\t
};

\$(\"ul#ticker01\").liScroll();
";
    }

    public function getTemplateName()
    {
        return "@css/Script/liscroll.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* jQuery.fn.liScroll = function(settings) {*/
/* 		settings = jQuery.extend({*/
/* 		travelocity: 0.07*/
/* 		}, settings);		*/
/* 		return this.each(function(){*/
/* 				var $strip = jQuery(this);*/
/* 				$strip.addClass("newsticker")*/
/* 				var stripWidth = 1;*/
/* 				$strip.find("li").each(function(i){*/
/* 				stripWidth += jQuery(this, i).outerWidth(true); // thanks to Michael Haszprunar and Fabien Volpi*/
/* 				});*/
/* 				var $mask = $strip.wrap("<div class='mask'></div>");*/
/* 				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								*/
/* 				var containerWidth = $strip.parent().parent().width();	//a.k.a. 'mask' width 	*/
/* 				$strip.width(stripWidth);			*/
/* 				var totalTravel = stripWidth+containerWidth;*/
/* 				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		*/
/* 				function scrollnews(spazio, tempo){*/
/* 				$strip.animate({left: '-='+ spazio}, tempo, "linear", function(){$strip.css("left", containerWidth); scrollnews(totalTravel, defTiming);});*/
/* 				}*/
/* 				scrollnews(totalTravel, defTiming);				*/
/* 				$strip.hover(function(){*/
/* 				jQuery(this).stop();*/
/* 				},*/
/* 				function(){*/
/* 				var offset = jQuery(this).offset();*/
/* 				var residualSpace = offset.left + stripWidth;*/
/* 				var residualTime = residualSpace/settings.travelocity;*/
/* 				scrollnews(residualSpace, residualTime);*/
/* 				});			*/
/* 		});	*/
/* };*/
/* */
/* $("ul#ticker01").liScroll();*/
/* */
