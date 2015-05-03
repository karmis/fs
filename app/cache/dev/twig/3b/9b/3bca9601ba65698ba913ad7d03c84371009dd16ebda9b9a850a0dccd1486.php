<?php

/* AppBundle:Default:advertising.html.twig */
class __TwigTemplate_3b9b3bca9601ba65698ba913ad7d03c84371009dd16ebda9b9a850a0dccd1486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("default/index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'banner' => array($this, 'block_banner'),
            'tariffs' => array($this, 'block_tariffs'),
            'consul' => array($this, 'block_consul'),
            'preim' => array($this, 'block_preim'),
            'annotation' => array($this, 'block_annotation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <!--~~~~~~~~~~~~~~~~~content~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
    ";
        // line 6
        $this->displayBlock('banner', $context, $blocks);
        // line 42
        echo "    <!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~tariffs~~~~~~~~~~~~~~~~~-->
    ";
        // line 44
        $this->displayBlock('tariffs', $context, $blocks);
        // line 202
        echo "
    ";
        // line 203
        $this->displayBlock('consul', $context, $blocks);
        // line 216
        echo "    ";
        $this->displayBlock('preim', $context, $blocks);
        // line 289
        echo "    <!--~~~~~~~~~~~~~~~~~/preim~~~~~~~~~~~~~~~~~-->
    ";
        // line 290
        $this->displayBlock('annotation', $context, $blocks);
        // line 322
        echo "    <!--~~~~~~~~~~~~~~~~~/annotations_all~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->
";
    }

    // line 6
    public function block_banner($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"banner banner_internet-advertising banner_big\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Контекстная реклама в интернете</h2>
                    <li>С помощью контекстной рекламы в интернете Вы сможете получать первых посетителей на сайт уже
                        сегодня!
                    </li>
                    <li>Контекстная реклама позволяет вывести сайт на первые строчки поисковых систем с оплатой \"по
                        факту\"
                    </li>
                    <li>Вы платите только за тех пользователей, которые реально перешли на Ваш сайт, показ объявления
                        при этом бесплатный.
                    </li>
                    <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <div class=\"banner banner_internet-advertising banner_small\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Контекстная реклама в интернете</h2>
                    <li>С помощью контекстной рекламы в интернете Вы сможете получать первых посетителей на сайт уже
                        сегодня!
                    </li>
                    <li>Контекстная реклама позволяет вывести сайт на первые строчки поисковых систем с оплатой \"по
                        факту\"
                    </li>
                    <li>Вы платите только за тех пользователей, которые реально перешли на Ваш сайт, показ объявления
                        при этом бесплатный.
                    </li>
                    <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
                </div>
            </div>
        </div>
    ";
    }

    // line 44
    public function block_tariffs($context, array $blocks = array())
    {
        // line 45
        echo "        <div class=\"tariffs container\">
            <h2>Профессиональная настройка<br>контекстной рекламы</h2>

            <div class=\"row visible-md visible-lg\">
                <div class=\"thead col-md-4\"></div>
                <div class=\"thead col-md-2\">Старт</div>
                <div class=\"thead col-md-2\">Подъём</div>
                <div class=\"thead col-md-2\">Взлёт</div>
                <div class=\"thead col-md-2\">Прорыв</div>
                <div class=\"tleft col-md-4\">
                    <li>Стоимость</li>
                    <li>Контроль позиций и бюджета</li>
                    <li>Количество ключевых слов</li>
                    <li>Уникальные объявления (шт.)</li>
                    <li>Рекламные площадки</li>
                </div>
                <div class=\"tbody col-md-2\">
                    <li>262 руб./день</li>
                    <li>да</li>
                    <li>до 200</li>
                    <li>до 20</li>
                    <li>Яндекс</li>
                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                </div>
                <div class=\"tbody col-md-2\">
                    <li>333 руб./день</li>
                    <li>да</li>
                    <li>до 400</li>
                    <li>до 40</li>
                    <li><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                </div>
                <div class=\"tbody col-md-2\">
                    <li>499 руб./день</li>
                    <li>да</li>
                    <li>до 1000</li>
                    <li>до 100</li>
                    <li><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                </div>
                <div class=\"tbody col-md-2\">
                    <li>333 руб./день</li>
                    <li>да</li>
                    <li>&infin;</li>
                    <li>&infin;</li>
                    <li><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                </div>
            </div>
            <div class=\"row visible-sm visible-xs\">
                <div class=\"horizontal-click\">
                    <input type=\"radio\" name=\"vkl\" id=\"vkl1\" checked=\"checked\"/>
                    <label for=\"vkl1\">Старт</label>

                    <div class=\"row\">
                        <div class=\"tleft col-sm-6 col-xs-6\">
                            <li>Стоимость</li>
                            <li>Контроль позиций и бюджета</li>
                            <li>Количество ключевых слов</li>
                            <li>Уникальные объявления (шт.)</li>
                            <li>Рекламные площадки</li>
                        </div>
                        <div class=\"tbody col-sm-6 col-xs-6\">
                            <li>333 руб./день</li>
                            <li>да</li>
                            <li>до 400</li>
                            <li>до 40</li>
                            <li><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                    <input type=\"radio\" name=\"vkl\" id=\"vkl2\"/>
                    <label for=\"vkl2\">Подъём</label>

                    <div class=\"row\">
                        <div class=\"tleft col-sm-6 col-xs-6\">
                            <li>Стоимость</li>
                            <li>Контроль позиций и бюджета</li>
                            <li>Количество ключевых слов</li>
                            <li>Уникальные объявления (шт.)</li>
                            <li>Рекламные площадки</li>
                        </div>
                        <div class=\"tbody col-sm-6 col-xs-6\">
                            <li>333 руб./день</li>
                            <li>да</li>
                            <li>до 400</li>
                            <li>до 40</li>
                            <li><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                    <input type=\"radio\" name=\"vkl\" id=\"vkl3\"/>
                    <label for=\"vkl3\">Взлёт</label>

                    <div class=\"row\">
                        <div class=\"tleft col-sm-6 col-xs-6\">
                            <li>Стоимость</li>
                            <li>Контроль позиций и бюджета</li>
                            <li>Количество ключевых слов</li>
                            <li>Уникальные объявления (шт.)</li>
                            <li>Рекламные площадки</li>
                        </div>
                        <div class=\"tbody col-sm-6 col-xs-6\">
                            <li>499 руб./день</li>
                            <li>да</li>
                            <li>до 1000</li>
                            <li>до 100</li>
                            <li><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                    <input type=\"radio\" name=\"vkl\" id=\"vkl4\"/>
                    <label for=\"vkl4\">Прорыв</label>

                    <div class=\"row\">
                        <div class=\"tleft col-sm-6 col-xs-6\">
                            <li>Стоимость</li>
                            <li>Контроль позиций и бюджета</li>
                            <li>Количество ключевых слов</li>
                            <li>Уникальные объявления (шт.)</li>
                            <li>Рекламные площадки</li>
                        </div>
                        <div class=\"tbody col-sm-6 col-xs-6\">
                            <li>333 руб./день</li>
                            <li>да</li>
                            <li>&infin;</li>
                            <li>&infin;</li>
                            <li><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/checkbox_checked.png"), "html", null, true);
        echo "\">Яндекс, Google</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <h2 style=\"margin-top: 0px;\">Преимущество услуги</h2>

            <div class=\"preim_usl\">
                <div>
                    <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/img_start.png"), "html", null, true);
        echo "\">
                    <a class=\"fancybox\" href=\"#forma_zvonok\">
                        <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/img_start_but.png"), "html", null, true);
        echo "\" alt=\"Запустить контекстную рекламу\"
                             title=\"Запустить контекстную рекламу\">
                    </a>
                </div>
                <ul>
                    <li>Максимально низкая стоимость привлечения одного клиента по сравнению с Вашими конкурентами;</li>
                    <li>Рекламную кампанию ведёт и контролирует человек, а не робот (в отличии от автоматического
                        способа Яндекса);
                    </li>
                    <li>Быстрая реакция персонального менеджера по внедрению акций и спецпредложений на сайт;</li>
                    <li>Ежедневный мониторинг сайтов-конкурентов, улучшение Вашей рекламной кампании;</li>
                    <li>Написание новых уникальных текстов объявлений каждый мсяц;</li>
                    <li>Удобный личный кабинет для просмотра статистики и рекомендаций;</li>
                </ul>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/tariffs~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 203
    public function block_consul($context, array $blocks = array())
    {
        // line 204
        echo "        <!--~~~~~~~~~~~~~~~~~konsultacia~~~~~~~~~~~~~~~~~-->
        <div class=\"konsultacia visible-lg visible-md\">
            <div class=\"container\">
                <h2>Экономьте с нами!</h2>

                <p>Заказывая контекстную рекламу через нас, Вы экономите 18% на стоимости контекстной рекламы в
                    Яндексе.</p>
                <a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/konsultacia~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 216
    public function block_preim($context, array $blocks = array())
    {
        // line 217
        echo "        <!--~~~~~~~~~~~~~~~~~preim~~~~~~~~~~~~~~~~~-->
        <div class=\"preim container\">
            <div class=\"steps\">
                <div><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_tap_kr_01.png"), "html", null, true);
        echo "\">

                    <p>Оплата только за реальные переходы на сайт Ваш сайт будет показываться на первых страницах
                        поисковых систем уже сегодня! За показ рекламы Вы не платите, оплата происходит только в момент
                        перехода пользователя на сайт. Вы получаете гарантированных посетителей;</p></div>
                <div><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_tap_kr_03.png"), "html", null, true);
        echo "\">

                    <p>Только целевая аудитория Пользователи вбивают поисковый запрос (например, \"купить велосипед\") и
                        видят Ваш сайт. Вы получаете целевого пользователя, который интересуется Вашим товаром, или
                        услогой;</p></div>
                <div><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_tap_kr_02.png"), "html", null, true);
        echo "\">

                    <p>Стоимость ниже, конверсия выше. Стоимость рекламы в Интернете в разы ниже наружной, или рекламы в
                        печатных продукциях, а эффективность во много раз выше;</p></div>
                <div><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_tap_kr_04.png"), "html", null, true);
        echo "\">

                    <p>Конкурентное преимущество. Реклама в Интернете позволяет даже небольшим организациям
                        конкурировать с огромными корпорациями на равных;</p></div>
            </div>
            <a href=\"#\" title=\"\">
                <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/banners/113.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
            </a>

            <div class=\"yandex-google\">
                <div class=\"yandex\">
                    <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/img_yandex.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
                    <input type=\"checkbox\" id=\"read_more2\">

                    <div>
                        <p>Реклама в Яндекс Директ</p>

                        <p>Контекстная реклама Яндекс.Директ позволяет выводить сайт на первые...</p>

                        <p>Контекстная реклама Яндекс.Директ позволяет выводить сайт на первые...</p>

                        <p>Контекстная реклама Яндекс.Директ позволяет выводить сайт на первые...</p>

                        <p>Контекстная реклама Яндекс.Директ позволяет выводить сайт на первые...</p>

                        <p>Контекстная реклама Яндекс.Директ позволяет выводить сайт на первые...</p>

                        <p>Контекстная реклама Яндекс.Директ позволяет выводить сайт на первые...</p>
                        <label for=\"read_more2\">Читать далее</label>
                    </div>

                </div>
                <div class=\"google\">
                    <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/img_google.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
                    <input type=\"checkbox\" id=\"read_more3\">

                    <div>
                        <p>Реклама в Google Adwords</p>

                        <p>Google - поисковая система, аудитория которой растёт с каждым днём.</p>

                        <p>Google - поисковая система, аудитория которой растёт с каждым днём.</p>

                        <p>Google - поисковая система, аудитория которой растёт с каждым днём.</p>

                        <p>Google - поисковая система, аудитория которой растёт с каждым днём.</p>

                        <p>Google - поисковая система, аудитория которой растёт с каждым днём.</p>
                        <label for=\"read_more3\">Читать далее</label>
                    </div>

                </div>
            </div>
        </div>
    ";
    }

    // line 290
    public function block_annotation($context, array $blocks = array())
    {
        // line 291
        echo "        <!--~~~~~~~~~~~~~~~~~annotations_all~~~~~~~~~~~~~~~~~-->
        <div class=\"annotations_all container\">
            <div class=\"links\">
                <a href=\"#\" class=\"active\">Контекстная реклама</a>
                <a href=\"#\">SEO продвижение</a>
                <a href=\"#\">Продвижение в соц. сетях</a>
            </div>
            <input type=\"checkbox\" id=\"read_more\">

            <div class=\"annotation\">
                <p>А Вы знаете, что именно Ваши товары и услуги предельно востребованы? Нет? Значит, ваша реклама никуда
                    не годится! Хотите увидеть, на что действительно способен ваш бизнес? Получить массу новых заказов и
                    поток клиентов? Мы сделаем Вам рекламу в интернете, которой будут завидовать все конкуренты! </p>

                <p>Реклама в Интернете - на что она способна: </p>

                <p>Рассказать сразу всему миру о своей фирме, предложить товары и услуги так, как никто другой и начать
                    продажи сегодня и сейчас – это мечта многих начинающих предпринимателей. Но даже если у Вас солидная
                    компания, которая работает не один год, а Вы еще не сделали ни одной продажи в </p>

                <p>Рассказать сразу всему миру о своей фирме, предложить товары и услуги так, как никто другой и начать
                    продажи сегодня и сейчас – это мечта многих начинающих предпринимателей. Но даже если у Вас солидная
                    компания, которая работает не один год, а Вы еще не сделали ни одной продажи в </p>

                <p>Рассказать сразу всему миру о своей фирме, предложить товары и услуги так, как никто другой и начать
                    продажи сегодня и сейчас – это мечта многих начинающих предпринимателей. Но даже если у Вас солидная
                    компания, которая работает не один год, а Вы еще не сделали ни одной продажи в </p>
                <label for=\"read_more\">Читать далее</label>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:advertising.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 291,  424 => 290,  398 => 267,  373 => 245,  365 => 240,  356 => 234,  349 => 230,  341 => 225,  333 => 220,  328 => 217,  325 => 216,  310 => 204,  307 => 203,  285 => 184,  280 => 182,  267 => 172,  244 => 152,  221 => 132,  198 => 112,  173 => 90,  162 => 82,  151 => 74,  120 => 45,  117 => 44,  79 => 7,  76 => 6,  70 => 322,  68 => 290,  65 => 289,  62 => 216,  60 => 203,  57 => 202,  55 => 44,  51 => 42,  49 => 6,  44 => 3,  41 => 2,  11 => 1,);
    }
}
