<?php

/* HeebaridataBundle::Crossgraphe.html.twig */
class __TwigTemplate_7835c0bd170d39fbbcfbe2d3319542166a2516dd6bfccd986897dafeb15939ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "HeebaridataBundle::Crossgraphe.html.twig", 2);
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
        // line 6
        $context["type"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "Typechar"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "Typechar"), "method"), "L")) : ("L"));
        // line 7
        $context["graph"] = array();
        // line 8
        $context["simple"] = array();
        // line 9
        $context["break"] = false;
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["data"]) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["country"] => $context["val"]) {
                if ( !(isset($context["break"]) ? $context["break"] : null)) {
                    // line 12
                    if ($this->getAttribute($context["val"], 0, array(), "any", true, true)) {
                        // line 13
                        $context["graph"] = twig_array_merge((isset($context["graph"]) ? $context["graph"] : null), array(0 => $context["key"], 1 => $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), $context["key"], array(), "array")));
                        // line 14
                        $context["break"] = true;
                    } else {
                        // line 16
                        $context["simple"] = twig_array_merge((isset($context["simple"]) ? $context["simple"] : null), array(0 => $context["key"], 1 => $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), $context["key"], array(), "array")));
                        // line 17
                        $context["break"] = true;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['country'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
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

    // line 22
    public function block_resultat($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if ( !twig_test_empty((isset($context["simple"]) ? $context["simple"] : null))) {
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["simple"]) ? $context["simple"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 25
                    echo "            <div class=\"row\">
                ";
                    // line 26
                    $context["add"] = "";
                    // line 27
                    echo "                ";
                    if (((($context["item"] == "EconomicData") || ($context["item"] == "GDP")) || ($context["item"] == "NE"))) {
                        // line 28
                        echo "                    ";
                        $context["add"] = "USD";
                        // line 29
                        echo "                ";
                    }
                    echo "  
                ";
                    // line 30
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["simple"]) ? $context["simple"] : null), ($context["key"] + 1), array(), "array")) == 2)) {
                        // line 31
                        echo "                    ";
                        $context["class"] = "col-lg-6";
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["class"] = "col-lg-4";
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["simple"]) ? $context["simple"] : null), ($context["key"] + 1), array(), "array"));
                    foreach ($context['_seq'] as $context["ke"] => $context["data"]) {
                        // line 36
                        echo "                    <div class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                        echo "\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                ";
                        // line 39
                        $context["head"] = $context["item"];
                        // line 40
                        echo "                                ";
                        if (($context["item"] == "NE")) {
                            // line 41
                            echo "                                    ";
                            $context["head"] = "Export net";
                            // line 42
                            echo "                                ";
                        }
                        echo "  
                                ";
                        // line 43
                        if (((isset($context["head"]) ? $context["head"] : null) == "GDP")) {
                            // line 44
                            echo "                                    ";
                            $context["head"] = "PIB";
                            // line 45
                            echo "                                ";
                        }
                        // line 46
                        echo "                                <h5>";
                        echo twig_escape_filter($this->env, (((($context["ke"] . " ") . (isset($context["head"]) ? $context["head"] : null)) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array())), "html", null, true);
                        echo "</h5>
                            </div>
                            <div class=\"panel-body\">
                                ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["data"]);
                        foreach ($context['_seq'] as $context["field"] => $context["val"]) {
                            if ((($context["field"] != "dateOfInformation") && ($context["field"] != "1"))) {
                                // line 50
                                echo "                                    ";
                                $context["champ"] = $context["field"];
                                // line 51
                                echo "                                    ";
                                if (($context["field"] == "NE")) {
                                    // line 52
                                    echo "                                        ";
                                    $context["champ"] = "Export net";
                                    // line 53
                                    echo "                                    ";
                                }
                                echo "  
                                    ";
                                // line 54
                                if (($context["field"] == "GDP")) {
                                    // line 55
                                    echo "                                        ";
                                    $context["champ"] = "PIB";
                                    // line 56
                                    echo "                                    ";
                                }
                                // line 57
                                echo "                                    <p>";
                                echo twig_escape_filter($this->env, (((((isset($context["champ"]) ? $context["champ"] : null) . " : ") . $context["val"]) . " ") . (isset($context["add"]) ? $context["add"] : null)), "html", null, true);
                                echo "</p>
                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "                            </div>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['ke'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        }
        echo " 

    ";
        // line 67
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : null))) {
            // line 68
            echo "        ";
            $context["break"] = false;
            // line 69
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 70
                    echo "            ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : null), ($context["key"] + 1), array(), "array");
                    // line 71
                    echo "            <div class=\"row\">
                ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["element"]) ? $context["element"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : null)) {
                            // line 73
                            echo "                    <div class=\"well\">
                        ";
                            // line 74
                            $context["head"] = $context["item"];
                            // line 75
                            echo "                        ";
                            if (((isset($context["head"]) ? $context["head"] : null) == "NE")) {
                                // line 76
                                echo "                            ";
                                $context["head"] = "Export net";
                                // line 77
                                echo "                        ";
                            }
                            echo "  
                        ";
                            // line 78
                            if (((isset($context["head"]) ? $context["head"] : null) == "GDP")) {
                                // line 79
                                echo "                            ";
                                $context["head"] = "PIB";
                                // line 80
                                echo "                        ";
                            }
                            // line 81
                            echo "                        <h4>Evolution ";
                            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
                            echo "</h4>
                        <div id=\"";
                            // line 82
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "\" style=\"height: 250px;\"></div>
                    </div>
                    ";
                            // line 84
                            $context["break"] = true;
                            // line 85
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "            </div>
            ";
                    // line 87
                    $context["break"] = false;
                    // line 88
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        
    ";
        }
        // line 90
        echo " 

