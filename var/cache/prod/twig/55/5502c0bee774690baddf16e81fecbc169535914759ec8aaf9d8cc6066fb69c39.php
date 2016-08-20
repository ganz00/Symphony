<?php

/* HeebaridataBundle::Paysresult.html.twig */
class __TwigTemplate_486a63f7e6623971297da159ba69d8c144c9ae3c967eabc5b04e918831a7b8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "HeebaridataBundle::Paysresult.html.twig", 2);
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
        // line 5
        $context["economic"] = $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array");
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 7
    public function block_resultat($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["now"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array"), 0, array(), "array"), "dateOfInformation", array(), "array");
        // line 9
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h4>";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "pays", array(), "array")), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"panel-body\">  
             ";
        // line 14
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 15
        echo "            <p>Monnaie :&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "monaie", array(), "array"), 0, array(), "array"), "currency", array(), "array"), "html", null, true);
        echo "</p>
            <p>Population en ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "parametre_population", array(), "array"), 0, array(), "array"), "dateOfInformation", array(), "array"), "html", null, true);
        echo "&nbsp;:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "parametre_population", array(), "array"), 0, array(), "array"), "population", array(), "array"), "html", null, true);
        echo "</p>
            <p>Pib  en   ";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo "&nbsp;:";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "GDP", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "GDP", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo " </p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    ";
        // line 24
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 25
        echo "                    <h5>PIB par habitant ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo "</h5>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "parametre_population", array(), "array", false, true), 0, array(), "array", true, true)) {
            // line 29
            echo "                        <p>";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "GDP", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "GDP", array(), "array"), 0)) : (0)) / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "parametre_population", array(), "array"), 0, array(), "array"), "population", array(), "array")), "html", null, true);
            echo "</p>
                    ";
        }
        // line 31
        echo "                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h5>Coissance PIB ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "html", null, true);
        echo " </h5>
                </div>
                <div class=\"panel-body\">
                     ";
        // line 40
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_indic", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_indic", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 41
        echo "                    <p>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "gdpGrowth", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "gdpGrowth", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo " </p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    ";
        // line 48
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "population growth", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "population growth", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 49
        echo "                    <h5>Croissance population ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo "</h5>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 52
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "population growth", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "population growth", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 53
        echo "                    <p>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "Populationgrowth", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "Populationgrowth", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h5>Densité population ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "html", null, true);
        echo "</h5>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 63
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "parametre_population", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "parametre_population", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 64
        echo "                    <p>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "density", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "density", array(), "array"), "NA")) : ("NA")), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution PIB</h4>
                <div id=\"mychart\" style=\"height: 250px;\"></div>
                <p></p>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution Export net</h4>
                <div id=\"mychart2\" style=\"height: 250px;\"></div>
            </div>
        </div>
    </div>
    <div class=\"row\">   
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution revenu fiscal</h4>
                <div id=\"mychart3\" style=\"height: 250px;\"></div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution inflation</h4>
                <div id=\"mychart5\" style=\"height: 250px;\"></div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution investissement</h4>
                <div id=\"mychart7\" style=\"height: 250px;\"></div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution inflation et PIB</h4>
                <div id=\"mychart6\" style=\"height: 250px;\"></div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 114
            echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <h4>Repartition investissement ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "dateOfInformation", array(), "array"), "html", null, true);
            echo "</h4>
                    <div id=\"var";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" style=\"height: 250px;\"></div>
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "    </div>
";
    }

    // line 123
    public function block_Script($context, array $blocks = array())
    {
        echo " 
    ";
        // line 124
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 125
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("js/56759a0_morris.min_1.js");
            // line 127
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
        // line 129
        echo "    <script>
        
        ";
        // line 131
        $context["sign"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "monaie", array(), "array"), 0, array(), "array"), "currencyCode", array(), "array");
        // line 132
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 133
            echo "            ";
            $context["vari"] = $this->env->getExtension('app_extension')->donotFilter($context["data"], "publicInvestment", "privateInvestment", "foreignDirectInvestment");
            // line 134
            echo "                dessine(\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["vari"]) ? $context["vari"] : null), 0, array(), "array")), "html", null, true);
            echo "\", 'publicInvestment', 'privateInvestment', 'var";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "', 'D')
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
        ";
        // line 137
        $context["chart6"] = $this->env->getExtension('app_extension')->barFilter((isset($context["economic"]) ? $context["economic"] : null), $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_indic", array(), "array"), "dateOfInformation", "priceIndex", "gdpGrowth");
        // line 138
        echo "            dessine(\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["economic"]) ? $context["economic"] : null)), "html", null, true);
        echo "\", 'dateOfInformation', 'fiscalRevenue', 'mychart3', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : null), "html", null, true);
        echo "')
         dessinebar(\"";
        // line 139
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["chart6"]) ? $context["chart6"] : null)), "html", null, true);
        echo "\", 'dateOfInformation', 'priceIndex', 'gdpGrowth', 'Inflation', 'gdpGrowth', 'mychart6')
            dessine(\"";
        // line 140
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["economic"]) ? $context["economic"] : null)), "html", null, true);
        echo "\", 'dateOfInformation', 'investment', 'mychart7', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : null), "html", null, true);
        echo "')
            dessine(\"";
        // line 141
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["economic"]) ? $context["economic"] : null)), "html", null, true);
        echo "\", 'dateOfInformation', 'priceIndex', 'mychart5', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : null), "html", null, true);
        echo "')
            dessine(\"";
        // line 142
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array")), "html", null, true);
        echo "\", 'dateOfInformation', 'GDP', 'mychart', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : null), "html", null, true);
        echo "')
            dessine(\"";
        // line 143
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "Net Export", array(), "array")), "html", null, true);
        echo "\", 'dateOfInformation', 'NE', 'mychart2', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : null), "html", null, true);
        echo "')

    </script>
