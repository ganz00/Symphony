<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8984915922e3cad4a8d3163305a4021c79eb82b45e2424bb6205707de68b0a61 extends Twig_Template
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
        $__internal_7f0136ae43cdd22efc83bd2aa7382fdf7b23d7062d28bd5dabce992fb30f196c = $this->env->getExtension("native_profiler");
        $__internal_7f0136ae43cdd22efc83bd2aa7382fdf7b23d7062d28bd5dabce992fb30f196c->enter($__internal_7f0136ae43cdd22efc83bd2aa7382fdf7b23d7062d28bd5dabce992fb30f196c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7f0136ae43cdd22efc83bd2aa7382fdf7b23d7062d28bd5dabce992fb30f196c->leave($__internal_7f0136ae43cdd22efc83bd2aa7382fdf7b23d7062d28bd5dabce992fb30f196c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
