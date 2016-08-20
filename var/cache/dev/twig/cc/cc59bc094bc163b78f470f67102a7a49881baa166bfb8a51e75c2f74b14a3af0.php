<?php

/* HeebaridataBundle:index:layout.html.twig */
class __TwigTemplate_d8414d6a89ea95b342c5fe5c54a7a381ea4992bfbf8091d49dc7f7e9a5c9f453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/Template.html.twig", "HeebaridataBundle:index:layout.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@template/Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecf561871ebeb4db9be4500f3ef4d8c46ef6f60202b2089c39803590428f5d02 = $this->env->getExtension("native_profiler");
        $__internal_ecf561871ebeb4db9be4500f3ef4d8c46ef6f60202b2089c39803590428f5d02->enter($__internal_ecf561871ebeb4db9be4500f3ef4d8c46ef6f60202b2089c39803590428f5d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeebaridataBundle:index:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf561871ebeb4db9be4500f3ef4d8c46ef6f60202b2089c39803590428f5d02->leave($__internal_ecf561871ebeb4db9be4500f3ef4d8c46ef6f60202b2089c39803590428f5d02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6f2a2b45ced2d79ba07d4846e68f4b09650b9d10cd9cd4eb88f4aee8eebdb6a = $this->env->getExtension("native_profiler");
        $__internal_f6f2a2b45ced2d79ba07d4846e68f4b09650b9d10cd9cd4eb88f4aee8eebdb6a->enter($__internal_f6f2a2b45ced2d79ba07d4846e68f4b09650b9d10cd9cd4eb88f4aee8eebdb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <h4>bonjour ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</h4>

    <div class=\"row\">
        <h5>paramètres globales</h5>  
        <h7> pour toutes les requêtes vous pouvez afficher:</h7>  

        <ul>
            <li>Un ou plusieurs pays :  <a class=\"lien\">nigeria</a>,<a class=\"lien\">cameroun  et nigeria</a></li>
            <li>Un ou plusieurs pays avec a une date precise :  <a class=\"lien\">cameroun en 1994</a> , <a class=\"lien\">cameroun et senegal ect en 1994</a></li>
            <li>Un ou plusieurs pays avec a un intervalle de date :  <a class=\"lien\">cameroun en de 1994 a 2015</a> </li>
        </ul>    
    </div>
    <div class=\"row\">
        <h5>Requêtes précises</h5>   
        <ul>
            <li>Un ou plusieurs pays avec une ou plusieurs valeurs à afficher:  
                <a class=\"lien\">cameroun inflation...</a>,<a class=\"lien\">inflation au nigeria et au  senegal  </a></li>
            <li>pareil avec une date ou des intervale de date </li>
        </ul>    
    </div>
    <div class=\"row\">
        <h5>Requêtes calculées</h5>   
        vous pouvez utiliser le mot clé \"per\" pour representer l'evolution d'une variable par rapport a une autre par exemple :
        <a class=\"lien\">cameroun pib per population...</a>
    </div>
    <br>
    <br>
    <div class=\"row\">
        <h5>Voici une liste non exhaustive des mot clef utilisable </h5>   
        <ul>
            <div class=\"col-lg-3\">
                ";
        // line 37
        $context["a"] = 0;
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 39
            echo "                    ";
            if (((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) < 6)) {
                // line 40
                echo "                        ";
                if (($context["key"] == "ge")) {
                    // line 41
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " : Government Expenditures</li>
                            ";
                } else {
                    // line 43
                    echo "                            ";
                    if (($context["key"] == "ne")) {
                        // line 44
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo " : Net Exports</li>
                            ";
                    } else {
                        // line 46
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</li>
                            ";
                    }
                    // line 48
                    echo "                            ";
                }
                // line 49
                echo "                            ";
                $context["a"] = ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + 1);
                // line 50
                echo "                        ";
            } else {
                // line 51
                echo "                    </div>
                    <div class=\"col-lg-3\">
                        ";
                // line 53
                $context["a"] = 0;
                // line 54
                echo "                    ";
            }
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
        </ul>
    </div>



";
        
        $__internal_f6f2a2b45ced2d79ba07d4846e68f4b09650b9d10cd9cd4eb88f4aee8eebdb6a->leave($__internal_f6f2a2b45ced2d79ba07d4846e68f4b09650b9d10cd9cd4eb88f4aee8eebdb6a_prof);

    }

    // line 64
    public function block_Script($context, array $blocks = array())
    {
        $__internal_9809cc932ee0e88592f2196eb7ba748246112f4d6622a10423167731bf50cb5c = $this->env->getExtension("native_profiler");
        $__internal_9809cc932ee0e88592f2196eb7ba748246112f4d6622a10423167731bf50cb5c->enter($__internal_9809cc932ee0e88592f2196eb7ba748246112f4d6622a10423167731bf50cb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo " 
    ";
        // line 65
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    <script>
        \$(\".lien\").click(function (ev) {
            var url = ev.currentTarget.innerHTML
            \$(\"#seach\").val(url);
            \$(\"#send\").trigger(\"click\");
        });

    </script>
";
        
        $__internal_9809cc932ee0e88592f2196eb7ba748246112f4d6622a10423167731bf50cb5c->leave($__internal_9809cc932ee0e88592f2196eb7ba748246112f4d6622a10423167731bf50cb5c_prof);

    }

    public function getTemplateName()
    {
        return "HeebaridataBundle:index:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  149 => 64,  136 => 56,  130 => 55,  127 => 54,  125 => 53,  121 => 51,  118 => 50,  115 => 49,  112 => 48,  106 => 46,  100 => 44,  97 => 43,  91 => 41,  88 => 40,  85 => 39,  80 => 38,  78 => 37,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/layout.html.twig #}*/
/* {% extends "@template/Template.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <h4>bonjour {{ app.user }}</h4>*/
/* */
/*     <div class="row">*/
/*         <h5>paramètres globales</h5>  */
/*         <h7> pour toutes les requêtes vous pouvez afficher:</h7>  */
/* */
/*         <ul>*/
/*             <li>Un ou plusieurs pays :  <a class="lien">nigeria</a>,<a class="lien">cameroun  et nigeria</a></li>*/
/*             <li>Un ou plusieurs pays avec a une date precise :  <a class="lien">cameroun en 1994</a> , <a class="lien">cameroun et senegal ect en 1994</a></li>*/
/*             <li>Un ou plusieurs pays avec a un intervalle de date :  <a class="lien">cameroun en de 1994 a 2015</a> </li>*/
/*         </ul>    */
/*     </div>*/
/*     <div class="row">*/
/*         <h5>Requêtes précises</h5>   */
/*         <ul>*/
/*             <li>Un ou plusieurs pays avec une ou plusieurs valeurs à afficher:  */
/*                 <a class="lien">cameroun inflation...</a>,<a class="lien">inflation au nigeria et au  senegal  </a></li>*/
/*             <li>pareil avec une date ou des intervale de date </li>*/
/*         </ul>    */
/*     </div>*/
/*     <div class="row">*/
/*         <h5>Requêtes calculées</h5>   */
/*         vous pouvez utiliser le mot clé "per" pour representer l'evolution d'une variable par rapport a une autre par exemple :*/
/*         <a class="lien">cameroun pib per population...</a>*/
/*     </div>*/
/*     <br>*/
/*     <br>*/
/*     <div class="row">*/
/*         <h5>Voici une liste non exhaustive des mot clef utilisable </h5>   */
/*         <ul>*/
/*             <div class="col-lg-3">*/
/*                 {% set a = 0 %}*/
/*                 {% for key in liste|keys %}*/
/*                     {% if a < 6 %}*/
/*                         {% if key == 'ge' %}*/
/*                             <li>{{ key }} : Government Expenditures</li>*/
/*                             {% else %}*/
/*                             {% if key == 'ne' %}*/
/*                             <li>{{ key }} : Net Exports</li>*/
/*                             {% else %}*/
/*                             <li>{{ key }}</li>*/
/*                             {% endif %}*/
/*                             {% endif %}*/
/*                             {% set a = a + 1%}*/
/*                         {%else%}*/
/*                     </div>*/
/*                     <div class="col-lg-3">*/
/*                         {% set a = 0%}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </ul>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock content %}*/
/* */
/* {% block Script %} */
/*     {{parent()}}*/
/*     <script>*/
/*         $(".lien").click(function (ev) {*/
/*             var url = ev.currentTarget.innerHTML*/
/*             $("#seach").val(url);*/
/*             $("#send").trigger("click");*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock Script %}*/
