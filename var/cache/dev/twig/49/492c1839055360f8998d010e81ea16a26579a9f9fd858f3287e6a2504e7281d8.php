<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fb4b7cc4d34ebccf389094ac2e40fd447d022362d675cc8091c5df5072ddd27c extends Twig_Template
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
        $__internal_2543d1e865366be05ae4e2b34820dd30097e45ac2a9e1704e8e80e3e8d4e440d = $this->env->getExtension("native_profiler");
        $__internal_2543d1e865366be05ae4e2b34820dd30097e45ac2a9e1704e8e80e3e8d4e440d->enter($__internal_2543d1e865366be05ae4e2b34820dd30097e45ac2a9e1704e8e80e3e8d4e440d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2543d1e865366be05ae4e2b34820dd30097e45ac2a9e1704e8e80e3e8d4e440d->leave($__internal_2543d1e865366be05ae4e2b34820dd30097e45ac2a9e1704e8e80e3e8d4e440d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
