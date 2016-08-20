<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3652c9f0d630286555febcfd822ecf98464a949c56cd6c0fb4dfaa22e8a511c1 extends Twig_Template
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
        $__internal_efa7a8e355eb2debf408a013dec2a1d84f374cc9cb378511c682dda2fa5eeae8 = $this->env->getExtension("native_profiler");
        $__internal_efa7a8e355eb2debf408a013dec2a1d84f374cc9cb378511c682dda2fa5eeae8->enter($__internal_efa7a8e355eb2debf408a013dec2a1d84f374cc9cb378511c682dda2fa5eeae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_efa7a8e355eb2debf408a013dec2a1d84f374cc9cb378511c682dda2fa5eeae8->leave($__internal_efa7a8e355eb2debf408a013dec2a1d84f374cc9cb378511c682dda2fa5eeae8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
