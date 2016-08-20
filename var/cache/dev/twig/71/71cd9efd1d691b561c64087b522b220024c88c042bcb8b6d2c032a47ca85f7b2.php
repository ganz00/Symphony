<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c4ea8d5e6ae88dd94e610746436db0916529afdd3866210aeae365eb684cea42 extends Twig_Template
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
        $__internal_2255ede5a91ac4412cd06fb75b9ad1bb6f549f1b969a88e76dc42bee41248acf = $this->env->getExtension("native_profiler");
        $__internal_2255ede5a91ac4412cd06fb75b9ad1bb6f549f1b969a88e76dc42bee41248acf->enter($__internal_2255ede5a91ac4412cd06fb75b9ad1bb6f549f1b969a88e76dc42bee41248acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2255ede5a91ac4412cd06fb75b9ad1bb6f549f1b969a88e76dc42bee41248acf->leave($__internal_2255ede5a91ac4412cd06fb75b9ad1bb6f549f1b969a88e76dc42bee41248acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
