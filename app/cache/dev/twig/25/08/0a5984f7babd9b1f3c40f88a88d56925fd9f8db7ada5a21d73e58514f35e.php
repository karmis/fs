<?php

/* AppBundle:Default:contact.html.twig */
class __TwigTemplate_25080a5984f7babd9b1f3c40f88a88d56925fd9f8db7ada5a21d73e58514f35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'banner' => array($this, 'block_banner'),
            'feedback' => array($this, 'block_feedback'),
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
        // line 80
        echo "
    ";
        // line 81
        $this->displayBlock('feedback', $context, $blocks);
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
        // line 4
        echo "        <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_contacts banner_big\">
            <div class=\"container\">
                <div class=\"ruka\"></div>
                <div class=\"karta\">
                    <script type=\"text/javascript\" charset=\"utf-8\"
                            src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=y9jGMZnbb0TMMDZG-5Eb_W4SnsN1cYit&width=100%&height=316\"></script>
                </div>
                <div class=\"banner_content\" itemscope itemtype=\"http://schema.org/Organization\"
                     itemtype=\"http://schema.org/LocalBusiness\">
                    <h2>Наши контакты</h2>
                    <a itemprop=\"name\" href=\"colornew.ru\" style=\"display:none;\">Веб-студия \"ColorNew\"</a>

                    <p class=\"contacts_p\">Телефоны:</p>

                    <p class=\"contacts_p tel\"><span>г. Владимир</span><a href=\"tel:+74922600232\" itemprop=\"telephone\">+7
                            (4922) 60-02-32</a></p>

                    <p class=\"contacts_p tel\"><span>г. Нижний Новгород</span><a href=\"tel:+78312613474\"
                                                                                itemprop=\"telephone\">+7 (831)
                            261-34-74</a></p>

                    <p class=\"contacts_p tel\"><span>г. Москва</span><a href=\"tel:+74997043843\" itemprop=\"telephone\">+7
                            (499) 704-38-43</a></p>
                    <br>

                    <p class=\"contacts_p\">Юридический адрес:</p>

                    <p class=\"contacts_p\" itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                        <span itemprop=\"postalCode\">600001</span>,
                        <span itemprop=\"addressLocality\">г.Владимир</span>,
                        <span itemprop=\"streetAddress\"> ул. Студеная гора, д.63, оф. 360 (4 этаж) </span>
                    </p>
                    <time itemprop=\"openingHours\" datetime=\"Mo-Fr 10:00-19:00\"></time>
                    <span itemprop=\"email\" style=\"display:none;\">n@colornew.ru</span>
                    <span itemprop=\"email\" style=\"display:none;\">support@colornew.ru</span>
                    <span itemprop=\"logo\" url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\"></span>
                    <a href=\"#\" class=\"contacts_link\">скачать реквизиты компании</a>
                    <br>
                    <a href=\"#\" class=\"contacts_link\">скачать бриф на разработку</a>
                    <br>
                    <a href=\"#\" class=\"contacts_link\">скачать бриф на продвижение</a>
                </div>
            </div>
        </div>
        <div class=\"banner banner_contacts banner_small\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Наши контакты</h2>

                    <p class=\"contacts_p\">Телефоны:</p>

                    <p class=\"contacts_p tel\"><span>г. Владимир</span><a href=\"tel:+74922600232\">+7 (4922) 60-02-32</a>
                    </p>

                    <p class=\"contacts_p tel\"><span>г. Нижний Новгород</span><a href=\"tel:+78312613474\">+7 (831)
                            261-34-74</a></p>

                    <p class=\"contacts_p tel\"><span>г. Москва</span><a href=\"tel:+74997043843\">+7 (499) 704-38-43</a>
                    </p>
                    <br>

                    <p class=\"contacts_p\">Юридический адрес:</p>

                    <p class=\"contacts_p\">600001, г.Владимир, ул. Студеная гора, д.63, оф. 360 (4 этаж)</p>
                    <a href=\"#\" class=\"contacts_link\">скачать реквизиты компании</a>
                    <br>
                    <a href=\"#\" class=\"contacts_link\">скачать бриф на разработку</a>
                    <br>
                    <a href=\"#\" class=\"contacts_link\">скачать бриф на продвижение</a>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->

    ";
    }

    // line 81
    public function block_feedback($context, array $blocks = array())
    {
        // line 82
        echo "        <div class=\"forma container svyazatsya\">
            <h2>Связаться с нами</h2>

            <form action=\"\">
                <p>Заполните форму и мы перезвоним вам!</p>
                <input type=\"text\" placeholder=\"Ваше имя\" required>
                <input type=\"tel\" class=\"phone_input\" placeholder=\"Телефон\" required>
                <input type=\"email\" placeholder=\"Электронная почта\">
                <textarea name=\"\" id=\"\" cols=\"30\" rows=\"8\" placeholder=\"Сообщение\"></textarea>
                <a href=\"\" class=\"politica\">Политика конфиденциальности</a>
                <input type=\"submit\" class=\"btn-dashed\" value=\"Отправить\">
            </form>
            <div class=\"kontakti_ico\">
                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_contact_01.png"), "html", null, true);
        echo "\" alt=\"Отдел продаж\" title=\"Отдел продаж\"/>

                <div>
                    <p>Отдел продаж</p>

                    <p><span>E-mail: </span><a href=\"mailto:n@colornew.ru\" title=\"n@colornew.ru\">n@colornew.ru</a></p>

                    <p><span>ICQ: </span>482-125-706</p>

                    <p><span>Skype: </span><a href=\"skype:n.colornew?add\" rel=\"nofollow\" target=\"_blank\"
                                              title=\"Добавить в skype n.colornew\">n.colornew</a></p>
                </div>
            </div>
            <div class=\"kontakti_ico\">
                <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_contact_02.png"), "html", null, true);
        echo "\" alt=\"Техническая поддержка\" title=\"Техническая поддержка\"/>

                <div>
                    <p>Техническая поддержка</p>

                    <p><span>E-mail: </span><a href=\"mailto:support@colornew.ru\" title=\"support@colornew.ru\">support@colornew.ru</a>
                    </p>

                    <p><span>Skype: </span><a href=\"skype:support.colornew?add\" rel=\"nofollow\" target=\"_blank\"
                                              title=\"Добавить в skype support.colornew\">support.colornew</a></p>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 109,  146 => 95,  131 => 82,  128 => 81,  84 => 40,  46 => 4,  43 => 3,  39 => 81,  36 => 80,  33 => 3,  30 => 2,  11 => 1,);
    }
}
