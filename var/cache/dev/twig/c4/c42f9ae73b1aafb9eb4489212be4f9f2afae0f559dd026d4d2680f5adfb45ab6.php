<?php

/* HeebaridataBundle::onecountryGraphe.html.twig */
class __TwigTemplate_37fae4351674fb63d5327aa341bc7f00dda078b66b400b759195d20d616a3f7f extends Twig_Template
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
        $__internal_0d014287c1d34f9eef7a2313f7e5db8ca929c76ecc7ed435367e938dc8368e09 = $this->env->getExtension("native_profiler");
        $__internal_0d014287c1d34f9eef7a2313f7e5db8ca929c76ecc7ed435367e938dc8368e09->enter($__internal_0d014287c1d34f9eef7a2313f7e5db8ca929c76ecc7ed435367e938dc8368e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeebaridataBundle::onecountryGraphe.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["key"] => $context["data"]) {
            // line 13
            if ($this->getAttribute($context["data"], 1, array(), "any", true, true)) {
                // line 14
                $context["graph"] = twig_array_merge((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), array(0 => $context["key"], 1 => $context["data"]));
            } else {
                // line 16
                $context["simple"] = twig_array_merge((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")), array(0 => $context["key"], 1 => $context["data"]));
            }
            // line 18
            $context["break"] = false;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d014287c1d34f9eef7a2313f7e5db8ca929c76ecc7ed435367e938dc8368e09->leave($__internal_0d014287c1d34f9eef7a2313f7e5db8ca929c76ecc7ed435367e938dc8368e09_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_fc787b01b65b6f9dba927f08987006c713df3c58f69b99d31e7757b09656d844 = $this->env->getExtension("native_profiler");
        $__internal_fc787b01b65b6f9dba927f08987006c713df3c58f69b99d31e7757b09656d844->enter($__internal_fc787b01b65b6f9dba927f08987006c713df3c58f69b99d31e7757b09656d844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_fc787b01b65b6f9dba927f08987006c713df3c58f69b99d31e7757b09656d844->leave($__internal_fc787b01b65b6f9dba927f08987006c713df3c58f69b99d31e7757b09656d844_prof);

    }

    // line 20
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_2d55fc118033565d81f7aa61313ff9db17bfcd9c1c45495822222ec6bca5a3d9 = $this->env->getExtension("native_profiler");
        $__internal_2d55fc118033565d81f7aa61313ff9db17bfcd9c1c45495822222ec6bca5a3d9->enter($__internal_2d55fc118033565d81f7aa61313ff9db17bfcd9c1c45495822222ec6bca5a3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 21
        echo "    ";
        if ( !twig_test_empty((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")))) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")));
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
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")), ($context["key"] + 1), array(), "array"));
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
                        if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "GDP")) {
                            // line 36
                            echo "                                    ";
                            $context["head"] = "PIB";
                            // line 37
                            echo "                                ";
                        }
                        // line 38
                        echo "                                <h5>";
                        echo twig_escape_filter($this->env, (((((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")) . " ") . (isset($context["head"]) ? $context["head"] : $this->getContext($context, "head"))) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array())), "html", null, true);
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
                                echo twig_escape_filter($this->env, (((((isset($context["champ"]) ? $context["champ"] : $this->getContext($context, "champ")) . " : ") . $context["val"]) . " ") . (isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))), "html", null, true);
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
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")))) {
            // line 58
            echo "        ";
            $context["break"] = false;
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 60
                    echo "            ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), ($context["key"] + 1), array(), "array");
                    // line 61
                    echo "            <div class=\"row\">
                ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                            // line 63
                            echo "                    <div class=\"well\">
                        ";
                            // line 64
                            $context["head"] = $context["item"];
                            // line 65
                            echo "                        ";
                            if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "NE")) {
                                // line 66
                                echo "                            ";
                                $context["head"] = "Export net";
                                // line 67
                                echo "                        ";
                            }
                            echo "  
                        ";
                            // line 68
                            if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "GDP")) {
                                // line 69
                                echo "                            ";
                                $context["head"] = "PIB";
                                // line 70
                                echo "                        ";
                            }
                            // line 71
                            echo "                        <h4>Evolution ";
                            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")), "html", null, true);
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
        
        $__internal_2d55fc118033565d81f7aa61313ff9db17bfcd9c1c45495822222ec6bca5a3d9->leave($__internal_2d55fc118033565d81f7aa61313ff9db17bfcd9c1c45495822222ec6bca5a3d9_prof);

    }

    // line 83
    public function block_Script($context, array $blocks = array())
    {
        $__internal_a83ef12f1894e515a9506ea60efadd92c5a586d53c604089533e854940e21df1 = $this->env->getExtension("native_profiler");
        $__internal_a83ef12f1894e515a9506ea60efadd92c5a586d53c604089533e854940e21df1->enter($__internal_a83ef12f1894e515a9506ea60efadd92c5a586d53c604089533e854940e21df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo " 
    ";
        // line 84
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 85
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56759a0_morris.min_1.js");
            // line 87
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "56759a0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56759a0_raphael-min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "56759a0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56759a0.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 89
        echo "    <script>
        ";
        // line 90
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")))) {
            // line 91
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 92
                    echo "                ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), ($context["key"] + 1), array(), "array");
                    // line 93
                    echo "                ";
                    if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "L") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "D"))) {
                        // line 94
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineFilter((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")));
                        // line 95
                        echo "                        ";
                        $context["ordo"] = array();
                        // line 96
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 97
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")), array(0 => $context["key"]));
                                // line 98
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        echo "                        dessineMany(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo " , 'L')
                ";
                    }
                    // line 101
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "B")) {
                        // line 102
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineFilter((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")));
                        // line 103
                        echo "                        ";
                        $context["ordo"] = array();
                        // line 104
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 105
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")), array(0 => $context["key"]));
                                // line 106
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "                        dessinebardeux(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")));
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
        
        $__internal_a83ef12f1894e515a9506ea60efadd92c5a586d53c604089533e854940e21df1->leave($__internal_a83ef12f1894e515a9506ea60efadd92c5a586d53c604089533e854940e21df1_prof);

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
        return array (  420 => 113,  415 => 110,  408 => 109,  398 => 107,  391 => 106,  388 => 105,  382 => 104,  379 => 103,  376 => 102,  373 => 101,  363 => 99,  356 => 98,  353 => 97,  347 => 96,  344 => 95,  341 => 94,  338 => 93,  335 => 92,  329 => 91,  327 => 90,  324 => 89,  304 => 87,  300 => 85,  296 => 84,  288 => 83,  277 => 80,  270 => 79,  268 => 78,  264 => 76,  257 => 75,  255 => 74,  250 => 72,  245 => 71,  242 => 70,  239 => 69,  237 => 68,  232 => 67,  229 => 66,  226 => 65,  224 => 64,  221 => 63,  216 => 62,  213 => 61,  210 => 60,  204 => 59,  201 => 58,  199 => 57,  194 => 56,  186 => 54,  178 => 51,  168 => 49,  165 => 48,  162 => 47,  160 => 46,  155 => 45,  152 => 44,  149 => 43,  146 => 42,  141 => 41,  134 => 38,  131 => 37,  128 => 36,  126 => 35,  121 => 34,  118 => 33,  115 => 32,  113 => 31,  109 => 29,  105 => 28,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  89 => 23,  83 => 22,  80 => 21,  74 => 20,  63 => 3,  56 => 2,  50 => 18,  47 => 16,  44 => 14,  42 => 13,  38 => 12,  36 => 11,  34 => 10,  32 => 9,  30 => 8,  11 => 2,);
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
