<?php

/* AppBundle:Default:social.html.twig */
class __TwigTemplate_e406cc3d420ae866a605d5cfd32144656699581ffc27745e8c8bfbeda56ccdab extends Twig_Template
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
        echo "<!--~~~~~~~~~~~~~~~~~content~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_social-networks banner_big\">        \t
        \t<div class=\"container\">
\t        \t<div class=\"banner_content\">
\t        \t\t<h2>Продвижение в соц. сетях</h2>
\t        \t\t<li>С помощью контекстной рекламы в интернете Вы сможете получать первых посетителей на сайт уже сегодня!</li>
\t        \t\t<li>Контекстная реклама позволяет вывести сайт на первые строчки поисковых систем с оплатой \"по факту\"</li>
\t        \t\t<li>Вы платите только за тех пользователей, которые реально перешли на Ваш сайт, показ объявления при этом бесплатный.</li>
\t        \t\t<a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
\t        \t</div>
\t        </div>
\t    </div>
\t    <div class=\"banner banner_social-networks banner_small\">
\t    \t<div class=\"container\">
\t        \t<div class=\"banner_content\">
\t        \t\t<h2>Продвижение в соц. сетях</h2>
\t        \t\t<li>С помощью контекстной рекламы в интернете Вы сможете получать первых посетителей на сайт уже сегодня!</li>
\t        \t\t<li>Контекстная реклама позволяет вывести сайт на первые строчки поисковых систем с оплатой \"по факту\"</li>
\t        \t\t<li>Вы платите только за тех пользователей, которые реально перешли на Ваш сайт, показ объявления при этом бесплатный.</li>
\t        \t\t<a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
\t        \t</div>
\t        </div>
\t    </div>
\t<!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~tariffs~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"tariffs container\">
\t\t\t<h2>Продвижение в социальных сетях</h2>\t
\t\t\t<div class=\"row\">
  \t\t\t\t<div class=\"col-md-6\" style=\"padding: 0;\">
\t\t\t\t\t<div class=\"row\" style=\"padding: 0 5px;\">\t\t\t\t
\t\t\t\t\t\t<div class=\"thead col-md-12\">Продвижение в соц.сетях</div>\t
\t\t\t\t\t\t<div class=\"tleft col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<li>Настройка рекламы в соц.сетях</li>
\t\t\t\t\t\t\t<li>Настройка рекламы в соц.сетях</li>
\t\t\t\t\t\t\t<li>Настройка рекламы в соц.сетях</li>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tbody col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<li>(Вконтакте): 7 950 р.</li>
\t\t\t\t\t\t\t<li>(Вконтакте, Facebook): 8 950 р.</li>
\t\t\t\t\t\t\t<li style=\"padding: 20px 0;\">(Вконтакте, Facebook, Одноклассники, Mail.ru): 9 950 р.</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>При заказе ведения группы скидка на ведение рекламы 50%. Подробности уточняйте у менеджеров компании.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\" style=\"padding: 0;\">
\t\t\t\t\t<div class=\"row\" style=\"padding: 0 5px;\">\t\t\t\t
\t\t\t\t\t\t<div class=\"thead col-md-12\">Ведение рекламы и наполнение</div>\t
\t\t\t\t\t\t<div class=\"tleft col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<li>Аватар для группы:</li>
\t\t\t\t\t\t\t<li>Меню для группы:</li>
\t\t\t\t\t\t\t<li>Аватар + меню для группы:</li>
\t\t\t\t\t\t\t<li style=\"padding: 20px 15px;\">Баннер для закреплённой записи:</li>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tbody col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<li>3 990 руб.</li>
\t\t\t\t\t\t\t<li>2 990 руб.</li>
\t\t\t\t\t\t\t<li>5 990 руб.</li>
\t\t\t\t\t\t\t<li>1 000 руб.</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Ведение групп.<br> 
\t\t\t\t\t\tРегулярное обновление контента, опросы, конкурсы, удаление спама.<br> 
\t\t\t\t\t\tСтоимость: от 390 руб./день (оценивается индивидуально). </p>

\t\t\t\t\t\t<p>Ведение рекламы. <br> 
\t\t\t\t\t\tКонтроль ставок, позиций, оптимизация качественного трафика. <br> 
\t\t\t\t\t\tСтоимость: 20% от бюджета на таргет-рекламу, но не менее 4 950 руб./мес.</p>

\t\t\t\t\t\t<p>При заказе ведения группы скидка на ведение рекламы 50%.<br>Подробности уточняйте у менеджеров компании.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/tariffs~~~~~~~~~~~~~~~~~-->
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
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
