<?php

/* @css/Script/morrisjs/lib/morris.coffee */
class __TwigTemplate_1a43c2c22dd3d97dfc2d94087d665dc2fe7c941935319b8ebff284aa0230b0c2 extends Twig_Template
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
        $__internal_bd8eb4203fbdb516f7c83e0ae34c5b90dc371c7cf405623891def9e54af5cb9f = $this->env->getExtension("native_profiler");
        $__internal_bd8eb4203fbdb516f7c83e0ae34c5b90dc371c7cf405623891def9e54af5cb9f->enter($__internal_bd8eb4203fbdb516f7c83e0ae34c5b90dc371c7cf405623891def9e54af5cb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/lib/morris.coffee"));

        // line 1
        echo "Morris = window.Morris = {}

\$ = jQuery

# Very simple event-emitter class.
#
# @private
class Morris.EventEmitter
  on: (name, handler) ->
    unless @handlers?
      @handlers = {}
    unless @handlers[name]?
      @handlers[name] = []
    @handlers[name].push(handler)
    @

  fire: (name, args...) ->
    if @handlers? and @handlers[name]?
      for handler in @handlers[name]
        handler(args...)

# Make long numbers prettier by inserting commas.
#
# @example
#   Morris.commas(1234567) -> '1,234,567'
Morris.commas = (num) ->
  if num?
    ret = if num < 0 then \"-\" else \"\"
    absnum = Math.abs(num)
    intnum = Math.floor(absnum).toFixed(0)
    ret += intnum.replace(/(?=(?:\\d{3})+\$)(?!^)/g, ',')
    strabsnum = absnum.toString()
    if strabsnum.length > intnum.length
      ret += strabsnum.slice(intnum.length)
    ret
  else
    '-'

# Zero-pad numbers to two characters wide.
#
# @example
#   Morris.pad2(1) -> '01'
Morris.pad2 = (number) -> (if number < 10 then '0' else '') + number
";
        
        $__internal_bd8eb4203fbdb516f7c83e0ae34c5b90dc371c7cf405623891def9e54af5cb9f->leave($__internal_bd8eb4203fbdb516f7c83e0ae34c5b90dc371c7cf405623891def9e54af5cb9f_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/lib/morris.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Morris = window.Morris = {}*/
/* */
/* $ = jQuery*/
/* */
/* # Very simple event-emitter class.*/
/* #*/
/* # @private*/
/* class Morris.EventEmitter*/
/*   on: (name, handler) ->*/
/*     unless @handlers?*/
/*       @handlers = {}*/
/*     unless @handlers[name]?*/
/*       @handlers[name] = []*/
/*     @handlers[name].push(handler)*/
/*     @*/
/* */
/*   fire: (name, args...) ->*/
/*     if @handlers? and @handlers[name]?*/
/*       for handler in @handlers[name]*/
/*         handler(args...)*/
/* */
/* # Make long numbers prettier by inserting commas.*/
/* #*/
/* # @example*/
/* #   Morris.commas(1234567) -> '1,234,567'*/
/* Morris.commas = (num) ->*/
/*   if num?*/
/*     ret = if num < 0 then "-" else ""*/
/*     absnum = Math.abs(num)*/
/*     intnum = Math.floor(absnum).toFixed(0)*/
/*     ret += intnum.replace(/(?=(?:\d{3})+$)(?!^)/g, ',')*/
/*     strabsnum = absnum.toString()*/
/*     if strabsnum.length > intnum.length*/
/*       ret += strabsnum.slice(intnum.length)*/
/*     ret*/
/*   else*/
/*     '-'*/
/* */
/* # Zero-pad numbers to two characters wide.*/
/* #*/
/* # @example*/
/* #   Morris.pad2(1) -> '01'*/
/* Morris.pad2 = (number) -> (if number < 10 then '0' else '') + number*/
/* */
