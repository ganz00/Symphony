<?php

/* @css/Script/morrisjs/spec/viz/run.sh */
class __TwigTemplate_199332b9fb355f93a5898fdaff182bd31e076a13a5d4989cff3b85ee20aab688 extends Twig_Template
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
        echo "#!/bin/sh

# visual_specs.js creates output in output/XXX.png
phantomjs visual_specs.js

# clear out old diffs
mkdir -p diff
rm -f diff/*

# generate diffs
PASS=1
for i in exemplary/*.png
do
  FN=`basename \$i`
  perceptualdiff \$i output/\$FN -output diff/\$FN
  if [ \$? -eq 0 ]
  then
    echo \"OK:   \$FN\"
  else
    echo \"FAIL: \$FN\"
    PASS=0
  fi
done

# pass / fail
if [ \$PASS -eq 1 ]
then
  echo \"Success.\"
else
  echo \"Failed.\"
  exit 1
fi
";
    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/run.sh";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #!/bin/sh*/
/* */
/* # visual_specs.js creates output in output/XXX.png*/
/* phantomjs visual_specs.js*/
/* */
/* # clear out old diffs*/
/* mkdir -p diff*/
/* rm -f diff/**/
/* */
/* # generate diffs*/
/* PASS=1*/
/* for i in exemplary/*.png*/
/* do*/
/*   FN=`basename $i`*/
/*   perceptualdiff $i output/$FN -output diff/$FN*/
/*   if [ $? -eq 0 ]*/
/*   then*/
/*     echo "OK:   $FN"*/
/*   else*/
/*     echo "FAIL: $FN"*/
/*     PASS=0*/
/*   fi*/
/* done*/
/* */
/* # pass / fail*/
/* if [ $PASS -eq 1 ]*/
/* then*/
/*   echo "Success."*/
/* else*/
/*   echo "Failed."*/
/*   exit 1*/
/* fi*/
/* */
