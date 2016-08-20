<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0f6c32931fea38f8fc2cdc33e63c2f035ae392f402c7593ec07276ac0f5299f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9512a48d06614f91b5cd81c0b1e144cc2f1334aad2cfa98b0a2848e0523c0815 = $this->env->getExtension("native_profiler");
        $__internal_9512a48d06614f91b5cd81c0b1e144cc2f1334aad2cfa98b0a2848e0523c0815->enter($__internal_9512a48d06614f91b5cd81c0b1e144cc2f1334aad2cfa98b0a2848e0523c0815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9512a48d06614f91b5cd81c0b1e144cc2f1334aad2cfa98b0a2848e0523c0815->leave($__internal_9512a48d06614f91b5cd81c0b1e144cc2f1334aad2cfa98b0a2848e0523c0815_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_41ab755e8e376e14cd3b630db1ba41ed6fc6c959b9202263fa43263b77bb0a6b = $this->env->getExtension("native_profiler");
        $__internal_41ab755e8e376e14cd3b630db1ba41ed6fc6c959b9202263fa43263b77bb0a6b->enter($__internal_41ab755e8e376e14cd3b630db1ba41ed6fc6c959b9202263fa43263b77bb0a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_41ab755e8e376e14cd3b630db1ba41ed6fc6c959b9202263fa43263b77bb0a6b->leave($__internal_41ab755e8e376e14cd3b630db1ba41ed6fc6c959b9202263fa43263b77bb0a6b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
