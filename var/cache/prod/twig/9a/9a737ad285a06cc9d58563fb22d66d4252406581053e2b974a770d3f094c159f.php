<?php

/* @css/jquery.jqplot/examples/example.min.js */
class __TwigTemplate_17790b7066f20307c36319d0adfe7604e974e0fd5bc26dc94fdf41dbdef8a669 extends Twig_Template
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
        echo "/* jqplot 1.0.9 | (c) 2009-2016 Chris Leonello | jplot.com
   jsDate | (c) 2010-2016 Chris Leonello
 */
\$(document).ready(function(){if(!\$.jqplot._noCodeBlock){\$(\"script.code\").each(function(a){if(\$(\"pre.code\").eq(a).length)\$(\"pre.code\").eq(a).text(\$(this).html());else{var b=\$('<pre class=\"code prettyprint brush: js\"></pre>');\$(\"div.jqplot-target\").eq(a).after(b),b.text(\$(this).html()),b=null}}),\$(\"script.common\").each(function(a){\$(\"pre.common\").eq(a).text(\$(this).html())});var a=\"\";if(\$(\"script.include, link.include\").length>0){if(0==\$(\"pre.include\").length){var b=['<div class=\"code prettyprint include\">','<p class=\"text\">The charts on this page depend on the following files:</p>','<pre class=\"include prettyprint brush: html gutter: false\"></pre>',\"</div>\"];b=\$(b.join(\"\\n\")),\$(\"div#example-content\").append(b),b=null}\$(\"script.include\").each(function(b){\"\"!==a&&(a+=\"\\n\"),a+='<script type=\"text/javascript\" src=\"'+\$(this).attr(\"src\")+'\"></script>'}),\$(\"link.include\").each(function(b){\"\"!==a&&(a+=\"\\n\"),a+='<link rel=\"stylesheet\" type=\"text/css\" href=\"'+\$(this).attr(\"href\")+'\" />'}),\$(\"pre.include\").text(a)}else \$(\"pre.include\").remove(),\$(\"div.include\").remove()}\$.jqplot.use_excanvas||\$(\"div.jqplot-target\").each(function(){var a=\$(document.createElement(\"div\")),b=\$(document.createElement(\"div\")),c=\$(document.createElement(\"div\"));a.append(b),a.append(c),a.addClass(\"jqplot-image-container\"),b.addClass(\"jqplot-image-container-header\"),c.addClass(\"jqplot-image-container-content\"),b.html(\"Right Click to Save Image As...\");var d=\$(document.createElement(\"a\"));if(d.addClass(\"jqplot-image-container-close\"),d.html(\"Close\"),d.attr(\"href\",\"#\"),d.click(function(){\$(this).parents(\"div.jqplot-image-container\").hide(500)}),b.append(d),\$(this).after(a),a.hide(),a=b=c=d=null,!\$.jqplot._noToImageButton){var e=\$(document.createElement(\"button\"));e.text(\"View Plot Image\"),e.addClass(\"jqplot-image-button\"),e.bind(\"click\",{chart:\$(this)},function(a){var b=a.data.chart.jqplotToImageElem(),c=\$(this).nextAll(\"div.jqplot-image-container\").first();c.children(\"div.jqplot-image-container-content\").empty(),c.children(\"div.jqplot-image-container-content\").append(b),c.show(500),c=null}),\$(this).after(e),e.after(\"<br />\"),e=null}}),SyntaxHighlighter.defaults.toolbar=!0,SyntaxHighlighter.all(),\$(document).unload(function(){\$(\"*\").unbind()})});";
    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/example.min.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /* jqplot 1.0.9 | (c) 2009-2016 Chris Leonello | jplot.com*/
/*    jsDate | (c) 2010-2016 Chris Leonello*/
/*  *//* */
/* $(document).ready(function(){if(!$.jqplot._noCodeBlock){$("script.code").each(function(a){if($("pre.code").eq(a).length)$("pre.code").eq(a).text($(this).html());else{var b=$('<pre class="code prettyprint brush: js"></pre>');$("div.jqplot-target").eq(a).after(b),b.text($(this).html()),b=null}}),$("script.common").each(function(a){$("pre.common").eq(a).text($(this).html())});var a="";if($("script.include, link.include").length>0){if(0==$("pre.include").length){var b=['<div class="code prettyprint include">','<p class="text">The charts on this page depend on the following files:</p>','<pre class="include prettyprint brush: html gutter: false"></pre>',"</div>"];b=$(b.join("\n")),$("div#example-content").append(b),b=null}$("script.include").each(function(b){""!==a&&(a+="\n"),a+='<script type="text/javascript" src="'+$(this).attr("src")+'"></script>'}),$("link.include").each(function(b){""!==a&&(a+="\n"),a+='<link rel="stylesheet" type="text/css" href="'+$(this).attr("href")+'" />'}),$("pre.include").text(a)}else $("pre.include").remove(),$("div.include").remove()}$.jqplot.use_excanvas||$("div.jqplot-target").each(function(){var a=$(document.createElement("div")),b=$(document.createElement("div")),c=$(document.createElement("div"));a.append(b),a.append(c),a.addClass("jqplot-image-container"),b.addClass("jqplot-image-container-header"),c.addClass("jqplot-image-container-content"),b.html("Right Click to Save Image As...");var d=$(document.createElement("a"));if(d.addClass("jqplot-image-container-close"),d.html("Close"),d.attr("href","#"),d.click(function(){$(this).parents("div.jqplot-image-container").hide(500)}),b.append(d),$(this).after(a),a.hide(),a=b=c=d=null,!$.jqplot._noToImageButton){var e=$(document.createElement("button"));e.text("View Plot Image"),e.addClass("jqplot-image-button"),e.bind("click",{chart:$(this)},function(a){var b=a.data.chart.jqplotToImageElem(),c=$(this).nextAll("div.jqplot-image-container").first();c.children("div.jqplot-image-container-content").empty(),c.children("div.jqplot-image-container-content").append(b),c.show(500),c=null}),$(this).after(e),e.after("<br />"),e=null}}),SyntaxHighlighter.defaults.toolbar=!0,SyntaxHighlighter.all(),$(document).unload(function(){$("*").unbind()})});*/