";
    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::Paysresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 143,  361 => 142,  355 => 141,  349 => 140,  345 => 139,  338 => 138,  336 => 137,  333 => 136,  314 => 134,  311 => 133,  293 => 132,  291 => 131,  287 => 129,  267 => 127,  263 => 125,  259 => 124,  254 => 123,  249 => 121,  231 => 117,  227 => 116,  223 => 114,  206 => 113,  153 => 64,  151 => 63,  145 => 60,  134 => 53,  132 => 52,  125 => 49,  123 => 48,  112 => 41,  110 => 40,  104 => 37,  96 => 31,  90 => 29,  88 => 28,  81 => 25,  79 => 24,  67 => 17,  61 => 16,  56 => 15,  54 => 14,  48 => 11,  44 => 9,  41 => 8,  38 => 7,  33 => 3,  29 => 2,  27 => 5,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
/* {%block titre %}*/
/* {% endblock titre %}*/
/* {% set economic =  donnee["economic_data"] %}*/
/* */
/* {% block resultat %}*/
/*     {% set now =  donnee["economic_data"][0]["dateOfInformation"] %}*/
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             <h4>{{ donnee["pays"]|upper }}</h4>*/
/*         </div>*/
/*         <div class="panel-body">  */
/*              {% set valeur = donnee["PIB"][0] | default([]) %}*/
/*             <p>Monnaie :&nbsp;{{ donnee["monaie"][0]["currency"]}}</p>*/
/*             <p>Population en {{ donnee["parametre_population"][0]["dateOfInformation"]}}&nbsp;:{{ donnee["parametre_population"][0]["population"]}}</p>*/
/*             <p>Pib  en   {{ valeur["dateOfInformation"]|default('NA')}}&nbsp;:{{ valeur["GDP"]|default('NA')}} </p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     {% set valeur = donnee["PIB"][0] | default([]) %}*/
/*                     <h5>PIB par habitant {{ valeur["dateOfInformation"] | default("NA") }}</h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% if donnee["parametre_population"][0] is defined %}*/
/*                         <p>{{ valeur["GDP"]|default(0)/donnee["parametre_population"][0]["population"]}}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h5>Coissance PIB {{ now }} </h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                      {% set valeur = donnee["economic_indic"][0] | default([]) %}*/
/*                     <p>{{valeur["gdpGrowth"]| default("NA")}} </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     {% set valeur = donnee["population growth"][0] | default([]) %}*/
/*                     <h5>Croissance population {{ valeur["dateOfInformation"]| default("NA") }}</h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% set valeur = donnee["population growth"][0] | default([]) %}*/
/*                     <p>{{valeur["Populationgrowth"] |default("NA")}}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h5>Densité population {{ now }}</h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% set valeur = donnee["parametre_population"][0] | default([]) %}*/
/*                     <p>{{valeur["density"]|default("NA")}}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution PIB</h4>*/
/*                 <div id="mychart" style="height: 250px;"></div>*/
/*                 <p></p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution Export net</h4>*/
/*                 <div id="mychart2" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">   */
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution revenu fiscal</h4>*/
/*                 <div id="mychart3" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution inflation</h4>*/
/*                 <div id="mychart5" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution investissement</h4>*/
/*                 <div id="mychart7" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution inflation et PIB</h4>*/
/*                 <div id="mychart6" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for data in donnee["economic_data"] %}*/
/*             <div class="col-sm-4">*/
/*                 <div class="well">*/
/*                     <h4>Repartition investissement {{ data['dateOfInformation'] }}</h4>*/
/*                     <div id="var{{loop.index}}" style="height: 250px;"></div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock resultat %}*/
/* {% block Script %} */
/*     {{ parent() }}*/
/*     {% javascripts 'bundles/Heebaridata/Script/morrisjs/morris.min.js'*/
/*                     'bundles/Heebaridata/Script/raphael/raphael-min.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script>*/
/*         */
/*         {% set sign = donnee["monaie"][0]["currencyCode"]%}*/
/*         {% for data in donnee["economic_data"] %}*/
/*             {% set vari =  data | donot('publicInvestment','privateInvestment','foreignDirectInvestment') %}*/
/*                 dessine("{{vari[0] | json_encode()}}", 'publicInvestment', 'privateInvestment', 'var{{ loop.index }}', 'D')*/
/*         {% endfor %}*/
/* */
/*         {% set chart6 =  economic| bar(donnee["economic_indic"],'dateOfInformation','priceIndex','gdpGrowth') %}*/
/*             dessine("{{economic|json_encode()}}", 'dateOfInformation', 'fiscalRevenue', 'mychart3', 'L','{{ sign }}')*/
/*          dessinebar("{{chart6|json_encode()}}", 'dateOfInformation', 'priceIndex', 'gdpGrowth', 'Inflation', 'gdpGrowth', 'mychart6')*/
/*             dessine("{{economic|json_encode()}}", 'dateOfInformation', 'investment', 'mychart7', 'L','{{ sign }}')*/
/*             dessine("{{economic|json_encode()}}", 'dateOfInformation', 'priceIndex', 'mychart5', 'L','{{ sign }}')*/
/*             dessine("{{donnee["PIB"]|json_encode()}}", 'dateOfInformation', 'GDP', 'mychart', 'L','{{ sign }}')*/
/*             dessine("{{donnee["Net Export"] | json_encode()}}", 'dateOfInformation', 'NE', 'mychart2', 'L','{{ sign }}')*/
/* */
/*     </script>*/
/* {% endblock Script %}*/
/* */
/* */
