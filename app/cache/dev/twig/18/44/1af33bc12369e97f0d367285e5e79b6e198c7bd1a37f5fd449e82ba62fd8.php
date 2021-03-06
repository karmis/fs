<?php

/* AppBundle:Default:domains.html.twig */
class __TwigTemplate_18441af33bc12369e97f0d367285e5e79b6e198c7bd1a37f5fd449e82ba62fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:domains.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'banner' => array($this, 'block_banner'),
            'tariffs' => array($this, 'block_tariffs'),
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
        echo "    ";
        $this->displayBlock('banner', $context, $blocks);
        // line 49
        echo "

    ";
        // line 51
        $this->displayBlock('tariffs', $context, $blocks);
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
        // line 4
        echo "        <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_domains-and-hosting banner_big\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Хостинг <span class=\"red\">&</span> Домены</h2>

                    <p><span class=\"red\">Домен</span> - имя Вашего сайта в Интернете по которому он доступен.
                        Например,www.ваше_имя.ru </p>

                    <p><span class=\"red\">Хостинг</span> - это услуга по предоставлению свободного пространства на
                        жестком диске сервера для размещения Вашего сайта в Интернете. </p>

                    <p>Мы предоставляем услуги по регистрации доменных имен, а также услуги аренды сервера по
                        привлекательным ценам с различной конфигурацией. </p>

                    <p>Мы подобрали для Вас тарифы, которые могут удовлетворить потребностям любого клиента! Если Вы не
                        подобрали для себя нужную конфигурацию, мы поможем собрать для Вас новый тариф, который будет
                        применен только к Вашему сайту!</p>
                    <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <div class=\"banner banner_domains-and-hosting banner_small\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Хостинг <span class=\"red\">&</span> Домены</h2>

                    <p><span class=\"red\">Домен</span> - имя Вашего сайта в Интернете по которому он доступен.
                        Например,www.ваше_имя.ru </p>

                    <p><span class=\"red\">Хостинг</span> - это услуга по предоставлению свободного пространства на
                        жестком диске сервера для размещения Вашего сайта в Интернете. </p>

                    <p>Мы предоставляем услуги по регистрации доменных имен, а также услуги аренды сервера по
                        привлекательным ценам с различной конфигурацией. </p>

                    <p>Мы подобрали для Вас тарифы, которые могут удовлетворить потребностям любого клиента! Если Вы не
                        подобрали для себя нужную конфигурацию, мы поможем собрать для Вас новый тариф, который будет
                        применен только к Вашему сайту!</p>
                    <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 51
    public function block_tariffs($context, array $blocks = array())
    {
        // line 52
        echo "        <div class=\"tariffs container\">
            <h2>Тарифы на хостинг</h2>

            <div class=\"korpus2\" id=\"korpus2\">
                <input type=\"radio\" name=\"odin\" checked=\"checked\" id=\"vvkl1\"/><label for=\"vvkl1\"><a class=\"tab\"
                                                                                                    title=\"Виртуальный хостинг\">ВИРТУАНЫЙ
                        ХОСТИНГ</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vvkl2\"/><label for=\"vvkl2\"><a class=\"tab\"
                                                                                  title=\"Хостинг на SSD-дисках\">ХОСТИНГ
                        НА SSD-ДИСКАХ</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vvkl3\"/><label for=\"vvkl3\"><a class=\"tab\"
                                                                                  title=\"Резервное копирование\">РЕЗЕРВНОЕ
                        КОПИРОВАНИЕ</a></label>
                <!--~~~~~~~~~~~~~~~~~virtual hosting~~~~~~~~~~~~~~~~~-->
                <div>
                    <div class=\"row visible-md visible-lg\">
                        <div class=\"thead col-md-4\"></div>
                        <div class=\"thead col-md-2\">Lite</div>
                        <div class=\"thead col-md-2\">Standart</div>
                        <div class=\"thead col-md-2\">Profi</div>
                        <div class=\"thead col-md-2\">Expert</div>
                        <div class=\"tleft col-md-4\">
                            <li>Цена за 1mb</li>
                            <li>Для кого подойдет</li>
                            <li>Ограничение на CPU</li>
                            <li>Ограничение на ОЗУ</li>
                            <li>Количество процессов</li>
                            <li>Запросов к MySQL</li>
                            <li>Одновременных соединений к MySQL</li>
                            <li>Корпоративные почтовые ящики</li>
                            <li>Минимальный заказ в месяц</li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>1,25 руб.</li>
                            <li style=\"padding: 10px 5px;\">Небольшие сайты с посещаемостью до 20 человек в сутки.</li>
                            <li>50 сек</li>
                            <li>64 mb</li>
                            <li>100</li>
                            <li>1000 в час</li>
                            <li>5 на пользователя</li>
                            <li>3</li>
                            <li>250 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>1 руб.</li>
                            <li style=\"padding: 10px 5px;\">Сайты с посещаемостью до 300 человек в сутки.</li>
                            <li>70 сек</li>
                            <li>128 mb</li>
                            <li>200</li>
                            <li>25000 в час</li>
                            <li>8 на пользователя</li>
                            <li>10</li>
                            <li>400 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>0,5 руб.</li>
                            <li style=\"padding: 10px 5px;\">Сайты с посещаемостью до 1000 человек в сутки.</li>
                            <li>120 сек</li>
                            <li>128 mb</li>
                            <li>300</li>
                            <li>45000 в час</li>
                            <li>30 на пользователя</li>
                            <li>20</li>
                            <li>500 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>0,4 руб.</li>
                            <li style=\"padding: 10px 5px;\">Сайты с высокой производительностью внутренних ресурсов.</li>
                            <li>250 сек</li>
                            <li>512 mb</li>
                            <li>800</li>
                            <li>80000 в час</li>
                            <li>80 на пользователя</li>
                            <li>40</li>
                            <li>2000 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                    <div class=\"row visible-sm visible-xs\">
                        <div class=\"horizontal-click1\">
                            <input type=\"radio\" name=\"virtual_hosting\" id=\"vkl1\" checked=\"checked\"/>
                            <label for=\"vkl1\">Lite</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена за 1mb</li>
                                    <li>Для кого подойдет</li>
                                    <li>Ограничение на CPU</li>
                                    <li>Ограничение на ОЗУ</li>
                                    <li>Количество процессов</li>
                                    <li>Запросов к MySQL</li>
                                    <li>Одновременных соединений к MySQL</li>
                                    <li>Корпоративные почтовые ящики</li>
                                    <li>Минимальный заказ в месяц</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>1,25 руб.</li>
                                    <li>Небольшие сайты с посещаемостью до 20 человек в сутки.</li>
                                    <li>50 сек</li>
                                    <li>64 mb</li>
                                    <li>100</li>
                                    <li>1000 в час</li>
                                    <li>5 на пользователя</li>
                                    <li>3</li>
                                    <li>250 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"virtual_hosting\" id=\"vkl2\"/>
                            <label for=\"vkl2\">Standart</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена за 1mb</li>
                                    <li>Для кого подойдет</li>
                                    <li>Ограничение на CPU</li>
                                    <li>Ограничение на ОЗУ</li>
                                    <li>Количество процессов</li>
                                    <li>Запросов к MySQL</li>
                                    <li>Одновременных соединений к MySQL</li>
                                    <li>Корпоративные почтовые ящики</li>
                                    <li>Минимальный заказ в месяц</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>1 руб.</li>
                                    <li>Сайты с посещаемостью до 300 человек в сутки.</li>
                                    <li>70 сек</li>
                                    <li>128 mb</li>
                                    <li>200</li>
                                    <li>25000 в час</li>
                                    <li>8 на пользователя</li>
                                    <li>10</li>
                                    <li>400 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"virtual_hosting\" id=\"vkl3\"/>
                            <label for=\"vkl3\">Profi</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена за 1mb</li>
                                    <li>Для кого подойдет</li>
                                    <li>Ограничение на CPU</li>
                                    <li>Ограничение на ОЗУ</li>
                                    <li>Количество процессов</li>
                                    <li>Запросов к MySQL</li>
                                    <li>Одновременных соединений к MySQL</li>
                                    <li>Корпоративные почтовые ящики</li>
                                    <li>Минимальный заказ в месяц</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>0,5 руб.</li>
                                    <li>Сайты с посещаемостью до 1000 человек в сутки.</li>
                                    <li>120 сек</li>
                                    <li>128 mb</li>
                                    <li>300</li>
                                    <li>45000 в час</li>
                                    <li>30 на пользователя</li>
                                    <li>20</li>
                                    <li>500 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"virtual_hosting\" id=\"vkl4\"/>
                            <label for=\"vkl4\">Expert</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена за 1mb</li>
                                    <li>Для кого подойдет</li>
                                    <li>Ограничение на CPU</li>
                                    <li>Ограничение на ОЗУ</li>
                                    <li>Количество процессов</li>
                                    <li>Запросов к MySQL</li>
                                    <li>Одновременных соединений к MySQL</li>
                                    <li>Корпоративные почтовые ящики</li>
                                    <li>Минимальный заказ в месяц</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>0,4 руб.</li>
                                    <li>Сайты с высокой производительностью внутренних ресурсов.</li>
                                    <li>250 сек</li>
                                    <li>512 mb</li>
                                    <li>800</li>
                                    <li>80000 в час</li>
                                    <li>80 на пользователя</li>
                                    <li>40</li>
                                    <li>2000 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~/virtual hosting~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~hosted on SSD-drives~~~~~~~~~~~~~~~~~-->
                <div>
                    <div class=\"row visible-md visible-lg\">
                        <div class=\"thead col-md-6\"></div>
                        <div class=\"thead col-md-2\">Скорость-1</div>
                        <div class=\"thead col-md-2\">Скорость-2</div>
                        <div class=\"thead col-md-2\">Скорость-3</div>
                        <div class=\"tleft col-md-6\">
                            <li>Цена (1 месяц), руб</li>
                            <li>Дисковое пространство</li>
                            <li>Допустимая нагрузка на сервер</li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>1500 руб.</li>
                            <li>15 000 mb</li>
                            <li>20%</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>1700 руб.</li>
                            <li>17 000 mb</li>
                            <li>30%</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>2000 руб.</li>
                            <li>30 000 mb</li>
                            <li>40%</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                    <div class=\"row visible-sm visible-xs\">
                        <div class=\"horizontal-click2\">
                            <input type=\"radio\" name=\"ssd\" id=\"vkl5\" checked=\"checked\"/>
                            <label for=\"vkl5\">Скорость-1</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена (1 месяц), руб</li>
                                    <li>Дисковое пространство</li>
                                    <li>Допустимая нагрузка на сервер</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>1500 руб.</li>
                                    <li>15 000 mb</li>
                                    <li>20%</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"ssd\" id=\"vkl6\"/>
                            <label for=\"vkl6\">Скорость-2</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена (1 месяц), руб</li>
                                    <li>Дисковое пространство</li>
                                    <li>Допустимая нагрузка на сервер</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>1700 руб.</li>
                                    <li>17 000 mb</li>
                                    <li>30%</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"ssd\" id=\"vkl7\"/>
                            <label for=\"vkl7\">Скорость-3</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена (1 месяц), руб</li>
                                    <li>Дисковое пространство</li>
                                    <li>Допустимая нагрузка на сервер</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>2000 руб.</li>
                                    <li>30 000 mb</li>
                                    <li>40%</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~/hosted on SSD-drives~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~backup~~~~~~~~~~~~~~~~~-->
                <div>
                    <div class=\"row visible-md visible-lg\">
                        <div class=\"thead col-md-6\"></div>
                        <div class=\"thead col-md-2\">25 gb</div>
                        <div class=\"thead col-md-2\">50 gb</div>
                        <div class=\"thead col-md-2\">100 gb</div>
                        <div class=\"tleft col-md-6\">
                            <li>Цена (1 месяц), руб</li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>1 500 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>2 390 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                        <div class=\"tbody col-md-2\">
                            <li>2 990 руб.</li>
                            <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                        </div>
                    </div>
                    <div class=\"row visible-sm visible-xs\">
                        <div class=\"horizontal-click3\">
                            <input type=\"radio\" name=\"backup\" id=\"vkl8\" checked=\"checked\"/>
                            <label for=\"vkl8\">25 gb</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена (1 месяц), руб</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>1 500 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"backup\" id=\"vkl9\"/>
                            <label for=\"vkl9\">50 gb</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена (1 месяц), руб</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>2 390 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                            <input type=\"radio\" name=\"backup\" id=\"vkl10\"/>
                            <label for=\"vkl10\">100 gb</label>

                            <div class=\"row\">
                                <div class=\"tleft col-sm-6 col-xs-6\">
                                    <li>Цена (1 месяц), руб</li>
                                </div>
                                <div class=\"tbody col-sm-6 col-xs-6\">
                                    <li>2 990 руб.</li>
                                    <li class=\"hid\"><a class=\"btn-podrobnee\" href=\"#\" title=\"\">Заказать</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~/backup~~~~~~~~~~~~~~~~~-->
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\" style=\"padding: 0;\">
                    <div class=\"row\" style=\"padding: 0 5px;\">
                        <div class=\"thead col-md-6 col-sm-6 col-xs-6\">Доменная зона</div>
                        <div class=\"thead col-md-6 col-sm-6 col-xs-6\">Стоимость (1 год), руб.</div>
                        <div class=\"tleft col-md-6 col-sm-6 col-xs-6\">
                            <li>ru</li>
                            <li>рф</li>
                            <li>ru+ru (два по цене одного)</li>
                            <li>ru+рф (два по цене одного)</li>
                            <li>рф+рф (два по цене одного)</li>
                            <li>com</li>
                            <li>com+ru</li>
                            <li>su</li>
                            <li>org</li>
                            <li>biz</li>
                            <li>info</li>
                            <li>mobi</li>
                            <li>name</li>
                            <li>me</li>
                        </div>
                        <div class=\"tbody col-md-6 col-sm-6 col-xs-6\">
                            <li>600 руб.</li>
                            <li>600 руб.</li>
                            <li>600 руб.</li>
                            <li>600 руб.</li>
                            <li>600 руб.</li>
                            <li>840 руб.</li>
                            <li>950 руб.</li>
                            <li>840 руб.</li>
                            <li>840 руб.</li>
                            <li>840 руб.</li>
                            <li>840 руб.</li>
                            <li>990 руб.</li>
                            <li>840 руб.</li>
                            <li>1770 руб.</li>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\" style=\"padding: 0;\">
                    <div class=\"row\" style=\"padding: 0 5px;\">
                        <div class=\"thead col-md-8 col-sm-8 col-xs-8\">Наименование услуги</div>
                        <div class=\"thead col-md-4 col-sm-4 col-xs-4\">Стоимость</div>
                        <div class=\"tleft col-md-8 col-sm-8 col-xs-8\">
                            <li>Защита сайта от взлома и вирусов</li>
                            <li>Администрирование стороннего сервера</li>
                            <li>Выкуп доменных имен на аукционах</li>
                            <li style=\"padding: 20px 14px;\">Юридические услуги по информационной безопасности</li>
                            <li style=\"padding: 20px 14px;\">Размещение и регистрация сайта за границей</li>
                        </div>
                        <div class=\"tbody col-md-4 col-sm-4 col-xs-4\">
                            <li>6 000 р./год</li>
                            <li>от 1 000 руб./мес.</li>
                            <li>4 990 руб.</li>
                            <li>от 1 990 руб.</li>
                            <li>9 990 руб.</li>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"podrobnee\"><a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a></div>
        </div>

        <!--~~~~~~~~~~~~~~~~~/tariffs~~~~~~~~~~~~~~~~~-->
    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:domains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  95 => 51,  47 => 4,  44 => 3,  40 => 51,  36 => 49,  33 => 3,  30 => 2,  11 => 1,);
    }
}
