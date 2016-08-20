<?php

/* @css/Script/morrisjs/spec/viz/examples.js */
class __TwigTemplate_75efe4f1e31217496903cebdbdfb03649178878cef9575f528ad1d41ccd604ce extends Twig_Template
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
        $__internal_f6716e116b3b24d1f128efcd39e5837a8d3ec92b4da3b2ab748eb935fbe77971 = $this->env->getExtension("native_profiler");
        $__internal_f6716e116b3b24d1f128efcd39e5837a8d3ec92b4da3b2ab748eb935fbe77971->enter($__internal_f6716e116b3b24d1f128efcd39e5837a8d3ec92b4da3b2ab748eb935fbe77971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/viz/examples.js"));

        // line 1
        echo "var webpage = require(\"webpage\"),
    fs = require(\"fs\");

var html_path = fs.absolute(\"test.html\");
var examples = [];

function run_example(example_index) {
  if (example_index >= examples.length) {
    phantom.exit(0);
    return;
  }

  var example = examples[example_index];
  var snapshot_index = 0;
  var page = webpage.create();

  page.viewportSize = { width: 500, height: 300 };
  page.clipRect = { width: 500, height: 300 };
  page.onAlert = function (msg) {
    var e = JSON.parse(msg);
    if (e.fn == \"snapshot\") {
      page.render(\"output/\" + example.name + snapshot_index + \".png\");
      snapshot_index += 1;
    } else if (e.fn == \"mousemove\") {
      page.sendEvent(\"mousemove\", e.x, e.y);
    }
  };

  page.open(html_path, function (status) {
    if (status == \"fail\") {
      console.log(\"Failed to load test page: \" + example.name);
      phantom.exit(1);
    } else {
      page.evaluate(example.runner);
    }
    page.close();
    run_example(example_index + 1);
  });
}

exports.def = function (name, runner) {
  examples.push({ name: name, runner: runner });
};

exports.run = function () {
  if (fs.isDirectory(\"output\")) {
    fs.list(\"output\").forEach(function (path) {
      if (path != \".\" && path != \"..\") {
        fs.remove(\"output/\" + path);
      }
    });
  } else {
    fs.makeDirectory(\"output\");
  }
  run_example(0);
};
";
        
        $__internal_f6716e116b3b24d1f128efcd39e5837a8d3ec92b4da3b2ab748eb935fbe77971->leave($__internal_f6716e116b3b24d1f128efcd39e5837a8d3ec92b4da3b2ab748eb935fbe77971_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/examples.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* var webpage = require("webpage"),*/
/*     fs = require("fs");*/
/* */
/* var html_path = fs.absolute("test.html");*/
/* var examples = [];*/
/* */
/* function run_example(example_index) {*/
/*   if (example_index >= examples.length) {*/
/*     phantom.exit(0);*/
/*     return;*/
/*   }*/
/* */
/*   var example = examples[example_index];*/
/*   var snapshot_index = 0;*/
/*   var page = webpage.create();*/
/* */
/*   page.viewportSize = { width: 500, height: 300 };*/
/*   page.clipRect = { width: 500, height: 300 };*/
/*   page.onAlert = function (msg) {*/
/*     var e = JSON.parse(msg);*/
/*     if (e.fn == "snapshot") {*/
/*       page.render("output/" + example.name + snapshot_index + ".png");*/
/*       snapshot_index += 1;*/
/*     } else if (e.fn == "mousemove") {*/
/*       page.sendEvent("mousemove", e.x, e.y);*/
/*     }*/
/*   };*/
/* */
/*   page.open(html_path, function (status) {*/
/*     if (status == "fail") {*/
/*       console.log("Failed to load test page: " + example.name);*/
/*       phantom.exit(1);*/
/*     } else {*/
/*       page.evaluate(example.runner);*/
/*     }*/
/*     page.close();*/
/*     run_example(example_index + 1);*/
/*   });*/
/* }*/
/* */
/* exports.def = function (name, runner) {*/
/*   examples.push({ name: name, runner: runner });*/
/* };*/
/* */
/* exports.run = function () {*/
/*   if (fs.isDirectory("output")) {*/
/*     fs.list("output").forEach(function (path) {*/
/*       if (path != "." && path != "..") {*/
/*         fs.remove("output/" + path);*/
/*       }*/
/*     });*/
/*   } else {*/
/*     fs.makeDirectory("output");*/
/*   }*/
/*   run_example(0);*/
/* };*/
/* */
