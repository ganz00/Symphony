<?php

/* @css/jquery.jqplot/examples/kcp.print.js */
class __TwigTemplate_65f450d70a499ec4cd9b7e816b0126f9336a3a42bef09566c1d1ce4bf0c73ce9 extends Twig_Template
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
        $__internal_ed894e52b7b8de4b6ba2f15315a34067509fc78c5e02e4860b54156990596bf7 = $this->env->getExtension("native_profiler");
        $__internal_ed894e52b7b8de4b6ba2f15315a34067509fc78c5e02e4860b54156990596bf7->enter($__internal_ed894e52b7b8de4b6ba2f15315a34067509fc78c5e02e4860b54156990596bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/kcp.print.js"));

        // line 1
        echo "// <--- --------------------------------------------------------------------------------------- ----
\t
// \tBlog Entry:
// \tAsk Ben: Print Part Of A Web Page With jQuery
\t
// \tAuthor:
// \tBen Nadel / Kinky Solutions
\t
// \tLink:
// \thttp://www.bennadel.com/index.cfm?event=blog.view&id=1591
\t
// \tDate Posted:
// \tMay 21, 2009 at 9:10 PM
\t
// ---- --------------------------------------------------------------------------------------- --->


// Create a jquery plugin that prints the given element.
jQuery.fn.print = function(){
\t// NOTE: We are trimming the jQuery collection down to the
\t// first element in the collection.
\tif (this.size() > 1){
\t\tthis.eq( 0 ).print();
\t\treturn;
\t} else if (!this.size()){
\t\treturn;
\t}

    var chart = \$(this).closest('div.quintile-outer-container').find('div.jqplot-target');
    // var imgelem = chart.jqplotToImageElem();
    var imageElemStr = chart.jqplotToImageElemStr();
    // var statsrows = \$(this).closest('div.quintile-outer-container').find('table.stats-table tr');
    var statsTable = \$('<div></div>').append(\$(this).closest('div.quintile-outer-container').find('table.stats-table').clone());
    // var rowstyles = window.getComputedStyle(statsrows.get(0), '');
 
\t// ASSERT: At this point, we know that the current jQuery
\t// collection (as defined by THIS), contains only one
\t// printable element.
 
\t// Create a random name for the print frame.
\tvar strFrameName = (\"printer-\" + (new Date()).getTime());
 
\t// Create an iFrame with the new name.
\tvar jFrame = \$( \"<iframe name='\" + strFrameName + \"'>\" );
 
\t// Hide the frame (sort of) and attach to the body.
\tjFrame
\t\t.css( \"width\", \"1px\" )
\t\t.css( \"height\", \"1px\" )
\t\t.css( \"position\", \"absolute\" )
\t\t.css( \"left\", \"-9999px\" )
\t\t.appendTo( \$( \"body:first\" ) )
\t;
 
\t// Get a FRAMES reference to the new frame.
\tvar objFrame = window.frames[ strFrameName ];
 
\t// Get a reference to the DOM in the new frame.
\tvar objDoc = objFrame.document;
 
\t// Grab all the style tags and copy to the new
\t// document so that we capture look and feel of
\t// the current document.
 
\t// Create a temp document DIV to hold the style tags.
\t// This is the only way I could find to get the style
\t// tags into IE.
\tvar jStyleDiv = \$( \"<div>\" ).append(
\t\t\$( \"style\" ).clone()
\t\t);
 
\t// Write the HTML for the document. In this, we will
\t// write out the HTML of the current element.
\tobjDoc.open();
\tobjDoc.write( \"<!DOCTYPE html PUBLIC \\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\" \\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\">\" );
\tobjDoc.write( \"<html>\" );
\tobjDoc.write( \"<body>\" );
\tobjDoc.write( \"<head>\" );
\tobjDoc.write( \"<title>\" );
\tobjDoc.write( document.title );
\tobjDoc.write( \"</title>\" );
\tobjDoc.write( jStyleDiv.html() );
\tobjDoc.write( \"</head>\" );

\t// Typically, would just write out the html.\t
\t// objDoc.write( this.html() );

\t// We need to do specific manipulation for kcp quintiles.
\tobjDoc.write( '<div class=\"quintile-outer-container ui-widget ui-corner-all\"> \\
    <div class=\"quintile-content ui-widget-content ui-corner-bottom\"> \\
\t\t<table class=\"quintile-display\"> \\
            <tr> \\
                <td class=\"chart-cell\">');

    objDoc.write(imageElemStr);
    
    objDoc.write('</td> <td class=\"stats-cell\">');

    objDoc.write(statsTable.html());

    objDoc.write('</td></tr></table></div></div>');

\tobjDoc.write( \"</body>\" );
\tobjDoc.write( \"</html>\" );
\tobjDoc.close();
 
 \t// 
\t// When the iframe is completely loaded, print it.
\t// This seemed worked in IE 9, but caused problems in FF.
\t//
\t// \$(objFrame).load(function() {
\t// \tobjFrame.focus();
\t// \tobjFrame.print();
\t// });

\t//
\t// This works in all supported browsers.
\t// Note, might have to adjust time.
\t//
\tsetTimeout(
\t\tfunction() {
\t\t\tobjFrame.focus();
\t\t\tobjFrame.print();
\t\t}, 750);
 

\t// Have the frame remove itself in about a minute so that
\t// we don't build up too many of these frames.
\tsetTimeout(
\t\tfunction(){
\t\t\tjFrame.empty();
\t\t\tjFrame.remove();
\t\t},
\t\t(60 * 1000)
\t\t);
}";
        
        $__internal_ed894e52b7b8de4b6ba2f15315a34067509fc78c5e02e4860b54156990596bf7->leave($__internal_ed894e52b7b8de4b6ba2f15315a34067509fc78c5e02e4860b54156990596bf7_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/kcp.print.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* // <--- --------------------------------------------------------------------------------------- ----*/
/* 	*/
/* // 	Blog Entry:*/
/* // 	Ask Ben: Print Part Of A Web Page With jQuery*/
/* 	*/
/* // 	Author:*/
/* // 	Ben Nadel / Kinky Solutions*/
/* 	*/
/* // 	Link:*/
/* // 	http://www.bennadel.com/index.cfm?event=blog.view&id=1591*/
/* 	*/
/* // 	Date Posted:*/
/* // 	May 21, 2009 at 9:10 PM*/
/* 	*/
/* // ---- --------------------------------------------------------------------------------------- --->*/
/* */
/* */
/* // Create a jquery plugin that prints the given element.*/
/* jQuery.fn.print = function(){*/
/* 	// NOTE: We are trimming the jQuery collection down to the*/
/* 	// first element in the collection.*/
/* 	if (this.size() > 1){*/
/* 		this.eq( 0 ).print();*/
/* 		return;*/
/* 	} else if (!this.size()){*/
/* 		return;*/
/* 	}*/
/* */
/*     var chart = $(this).closest('div.quintile-outer-container').find('div.jqplot-target');*/
/*     // var imgelem = chart.jqplotToImageElem();*/
/*     var imageElemStr = chart.jqplotToImageElemStr();*/
/*     // var statsrows = $(this).closest('div.quintile-outer-container').find('table.stats-table tr');*/
/*     var statsTable = $('<div></div>').append($(this).closest('div.quintile-outer-container').find('table.stats-table').clone());*/
/*     // var rowstyles = window.getComputedStyle(statsrows.get(0), '');*/
/*  */
/* 	// ASSERT: At this point, we know that the current jQuery*/
/* 	// collection (as defined by THIS), contains only one*/
/* 	// printable element.*/
/*  */
/* 	// Create a random name for the print frame.*/
/* 	var strFrameName = ("printer-" + (new Date()).getTime());*/
/*  */
/* 	// Create an iFrame with the new name.*/
/* 	var jFrame = $( "<iframe name='" + strFrameName + "'>" );*/
/*  */
/* 	// Hide the frame (sort of) and attach to the body.*/
/* 	jFrame*/
/* 		.css( "width", "1px" )*/
/* 		.css( "height", "1px" )*/
/* 		.css( "position", "absolute" )*/
/* 		.css( "left", "-9999px" )*/
/* 		.appendTo( $( "body:first" ) )*/
/* 	;*/
/*  */
/* 	// Get a FRAMES reference to the new frame.*/
/* 	var objFrame = window.frames[ strFrameName ];*/
/*  */
/* 	// Get a reference to the DOM in the new frame.*/
/* 	var objDoc = objFrame.document;*/
/*  */
/* 	// Grab all the style tags and copy to the new*/
/* 	// document so that we capture look and feel of*/
/* 	// the current document.*/
/*  */
/* 	// Create a temp document DIV to hold the style tags.*/
/* 	// This is the only way I could find to get the style*/
/* 	// tags into IE.*/
/* 	var jStyleDiv = $( "<div>" ).append(*/
/* 		$( "style" ).clone()*/
/* 		);*/
/*  */
/* 	// Write the HTML for the document. In this, we will*/
/* 	// write out the HTML of the current element.*/
/* 	objDoc.open();*/
/* 	objDoc.write( "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">" );*/
/* 	objDoc.write( "<html>" );*/
/* 	objDoc.write( "<body>" );*/
/* 	objDoc.write( "<head>" );*/
/* 	objDoc.write( "<title>" );*/
/* 	objDoc.write( document.title );*/
/* 	objDoc.write( "</title>" );*/
/* 	objDoc.write( jStyleDiv.html() );*/
/* 	objDoc.write( "</head>" );*/
/* */
/* 	// Typically, would just write out the html.	*/
/* 	// objDoc.write( this.html() );*/
/* */
/* 	// We need to do specific manipulation for kcp quintiles.*/
/* 	objDoc.write( '<div class="quintile-outer-container ui-widget ui-corner-all"> \*/
/*     <div class="quintile-content ui-widget-content ui-corner-bottom"> \*/
/* 		<table class="quintile-display"> \*/
/*             <tr> \*/
/*                 <td class="chart-cell">');*/
/* */
/*     objDoc.write(imageElemStr);*/
/*     */
/*     objDoc.write('</td> <td class="stats-cell">');*/
/* */
/*     objDoc.write(statsTable.html());*/
/* */
/*     objDoc.write('</td></tr></table></div></div>');*/
/* */
/* 	objDoc.write( "</body>" );*/
/* 	objDoc.write( "</html>" );*/
/* 	objDoc.close();*/
/*  */
/*  	// */
/* 	// When the iframe is completely loaded, print it.*/
/* 	// This seemed worked in IE 9, but caused problems in FF.*/
/* 	//*/
/* 	// $(objFrame).load(function() {*/
/* 	// 	objFrame.focus();*/
/* 	// 	objFrame.print();*/
/* 	// });*/
/* */
/* 	//*/
/* 	// This works in all supported browsers.*/
/* 	// Note, might have to adjust time.*/
/* 	//*/
/* 	setTimeout(*/
/* 		function() {*/
/* 			objFrame.focus();*/
/* 			objFrame.print();*/
/* 		}, 750);*/
/*  */
/* */
/* 	// Have the frame remove itself in about a minute so that*/
/* 	// we don't build up too many of these frames.*/
/* 	setTimeout(*/
/* 		function(){*/
/* 			jFrame.empty();*/
/* 			jFrame.remove();*/
/* 		},*/
/* 		(60 * 1000)*/
/* 		);*/
/* }*/
