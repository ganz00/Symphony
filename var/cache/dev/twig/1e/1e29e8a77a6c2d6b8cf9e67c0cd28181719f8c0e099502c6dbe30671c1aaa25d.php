<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8ea940e55ee882ecf8db51ce334c9604d1b6adf332306a7dfc9a032d63c7016f extends Twig_Template
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
        $__internal_02596087332b2c79fc16f8f43f4077c1f8d4e6070aaf6da69503223f6bac3698 = $this->env->getExtension("native_profiler");
        $__internal_02596087332b2c79fc16f8f43f4077c1f8d4e6070aaf6da69503223f6bac3698->enter($__internal_02596087332b2c79fc16f8f43f4077c1f8d4e6070aaf6da69503223f6bac3698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_02596087332b2c79fc16f8f43f4077c1f8d4e6070aaf6da69503223f6bac3698->leave($__internal_02596087332b2c79fc16f8f43f4077c1f8d4e6070aaf6da69503223f6bac3698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
