<?php

/* @css/jquery.jqplot/examples/examples.css */
class __TwigTemplate_c707cdd0abb27b6c8b992e39fdc858dc356ed91c0ea7c113b36d8fc5ecf5dfdd extends Twig_Template
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
        echo "body {
    margin: 0;
    padding: 0;
    border: 0;
    width: 100%;
    background: #fff;
    min-width: 600px;
    font-family:\"Trebuchet MS\", Arial, Helvetica, sans-serif;
}

/* Header styles */
#header {
    clear: both;
    float: left;
    width: 100%;
    position: relative;
    height: 94px;
    top: 0px;
    padding: 0px;
    background-image: url('./images/logo.jpg');
    background-repeat: no-repeat;
    background-color: #292929;
}

/* 'widths' sub menu */
#layoutdims {
  clear: both;
  background: #eee;
  border-top: 4px solid #000;
  margin: 0;
  padding: 6px 15px !important;
  text-align: right;
}

/* column container */
.colmask {
    position: relative;  /* This fixes the IE7 overflow hidden bug */
    clear: both;
    float: left;
    width: 100%;     /* width of whole page */
    overflow: hidden;    /* This chops off any overhanging divs */
}
/* common column settings */
.colright,
.colmid,
.colleft {
    float: left;
    width: 100%;
    position: relative;
}
.col1,
.col2,
.col3 {
    float: left;
    position: relative;
    padding: 0 0 1em 0;
    overflow: hidden;
}
/* 2 Column (left menu) settings */
.leftmenu {
    background: #ffffff;    /* right column background colour */
}
.leftmenu .colleft {
    right: 75%;      /* right column width */
    background: #717171; /* left column background colour */
}
.leftmenu .col1 {
    width: 71%;      /* right column content width */
    left: 102%;      /* 100% plus left column left padding */
    margin-top: 20px;
}
.leftmenu .col2 {
    width: 21%;      /* left column content width (column width minus left and right padding) */
    left: 6%;      /* (right column left and right padding) plus (left column left padding) */
    margin-top: 20px;
}

/* Footer styles */
#footer {
    clear: both;
    float: left;
    width: 100%;
    border-top: 1px solid #000;
}
#footer p {
    padding: 10px;
    margin: 0;
}


div.nav {
    position:relative;
    top: 70px;
    text-align: right;
}

a.nav span {
    font-size: 11px;
    position: relative;
    bottom: 2px;
}

a.nav:visited {
    text-decoration: none;
    border: 0px;
    color: #aaaaaa;
}

a.nav, a.nav:link {
    border: 0px;
    text-decoration: none;
    font-family: Tahoma, \"Helvetica Neue\", \"Trebuchet MS\", Verdana, Arial, sans-serif;
    font-size: 16px;
    color: #aaaaaa; 
    margin-right: 11px;
}

a.nav:hover {
    text-decoration: none;
    border: 0px;
    color: #E0771C;
}

a.nav:active {
    text-decoration: none;
    border: 0px;
    color: #E0771C;
}

pre.code-block{
    background: #D8F4DC;
    border: 1px solid rgb(200, 200, 200);
    padding-top: 1em;
    padding-left: 3em;
    padding-bottom: 1em;
    margin-top: 1em;
    margin-bottom: 3em;
    
}
    
pre.code {
    border: 1px solid rgb(200, 200, 200);
    padding-top: 1em;
    padding-left: 3em;
    padding-bottom: 1em;
    margin-top: 1em;
    margin-bottom: 4em;
    
}

div.include {
    margin-bottom: 2em;
}
    
p {
    margin: 2em 0;
}

.jqplot-image-button {
    margin-bottom: 15px;
    margin-top: 15px;
}

div.jqplot-image-container {
    position: relative;
    z-index: 11;
    margin: auto;
    display: none;
    background-color: #ffffff;
    border: 1px solid #999;
    display: inline-block;
    margin-top: 25px;
}

div.jqplot-image-container-header {
    font-size: 1.0em;
    font-weight: bold;
    padding: 5px 15px;
    background-color: #eee;
}

div.jqplot-image-container-content {
    padding: 15px;
    background-color: #ffffff;
}

a.jqplot-image-container-close {
    float: right;
}

div.example-link {
    margin-bottom: 8px;
}

a.example-link {
    color: #ffffff;
}

div.example-plot {
    width: 500px;
    height: 300px;
}

.jqplot-table-legend-label {
    white-space: nowrap;
}

