<?php

/* AppBundle:Default:landing.html.twig */
class __TwigTemplate_1db21192b51e165573220d9a54f62a971749a563760e87d0ab976d0c67473748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("default/index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!--~~~~~~~~~~~~~~~~~content~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_landing-page banner_big\">  
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Landing-page <span class=\"sm\">от</span> 6 950 <span class=\"sm\">руб.</span></h2>  
                    <li>Старт Вашего сайта от <span class=\"red\">1 дня</span></li>
                    <li>Низкая стоимость за счёт готовых решиний</li>
                    <li>Гарантия, поддержка и консультация бесплатно</li>
                    <li>Предоставим скидку до <span class=\"red\">50%</span> при заказе продвижения</li>
                    <a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a>                 
                </div>
            </div>
        </div>
        <div class=\"banner banner_landing-page banner_small\">  
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Landing-page <span class=\"sm\">от</span> 6 950 <span class=\"sm\">руб.</span></h2>  
                    <li>Старт Вашего сайта от <span class=\"red\">1 дня</span></li>
                    <li>Низкая стоимость за счёт готовых решиний</li>
                    <li>Гарантия, поддержка и консультация бесплатно</li>
                    <li>Предоставим скидку до <span class=\"red\">50%</span> при заказе продвижения</li>
                    <a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a>                 
                </div>
            </div>
        </div>      
    <!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~razrez~~~~~~~~~~~~~~~~~-->
        <div class=\"razrez visible-lg\">
            <div class=\"container\">         
                <h2>Что входит в Landing-page</h2>
                <div class=\"razrez_background razrez_landing-page\">             
                    <div class=\"b1\"><div class=\"b\"><label for=\"desc1\">1</label></div></div>
                    <div class=\"b2\"><div class=\"b\"><label for=\"desc2\">2</label></div></div>
                    <div class=\"b3\"><div class=\"b\"><label for=\"desc3\">3</label></div></div>
                    <div class=\"b4\"><div class=\"b\"><label for=\"desc4\">4</label></div></div>
                    <div class=\"b5\"><div class=\"b\"><label for=\"desc5\">5</label></div></div>
                    <div class=\"b6\"><div class=\"bb\"><label for=\"desc6\">Дополнения к сайтам</label></div></div>
                    <div class=\"b7\"><div class=\"bb\"><label for=\"desc7\">Щедрые подарки</label></div></div>
                </div>
                <input type=\"radio\" id=\"desc1\" name=\"desc_radio\" checked>
                <div class=\"desc\">
                    <h3>Форма обратной связи</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <input type=\"radio\" id=\"desc2\" name=\"desc_radio\">
                <div class=\"desc\">
                    <h3>Преимущества</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <input type=\"radio\" id=\"desc3\" name=\"desc_radio\">
                <div class=\"desc\">
                    <h3>Акции</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <input type=\"radio\" id=\"desc4\" name=\"desc_radio\">
                <div class=\"desc\">
                    <h3>Отзывы</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <input type=\"radio\" id=\"desc5\" name=\"desc_radio\">
                <div class=\"desc\">
                    <h3>Карта</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <input type=\"radio\" id=\"desc6\" name=\"desc_radio\">
                <div class=\"desc\">
                    <h3>Дополнения к сайтам</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <input type=\"radio\" id=\"desc7\" name=\"desc_radio\">
                <div class=\"desc\">
                    <h3>Щедрые подарки</h3>
                    <p>Слайдер – элемент веб дизайна, созданный для того, чтобы привлечь внимание посетителей к важной информации. Как правило слайдеры можно прокручивать, это осуществляется пользователем или автоматически.</p> 
                    <p>Если вы хотите оригинально преподать посетителю вашего сайта важный контент, особенно если это акции и предложения, то лучше это сделать с помощью слайдера.</p>
                </div>
                <p>Функционал сайта визитки определяется с каждым Заказчиком индивидуально, на изображении указаны общие наиболее часто используемые блоки.</p>
            </div>

        </div>  
    <!--~~~~~~~~~~~~~~~~~/razrez~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~konsultacia~~~~~~~~~~~~~~~~~-->
    <div class=\"konsultacia visible-lg visible-md\">
        <div class=\"container\">
            <span class=\"null\"></span>
            <h2>Получите наше лучшее предложение!</h2>
            <a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~/konsultacia~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~calculate~~~~~~~~~~~~~~~~~-->
    <div class=\"calculate container\" id=\"calculate\">
        <div class=\"korpus\" id=\"korpus\">
            <h2>Подсчитать стоимость <br>сайта-визитки</h2>
            <input type=\"radio\" name=\"odin\" checked=\"checked\" id=\"vkl1\"/>
            <!--~~~~~~~~~~~~~~~~~online shop calc~~~~~~~~~~~~~~~~~-->
            <div>
                <form name=\"internet-magazin\" action=\"\" method=\"post\">

                    <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\" title=\"Дизайн сайта\"><p class=\"zagolovok_h2\">Дизайн сайта</p>
                    <li>
                        <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\" id=\"internet-magazin_gotoviy\" checked><label for=\"internet-magazin_gotoviy\">Готовый</label></div>
                        <div class=\"item\">
                            <h3>Готовый дизайн</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\" id=\"internet-magazin_individualniy\"><label for=\"internet-magazin_individualniy\">Индивидуальный</label></div>
                        <div class=\"item\">
                            <h3>Индивидуальный дизайн</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\" id=\"internet-magazin_razrabotka_logotipa\"><label for=\"internet-magazin_razrabotka_logotipa\">Разработка логотипа</label></div>
                        <div class=\"item\">
                            <h3>Разработка логотипа</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\" id=\"internet-magazin_razrabotka_bannerov\"><label for=\"internet-magazin_razrabotka_bannerov\">Разработка баннеров для слайдшоу</label><input type=\"text\" id=\"internet-magazin_k\" value=\"0\"> шт.</div>
                        <div class=\"item\">
                            <h3>Разработка баннеров для слайдшоу</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>

                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/kompl_logo.png"), "html", null, true);
        echo "\" alt=\"Комплектация\" title=\"Комплектация\"><p class=\"zagolovok_h2\">Комплектация</p>


                    <li>
                        <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"katalog_bez_korzini\" id=\"internet-magazin_katalog_bez_korzini\" checked><label for=\"internet-magazin_katalog_bez_korzini\">Каталог без корзины</label></div>
                        <div class=\"item\">
                            <h3>Каталог без корзины</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"katalog_s_korzinoy\" id=\"internet-magazin_katalog_s_korzinoy\"><label for=\"internet-magazin_katalog_s_korzinoy\">Каталог с корзиной</label></div>
                        <div class=\"item\">
                            <h3>Каталог с корзиной</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"copyright\" id=\"internet-magazin_copyright\"><label for=\"internet-magazin_copyright\">Копирайтинг</label><input type=\"text\" id=\"internet-magazin_k2\" value=\"0\"> страниц</div>
                        <div class=\"item\">
                            <h3>Копирайтинг</h3>
                            <span class=\"price\">Цена: 0 руб.</span>
                            <div style=\"clear: right;\"></div>
                            <p class=\"opisanie\">

                            </p>
                            <p class=\"opisanie\">

                            </p>
                        </div>
                    </li>

                    <input type=\"checkbox\" id=\"internet-magazin_checkbox_spoyler\"><label for=\"internet-magazin_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в предложение:</label>

                    <div id=\"spoyler\">
                        <div id=\"internet-magazin_gotoviy_katalog_bez_korzini_dop\">
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\" title=\"Каталог товаров\"><div></div><span>Каталог товаров</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'> <div></div><span>Модуль \"Купить в 1 клик\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Приём платежей на сайте \"стандарт\"' title='Приём платежей на сайте \"стандарт\"'><div></div><span>Приём платежей на сайте \"стандарт\"</span></a>
                        </div>
                        <div id=\"internet-magazin_gotoviy_katalog_s_korzinoy_dop\">
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\" title=\"Каталог товаров\"><div></div><span>Каталог товаров</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'> <div></div><span>Модуль \"Купить в 1 клик\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Приём платежей на сайте \"стандарт\"' title='Приём платежей на сайте \"стандарт\"'><div></div><span>Приём платежей на сайте \"стандарт\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Корзина\"'><img src=\"img/dop/cart.png\" alt='Модуль \"Корзина\"' title='Модуль \"Корзина\"'><div></div><span>Модуль \"Корзина\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Производители\"'><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Модуль \"Производители\"' title='Модуль \"Производители\"'><div></div><span>Модуль \"Производители\"</span></a>
                        </div>
                        <div id=\"internet-magazin_individualniy_dop\">
                            <p class=\"text\">Авторский дизайн без использования шаблонов</p>
                            <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\" title=\"Каталог товаров\"><div></div><span>Каталог товаров</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'> <div></div><span>Модуль \"Купить в 1 клик\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Приём платежей на сайте \"стандарт\"' title='Приём платежей на сайте \"стандарт\"'><div></div><span>Приём платежей на сайте \"стандарт\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Корзина\"'><img src=\"img/dop/cart.png\" alt='Модуль \"Корзина\"' title='Модуль \"Корзина\"'><div></div><span>Модуль \"Корзина\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Производители\"'><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Модуль \"Производители\"' title='Модуль \"Производители\"'><div></div><span>Модуль \"Производители\"</span></a>
                            <a href=\"#q1\" class=\"fancybox dop\" title='Модуль акций, хитов продаж'><img src=\"img/dop/hit.png\" alt='Модуль акций, хитов продаж' title='Модуль акций, хитов продаж'><div></div><span>Модуль акций, хитов продаж</span></a>
                        </div>
                        <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                        <div class=\"vsyo_vklucheno\">
                            <div><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими материалами</div>
                            <div><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)</div>
                            <div><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                            <div><img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                            <div><img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                            <div><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского номера (по желанию бесплатно)</div>
                        </div>
                    </div>

                    <div class=\"forma_zakaza\">
                        <p id=\"itogo\">Итого:  <span id=\"internet-magazin_cena\" name=\"cena\"></span> руб.</p>
                        <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\" id=\"internet-magazin_checkbox_skidka\" checked><label for=\"internet-magazin_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span id=\"internet-magazin_skidka\" name=\"skidka\"></span>%</label></div>
                        <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                        <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                        <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                        <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/phone_ico.png"), "html", null, true);
        echo "\" class=\"phone_img\"/>
                        <input type=\"text\" name=\"name\" placeholder=\"Ваше имя\" required>
                        <br>
                        <input type=\"email\" name=\"email\"  placeholder=\"Электронная почта\" required>
                        <br>
                        <input type=\"tel\" name=\"tel\"  placeholder=\"Телефон\" required>
                        <br>
                        <input class=\"btn-podrobnee\" type=\"submit\" name=\"submit\" id=\"submit\" value=\"Заказать прямо сейчас\">
                    </div>
                </form>
            </div>
            <!--~~~~~~~~~~~~~~~~~/online shop calc~~~~~~~~~~~~~~~~~-->
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~/calculate~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~steps~~~~~~~~~~~~~~~~~-->
    <div class=\"steps_for_creating container\">
        <h2>Этапы создания сайта</h2>
        <div class=\"steps\">
            <div><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_01.png"), "html", null, true);
        echo "\"><p>Перед заключением договора рисуем бесплатно прототип сайта, согласовываем детали проекта.</p></div>
            <div><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_03.png"), "html", null, true);
        echo "\"><p>Создаём уникальный дизайн, который полностью соответствует Вашим требованиям.</p></div>
            <div><img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_02.png"), "html", null, true);
        echo "\"><p>Согласовываем макет, вносим изменения. Приступаем к вёрстке и программированию.</p></div>
            <div><img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_04.png"), "html", null, true);
        echo "\"><p>Публикуем проект в сети, выдаём инструкции и проводим обучение по работе с сайтом.</p></div>
        </div>
        <div class=\"preimuschestva\">
            <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_pr_01.png"), "html", null, true);
        echo "\"><p>Полная прозрачность сотрудничества</p>
            <li>Оформление домена и хостинга на Вас</li>
            <li>Полный досуп к сайту, открытый исходный код</li>
            <li>Возможность переехать на другой хостинг</li>
            <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_pr_02.png"), "html", null, true);
        echo "\"><p>Удобная система управления</p>
            <li>Бесплатный тест-драйв системы управления</li>
            <li>100% гарантия защиты от взлома</li>
            <li>Возможность перейти к другому разработчику</li>
            <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_pr_03.png"), "html", null, true);
        echo "\"><p>Надёжный хостинг и техподдержка</p>
            <li>100% гарантия работоспособности</li>
            <li>Бесплатная техническая поддержка</li>
            <li>Хостинг и домен на 1 год бесплатно!</li>
        </div>
        <a href=\"#\" title=\"Скидки при заказе продвижения\" class=\"ban_min\"><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/banners/skidki_50.png"), "html", null, true);
        echo "\" title=\"Скидки при заказе продвижения\" alt=\"Скидки при заказе продвижения\"></a>
    </div>
    <!--~~~~~~~~~~~~~~~~~/steps~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~annotations_all~~~~~~~~~~~~~~~~~-->
    <div class=\"annotations_all container\">
        <div class=\"links\">
            <a href=\"#\">Сайт-визитка</a>
            <a href=\"#\">Landing-page</a>
            <a href=\"#\" class=\"active\">Корпоративный сайт</a>
            <a href=\"#\">Интернет-магазин</a>
            <br>
            <a href=\"#\"><img src=\"img/ico767.png\">Заполнить анкету</a>
            <a href=\"#\"><img src=\"img/ico8756.png\">Способы оплаты</a>
            <a href=\"#\"><img src=\"img/ico64898.png\">Наши документы</a>



        </div>
        <input type=\"checkbox\" id=\"read_more\">
        <div class=\"annotation\">
            <p>Если сегодня информацию о компании нельзя найти на просторах Интернета, читайте, что её не существует. Сайт компании нужен не только для того, чтобы продавать свои товары и услуги в Сети. Создать сайт-визитку экерты советуют всем, кто заботится об имидже собственной компании, и не важно, какого рода деятельности она занимается.</p>
            <p>У нас можно заказать создание сайта визитки в самые короткие сроки и по самым демократичным ценам. Разработка сайта-визитки и его создание занимает не более трёх дней, цены на сегодняшний день стартуют от 4 990 рублей.</p>
            <p>Если сегодня информацию о компании нельзя найти на просторах Интернета, читайте, что её не существует. Сайт компании нужен не только для того, чтобы продавать свои товары и услуги в Сети. Создать сайт-визитку экерты советуют всем, кто заботится об имидже собственной компании, и не важно, какого рода деятельности она занимается.</p>
            <p>У нас можно заказать создание сайта визитки в самые короткие сроки и по самым демократичным ценам. Разработка сайта-визитки и его создание занимает не более трёх дней, цены на сегодняшний день стартуют от 4 990 рублей.</p>
            <p>Если сегодня информацию о компании нельзя найти на просторах Интернета, читайте, что её не существует. Сайт компании нужен не только для того, чтобы продавать свои товары и услуги в Сети. Создать сайт-визитку экерты советуют всем, кто заботится об имидже собственной компании, и не важно, какого рода деятельности она занимается.</p>
            <p>У нас можно заказать создание сайта визитки в самые короткие сроки и по самым демократичным ценам. Разработка сайта-визитки и его создание занимает не более трёх дней, цены на сегодняшний день стартуют от 4 990 рублей.</p>
            <label for=\"read_more\">Читать далее</label>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~/annotations_all~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~blog~~~~~~~~~~~~~~~~~-->
    <div class=\"blog container\">
        <h2>Статьи по этой теме</h2>
        <p class=\"h2-dop\">Также вы можете прочитать <a href=\"#\" title=\"Прочитать все статьи\">все статьи</a></p>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div>
                    <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blog/skype.jpg"), "html", null, true);
        echo "\" class=\"blog_img\"/>
                    <p class=\"blog_title\">Удобство удаленного общения</p>
                    <p class=\"blog_description\">Современные технологии позволяют общаться на расстоянии. Это очень удобно и в нашей сфере. Данная статья рассказывает…</p>
                    <img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/time.png"), "html", null, true);
        echo "\" class=\"time_ico\"/><span class=\"blog_date\"> 30.03.2015</span>
                    <a href=\"#\">Подробнее</a>
                </div>
            </div>
            <div class=\"col-md-4 visible-lg visible-md\">
                <div>
                    <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blog/skype.jpg"), "html", null, true);
        echo "\" class=\"blog_img\"/>
                    <p class=\"blog_title\">Удобство удаленного общения</p>
                    <p class=\"blog_description\">Современные технологии позволяют общаться на расстоянии. Это очень удобно и в нашей сфере. Данная статья рассказывает…</p>
                    <img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/time.png"), "html", null, true);
        echo "\" class=\"time_ico\"/><span class=\"blog_date\"> 30.03.2015</span>
                    <a href=\"#\">Подробнее</a>
                </div>
            </div>
            <div class=\"col-md-4 visible-lg visible-md\">
                <div>
                    <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blog/skype.jpg"), "html", null, true);
        echo "\" class=\"blog_img\"/>
                    <p class=\"blog_title\">Удобство удаленного общения</p>
                    <p class=\"blog_description\">Современные технологии позволяют общаться на расстоянии. Это очень удобно и в нашей сфере. Данная статья рассказывает…</p>
                    <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/time.png"), "html", null, true);
        echo "\" class=\"time_ico\"/><span class=\"blog_date\"> 30.03.2015</span>
                    <a href=\"#\">Подробнее</a>
                </div>
            </div>

        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~/blog~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~begin_promotion~~~~~~~~~~~~~~~~~-->
    <div class=\"begin_promotion\">
        <a>Продвижение с гарантией ТОП</a>
        <a href=\"#\" title=\"Начать продвижение с гарантией ТОП\">Начать</a>
    </div>
    <!--~~~~~~~~~~~~~~~~~/begin_promotion~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 361,  524 => 358,  515 => 352,  509 => 349,  500 => 343,  494 => 340,  454 => 303,  446 => 298,  439 => 294,  432 => 290,  426 => 287,  422 => 286,  418 => 285,  414 => 284,  392 => 265,  388 => 264,  384 => 263,  373 => 255,  369 => 254,  365 => 253,  361 => 252,  357 => 251,  353 => 250,  344 => 244,  339 => 242,  335 => 241,  331 => 240,  327 => 239,  323 => 238,  319 => 237,  311 => 232,  306 => 230,  302 => 229,  298 => 228,  294 => 227,  290 => 226,  286 => 225,  280 => 222,  276 => 221,  272 => 220,  268 => 219,  264 => 218,  260 => 217,  207 => 167,  146 => 109,  39 => 4,  36 => 3,  11 => 2,);
    }
}
