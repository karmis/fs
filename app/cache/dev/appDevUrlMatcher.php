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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/b88ac68')) {
                // _assetic_b88ac68
                if ($pathinfo === '/assetic/b88ac68.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b88ac68',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b88ac68',);
                }

                // _assetic_b88ac68_0
                if ($pathinfo === '/assetic/b88ac68_home_colornew_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b88ac68',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b88ac68_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/654abaa')) {
                // _assetic_654abaa
                if ($pathinfo === '/assetic/654abaa.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '654abaa',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_654abaa',);
                }

                // _assetic_654abaa_0
                if ($pathinfo === '/assetic/654abaa_skype_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '654abaa',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_654abaa_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/compiled')) {
            if (0 === strpos($pathinfo, '/compiled/css/all')) {
                // _assetic_c5232fc
                if ($pathinfo === '/compiled/css/all.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c5232fc',);
                }

                if (0 === strpos($pathinfo, '/compiled/css/all_')) {
                    // _assetic_c5232fc_0
                    if ($pathinfo === '/compiled/css/all_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c5232fc_0',);
                    }

                    // _assetic_c5232fc_1
                    if ($pathinfo === '/compiled/css/all_fonts_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c5232fc_1',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/css/all_jquery.')) {
                        if (0 === strpos($pathinfo, '/compiled/css/all_jquery.fancybox')) {
                            // _assetic_c5232fc_2
                            if ($pathinfo === '/compiled/css/all_jquery.fancybox_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c5232fc_2',);
                            }

                            if (0 === strpos($pathinfo, '/compiled/css/all_jquery.fancybox-')) {
                                // _assetic_c5232fc_3
                                if ($pathinfo === '/compiled/css/all_jquery.fancybox-buttons_4.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c5232fc_3',);
                                }

                                // _assetic_c5232fc_4
                                if ($pathinfo === '/compiled/css/all_jquery.fancybox-thumbs_5.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c5232fc_4',);
                                }

                            }

                        }

                        // _assetic_c5232fc_5
                        if ($pathinfo === '/compiled/css/all_jquery.bxslider_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_c5232fc_5',);
                        }

                    }

                    // _assetic_c5232fc_6
                    if ($pathinfo === '/compiled/css/all_main_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5232fc',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_c5232fc_6',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/js/all')) {
                // _assetic_eacd490
                if ($pathinfo === '/compiled/js/all.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_eacd490',);
                }

                if (0 === strpos($pathinfo, '/compiled/js/all_')) {
                    if (0 === strpos($pathinfo, '/compiled/js/all_jquery')) {
                        // _assetic_eacd490_0
                        if ($pathinfo === '/compiled/js/all_jquery.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_eacd490_0',);
                        }

                        // _assetic_eacd490_1
                        if ($pathinfo === '/compiled/js/all_jquery-migrate.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_eacd490_1',);
                        }

                    }

                    // _assetic_eacd490_2
                    if ($pathinfo === '/compiled/js/all_tabs_jquery_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_eacd490_2',);
                    }

                    // _assetic_eacd490_3
                    if ($pathinfo === '/compiled/js/all_bootstrap.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_eacd490_3',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/all_jquery.')) {
                        // _assetic_eacd490_4
                        if ($pathinfo === '/compiled/js/all_jquery.bxslider.min_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_eacd490_4',);
                        }

                        // _assetic_eacd490_5
                        if ($pathinfo === '/compiled/js/all_jquery.mousewheel-3.0.6.pack_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_eacd490_5',);
                        }

                        if (0 === strpos($pathinfo, '/compiled/js/all_jquery.fancybox')) {
                            // _assetic_eacd490_6
                            if ($pathinfo === '/compiled/js/all_jquery.fancybox.pack_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_eacd490_6',);
                            }

                            if (0 === strpos($pathinfo, '/compiled/js/all_jquery.fancybox-')) {
                                // _assetic_eacd490_7
                                if ($pathinfo === '/compiled/js/all_jquery.fancybox-buttons_8.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_eacd490_7',);
                                }

                                // _assetic_eacd490_8
                                if ($pathinfo === '/compiled/js/all_jquery.fancybox-media_9.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_eacd490_8',);
                                }

                                // _assetic_eacd490_9
                                if ($pathinfo === '/compiled/js/all_jquery.fancybox-thumbs_10.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_eacd490_9',);
                                }

                            }

                        }

                    }

                    // _assetic_eacd490_10
                    if ($pathinfo === '/compiled/js/all_modernizr.custom_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_eacd490_10',);
                    }

                    // _assetic_eacd490_11
                    if ($pathinfo === '/compiled/js/all_cbpHorizontalSlideOutMenu.min_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_eacd490_11',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/all_jquery.')) {
                        // _assetic_eacd490_12
                        if ($pathinfo === '/compiled/js/all_jquery.maskedinput_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_eacd490_12',);
                        }

                        // _assetic_eacd490_13
                        if ($pathinfo === '/compiled/js/all_jquery.quicksand_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_eacd490_13',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/compiled/js/all_q')) {
                        // _assetic_eacd490_14
                        if ($pathinfo === '/compiled/js/all_quicksandpaginated.jquery_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_eacd490_14',);
                        }

                        // _assetic_eacd490_15
                        if ($pathinfo === '/compiled/js/all_qsmain_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_eacd490_15',);
                        }

                    }

                    // _assetic_eacd490_16
                    if ($pathinfo === '/compiled/js/all_calc_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_eacd490_16',);
                    }

                    // _assetic_eacd490_17
                    if ($pathinfo === '/compiled/js/all_scripts_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eacd490',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_eacd490_17',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/d28c992')) {
                // _assetic_d28c992
                if ($pathinfo === '/assetic/d28c992.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd28c992',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_d28c992',);
                }

                // _assetic_d28c992_0
                if ($pathinfo === '/assetic/d28c992_prodvizheniye_raketa_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd28c992',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_d28c992_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/b76c3df')) {
                // _assetic_b76c3df
                if ($pathinfo === '/assetic/b76c3df.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b76c3df',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b76c3df',);
                }

                // _assetic_b76c3df_0
                if ($pathinfo === '/assetic/b76c3df_khosting_i_arenda_servera_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b76c3df',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b76c3df_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/0cc864e')) {
                // _assetic_0cc864e
                if ($pathinfo === '/assetic/0cc864e.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0cc864e',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_0cc864e',);
                }

                // _assetic_0cc864e_0
                if ($pathinfo === '/assetic/0cc864e_zashchita_sayta_ot_vzloma_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0cc864e',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_0cc864e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/e')) {
                if (0 === strpos($pathinfo, '/assetic/efd2940')) {
                    // _assetic_efd2940
                    if ($pathinfo === '/assetic/efd2940.jpg') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'efd2940',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_efd2940',);
                    }

                    // _assetic_efd2940_0
                    if ($pathinfo === '/assetic/efd2940_registratsiya_domenov_1.jpg') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'efd2940',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_efd2940_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/assetic/ebc9f30')) {
                    // _assetic_ebc9f30
                    if ($pathinfo === '/assetic/ebc9f30.jpg') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ebc9f30',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_ebc9f30',);
                    }

                    // _assetic_ebc9f30_0
                    if ($pathinfo === '/assetic/ebc9f30_rezervnoye_kopirovaniye_1.jpg') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ebc9f30',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_ebc9f30_0',);
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // main_page
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_main_page;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_page');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_page',);
        }
        not_main_page:

        // contact_page
        if ($pathinfo === '/contacts') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_contact_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact_page',);
        }
        not_contact_page:

        // domains_page
        if ($pathinfo === '/domains') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_domains_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::domainsAction',  '_route' => 'domains_page',);
        }
        not_domains_page:

        // advertising_page
        if ($pathinfo === '/advertising') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_advertising_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::advertisingAction',  '_route' => 'advertising_page',);
        }
        not_advertising_page:

        // shop_page
        if ($pathinfo === '/shop') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_shop_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::shopAction',  '_route' => 'shop_page',);
        }
        not_shop_page:

        // vizitka_page
        if ($pathinfo === '/vizitka') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vizitka_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::vizitkaAction',  '_route' => 'vizitka_page',);
        }
        not_vizitka_page:

        // corp_page
        if ($pathinfo === '/corp') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_corp_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::corpAction',  '_route' => 'corp_page',);
        }
        not_corp_page:

        // landing_page
        if ($pathinfo === '/landing') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_landing_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::landingAction',  '_route' => 'landing_page',);
        }
        not_landing_page:

        // promotion_page
        if ($pathinfo === '/promotion') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_promotion_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::promotionAction',  '_route' => 'promotion_page',);
        }
        not_promotion_page:

        // installments_page
        if ($pathinfo === '/installments') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_installments_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::installmentsAction',  '_route' => 'installments_page',);
        }
        not_installments_page:

        // social_page
        if ($pathinfo === '/social') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_social_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::socialAction',  '_route' => 'social_page',);
        }
        not_social_page:

        // gotovie_page
        if ($pathinfo === '/gotovie') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gotovie_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::gotovieAction',  '_route' => 'gotovie_page',);
        }
        not_gotovie_page:

        // support_page
        if ($pathinfo === '/support') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_support_page;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::supportAction',  '_route' => 'support_page',);
        }
        not_support_page:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
