<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_c1d11bcc8f9349e836ca48a824286d0242a7b6073adcd8f3c83dc7243eacbf77 extends Twig_Template
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
            'banner' => array($this, 'block_banner'),
            'portfolio' => array($this, 'block_portfolio'),
            'calculate' => array($this, 'block_calculate'),
            'domain' => array($this, 'block_domain'),
            'homeimage' => array($this, 'block_homeimage'),
            'blog' => array($this, 'block_blog'),
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
        echo "    ";
        $this->displayBlock('banner', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('portfolio', $context, $blocks);
        // line 99
        echo "
    ";
        // line 100
        $this->displayBlock('calculate', $context, $blocks);
        // line 733
        echo "
    ";
        // line 734
        $this->displayBlock('domain', $context, $blocks);
        // line 753
        echo "
    ";
        // line 754
        $this->displayBlock('homeimage', $context, $blocks);
        // line 763
        echo "    <!--~~~~~~~~~~~~~~~~~/home_image~~~~~~~~~~~~~~~~~-->
    ";
        // line 764
        $this->displayBlock('blog', $context, $blocks);
        // line 802
        echo "    <!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->

";
    }

    // line 4
    public function block_banner($context, array $blocks = array())
    {
        // line 5
        echo "        <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_home banner_big\" style=\"background: url(";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_b88ac68")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/banners/home_colornew.jpg"), null))), "html", null, true);
        echo ") top no-repeat;\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Предложение для клиентов</h2>
                    <p>Специальное предложение для всех клиентов Интернет-студии «ColorNew»! </p>
                    <p>Вы выбираете тип сайта (визитка, корпоративный, интернет-магазин)<br/>
                        и заказываете его продвижение;</p>
                    <p>В зависимости от выбранного типа сайта, Вам предоставляется<br/>
                        скидка на его разработку (номинал скидки указан ниже);</p>
                    <p>Вы получаете новых клиентов и «отбиваете» стоимость сайта;</p>
                    <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <div class=\"banner banner_home banner_small\">
            <div class=\"container\">
                <div class=\"banner_content\">
                    <h2>Предложение для клиентов</h2>
                    <p>Специальное предложение для всех клиентов Интернет-студии «ColorNew»! </p>
                    <p>Вы выбираете тип сайта (визитка, корпоративный, интернет-магазин)<br/>
                        и заказываете его продвижение;</p>
                    <p>В зависимости от выбранного типа сайта, Вам предоставляется<br/>
                        скидка на его разработку (номинал скидки указан ниже);</p>
                    <p>Вы получаете новых клиентов и «отбиваете» стоимость сайта;</p>
                    <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 37
    public function block_portfolio($context, array $blocks = array())
    {
        // line 38
        echo "        <!--~~~~~~~~~~~~~~~~~portfolio~~~~~~~~~~~~~~~~~-->
        <div class=\"portfolio container\">
            <h2>Портфолио<span class=\"s\">s</span></h2>
            <ul class=\"bxslider\">

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://angarsk-kedr.ru/\" title='Пиломатериалы \"Ангарск-Кедр\"'><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/angarsk-kedr/angarsk-kedr.png"), "html", null, true);
        echo "\" alt='Пиломатериалы \"Ангарск-Кедр\"' title='Пиломатериалы \"Ангарск-Кедр\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/angarsk-kedr/angarsk-kedr_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://arab-new.ru/\" title='Новостной портал \"ArabNew\"'><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/arab-new/arab-new.png"), "html", null, true);
        echo "\" alt='Новостной портал \"ArabNew\"' title='Новостной портал \"ArabNew\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/arab-new/arab-new_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://astreya-konsalting.ru/\" title='Консалтинговый центр \"Астрея\"'><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/astreya/astreya.png"), "html", null, true);
        echo "\" alt='Консалтинговый центр \"Астрея\"' title='Консалтинговый центр \"Астрея\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/astreya/astreya_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://ateza.ru/\" title='Туристический портал \"Атеза\"'><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ateza/ateza.png"), "html", null, true);
        echo "\" alt='Туристический портал \"Атеза\"' title='Туристический портал \"Атеза\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ateza/ateza_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://color.beatsmagaz.ru/\" title='Интернет-магазин наушников \"Beats\"'><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/beats/beats.png"), "html", null, true);
        echo "\" alt='Интернет-магазин наушников \"Beats\"' title='Интернет-магазин наушников \"Beats\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/beats/beats_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"#\" title='Свадебные платья'><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/dreambride/dreambride.png"), "html", null, true);
        echo "\" alt='Свадебные платья' title='Свадебные платья'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/dreambride/dreambride_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://eco-korma.ru/\" title='Эко-корма для животных'><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/eco-korma/eco-korma.png"), "html", null, true);
        echo "\" alt='Эко-корма для животных' title='Эко-корма для животных'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/eco-korma/eco-korma_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://vladimir.egoza33.ru/\" title='Мобильная студия красоты \"EgoZa\"'><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/egoza/egoza.png"), "html", null, true);
        echo "\" alt='Мобильная студия красоты \"EgoZa\"' title='Мобильная студия красоты \"EgoZa\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/egoza/egoza_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://fotosoup.ru/\" title='Продажа фотообоев'><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/fotosoup/fotosoup.png"), "html", null, true);
        echo "\" alt='Продажа фотообоев' title='Продажа фотообоев'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/fotosoup/fotosoup_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"\" title='Интернет-магазин \"ГигМебели\"'><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/gigmebeli/gigmebeli.png"), "html", null, true);
        echo "\" alt='Интернет-магазин \"ГигМебели\"' title='Интернет-магазин \"ГигМебели\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/gigmebeli/gigmebeli_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://www.globalcircus.com/\" title='Авторский цирк'><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/globalcircus/globalcircus.png"), "html", null, true);
        echo "\" alt='Авторский цирк' title='Авторский цирк'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/globalcircus/globalcircus_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://hlv-vladimir.colornew.ru/\" title='Рекламное агенство \"Халява\"'><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/halyava/halyava.png"), "html", null, true);
        echo "\" alt='Рекламное агенство \"Халява\"' title='Рекламное агенство \"Халява\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/halyava/halyava_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://igrazooma.ru/\" title='Умные игры \"ИграЗума\"'><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/igrazooma/igrazooma.png"), "html", null, true);
        echo "\" alt='Умные игры \"ИграЗума\"' title='Умные игры \"ИграЗума\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/igrazooma/igrazooma_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://kitejtelecom.ru/\" title='Интернет-провайдер \"Китеж Телеком\"'><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/kitej/kitej.png"), "html", null, true);
        echo "\" alt='Интернет-провайдер \"Китеж Телеком\"' title='Интернет-провайдер \"Китеж Телеком\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/kitej/kitej_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://lestnicev.ru/\" title='Проектирование и изготовление лестниц'><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/lestnicev/lestnicev.png"), "html", null, true);
        echo "\" alt='Проектирование и изготовление лестниц' title='Проектирование и изготовление лестниц'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/lestnicev/lestnicev_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://mebel-city.su/\" title='Фабрика мягкой мебели \"Мебель-сити\"'><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mebel-city/mebel-city.png"), "html", null, true);
        echo "\" alt='Фабрика мягкой мебели \"Мебель-сити\"' title='Фабрика мягкой мебели \"Мебель-сити\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mebel-city/mebel-city_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://meshera-master.ru/\" title='Строительство деревянных домов \"Мещёра Мастер\"'><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/meshera-master/meshera-master.png"), "html", null, true);
        echo "\" alt='Строительство деревянных домов \"Мещёра Мастер\"' title='Строительство деревянных домов \"Мещёра Мастер\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/meshera-master/meshera-master_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://mishkioptom.ru/\" title='Фабрика мягких игрушек \"Плюшевая сказка\"'><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mishki/mishki.png"), "html", null, true);
        echo "\" alt='Фабрика мягких игрушек \"Плюшевая сказка\"' title='Фабрика мягких игрушек \"Плюшевая сказка\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mishki/mishki_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://phosphor-russia.ru/\" title='Магазин часов \"Phosphor\"'><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/phosphor/phosphor.png"), "html", null, true);
        echo "\" alt='Магазин часов Phosphor' title='Магазин часов \"Phosphor\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/phosphor/phosphor_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://xn---33-5cdab6a9beqekg8am4e.xn--p1ai/\" title='Салон красоты \"Планета солнца\"'><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/planetasolnca/planetasolnca.png"), "html", null, true);
        echo "\" alt='Салон красоты \"Планета солнца\"' title='Салон красоты \"Планета солнца\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/planetasolnca/planetasolnca_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://printeria33.ru/\" title='Ремонт офисной техники'><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/printeria33/printeria33.png"), "html", null, true);
        echo "\" alt='Ремонт офисной техники' title='Ремонт офисной техники'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/printeria33/printeria33_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://ros-lift.ru/\" title='ООО \"Рослифт\"'><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ros-lift/ros-lift.png"), "html", null, true);
        echo "\" alt='ООО \"Рослифт\"' title='ООО \"Рослифт\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ros-lift/ros-lift_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://smrstroy.ru/\" title='Строительная компания \"СМР-строй\"'><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/smr/smr.png"), "html", null, true);
        echo "\" alt='Строительная компания \"СМР-строй\"' title='Строительная компания \"СМР-строй\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/smr/smr_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://stroy-swyaz33.colornew.ru/\" title='Аренда спецавтотехники \"Строй-связь\"'><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/stroy-swyaz33/stroy-swyaz33.png"), "html", null, true);
        echo "\" alt='Аренда спецавтотехники \"Строй-связь\"' title='Аренда спецавтотехники \"Строй-связь\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/stroy-swyaz33/stroy-swyaz33_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://vip-yurist.colornew.ru/\" title='Юридическая компания \"VIP-юрист\"'><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/vip-yurist/vip-yurist.png"), "html", null, true);
        echo "\" alt='Юридическая компания \"VIP-юрист\"' title='Юридическая компания \"VIP-юрист\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/vip-yurist/vip-yurist_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://yagoda33.ru/\" title='РПФ \"Ягода\"'><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/yagoda/yagoda.png"), "html", null, true);
        echo "\" alt='РПФ \"Ягода\"' title='РПФ \"Ягода\"'><div class=\"abc\" style=\"background:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/yagoda/yagoda_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div></a></li>

            </ul>
        </div>
        <!--~~~~~~~~~~~~~~~~~/portfolio~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 100
    public function block_calculate($context, array $blocks = array())
    {
        // line 101
        echo "        <!--~~~~~~~~~~~~~~~~~calculate~~~~~~~~~~~~~~~~~-->
        <div class=\"calculate container\" id=\"calculate\">
            <div class=\"korpus\" id=\"korpus\">
                <h2>А сколько стоит сайт?</h2>
                <input type=\"radio\" name=\"odin\" checked=\"checked\" id=\"vkl1\"/><label for=\"vkl1\"><a class=\"tab\" title=\"Cайт-визитка\">САЙТ-ВИЗИТКА</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vkl2\"/><label for=\"vkl2\"><a class=\"tab\" title=\"Интернет-магазин\">ИНТЕРНЕТ-МАГАЗИН</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vkl3\"/><label for=\"vkl3\"><a class=\"tab\" title=\"Корпоративный сайт\">КОРПОРАТИВНЫЙ САЙТ</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vkl4\"/><label for=\"vkl4\"><a class=\"tab\" title=\"Landing-page\">LANDING-PAGE</a></label>
                <!--~~~~~~~~~~~~~~~~~business card site calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"site_vizitka\" action=\"\" method=\"post\">

                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\" title=\"Дизайн сайта\"><p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\" id=\"site_vizitka_gotoviy\" checked><label for=\"site_vizitka_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\" id=\"site_vizitka_individualniy\"><label for=\"site_vizitka_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\" id=\"site_vizitka_razrabotka_logotipa\"><label for=\"site_vizitka_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\" id=\"site_vizitka_razrabotka_bannerov\"><label for=\"site_vizitka_razrabotka_bannerov\">Разработка баннеров для слайдшоу</label><input type=\"text\" id=\"site_vizitka_k\" value=\"0\"> шт.</div>
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
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/kompl_logo.png"), "html", null, true);
        echo "\" alt=\"Комплектация\" title=\"Комплектация\"><p class=\"zagolovok_h2\">Комплектация</p>

                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"mini\" id=\"site_vizitka_mini\" checked><label for=\"site_vizitka_mini\">Мини</label></div>
                            <div class=\"item\">
                                <h3>Мини</h3>
                                <span class=\"price\">Цена: 0 руб.</span>
                                <div style=\"clear: right;\"></div>
                                <p class=\"opisanie\">

                                </p>
                                <p class=\"opisanie\">

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"standart\" id=\"site_vizitka_standart\"><label for=\"site_vizitka_standart\">Стандарт</label></div>
                            <div class=\"item\">
                                <h3>Стандарт</h3>
                                <span class=\"price\">Цена: 0 руб.</span>
                                <div style=\"clear: right;\"></div>
                                <p class=\"opisanie\">

                                </p>
                                <p class=\"opisanie\">

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"rashirenniy\" id=\"site_vizitka_rashirenniy\"><label for=\"site_vizitka_rashirenniy\">Расширенный</label></div>
                            <div class=\"item\">
                                <h3>Расширенный</h3>
                                <span class=\"price\">Цена: 0 руб.</span>
                                <div style=\"clear: right;\"></div>
                                <p class=\"opisanie\">

                                </p>
                                <p class=\"opisanie\">

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"copyright\" id=\"site_vizitka_copyright\"><label for=\"site_vizitka_copyright\">Копирайтинг</label><input type=\"text\" id=\"site_vizitka_k2\" value=\"0\"> страниц</div>
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

                        <input type=\"checkbox\" id=\"site_vizitka_checkbox_spoyler\"><label for=\"site_vizitka_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"site_vizitka_gotoviy_mini_dop\">
                                <p class=\"text\">1 страница и 4 вкладки (можно расширить до 6)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                            </div>
                            <div id=\"site_vizitka_gotoviy_standart_dop\">
                                <p class=\"text\">7 полноценных разделов (можно расширить бесплатно)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\" title=\"Фотогалерея\"><div></div><span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                            </div>
                            <div id=\"site_vizitka_gotoviy_rashireniy_dop\">
                                <p class=\"text\">7 полноценных разделов (можно расширить бесплатно)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\" title=\"Фотогалерея\"><div></div><span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Адаптивный дизайн\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/adaptive.png"), "html", null, true);
        echo "\" alt=\"Адаптивный дизайн\" title=\"Адаптивный дизайн\"><div></div><span>Адаптивный дизайн</span></a>
                            </div>
                            <div id=\"site_vizitka_individualniy_rashireniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>
                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\" title=\"Фотогалерея\"><div></div><span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Адаптивный дизайн\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/adaptive.png"), "html", null, true);
        echo "\" alt=\"Адаптивный дизайн\" title=\"Адаптивный дизайн\"><div></div><span>Адаптивный дизайн</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими материалами</div>
                                <div><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)</div>
                                <div><img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского номера (по желанию бесплатно)</div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого:  <span id=\"site_vizitka_cena\" name=\"cena\"></span> руб.</p>
                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\" id=\"site_vizitka_checkbox_skidka\" checked><label for=\"site_vizitka_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span id=\"site_vizitka_skidka\" name=\"skidka\"></span>%</label></div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 279
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
                <!--~~~~~~~~~~~~~~~~~/business card site calc~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~online shop calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"internet-magazin\" action=\"\" method=\"post\">

                        <img src=\"";
        // line 296
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
        // line 354
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
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\" title=\"Каталог товаров\"><div></div><span>Каталог товаров</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'> <div></div><span>Модуль \"Купить в 1 клик\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Приём платежей на сайте \"стандарт\"' title='Приём платежей на сайте \"стандарт\"'><div></div><span>Приём платежей на сайте \"стандарт\"</span></a>
                            </div>
                            <div id=\"internet-magazin_gotoviy_katalog_s_korzinoy_dop\">
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\" title=\"Каталог товаров\"><div></div><span>Каталог товаров</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'> <div></div><span>Модуль \"Купить в 1 клик\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Приём платежей на сайте \"стандарт\"' title='Приём платежей на сайте \"стандарт\"'><div></div><span>Приём платежей на сайте \"стандарт\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Корзина\"'><img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/cart.png"), "html", null, true);
        echo "\" alt='Модуль \"Корзина\"' title='Модуль \"Корзина\"'><div></div><span>Модуль \"Корзина\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Производители\"'><img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Модуль \"Производители\"' title='Модуль \"Производители\"'><div></div><span>Модуль \"Производители\"</span></a>
                            </div>
                            <div id=\"internet-magazin_individualniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>
                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\" title=\"Каталог товаров\"><div></div><span>Каталог товаров</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'> <div></div><span>Модуль \"Купить в 1 клик\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Приём платежей на сайте \"стандарт\"' title='Приём платежей на сайте \"стандарт\"'><div></div><span>Приём платежей на сайте \"стандарт\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Корзина\"'><img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/cart.png"), "html", null, true);
        echo "\" alt='Модуль \"Корзина\"' title='Модуль \"Корзина\"'><div></div><span>Модуль \"Корзина\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Производители\"'><img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Модуль \"Производители\"' title='Модуль \"Производители\"'><div></div><span>Модуль \"Производители\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль акций, хитов продаж'><img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/hit.png"), "html", null, true);
        echo "\" alt='Модуль акций, хитов продаж' title='Модуль акций, хитов продаж'><div></div><span>Модуль акций, хитов продаж</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими материалами</div>
                                <div><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)</div>
                                <div><img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского номера (по желанию бесплатно)</div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого:  <span id=\"internet-magazin_cena\" name=\"cena\"></span> руб.</p>
                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\" id=\"internet-magazin_checkbox_skidka\" checked><label for=\"internet-magazin_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span id=\"internet-magazin_skidka\" name=\"skidka\"></span>%</label></div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 452
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
                <!--~~~~~~~~~~~~~~~~~corporate website calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"korparativniy-site\" action=\"\" method=\"post\">

                        <img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\" title=\"Дизайн сайта\"><p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\" id=\"korparativniy-site_gotoviy\" checked=\"\"><label for=\"korparativniy-site_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\" id=\"korparativniy-site_individualniy\"><label for=\"korparativniy-site_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\" id=\"korparativniy-site_razrabotka_logotipa\"><label for=\"korparativniy-site_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\" id=\"korparativniy-site_razrabotka_bannerov\"><label for=\"korparativniy-site_razrabotka_bannerov\">Разработка баннеров для слайдшоу</label><input type=\"text\" id=\"korparativniy-site_k\" value=\"0\"> шт.</div>
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
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/kompl_logo.png"), "html", null, true);
        echo "\" alt=\"Комплектация\" title=\"Комплектация\"><p class=\"zagolovok_h2\">Комплектация</p>

                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"standart\" id=\"korparativniy-site_standart\" checked><label for=\"korparativniy-site_standart\">Стандарт</label></div>
                            <div class=\"item\">
                                <h3>Стандарт</h3>
                                <span class=\"price\">Цена: 0 руб.</span>
                                <div style=\"clear: right;\"></div>
                                <p class=\"opisanie\">

                                </p>
                                <p class=\"opisanie\">

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"rashireniy\" id=\"korparativniy-site_rashireniy\" checked><label for=\"korparativniy-site_rashireniy\">Расширенный</label></div>
                            <div class=\"item\">
                                <h3>Расширенный</h3>
                                <span class=\"price\">Цена: 0 руб.</span>
                                <div style=\"clear: right;\"></div>
                                <p class=\"opisanie\">

                                </p>
                                <p class=\"opisanie\">

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"copyright\" id=\"korparativniy-site_copyright\"><label for=\"korparativniy-site_copyright\">Копирайтинг</label><input type=\"text\" id=\"korparativniy-site_k2\" value=\"0\"> страниц</div>
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

                        <input type=\"checkbox\" id=\"korparativniy-site_checkbox_spoyler\"><label for=\"korparativniy-site_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"korparativniy-site_gotoviy_standart_dop\">
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\" title=\"Фотогалерея\"><div></div><span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Многоуровневое меню\"><img src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/menu.png"), "html", null, true);
        echo "\" alt=\"Многоуровневое меню\" title=\"Многоуровневое меню\"><div></div><span>Многоуровневое меню</span></a>
                            </div>
                            <div id=\"korparativniy-site_individualniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>
                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\" title=\"Форма обратной связи\"><div></div><span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\" title=\"Новостная лента\"><div></div><span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\" title=\"Фотогалерея\"><div></div><span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими материалами</div>
                                <div><img src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)</div>
                                <div><img src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского номера (по желанию бесплатно)</div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого:  <span id=\"korparativniy-site_cena\" name=\"cena\"></span> руб.</p>
                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\" id=\"korparativniy-site_checkbox_skidka\" checked><label for=\"korparativniy-site_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span id=\"korparativniy-site_skidka\" name=\"skidka\"></span>%</label></div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/phone_ico.png"), "html", null, true);
        echo "\" class=\"phone_img\"/>
                            <input type=\"text\" name=\"name\" placeholder=\"Ваше имя\" required>
                            <br />
                            <input type=\"email\" name=\"email\"  placeholder=\"Электронная почта\" required>
                            <br />
                            <input type=\"tel\" name=\"tel\"  placeholder=\"Телефон\" required>
                            <br />
                            <input class=\"btn-podrobnee\" type=\"submit\" name=\"submit\" id=\"submit\" value=\"Заказать прямо сейчас\">
                        </div>
                    </form>
                </div>
                <!--~~~~~~~~~~~~~~~~~/corporate website calc~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~landing-page calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"landing-page\" action=\"\" method=\"post\">

                        <img src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\" title=\"Дизайн сайта\"><p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\" id=\"landing-page_gotoviy\" checked><label for=\"landing-page_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\" id=\"landing-page_individualniy\"><label for=\"landing-page_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\" id=\"landing-page_razrabotka_logotipa\"><label for=\"landing-page_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\" id=\"landing-page_razrabotka_bannerov\"><label for=\"landing-page_razrabotka_bannerov\">Разработка баннеров для слайдшоу</label><input type=\"text\" id=\"landing-page_k\" value=\"0\"> шт.</div>
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

                        <input type=\"checkbox\" id=\"landing-page_checkbox_spoyler\"><label for=\"landing-page_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"landing-page_gotoviy_dop\">
                                <p class=\"text\">Выбор из 40 различных авторских дизайнов</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма сбора контактов (лидов)\"><img src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма сбора контактов (лидов)\" title=\"Форма сбора контактов (лидов)\"><div></div><span>Форма сбора контактов (лидов)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Продающий копирайтинг для лендинга\"><img src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Продающий копирайтинг для лендинга\" title=\"Продающий копирайтинг для лендинга\"><div></div><span>Продающий копирайтинг для лендинга</span></a>
                            </div>
                            <div id=\"landing-page_individualniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>
                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Схема проезда Yandex (или Google)\" title=\"Схема проезда Yandex (или Google)\"><div></div><span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма сбора контактов (лидов)\"><img src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма сбора контактов (лидов)\" title=\"Форма сбора контактов (лидов)\"><div></div><span>Форма сбора контактов (лидов)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Продающий копирайтинг для лендинга\"><img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Продающий копирайтинг для лендинга\" title=\"Продающий копирайтинг для лендинга\"><div></div><span>Продающий копирайтинг для лендинга</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Онлайн-консультант\"><img src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Онлайн-консультант\" title=\"Онлайн-консультант\"><div></div><span>Онлайн-консультант</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими материалами</div>
                                <div><img src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)</div>
                                <div><img src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского номера (по желанию бесплатно)</div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого:  <span id=\"landing-page_cena\" name=\"cena\"></span> руб.</p>
                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\" id=\"landing-page_checkbox_skidka\" checked><label for=\"landing-page_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span id=\"landing-page_skidka\" name=\"skidka\"></span>%</label></div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 716
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
                <!--~~~~~~~~~~~~~~~~~/landing-page calc~~~~~~~~~~~~~~~~~-->
            </div>
        </div>

        <!--~~~~~~~~~~~~~~~~~/calculate~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 734
    public function block_domain($context, array $blocks = array())
    {
        // line 735
        echo "        <!--~~~~~~~~~~~~~~~~~domain~~~~~~~~~~~~~~~~~-->
        <div class=\"domen\">
            <h2>У каждого сайта должно быть имя!</h2>
            <p class=\"h2-dop\">Придумайте его прямо сейчас и проверьте на занятость!</p>
            <div class=\"korpus\">
                <div class=\"container\">
                    <form>
                        <input type=\"text\" placeholder=\"КОЛОР-НЬЮ.РФ\" required>
                        <p class=\"result\">Свободен</p>
                        <input type=\"submit\" class=\"submit\" name=\"submit\" value=\"Проверить\">
                        <div class=\"svoboden\">Это имя свободно! Зарезервируйте его, пока не занял кто-то другой!<br/>Получите доменное имя colornew.ru бесплатно при заказе сайта!<a href=\"#\" title=\"Заказать доменное имя\" class=\"btn-podrobnee\">Заказать</a></div>
                        <div class=\"zanyat\"></div>
                    </form>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/domain~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 754
    public function block_homeimage($context, array $blocks = array())
    {
        // line 755
        echo "    <!--~~~~~~~~~~~~~~~~~home_image~~~~~~~~~~~~~~~~~-->
    <div class=\"home_image container\">
        <div><p>Сайт-визитка<span>Быстрый старт бизнеса в Интернете</span><span>от <span>4 995</span> руб.</span></p><a href=\"#\" title=\"Сайт-визитка\" class=\"btn-podrobnee\">Получить консультацию</a></div>
        <div><p>Landing Page<span>Поток клиентов гарантирован</span><span>от <span>9 900</span> руб.</span></p><a href=\"#\" title=\"Landing Page\" class=\"btn-podrobnee\">Получить консультацию</a></div>
        <div><p>Корпоративный сайт<span>Представьте свою компанию всему миру</span><span>от <span>21 910</span> руб.</span></p><a href=\"#\" title=\"Корпоративный сайт\" class=\"btn-podrobnee\">Получить консультацию</a></div>
        <div><p>Интернет-магазин<span>Онлайн продажи доступны</span><span>от <span>9 995</span> руб.</span></p><a href=\"#\" title=\"Интернет-магазин\" class=\"btn-podrobnee\">Получить консультацию</a></div>
    </div>
\t";
    }

    // line 764
    public function block_blog($context, array $blocks = array())
    {
        // line 765
        echo "        <!--~~~~~~~~~~~~~~~~~blog~~~~~~~~~~~~~~~~~-->
        <div class=\"blog container\">
            <h2>Наш блог</h2>
            <p class=\"h2-dop\">Также вы можете прочитать <a href=\"#\" title=\"Прочитать все статьи\">все статьи</a></p>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div>
                        <img src=\"";
        // line 772
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_654abaa")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/blog/skype.jpg"), null))), "html", null, true);
        echo "\" class=\"blog_img\"/>
                        <p class=\"blog_title\">Удобство удаленного общения</p>
                        <p class=\"blog_description\">Современные технологии позволяют общаться на расстоянии. Это очень удобно и в нашей сфере. Данная статья рассказывает…</p>
                        <img src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/time.png"), "html", null, true);
        echo "\" class=\"time_ico\"/><span class=\"blog_date\"> 30.03.2015</span>
                        <a href=\"#\">Подробнее</a>
                    </div>
                </div>
                <div class=\"col-md-4 visible-lg visible-md\">
                    <div>
                        <img src=\"";
        // line 781
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_654abaa")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/blog/skype.jpg"), null))), "html", null, true);
        echo "\" class=\"blog_img\"/>
                        <p class=\"blog_title\">Удобство удаленного общения</p>
                        <p class=\"blog_description\">Современные технологии позволяют общаться на расстоянии. Это очень удобно и в нашей сфере. Данная статья рассказывает…</p>
                        <img src=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/time.png"), "html", null, true);
        echo "\" class=\"time_ico\"/><span class=\"blog_date\"> 30.03.2015</span>
                        <a href=\"#\">Подробнее</a>
                    </div>
                </div>
                <div class=\"col-md-4 visible-lg visible-md\">
                    <div>
                        <img src=\"";
        // line 790
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : $this->getContext($context, "assetic")), "use_controller", array(), "array")) ? ($this->env->getExtension('routing')->getPath("_assetic_654abaa")) : ($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('assetic')->getFilterInvoker('jpegoptim')->invoke("assets/img/blog/skype.jpg"), null))), "html", null, true);
        echo "\" class=\"blog_img\"/>
                        <p class=\"blog_title\">Удобство удаленного общения</p>
                        <p class=\"blog_description\">Современные технологии позволяют общаться на расстоянии. Это очень удобно и в нашей сфере. Данная статья рассказывает…</p>
                        <img src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/time.png"), "html", null, true);
        echo "\" class=\"time_ico\"/><span class=\"blog_date\"> 30.03.2015</span>
                        <a href=\"#\">Подробнее</a>
                    </div>
                </div>

            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/blog~~~~~~~~~~~~~~~~~-->
    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1331 => 793,  1325 => 790,  1316 => 784,  1310 => 781,  1301 => 775,  1295 => 772,  1286 => 765,  1283 => 764,  1272 => 755,  1269 => 754,  1248 => 735,  1245 => 734,  1224 => 716,  1220 => 715,  1216 => 714,  1205 => 706,  1201 => 705,  1197 => 704,  1193 => 703,  1189 => 702,  1185 => 701,  1177 => 696,  1173 => 695,  1169 => 694,  1165 => 693,  1157 => 688,  1153 => 687,  1149 => 686,  1083 => 623,  1064 => 607,  1060 => 606,  1056 => 605,  1045 => 597,  1041 => 596,  1037 => 595,  1033 => 594,  1029 => 593,  1025 => 592,  1017 => 587,  1013 => 586,  1009 => 585,  1005 => 584,  997 => 579,  993 => 578,  989 => 577,  985 => 576,  981 => 575,  929 => 526,  868 => 468,  849 => 452,  845 => 451,  841 => 450,  830 => 442,  826 => 441,  822 => 440,  818 => 439,  814 => 438,  810 => 437,  802 => 432,  798 => 431,  794 => 430,  790 => 429,  786 => 428,  782 => 427,  778 => 426,  774 => 425,  770 => 424,  762 => 419,  758 => 418,  754 => 417,  750 => 416,  746 => 415,  742 => 414,  738 => 413,  734 => 412,  728 => 409,  724 => 408,  720 => 407,  716 => 406,  712 => 405,  708 => 404,  655 => 354,  594 => 296,  574 => 279,  570 => 278,  566 => 277,  555 => 269,  551 => 268,  547 => 267,  543 => 266,  539 => 265,  535 => 264,  527 => 259,  523 => 258,  519 => 257,  515 => 256,  511 => 255,  503 => 250,  499 => 249,  495 => 248,  491 => 247,  487 => 246,  480 => 242,  476 => 241,  472 => 240,  468 => 239,  461 => 235,  394 => 171,  333 => 113,  319 => 101,  316 => 100,  304 => 93,  297 => 91,  290 => 89,  283 => 87,  276 => 85,  269 => 83,  262 => 81,  255 => 79,  248 => 77,  241 => 75,  234 => 73,  227 => 71,  220 => 69,  213 => 67,  206 => 65,  199 => 63,  192 => 61,  185 => 59,  178 => 57,  171 => 55,  164 => 53,  157 => 51,  150 => 49,  143 => 47,  136 => 45,  129 => 43,  122 => 38,  119 => 37,  85 => 6,  82 => 5,  79 => 4,  73 => 802,  71 => 764,  68 => 763,  66 => 754,  63 => 753,  61 => 734,  58 => 733,  56 => 100,  53 => 99,  51 => 37,  48 => 36,  45 => 4,  42 => 3,  11 => 2,);
    }
}
