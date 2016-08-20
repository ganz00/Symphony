<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8b75e9d0c42b5c4c3883f5ef449df3d4d7b4464a13b3b0057def824b049c6356 extends Twig_Template
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
        $__internal_ed9d58178be9fc0ca8c23eb416f83555f8f066d4c8644df407307839677bd992 = $this->env->getExtension("native_profiler");
        $__internal_ed9d58178be9fc0ca8c23eb416f83555f8f066d4c8644df407307839677bd992->enter($__internal_ed9d58178be9fc0ca8c23eb416f83555f8f066d4c8644df407307839677bd992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed9d58178be9fc0ca8c23eb416f83555f8f066d4c8644df407307839677bd992->leave($__internal_ed9d58178be9fc0ca8c23eb416f83555f8f066d4c8644df407307839677bd992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
