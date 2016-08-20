<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e408deb969cf10715ef28ba8c2976b6d183a37e6a3e70ccc04b9164a53724118 extends Twig_Template
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
        $__internal_e4254d663a60ddf1766fb398013b8cbf758881ff87982fc15943966f57d999be = $this->env->getExtension("native_profiler");
        $__internal_e4254d663a60ddf1766fb398013b8cbf758881ff87982fc15943966f57d999be->enter($__internal_e4254d663a60ddf1766fb398013b8cbf758881ff87982fc15943966f57d999be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e4254d663a60ddf1766fb398013b8cbf758881ff87982fc15943966f57d999be->leave($__internal_e4254d663a60ddf1766fb398013b8cbf758881ff87982fc15943966f57d999be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
