<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d7128b9314ba2080844edd8cff286f31c5cffb3f18b2724655fcc4b434e535aa extends Twig_Template
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
        $__internal_be69527837df7e8b68e02a2d3124847ead6340dfdd5d9715a9dab7e54fdb54a1 = $this->env->getExtension("native_profiler");
        $__internal_be69527837df7e8b68e02a2d3124847ead6340dfdd5d9715a9dab7e54fdb54a1->enter($__internal_be69527837df7e8b68e02a2d3124847ead6340dfdd5d9715a9dab7e54fdb54a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_be69527837df7e8b68e02a2d3124847ead6340dfdd5d9715a9dab7e54fdb54a1->leave($__internal_be69527837df7e8b68e02a2d3124847ead6340dfdd5d9715a9dab7e54fdb54a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