div.syntaxhighlighter {
    margin-top: 4em !important;
    margin-bottom: 3em !important;
}";
    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/examples/examples.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* body {*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     border: 0;*/
/*     width: 100%;*/
/*     background: #fff;*/
/*     min-width: 600px;*/
/*     font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;*/
/* }*/
/* */
/* /* Header styles *//* */
/* #header {*/
/*     clear: both;*/
/*     float: left;*/
/*     width: 100%;*/
/*     position: relative;*/
/*     height: 94px;*/
/*     top: 0px;*/
/*     padding: 0px;*/
/*     background-image: url('./images/logo.jpg');*/
/*     background-repeat: no-repeat;*/
/*     background-color: #292929;*/
/* }*/
/* */
/* /* 'widths' sub menu *//* */
/* #layoutdims {*/
/*   clear: both;*/
/*   background: #eee;*/
/*   border-top: 4px solid #000;*/
/*   margin: 0;*/
/*   padding: 6px 15px !important;*/
/*   text-align: right;*/
/* }*/
/* */
/* /* column container *//* */
/* .colmask {*/
/*     position: relative;  /* This fixes the IE7 overflow hidden bug *//* */
/*     clear: both;*/
/*     float: left;*/
/*     width: 100%;     /* width of whole page *//* */
/*     overflow: hidden;    /* This chops off any overhanging divs *//* */
/* }*/
/* /* common column settings *//* */
/* .colright,*/
/* .colmid,*/
/* .colleft {*/
/*     float: left;*/
/*     width: 100%;*/
/*     position: relative;*/
/* }*/
/* .col1,*/
/* .col2,*/
/* .col3 {*/
/*     float: left;*/
/*     position: relative;*/
/*     padding: 0 0 1em 0;*/
/*     overflow: hidden;*/
/* }*/
/* /* 2 Column (left menu) settings *//* */
/* .leftmenu {*/
/*     background: #ffffff;    /* right column background colour *//* */
/* }*/
/* .leftmenu .colleft {*/
/*     right: 75%;      /* right column width *//* */
/*     background: #717171; /* left column background colour *//* */
/* }*/
/* .leftmenu .col1 {*/
/*     width: 71%;      /* right column content width *//* */
/*     left: 102%;      /* 100% plus left column left padding *//* */
/*     margin-top: 20px;*/
/* }*/
/* .leftmenu .col2 {*/
/*     width: 21%;      /* left column content width (column width minus left and right padding) *//* */
/*     left: 6%;      /* (right column left and right padding) plus (left column left padding) *//* */
/*     margin-top: 20px;*/
/* }*/
/* */
/* /* Footer styles *//* */
/* #footer {*/
/*     clear: both;*/
/*     float: left;*/
/*     width: 100%;*/
/*     border-top: 1px solid #000;*/
/* }*/
/* #footer p {*/
/*     padding: 10px;*/
/*     margin: 0;*/
/* }*/
/* */
/* */
/* div.nav {*/
/*     position:relative;*/
/*     top: 70px;*/
/*     text-align: right;*/
/* }*/
/* */
/* a.nav span {*/
/*     font-size: 11px;*/
/*     position: relative;*/
/*     bottom: 2px;*/
/* }*/
/* */
/* a.nav:visited {*/
/*     text-decoration: none;*/
/*     border: 0px;*/
/*     color: #aaaaaa;*/
/* }*/
/* */
/* a.nav, a.nav:link {*/
/*     border: 0px;*/
/*     text-decoration: none;*/
/*     font-family: Tahoma, "Helvetica Neue", "Trebuchet MS", Verdana, Arial, sans-serif;*/
/*     font-size: 16px;*/
/*     color: #aaaaaa; */
/*     margin-right: 11px;*/
/* }*/
/* */
/* a.nav:hover {*/
/*     text-decoration: none;*/
/*     border: 0px;*/
/*     color: #E0771C;*/
/* }*/
/* */
/* a.nav:active {*/
/*     text-decoration: none;*/
/*     border: 0px;*/
/*     color: #E0771C;*/
/* }*/
/* */
/* pre.code-block{*/
/*     background: #D8F4DC;*/
/*     border: 1px solid rgb(200, 200, 200);*/
/*     padding-top: 1em;*/
/*     padding-left: 3em;*/
/*     padding-bottom: 1em;*/
/*     margin-top: 1em;*/
/*     margin-bottom: 3em;*/
/*     */
/* }*/
/*     */
/* pre.code {*/
/*     border: 1px solid rgb(200, 200, 200);*/
/*     padding-top: 1em;*/
/*     padding-left: 3em;*/
/*     padding-bottom: 1em;*/
/*     margin-top: 1em;*/
/*     margin-bottom: 4em;*/
/*     */
/* }*/
/* */
/* div.include {*/
/*     margin-bottom: 2em;*/
/* }*/
/*     */
/* p {*/
/*     margin: 2em 0;*/
/* }*/
/* */
/* .jqplot-image-button {*/
/*     margin-bottom: 15px;*/
/*     margin-top: 15px;*/
/* }*/
/* */
/* div.jqplot-image-container {*/
/*     position: relative;*/
/*     z-index: 11;*/
/*     margin: auto;*/
/*     display: none;*/
/*     background-color: #ffffff;*/
/*     border: 1px solid #999;*/
/*     display: inline-block;*/
/*     margin-top: 25px;*/
/* }*/
/* */
/* div.jqplot-image-container-header {*/
/*     font-size: 1.0em;*/
/*     font-weight: bold;*/
/*     padding: 5px 15px;*/
/*     background-color: #eee;*/
/* }*/
/* */
/* div.jqplot-image-container-content {*/
/*     padding: 15px;*/
/*     background-color: #ffffff;*/
/* }*/
/* */
/* a.jqplot-image-container-close {*/
/*     float: right;*/
/* }*/
/* */
/* div.example-link {*/
/*     margin-bottom: 8px;*/
/* }*/
/* */
/* a.example-link {*/
/*     color: #ffffff;*/
/* }*/
/* */
/* div.example-plot {*/
/*     width: 500px;*/
/*     height: 300px;*/
/* }*/
/* */
/* .jqplot-table-legend-label {*/
/*     white-space: nowrap;*/
/* }*/
/* */
/* div.syntaxhighlighter {*/
/*     margin-top: 4em !important;*/
/*     margin-bottom: 3em !important;*/
/* }*/
