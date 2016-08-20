<?php

/* @css/Script/morrisjs/spec/viz/visual_specs.js */
class __TwigTemplate_d62cf767f6f1f4ac919fe45a5c708287291e38111e4ef51dfb93bc10706daa6b extends Twig_Template
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
        $__internal_7d367414af086676f569e6ed33f0c19c71a7c5a9fccddbea374ff0d45c485a22 = $this->env->getExtension("native_profiler");
        $__internal_7d367414af086676f569e6ed33f0c19c71a7c5a9fccddbea374ff0d45c485a22->enter($__internal_7d367414af086676f569e6ed33f0c19c71a7c5a9fccddbea374ff0d45c485a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/viz/visual_specs.js"));

        // line 1
        echo "var examples = require('./examples');

examples.def('line', function () {
  Morris.Line({
    element: 'chart',
    data: [
      { x: 0, y: 10, z: 30 }, { x: 1, y: 20, z: 20 },
      { x: 2, y: 30, z: 10 }, { x: 3, y: 30, z: 10 },
      { x: 4, y: 20, z: 20 }, { x: 5, y: 10, z: 30 }
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['y', 'z'],
    parseTime: false
  });
  window.snapshot();
});

examples.def('area', function () {
  Morris.Area({
    element: 'chart',
    data: [
      { x: 0, y: 1, z: 1 }, { x: 1, y: 2, z: 1 },
      { x: 2, y: 3, z: 1 }, { x: 3, y: 3, z: 1 },
      { x: 4, y: 2, z: 1 }, { x: 5, y: 1, z: 1 }
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['y', 'z'],
    parseTime: false
  });
  window.snapshot();
});

examples.def('bar', function () {
  Morris.Bar({
    element: 'chart',
    data: [
      { x: 0, y: 1, z: 3 }, { x: 1, y: 2, z: 2 },
      { x: 2, y: 3, z: 1 }, { x: 3, y: 3, z: 1 },
      { x: 4, y: 2, z: 2 }, { x: 5, y: 1, z: 3 }
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['y', 'z']
  });
  window.snapshot();
});

examples.def('stacked_bar', function () {
  Morris.Bar({
    element: 'chart',
    data: [
      { x: 0, y: 1, z: 1 }, { x: 1, y: 2, z: 1 },
      { x: 2, y: 3, z: 1 }, { x: 3, y: 3, z: 1 },
      { x: 4, y: 2, z: 1 }, { x: 5, y: 1, z: 1 }
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['y', 'z'],
    stacked: true
  });
  window.snapshot();
});

examples.run();
";
        
        $__internal_7d367414af086676f569e6ed33f0c19c71a7c5a9fccddbea374ff0d45c485a22->leave($__internal_7d367414af086676f569e6ed33f0c19c71a7c5a9fccddbea374ff0d45c485a22_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/visual_specs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* var examples = require('./examples');*/
/* */
/* examples.def('line', function () {*/
/*   Morris.Line({*/
/*     element: 'chart',*/
/*     data: [*/
/*       { x: 0, y: 10, z: 30 }, { x: 1, y: 20, z: 20 },*/
/*       { x: 2, y: 30, z: 10 }, { x: 3, y: 30, z: 10 },*/
/*       { x: 4, y: 20, z: 20 }, { x: 5, y: 10, z: 30 }*/
/*     ],*/
/*     xkey: 'x',*/
/*     ykeys: ['y', 'z'],*/
/*     labels: ['y', 'z'],*/
/*     parseTime: false*/
/*   });*/
/*   window.snapshot();*/
/* });*/
/* */
/* examples.def('area', function () {*/
/*   Morris.Area({*/
/*     element: 'chart',*/
/*     data: [*/
/*       { x: 0, y: 1, z: 1 }, { x: 1, y: 2, z: 1 },*/
/*       { x: 2, y: 3, z: 1 }, { x: 3, y: 3, z: 1 },*/
/*       { x: 4, y: 2, z: 1 }, { x: 5, y: 1, z: 1 }*/
/*     ],*/
/*     xkey: 'x',*/
/*     ykeys: ['y', 'z'],*/
/*     labels: ['y', 'z'],*/
/*     parseTime: false*/
/*   });*/
/*   window.snapshot();*/
/* });*/
/* */
/* examples.def('bar', function () {*/
/*   Morris.Bar({*/
/*     element: 'chart',*/
/*     data: [*/
/*       { x: 0, y: 1, z: 3 }, { x: 1, y: 2, z: 2 },*/
/*       { x: 2, y: 3, z: 1 }, { x: 3, y: 3, z: 1 },*/
/*       { x: 4, y: 2, z: 2 }, { x: 5, y: 1, z: 3 }*/
/*     ],*/
/*     xkey: 'x',*/
/*     ykeys: ['y', 'z'],*/
/*     labels: ['y', 'z']*/
/*   });*/
/*   window.snapshot();*/
/* });*/
/* */
/* examples.def('stacked_bar', function () {*/
/*   Morris.Bar({*/
/*     element: 'chart',*/
/*     data: [*/
/*       { x: 0, y: 1, z: 1 }, { x: 1, y: 2, z: 1 },*/
/*       { x: 2, y: 3, z: 1 }, { x: 3, y: 3, z: 1 },*/
/*       { x: 4, y: 2, z: 1 }, { x: 5, y: 1, z: 1 }*/
/*     ],*/
/*     xkey: 'x',*/
/*     ykeys: ['y', 'z'],*/
/*     labels: ['y', 'z'],*/
/*     stacked: true*/
/*   });*/
/*   window.snapshot();*/
/* });*/
/* */
/* examples.run();*/
/* */
