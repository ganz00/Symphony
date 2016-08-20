<?php

/* @template/Crossgraphe.html.twig */
class __TwigTemplate_f9e0bfeba745641797fa997fd9af9d0efa802655ca25576eacaa9839c2c95022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "@template/Crossgraphe.html.twig", 2);
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
        $__internal_3bc323d55de63c53ac953be7ab79ac0eba3f51ac832631ed31985dddd18a98cd = $this->env->getExtension("native_profiler");
        $__internal_3bc323d55de63c53ac953be7ab79ac0eba3f51ac832631ed31985dddd18a98cd->enter($__internal_3bc323d55de63c53ac953be7ab79ac0eba3f51ac832631ed31985dddd18a98cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@template/Crossgraphe.html.twig"));

        // line 4
        $context["type"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "Typechar"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "Typechar"), "method"), "L")) : ("L"));
        // line 5
        $context["graph"] = array();
        // line 6
        $context["simple"] = array();
        // line 7
        $context["break"] = false;
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["key"] => $context["data"]) {
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["country"] => $context["val"]) {
                if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                    // line 10
                    if ($this->getAttribute($context["val"], 0, array(), "any", true, true)) {
                        // line 11
                        $context["graph"] = twig_array_merge((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), array(0 => $context["key"], 1 => $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), $context["key"], array(), "array")));
                        // line 12
                        $context["break"] = true;
                    } else {
                        // line 14
                        $context["simple"] = twig_array_merge((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")), array(0 => $context["key"], 1 => $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), $context["key"], array(), "array")));
                        // line 15
                        $context["break"] = true;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['country'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            $context["break"] = false;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        $context["pays"] = array();
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), 1, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 22
            $context["pays"] = twig_array_merge((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), array(0 => $context["key"]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc323d55de63c53ac953be7ab79ac0eba3f51ac832631ed31985dddd18a98cd->leave($__internal_3bc323d55de63c53ac953be7ab79ac0eba3f51ac832631ed31985dddd18a98cd_prof);

    }

    // line 24
    public function block_titre($context, array $blocks = array())
    {
        $__internal_fc98ec0bc6743a0a80e03e63ef1a815ef0c36a0afd570d114bb8f05c8f818129 = $this->env->getExtension("native_profiler");
        $__internal_fc98ec0bc6743a0a80e03e63ef1a815ef0c36a0afd570d114bb8f05c8f818129->enter($__internal_fc98ec0bc6743a0a80e03e63ef1a815ef0c36a0afd570d114bb8f05c8f818129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 25
        echo "    <h4> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "          ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo " 
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </h4>
             <br><br>
";
        
        $__internal_fc98ec0bc6743a0a80e03e63ef1a815ef0c36a0afd570d114bb8f05c8f818129->leave($__internal_fc98ec0bc6743a0a80e03e63ef1a815ef0c36a0afd570d114bb8f05c8f818129_prof);

    }

    // line 33
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_cb87a92c541942b62334986151da23a7f9e196e4bd471cb531d02adbc9162bf9 = $this->env->getExtension("native_profiler");
        $__internal_cb87a92c541942b62334986151da23a7f9e196e4bd471cb531d02adbc9162bf9->enter($__internal_cb87a92c541942b62334986151da23a7f9e196e4bd471cb531d02adbc9162bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 34
        echo "    ";
        if ( !twig_test_empty((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")))) {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 36
                    echo "            <div class=\"row\">
                ";
                    // line 37
                    $context["add"] = "";
                    // line 38
                    echo "                ";
                    if (((($context["item"] == "EconomicData") || ($context["item"] == "GDP")) || ($context["item"] == "NE"))) {
                        // line 39
                        echo "                    ";
                        $context["add"] = "USD";
                        // line 40
                        echo "                ";
                    }
                    echo "  
                ";
                    // line 41
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")), ($context["key"] + 1), array(), "array")) == 2)) {
                        // line 42
                        echo "                    ";
                        $context["class"] = "col-lg-6";
                        // line 43
                        echo "                ";
                    } else {
                        // line 44
                        echo "                    ";
                        $context["class"] = "col-lg-4";
                        // line 45
                        echo "                ";
                    }
                    // line 46
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["simple"]) ? $context["simple"] : $this->getContext($context, "simple")), ($context["key"] + 1), array(), "array"));
                    foreach ($context['_seq'] as $context["ke"] => $context["data"]) {
                        // line 47
                        echo "                    <div class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                        echo "\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                ";
                        // line 50
                        $context["head"] = $context["item"];
                        // line 51
                        echo "                                ";
                        if (($context["item"] == "NE")) {
                            // line 52
                            echo "                                    ";
                            $context["head"] = "Export net";
                            // line 53
                            echo "                                ";
                        }
                        echo "  
                                ";
                        // line 54
                        if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "GDP")) {
                            // line 55
                            echo "                                    ";
                            $context["head"] = "PIB";
                            // line 56
                            echo "                                ";
                        }
                        // line 57
                        echo "                                <h5>";
                        echo twig_escape_filter($this->env, (((($context["ke"] . " ") . (isset($context["head"]) ? $context["head"] : $this->getContext($context, "head"))) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array())), "html", null, true);
                        echo "</h5>
                            </div>
                            <div class=\"panel-body\">
                                ";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["data"]);
                        foreach ($context['_seq'] as $context["field"] => $context["val"]) {
                            if ((($context["field"] != "dateOfInformation") && ($context["field"] != "1"))) {
                                // line 61
                                echo "                                    ";
                                $context["champ"] = $context["field"];
                                // line 62
                                echo "                                    ";
                                if (($context["field"] == "NE")) {
                                    // line 63
                                    echo "                                        ";
                                    $context["champ"] = "Export net";
                                    // line 64
                                    echo "                                    ";
                                }
                                echo "  
                                    ";
                                // line 65
                                if (($context["field"] == "GDP")) {
                                    // line 66
                                    echo "                                        ";
                                    $context["champ"] = "PIB";
                                    // line 67
                                    echo "                                    ";
                                }
                                // line 68
                                echo "                                    <p>";
                                echo twig_escape_filter($this->env, (((((isset($context["champ"]) ? $context["champ"] : $this->getContext($context, "champ")) . " : ") . $context["val"]) . " ") . (isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))), "html", null, true);
                                echo "</p>
                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 70
                        echo "                            </div>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['ke'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "    ";
        }
        echo " 

    ";
        // line 78
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")))) {
            // line 79
            echo "        ";
            $context["break"] = false;
            // line 80
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 81
                    echo "            ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), ($context["key"] + 1), array(), "array");
                    // line 82
                    echo "            <div class=\"row\">
                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                            // line 84
                            echo "                    <div class=\"well\">
                        ";
                            // line 85
                            $context["head"] = $context["item"];
                            // line 86
                            echo "                        ";
                            if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "NE")) {
                                // line 87
                                echo "                            ";
                                $context["head"] = "Export net";
                                // line 88
                                echo "                        ";
                            }
                            echo "  
                        ";
                            // line 89
                            if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "GDP")) {
                                // line 90
                                echo "                            ";
                                $context["head"] = "PIB";
                                // line 91
                                echo "                        ";
                            }
                            // line 92
                            echo "                        <h4>Evolution ";
                            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")), "html", null, true);
                            echo "</h4>
                        <div id=\"";
                            // line 93
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "\" style=\"height: 250px;\"></div>
                    </div>
                    ";
                            // line 95
                            $context["break"] = true;
                            // line 96
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "            </div>
            ";
                    // line 98
                    $context["break"] = false;
                    // line 99
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "        
    ";
        }
        // line 101
        echo " 

