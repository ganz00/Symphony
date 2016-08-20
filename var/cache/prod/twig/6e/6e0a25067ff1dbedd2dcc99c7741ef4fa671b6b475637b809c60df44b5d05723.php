<?php

/* @css/Script/morrisjs/lib/morris.coffee */
class __TwigTemplate_f84020554d37ab5149a5389d9eb9ce4b633b054dac7feac340a9ac2417dd8b6c extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/lib/morris.coffee";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
