<?php

/* AppBundle:Default:promotion.html.twig */
class __TwigTemplate_6df87727c782cb964c5949c5c8cd3330f99744b9320766c4c3d812253b6cdac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:promotion.html.twig", 1);
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
        echo "\t<!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_promotion-of-sites banner_big\">        \t
        \t<div class=\"container\">
\t        \t<div class=\"banner_content\">
\t        \t\t<h2>Продвижение сайта с гарантией</h2>
\t        \t\t<p>КАК МЫ РАБОТАЕМ:</p>
\t        \t\t<li>Бесплатно проводим аудит Вашего сайта и даем рекомендации по продвижению.</li>
\t        \t\t<li>Обговариваем список продвигаемых ключевых слов и заключаем договор.</li>
\t        \t\t<li>Если по окончанию работ, мы не продвинули Ваш сайт – возвращаем деньги!</li>
\t        \t\t<li>Сроки продвижения в ТОП от 4 до 6 месяцев (в зависимости от тематики сайта).</li>
\t        \t\t<a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
\t        \t</div>
\t        </div>
\t    </div>
\t    <div class=\"banner banner_promotion-of-sites banner_small\">
\t    \t<div class=\"container\">
\t        \t<div class=\"banner_content\">
\t        \t\t<h2>Продвижение сайта с гарантией</h2>
\t        \t\t<p>КАК МЫ РАБОТАЕМ:</p>
\t        \t\t<li>Бесплатно проводим аудит Вашего сайта и даем рекомендации по продвижению.</li>
\t        \t\t<li>Обговариваем список продвигаемых ключевых слов и заключаем договор.</li>
\t        \t\t<li>Если по окончанию работ, мы не продвинули Ваш сайт – возвращаем деньги!</li>
\t        \t\t<li>Сроки продвижения в ТОП от 4 до 6 месяцев (в зависимости от тематики сайта).</li>
\t        \t\t<a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
\t        \t</div>
\t        </div>
\t    </div>
\t<!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~circle_steps~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"circle_steps container visible-lg\">
\t\t\t<div><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-1.png"), "html", null, true);
        echo "\"><p>Есть Вы и Ваша компания</p></div>
\t\t\t<div></div>
\t\t\t<div><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-2.png"), "html", null, true);
        echo "\"><p>Есть потенциальный<br>клиент который ищет<br>Вашу продукцию в интернете</p></div>
\t\t\t<div></div>
\t\t\t<div><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-3.png"), "html", null, true);
        echo "\"><p>Есть поисковая система</p></div>
\t\t\t<div></div>
\t\t\t<div><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-4.png"), "html", null, true);
        echo "\"><p>Есть мы!<br>И мы выведем Вас<br>на первые строчки</p></div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/circle_steps~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~analytics~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"analytics container\">
\t\t\t<h2>Фиксированная стоимость<br>и гарантия возврата</h2>
\t\t\t<h2>Аналитика</h2>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/test_drive.png"), "html", null, true);
        echo "\">\t\t
\t\t\t\t<div>\t\t
\t\t\t\t\t<span class=\"h\">Тест-драйв</span>
\t\t\t\t\t<p>Аналитика тест-драйв покажет базовую техническую составляющую Вашего сайта на предмет очевидных ошибок мешающих продвижению сайта в поисковых системах.</p>
\t\t\t\t\t<span>Сроки: 1 рабочий день</span>
\t\t\t\t</div>
\t\t\t\t<span class=\"stoimost\">Стоимость: 0 руб.</span>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/mishen.png"), "html", null, true);
        echo "\">
\t\t\t\t<div>
\t\t\t\t\t<span class=\"h\">Продвинутая</span>
\t\t\t\t\t<p>В данной аналитике мы подробно изучаем Ваш сайт и сайты конкурентов, показываем сильные и слабые стороны, предлагаем мероприятия по устранению найденных замечаний, настраиваем грамотно счетчики посещаемости, регистрируем сайт в поисковых системах.</p>
\t\t\t\t\t<span>Сроки: 1 рабочий день</span>
\t\t\t\t</div>
\t\t\t\t<span class=\"stoimost\">Стоимость: 990 руб.</span>
\t\t\t</div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/analytics~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~packages~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"packages container\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"blod\">
\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blod.png"), "html", null, true);
        echo "\">Mini
