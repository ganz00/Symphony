<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e5536a20f6ffc56636b10633d27e3175cd997f57c73d15b592ea810433590583 extends Twig_Template
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
        $__internal_74ad1971c52528f5a0c37900f59276daa8ceda37103db644fc8ad6fa9fae0a08 = $this->env->getExtension("native_profiler");
        $__internal_74ad1971c52528f5a0c37900f59276daa8ceda37103db644fc8ad6fa9fae0a08->enter($__internal_74ad1971c52528f5a0c37900f59276daa8ceda37103db644fc8ad6fa9fae0a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_74ad1971c52528f5a0c37900f59276daa8ceda37103db644fc8ad6fa9fae0a08->leave($__internal_74ad1971c52528f5a0c37900f59276daa8ceda37103db644fc8ad6fa9fae0a08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
