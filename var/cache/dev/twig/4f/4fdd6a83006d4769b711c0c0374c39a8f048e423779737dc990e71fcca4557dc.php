<?php

/* HeebaridataBundle::ManyPaysresult.html.twig */
class __TwigTemplate_ab366c1f6d7780889dcb14168190bdf5afa15beff69fcc69d6c7aa7eb874f7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "HeebaridataBundle::ManyPaysresult.html.twig", 2);
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
        $__internal_79b2bd7d3591a74135c9f866b190e119fb6a67817c83390e92e180f81e0d1e8f = $this->env->getExtension("native_profiler");
        $__internal_79b2bd7d3591a74135c9f866b190e119fb6a67817c83390e92e180f81e0d1e8f->enter($__internal_79b2bd7d3591a74135c9f866b190e119fb6a67817c83390e92e180f81e0d1e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeebaridataBundle::ManyPaysresult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b2bd7d3591a74135c9f866b190e119fb6a67817c83390e92e180f81e0d1e8f->leave($__internal_79b2bd7d3591a74135c9f866b190e119fb6a67817c83390e92e180f81e0d1e8f_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c54b8c613aae7899839101f2bae4c1820f7b95690d88b11834f75167171dec4d = $this->env->getExtension("native_profiler");
        $__internal_c54b8c613aae7899839101f2bae4c1820f7b95690d88b11834f75167171dec4d->enter($__internal_c54b8c613aae7899839101f2bae4c1820f7b95690d88b11834f75167171dec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_c54b8c613aae7899839101f2bae4c1820f7b95690d88b11834f75167171dec4d->leave($__internal_c54b8c613aae7899839101f2bae4c1820f7b95690d88b11834f75167171dec4d_prof);

    }

    // line 5
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_b8f94315e2a12b0c9bc2c664e1c9c34aca365c05a351ee1210281d022f022eac = $this->env->getExtension("native_profiler");
        $__internal_b8f94315e2a12b0c9bc2c664e1c9c34aca365c05a351ee1210281d022f022eac->enter($__internal_b8f94315e2a12b0c9bc2c664e1c9c34aca365c05a351ee1210281d022f022eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 6
        echo "

    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee"))) == 2)) {
            // line 9
            echo "        ";
            $context["now"] = array(0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 0, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 0, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 1, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 1, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")));
            // line 10
            echo "        ";
            $context["class"] = "col-lg-6";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["class"] = "col-lg-4";
            // line 13
            echo "        ";
            $context["now"] = array(0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 0, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 0, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 1, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 1, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), 2 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 2, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : null), 2, array(), "array", false, true), "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 17
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h4>";
            // line 20
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["data"], "pays", array(), "array")), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"panel-body\">               
                        <p>Monnaie :&nbsp;";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "monaie", array(), "array", false, true), 0, array(), "array", false, true), "currency", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "monaie", array(), "array", false, true), 0, array(), "array", false, true), "currency", array(), "array"), "NA")) : ("NA")), "html", null, true);
            echo "</p>
                        <p>Population en ";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
            echo "&nbsp;:";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "population", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "population", array(), "array"), "NA")) : ("NA")), "html", null, true);
            echo "</p>
                        <p>Pib  en   ";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "PIB", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "PIB", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
            echo "&nbsp;:";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "PIB", array(), "array", false, true), 0, array(), "array", false, true), "GDP", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "PIB", array(), "array", false, true), 0, array(), "array", false, true), "GDP", array(), "array"), "NA")) : ("NA")), "html", null, true);
            echo " </p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h5>PIB par habitant </h5>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
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
            // line 39
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["data"], "pays", array(), "array")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
            echo " </strong> :
                            ";
            // line 40
            if (($this->getAttribute($this->getAttribute($context["data"], "PIB", array(), "array", false, true), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", true, true))) {
                // line 41
                echo "                                ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "PIB", array(), "array"), 0, array(), "array"), "GDP", array(), "array") / (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "population", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "population", array(), "array"), "NA")) : ("NA"))), "html", null, true);
                echo "
                            ";
            } else {
                // line 43
                echo "                                NA
                            ";
            }
            // line 45
            echo "                        </p>
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
        // line 47
        echo "                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h5>Coissance PIB </h5>
                </div>
                <div class=\"panel-body\">

                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
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
            // line 58
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["data"], "pays", array(), "array")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
            echo " </strong> : 
                            ";
            // line 59
            if ($this->getAttribute($this->getAttribute($context["data"], "economic_indic", array(), "array", false, true), 0, array(), "array", true, true)) {
                // line 60
                echo "                                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "gdpGrowth", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "economic_indic", array(), "array", false, true), 0, array(), "array", false, true), "gdpGrowth", array(), "array"), "NA")) : ("NA")), "html", null, true);
                echo "
                            ";
            } else {
                // line 62
                echo "                                NA
                            ";
            }
            // line 64
            echo "                        </p>
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
        // line 66
        echo "                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h5>Croissance population </h5>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 76
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["data"], "pays", array(), "array")), "html", null, true);
            echo " 
                            ";
            // line 77
            if ($this->getAttribute($this->getAttribute($context["data"], "population growth", array(), "array", false, true), 0, array(), "array", true, true)) {
                // line 78
                echo "                                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "population growth", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "population growth", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
                echo "  :
                                ";
                // line 79
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "population growth", array(), "array", false, true), 0, array(), "array", false, true), "Populationgrowth", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "population growth", array(), "array", false, true), 0, array(), "array", false, true), "Populationgrowth", array(), "array"), "NA")) : ("NA")), "html", null, true);
                echo "
                            ";
            } else {
                // line 81
                echo "                                NA
                            ";
            }
            // line 83
            echo "                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h5>Densité population </h5>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 95
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["data"], "pays", array(), "array")), "html", null, true);
            echo " 
                            ";
            // line 96
            if ($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", true, true)) {
                // line 97
                echo "                                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "dateOfInformation", array(), "array"), "NA")) : ("NA")), "html", null, true);
                echo " :
                                ";
                // line 98
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "density", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "parametre_population", array(), "array", false, true), 0, array(), "array", false, true), "density", array(), "array"), "NA")) : ("NA")), "html", null, true);
                echo "
                            ";
            } else {
                // line 100
                echo "                                NA
                            ";
            }
            // line 102
            echo "                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution PIB</h4>
                <div id=\"evpib\" style=\"height: 250px;\"></div>
                <p></p>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution Export net</h4>
                <div id=\"evexportnet\" style=\"height: 250px;\"></div>
            </div>
        </div>
    </div>
    <div class=\"row\">   
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution revenu fiscal</h4>
                <div id=\"evfixcal\" style=\"height: 250px;\"></div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h4>Evolution inflation</h4>
                <div id=\"evinflation\" style=\"height: 250px;\"></div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"well\">
            <h4>Evolution investissement</h4>
            <div id=\"evinvestmen\" style=\"height: 250px;\"></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"well\">
            <h4>Evolution inflation et PIB</h4>
            <div id=\"evinfl_pib\" style=\"height: 250px;\"></div>
        </div>
    </div>

    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 151
            echo "        <div class=\"row\">
            ";
            // line 152
            $context["pays"] = $this->getAttribute($context["item"], "pays", array(), "array");
            // line 153
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "economic_data", array(), "array"));
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
                // line 154
                echo "                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "economic_data", array(), "array")) == 2)) {
                    // line 155
                    echo "                    ";
                    $context["class"] = "col-lg-6";
                    // line 156
                    echo "                ";
                } else {
                    // line 157
                    echo "                    ";
                    $context["class"] = "col-lg-4";
                    // line 158
                    echo "                ";
                }
                // line 159
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\">
                    <div class=\"well\">
                        <h4>Repartition investissement ";
                // line 161
                echo twig_escape_filter($this->env, (((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array(), "array")), "html", null, true);
                echo "</h4>
                        <div id=\"";
                // line 162
                echo twig_escape_filter($this->env, ((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
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
            // line 166
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "
";
        
        $__internal_b8f94315e2a12b0c9bc2c664e1c9c34aca365c05a351ee1210281d022f022eac->leave($__internal_b8f94315e2a12b0c9bc2c664e1c9c34aca365c05a351ee1210281d022f022eac_prof);

    }

    // line 170
    public function block_Script($context, array $blocks = array())
    {
        $__internal_f41fb587c1bc7d74c0a3602e1faa19a51b50620039d98670ed06caf63d02fccb = $this->env->getExtension("native_profiler");
        $__internal_f41fb587c1bc7d74c0a3602e1faa19a51b50620039d98670ed06caf63d02fccb->enter($__internal_f41fb587c1bc7d74c0a3602e1faa19a51b50620039d98670ed06caf63d02fccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo " 
    ";
        // line 171
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
    ";
        // line 172
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56759a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56759a0_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/56759a0_morris.min_1.js");
            // line 174
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
        // line 176
        echo "    <script>

        ";
        // line 178
        if ((twig_length_filter($this->env, (isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee"))) == 2)) {
            // line 179
            echo "            ";
            $context["pays"] = array(0 => $this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), 0, array(), "array"), "pays", array(), "array"), 1 => $this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), 1, array(), "array"), "pays", array(), "array"), 2 => null);
            // line 180
            echo "        ";
        } else {
            // line 181
            echo "            ";
            $context["pays"] = array(0 => $this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), 0, array(), "array"), "pays", array(), "array"), 1 => $this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), 1, array(), "array"), "pays", array(), "array"), 2 => $this->getAttribute($this->getAttribute((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), 2, array(), "array"), "pays", array(), "array"));
            // line 182
            echo "        ";
        }
        // line 183
        echo "
        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 185
            echo "            ";
            $context["p"] = $this->getAttribute($context["item"], "pays", array(), "array");
            // line 186
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "economic_data", array(), "array"));
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
                // line 187
                echo "                ";
                $context["vari"] = $this->env->getExtension('app_extension')->donotFilter($context["data"], "publicInvestment", "privateInvestment", "foreignDirectInvestment");
                // line 188
                echo "                    dessine(\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["vari"]) ? $context["vari"] : $this->getContext($context, "vari")), 0, array(), "array")), "html", null, true);
                echo "\", 'publicInvestment', 'privateInvestment', '";
                echo twig_escape_filter($this->env, ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
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
            // line 190
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
        ";
        // line 192
        $context["evinfl_pib"] = $this->env->getExtension('app_extension')->ManybarFilter((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "PIB", "economic_data", "GDP", "priceIndex", "dateOfInformation");
        echo "  
        ";
        // line 193
        $context["evpib"] = $this->env->getExtension('app_extension')->twoFilter((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "PIB", "dateOfInformation", "GDP");
        // line 194
        echo "        ";
        $context["evexportnet"] = $this->env->getExtension('app_extension')->twoFilter((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "Net Export", "dateOfInformation", "NE");
        // line 195
        echo "        ";
        $context["evfixcal"] = $this->env->getExtension('app_extension')->twoFilter((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "economic_data", "dateOfInformation", "fiscalRevenue");
        // line 196
        echo "        ";
        $context["evinflation"] = $this->env->getExtension('app_extension')->twoFilter((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "economic_data", "dateOfInformation", "priceIndex");
        // line 197
        echo "        ";
        $context["evinvestmen"] = $this->env->getExtension('app_extension')->twoFilter((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")), "economic_data", "dateOfInformation", "investment");
        // line 198
        echo "            dessineMany(\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["evpib"]) ? $context["evpib"] : $this->getContext($context, "evpib"))), "html", null, true);
        echo "\", 'dateOfInformation',";
        echo twig_jsonencode_filter((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        echo " , 'evpib', 'L')
                    dessineMany(\"";
        // line 199
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["evinvestmen"]) ? $context["evinvestmen"] : $this->getContext($context, "evinvestmen"))), "html", null, true);
        echo "\", 'dateOfInformation',";
        echo twig_jsonencode_filter((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        echo " , 'evinvestmen', 'L')
                    dessineMany(\"";
        // line 200
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["evinflation"]) ? $context["evinflation"] : $this->getContext($context, "evinflation"))), "html", null, true);
        echo "\", 'dateOfInformation',";
        echo twig_jsonencode_filter((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        echo " , 'evinflation', 'L')
                    dessineMany(\"";
        // line 201
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["evfixcal"]) ? $context["evfixcal"] : $this->getContext($context, "evfixcal"))), "html", null, true);
        echo "\", 'dateOfInformation',";
        echo twig_jsonencode_filter((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        echo " , 'evfixcal', 'L')
                    dessineMany(\"";
        // line 202
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["evexportnet"]) ? $context["evexportnet"] : $this->getContext($context, "evexportnet"))), "html", null, true);
        echo "\", 'dateOfInformation',";
        echo twig_jsonencode_filter((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        echo " , 'evexportnet', 'L')
                    dessinebardeux(\"";
        // line 203
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["evinfl_pib"]) ? $context["evinfl_pib"] : $this->getContext($context, "evinfl_pib")), 0, array(), "array")), "html", null, true);
        echo "\", 'dateOfInformation', ";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["evinfl_pib"]) ? $context["evinfl_pib"] : $this->getContext($context, "evinfl_pib")), 1, array(), "array"));
        echo ", 'evinfl_pib')
    </script>
