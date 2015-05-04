<?php

/* AppBundle:Default:social.html.twig */
class __TwigTemplate_e406cc3d420ae866a605d5cfd32144656699581ffc27745e8c8bfbeda56ccdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:social.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!--~~~~~~~~~~~~~~~~~content~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
    <div class=\"banner banner_social-networks banner_big\">
        <div class=\"container\">
            <div class=\"banner_content\">
                <h2>Продвижение в соц. сетях</h2>
                <li>С помощью контекстной рекламы в интернете Вы сможете получать первых посетителей на сайт уже
                    сегодня!
                </li>
                <li>Контекстная реклама позволяет вывести сайт на первые строчки поисковых систем с оплатой \"по факту\"
                </li>
                <li>Вы платите только за тех пользователей, которые реально перешли на Ваш сайт, показ объявления при
                    этом бесплатный.
                </li>
                <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
            </div>
        </div>
    </div>
    <div class=\"banner banner_social-networks banner_small\">
        <div class=\"container\">
            <div class=\"banner_content\">
                <h2>Продвижение в соц. сетях</h2>
                <li>С помощью контекстной рекламы в интернете Вы сможете получать первых посетителей на сайт уже
                    сегодня!
                </li>
                <li>Контекстная реклама позволяет вывести сайт на первые строчки поисковых систем с оплатой \"по факту\"
                </li>
                <li>Вы платите только за тех пользователей, которые реально перешли на Ваш сайт, показ объявления при
                    этом бесплатный.
                </li>
                <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~tariffs~~~~~~~~~~~~~~~~~-->
    <div class=\"tariffs container\">
        <h2>Продвижение в социальных сетях</h2>

        <div class=\"row\">
            <div class=\"col-md-6\" style=\"padding: 0;\">
                <div class=\"row\" style=\"padding: 0 5px;\">
                    <div class=\"thead col-md-12\">Продвижение в соц.сетях</div>
                    <div class=\"tleft col-md-6 col-sm-6 col-xs-6\">
                        <li>Настройка рекламы в соц.сетях</li>
                        <li>Настройка рекламы в соц.сетях</li>
                        <li>Настройка рекламы в соц.сетях</li>
                    </div>
                    <div class=\"tbody col-md-6 col-sm-6 col-xs-6\">
                        <li>(Вконтакте): 7 950 р.</li>
                        <li>(Вконтакте, Facebook): 8 950 р.</li>
                        <li style=\"padding: 20px 0;\">(Вконтакте, Facebook, Одноклассники, Mail.ru): 9 950 р.</li>
                    </div>
                    <p>При заказе ведения группы скидка на ведение рекламы 50%. Подробности уточняйте у менеджеров
                        компании.</p>
                </div>
            </div>
            <div class=\"col-md-6\" style=\"padding: 0;\">
                <div class=\"row\" style=\"padding: 0 5px;\">
                    <div class=\"thead col-md-12\">Ведение рекламы и наполнение</div>
                    <div class=\"tleft col-md-6 col-sm-6 col-xs-6\">
                        <li>Аватар для группы:</li>
                        <li>Меню для группы:</li>
                        <li>Аватар + меню для группы:</li>
                        <li style=\"padding: 20px 15px;\">Баннер для закреплённой записи:</li>
                    </div>
                    <div class=\"tbody col-md-6 col-sm-6 col-xs-6\">
                        <li>3 990 руб.</li>
                        <li>2 990 руб.</li>
                        <li>5 990 руб.</li>
                        <li>1 000 руб.</li>
                    </div>
                    <p>Ведение групп.<br>
                        Регулярное обновление контента, опросы, конкурсы, удаление спама.<br>
                        Стоимость: от 390 руб./день (оценивается индивидуально). </p>

                    <p>Ведение рекламы. <br>
                        Контроль ставок, позиций, оптимизация качественного трафика. <br>
                        Стоимость: 20% от бюджета на таргет-рекламу, но не менее 4 950 руб./мес.</p>

                    <p>При заказе ведения группы скидка на ведение рекламы 50%.<br>Подробности уточняйте у менеджеров
                        компании.</p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~/tariffs~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
