<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ec06f42661397791c3a2b774d2e2e810e65b493d27690dcdd650828c94c8f879 extends Twig_Template
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
        $__internal_4a372cd7feaac85e562f2fb7f3232a4c82803f85ee5bc8d4050e54cdf7df76c6 = $this->env->getExtension("native_profiler");
        $__internal_4a372cd7feaac85e562f2fb7f3232a4c82803f85ee5bc8d4050e54cdf7df76c6->enter($__internal_4a372cd7feaac85e562f2fb7f3232a4c82803f85ee5bc8d4050e54cdf7df76c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4a372cd7feaac85e562f2fb7f3232a4c82803f85ee5bc8d4050e54cdf7df76c6->leave($__internal_4a372cd7feaac85e562f2fb7f3232a4c82803f85ee5bc8d4050e54cdf7df76c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
