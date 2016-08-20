<?php

/* @css/css/response/connection.css */
class __TwigTemplate_8e0b3912101ed57ee698f058080f6f0a52a2bd11a0db7be4e2572d9a56b1f41a extends Twig_Template
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
    Created on : 9 juil. 2016, 12:02:43
    Author     : landryk
*/

body{
\tmargin:0;
\tcolor:#6a6f8c;
\tbackground:#c8c8c8;
\tfont:600 16px/18px 'Open Sans',sans-serif;
        background-image: url('../images/bgn.png');
        background-position: center;
        background-repeat: no-repeat;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
\twidth:100%;
\tmargin:auto;
\tmax-width:525px;
\tmin-height:900px;
\tposition:relative;
\tbackground:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
\tbox-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
\twidth:100%;
\theight:100%;
\tposition:absolute;
\tpadding:50px 70px 50px 70px;
\tbackground:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
\ttop:0;
\tleft:0;
\tright:0;
\tbottom:0;
\tposition:absolute;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
\tdisplay:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
\ttext-transform:uppercase;
}
.login-html .tab{
\tfont-size:22px;
\tmargin-right:15px;
\tpadding-bottom:5px;
\tmargin:0 15px 10px 0;
\tdisplay:inline-block;
\tborder-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
\tcolor:#fff;
\tborder-color:#1161ee;
}
.login-form{
\tmin-height:345px;
\tposition:relative;
\tperspective:1000px;
\ttransform-style:preserve-3d;
}
.login-form .group{
\tmargin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
\twidth:100%;
\tcolor:#fff;
\tdisplay:block;
}
.login-form .group .input,
.login-form .group .button{
\tborder:none;
\tpadding:15px 20px;
\tborder-radius:25px;
\tbackground:rgba(255,255,255,.1);
}
.date > select
{
        border:none;
\tpadding:15px 20px;
        margin-right:12px; 
\tborder-radius:25px;
\tbackground:rgba(255,255,255,.1);
        width:30% !important; 
\tcolor:#fff;
}
.login-form .group input[data-type=\"password\"]{
\ttext-security:circle;
\t-webkit-text-security:circle;
}
.login-form .group .label{
\tcolor:#aaa;
\tfont-size:12px;
}
.login-form .group .button{
\tbackground:#1161ee;
}
.login-form .group label .icon{
\twidth:15px;
\theight:15px;
\tborder-radius:2px;
\tposition:relative;
\tdisplay:inline-block;
\tbackground:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
\tcontent:'';
\twidth:10px;
\theight:2px;
\tbackground:#fff;
\tposition:absolute;
\ttransition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
\tleft:3px;
\twidth:5px;
\tbottom:6px;
\ttransform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
\ttop:6px;
\tright:0;
\ttransform:scale(0) rotate(0);
}

