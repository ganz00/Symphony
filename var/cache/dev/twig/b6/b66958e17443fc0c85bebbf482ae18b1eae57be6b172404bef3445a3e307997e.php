<?php

/* @css/Script/scripts.js */
class __TwigTemplate_ef8bc5763f9e2d01027897050df7a94d743533893268dab63663c2a0e670f9c7 extends Twig_Template
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
        $__internal_0242fef0d2e56075923abb80d2d30e6e60571996b4ce3fed9eab43ed6e5a3fa7 = $this->env->getExtension("native_profiler");
        $__internal_0242fef0d2e56075923abb80d2d30e6e60571996b4ce3fed9eab43ed6e5a3fa7->enter($__internal_0242fef0d2e56075923abb80d2d30e6e60571996b4ce3fed9eab43ed6e5a3fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/scripts.js"));

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
        
        $__internal_0242fef0d2e56075923abb80d2d30e6e60571996b4ce3fed9eab43ed6e5a3fa7->leave($__internal_0242fef0d2e56075923abb80d2d30e6e60571996b4ce3fed9eab43ed6e5a3fa7_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/scripts.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
