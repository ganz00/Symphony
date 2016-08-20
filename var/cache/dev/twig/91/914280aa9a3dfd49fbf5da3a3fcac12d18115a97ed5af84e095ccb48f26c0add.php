<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_27ef4935f70b5247d2298646a11c000182e22b3d7e61b9e69c47711a734f9a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ce23aac3f5416cbe8b0123c8be68d07140af8abbe1686d643497849630d882c = $this->env->getExtension("native_profiler");
        $__internal_8ce23aac3f5416cbe8b0123c8be68d07140af8abbe1686d643497849630d882c->enter($__internal_8ce23aac3f5416cbe8b0123c8be68d07140af8abbe1686d643497849630d882c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce23aac3f5416cbe8b0123c8be68d07140af8abbe1686d643497849630d882c->leave($__internal_8ce23aac3f5416cbe8b0123c8be68d07140af8abbe1686d643497849630d882c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90c0f6c85488136a65e4bc131a227e549c333df455a2e2bd431d21e1921bf23a = $this->env->getExtension("native_profiler");
        $__internal_90c0f6c85488136a65e4bc131a227e549c333df455a2e2bd431d21e1921bf23a->enter($__internal_90c0f6c85488136a65e4bc131a227e549c333df455a2e2bd431d21e1921bf23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90c0f6c85488136a65e4bc131a227e549c333df455a2e2bd431d21e1921bf23a->leave($__internal_90c0f6c85488136a65e4bc131a227e549c333df455a2e2bd431d21e1921bf23a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d6182967c0fb2697e37e5924042b7605d050a365ea039157135d65cfe920997 = $this->env->getExtension("native_profiler");
        $__internal_8d6182967c0fb2697e37e5924042b7605d050a365ea039157135d65cfe920997->enter($__internal_8d6182967c0fb2697e37e5924042b7605d050a365ea039157135d65cfe920997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d6182967c0fb2697e37e5924042b7605d050a365ea039157135d65cfe920997->leave($__internal_8d6182967c0fb2697e37e5924042b7605d050a365ea039157135d65cfe920997_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_af775dea10b805eadabf02ecb75e84ceb72fd372f2200d5526a4be210d64c6d5 = $this->env->getExtension("native_profiler");
        $__internal_af775dea10b805eadabf02ecb75e84ceb72fd372f2200d5526a4be210d64c6d5->enter($__internal_af775dea10b805eadabf02ecb75e84ceb72fd372f2200d5526a4be210d64c6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_af775dea10b805eadabf02ecb75e84ceb72fd372f2200d5526a4be210d64c6d5->leave($__internal_af775dea10b805eadabf02ecb75e84ceb72fd372f2200d5526a4be210d64c6d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
