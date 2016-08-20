<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5567d07ae39fb91042f1749bb00ae50b83aa6b493632d1e13466c3386bc8f2b6 extends Twig_Template
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
        $__internal_689b3bab5a2fe4444c1a97b6184a148b6c910d28f45e34c7bc47868273242c43 = $this->env->getExtension("native_profiler");
        $__internal_689b3bab5a2fe4444c1a97b6184a148b6c910d28f45e34c7bc47868273242c43->enter($__internal_689b3bab5a2fe4444c1a97b6184a148b6c910d28f45e34c7bc47868273242c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_689b3bab5a2fe4444c1a97b6184a148b6c910d28f45e34c7bc47868273242c43->leave($__internal_689b3bab5a2fe4444c1a97b6184a148b6c910d28f45e34c7bc47868273242c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
