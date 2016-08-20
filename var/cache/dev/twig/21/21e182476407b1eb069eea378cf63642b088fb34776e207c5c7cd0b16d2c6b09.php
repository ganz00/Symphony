<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ddb98bb4c9e3703a5bc65b421150ca854dfc2498108f0897bfe90c15a3fd32c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4af8d67663640b2e400f87118af6ddcddd07406a1666624be5813b7c8ae1b709 = $this->env->getExtension("native_profiler");
        $__internal_4af8d67663640b2e400f87118af6ddcddd07406a1666624be5813b7c8ae1b709->enter($__internal_4af8d67663640b2e400f87118af6ddcddd07406a1666624be5813b7c8ae1b709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 18
            echo "                ";
            // line 19
            echo "            ";
        }
        // line 20
        echo "        </div>
        ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 24
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "        
                ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "           
    </body>
</html>
";
        
        $__internal_4af8d67663640b2e400f87118af6ddcddd07406a1666624be5813b7c8ae1b709->leave($__internal_4af8d67663640b2e400f87118af6ddcddd07406a1666624be5813b7c8ae1b709_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1762263836ba42e01525812189a0522ffeaffbdd71057f9ffc44b0095a1d69f3 = $this->env->getExtension("native_profiler");
        $__internal_1762263836ba42e01525812189a0522ffeaffbdd71057f9ffc44b0095a1d69f3->enter($__internal_1762263836ba42e01525812189a0522ffeaffbdd71057f9ffc44b0095a1d69f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/connection.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_1762263836ba42e01525812189a0522ffeaffbdd71057f9ffc44b0095a1d69f3->leave($__internal_1762263836ba42e01525812189a0522ffeaffbdd71057f9ffc44b0095a1d69f3_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c389a8b04b94490adb3df2220b5b67ed1aa2036ad194506c6b9318eeb6b8767 = $this->env->getExtension("native_profiler");
        $__internal_7c389a8b04b94490adb3df2220b5b67ed1aa2036ad194506c6b9318eeb6b8767->enter($__internal_7c389a8b04b94490adb3df2220b5b67ed1aa2036ad194506c6b9318eeb6b8767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "
                ";
        
        $__internal_7c389a8b04b94490adb3df2220b5b67ed1aa2036ad194506c6b9318eeb6b8767->leave($__internal_7c389a8b04b94490adb3df2220b5b67ed1aa2036ad194506c6b9318eeb6b8767_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  129 => 31,  118 => 6,  112 => 5,  102 => 34,  100 => 31,  97 => 30,  94 => 29,  88 => 28,  79 => 25,  74 => 24,  69 => 23,  64 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  48 => 15,  44 => 14,  39 => 13,  37 => 12,  32 => 9,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         {% block stylesheets %}*/
/*             <link  href="{{ asset('bundles/framework/css/connection.css') }}" rel="stylesheet"/>*/
/*             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 {#<a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}*/
/*             {% endif %}*/
/*         </div>*/
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         */
/*                 {% block fos_user_content %}*/
/* */
/*                 {% endblock fos_user_content %}*/
/*            */
/*     </body>*/
/* </html>*/
/* */