";
        
        $__internal_f41fb587c1bc7d74c0a3602e1faa19a51b50620039d98670ed06caf63d02fccb->leave($__internal_f41fb587c1bc7d74c0a3602e1faa19a51b50620039d98670ed06caf63d02fccb_prof);

    }

    public function getTemplateName()
    {
        return "HeebaridataBundle::ManyPaysresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 203,  619 => 202,  613 => 201,  607 => 200,  601 => 199,  594 => 198,  591 => 197,  588 => 196,  585 => 195,  582 => 194,  580 => 193,  576 => 192,  573 => 191,  567 => 190,  548 => 188,  545 => 187,  527 => 186,  524 => 185,  520 => 184,  517 => 183,  514 => 182,  511 => 181,  508 => 180,  505 => 179,  503 => 178,  499 => 176,  479 => 174,  475 => 172,  471 => 171,  463 => 170,  455 => 168,  448 => 166,  430 => 162,  426 => 161,  420 => 159,  417 => 158,  414 => 157,  411 => 156,  408 => 155,  405 => 154,  387 => 153,  385 => 152,  382 => 151,  378 => 150,  330 => 104,  323 => 102,  319 => 100,  314 => 98,  309 => 97,  307 => 96,  302 => 95,  298 => 94,  287 => 85,  280 => 83,  276 => 81,  271 => 79,  266 => 78,  264 => 77,  259 => 76,  255 => 75,  244 => 66,  229 => 64,  225 => 62,  219 => 60,  217 => 59,  210 => 58,  193 => 57,  181 => 47,  166 => 45,  162 => 43,  156 => 41,  154 => 40,  147 => 39,  130 => 38,  120 => 30,  107 => 25,  101 => 24,  97 => 23,  91 => 20,  84 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  53 => 6,  47 => 5,  36 => 3,  11 => 2,);
    }
}
/* {# src/Heebari/dataBundle/Resources/views/result.html.twig #}*/
/* {% extends "@template/result.html.twig" %}*/
/* {%block titre %}*/
/* {% endblock titre %}*/
/* {% block resultat %}*/
/* */
/* */
/*     {% if donnee | length == 2%}*/
/*         {% set now =  [donnee[0]["economic_indic"][0]["dateOfInformation"]| default("NA"),donnee[1]["economic_indic"][0]["dateOfInformation"]| default("NA")] %}*/
/*         {% set class = "col-lg-6" %}*/
/*     {% else%}*/
/*         {% set class = "col-lg-4" %}*/
/*         {% set now =  [donnee[0]["economic_indic"][0]["dateOfInformation"]| default("NA"),donnee[1]["economic_indic"][0]["dateOfInformation"]| default("NA"),donnee[2]["economic_indic"][0]["dateOfInformation"] | default("NA")] %}*/
/*     {% endif %}*/
/*     <div class="row">*/
/*         {% for data in donnee %}*/
/*             <div class="{{ class }}">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <h4>{{ data['pays']|upper }}</h4>*/
/*                     </div>*/
/*                     <div class="panel-body">               */
/*                         <p>Monnaie :&nbsp;{{ data["monaie"][0]["currency"] | default("NA")}}</p>*/
/*                         <p>Population en {{ data["parametre_population"][0]["dateOfInformation"]| default("NA")}}&nbsp;:{{ data["parametre_population"][0]["population"]| default("NA")}}</p>*/
/*                         <p>Pib  en   {{ data["PIB"][0]["dateOfInformation"] | default("NA")}}&nbsp;:{{ data["PIB"][0]["GDP"]| default("NA")}} </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h5>PIB par habitant </h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% for data in donnee %}*/
/*                         <p>{{ data['pays']|upper }} {{now[loop.index-1]}} </strong> :*/
/*                             {% if data["PIB"][0]  is defined and data["parametre_population"][0] is defined %}*/
/*                                 {{ data["PIB"][0]["GDP"]/data["parametre_population"][0]["population"]| default("NA")}}*/
/*                             {% else%}*/
/*                                 NA*/
/*                             {% endif %}*/
/*                         </p>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h5>Coissance PIB </h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                     {% for data in donnee %}*/
/*                         <p>{{ data['pays']|upper }} {{now[loop.index-1]}} </strong> : */
/*                             {% if data["economic_indic"][0] is defined %}*/
/*                                 {{ data["economic_indic"][0]["gdpGrowth"]| default("NA")}}*/
/*                             {% else%}*/
/*                                 NA*/
/*                             {% endif %}*/
/*                         </p>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h5>Croissance population </h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% for data in donnee %}*/
/*                         <p>{{ data['pays']|upper }} */
/*                             {% if data["population growth"][0] is defined %}*/
/*                                 {{data["population growth"][0]["dateOfInformation"]|default('NA')}}  :*/
/*                                 {{ data["population growth"][0]["Populationgrowth"]| default("NA")}}*/
/*                             {% else%}*/
/*                                 NA*/
/*                             {% endif %}*/
/*                         </p>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h5>Densité population </h5>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% for data in donnee %}*/
/*                         <p>{{ data['pays']|upper }} */
/*                             {% if data["parametre_population"][0] is defined %}*/
/*                                 {{data["parametre_population"][0]["dateOfInformation"]|default('NA')}} :*/
/*                                 {{ data["parametre_population"][0]["density"]| default("NA")}}*/
/*                             {% else%}*/
/*                                 NA*/
/*                             {% endif %}*/
/*                         </p>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution PIB</h4>*/
/*                 <div id="evpib" style="height: 250px;"></div>*/
/*                 <p></p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution Export net</h4>*/
/*                 <div id="evexportnet" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">   */
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution revenu fiscal</h4>*/
/*                 <div id="evfixcal" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h4>Evolution inflation</h4>*/
/*                 <div id="evinflation" style="height: 250px;"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="well">*/
/*             <h4>Evolution investissement</h4>*/
/*             <div id="evinvestmen" style="height: 250px;"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="well">*/
/*             <h4>Evolution inflation et PIB</h4>*/
/*             <div id="evinfl_pib" style="height: 250px;"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% for item in donnee %}*/
/*         <div class="row">*/
/*             {% set pays = item["pays"]%}*/
/*             {% for data in item["economic_data"] %}*/
/*                 {% if item["economic_data"] | length == 2%}*/
/*                     {% set class = "col-lg-6" %}*/
/*                 {% else%}*/
/*                     {% set class = "col-lg-4" %}*/
/*                 {% endif %}*/
/*                 <div class="{{ class }}">*/
/*                     <div class="well">*/
/*                         <h4>Repartition investissement {{ pays ~ ' ' ~ data['dateOfInformation'] }}</h4>*/
/*                         <div id="{{pays ~ loop.index}}" style="height: 250px;"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endblock resultat %}*/
/* {% block Script %} */
/*     {{ parent() }}*/
/*     {% javascripts 'bundles/Heebaridata/Script/morrisjs/morris.min.js'*/
/*                     'bundles/Heebaridata/Script/raphael/raphael-min.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script>*/
/* */
/*         {% if donnee | length == 2%}*/
/*             {% set pays = [donnee[0]["pays"],donnee[1]["pays"],null] %}*/
/*         {% else%}*/
/*             {% set pays = [donnee[0]["pays"],donnee[1]["pays"],donnee[2]["pays"]] %}*/
/*         {% endif %}*/
/* */
/*         {% for item in donnee %}*/
/*             {% set p = item["pays"]%}*/
/*             {% for data in item["economic_data"] %}*/
/*                 {% set vari =  data | donot('publicInvestment','privateInvestment','foreignDirectInvestment') %}*/
/*                     dessine("{{vari[0] | json_encode()}}", 'publicInvestment', 'privateInvestment', '{{ p  ~ loop.index}}', 'D')*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         {% set evinfl_pib = donnee | Manybar('PIB','economic_data','GDP','priceIndex','dateOfInformation')  %}  */
/*         {% set evpib = donnee | two('PIB','dateOfInformation','GDP')  %}*/
/*         {% set evexportnet = donnee | two('Net Export','dateOfInformation','NE') %}*/
/*         {% set evfixcal = donnee | two('economic_data','dateOfInformation','fiscalRevenue')   %}*/
/*         {% set evinflation = donnee | two('economic_data','dateOfInformation','priceIndex')   %}*/
/*         {% set evinvestmen = donnee | two('economic_data','dateOfInformation','investment')  %}*/
/*             dessineMany("{{evpib|json_encode()}}", 'dateOfInformation',{{ pays |json_encode()|raw }} , 'evpib', 'L')*/
/*                     dessineMany("{{evinvestmen|json_encode()}}", 'dateOfInformation',{{ pays |json_encode()|raw }} , 'evinvestmen', 'L')*/
/*                     dessineMany("{{evinflation|json_encode()}}", 'dateOfInformation',{{ pays |json_encode()|raw }} , 'evinflation', 'L')*/
/*                     dessineMany("{{evfixcal|json_encode()}}", 'dateOfInformation',{{ pays |json_encode()|raw }} , 'evfixcal', 'L')*/
/*                     dessineMany("{{evexportnet | json_encode()}}", 'dateOfInformation',{{ pays |json_encode()|raw }} , 'evexportnet', 'L')*/
/*                     dessinebardeux("{{evinfl_pib[0] | json_encode()}}", 'dateOfInformation', {{ evinfl_pib[1] |json_encode()|raw }}, 'evinfl_pib')*/
/*     </script>*/
/* {% endblock Script %}              */
