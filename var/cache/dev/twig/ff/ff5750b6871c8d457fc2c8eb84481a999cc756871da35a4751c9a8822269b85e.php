<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_da7ad4d67d92023161ce1760e8866c8bc360aa6f7895370847a69a92598ef8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b75c4f94c23316ea7ae3d0534810b3dfbea89619bb111fae01df770d0d1093d = $this->env->getExtension("native_profiler");
        $__internal_4b75c4f94c23316ea7ae3d0534810b3dfbea89619bb111fae01df770d0d1093d->enter($__internal_4b75c4f94c23316ea7ae3d0534810b3dfbea89619bb111fae01df770d0d1093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b75c4f94c23316ea7ae3d0534810b3dfbea89619bb111fae01df770d0d1093d->leave($__internal_4b75c4f94c23316ea7ae3d0534810b3dfbea89619bb111fae01df770d0d1093d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f4f0479752b76d288ab9c49ef6c70c32fdfac1a5f1581870447cd7a0f50f53b = $this->env->getExtension("native_profiler");
        $__internal_2f4f0479752b76d288ab9c49ef6c70c32fdfac1a5f1581870447cd7a0f50f53b->enter($__internal_2f4f0479752b76d288ab9c49ef6c70c32fdfac1a5f1581870447cd7a0f50f53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f4f0479752b76d288ab9c49ef6c70c32fdfac1a5f1581870447cd7a0f50f53b->leave($__internal_2f4f0479752b76d288ab9c49ef6c70c32fdfac1a5f1581870447cd7a0f50f53b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_300f74fa7722b00c3a58d780aeaa552457159bf33266824f87e77ffceba079ec = $this->env->getExtension("native_profiler");
        $__internal_300f74fa7722b00c3a58d780aeaa552457159bf33266824f87e77ffceba079ec->enter($__internal_300f74fa7722b00c3a58d780aeaa552457159bf33266824f87e77ffceba079ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_300f74fa7722b00c3a58d780aeaa552457159bf33266824f87e77ffceba079ec->leave($__internal_300f74fa7722b00c3a58d780aeaa552457159bf33266824f87e77ffceba079ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe6ce75b277ddb2d587e618d5eb6803b2ed1e27a019bea90bfd8ed4ceff962c9 = $this->env->getExtension("native_profiler");
        $__internal_fe6ce75b277ddb2d587e618d5eb6803b2ed1e27a019bea90bfd8ed4ceff962c9->enter($__internal_fe6ce75b277ddb2d587e618d5eb6803b2ed1e27a019bea90bfd8ed4ceff962c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe6ce75b277ddb2d587e618d5eb6803b2ed1e27a019bea90bfd8ed4ceff962c9->leave($__internal_fe6ce75b277ddb2d587e618d5eb6803b2ed1e27a019bea90bfd8ed4ceff962c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
