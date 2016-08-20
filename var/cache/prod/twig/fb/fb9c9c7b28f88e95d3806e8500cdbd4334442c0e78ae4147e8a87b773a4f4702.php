<?php

/* HeebaridataBundle::onecountryGraphe.html.twig */
class __TwigTemplate_f04f50986844480dbb0d8dc0264a0137a3b1c15d57e9ea3d2d31f2b6521548dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "HeebaridataBundle::onecountryGraphe.html.twig", 2);
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
        // line 8
        $context["type"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "Typechar"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "Typechar"), "method"), "L")) : ("L"));
        // line 9
        $context["graph"] = array();
        // line 10
        $context["simple"] = array();
        // line 11
        $context["break"] = false;
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["data"]) {
            // line 13
            if ($this->getAttribute($context["data"], 1, array(), "any", true, true)) {
                // line 14
                $context["graph"] = twig_array_merge((isset($context["graph"]) ? $context["graph"] : null), array(0 => $context["key"], 1 => $context["data"]));
            } else {
                // line 16
                $context["simple"] = twig_array_merge((isset($context["simple"]) ? $context["simple"] : null), array(0 => $context["key"], 1 => $context["data"]));
            }
            // line 18
            $context["break"] = false;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 20
    public function block_resultat($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ( !twig_test_empty((isset($context["simple"]) ? $context["simple"] : null))) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["simple"]) ? $context["simple"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 23
                    echo "            <div class=\"row\">
                ";
                    // line 24
                    $context["add"] = "";
                    // line 25
                    echo "                ";
                    if (((($context["item"] == "EconomicData") || ($context["item"] == "GDP")) || ($context["item"] == "NE"))) {
                        // line 26
                        echo "                    ";
                        $context["add"] = "USD";
                        // line 27
                        echo "                ";
                    }
                    echo "  
                ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["simple"]) ? $context["simple"] : null), ($context["key"] + 1), array(), "array"));
                    foreach ($context['_seq'] as $context["ke"] => $context["data"]) {
                        // line 29
                        echo "                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                ";
                        // line 31
                        $context["head"] = $context["item"];
                        // line 32
                        echo "                                ";
                        if (($context["item"] == "NE")) {
                            // line 33
                            echo "                                    ";
                            $context["head"] = "Export net";
                            // line 34
                            echo "                                ";
                        }
                        echo "  
                                ";
                        // line 35
                        if (((isset($context["head"]) ? $context["head"] : null) == "GDP")) {
                            // line 36
                            echo "                                    ";
                            $context["head"] = "PIB";
                            // line 37
                            echo "                                ";
                        }
                        // line 38
                        echo "                                <h5>";
                        echo twig_escape_filter($this->env, (((((isset($context["pays"]) ? $context["pays"] : null) . " ") . (isset($context["head"]) ? $context["head"] : null)) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array())), "html", null, true);
                        echo "</h5>
                            </div>
                            <div class=\"panel-body\">
                                ";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["data"]);
                        foreach ($context['_seq'] as $context["field"] => $context["val"]) {
                            if ((($context["field"] != "dateOfInformation") && ($context["field"] != "1"))) {
                                // line 42
                                echo "                                    ";
                                $context["champ"] = $context["field"];
                                // line 43
                                echo "                                    ";
                                if (($context["field"] == "NE")) {
                                    // line 44
                                    echo "                                        ";
                                    $context["champ"] = "Export net";
                                    // line 45
                                    echo "                                    ";
                                }
                                echo "  
                                    ";
                                // line 46
                                if (($context["field"] == "GDP")) {
                                    // line 47
                                    echo "                                        ";
                                    $context["champ"] = "PIB";
                                    // line 48
                                    echo "                                    ";
                                }
                                // line 49
                                echo "                                    <p>";
                                echo twig_escape_filter($this->env, (((((isset($context["champ"]) ? $context["champ"] : null) . " : ") . $context["val"]) . " ") . (isset($context["add"]) ? $context["add"] : null)), "html", null, true);
                                echo "</p>
                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "                            </div>
                        </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['ke'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
        }
        echo " 
    ";
        // line 57
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : null))) {
            // line 58
            echo "        ";
            $context["break"] = false;
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 60
                    echo "            ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : null), ($context["key"] + 1), array(), "array");
                    // line 61
                    echo "            <div class=\"row\">
                ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["element"]) ? $context["element"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : null)) {
                            // line 63
                            echo "                    <div class=\"well\">
                        ";
                            // line 64
                            $context["head"] = $context["item"];
                            // line 65
                            echo "                        ";
                            if (((isset($context["head"]) ? $context["head"] : null) == "NE")) {
                                // line 66
                                echo "                            ";
                                $context["head"] = "Export net";
                                // line 67
                                echo "                        ";
                            }
                            echo "  
                        ";
                            // line 68
                            if (((isset($context["head"]) ? $context["head"] : null) == "GDP")) {
                                // line 69
                                echo "                            ";
                                $context["head"] = "PIB";
                                // line 70
                                echo "                        ";
                            }
                            // line 71
                            echo "                        <h4>Evolution ";
                            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
                            echo "</h4>
                        <div id=\"";
                            // line 72
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "\" style=\"height: 250px;\"></div>
                    </div>
                    ";
                            // line 74
                            $context["break"] = true;
                            // line 75
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "               
            </div>
             ";
                    // line 78
                    $context["break"] = false;
                    // line 79
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    ";
        }
        echo " 

