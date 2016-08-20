<?php

/* @css/Script/morrisjs/lib/morris.hover.coffee */
class __TwigTemplate_d604d5dcfe31f0317ebe6707b09e44a8f9f957da8d1acadebf5b3ff79a45622f extends Twig_Template
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
        $__internal_1ef8d2f1c1f58691e5cf782e59e1addda5d21c5d976c60b8ec88212788508c9e = $this->env->getExtension("native_profiler");
        $__internal_1ef8d2f1c1f58691e5cf782e59e1addda5d21c5d976c60b8ec88212788508c9e->enter($__internal_1ef8d2f1c1f58691e5cf782e59e1addda5d21c5d976c60b8ec88212788508c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/lib/morris.hover.coffee"));

        // line 1
        echo "class Morris.Hover
  # Displays contextual information in a floating HTML div.

  @defaults:
    class: 'morris-hover morris-default-style'

  constructor: (options = {}) ->
    @options = \$.extend {}, Morris.Hover.defaults, options
    @el = \$ \"<div class='#{@options.class}'></div>\"
    @el.hide()
    @options.parent.append(@el)

  update: (html, x, y) ->
    if not html
      @hide()
    else
      @html(html)
      @show()
      @moveTo(x, y)

  html: (content) ->
    @el.html(content)

  moveTo: (x, y) ->
    parentWidth  = @options.parent.innerWidth()
    parentHeight = @options.parent.innerHeight()
    hoverWidth   = @el.outerWidth()
    hoverHeight  = @el.outerHeight()
    left = Math.min(Math.max(0, x - hoverWidth / 2), parentWidth - hoverWidth)
    if y?
      top = y - hoverHeight - 10
      if top < 0
        top = y + 10
        if top + hoverHeight > parentHeight
          top = parentHeight / 2 - hoverHeight / 2
    else
      top = parentHeight / 2 - hoverHeight / 2
    @el.css(left: left + \"px\", top: parseInt(top) + \"px\")

  show: ->
    @el.show()

  hide: ->
    @el.hide()
";
        
        $__internal_1ef8d2f1c1f58691e5cf782e59e1addda5d21c5d976c60b8ec88212788508c9e->leave($__internal_1ef8d2f1c1f58691e5cf782e59e1addda5d21c5d976c60b8ec88212788508c9e_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/lib/morris.hover.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* class Morris.Hover*/
/*   # Displays contextual information in a floating HTML div.*/
/* */
/*   @defaults:*/
/*     class: 'morris-hover morris-default-style'*/
/* */
/*   constructor: (options = {}) ->*/
/*     @options = $.extend {}, Morris.Hover.defaults, options*/
/*     @el = $ "<div class='#{@options.class}'></div>"*/
/*     @el.hide()*/
/*     @options.parent.append(@el)*/
/* */
/*   update: (html, x, y) ->*/
/*     if not html*/
/*       @hide()*/
/*     else*/
/*       @html(html)*/
/*       @show()*/
/*       @moveTo(x, y)*/
/* */
/*   html: (content) ->*/
/*     @el.html(content)*/
/* */
/*   moveTo: (x, y) ->*/
/*     parentWidth  = @options.parent.innerWidth()*/
/*     parentHeight = @options.parent.innerHeight()*/
/*     hoverWidth   = @el.outerWidth()*/
/*     hoverHeight  = @el.outerHeight()*/
/*     left = Math.min(Math.max(0, x - hoverWidth / 2), parentWidth - hoverWidth)*/
/*     if y?*/
/*       top = y - hoverHeight - 10*/
/*       if top < 0*/
/*         top = y + 10*/
/*         if top + hoverHeight > parentHeight*/
/*           top = parentHeight / 2 - hoverHeight / 2*/
/*     else*/
/*       top = parentHeight / 2 - hoverHeight / 2*/
/*     @el.css(left: left + "px", top: parseInt(top) + "px")*/
/* */
/*   show: ->*/
/*     @el.show()*/
/* */
/*   hide: ->*/
/*     @el.hide()*/
/* */
