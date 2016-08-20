<?php

/* @template/Simpleresult.html.twig */
class __TwigTemplate_d360be2006f028ec5079235a1403e87ee316d2b9ecd0838b6af142c07f50bfac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@template/result.html.twig", "@template/Simpleresult.html.twig", 2);
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
        $__internal_f76bf66002ab3e6659ce3c5c0d162020ad91f8f3338af3e09e9fa16c8daf9c6d = $this->env->getExtension("native_profiler");
        $__internal_f76bf66002ab3e6659ce3c5c0d162020ad91f8f3338af3e09e9fa16c8daf9c6d->enter($__internal_f76bf66002ab3e6659ce3c5c0d162020ad91f8f3338af3e09e9fa16c8daf9c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@template/Simpleresult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76bf66002ab3e6659ce3c5c0d162020ad91f8f3338af3e09e9fa16c8daf9c6d->leave($__internal_f76bf66002ab3e6659ce3c5c0d162020ad91f8f3338af3e09e9fa16c8daf9c6d_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d67e2d86bdd8c5e8dcd9135c2d7c0d1be692c6ce74cd24a9805559e165f7a883 = $this->env->getExtension("native_profiler");
        $__internal_d67e2d86bdd8c5e8dcd9135c2d7c0d1be692c6ce74cd24a9805559e165f7a883->enter($__internal_d67e2d86bdd8c5e8dcd9135c2d7c0d1be692c6ce74cd24a9805559e165f7a883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_d67e2d86bdd8c5e8dcd9135c2d7c0d1be692c6ce74cd24a9805559e165f7a883->leave($__internal_d67e2d86bdd8c5e8dcd9135c2d7c0d1be692c6ce74cd24a9805559e165f7a883_prof);

    }

    // line 6
    public function block_resultat($context, array $blocks = array())
    {
        $__internal_04319c531db352cad5337b99e3aec8e8754b1c4766cb5c9d8f9fe8eaef934a5a = $this->env->getExtension("native_profiler");
        $__internal_04319c531db352cad5337b99e3aec8e8754b1c4766cb5c9d8f9fe8eaef934a5a->enter($__internal_04319c531db352cad5337b99e3aec8e8754b1c4766cb5c9d8f9fe8eaef934a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "resultat"));

        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donnee"]) ? $context["donnee"] : $this->getContext($context, "donnee")));
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
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
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
                if (((isset($context["head"]) ? $context["head"] : $this->getContext($context, "head")) == "GDP")) {
                    // line 27
                    echo "                            ";
                    $context["head"] = "PIB";
                    // line 28
                    echo "                         ";
                }
                // line 29
                echo "                    <h5>";
                echo twig_escape_filter($this->env, (((($context["ke"] . " ") . (isset($context["head"]) ? $context["head"] : $this->getContext($context, "head"))) . " ") . $this->getAttribute($context["data"], "dateOfInformation", array())), "html", null, true);
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
                        echo twig_escape_filter($this->env, (((((isset($context["champ"]) ? $context["champ"] : $this->getContext($context, "champ")) . " : ") . $context["val"]) . " ") . (isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))), "html", null, true);
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
        
        $__internal_04319c531db352cad5337b99e3aec8e8754b1c4766cb5c9d8f9fe8eaef934a5a->leave($__internal_04319c531db352cad5337b99e3aec8e8754b1c4766cb5c9d8f9fe8eaef934a5a_prof);

    }

    // line 50
    public function block_Script($context, array $blocks = array())
    {
        $__internal_29453bbd9958b16482eeffb8f9212877fcddb269cdbefb9aadaf98eabebb2bf0 = $this->env->getExtension("native_profiler");
        $__internal_29453bbd9958b16482eeffb8f9212877fcddb269cdbefb9aadaf98eabebb2bf0->enter($__internal_29453bbd9958b16482eeffb8f9212877fcddb269cdbefb9aadaf98eabebb2bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        echo " 
    ";
        // line 51
        $this->displayParentBlock("Script", $context, $blocks);
        echo "
";
        
        $__internal_29453bbd9958b16482eeffb8f9212877fcddb269cdbefb9aadaf98eabebb2bf0->leave($__internal_29453bbd9958b16482eeffb8f9212877fcddb269cdbefb9aadaf98eabebb2bf0_prof);

    }

    public function getTemplateName()
    {
        return "@template/Simpleresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 51,  189 => 50,  181 => 48,  174 => 46,  165 => 42,  155 => 40,  152 => 39,  149 => 38,  147 => 37,  142 => 36,  139 => 35,  136 => 34,  133 => 33,  128 => 32,  121 => 29,  118 => 28,  115 => 27,  113 => 26,  108 => 25,  105 => 24,  102 => 23,  100 => 22,  93 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  74 => 13,  69 => 12,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  53 => 7,  47 => 6,  36 => 3,  11 => 2,);
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
