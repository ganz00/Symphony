<?php

/* @css/Script/scripts.js */
class __TwigTemplate_660d76b3c623d7d201a38f393055caa439d5e006c6771b4c9a68e59630e6bc87 extends Twig_Template
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
        echo "function rech() {
  var text =  \$('#rech').val();
  var text2 = text.split(\" \");

  var url = \"\";
  var date =\"\";
  var patt = new RegExp(\"\\\\d\");
  for (var i = 0; i < text2.length; i++) {
      if(text2[i].length > 1){
      var val = text2[i];
      if(patt.test(val)){
              date = date+val+\"-\";
       }else{
        url = url+val+\"-\";
    }
   }
}
   var a = window.location.pathname;  
   var i  = a.indexOf(\"seach\");
   a = a.substring(0,i);
   window.location = a+\"seach/\"+url.substring(0,url.length-1)+\"+\"+date.substring(0,date.length-1);  
}";
    }

    public function getTemplateName()
    {
        return "@css/Script/scripts.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* function rech() {*/
/*   var text =  $('#rech').val();*/
/*   var text2 = text.split(" ");*/
/* */
/*   var url = "";*/
/*   var date ="";*/
/*   var patt = new RegExp("\\d");*/
/*   for (var i = 0; i < text2.length; i++) {*/
/*       if(text2[i].length > 1){*/
/*       var val = text2[i];*/
/*       if(patt.test(val)){*/
/*               date = date+val+"-";*/
/*        }else{*/
/*         url = url+val+"-";*/
/*     }*/
/*    }*/
/* }*/
/*    var a = window.location.pathname;  */
/*    var i  = a.indexOf("seach");*/
/*    a = a.substring(0,i);*/
/*    window.location = a+"seach/"+url.substring(0,url.length-1)+"+"+date.substring(0,date.length-1);  */
/* }*/
