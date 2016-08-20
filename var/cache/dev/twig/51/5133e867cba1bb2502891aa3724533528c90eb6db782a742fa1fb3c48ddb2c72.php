<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_262263c7922bc83b470398a1a1d25b43025043a92157aab39674b3f3d651f368 extends Twig_Template
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
        $__internal_d9d248f14b1e32c3e572e9f7214b549203253b9e9324323b7d907ab617275280 = $this->env->getExtension("native_profiler");
        $__internal_d9d248f14b1e32c3e572e9f7214b549203253b9e9324323b7d907ab617275280->enter($__internal_d9d248f14b1e32c3e572e9f7214b549203253b9e9324323b7d907ab617275280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d9d248f14b1e32c3e572e9f7214b549203253b9e9324323b7d907ab617275280->leave($__internal_d9d248f14b1e32c3e572e9f7214b549203253b9e9324323b7d907ab617275280_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
