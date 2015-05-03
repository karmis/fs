<?php

/* AppBundle:Default:support.html.twig */
class __TwigTemplate_018bb227b062eb51fb6b2695eb7a0239a827862a815cb0512d711294874e4649 extends Twig_Template
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
        <div class=\"banner banner_support-of-sites banner_big\">        \t
        \t<div class=\"container\">
\t        \t<div class=\"banner_content\">
\t        \t\t<h2>Поддержка сайтов</h2>
\t        \t\t<p>Веб-студия «ColorNew» осуществляет поддержку и техническое обслуживание сайтов. Очень важно обновлять сайт новым контентом, статьями, фотографиями, дорабатывать функционал, обновлять разделы для того, чтобы сайт жил, а Ваш бизнес развивался.</p>
\t        \t\t<li>Стоимость наших услуг определяется трудо-часами работы специалистов над Вашим проектом и оплачивается по факту обращения. </li>
\t        \t\t<li>У нас нет абонентской платы, оценка работ производится по факту обращения. Мы считаем ,что это самый правильный и честный подход по отношению к клиенту.</li>
\t        \t\t<a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
\t        \t</div>
\t        </div>
\t    </div>
\t    <div class=\"banner banner_support-of-sites banner_small\">
\t    \t<div class=\"container\">
\t        \t<div class=\"banner_content\">
\t        \t\t<h2>Поддержка сайтов</h2>
\t        \t\t<p>Веб-студия «ColorNew» осуществляет поддержку и техническое обслуживание сайтов. Очень важно обновлять сайт новым контентом, статьями, фотографиями, дорабатывать функционал, обновлять разделы для того, чтобы сайт жил, а Ваш бизнес развивался.</p>
\t        \t\t<li>Стоимость наших услуг определяется трудо-часами работы специалистов над Вашим проектом и оплачивается по факту обращения. </li>
\t        \t\t<li>У нас нет абонентской платы, оценка работ производится по факту обращения. Мы считаем ,что это самый правильный и честный подход по отношению к клиенту.</li>
\t        \t\t<a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
\t        \t</div>
\t        </div>
\t    </div>
\t<!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~circle_steps~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"circle_steps container visible-lg\">
\t\t\t<div><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-1.png"), "html", null, true);
        echo "\"><p>Добавить новый раздел</p></div>
\t\t\t<div></div>
\t\t\t<div><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-2.png"), "html", null, true);
        echo "\"><p>Дописать<br>небольшой функционал</p></div>
\t\t\t<div></div>
\t\t\t<div><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-3.png"), "html", null, true);
        echo "\"><p>Заполнить до 50 карточек<br>товаров в Интернет-магазин</p></div>
\t\t\t<div></div>
\t\t\t<div><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/circle-4.png"), "html", null, true);
        echo "\"><p>Оптимизировать<br>изображения</p></div>
\t\t\t<p>Это лишь примерные работы, которые могут быть выполнены за 1 час. Требования у Вас могут быть разные. Мы всегда подскажем как улучшить Ваш сайт и какие варианты могут быть по модернизации функционала. Если Вы будете часто заказывать технические работы по сайту, то можете воспользоваться пакетами часов для экономии:</p>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/circle_steps~~~~~~~~~~~~~~~~~-->
\t<!--~~~~~~~~~~~~~~~~~packages~~~~~~~~~~~~~~~~~-->
\t\t<div class=\"packages container\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"blod\">
\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blod.png"), "html", null, true);
        echo "\">Mini
\t\t\t\t</div>
\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t<div class=\"h\">Пакет МИНИ</div>
\t\t\t\t\t<p>Пакет рассчитан на 3 часа работы наших специалистов. Наполнение сайта контентом (статьями, новостями, изображениями, видео, карточки товаров в интернет-магазин, новые страницы), контроль распределения нагрузки сайта на сервер, консультации.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cena\">2 590 <span>руб.</span></div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"blod\">
\t\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blod.png"), "html", null, true);
        echo "\">Standart
\t\t\t\t</div>
\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t<div class=\"h\">Пакет СТАНДАРТ</div>
\t\t\t\t\t<p>Пакет рассчитан на 7 часов работы технического специалиста. Кроме наполнения сайта в данном пакете можно частично изменить дизайн и верстку, добавить разделы, написать небольшой скрипт, нарисовать слайды, обработать фото и т.д.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cena\">5 990 <span>руб.</span></div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"blod\">
\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/blod.png"), "html", null, true);
        echo "\">Max
\t\t\t\t</div>
\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t<div class=\"h\">Пакет МАКСИМАЛЬНЫЙ</div>
\t\t\t\t\t<p>Пакет поддержки сайта рассчитан на 20 часов работы наших специалистов. Подойдет крупным Интернет-магазинам и высоконагруженным проектам. Добавление/изменение функционала, написание скриптов, разработка сложной графики.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cena\">15 300 <span>руб.</span></div>
\t\t\t</div>
\t\t\t<div class=\"podrobnee\"><a href=\"#\" class=\"btn-podrobnee\">Получить консультацию</a></div>
\t\t</div>
\t<!--~~~~~~~~~~~~~~~~~/packages~~~~~~~~~~~~~~~~~-->
<!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 64,  107 => 54,  94 => 44,  83 => 36,  78 => 34,  73 => 32,  68 => 30,  39 => 3,  36 => 2,  11 => 1,);
    }
}
