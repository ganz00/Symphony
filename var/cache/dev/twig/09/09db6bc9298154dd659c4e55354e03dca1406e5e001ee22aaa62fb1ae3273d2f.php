<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1c594e7ba88ba97e69efa468e506c3930d2c6244501bdc0c7cf0a2dd1da8dc91 extends Twig_Template
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
        $__internal_336b4f1b0a4818302befacc074d28d416aa74db9081b89978c8a7b746b733191 = $this->env->getExtension("native_profiler");
        $__internal_336b4f1b0a4818302befacc074d28d416aa74db9081b89978c8a7b746b733191->enter($__internal_336b4f1b0a4818302befacc074d28d416aa74db9081b89978c8a7b746b733191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_336b4f1b0a4818302befacc074d28d416aa74db9081b89978c8a7b746b733191->leave($__internal_336b4f1b0a4818302befacc074d28d416aa74db9081b89978c8a7b746b733191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