";
    }

    // line 83
    public function block_Script($context, array $blocks = array())
    {
        echo " 
    ";
        // line 84
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 85
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("js/56759a0_morris.min_1.js");
            // line 87
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "56759a0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_1") : $this->env->getExtension('asset')->getAssetUrl("js/56759a0_raphael-min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "56759a0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0") : $this->env->getExtension('asset')->getAssetUrl("js/56759a0.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 89
        echo "    <script>
        ";
        // line 90
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : null))) {
            // line 91
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 92
                    echo "                ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : null), ($context["key"] + 1), array(), "array");
                    // line 93
                    echo "                ";
                    if ((((isset($context["type"]) ? $context["type"] : null) == "L") || ((isset($context["type"]) ? $context["type"] : null) == "D"))) {
                        // line 94
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineFilter((isset($context["element"]) ? $context["element"] : null));
                        // line 95
                        echo "                        ";
                        $context["ordo"] = array();
                        // line 96
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 97
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : null), array(0 => $context["key"]));
                                // line 98
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        echo "                        dessineMany(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : null));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo " , 'L')
                ";
                    }
                    // line 101
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "B")) {
                        // line 102
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineFilter((isset($context["element"]) ? $context["element"] : null));
                        // line 103
                        echo "                        ";
                        $context["ordo"] = array();
                        // line 104
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 105
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : null), array(0 => $context["key"]));
                                // line 106
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "                        dessinebardeux(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : null));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo ")
                ";
                    }
                    // line 109
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "              
              
        ";
        }
        // line 113
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::onecountryGraphe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 113,  394 => 110,  387 => 109,  377 => 107,  370 => 106,  367 => 105,  361 => 104,  358 => 103,  355 => 102,  352 => 101,  342 => 99,  335 => 98,  332 => 97,  326 => 96,  323 => 95,  320 => 94,  317 => 93,  314 => 92,  308 => 91,  306 => 90,  303 => 89,  283 => 87,  279 => 85,  275 => 84,  270 => 83,  262 => 80,  255 => 79,  253 => 78,  249 => 76,  242 => 75,  240 => 74,  235 => 72,  230 => 71,  227 => 70,  224 => 69,  222 => 68,  217 => 67,  214 => 66,  211 => 65,  209 => 64,  206 => 63,  201 => 62,  198 => 61,  195 => 60,  189 => 59,  186 => 58,  184 => 57,  179 => 56,  171 => 54,  163 => 51,  153 => 49,  150 => 48,  147 => 47,  145 => 46,  140 => 45,  137 => 44,  134 => 43,  131 => 42,  126 => 41,  119 => 38,  116 => 37,  113 => 36,  111 => 35,  106 => 34,  103 => 33,  100 => 32,  98 => 31,  94 => 29,  90 => 28,  85 => 27,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  68 => 22,  65 => 21,  62 => 20,  57 => 3,  53 => 2,  47 => 18,  44 => 16,  41 => 14,  39 => 13,  35 => 12,  33 => 11,  31 => 10,  29 => 9,  27 => 8,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
/* {%block titre %}*/
/* {% endblock titre %}*/
/* */
/* */
/* */
/* {% set type = app.session.get('Typechar') | default("L")%}*/
/*     {% set graph = []%}*/
/*     {% set simple = []  %}*/
/*     {% set break = false %}*/
/*     {% for key,data in donnee %}*/
/*             {% if data.1 is defined  %}*/
/*                 {% set graph =  graph|merge([key , data])%}*/
/*             {% else %}*/
/*                 {% set simple = simple|merge([key , data])  %}*/
/*             {% endif %}*/
/*         {% set break = false %}*/
/*     {% endfor %}*/
/* {% block resultat %}*/
/*     {% if simple is not empty %}*/
/*         {% for key,item in simple if key is even %}*/
/*             <div class="row">*/
/*                 {% set add = '' %}*/
/*                 {% if  item == 'EconomicData' or item == 'GDP' or item == 'NE' %}*/
/*                     {% set add = 'USD' %}*/
/*                 {% endif %}  */
/*                 {% for ke , data in simple[key + 1] %}*/
/*                         <div class="panel panel-primary">*/
/*                             <div class="panel-heading">*/
/*                                 {% set head  = item %}*/
/*                                 {% if  item == 'NE'  %}*/
/*                                     {% set head = 'Export net' %}*/
/*                                 {% endif %}  */
/*                                 {% if  head == 'GDP'  %}*/
/*                                     {% set head = 'PIB' %}*/
/*                                 {% endif %}*/
/*                                 <h5>{{ pays ~" "~head~" "~data.dateOfInformation }}</h5>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 {% for field , val in data if field != 'dateOfInformation' and field != '1' %}*/
/*                                     {% set champ  = field %}*/
/*                                     {% if  field == 'NE'  %}*/
/*                                         {% set champ = 'Export net' %}*/
/*                                     {% endif %}  */
/*                                     {% if  field == 'GDP'  %}*/
/*                                         {% set champ = 'PIB' %}*/
/*                                     {% endif %}*/
/*                                     <p>{{champ~" : "~val~" "~add}}</p>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %} */
/*     {% if graph is not empty %}*/
/*         {% set break = false %}*/
/*         {% for key,item in graph if key is even %}*/
/*             {% set element =  graph[key + 1]%}*/
/*             <div class="row">*/
/*                 {% for data in element if not break %}*/
/*                     <div class="well">*/
/*                         {% set head  = item %}*/
/*                         {% if  head == 'NE'  %}*/
/*                             {% set head = 'Export net' %}*/
/*                         {% endif %}  */
/*                         {% if  head == 'GDP'  %}*/
/*                             {% set head = 'PIB' %}*/
/*                         {% endif %}*/
/*                         <h4>Evolution {{ head }}</h4>*/
/*                         <div id="{{item}}" style="height: 250px;"></div>*/
/*                     </div>*/
/*                     {% set break = true %}*/
/*                 {% endfor %}*/
/*                */
/*             </div>*/
/*              {% set break = false %}*/
/*         {% endfor %}*/
/*     {% endif %} */
/* */
/* {% endblock resultat %}*/
/* {% block Script %} */
/*     {{ parent() }}*/
/*     {% javascripts 'bundles/Heebaridata/Script/morrisjs/morris.min.js'*/
/*                     'bundles/Heebaridata/Script/raphael/raphael-min.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script>*/
/*         {% if graph is not empty %}*/
/*             {% for key,item in graph if key is even %}*/
/*                 {% set element =  graph[ key + 1]%}*/
/*                 {% if type == 'L' or  type == 'D' %}*/
/*                     {% set data = element | Line %}*/
/*                         {% set ordo =  [] %}*/
/*                    {% for key in data[0]|keys if key != "dateOfInformation" %}*/
/*                         {% set ordo = ordo|merge([key]) %}*/
/*                     {% endfor %}*/
/*                         dessineMany("{{data|json_encode()}}", 'dateOfInformation',{{ ordo |json_encode()|raw }} , {{item}} , 'L')*/
/*                 {% endif %}*/
/*                 {% if type == 'B' %}*/
/*                     {% set data = element | Line %}*/
/*                         {% set ordo =  [] %}*/
/*                    {% for key in data[0]|keys if key != "dateOfInformation" %}*/
/*                         {% set ordo = ordo|merge([key]) %}*/
/*                     {% endfor %}*/
/*                         dessinebardeux("{{data|json_encode()}}", 'dateOfInformation',{{ ordo |json_encode()|raw }} , {{item}})*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*               */
/*               */
/*         {% endif %}*/
/*     </script>*/
/* {% endblock Script %}              */
/*  */
/*    */
/*         */