\t\t\t\t</div>
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"h\">ТОП-МИНИ</div>
\t\t\t\t\t<p>Тариф идеально подходит для сайтов, имеющих среднюю конкуренцию в регионах</p>
\t\t\t\t\t<li>Продвижение сайта по ключевым запросам со средней конкуренцией;</li>
\t\t\t\t\t<li>Кол-во продвигаемых слов: 10</li>
\t\t\t\t\t<li>Гарантия вывода в ТОП: да.</li>
\t\t\t\t</div>
\t\t\t\t<div class=\"cena\">9 990 <span>р./мес.</span></div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"blod\">
\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blod.png"), "html", null, true);
        echo "\">Standart
\t\t\t\t</div>
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"h\">ТОП-СТАНДАРТ</div>
\t\t\t\t\t<p>Данный тариф подойдет, если Вы хотите расширить позиции по регионам, продвинуть ключевые слова с высокой конкуренцией запросов.</p>
\t\t\t\t\t<li>Продвижение сайта по ключевым запросам, имеющим среднюю и высокую конкуренцию;</li>
\t\t\t\t\t<li>Кол-во продвигаемых слов: 20</li>
\t\t\t\t\t<li>Гарантия вывода в ТОП: да.</li>
\t\t\t\t</div>
\t\t\t\t<div class=\"cena\">14 990 <span>р./мес.</span></div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"blod\">
\t\t\t\t\t<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blod.png"), "html", null, true);
        echo "\">Max
\t\t\t\t</div>
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"h\">ТОП-МАКСИМАЛЬНЫЙ</div>
\t\t\t\t\t<p>Данный тариф подойдет сайтам, которые нужно продвигать по городам-миллионникам, имеющим высокую конкуренцию и высокую заинтересованность аудитории.</p>
\t\t\t\t\t<li>Продвижение сайта по ключевым запросам, имеющим среднюю и высокую конкуренцию, а также продвижение интернет-магазинов;</li>
\t\t\t\t\t<li>Кол-во продвигаемых слов: 30</li>
\t\t\t\t\t<li>Гарантия вывода в ТОП: да.</li>
\t\t\t\t</div>
\t\t\t\t<div class=\"cena\">19 990 <span>р./мес.</span></div>
\t\t\t</div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/packages~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~konsultacia~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"konsultacia visible-lg visible-md\">
\t\t\t<div class=\"container\">
\t\t\t\t<span class=\"null\"></span>
\t\t\t\t<h2>Получите наше лучшее предложение!</h2>
\t\t\t\t<a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a>
\t\t\t</div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/konsultacia~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~preim_prom~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"preim_prom container\">
\t\t\t<h2>Преимущества работы с нами<br>над продвижением Вашего сайта</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<li>Нет «скрытых» платежей, все строго оговорено – фиксированная стоимость работ + бюджет по ключевым словам на основе наших рекомендаций.</li>
\t\t\t\t\t<li>Подробная статистика и отчет – Вы всегда будете в курсе, куда потратились деньги, а также каких позиций Вы добились.</li>
\t\t\t\t\t<li>Даже если Вы ничего не знаете о продвижении, мы научим Вас! Мы часто проводим тренинги и обучающие семинары для клиентов.</li>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<li>Весь процесс продвижения сайта мы держим открытым – в любой момент Вы можете связаться с нами любым удобным для Вас способом (телефон, email, icq, skype) и получить ответы на любые вопросы, а также запросить статистику.</li>
\t\t\t\t\t<li>Быстрый ответ даже в выходные и праздничные дни! Мы любим свою работу и контролируем позиции сайтов даже в выходные и праздничные дни. Ваш сайт «не упадет» за время новогодних и майских праздников.</li>
\t\t\t\t</div>
\t\t\t\t<p class=\"col-md-12\">Не нужно платить за написание «SEO-текстов» для сайта, а<br>также за технические работы над улучшением внутренней<br>структуры для поисковых систем - все включено в стоимость!</p>
\t\t\t</div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/preim_prom~~~~~~~~~~~~~~~~~-->
<!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 96,  134 => 83,  118 => 70,  101 => 56,  89 => 47,  78 => 39,  73 => 37,  68 => 35,  63 => 33,  31 => 3,  28 => 2,  11 => 1,);
    }
}
