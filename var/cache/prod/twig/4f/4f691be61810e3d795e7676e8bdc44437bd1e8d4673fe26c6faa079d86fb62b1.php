<?php

/* HeebaridataBundle:index:layout.html.twig */
class __TwigTemplate_3a9e36bcbfad2b3004b50cfed2b853fd97db137bc2592e88462014c9c7ad6cc5 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <h4>bonjour ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["liste"]) ? $context["liste"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 39
            echo "                    ";
            if (((isset($context["a"]) ? $context["a"] : null) < 6)) {
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
                $context["a"] = ((isset($context["a"]) ? $context["a"] : null) + 1);
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
    }

    // line 64
    public function block_Script($context, array $blocks = array())
    {
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
        return array (  142 => 65,  137 => 64,  127 => 56,  121 => 55,  118 => 54,  116 => 53,  112 => 51,  109 => 50,  106 => 49,  103 => 48,  97 => 46,  91 => 44,  88 => 43,  82 => 41,  79 => 40,  76 => 39,  71 => 38,  69 => 37,  35 => 6,  32 => 5,  29 => 4,  11 => 2,);
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
