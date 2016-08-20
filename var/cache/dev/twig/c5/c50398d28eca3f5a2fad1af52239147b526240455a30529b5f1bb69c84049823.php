<?php

/* @css/jquery.jqplot/examples/example.js */
class __TwigTemplate_7d216a5b081344a59b65d81dbace8fff1d30b76a3292f0ee8b2e00d500b629c2 extends Twig_Template
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
        $__internal_229dce0c9414ab6503559f079e525f5fc4629b168d6c641acdf0a6588b8cb6dd = $this->env->getExtension("native_profiler");
        $__internal_229dce0c9414ab6503559f079e525f5fc4629b168d6c641acdf0a6588b8cb6dd->enter($__internal_229dce0c9414ab6503559f079e525f5fc4629b168d6c641acdf0a6588b8cb6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/examples/example.js"));

        // line 1
        echo "\$(document).ready(function(){
    if (!\$.jqplot._noCodeBlock) {
        \$('script.code').each(function(index) {
            if (\$('pre.code').eq(index).length  ) {
                \$('pre.code').eq(index).text(\$(this).html());
            }
            else {
                // var str = \$(this).text();
                // \$('div.jqplot-target').eq(index).after(\$('<pre class=\"code\">'+str+'</pre>'));
                var pre = \$('<pre class=\"code prettyprint brush: js\"></pre>');
                \$('div.jqplot-target').eq(index).after(pre);
                pre.text(\$(this).html());
                pre = null;
            }
        });

        \$('script.common').each(function(index) {
            \$('pre.common').eq(index).text(\$(this).html());
        });

        var elstr='';
        if (\$('script.include, link.include').length > 0) {

            if (\$('pre.include').length == 0) {
                var temp = [
                    '<div class=\"code prettyprint include\">',
                    '<p class=\"text\">The charts on this page depend on the following files:</p>',
                    '<pre class=\"include prettyprint brush: html gutter: false\"></pre>',
                    '</div>'
                ];

                temp = \$(temp.join('\\n'));
                \$('div#example-content').append(temp);
                temp = null;
            }


            \$('script.include').each(function(index) {
                if (elstr !== '') {
                    elstr += '\\n';
                }
                elstr += '<script type=\"text/javascript\" src=\"'+\$(this).attr('src')+'\"></script>';
            });

            \$('link.include').each(function(index) {
                if (elstr !== '') {
                    elstr += '\\n';
                }
                elstr += '<link rel=\"stylesheet\" type=\"text/css\" href=\"'+\$(this).attr('href')+'\" />';
            })

            \$('pre.include').text(elstr);
        }

        else {
            \$('pre.include').remove();
            \$('div.include').remove();
        }
    }

    if (!\$.jqplot.use_excanvas) {
        \$('div.jqplot-target').each(function(){
            var outerDiv = \$(document.createElement('div'));
            var header = \$(document.createElement('div'));
            var div = \$(document.createElement('div'));

            outerDiv.append(header);
            outerDiv.append(div);

            outerDiv.addClass('jqplot-image-container');
            header.addClass('jqplot-image-container-header');
            div.addClass('jqplot-image-container-content');

            header.html('Right Click to Save Image As...');

            var close = \$(document.createElement('a'));
            close.addClass('jqplot-image-container-close');
            close.html('Close');
            close.attr('href', '#');
            close.click(function() {
                \$(this).parents('div.jqplot-image-container').hide(500);
            })
            header.append(close);

            \$(this).after(outerDiv);
            outerDiv.hide();

            outerDiv = header = div = close = null;

            if (!\$.jqplot._noToImageButton) {
                var btn = \$(document.createElement('button'));
                btn.text('View Plot Image');
                btn.addClass('jqplot-image-button');
                btn.bind('click', {chart: \$(this)}, function(evt) {
                    var imgelem = evt.data.chart.jqplotToImageElem();
                    var div = \$(this).nextAll('div.jqplot-image-container').first();
                    div.children('div.jqplot-image-container-content').empty();
                    div.children('div.jqplot-image-container-content').append(imgelem);
                    div.show(500);
                    div = null;
                });

                \$(this).after(btn);
                btn.after('<br />');
                btn = null;
            }
        });
    }

    SyntaxHighlighter.defaults['toolbar'] = true;
    SyntaxHighlighter.all();

    \$(document).unload(function() {\$('*').unbind(); });
});";
        
        $__internal_229dce0c9414ab6503559f079e525f5fc4629b168d6c641acdf0a6588b8cb6dd->leave($__internal_229dce0c9414ab6503559f079e525f5fc4629b168d6c641acdf0a6588b8cb6dd_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/example.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* $(document).ready(function(){*/
/*     if (!$.jqplot._noCodeBlock) {*/
/*         $('script.code').each(function(index) {*/
/*             if ($('pre.code').eq(index).length  ) {*/
/*                 $('pre.code').eq(index).text($(this).html());*/
/*             }*/
/*             else {*/
/*                 // var str = $(this).text();*/
/*                 // $('div.jqplot-target').eq(index).after($('<pre class="code">'+str+'</pre>'));*/
/*                 var pre = $('<pre class="code prettyprint brush: js"></pre>');*/
/*                 $('div.jqplot-target').eq(index).after(pre);*/
/*                 pre.text($(this).html());*/
/*                 pre = null;*/
/*             }*/
/*         });*/
/* */
/*         $('script.common').each(function(index) {*/
/*             $('pre.common').eq(index).text($(this).html());*/
/*         });*/
/* */
/*         var elstr='';*/
/*         if ($('script.include, link.include').length > 0) {*/
/* */
/*             if ($('pre.include').length == 0) {*/
/*                 var temp = [*/
/*                     '<div class="code prettyprint include">',*/
/*                     '<p class="text">The charts on this page depend on the following files:</p>',*/
/*                     '<pre class="include prettyprint brush: html gutter: false"></pre>',*/
/*                     '</div>'*/
/*                 ];*/
/* */
/*                 temp = $(temp.join('\n'));*/
/*                 $('div#example-content').append(temp);*/
/*                 temp = null;*/
/*             }*/
/* */
/* */
/*             $('script.include').each(function(index) {*/
/*                 if (elstr !== '') {*/
/*                     elstr += '\n';*/
/*                 }*/
/*                 elstr += '<script type="text/javascript" src="'+$(this).attr('src')+'"></script>';*/
/*             });*/
/* */
/*             $('link.include').each(function(index) {*/
/*                 if (elstr !== '') {*/
/*                     elstr += '\n';*/
/*                 }*/
/*                 elstr += '<link rel="stylesheet" type="text/css" href="'+$(this).attr('href')+'" />';*/
/*             })*/
/* */
/*             $('pre.include').text(elstr);*/
/*         }*/
/* */
/*         else {*/
/*             $('pre.include').remove();*/
/*             $('div.include').remove();*/
/*         }*/
/*     }*/
/* */
/*     if (!$.jqplot.use_excanvas) {*/
/*         $('div.jqplot-target').each(function(){*/
/*             var outerDiv = $(document.createElement('div'));*/
/*             var header = $(document.createElement('div'));*/
/*             var div = $(document.createElement('div'));*/
/* */
/*             outerDiv.append(header);*/
/*             outerDiv.append(div);*/
/* */
/*             outerDiv.addClass('jqplot-image-container');*/
/*             header.addClass('jqplot-image-container-header');*/
/*             div.addClass('jqplot-image-container-content');*/
/* */
/*             header.html('Right Click to Save Image As...');*/
/* */
/*             var close = $(document.createElement('a'));*/
/*             close.addClass('jqplot-image-container-close');*/
/*             close.html('Close');*/
/*             close.attr('href', '#');*/
/*             close.click(function() {*/
/*                 $(this).parents('div.jqplot-image-container').hide(500);*/
/*             })*/
/*             header.append(close);*/
/* */
/*             $(this).after(outerDiv);*/
/*             outerDiv.hide();*/
/* */
/*             outerDiv = header = div = close = null;*/
/* */
/*             if (!$.jqplot._noToImageButton) {*/
/*                 var btn = $(document.createElement('button'));*/
/*                 btn.text('View Plot Image');*/
/*                 btn.addClass('jqplot-image-button');*/
/*                 btn.bind('click', {chart: $(this)}, function(evt) {*/
/*                     var imgelem = evt.data.chart.jqplotToImageElem();*/
/*                     var div = $(this).nextAll('div.jqplot-image-container').first();*/
/*                     div.children('div.jqplot-image-container-content').empty();*/
/*                     div.children('div.jqplot-image-container-content').append(imgelem);*/
/*                     div.show(500);*/
/*                     div = null;*/
/*                 });*/
/* */
/*                 $(this).after(btn);*/
/*                 btn.after('<br />');*/
/*                 btn = null;*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     SyntaxHighlighter.defaults['toolbar'] = true;*/
/*     SyntaxHighlighter.all();*/
/* */
/*     $(document).unload(function() {$('*').unbind(); });*/
/* });*/
