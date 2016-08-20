<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c645fb4541516eb54d986f03c249eaf5c8a0c1c30aabbcae07fb3dcb1887422f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b1f26ee4155361a53cd22d1c26367c80acdb0521c080fdecb4e106b7fc750cf1 = $this->env->getExtension("native_profiler");
        $__internal_b1f26ee4155361a53cd22d1c26367c80acdb0521c080fdecb4e106b7fc750cf1->enter($__internal_b1f26ee4155361a53cd22d1c26367c80acdb0521c080fdecb4e106b7fc750cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f26ee4155361a53cd22d1c26367c80acdb0521c080fdecb4e106b7fc750cf1->leave($__internal_b1f26ee4155361a53cd22d1c26367c80acdb0521c080fdecb4e106b7fc750cf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d5a227f46eef246a624f9159ede6936a118a2d012abe31c814daa9e451ca331 = $this->env->getExtension("native_profiler");
        $__internal_1d5a227f46eef246a624f9159ede6936a118a2d012abe31c814daa9e451ca331->enter($__internal_1d5a227f46eef246a624f9159ede6936a118a2d012abe31c814daa9e451ca331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d5a227f46eef246a624f9159ede6936a118a2d012abe31c814daa9e451ca331->leave($__internal_1d5a227f46eef246a624f9159ede6936a118a2d012abe31c814daa9e451ca331_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_feff2a635b9875e1e3f7f3ffec05d95aca9b2b7c2aa95af8a0deb80545470395 = $this->env->getExtension("native_profiler");
        $__internal_feff2a635b9875e1e3f7f3ffec05d95aca9b2b7c2aa95af8a0deb80545470395->enter($__internal_feff2a635b9875e1e3f7f3ffec05d95aca9b2b7c2aa95af8a0deb80545470395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_feff2a635b9875e1e3f7f3ffec05d95aca9b2b7c2aa95af8a0deb80545470395->leave($__internal_feff2a635b9875e1e3f7f3ffec05d95aca9b2b7c2aa95af8a0deb80545470395_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
