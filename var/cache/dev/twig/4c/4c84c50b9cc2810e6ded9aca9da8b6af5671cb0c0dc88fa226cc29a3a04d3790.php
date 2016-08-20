<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c0927a44dd8296cd2d0d63daa76357e58db8ceba3ba4dba692f77b8f96f4361e extends Twig_Template
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
        $__internal_81dc7387e0b73318c8e9c0361c3f2a217c97169c86df141030e273b1b7637e0e = $this->env->getExtension("native_profiler");
        $__internal_81dc7387e0b73318c8e9c0361c3f2a217c97169c86df141030e273b1b7637e0e->enter($__internal_81dc7387e0b73318c8e9c0361c3f2a217c97169c86df141030e273b1b7637e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_81dc7387e0b73318c8e9c0361c3f2a217c97169c86df141030e273b1b7637e0e->leave($__internal_81dc7387e0b73318c8e9c0361c3f2a217c97169c86df141030e273b1b7637e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
