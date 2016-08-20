<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2a35d4435eb0aef3610b02acbca563c9504744644b45f459fbf83cb9d61d7f43 extends Twig_Template
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
        $__internal_53e3c5d7099fd9db48fac853bfa5d841ce16339cad00528cc3b306204c2c4701 = $this->env->getExtension("native_profiler");
        $__internal_53e3c5d7099fd9db48fac853bfa5d841ce16339cad00528cc3b306204c2c4701->enter($__internal_53e3c5d7099fd9db48fac853bfa5d841ce16339cad00528cc3b306204c2c4701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_53e3c5d7099fd9db48fac853bfa5d841ce16339cad00528cc3b306204c2c4701->leave($__internal_53e3c5d7099fd9db48fac853bfa5d841ce16339cad00528cc3b306204c2c4701_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
