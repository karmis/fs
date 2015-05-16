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
            if (0 === strpos($pathinfo, '/assetic/e6e2122')) {
                // _assetic_e6e2122
                if ($pathinfo === '/assetic/e6e2122.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e6e2122',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_e6e2122',);
                }

                // _assetic_e6e2122_0
                if ($pathinfo === '/assetic/e6e2122_404_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e6e2122',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_e6e2122_0',);
                }

            }

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

        }

        if (0 === strpos($pathinfo, '/compiled')) {
            if (0 === strpos($pathinfo, '/compiled/css/all-admin')) {
                // _assetic_94eda65
                if ($pathinfo === '/compiled/css/all-admin.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_94eda65',);
                }

                if (0 === strpos($pathinfo, '/compiled/css/all-admin_')) {
                    // _assetic_94eda65_0
                    if ($pathinfo === '/compiled/css/all-admin_select2.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_94eda65_0',);
                    }

                    // _assetic_94eda65_1
                    if ($pathinfo === '/compiled/css/all-admin_jquery-ui-1.10.0.custom_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_94eda65_1',);
                    }

                    // _assetic_94eda65_2
                    if ($pathinfo === '/compiled/css/all-admin_bootstrap.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_94eda65_2',);
                    }

                    // _assetic_94eda65_3
                    if ($pathinfo === '/compiled/css/all-admin_font-awesome.min_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_94eda65_3',);
                    }

                    // _assetic_94eda65_4
                    if ($pathinfo === '/compiled/css/all-admin_content.min_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_94eda65_4',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/css/all-admin_s')) {
                        // _assetic_94eda65_5
                        if ($pathinfo === '/compiled/css/all-admin_skin.min_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_94eda65_5',);
                        }

                        // _assetic_94eda65_6
                        if ($pathinfo === '/compiled/css/all-admin_sb-admin_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '94eda65',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_94eda65_6',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/js/all-admin')) {
                // _assetic_222e2ee
                if ($pathinfo === '/compiled/js/all-admin.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_222e2ee',);
                }

                if (0 === strpos($pathinfo, '/compiled/js/all-admin_')) {
                    if (0 === strpos($pathinfo, '/compiled/js/all-admin_jquery')) {
                        // _assetic_222e2ee_0
                        if ($pathinfo === '/compiled/js/all-admin_jquery.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_222e2ee_0',);
                        }

                        // _assetic_222e2ee_1
                        if ($pathinfo === '/compiled/js/all-admin_jquery-migrate.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_222e2ee_1',);
                        }

                    }

                    // _assetic_222e2ee_2
                    if ($pathinfo === '/compiled/js/all-admin_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_222e2ee_2',);
                    }

                    // _assetic_222e2ee_3
                    if ($pathinfo === '/compiled/js/all-admin_jquery-ui-1.9.2.custom.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_222e2ee_3',);
                    }

                    // _assetic_222e2ee_4
                    if ($pathinfo === '/compiled/js/all-admin_select2.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_222e2ee_4',);
                    }

                    // _assetic_222e2ee_5
                    if ($pathinfo === '/compiled/js/all-admin_tinymce.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_222e2ee_5',);
                    }

                    // _assetic_222e2ee_6
                    if ($pathinfo === '/compiled/js/all-admin_validator_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_222e2ee_6',);
                    }

                    // _assetic_222e2ee_7
                    if ($pathinfo === '/compiled/js/all-admin_ui.datepicker-ru_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_222e2ee_7',);
                    }

                    // _assetic_222e2ee_8
                    if ($pathinfo === '/compiled/js/all-admin_jquery.maskedinput_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_222e2ee_8',);
                    }

                    // _assetic_222e2ee_9
                    if ($pathinfo === '/compiled/js/all-admin_bs.utils_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_222e2ee_9',);
                    }

                    // _assetic_222e2ee_10
                    if ($pathinfo === '/compiled/js/all-admin_scripts-admin_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '222e2ee',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_222e2ee_10',);
                    }

                }

            }

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
                // _assetic_d903b7a
                if ($pathinfo === '/compiled/js/all.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d903b7a',);
                }

                if (0 === strpos($pathinfo, '/compiled/js/all_')) {
                    if (0 === strpos($pathinfo, '/compiled/js/all_jquery')) {
                        // _assetic_d903b7a_0
                        if ($pathinfo === '/compiled/js/all_jquery.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d903b7a_0',);
                        }

                        // _assetic_d903b7a_1
                        if ($pathinfo === '/compiled/js/all_jquery-migrate.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d903b7a_1',);
                        }

                    }

                    // _assetic_d903b7a_2
                    if ($pathinfo === '/compiled/js/all_tabs_jquery_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d903b7a_2',);
                    }

                    // _assetic_d903b7a_3
                    if ($pathinfo === '/compiled/js/all_bootstrap.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_d903b7a_3',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/all_jquery.')) {
                        // _assetic_d903b7a_4
                        if ($pathinfo === '/compiled/js/all_jquery.bxslider.min_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_d903b7a_4',);
                        }

                        // _assetic_d903b7a_5
                        if ($pathinfo === '/compiled/js/all_jquery.mousewheel-3.0.6.pack_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_d903b7a_5',);
                        }

                        if (0 === strpos($pathinfo, '/compiled/js/all_jquery.fancybox')) {
                            // _assetic_d903b7a_6
                            if ($pathinfo === '/compiled/js/all_jquery.fancybox.pack_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_d903b7a_6',);
                            }

                            if (0 === strpos($pathinfo, '/compiled/js/all_jquery.fancybox-')) {
                                // _assetic_d903b7a_7
                                if ($pathinfo === '/compiled/js/all_jquery.fancybox-buttons_8.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_d903b7a_7',);
                                }

                                // _assetic_d903b7a_8
                                if ($pathinfo === '/compiled/js/all_jquery.fancybox-media_9.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_d903b7a_8',);
                                }

                                // _assetic_d903b7a_9
                                if ($pathinfo === '/compiled/js/all_jquery.fancybox-thumbs_10.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_d903b7a_9',);
                                }

                            }

                        }

                    }

                    // _assetic_d903b7a_10
                    if ($pathinfo === '/compiled/js/all_modernizr.custom_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_d903b7a_10',);
                    }

                    // _assetic_d903b7a_11
                    if ($pathinfo === '/compiled/js/all_cbpHorizontalSlideOutMenu.min_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_d903b7a_11',);
                    }

                    // _assetic_d903b7a_12
                    if ($pathinfo === '/compiled/js/all_validator_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_d903b7a_12',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/all_jquery.')) {
                        // _assetic_d903b7a_13
                        if ($pathinfo === '/compiled/js/all_jquery.maskedinput_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_d903b7a_13',);
                        }

                        // _assetic_d903b7a_14
                        if ($pathinfo === '/compiled/js/all_jquery.quicksand_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_d903b7a_14',);
                        }

                    }

                    // _assetic_d903b7a_15
                    if ($pathinfo === '/compiled/js/all_quicksandpaginated.jquery_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_d903b7a_15',);
                    }

                    // _assetic_d903b7a_16
                    if ($pathinfo === '/compiled/js/all_punycode.min_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_d903b7a_16',);
                    }

                    // _assetic_d903b7a_17
                    if ($pathinfo === '/compiled/js/all_qsmain_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_d903b7a_17',);
                    }

                    // _assetic_d903b7a_18
                    if ($pathinfo === '/compiled/js/all_calc_19.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_d903b7a_18',);
                    }

                    // _assetic_d903b7a_19
                    if ($pathinfo === '/compiled/js/all_scripts_20.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd903b7a',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_d903b7a_19',);
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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/content/article')) {
                // admin_article
                if (rtrim($pathinfo, '/') === '/admin/content/article') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_article;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_article');
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article',);
                }
                not_admin_article:

                // admin_article_create
                if ($pathinfo === '/admin/content/article/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_article_create;
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'admin_article_create',);
                }
                not_admin_article_create:

                // admin_article_new
                if ($pathinfo === '/admin/content/article/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_article_new;
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::newAction',  '_route' => 'admin_article_new',);
                }
                not_admin_article_new:

                // admin_article_edit
                if (preg_match('#^/admin/content/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_article_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_edit')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::editAction',));
                }
                not_admin_article_edit:

                // admin_article_update
                if (preg_match('#^/admin/content/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_article_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_update')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::updateAction',));
                }
                not_admin_article_update:

                // admin_article_delete
                if (preg_match('#^/admin/content/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_delete')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_admin_article_delete:

            }

            // admin_main_page
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_main_page');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_main_page',);
            }

            if (0 === strpos($pathinfo, '/admin/admin_path')) {
                // admin_path
                if (rtrim($pathinfo, '/') === '/admin/admin_path') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_path;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_path');
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\PathController::indexAction',  '_route' => 'admin_path',);
                }
                not_admin_path:

                // admin_path_create
                if ($pathinfo === '/admin/admin_path/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_path_create;
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\PathController::createAction',  '_route' => 'admin_path_create',);
                }
                not_admin_path_create:

                // admin_path_new
                if ($pathinfo === '/admin/admin_path/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_path_new;
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\PathController::newAction',  '_route' => 'admin_path_new',);
                }
                not_admin_path_new:

                // admin_path_show
                if (preg_match('#^/admin/admin_path/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_path_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_path_show')), array (  '_controller' => 'AdminBundle\\Controller\\PathController::showAction',));
                }
                not_admin_path_show:

                // admin_path_edit
                if (preg_match('#^/admin/admin_path/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_path_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_path_edit')), array (  '_controller' => 'AdminBundle\\Controller\\PathController::editAction',));
                }
                not_admin_path_edit:

                // admin_path_update
                if (preg_match('#^/admin/admin_path/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_path_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_path_update')), array (  '_controller' => 'AdminBundle\\Controller\\PathController::updateAction',));
                }
                not_admin_path_update:

                // admin_path_delete
                if (preg_match('#^/admin/admin_path/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_path_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_path_delete')), array (  '_controller' => 'AdminBundle\\Controller\\PathController::deleteAction',));
                }
                not_admin_path_delete:

            }

        }

        if (0 === strpos($pathinfo, '/статьи/�')) {
            // article_list
            if ($pathinfo === '/статьи/все') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_article_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_list',);
            }
            not_article_list:

            // article_show
            if (0 === strpos($pathinfo, '/статьи/номер') && preg_match('#^/статьи/номер/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_article_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',));
            }
            not_article_show:

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

        // region_change
        if (0 === strpos($pathinfo, '/region/change') && preg_match('#^/region/change/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_region_change;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_change')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::changeRegionAction',));
        }
        not_region_change:

        // services_whois
        if ($pathinfo === '/services/whois') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_services_whois;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::whoisAction',  '_route' => 'services_whois',);
        }
        not_services_whois:

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

        // feed_calc_order
        if ($pathinfo === '/feed/orderFromCalc') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_feed_calc_order;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FeedController::calcOrderAction',  '_route' => 'feed_calc_order',);
        }
        not_feed_calc_order:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
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
