<?php

/* @css/Script/morrisjs/spec/viz/visual_specs.js */
class __TwigTemplate_1bda798d7d832b45f2b74911ebdd48887f7f83c19a6eb0b1519d5e47955ed9a1 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/visual_specs.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
