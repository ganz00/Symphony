<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ab7d695f5927eaf364712f6af1b40893371e3b3f4a5a3092851732ad3be92b2b extends Twig_Template
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
        $__internal_8bac5ce9fd125d3f4cf2665ec5846c880664bd284429926990466f3cc4d21a24 = $this->env->getExtension("native_profiler");
        $__internal_8bac5ce9fd125d3f4cf2665ec5846c880664bd284429926990466f3cc4d21a24->enter($__internal_8bac5ce9fd125d3f4cf2665ec5846c880664bd284429926990466f3cc4d21a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8bac5ce9fd125d3f4cf2665ec5846c880664bd284429926990466f3cc4d21a24->leave($__internal_8bac5ce9fd125d3f4cf2665ec5846c880664bd284429926990466f3cc4d21a24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