";
    }

    // line 93
    public function block_Script($context, array $blocks = array())
    {
        echo " 
    ";
        // line 94
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 95
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("js/56759a0_morris.min_1.js");
            // line 97
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
        // line 99
        echo "    <script>
        ";
        // line 100
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : null))) {
            // line 101
            echo "            ";
            $context["pays"] = array();
            // line 102
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["graph"]) ? $context["graph"] : null), 1, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 103
                echo "                ";
                $context["pays"] = twig_array_merge((isset($context["pays"]) ? $context["pays"] : null), array(0 => $context["key"]));
                // line 104
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 106
                    echo "                ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : null), ($context["key"] + 1), array(), "array");
                    // line 107
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "L")) {
                        // line 108
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineCrossFilter((isset($context["element"]) ? $context["element"] : null));
                        // line 109
                        echo "
                        ";
                        // line 110
                        $context["ordo"] = array();
                        // line 111
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 112
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : null), array(0 => $context["key"]));
                                // line 113
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        echo "                        dessineMany(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : null));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo " , 'L')
                ";
                    }
                    // line 116
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "B")) {
                        // line 117
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineCrossFilter((isset($context["element"]) ? $context["element"] : null));
                        // line 118
                        echo "                        ";
                        $context["ordo"] = array();
                        // line 119
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 120
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : null), array(0 => $context["key"]));
                                // line 121
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 122
                        echo "                        dessinebardeux(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : null));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo ")
                ";
                    }
                    // line 124
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "D")) {
                        // line 125
                        echo "                    
                ";
                    }
                    // line 127
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "              
              
        ";
        }
        // line 131
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::Crossgraphe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 131,  455 => 128,  448 => 127,  444 => 125,  441 => 124,  431 => 122,  424 => 121,  421 => 120,  415 => 119,  412 => 118,  409 => 117,  406 => 116,  396 => 114,  389 => 113,  386 => 112,  380 => 111,  378 => 110,  375 => 109,  372 => 108,  369 => 107,  366 => 106,  360 => 105,  354 => 104,  351 => 103,  346 => 102,  343 => 101,  341 => 100,  338 => 99,  318 => 97,  314 => 95,  310 => 94,  305 => 93,  299 => 90,  295 => 89,  288 => 88,  286 => 87,  283 => 86,  276 => 85,  274 => 84,  269 => 82,  264 => 81,  261 => 80,  258 => 79,  256 => 78,  251 => 77,  248 => 76,  245 => 75,  243 => 74,  240 => 73,  235 => 72,  232 => 71,  229 => 70,  223 => 69,  220 => 68,  218 => 67,  212 => 65,  204 => 63,  195 => 59,  185 => 57,  182 => 56,  179 => 55,  177 => 54,  172 => 53,  169 => 52,  166 => 51,  163 => 50,  158 => 49,  151 => 46,  148 => 45,  145 => 44,  143 => 43,  138 => 42,  135 => 41,  132 => 40,  130 => 39,  123 => 36,  118 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  104 => 30,  99 => 29,  96 => 28,  93 => 27,  91 => 26,  88 => 25,  82 => 24,  79 => 23,  76 => 22,  71 => 3,  67 => 2,  61 => 20,  53 => 17,  51 => 16,  48 => 14,  46 => 13,  44 => 12,  39 => 11,  35 => 10,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
/* {%block titre %}*/
/* {% endblock titre %}*/
/* */
/* {% set type = app.session.get('Typechar') | default("L")%}*/
/*     {% set graph = []%}*/
/*     {% set simple = []  %}*/
/*     {% set break = false %}*/
/*     {% for key,data in donnee %}*/
/*         {% for country,val in data if not break %}*/
/*             {% if val.0 is defined  %}*/
/*                 {% set graph =  graph|merge([key , donnee[key]])%}*/
/*                 {% set break = true %}*/
/*             {% else %}*/
/*                 {% set simple = simple|merge([key , donnee[key]])  %}*/
/*                 {% set break = true %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
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
/*                 {% if simple[key + 1] | length == 2%}*/
/*                     {% set class = "col-lg-6" %}*/
/*                 {% else%}*/
/*                     {% set class = "col-lg-4" %}*/
/*                 {% endif %}*/
/*                 {% for ke , data in simple[key + 1] %}*/
/*                     <div class="{{ class }}">*/
/*                         <div class="panel panel-primary">*/
/*                             <div class="panel-heading">*/
/*                                 {% set head  = item %}*/
/*                                 {% if  item == 'NE'  %}*/
/*                                     {% set head = 'Export net' %}*/
/*                                 {% endif %}  */
/*                                 {% if  head == 'GDP'  %}*/
/*                                     {% set head = 'PIB' %}*/
/*                                 {% endif %}*/
/*                                 <h5>{{ ke ~" "~head~" "~data.dateOfInformation }}</h5>*/
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
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %} */
/* */
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
/*             </div>*/
/*             {% set break = false %}*/
/*         {% endfor %}*/
/*         */
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
/*             {% set pays = [] %}*/
/*             {% for key in graph[1]|keys %}*/
/*                 {% set pays = pays|merge([key]) %}*/
/*             {% endfor %}*/
/*             {% for key,item in graph if key is even %}*/
/*                 {% set element =  graph[key + 1]%}*/
/*                 {% if type == 'L' %}*/
/*                     {% set data = element | LineCross %}*/
/* */
/*                         {% set ordo =  [] %}*/
/*                    {% for key in data[0]|keys if key != "dateOfInformation" %}*/
/*                         {% set ordo = ordo|merge([key]) %}*/
/*                     {% endfor %}*/
/*                         dessineMany("{{data|json_encode()}}", 'dateOfInformation',{{ ordo |json_encode()|raw }} , {{item}} , 'L')*/
/*                 {% endif %}*/
/*                 {% if type == 'B' %}*/
/*                     {% set data = element | LineCross %}*/
/*                         {% set ordo =  [] %}*/
/*                    {% for key in data[0]|keys if key != "dateOfInformation" %}*/
/*                         {% set ordo = ordo|merge([key]) %}*/
/*                     {% endfor %}*/
/*                         dessinebardeux("{{data|json_encode()}}", 'dateOfInformation',{{ ordo |json_encode()|raw }} , {{item}})*/
/*                 {% endif %}*/
/*                 {% if type == 'D' %}*/
/*                     */
/*                 {% endif %}*/
/*             {% endfor %}*/
/*               */
/*               */
/*         {% endif %}*/
/*     </script>*/
/* {% endblock Script %}              */
