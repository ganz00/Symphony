<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/56759a0')) {
            // _assetic_56759a0
            if ($pathinfo === '/js/56759a0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '56759a0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_56759a0',);
            }

            if (0 === strpos($pathinfo, '/js/56759a0_')) {
                // _assetic_56759a0_0
                if ($pathinfo === '/js/56759a0_morris.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '56759a0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_56759a0_0',);
                }

                // _assetic_56759a0_1
                if ($pathinfo === '/js/56759a0_raphael-min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '56759a0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_56759a0_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/b04a795')) {
            // _assetic_b04a795
            if ($pathinfo === '/css/b04a795.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b04a795',);
            }

            if (0 === strpos($pathinfo, '/css/b04a795_part_1_')) {
                // _assetic_b04a795_0
                if ($pathinfo === '/css/b04a795_part_1_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b04a795_0',);
                }

                // _assetic_b04a795_1
                if ($pathinfo === '/css/b04a795_part_1_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b04a795_1',);
                }

                // _assetic_b04a795_2
                if ($pathinfo === '/css/b04a795_part_1_liscroll_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b04a795_2',);
                }

                if (0 === strpos($pathinfo, '/css/b04a795_part_1_m')) {
                    // _assetic_b04a795_3
                    if ($pathinfo === '/css/b04a795_part_1_metisMenu.min_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_b04a795_3',);
                    }

                    // _assetic_b04a795_4
                    if ($pathinfo === '/css/b04a795_part_1_morris_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_b04a795_4',);
                    }

                }

                // _assetic_b04a795_5
                if ($pathinfo === '/css/b04a795_part_1_sb-admin-2_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b04a795',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_b04a795_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/faea32d')) {
                // _assetic_faea32d
                if ($pathinfo === '/js/faea32d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'faea32d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_faea32d',);
                }

                // _assetic_faea32d_0
                if ($pathinfo === '/js/faea32d_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'faea32d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_faea32d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/486aea1')) {
                // _assetic_486aea1
                if ($pathinfo === '/js/486aea1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_486aea1',);
                }

                if (0 === strpos($pathinfo, '/js/486aea1_part_1_')) {
                    // _assetic_486aea1_0
                    if ($pathinfo === '/js/486aea1_part_1_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_486aea1_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/486aea1_part_1_graph')) {
                        // _assetic_486aea1_1
                        if ($pathinfo === '/js/486aea1_part_1_graphdess_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_486aea1_1',);
                        }

                        // _assetic_486aea1_2
                        if ($pathinfo === '/js/486aea1_part_1_graphe_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_486aea1_2',);
                        }

                    }

                    // _assetic_486aea1_3
                    if ($pathinfo === '/js/486aea1_part_1_liscroll_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_486aea1_3',);
                    }

                    // _assetic_486aea1_4
                    if ($pathinfo === '/js/486aea1_part_1_metisMenu_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_486aea1_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/486aea1_part_1_s')) {
                        // _assetic_486aea1_5
                        if ($pathinfo === '/js/486aea1_part_1_sb-admin-2_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_486aea1_5',);
                        }

                        // _assetic_486aea1_6
                        if ($pathinfo === '/js/486aea1_part_1_scripts_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '486aea1',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_486aea1_6',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/Heebari')) {
            // heebaridata_homepage
            if ($pathinfo === '/Heebari') {
                return array (  '_controller' => 'Heebari\\dataBundle\\Controller\\DefaultController::indexAction',  '_route' => 'heebaridata_homepage',);
            }

            if (0 === strpos($pathinfo, '/Heebari/seach')) {
                // heebaridata_crossseach2
                if (preg_match('#^/Heebari/seach/(?P<pays1>[^/\\-]++)\\-(?P<pays2>[^/\\-]++)\\-(?P<pays3>[^/]++)/(?P<cle>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'heebaridata_crossseach2')), array (  '_controller' => 'Heebari\\dataBundle\\Controller\\CrossSeachController::ManycountryAction',));
                }

                // heebaridata_crossseach
                if (preg_match('#^/Heebari/seach/(?P<pays1>[^/\\-]++)\\-(?P<pays2>[^/]++)/(?P<cle>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'heebaridata_crossseach')), array (  '_controller' => 'Heebari\\dataBundle\\Controller\\CrossSeachController::ManycountryAction',));
                }

                // heebaridata_calculateseach
                if (0 === strpos($pathinfo, '/Heebari/seach/calculate') && preg_match('#^/Heebari/seach/calculate/(?P<chaine>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'heebaridata_calculateseach')), array (  '_controller' => 'Heebari\\dataBundle\\Controller\\calculateseachController::oneperAction',));
                }

                // heebaridata_seachdefault
                if (preg_match('#^/Heebari/seach/(?P<chaine>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'heebaridata_seachdefault')), array (  '_controller' => 'Heebari\\dataBundle\\Controller\\DefaultController::seachAction',));
                }

                // heebaridata_goseach
                if ($pathinfo === '/Heebari/seach') {
                    return array (  '_controller' => 'Heebari\\dataBundle\\Controller\\DefaultController::goAction',  '_route' => 'heebaridata_goseach',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/login/log')) {
            if (0 === strpos($pathinfo, '/login/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/login/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