";
        
        $__internal_cb87a92c541942b62334986151da23a7f9e196e4bd471cb531d02adbc9162bf9->leave($__internal_cb87a92c541942b62334986151da23a7f9e196e4bd471cb531d02adbc9162bf9_prof);

    }

    // line 104
    public function block_Script($context, array $blocks = array())
    {
        $__internal_a7acf3245ff6294eacad7dba806e127014a6440612bc1f0930e99a7176c3f734 = $this->env->getExtension("native_profiler");
        $__internal_a7acf3245ff6294eacad7dba806e127014a6440612bc1f0930e99a7176c3f734->enter($__internal_a7acf3245ff6294eacad7dba806e127014a6440612bc1f0930e99a7176c3f734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo " 
    ";
        // line 105
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 106
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56759a0_morris.min_1.js");
            // line 108
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
        // line 110
        echo "    <script>
        ";
        // line 111
        if ( !twig_test_empty((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")))) {
            // line 112
            echo "            ";
            $context["pays"] = array();
            // line 113
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), 1, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 114
                echo "                ";
                $context["pays"] = twig_array_merge((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), array(0 => $context["key"]));
                // line 115
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] % 2 == 0)) {
                    // line 117
                    echo "                ";
                    $context["element"] = $this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), ($context["key"] + 1), array(), "array");
                    // line 118
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "L")) {
                        // line 119
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineCrossFilter((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")));
                        // line 120
                        echo "
                        ";
                        // line 121
                        $context["ordo"] = array();
                        // line 122
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 123
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")), array(0 => $context["key"]));
                                // line 124
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 125
                        echo "                        dessineMany(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo " , 'L')
                ";
                    }
                    // line 127
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "B")) {
                        // line 128
                        echo "                    ";
                        $context["data"] = $this->env->getExtension('app_extension')->LineCrossFilter((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")));
                        // line 129
                        echo "                        ";
                        $context["ordo"] = array();
                        // line 130
                        echo "                   ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
                        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                            if (($context["key"] != "dateOfInformation")) {
                                // line 131
                                echo "                        ";
                                $context["ordo"] = twig_array_merge((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")), array(0 => $context["key"]));
                                // line 132
                                echo "                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "                        dessinebardeux(\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
                        echo "\", 'dateOfInformation',";
                        echo twig_jsonencode_filter((isset($context["ordo"]) ? $context["ordo"] : $this->getContext($context, "ordo")));
                        echo " , ";
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo ")
                ";
                    }
                    // line 135
                    echo "                ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "D")) {
                        // line 136
                        echo "                    
                ";
                    }
                    // line 138
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "              
              
        ";
        }
        // line 142
        echo "    </script>
";
        
        $__internal_a7acf3245ff6294eacad7dba806e127014a6440612bc1f0930e99a7176c3f734->leave($__internal_a7acf3245ff6294eacad7dba806e127014a6440612bc1f0930e99a7176c3f734_prof);

    }

    public function getTemplateName()
    {
        return "@template/Crossgraphe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 142,  506 => 139,  499 => 138,  495 => 136,  492 => 135,  482 => 133,  475 => 132,  472 => 131,  466 => 130,  463 => 129,  460 => 128,  457 => 127,  447 => 125,  440 => 124,  437 => 123,  431 => 122,  429 => 121,  426 => 120,  423 => 119,  420 => 118,  417 => 117,  411 => 116,  405 => 115,  402 => 114,  397 => 113,  394 => 112,  392 => 111,  389 => 110,  369 => 108,  365 => 106,  361 => 105,  353 => 104,  344 => 101,  340 => 100,  333 => 99,  331 => 98,  328 => 97,  321 => 96,  319 => 95,  314 => 93,  309 => 92,  306 => 91,  303 => 90,  301 => 89,  296 => 88,  293 => 87,  290 => 86,  288 => 85,  285 => 84,  280 => 83,  277 => 82,  274 => 81,  268 => 80,  265 => 79,  263 => 78,  257 => 76,  249 => 74,  240 => 70,  230 => 68,  227 => 67,  224 => 66,  222 => 65,  217 => 64,  214 => 63,  211 => 62,  208 => 61,  203 => 60,  196 => 57,  193 => 56,  190 => 55,  188 => 54,  183 => 53,  180 => 52,  177 => 51,  175 => 50,  168 => 47,  163 => 46,  160 => 45,  157 => 44,  154 => 43,  151 => 42,  149 => 41,  144 => 40,  141 => 39,  138 => 38,  136 => 37,  133 => 36,  127 => 35,  124 => 34,  118 => 33,  109 => 28,  100 => 26,  95 => 25,  89 => 24,  82 => 2,  76 => 22,  72 => 21,  70 => 20,  64 => 18,  56 => 15,  54 => 14,  51 => 12,  49 => 11,  47 => 10,  42 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
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
/*     {% set pays = [] %}*/
/*             {% for key in graph[1]|keys %}*/
/*                 {% set pays = pays|merge([key]) %}*/
/*             {% endfor %}*/
/* {%block titre %}*/
/*     <h4> {% for item in pays %}*/
/*           {{ item }} */
/*          {% endfor%}*/
/*     </h4>*/
/*              <br><br>*/
/* {% endblock titre %}*/
/* */
/* */
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
