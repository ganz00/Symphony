<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_380178858a4aac966f720674348102a955a23527fe461fa4bb636e1aadf20b0d extends Twig_Template
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
        $__internal_2bb6df8909250c36666db58c033f4422077f1324d47ef8105fb38d19854dcc40 = $this->env->getExtension("native_profiler");
        $__internal_2bb6df8909250c36666db58c033f4422077f1324d47ef8105fb38d19854dcc40->enter($__internal_2bb6df8909250c36666db58c033f4422077f1324d47ef8105fb38d19854dcc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2bb6df8909250c36666db58c033f4422077f1324d47ef8105fb38d19854dcc40->leave($__internal_2bb6df8909250c36666db58c033f4422077f1324d47ef8105fb38d19854dcc40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
