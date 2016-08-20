<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_582ea84c73f6f245a0cd52f74ba9f964d24e543c5611d1b5dc6dcb8f4784575d extends Twig_Template
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
        $__internal_379882ca4e18089d8d34b34a20399c04ecaba7a5f29900c7f5c00563f62e04b5 = $this->env->getExtension("native_profiler");
        $__internal_379882ca4e18089d8d34b34a20399c04ecaba7a5f29900c7f5c00563f62e04b5->enter($__internal_379882ca4e18089d8d34b34a20399c04ecaba7a5f29900c7f5c00563f62e04b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_379882ca4e18089d8d34b34a20399c04ecaba7a5f29900c7f5c00563f62e04b5->leave($__internal_379882ca4e18089d8d34b34a20399c04ecaba7a5f29900c7f5c00563f62e04b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
