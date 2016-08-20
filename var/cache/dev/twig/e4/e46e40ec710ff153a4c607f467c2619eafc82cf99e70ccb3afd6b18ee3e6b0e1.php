<?php

/* @css/Script/sb-admin-2.js */
class __TwigTemplate_5fa2aa64b6348b543ba77bf155225b8e2ccb2f7f55f35a648553b0f2c7495c36 extends Twig_Template
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
        $__internal_95b358a37462a481d12c7b97e6e8fd9d74e2b066fc8ef0c06964132b8c1c6fe2 = $this->env->getExtension("native_profiler");
        $__internal_95b358a37462a481d12c7b97e6e8fd9d74e2b066fc8ef0c06964132b8c1c6fe2->enter($__internal_95b358a37462a481d12c7b97e6e8fd9d74e2b066fc8ef0c06964132b8c1c6fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/sb-admin-2.js"));

        // line 1
        echo "\$(function() {

    \$('#side-menu').metisMenu();

});

\$( document ).ready(function() {
     \$(\"ul#ticker01\").liScroll();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
\$(function() {
    \$(window).bind(\"load resize\", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            \$('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            \$('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            \$(\"#page-wrapper\").css(\"min-height\", (height) + \"px\");
        }
    });

    var url = window.location;
    // var element = \$('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = \$('ul.nav a').filter(function() {
     return this.href == url;
    }).addClass('active').parent();

    while(true){
        if (element.is('li')){
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});
";
        
        $__internal_95b358a37462a481d12c7b97e6e8fd9d74e2b066fc8ef0c06964132b8c1c6fe2->leave($__internal_95b358a37462a481d12c7b97e6e8fd9d74e2b066fc8ef0c06964132b8c1c6fe2_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/sb-admin-2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* $(function() {*/
/* */
/*     $('#side-menu').metisMenu();*/
/* */
/* });*/
/* */
/* $( document ).ready(function() {*/
/*      $("ul#ticker01").liScroll();*/
/* });*/
/* */
/* //Loads the correct sidebar on window load,*/
/* //collapses the sidebar on window resize.*/
/* // Sets the min-height of #page-wrapper to window size*/
/* $(function() {*/
/*     $(window).bind("load resize", function() {*/
/*         var topOffset = 50;*/
/*         var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;*/
/*         if (width < 768) {*/
/*             $('div.navbar-collapse').addClass('collapse');*/
/*             topOffset = 100; // 2-row-menu*/
/*         } else {*/
/*             $('div.navbar-collapse').removeClass('collapse');*/
/*         }*/
/* */
/*         var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;*/
/*         height = height - topOffset;*/
/*         if (height < 1) height = 1;*/
/*         if (height > topOffset) {*/
/*             $("#page-wrapper").css("min-height", (height) + "px");*/
/*         }*/
/*     });*/
/* */
/*     var url = window.location;*/
/*     // var element = $('ul.nav a').filter(function() {*/
/*     //     return this.href == url;*/
/*     // }).addClass('active').parent().parent().addClass('in').parent();*/
/*     var element = $('ul.nav a').filter(function() {*/
/*      return this.href == url;*/
/*     }).addClass('active').parent();*/
/* */
/*     while(true){*/
/*         if (element.is('li')){*/
/*             element = element.parent().addClass('in').parent();*/
/*         } else {*/
/*             break;*/
/*         }*/
/*     }*/
/* });*/
/* */
