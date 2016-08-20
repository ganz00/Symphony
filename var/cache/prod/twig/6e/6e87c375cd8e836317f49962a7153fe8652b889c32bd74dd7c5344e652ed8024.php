<?php

/* @template/Template.html.twig */
class __TwigTemplate_e7b56006bac088a516a84e7f8ada76452bd027f73ac541f72c0c41f77e109faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Heebari.html.twig", "@template/Template.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_content' => array($this, 'block_page_content'),
            'content' => array($this, 'block_content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Heebari.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b04a795_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795_0") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795_part_1_bootstrap_1.css");
            // line 4
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "b04a795_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795_1") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795_part_1_font-awesome_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "b04a795_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795_2") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795_part_1_liscroll_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "b04a795_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795_3") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795_part_1_metisMenu.min_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "b04a795_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795_4") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795_part_1_morris_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "b04a795_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795_5") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795_part_1_sb-admin-2_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "b04a795"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b04a795") : $this->env->getExtension('asset')->getAssetUrl("css/b04a795.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "faea32d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_faea32d_0") : $this->env->getExtension('asset')->getAssetUrl("js/faea32d_jquery_1.js");
            // line 7
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "faea32d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_faea32d") : $this->env->getExtension('asset')->getAssetUrl("js/faea32d.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "  
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

";
    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" data-spy=\"affix\" data-offset-top=\"50\" datarole=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("heebaridata_homepage");
        echo "\">Heebari</a>
            </div>
            <!-- /.navbar-header -->
            <div class=\"article col-lg-9 col-xs-9\">
                <form class=\"navbar-form navbar-left\"  role=\"search\" method=\"get\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("heebaridata_goseach");
        echo "\">
                    <div class=\"form-group\">
                        <input type=\"text\" id=\"seach\" name=\"seach\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" id=\"send\" class=\"btn btn-default\"> <span class=\"glyphicon glyphicon-search\"></span></button>
                </form>
            </div>
            <ul class=\"nav navbar-top-links navbar-right\">
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"glyphicon glyphicon-user\"> </span>
                        ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        }
        // line 43
        echo "                        </a>
                        <ul class=\"dropdown-menu dropdown-user\">
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"> Profile utilisateur</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "hasPreviousSession", array())) {
            // line 61
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 62
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 63
                    echo "                                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo " label-success\">
                                            ";
                    // line 64
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                            ";
        }
        echo " 
                            <br>
                            <br>
                            <li>
                                <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("heebaridata_homepage");
        echo "\"> <span class=\"glyphicon glyphicon-home\"> </span>&nbsp;Accueil</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"> <span class=\"glyphicon glyphicon-user\"> </span>&nbsp;Profile</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"> <span class=\"glyphicon glyphicon-edit\"> </span>&nbsp;Editer profil</a>
                            </li>
                            <li>
                                <a href=\"#\"> <span class=\"glyphicon glyphicon-list-alt\"> </span>&nbsp;Historique recherche</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    ";
        // line 94
        $context["foo"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "nompays"), "method");
        // line 95
        echo "                    <ul id=\"ticker01\">
                        <li>Liste pays disponible :&nbsp;&nbsp;</li>
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foo"]) ? $context["foo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
            // line 98
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("heebaridata_seachdefault", array("chaine" => $context["mot"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["mot"], "html", null, true);
            echo "&nbsp;</a></li>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </ul>
                    ";
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    ";
    }

    // line 101
    public function block_content($context, array $blocks = array())
    {
        // line 102
        echo "                        ";
        if (array_key_exists("liste", $context)) {
            // line 103
            echo "                            <h3>Liste des mots clé</h3>
                            <ul>
                                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                // line 106
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mot"], "value", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                            </ul> 
                        ";
        }
        // line 110
        echo "                    ";
    }

    // line 119
    public function block_Script($context, array $blocks = array())
    {
        echo " 
        ";
        // line 120
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "486aea1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_0") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_bootstrap_1.js");
            // line 121
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "486aea1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_1") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_graphdess_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "486aea1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_2") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_graphe_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "486aea1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_3") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_liscroll_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "486aea1_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_4") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_metisMenu_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "486aea1_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_5") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_sb-admin-2_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "486aea1_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1_6") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1_part_1_scripts_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "486aea1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_486aea1") : $this->env->getExtension('asset')->getAssetUrl("js/486aea1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 123
        echo " ";
    }

    public function getTemplateName()
    {
        return "@template/Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 123,  328 => 121,  324 => 120,  319 => 119,  315 => 110,  311 => 108,  302 => 106,  298 => 105,  294 => 103,  291 => 102,  288 => 101,  277 => 111,  275 => 101,  272 => 100,  261 => 98,  257 => 97,  253 => 95,  251 => 94,  232 => 78,  226 => 75,  220 => 72,  212 => 68,  206 => 67,  197 => 64,  192 => 63,  187 => 62,  182 => 61,  180 => 60,  163 => 48,  157 => 45,  153 => 43,  149 => 42,  147 => 41,  132 => 29,  125 => 25,  112 => 14,  109 => 13,  102 => 8,  88 => 7,  83 => 6,  39 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "::Heebari.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {% stylesheets  'bundles/Heebaridata/css/test/*' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/*     {% javascripts 'jquery.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}  */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* */
/* {% endblock stylesheets%}*/
/* */
/* {% block page_content %}*/
/*     <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="50" datarole="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ path('heebaridata_homepage') }}">Heebari</a>*/
/*             </div>*/
/*             <!-- /.navbar-header -->*/
/*             <div class="article col-lg-9 col-xs-9">*/
/*                 <form class="navbar-form navbar-left"  role="search" method="get" action="{{ path('heebaridata_goseach')}}">*/
/*                     <div class="form-group">*/
/*                         <input type="text" id="seach" name="seach" class="form-control" placeholder="Search">*/
/*                     </div>*/
/*                     <button type="submit" id="send" class="btn btn-default"> <span class="glyphicon glyphicon-search"></span></button>*/
/*                 </form>*/
/*             </div>*/
/*             <ul class="nav navbar-top-links navbar-right">*/
/*                 <!-- /.dropdown -->*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <span class="glyphicon glyphicon-user"> </span>*/
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             {{ app.user.username }}{% endif %}*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-user">*/
/*                             <li><a href="{{ path('fos_user_profile_show') }}"> Profile utilisateur</a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.dropdown-user -->*/
/*                     </li>*/
/*                     <!-- /.dropdown -->*/
/*                 </ul>*/
/*                 <!-- /.navbar-top-links -->*/
/* */
/*                 <div class="navbar-default sidebar" role="navigation">*/
/*                     <div class="sidebar-nav navbar-collapse">*/
/*                         <ul class="nav" id="side-menu">*/
/*                             {% if app.request.hasPreviousSession %}*/
/*                                 {% for type, messages in app.session.flashbag.all() %}*/
/*                                     {% for message in messages %}*/
/*                                         <div class="flash-{{ type }} label-success">*/
/*                                             {{ message }}*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 {% endfor %}*/
/*                             {% endif %} */
/*                             <br>*/
/*                             <br>*/
/*                             <li>*/
/*                                 <a href="{{ path('heebaridata_homepage') }}"> <span class="glyphicon glyphicon-home"> </span>&nbsp;Accueil</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('fos_user_profile_show') }}"> <span class="glyphicon glyphicon-user"> </span>&nbsp;Profile</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('fos_user_profile_edit') }}"> <span class="glyphicon glyphicon-edit"> </span>&nbsp;Editer profil</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#"> <span class="glyphicon glyphicon-list-alt"> </span>&nbsp;Historique recherche</a>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.sidebar-collapse -->*/
/*                 </div>*/
/*                 <!-- /.navbar-static-side -->*/
/*             </nav>*/
/* */
/*             <!-- Page Content -->*/
/*             <div id="page-wrapper">*/
/*                 <div class="container-fluid">*/
/*                     {% set foo = app.session.get('nompays') %}*/
/*                     <ul id="ticker01">*/
/*                         <li>Liste pays disponible :&nbsp;&nbsp;</li>*/
/*                         {% for mot in foo %}*/
/*                             <li><a href="{{ path('heebaridata_seachdefault',{'chaine': mot}) }}">{{ mot }}&nbsp;</a></li>*/
/*                          {% endfor %}*/
/*                     </ul>*/
/*                     {% block content %}*/
/*                         {% if liste is defined %}*/
/*                             <h3>Liste des mots clé</h3>*/
/*                             <ul>*/
/*                                 {% for mot in liste %}*/
/*                                     <li>{{ mot.value }}</li>*/
/*                                     {% endfor %}*/
/*                             </ul> */
/*                         {% endif %}*/
/*                     {% endblock content %}*/
/*                 </div>*/
/*                 <!-- /.container-fluid -->*/
/*             </div>*/
/*             <!-- /#page-wrapper -->*/
/* */
/*         </div>*/
/*         <!-- /#wrapper -->*/
/*     {% endblock page_content %}*/
/*  {% block Script %} */
/*         {% javascripts 'bundles/Heebaridata/Script/*'%}*/
/*         <script src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*  {% endblock Script %}*/
/* */
/* */
