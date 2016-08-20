<?php

/* @template/Paysresult.html.twig */
class __TwigTemplate_5e0b715e5bbcaac2694cf546bde673680dcafceaaca80700ec5c4a3c9648f548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "@template/Paysresult.html.twig", 2);
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
        $__internal_5b22287503ca322db24d12ed5973c8806be9c982d5c8e899474d98d9f29dbbfd = $this->env->getExtension("native_profiler");
        $__internal_5b22287503ca322db24d12ed5973c8806be9c982d5c8e899474d98d9f29dbbfd->enter($__internal_5b22287503ca322db24d12ed5973c8806be9c982d5c8e899474d98d9f29dbbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@template/Paysresult.html.twig"));

        // line 5
        $context["economic"] = (($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array"), array())) : (array()));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b22287503ca322db24d12ed5973c8806be9c982d5c8e899474d98d9f29dbbfd->leave($__internal_5b22287503ca322db24d12ed5973c8806be9c982d5c8e899474d98d9f29dbbfd_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_9bd431547c099eba09d8b5d4ec4b74b3725331fa39a8ad14f2d74c000d12033a = $this->env->getExtension("native_profiler");
        $__internal_9bd431547c099eba09d8b5d4ec4b74b3725331fa39a8ad14f2d74c000d12033a->enter($__internal_9bd431547c099eba09d8b5d4ec4b74b3725331fa39a8ad14f2d74c000d12033a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_9bd431547c099eba09d8b5d4ec4b74b3725331fa39a8ad14f2d74c000d12033a->leave($__internal_9bd431547c099eba09d8b5d4ec4b74b3725331fa39a8ad14f2d74c000d12033a_prof);

    }

    // line 7
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_57e5ed7fe38dff086b6f110b71ae8472aa8497b348e5d55ff01d16d78a1ea3e5 = $this->env->getExtension("native_profiler");
        $__internal_57e5ed7fe38dff086b6f110b71ae8472aa8497b348e5d55ff01d16d78a1ea3e5->enter($__internal_57e5ed7fe38dff086b6f110b71ae8472aa8497b348e5d55ff01d16d78a1ea3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 8
        echo "    ";
        $context["now"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "economic_data", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "no data")) : ("no data"));
        // line 9
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h4>";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "pays", array(), "array")), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"panel-body\">  
             ";
        // line 14
        $context["valeur"] = (($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), "PIB", array(), "array", false, true), 0, array(), "array"), array())) : (array()));
        // line 15
        echo "            <p>Monnaie :&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "monaie", array(), "array"), 0, array(), "array"), "currency", array(), "array"), "html", null, true);
        echo "</p>
            <p>Population en ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "parametre_population", array(), "array"), 0, array(), "array"), "dateOfInformation", array(), "array"), "html", null, true);
        echo "&nbsp;:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "parametre_population", array(), "array"), 0, array(), "array"), "population", array(), "array"), "html", null, true);
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
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "GDP", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["valeur"]) ? $context["valeur"] : null), "GDP", array(), "array"), 0)) : (0)) / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "parametre_population", array(), "array"), 0, array(), "array"), "population", array(), "array")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "economic_data", array(), "array"));
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
        
        $__internal_57e5ed7fe38dff086b6f110b71ae8472aa8497b348e5d55ff01d16d78a1ea3e5->leave($__internal_57e5ed7fe38dff086b6f110b71ae8472aa8497b348e5d55ff01d16d78a1ea3e5_prof);

    }

    // line 123
    public function block_Script($context, array $blocks = array())
    {
        $__internal_26e5f68afdc9aba89b8386699b7f8ea6ccd4553461b33d9f717fc1ec9e63c76a = $this->env->getExtension("native_profiler");
        $__internal_26e5f68afdc9aba89b8386699b7f8ea6ccd4553461b33d9f717fc1ec9e63c76a->enter($__internal_26e5f68afdc9aba89b8386699b7f8ea6ccd4553461b33d9f717fc1ec9e63c76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo " 
    ";
        // line 124
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 125
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56759a0_morris.min_1.js");
            // line 127
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
        // line 129
        echo "    <script>
        
        ";
        // line 131
        $context["sign"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "monaie", array(), "array"), 0, array(), "array"), "currencyCode", array(), "array");
        // line 132
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "economic_data", array(), "array"));
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
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["vari"]) ? $context["vari"] : $this->getContext($context, "vari")), 0, array(), "array")), "html", null, true);
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
        $context["chart6"] = $this->env->getExtension('app_extension')->barFilter((isset($context["economic"]) ? $context["economic"] : $this->getContext($context, "economic")), $this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "economic_indic", array(), "array"), "dateOfInformation", "priceIndex", "gdpGrowth");
        // line 138
        echo "            dessine(\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["economic"]) ? $context["economic"] : $this->getContext($context, "economic"))), "html", null, true);
        echo "\", 'dateOfInformation', 'fiscalRevenue', 'mychart3', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : $this->getContext($context, "sign")), "html", null, true);
        echo "')
         dessinebar(\"";
        // line 139
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["chart6"]) ? $context["chart6"] : $this->getContext($context, "chart6"))), "html", null, true);
        echo "\", 'dateOfInformation', 'priceIndex', 'gdpGrowth', 'Inflation', 'gdpGrowth', 'mychart6')
            dessine(\"";
        // line 140
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["economic"]) ? $context["economic"] : $this->getContext($context, "economic"))), "html", null, true);
        echo "\", 'dateOfInformation', 'investment', 'mychart7', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : $this->getContext($context, "sign")), "html", null, true);
        echo "')
            dessine(\"";
        // line 141
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["economic"]) ? $context["economic"] : $this->getContext($context, "economic"))), "html", null, true);
        echo "\", 'dateOfInformation', 'priceIndex', 'mychart5', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : $this->getContext($context, "sign")), "html", null, true);
        echo "')
            dessine(\"";
        // line 142
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "PIB", array(), "array")), "html", null, true);
        echo "\", 'dateOfInformation', 'GDP', 'mychart', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : $this->getContext($context, "sign")), "html", null, true);
        echo "')
            dessine(\"";
        // line 143
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "Net Export", array(), "array")), "html", null, true);
        echo "\", 'dateOfInformation', 'NE', 'mychart2', 'L','";
        echo twig_escape_filter($this->env, (isset($context["sign"]) ? $context["sign"] : $this->getContext($context, "sign")), "html", null, true);
        echo "')

    </script>
