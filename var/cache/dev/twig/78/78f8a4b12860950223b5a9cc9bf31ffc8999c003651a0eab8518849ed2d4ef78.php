<?php

/* @css/Script/morrisjs/spec/viz/run.sh */
class __TwigTemplate_3c0708a6b014fcb0650ca9d06cf8be1583bce8a551f5a561fd24f8d9b2492f8a extends Twig_Template
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
        $__internal_5f79d4b40654e0eca9f780680cf6eedf85e16383c948648cf7c095a90bbaed5c = $this->env->getExtension("native_profiler");
        $__internal_5f79d4b40654e0eca9f780680cf6eedf85e16383c948648cf7c095a90bbaed5c->enter($__internal_5f79d4b40654e0eca9f780680cf6eedf85e16383c948648cf7c095a90bbaed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/spec/viz/run.sh"));

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
        
        $__internal_5f79d4b40654e0eca9f780680cf6eedf85e16383c948648cf7c095a90bbaed5c->leave($__internal_5f79d4b40654e0eca9f780680cf6eedf85e16383c948648cf7c095a90bbaed5c_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/spec/viz/run.sh";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