.hr{
\theight:2px;
\tmargin:60px 0 50px 0;
\tbackground:rgba(255,255,255,.2);
}
.foot-lnk{
\ttext-align:center;
}
#lab{
   color: #aaa;
}";
    }

    public function getTemplateName()
    {
        return "@css/css/response/connection.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /* */
/*     Created on : 9 juil. 2016, 12:02:43*/
/*     Author     : landryk*/
/* *//* */
/* */
/* body{*/
/* 	margin:0;*/
/* 	color:#6a6f8c;*/
/* 	background:#c8c8c8;*/
/* 	font:600 16px/18px 'Open Sans',sans-serif;*/
/*         background-image: url('../images/bgn.png');*/
/*         background-position: center;*/
/*         background-repeat: no-repeat;*/
/* }*/
/* *,:after,:before{box-sizing:border-box}*/
/* .clearfix:after,.clearfix:before{content:'';display:table}*/
/* .clearfix:after{clear:both;display:block}*/
/* a{color:inherit;text-decoration:none}*/
/* */
/* .login-wrap{*/
/* 	width:100%;*/
/* 	margin:auto;*/
/* 	max-width:525px;*/
/* 	min-height:900px;*/
/* 	position:relative;*/
/* 	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;*/
/* 	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);*/
/* }*/
/* .login-html{*/
/* 	width:100%;*/
/* 	height:100%;*/
/* 	position:absolute;*/
/* 	padding:50px 70px 50px 70px;*/
/* 	background:rgba(40,57,101,.9);*/
/* }*/
/* .login-html .sign-in-htm,*/
/* .login-html .sign-up-htm{*/
/* 	top:0;*/
/* 	left:0;*/
/* 	right:0;*/
/* 	bottom:0;*/
/* 	position:absolute;*/
/* }*/
/* .login-html .sign-in,*/
/* .login-html .sign-up,*/
/* .login-form .group .check{*/
/* 	display:none;*/
/* }*/
/* .login-html .tab,*/
/* .login-form .group .label,*/
/* .login-form .group .button{*/
/* 	text-transform:uppercase;*/
/* }*/
/* .login-html .tab{*/
/* 	font-size:22px;*/
/* 	margin-right:15px;*/
/* 	padding-bottom:5px;*/
/* 	margin:0 15px 10px 0;*/
/* 	display:inline-block;*/
/* 	border-bottom:2px solid transparent;*/
/* }*/
/* .login-html .sign-in:checked + .tab,*/
/* .login-html .sign-up:checked + .tab{*/
/* 	color:#fff;*/
/* 	border-color:#1161ee;*/
/* }*/
/* .login-form{*/
/* 	min-height:345px;*/
/* 	position:relative;*/
/* 	perspective:1000px;*/
/* 	transform-style:preserve-3d;*/
/* }*/
/* .login-form .group{*/
/* 	margin-bottom:15px;*/
/* }*/
/* .login-form .group .label,*/
/* .login-form .group .input,*/
/* .login-form .group .button{*/
/* 	width:100%;*/
/* 	color:#fff;*/
/* 	display:block;*/
/* }*/
/* .login-form .group .input,*/
/* .login-form .group .button{*/
/* 	border:none;*/
/* 	padding:15px 20px;*/
/* 	border-radius:25px;*/
/* 	background:rgba(255,255,255,.1);*/
/* }*/
/* .date > select*/
/* {*/
/*         border:none;*/
/* 	padding:15px 20px;*/
/*         margin-right:12px; */
/* 	border-radius:25px;*/
/* 	background:rgba(255,255,255,.1);*/
/*         width:30% !important; */
/* 	color:#fff;*/
/* }*/
/* .login-form .group input[data-type="password"]{*/
/* 	text-security:circle;*/
/* 	-webkit-text-security:circle;*/
/* }*/
/* .login-form .group .label{*/
/* 	color:#aaa;*/
/* 	font-size:12px;*/
/* }*/
/* .login-form .group .button{*/
/* 	background:#1161ee;*/
/* }*/
/* .login-form .group label .icon{*/
/* 	width:15px;*/
/* 	height:15px;*/
/* 	border-radius:2px;*/
/* 	position:relative;*/
/* 	display:inline-block;*/
/* 	background:rgba(255,255,255,.1);*/
/* }*/
/* .login-form .group label .icon:before,*/
/* .login-form .group label .icon:after{*/
/* 	content:'';*/
/* 	width:10px;*/
/* 	height:2px;*/
/* 	background:#fff;*/
/* 	position:absolute;*/
/* 	transition:all .2s ease-in-out 0s;*/
/* }*/
/* .login-form .group label .icon:before{*/
/* 	left:3px;*/
/* 	width:5px;*/
/* 	bottom:6px;*/
/* 	transform:scale(0) rotate(0);*/
/* }*/
/* .login-form .group label .icon:after{*/
/* 	top:6px;*/
/* 	right:0;*/
/* 	transform:scale(0) rotate(0);*/
/* }*/
/* */
/* .hr{*/
/* 	height:2px;*/
/* 	margin:60px 0 50px 0;*/
/* 	background:rgba(255,255,255,.2);*/
/* }*/
/* .foot-lnk{*/
/* 	text-align:center;*/
/* }*/
/* #lab{*/
/*    color: #aaa;*/
/* }*/
