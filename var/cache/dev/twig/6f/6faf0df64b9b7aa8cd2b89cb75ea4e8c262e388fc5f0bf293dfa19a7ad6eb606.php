<?php

/* @css/Script/graphdess.js */
class __TwigTemplate_b20c92106d67e03dc19dd1ade5bf4112dbce62ebaa5daa699f3643a9a5eb4a2a extends Twig_Template
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
        $__internal_d61928407b08453265d4cd443d261a35283d7fd64cc9ee24a643d020fdb3526d = $this->env->getExtension("native_profiler");
        $__internal_d61928407b08453265d4cd443d261a35283d7fd64cc9ee24a643d020fdb3526d->enter($__internal_d61928407b08453265d4cd443d261a35283d7fd64cc9ee24a643d020fdb3526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/graphdess.js"));

        // line 1
        echo "
/* 
 Created on : 17 août 2016, 11:48:04
 Author     : Landry Kateu <landrykateu@gmail.com>
 */
function dessine(json,x,y,id,type,s) {
    json =  getJSonObject(json);
    if(type == 'L' )
        new Morris.Line({
                                element: id,
                                data: json,
                                xkey: x,
                                ykeys: [y],
                                labels: [y],
                                hideHover: 'auto',
                                postUnits:s
                              });
    if(type == 'D' )                          
       new  Morris.Donut({
                     element: id,
                     data: json
                  });
 }
 
 function dessineMany(json,x,y,id,type) {
    json =  getJSonObject(json);
    if(type == 'L' )
        new Morris.Line({
                                element: id,
                                data: json,
                                xkey: x,
                                ykeys: y,
                                labels: y,
                                resize: true,
                                hideHover: 'auto'
                              });
    if(type == 'D' )                          
       new  Morris.Donut({
                     element: id,
                     data: json
                  });
 }
function dessinebar(json,x,y1,y2,l1,l2,id) {
    json =  getJSonObject(json);
    Morris.Bar({
                         element: id,
                         data: json,
                         xkey: x,
                         ykeys: [y1, y2],
                         labels: [l1, l2],
                         resize: true,
                         hideHover: 'auto'
                       });
}
function dessinebardeux(json,x,y,id) {
    json =  getJSonObject(json);
    Morris.Bar({
                         element: id,
                         data: json,
                         xkey: x,
                         ykeys: y,
                         labels: y,
                         barColors : ['#CCCC66','#CCCC00','#336600','#336666','#0066FF','#3399FF'],
                         resize: true,
                         hideHover: 'auto'
                       });
}
function getJSonObject(value) {
           var b = value.replace(/&quot;/ig, '\"')
            return \$.parseJSON(b);
        }


";
        
        $__internal_d61928407b08453265d4cd443d261a35283d7fd64cc9ee24a643d020fdb3526d->leave($__internal_d61928407b08453265d4cd443d261a35283d7fd64cc9ee24a643d020fdb3526d_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/graphdess.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* */
/* /* */
/*  Created on : 17 août 2016, 11:48:04*/
/*  Author     : Landry Kateu <landrykateu@gmail.com>*/
/*  *//* */
/* function dessine(json,x,y,id,type,s) {*/
/*     json =  getJSonObject(json);*/
/*     if(type == 'L' )*/
/*         new Morris.Line({*/
/*                                 element: id,*/
/*                                 data: json,*/
/*                                 xkey: x,*/
/*                                 ykeys: [y],*/
/*                                 labels: [y],*/
/*                                 hideHover: 'auto',*/
/*                                 postUnits:s*/
/*                               });*/
/*     if(type == 'D' )                          */
/*        new  Morris.Donut({*/
/*                      element: id,*/
/*                      data: json*/
/*                   });*/
/*  }*/
/*  */
/*  function dessineMany(json,x,y,id,type) {*/
/*     json =  getJSonObject(json);*/
/*     if(type == 'L' )*/
/*         new Morris.Line({*/
/*                                 element: id,*/
/*                                 data: json,*/
/*                                 xkey: x,*/
/*                                 ykeys: y,*/
/*                                 labels: y,*/
/*                                 resize: true,*/
/*                                 hideHover: 'auto'*/
/*                               });*/
/*     if(type == 'D' )                          */
/*        new  Morris.Donut({*/
/*                      element: id,*/
/*                      data: json*/
/*                   });*/
/*  }*/
/* function dessinebar(json,x,y1,y2,l1,l2,id) {*/
/*     json =  getJSonObject(json);*/
/*     Morris.Bar({*/
/*                          element: id,*/
/*                          data: json,*/
/*                          xkey: x,*/
/*                          ykeys: [y1, y2],*/
/*                          labels: [l1, l2],*/
/*                          resize: true,*/
/*                          hideHover: 'auto'*/
/*                        });*/
/* }*/
/* function dessinebardeux(json,x,y,id) {*/
/*     json =  getJSonObject(json);*/
/*     Morris.Bar({*/
/*                          element: id,*/
/*                          data: json,*/
/*                          xkey: x,*/
/*                          ykeys: y,*/
/*                          labels: y,*/
/*                          barColors : ['#CCCC66','#CCCC00','#336600','#336666','#0066FF','#3399FF'],*/
/*                          resize: true,*/
/*                          hideHover: 'auto'*/
/*                        });*/
/* }*/
/* function getJSonObject(value) {*/
/*            var b = value.replace(/&quot;/ig, '"')*/
/*             return $.parseJSON(b);*/
/*         }*/
/* */
/* */
/* */
