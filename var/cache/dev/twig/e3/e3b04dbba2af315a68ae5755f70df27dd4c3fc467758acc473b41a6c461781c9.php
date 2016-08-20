<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5364194eb12cab659d3393397286438731b1b30b65ea7df2162f7391412012c9 extends Twig_Template
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
        $__internal_9300fa8c9c3a4a1b67b038b1884fe32ff5e95b1857c576bf32bd4d68d4536867 = $this->env->getExtension("native_profiler");
        $__internal_9300fa8c9c3a4a1b67b038b1884fe32ff5e95b1857c576bf32bd4d68d4536867->enter($__internal_9300fa8c9c3a4a1b67b038b1884fe32ff5e95b1857c576bf32bd4d68d4536867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9300fa8c9c3a4a1b67b038b1884fe32ff5e95b1857c576bf32bd4d68d4536867->leave($__internal_9300fa8c9c3a4a1b67b038b1884fe32ff5e95b1857c576bf32bd4d68d4536867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
