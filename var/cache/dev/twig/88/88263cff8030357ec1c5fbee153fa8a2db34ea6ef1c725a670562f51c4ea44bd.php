<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_59d411b4705af13d53e7cecb88440b1e0b82cb7ac887f534e8df7d01f4b82511 extends Twig_Template
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
        $__internal_9d959071fc54b35a24efe1f472159d1b66e935ad9fba66861ccda6a69d19f046 = $this->env->getExtension("native_profiler");
        $__internal_9d959071fc54b35a24efe1f472159d1b66e935ad9fba66861ccda6a69d19f046->enter($__internal_9d959071fc54b35a24efe1f472159d1b66e935ad9fba66861ccda6a69d19f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9d959071fc54b35a24efe1f472159d1b66e935ad9fba66861ccda6a69d19f046->leave($__internal_9d959071fc54b35a24efe1f472159d1b66e935ad9fba66861ccda6a69d19f046_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
