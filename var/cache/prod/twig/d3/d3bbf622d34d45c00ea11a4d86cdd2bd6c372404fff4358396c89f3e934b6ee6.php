<?php

/* HeebaridataBundle::Simpleresult.html.twig */
class __TwigTemplate_33e168c2c51490a2e2e61bf92a125d69d82dfb4d598a791a3ff39d9e79e5f022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "HeebaridataBundle::Simpleresult.html.twig", 2);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'resultat' => array($this, 'block_resultat'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@template/result.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 6
    public function block_resultat($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 8
            echo "        <div class=\"row\">
             ";
            // line 9
            $context["add"] = "";
            // line 10
            echo "            ";
            if (((($context["key"] == "EconomicData") || ($context["key"] == "GDP")) || ($context["key"] == "NE"))) {
                // line 11
                echo "                ";
                $context["add"] = "USD";
                // line 12
                echo "            ";
            }
            echo "  
            ";
            // line 13
            if ((twig_length_filter($this->env, $context["item"]) == 2)) {
                // line 14
                echo "                    ";
                $context["class"] = "col-lg-6";
                // line 15
                echo "                ";
            } else {
                // line 16
                echo "                    ";
                $context["class"] = "col-lg-4";
                // line 17
                echo "                ";
            }
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
            foreach ($context['_seq'] as $context["ke"] => $context["data"]) {
                // line 19
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">
                    <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    ";
                // line 22
                $context["head"] = $context["key"];
                // line 23
                echo "                        ";
                if (($context["key"] == "NE")) {
                    // line 24
                    echo "                            ";
                    $context["head"] = "Export net";
                    // line 25
                    echo "                         ";
                }
                echo "  
                         ";
                // line 26
                if (((isset($context["head"]) ? $context["head"] : null) == "GDP")) {
                    // line 27
                    echo "                            ";
                    $context["head"] = "PIB";
                    // line 28
                    echo "                         ";
                }
                // line 29
                echo "                    <h5>";
                echo twig_escape_filter($this->env, (((($context["ke"] . " ") . (isset($context["head"]) ? $context["head"] : null)) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array())), "html", null, true);
                echo "</h5>
                </div>
                <div class=\"panel-body\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["data"]);
                foreach ($context['_seq'] as $context["field"] => $context["val"]) {
                    if ((($context["field"] != "dateOfInformation") && ($context["field"] != "1"))) {
                        // line 33
                        echo "                        ";
                        $context["champ"] = $context["field"];
                        // line 34
                        echo "                        ";
                        if (($context["field"] == "NE")) {
                            // line 35
                            echo "                            ";
                            $context["champ"] = "Export net";
                            // line 36
                            echo "                         ";
                        }
                        echo "  
                         ";
                        // line 37
                        if (($context["field"] == "GDP")) {
                            // line 38
                            echo "                            ";
                            $context["champ"] = "PIB";
                            // line 39
                            echo "                         ";
                        }
                        // line 40
                        echo "                    <p>";
                        echo twig_escape_filter($this->env, (((((isset($context["champ"]) ? $context["champ"] : null) . " : ") . $context["val"]) . " ") . (isset($context["add"]) ? $context["add"] : null)), "html", null, true);
                        echo "</p>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                </div>
            </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ke'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    
";
    }

    // line 50
    public function block_Script($context, array $blocks = array())
    {
        echo " 
    ";
        // line 51
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::Simpleresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 51,  171 => 50,  166 => 48,  159 => 46,  150 => 42,  140 => 40,  137 => 39,  134 => 38,  132 => 37,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  113 => 32,  106 => 29,  103 => 28,  100 => 27,  98 => 26,  93 => 25,  90 => 24,  87 => 23,  85 => 22,  78 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  54 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  38 => 7,  35 => 6,  30 => 3,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
/* {%block titre %}*/
/* {% endblock titre %}*/
/* */
/* {% block resultat %}*/
/*     {% for key,item in donnee %}*/
/*         <div class="row">*/
/*              {% set add = '' %}*/
/*             {% if  key == 'EconomicData' or key == 'GDP' or key == 'NE' %}*/
/*                 {% set add = 'USD' %}*/
/*             {% endif %}  */
/*             {% if item | length == 2%}*/
/*                     {% set class = "col-lg-6" %}*/
/*                 {% else%}*/
/*                     {% set class = "col-lg-4" %}*/
/*                 {% endif %}*/
/*             {% for ke , data in item %}*/
/*                 <div class="{{ class }}">*/
/*                     <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     {% set head  = key %}*/
/*                         {% if  key == 'NE'  %}*/
/*                             {% set head = 'Export net' %}*/
/*                          {% endif %}  */
/*                          {% if  head == 'GDP'  %}*/
/*                             {% set head = 'PIB' %}*/
/*                          {% endif %}*/
/*                     <h5>{{ ke ~" "~head~" "~data.dateOfInformation }}</h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% for field , val in data if field != 'dateOfInformation' and field != '1' %}*/
/*                         {% set champ  = field %}*/
/*                         {% if  field == 'NE'  %}*/
/*                             {% set champ = 'Export net' %}*/
/*                          {% endif %}  */
/*                          {% if  field == 'GDP'  %}*/
/*                             {% set champ = 'PIB' %}*/
/*                          {% endif %}*/
/*                     <p>{{champ~" : "~val~" "~add}}</p>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/*     */
/* {% endblock resultat %}*/
/* {% block Script %} */
/*     {{ parent() }}*/
/* {% endblock Script %}*/
/* */
/* */
