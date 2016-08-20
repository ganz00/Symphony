<?php

/* @css/css/test/liscroll.css */
class __TwigTemplate_3a0ea74feda66a1b1d8dae98403695c1c40e156cb3f037cb519418c569fa8ff4 extends Twig_Template
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
        echo "/* 
    Created on : 14 août 2016, 13:59:02
*/
.tickercontainer { /* the outer div with the black border */

background: #fff; 
width: 738px; 
height: 27px; 
margin: 0; 
padding: 0;
overflow: hidden; 
}
.tickercontainer .mask { /* that serves as a mask. so you get a sort of padding both left and right */
position: relative;
top: 3px;
width: 718px;
overflow: hidden;
}
ul.newsticker { /* that's your list */
position: relative;
left: 750px;
font: bold 10px Verdana;
list-style-type: none;
margin: 0;
padding: 0;

}
ul.newsticker li {
float: left; /* important: display inline gives incorrect results when you check for elem's width */
margin: 0;
padding: 0;
background: #fff;
}
ul.newsticker a {
white-space: nowrap;
padding: 0;
color: #ff0000;
font: bold 10px Verdana;
margin: 0 50px 0 0;
} 
ul.newsticker span {
margin: 0 10px 0 0;
} 
";
    }

    public function getTemplateName()
    {
        return "@css/css/test/liscroll.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /* */
/*     Created on : 14 août 2016, 13:59:02*/
/* *//* */
/* .tickercontainer { /* the outer div with the black border *//* */
/* */
/* background: #fff; */
/* width: 738px; */
/* height: 27px; */
/* margin: 0; */
/* padding: 0;*/
/* overflow: hidden; */
/* }*/
/* .tickercontainer .mask { /* that serves as a mask. so you get a sort of padding both left and right *//* */
/* position: relative;*/
/* top: 3px;*/
/* width: 718px;*/
/* overflow: hidden;*/
/* }*/
/* ul.newsticker { /* that's your list *//* */
/* position: relative;*/
/* left: 750px;*/
/* font: bold 10px Verdana;*/
/* list-style-type: none;*/
/* margin: 0;*/
/* padding: 0;*/
/* */
/* }*/
/* ul.newsticker li {*/
/* float: left; /* important: display inline gives incorrect results when you check for elem's width *//* */
/* margin: 0;*/
/* padding: 0;*/
/* background: #fff;*/
/* }*/
/* ul.newsticker a {*/
/* white-space: nowrap;*/
/* padding: 0;*/
/* color: #ff0000;*/
/* font: bold 10px Verdana;*/
/* margin: 0 50px 0 0;*/
/* } */
/* ul.newsticker span {*/
/* margin: 0 10px 0 0;*/
/* } */
/* */
