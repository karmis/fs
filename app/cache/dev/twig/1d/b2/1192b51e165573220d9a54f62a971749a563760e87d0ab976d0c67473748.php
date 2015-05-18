<?php

/* AppBundle:Default:landing.html.twig */
class __TwigTemplate_1db21192b51e165573220d9a54f62a971749a563760e87d0ab976d0c67473748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:landing.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'calculate' => array($this, 'block_calculate'),
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
    ";
        // line 101
        $this->displayBlock('calculate', $context, $blocks);
        // line 109
        echo "    <!--~~~~~~~~~~~~~~~~~/calculate~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~steps~~~~~~~~~~~~~~~~~-->
    <div class=\"steps_for_creating container\">
        <h2>Этапы создания сайта</h2>
        <div class=\"steps\">
            <div><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_01.png"), "html", null, true);
        echo "\"><p>Перед заключением договора рисуем бесплатно прототип сайта, согласовываем детали проекта.</p></div>
            <div><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_03.png"), "html", null, true);
        echo "\"><p>Создаём уникальный дизайн, который полностью соответствует Вашим требованиям.</p></div>
            <div><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_02.png"), "html", null, true);
        echo "\"><p>Согласовываем макет, вносим изменения. Приступаем к вёрстке и программированию.</p></div>
            <div><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_step_04.png"), "html", null, true);
        echo "\"><p>Публикуем проект в сети, выдаём инструкции и проводим обучение по работе с сайтом.</p></div>
        </div>
        <div class=\"preimuschestva\">
            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_pr_01.png"), "html", null, true);
        echo "\"><p>Полная прозрачность сотрудничества</p>
            <li>Оформление домена и хостинга на Вас</li>
            <li>Полный досуп к сайту, открытый исходный код</li>
            <li>Возможность переехать на другой хостинг</li>
            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_pr_02.png"), "html", null, true);
        echo "\"><p>Удобная система управления</p>
            <li>Бесплатный тест-драйв системы управления</li>
            <li>100% гарантия защиты от взлома</li>
            <li>Возможность перейти к другому разработчику</li>
            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_pr_03.png"), "html", null, true);
        echo "\"><p>Надёжный хостинг и техподдержка</p>
            <li>100% гарантия работоспособности</li>
            <li>Бесплатная техническая поддержка</li>
            <li>Хостинг и домен на 1 год бесплатно!</li>
        </div>
        <a href=\"#\" title=\"Скидки при заказе продвижения\" class=\"ban_min\"><img src=\"";
        // line 133
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
    ";
        // line 164
        echo twig_include($this->env, $context, "AppBundle:Article:preview_list.html.twig", array("entities" => (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))));
        echo "
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

    // line 101
    public function block_calculate($context, array $blocks = array())
    {
        // line 102
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Blocks:calculator.html.twig", array("vizitka" => false, "shop" => false, "corp" => false, "landing" => true));
        // line 107
        echo "
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
        return array (  236 => 107,  233 => 102,  230 => 101,  214 => 164,  180 => 133,  172 => 128,  165 => 124,  158 => 120,  152 => 117,  148 => 116,  144 => 115,  140 => 114,  133 => 109,  131 => 101,  32 => 4,  29 => 3,  11 => 2,);
    }
}