";
        
        $__internal_26e5f68afdc9aba89b8386699b7f8ea6ccd4553461b33d9f717fc1ec9e63c76a->leave($__internal_26e5f68afdc9aba89b8386699b7f8ea6ccd4553461b33d9f717fc1ec9e63c76a_prof);

    }

    public function getTemplateName()
    {
        return "@template/Paysresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 143,  382 => 142,  376 => 141,  370 => 140,  366 => 139,  359 => 138,  357 => 137,  354 => 136,  335 => 134,  332 => 133,  314 => 132,  312 => 131,  308 => 129,  288 => 127,  284 => 125,  280 => 124,  272 => 123,  264 => 121,  246 => 117,  242 => 116,  238 => 114,  221 => 113,  168 => 64,  166 => 63,  160 => 60,  149 => 53,  147 => 52,  140 => 49,  138 => 48,  127 => 41,  125 => 40,  119 => 37,  111 => 31,  105 => 29,  103 => 28,  96 => 25,  94 => 24,  82 => 17,  76 => 16,  71 => 15,  69 => 14,  63 => 11,  59 => 9,  56 => 8,  50 => 7,  39 => 3,  32 => 2,  30 => 5,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
/* {%block titre %}*/
/* {% endblock titre %}*/
/* {% set economic =  donnee["economic_data"]| default([]) %}*/
/* */
/* {% block resultat %}*/
/*     {% set now =  donnee["economic_data"][0]["dateOfInformation"]| default('no data') %}*/
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
