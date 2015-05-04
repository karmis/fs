<?php

/* default/index.html.twig */
class __TwigTemplate_6abd3787740b0dc91a309ea1f2e76d635672daa1aeade3774ea449aa0637cc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c5232fc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_bootstrap.min_1.css");
            // line 13
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c5232fc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_fonts_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c5232fc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_jquery.fancybox_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c5232fc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_jquery.fancybox-buttons_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c5232fc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_jquery.fancybox-thumbs_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c5232fc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_jquery.bxslider_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "c5232fc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all_main_7.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "c5232fc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5232fc") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/css/all.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 17
    public function block_js($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e5b56b5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.min_1.js");
            // line 39
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery-migrate.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_tabs_jquery_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_bootstrap.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.bxslider.min_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.mousewheel-3.0.6.pack_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.fancybox.pack_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.fancybox-buttons_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.fancybox-media_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.fancybox-thumbs_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_modernizr.custom_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_cbpHorizontalSlideOutMenu.min_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_validator_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.maskedinput_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_jquery.quicksand_15.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_quicksandpaginated.jquery_16.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_qsmain_17.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_calc_18.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e5b56b5_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all_scripts_19.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e5b56b5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5b56b5") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/js/all.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "
    ";
        // line 90
        $this->displayBlock('menu', $context, $blocks);
        // line 281
        echo "        <!--~~~~~~~~~~~~~~~~~/menu~~~~~~~~~~~~~~~~~-->
        ";
        // line 282
        $this->displayBlock('content', $context, $blocks);
        // line 283
        echo "        <!--~~~~~~~~~~~~~~~~~footer~~~~~~~~~~~~~~~~~-->
        ";
        // line 284
        $this->displayBlock('footer', $context, $blocks);
        // line 410
        echo "
    <div class=\"q\" id=\"q1\" style=\"display: none;\">
        <div>
            <div>
                <img src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\">
                <span class=\"h\">Форма обратной связи</span>
                <span class=\"tsena\">Цена: <span>990</span> руб.</span>
            </div>
            <p>Необходимость размещения на сайте формы обратной связи очевидна. Форма обратной связи позволяет вам общаться с посетителями, вести сбор необходимой информации, а также организовывать заказ товаров или услуг.</p>
            <p>Мы предлагаем систему обратной связи на основе электронной почты. Сообщения, написанные в форме обратной связи, будут поступать на адрес электронной почты, который вы укажете.</p>
            <a href=\"#\">Посмотреть все модули</a>
        </div>
    </div>
";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "        <header class=\"visible-md visible-lg\">
            <div class=\"container_user\">
                <ul class=\"list-unstyled list-inline\">
                    <li class=\"withHref\">
                        <a class=\"item-menu\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("installments_page");
        echo "\" title=\"Сайт в рассрочку\">
                            Сайт в рассрочку
                        </a>
                    </li>
                    <li class=\"withHref\">
                        <a class=\"item-menu\" href=\"#\" title=\"Скидки\">
                            Скидки
                        </a>
                    </li>
                    <li class=\"withHref\">
                        <a class=\"item-menu\" href=\"\" title=\"Вакансии\">
                            Вакансии
                        </a>
                    </li>
                    <li class=\"withHref\">
                        <a class=\"item-menu\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("contact_page");
        echo "\" title=\"Контакты\">
                            Контакты
                        </a>
                    </li>
                </ul>
                <div class=\"header-block zvonok\">
                    <a class=\"item-menu btn-dashed fancybox\" href=\"#forma_zvonok\">
                        Заказать звонок
                    </a>
                </div>
                <div class=\"header-block block-phone vcard\">
                    <p class=\"phone\"><span>(4922)</span> 60-02-32</p>
                    <a  href=\"#\" title=\"Выбор города\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" data-content=\"Город выбран автоматически\">г.Владимир</a>
                </div>
                <div class=\"header-block block-reg\">
                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/lock.png"), "html", null, true);
        echo "\" alt=\"Клиентам\" title=\"Клиентам\"/>

                    <div>
                        <a href=\"http://billing-colornew.ru/pages/cab.php\" title=\"Вход в биллинг\">Вход для клиентов</a>
                        <a href=\"#\" title=\"Стать клиентом\">Стать клиентом</a>
                    </div>
                </div>
            </div>
        </header>
    ";
    }

    // line 90
    public function block_menu($context, array $blocks = array())
    {
        // line 91
        echo "        <!--~~~~~~~~~~~~~~~~~menu~~~~~~~~~~~~~~~~~-->
        <nav class=\"cbp-hsmenu-wrapper navbar\" id=\"cbp-hsmenu-wrapper\">
            <div class=\"container\">
                <div class=\"cbp-hsinner\">
                    <ul class=\"cbp-hsmenu\">
                        <a class=\"small-btn btn-dashed fancybox\" href=\"#forma_zvonok\">
                            Заказать звонок
                        </a>

                        <div class=\"open-close-menu\"></div>
                        <li class=\"withImage\">
                            <a class=\"withImage\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("main_page");
        echo "\" title=\"colornew.ru\"><img
                                        src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"colornew.ru\" title=\"colornew.ru\"/></a>
                        </li>
                        <li>
                            <a href=\"#\" title=\"Создание сайтов\">Создание сайтов</a>
                            <ul class=\"cbp-hssubmenu\">
                                <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("vizitka_page");
        echo "\" class=\"withImage\" title=\"Сайт визитка\"><img
                                                src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sayt-vizitka.png"), "html", null, true);
        echo "\" alt=\"Сайт визитка\"
                                                title=\"Сайт визитка\"/><span>Сайт-визитка</span></a></li>
                                <li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("shop_page");
        echo "\" class=\"withImage\" title=\"Интернет-магазин\"><img
                                                src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/internet-magazin.png"), "html", null, true);
        echo "\"
                                                alt=\"Интернет-магазин\"
                                                title=\"Интернет-магазин\"/><span>Интернет-магазин</span></a></li>
                                <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("corp_page");
        echo "\" class=\"withImage\" title=\"Корпоративный сайт\"><img
                                                src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/korporativnyy_sayt.png"), "html", null, true);
        echo "\"
                                                alt=\"Корпоративный сайт\" title=\"Корпоративный сайт\"/><span>Корпоративный сайт</span></a>
                                </li>
                                <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("landing_page");
        echo "\" class=\"withImage\" title=\"Landing-page\"><img
                                                src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/landing-page.png"), "html", null, true);
        echo "\" alt=\"Landing-page\"
                                                title=\"Landing-page\"/><span>Landing-page</span></a></li>
                                <li><a href=\"#\" class=\"withImage\" title=\"Продвижение с гарантией\"><span>Продвижение с гарантией</span></a><a
                                            href=\"#\" class=\"btn-podrobnee\">Узнать подробнее</a></li>
                            </ul>
                            <ul class=\"cbp-hssubmenu-small\">
                                <li><a href=\"#\" title=\"Сайт визитка\">Сайт-визитка</a></li>
                                <li><a href=\"#\" title=\"Интернет-магазин\">Интернет-магазин</a></li>
                                <li><a href=\"#\" title=\"Корпоративный сайт\">Корпоративный сайт</a></li>
                                <li><a href=\"#\" title=\"Landing-page\">Landing-page</a></li>
                                <li><a href=\"#\" title=\"Продвижение с гарантией\">Продвижение с гарантией</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("promotion_page");
        echo "\" title=\"Продвижение сайтов\">Продвижение сайтов</a>
                            <ul class=\"cbp-hssubmenu\">
                                <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_d28c992")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/banners/prodvizheniye_raketa.jpg"), null))), "html", null, true);
        echo "\" alt=\"Продвижение сайтов\"
                                     title=\"Продвижение сайтов\"/>
                                <li><a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("advertising_page");
        echo "\" title=\"Контекстная реклама\">Контекстная реклама</a></li>
                                <li><a href=\"#\" title=\"SEO продвижение\">SEO продвижение</a></li>
                                <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("social_page");
        echo "\" title=\"Продвижение в соц.сетях\">Продвижение в соц.сетях</a></li>
                                <li><a href=\"#\" title=\"При заказе продвижения СКИДКИ ДО 50%\" class=\"withImage\"><span
                                                style=\"top: 20px;\">при заказе продвижения</span><span
                                                style=\"font-size: 23px; top: 42px;\">СКИДКИ ДО 50%</span></a><a href=\"#\"
                                                                                                               class=\"btn-podrobnee\">Узнать
                                        подробнее</a></li>
                                <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("installments_page");
        echo "\" title=\"Сайт в рассрочку\" class=\"withImage\"><span
                                                style=\"top: 20px; color: #fff;\">Сайт в рассрочку</span><span
                                                style=\"font-size: 23px; top: 40px; color: #fff;\">Почему это выгодно?</span></a><a
                                            href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("installments_page");
        echo "\" class=\"btn-podrobnee\">Узнать подробнее</a></li>
                            </ul>
                            <ul class=\"cbp-hssubmenu-small\">
                                <li><a href=\"#\" title=\"Контекстная реклама\">Контекстная реклама</a></li>
                                <li><a href=\"#\" title=\"SEO продвижение\">SEO продвижение</a></li>
                                <li><a href=\"#\" title=\"Продвижение в соц.сетях\">Продвижение в соц.сетях</a></li>
                                <li><a href=\"#\" title=\"При заказе продвижения СКИДКИ ДО 50%\">При заказе продвижения
                                        СКИДКИ ДО 50%</a></li>
                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("installments_page");
        echo "\" title=\"Сайт в рассрочку\">Сайт в рассрочку. Почему это выгодно?</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" title=\"Домены и хостинг\">Домены и хостинг</a>
                            <ul class=\"cbp-hssubmenu\">
                                <li>
                                    <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_b76c3df")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/banners/khosting_i_arenda_servera.jpg"), null))), "html", null, true);
        echo "\" alt=\"Хостинг и аренда сервера\"
                                         title=\"Хостинг и аренда сервера\"/>
                                    <a href=\"#\" title=\"Хостинг и аренда сервера\">
                                        Хостинг
                                        и аренда сервера
                                    </a>
                                </li>
                                <li>
                                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_0cc864e")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/banners/zashchita_sayta_ot_vzloma.jpg"), null))), "html", null, true);
        echo "\" alt=\"Защита сайта от взлома\"
                                         title=\"Защита сайта от взлома\"/>
                                    <a href=\"#\" title=\"Защита сайта от взлома\">
                                        Защита
                                        сайта от взлома
                                    </a>
                                </li>
                                <li>
                                    <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_efd2940")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/banners/registratsiya_domenov.jpg"), null))), "html", null, true);
        echo "\" alt=\"Регистрация доменов\"
                                         title=\"Регистрация доменов\"/>
                                    <a href=\"#\" title=\"Регистрация доменов\">Регистрация
                                        доменов</a></li>
                                <li><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_ebc9f30")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/banners/rezervnoye_kopirovaniye.jpg"), null))), "html", null, true);
        echo "\" alt=\"Резервное копирование\"
                                         title=\"Резервное копирование\"/><a href=\"#\" title=\"Резервное копирование\">Резервное
                                        копирование</a></li>
                                <li><a href=\"#\" title=\"Два домена по цене одного RU+РФ\" class=\"withImage\"><span
                                                style=\"top: 18px; color: #fff;\">Закажи прямо сейчас</span><span
                                                style=\"font-size: 24px; top: 40px; color: #fff;\">Два по цене одного</span><span
                                                style=\"font-size: 24px; top: 72px; color: #fff;\">RU+РФ</span></a><a
                                            href=\"#\" class=\"btn-podrobnee\">Узнать подробнее</a></li>
                            </ul>
                            <ul class=\"cbp-hssubmenu-small\">
                                <li><a href=\"#\" title=\"Хостинг и аренда сервера\">Хостинг и аренда сервера</a></li>
                                <li><a href=\"#\" title=\"Защита сайта от взлома\">Защита сайта от взлома</a></li>
                                <li><a href=\"#\" title=\"Регистрация доменов\">Регистрация доменов</a></li>
                                <li><a href=\"#\" title=\"Резервное копирование\">Резервное копирование</a></li>
                                <li><a href=\"#\" title=\"Два домена по цене одного RU+РФ\">Закажи прямо сейчас. Два по цене
                                        одного. RU+РФ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" title=\"Прочие услуги\">Прочие услуги</a>
                            <ul class=\"cbp-hssubmenu\">
                                <div>
                                    <p class=\"uslugi_header\">IP-ТЕЛЕФОНИЯ:</p>
                                    <a href=\"#\" title=\"Прямые городские номера\">Прямые городские номера<p>Подключите
                                            прямой городской номер любого</br>города без привязки к проводам!</p></a>
                                    <a href=\"#\" title=\"Номер 8-800\">Номер 8-800<p>Ваши клиенты смогут звонить Вам
                                            бесплатно</br>по телефону \"горячей\" линии!</p></a>
                                </div>
                                <div>
                                    <p class=\"uslugi_header\">ТЕХ. ПОДДЕРЖКА:</p>
                                    <a href=\"#\" title=\"Разработка модулей на сайт\">Разработка модулей на сайт<p>Вам
                                            нужно доработать функционал?</br>Не вопрос - поможем! Для сайтов с любыми
                                            CMS!</p></a>
                                    <a href=\"#\" title=\"Написание текстов (копирайтинг)\">Написание текстов (копирайтинг)
                                        <p>Профессиональное написание текстов</br>для любой тематики.</p></a>
                                    <a href=\"#\" title=\"Наполнение сайтов\">Наполнение сайтов<p>Нет времени наполнять
                                            сайт?</br>Поручите эту работу нам, освободите своё время!</p></a>
                                </div>
                                <div>
                                    <p class=\"uslugi_header\">ЛЮБИМЫМ КЛИЕНТАМ</p>
                                    <a href=\"#\" title=\"Сайты в рассрочку\">Сайты в рассрочку<p>Это выгодно! Вы получаете
                                            доход с сайта, параллельно</br>оплачивая его стоимость. Закажите сайт в
                                            рассрочку сейчас!</p></a>
                                    <a href=\"#\" title=\"Программа лояльности\">Программа лояльности<p>Сделаем для Вас
                                            индивидуальное предложение более</br>выгодное чем у других. Давайте
                                            познакомимся?</p></a>
                                    <a href=\"#\" title='Услуга \"без сомнений\"'>Услуга \"без сомнений\"<p>Нарисуем для вас
                                            несколько вариантов индивидуального</br>дизайна для того, чтобы не
                                            сомневаться!</p></a>
                                </div>
                            </ul>
                            <ul class=\"cbp-hssubmenu-small\">
                                <li><a href=\"#\" title=\"Прямые городские номера\">Прямые городские номера</a></li>
                                <li><a href=\"#\" title=\"Номер 8-800\">Номер 8-800</a></li>
                                <li><a href=\"#\" title=\"Разработка модулей на сайт\">Разработка модулей на сайт</a></li>
                                <li><a href=\"#\" title=\"Написание текстов (копирайтинг)\">Написание текстов
                                        (копирайтинг)</a></li>
                                <li><a href=\"#\" title=\"Наполнение сайтов\">Наполнение сайтов</a></li>
                                <li><a href=\"#\" title=\"Сайты в рассрочку\">Сайты в рассрочку</a></li>
                                <li><a href=\"#\" title=\"Программа лояльности\">Программа лояльности</a></li>
                                <li><a href=\"#\" title='Услуга \"без сомнений\"'>Услуга \"без сомнений\"</a></li>
                            </ul>
                        </li>
                        <li class=\"withImage\">
                            <a class=\"withImage\" href=\"#\" title=\"Не знаю что хочу\">

                                <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dice.png"), "html", null, true);
        echo "\" alt=\"Не знаю что хочу\" title=\"Не знаю что хочу\"/></a>
                            <ol class=\"cbp-hssubmenu\">
                                <li>Сайт визитка (типовой)<a href=\"http://colornew.ru/sait-vizitka.html\"
                                                             title=\"Сайт визитка (типовой)\">colornew.ru/sait-vizitka.html</a>
                                </li>
                                <li>Интернет-магазин<a href=\"http://colornew.ru/internet-magazin.html\"
                                                       title=\"Интернет-магазин\">colornew.ru/internet-magazin.html</a>
                                </li>
                                <li>Landing-page<a href=\"http://colornew.ru/landing-page.html\" title=\"Landing-page\">colornew.ru/landing-page.html</a>
                                </li>
                                <li>Продвижение сайтов<a href=\"#\" title=\"Продвижение сайтов\">colornew.ru/promotion-of-s...</a>
                                </li>
                            </ol>
                            <ol class=\"cbp-hssubmenu-small\">
                                <li>Сайт визитка (типовой)<a href=\"http://colornew.ru/sait-vizitka.html\"
                                                             title=\"Сайт визитка (типовой)\">colornew.ru/sait-vizitka.html</a>
                                </li>
                                <li>Интернет-магазин<a href=\"http://colornew.ru/internet-magazin.html\"
                                                       title=\"Интернет-магазин\">colornew.ru/internet-magazin.html</a>
                                </li>
                                <li>Landing-page<a href=\"http://colornew.ru/landing-page.html\" title=\"Landing-page\">colornew.ru/landing-page.html</a>
                                </li>
                                <li>Продвижение сайтов<a href=\"#\" title=\"Продвижение сайтов\">colornew.ru/promotion-of-s...</a>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
    }

    // line 282
    public function block_content($context, array $blocks = array())
    {
    }

    // line 284
    public function block_footer($context, array $blocks = array())
    {
        // line 285
        echo "        <footer>
            <div class=\"container_user\">
                <div>
                    <div class=\"footer-block block-phone\">
                        <p class=\"phone\"><a href=\"tel:+74922600232\" class=\"tel\"><span>(4922)</span> 60-02-32</a></p>
                        <a href=\"#\" title=\"Выбрать город\">г.Владимир</a>
                    </div>
                    <div class=\"footer-block zvonok\">
                        <a class=\"btn-dashed fancybox\"  href=\"#forma_zvonok\">
                            Задать вопрос
                        </a>
                    </div>
                    <div class=\"footer-block mail\">
                        <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico_2.png"), "html", null, true);
        echo "\" alt=\"Почта\" title=\"Почта\"/>
                        <span>Отдел продаж:</span>
                        <a href=\"mailto:n@colornew.ru\" title=\"n@colornew.ru\">n@colornew.ru</a>
                        <br>
                        <span>Тех. поддержка:</span>
                        <a href=\"mailto:support@colornew.ru\" title=\"support@colornew.ru\">support@colornew.ru</a>
                    </div>
                    <div class=\"footer-block search\">
                        <form>
                            <input type=\"text\" placeholder=\"Поиск по сайту\">
                            <input type=\"submit\" value=\"\">
                        </form>
                    </div>
                </div>
                <div>
                    <div>
                        <p>СОЗДАНИЕ САЙТОВ</p>
                        <a href=\"#\" title=\"Сайты-визитки\">Сайты-визитки</a><br/>
                        <a href=\"#\" title=\"Landing page\">Landing page</a>
                        <a href=\"#\" title=\"Корпоративные сайты\">Корпоративные сайты</a>
                        <a href=\"#\" title=\"Интернет-магазины\">Интернет-магазины</a>
                        <a href=\"#\" title=\"Индивидуальные проекты\">Индивидуальные проекты</a>
                        <a href=\"#\" title=\"Сайты на 1С Битрикс\">Сайты на 1С Битрикс</a>
                    </div>
                    <div>
                        <p>ПРОДВИЖЕНИЕ САЙТОВ</p>
                        <a href=\"#\" title=\"SEO-продвижение\">SEO-продвижение</a>
                        <a href=\"#\" title=\"Контекстная реклама\">Контекстная реклама</a>
                        <a href=\"#\" title=\"Продвижение в соц.сетях\">Продвижение в соц.сетях</a>
                        <a href=\"#\" title=\"E-mail рассылка\">E-mail рассылка</a>

                    </div>
                    <div>
                        <p>ХОСТИНГ И АРЕНДА СЕРВЕРА</p>
                        <a href=\"#\" title=\"Регистрация доменов\">Регистрация доменов</a>
                        <a href=\"#\" title=\"Защита сайта от взлома\">Защита сайта от взлома</a>
                        <a href=\"#\" title=\"Резервное копирование\">Резервное копирование</a>
                    </div>
                    <div style=\"width: 240px; margin-left: 40px;\">
                        <p>ПРОЧИЕ УСЛУГИ</p>
                        <a href=\"#\" title=\"Прямые городские номера\">Прямые городские номера</a>
                        <a href=\"#\" title=\"Номера 8-800\">Номера 8-800</a>
                        <a href=\"#\" title=\"Разработка модулей на сайт\">Разработка модулей на сайт</a>
                        <a href=\"#\" title=\"Наполнение сайтов\">Наполнение сайтов</a>
                        <a href=\"#\" title=\"Сайты в рассрочку\" style=\"color:#c81414 !important;\">Сайты в рассрочку</a>
                        <a href=\"#\" title=\"Программа лояльности\" style=\"color:#c81414 !important;\">Программа лояльности</a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href=\"#\" title=\"colornew.ru\" class=\"withImage\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo2.png"), "html", null, true);
        echo "\" alt=\"colornew.ru\" title=\"colornew.ru\"/></a>
                    </div>
                    <div>
                        <a href=\"#\" title=\"Сбербанк\" class=\"withImage\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sberbank.png"), "html", null, true);
        echo "\" alt=\"Сбербанк\" title=\"Сбербанк\"/></a>
                        <a href=\"#\" title=\"Qiwi\" class=\"withImage\"><img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/qiwi.png"), "html", null, true);
        echo "\" alt=\"Qiwi\" title=\"Qiwi\"/></a>
                        <a href=\"#\" title=\"Яндекс деньги\" class=\"withImage\"><img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/yandex_money.png"), "html", null, true);
        echo "\" alt=\"Яндекс деньги\" title=\"Яндекс деньги\"/></a>
                        <a href=\"#\" title=\"Webmoney\" class=\"withImage\"><img src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/webmoney.png"), "html", null, true);
        echo "\" alt=\"Webmoney\" title=\"Webmoney\"/></a>
                        <a href=\"#\" title=\"Visa\" class=\"withImage\"><img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/visa.png"), "html", null, true);
        echo "\" alt=\"Visa\" title=\"Visa\"/></a>
                        <a href=\"#\" title=\"MasterCard\" class=\"withImage\"><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/mastercard.png"), "html", null, true);
        echo "\" alt=\"MasterCard\" title=\"MasterCard\"/></a>
                    </div>
                    <div>
                        <a href=\"#\" class=\"links_footer\" title=\"Партнёрская программа\">Партнёрская программа</a>
                        <a href=\"#\" class=\"links_footer\" title=\"Для рекламных агенств\">Для рекламных агенств</a>
                        <a href=\"#\" class=\"links_footer\" title=\"Контакты\">Контакты</a>
                        <a href=\"#\" class=\"links_footer\" title=\"Язык\">Eng</a>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"footer-block block-phone\">
                    <p class=\"phone\"><a href=\"tel:+74922600232\" class=\"tel\"><span>(4922)</span> 60-02-32 </a><a href=\"#\" title=\"Выбрать город\">г. Владимир</a></p>

                </div>
                <div class=\"footer-block zvonok\">
                    <a class=\"btn-dashed fancybox\" href=\"#forma_zvonok\">
                        Задать вопрос
                    </a>
                </div>
                <div class=\"footer-block mail\">
                    <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico_2.png"), "html", null, true);
        echo "\" alt=\"Почта\" title=\"Почта\"/>
                    <span>Отдел продаж:</span>
                    <a href=\"mailto:n@colornew.ru\" title=\"n@colornew.ru\">n@colornew.ru</a>
                    <br>
                    <span>Тех. поддержка:</span>
                    <a href=\"mailto:support@colornew.ru\" title=\"support@colornew.ru\">support@colornew.ru</a>
                </div>
                <div>
                    <a href=\"#\" title=\"Сбербанк\" class=\"withImage\"><img src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sberbank.png"), "html", null, true);
        echo "\" alt=\"Сбербанк\" title=\"Сбербанк\"/></a>
                    <a href=\"#\" title=\"Qiwi\" class=\"withImage\"><img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/qiwi.png"), "html", null, true);
        echo "\" alt=\"Qiwi\" title=\"Qiwi\"/></a>
                    <a href=\"#\" title=\"Яндекс деньги\" class=\"withImage\"><img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/yandex_money.png"), "html", null, true);
        echo "\" alt=\"Яндекс деньги\" title=\"Яндекс деньги\"/></a>
                    <a href=\"#\" title=\"Webmoney\" class=\"withImage\"><img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/webmoney.png"), "html", null, true);
        echo "\" alt=\"Webmoney\" title=\"Webmoney\"/></a>
                    <a href=\"#\" title=\"Visa\" class=\"withImage\"><img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/visa.png"), "html", null, true);
        echo "\" alt=\"Visa\" title=\"Visa\"/></a>
                    <a href=\"#\" title=\"MasterCard\" class=\"withImage\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/mastercard.png"), "html", null, true);
        echo "\" alt=\"MasterCard\" title=\"MasterCard\"/></a>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~zvonok~~~~~~~~~~~~~~~~~-->
            <div style=\"display:none;\" id=\"forma_zvonok\" class=\"forma modal_zvonok\">
                <form action=\"\">
                    <p>Заполните форму и мы перезвоним вам!</p>
                    <input type=\"text\" placeholder=\"Ваше имя\" required>
                    <input type=\"tel\" class=\"phone_input\" placeholder=\"Телефон\" required>
                    <input type=\"email\" placeholder=\"Электронная почта\">
                    <textarea name=\"\" id=\"\" cols=\"30\" rows=\"8\" placeholder=\"Сообщение\"></textarea>
                    <a href=\"\" class=\"politica\">Политика конфиденциальности</a>
                    <input type=\"submit\" class=\"btn-dashed\" value=\"Отправить\">
                </form>
            </div>
            <!--~~~~~~~~~~~~~~~~~/zvonok~~~~~~~~~~~~~~~~~-->
        </footer>
        <!--~~~~~~~~~~~~~~~~~/footer~~~~~~~~~~~~~~~~~-->
    ";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 391,  742 => 390,  738 => 389,  734 => 388,  730 => 387,  726 => 386,  715 => 378,  690 => 356,  686 => 355,  682 => 354,  678 => 353,  674 => 352,  670 => 351,  664 => 348,  611 => 298,  596 => 285,  593 => 284,  588 => 282,  553 => 250,  484 => 184,  477 => 180,  466 => 172,  455 => 164,  445 => 157,  434 => 149,  428 => 146,  419 => 140,  414 => 138,  409 => 136,  404 => 134,  387 => 120,  383 => 119,  377 => 116,  373 => 115,  367 => 112,  363 => 111,  358 => 109,  354 => 108,  346 => 103,  342 => 102,  329 => 91,  326 => 90,  312 => 79,  294 => 64,  276 => 49,  270 => 45,  267 => 44,  253 => 414,  247 => 410,  245 => 284,  242 => 283,  240 => 282,  237 => 281,  235 => 90,  232 => 89,  229 => 44,  226 => 43,  102 => 39,  97 => 18,  94 => 17,  42 => 13,  37 => 4,  34 => 3,  11 => 1,);
    }
}
