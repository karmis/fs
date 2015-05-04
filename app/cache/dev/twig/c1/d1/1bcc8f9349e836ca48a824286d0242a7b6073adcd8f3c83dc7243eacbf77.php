<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_c1d11bcc8f9349e836ca48a824286d0242a7b6073adcd8f3c83dc7243eacbf77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:index.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('banner', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('portfolio', $context, $blocks);
        // line 284
        echo "
    ";
        // line 285
        $this->displayBlock('calculate', $context, $blocks);
        // line 1403
        echo "
    ";
        // line 1404
        $this->displayBlock('domain', $context, $blocks);
        // line 1431
        echo "
    ";
        // line 1432
        $this->displayBlock('homeimage', $context, $blocks);
        // line 1445
        echo "    <!--~~~~~~~~~~~~~~~~~/home_image~~~~~~~~~~~~~~~~~-->
    ";
        // line 1446
        $this->displayBlock('blog', $context, $blocks);
        // line 1451
        echo "    <!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->

";
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
        // line 4
        echo "        <!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
        <div class=\"banner banner_home banner_big\"
             style=\"background: url(";
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

    // line 45
    public function block_portfolio($context, array $blocks = array())
    {
        // line 46
        echo "        <!--~~~~~~~~~~~~~~~~~portfolio~~~~~~~~~~~~~~~~~-->
        <div class=\"portfolio container\">
            <h2>Портфолио<span class=\"s\">s</span></h2>
            <ul class=\"bxslider\">

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://angarsk-kedr.ru/\"
                       title='Пиломатериалы \"Ангарск-Кедр\"'><img
                                src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/angarsk-kedr/angarsk-kedr.png"), "html", null, true);
        echo "\"
                                alt='Пиломатериалы \"Ангарск-Кедр\"' title='Пиломатериалы \"Ангарск-Кедр\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/angarsk-kedr/angarsk-kedr_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://arab-new.ru/\"
                       title='Новостной портал \"ArabNew\"'><img
                                src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/arab-new/arab-new.png"), "html", null, true);
        echo "\"
                                alt='Новостной портал \"ArabNew\"' title='Новостной портал \"ArabNew\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/arab-new/arab-new_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://astreya-konsalting.ru/\"
                       title='Консалтинговый центр \"Астрея\"'><img
                                src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/astreya/astreya.png"), "html", null, true);
        echo "\"
                                alt='Консалтинговый центр \"Астрея\"' title='Консалтинговый центр \"Астрея\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/astreya/astreya_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://ateza.ru/\"
                       title='Туристический портал \"Атеза\"'><img
                                src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ateza/ateza.png"), "html", null, true);
        echo "\"
                                alt='Туристический портал \"Атеза\"' title='Туристический портал \"Атеза\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ateza/ateza_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://color.beatsmagaz.ru/\"
                       title='Интернет-магазин наушников \"Beats\"'><img
                                src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/beats/beats.png"), "html", null, true);
        echo "\"
                                alt='Интернет-магазин наушников \"Beats\"' title='Интернет-магазин наушников \"Beats\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/beats/beats_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"#\" title='Свадебные платья'><img
                                src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/dreambride/dreambride.png"), "html", null, true);
        echo "\"
                                alt='Свадебные платья' title='Свадебные платья'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/dreambride/dreambride_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://eco-korma.ru/\" title='Эко-корма для животных'><img
                                src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/eco-korma/eco-korma.png"), "html", null, true);
        echo "\"
                                alt='Эко-корма для животных' title='Эко-корма для животных'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/eco-korma/eco-korma_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://vladimir.egoza33.ru/\"
                       title='Мобильная студия красоты \"EgoZa\"'><img
                                src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/egoza/egoza.png"), "html", null, true);
        echo "\"
                                alt='Мобильная студия красоты \"EgoZa\"' title='Мобильная студия красоты \"EgoZa\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/egoza/egoza_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://fotosoup.ru/\" title='Продажа фотообоев'><img
                                src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/fotosoup/fotosoup.png"), "html", null, true);
        echo "\" alt='Продажа фотообоев'
                                title='Продажа фотообоев'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/fotosoup/fotosoup_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"\" title='Интернет-магазин \"ГигМебели\"'><img
                                src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/gigmebeli/gigmebeli.png"), "html", null, true);
        echo "\"
                                alt='Интернет-магазин \"ГигМебели\"' title='Интернет-магазин \"ГигМебели\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/gigmebeli/gigmebeli_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://www.globalcircus.com/\" title='Авторский цирк'><img
                                src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/globalcircus/globalcircus.png"), "html", null, true);
        echo "\"
                                alt='Авторский цирк' title='Авторский цирк'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/globalcircus/globalcircus_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://hlv-vladimir.colornew.ru/\"
                       title='Рекламное агенство \"Халява\"'><img
                                src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/halyava/halyava.png"), "html", null, true);
        echo "\"
                                alt='Рекламное агенство \"Халява\"' title='Рекламное агенство \"Халява\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/halyava/halyava_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://igrazooma.ru/\" title='Умные игры \"ИграЗума\"'><img
                                src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/igrazooma/igrazooma.png"), "html", null, true);
        echo "\"
                                alt='Умные игры \"ИграЗума\"' title='Умные игры \"ИграЗума\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/igrazooma/igrazooma_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://kitejtelecom.ru/\"
                       title='Интернет-провайдер \"Китеж Телеком\"'><img
                                src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/kitej/kitej.png"), "html", null, true);
        echo "\"
                                alt='Интернет-провайдер \"Китеж Телеком\"' title='Интернет-провайдер \"Китеж Телеком\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/kitej/kitej_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://lestnicev.ru/\"
                       title='Проектирование и изготовление лестниц'><img
                                src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/lestnicev/lestnicev.png"), "html", null, true);
        echo "\"
                                alt='Проектирование и изготовление лестниц'
                                title='Проектирование и изготовление лестниц'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/lestnicev/lestnicev_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://mebel-city.su/\"
                       title='Фабрика мягкой мебели \"Мебель-сити\"'><img
                                src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mebel-city/mebel-city.png"), "html", null, true);
        echo "\"
                                alt='Фабрика мягкой мебели \"Мебель-сити\"' title='Фабрика мягкой мебели \"Мебель-сити\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mebel-city/mebel-city_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://meshera-master.ru/\"
                       title='Строительство деревянных домов \"Мещёра Мастер\"'><img
                                src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/meshera-master/meshera-master.png"), "html", null, true);
        echo "\"
                                alt='Строительство деревянных домов \"Мещёра Мастер\"'
                                title='Строительство деревянных домов \"Мещёра Мастер\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/meshera-master/meshera-master_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://mishkioptom.ru/\"
                       title='Фабрика мягких игрушек \"Плюшевая сказка\"'><img
                                src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mishki/mishki.png"), "html", null, true);
        echo "\"
                                alt='Фабрика мягких игрушек \"Плюшевая сказка\"'
                                title='Фабрика мягких игрушек \"Плюшевая сказка\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/mishki/mishki_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://phosphor-russia.ru/\"
                       title='Магазин часов \"Phosphor\"'><img
                                src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/phosphor/phosphor.png"), "html", null, true);
        echo "\"
                                alt='Магазин часов Phosphor' title='Магазин часов \"Phosphor\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/phosphor/phosphor_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://xn---33-5cdab6a9beqekg8am4e.xn--p1ai/\"
                       title='Салон красоты \"Планета солнца\"'><img
                                src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/planetasolnca/planetasolnca.png"), "html", null, true);
        echo "\"
                                alt='Салон красоты \"Планета солнца\"' title='Салон красоты \"Планета солнца\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/planetasolnca/planetasolnca_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://printeria33.ru/\"
                       title='Ремонт офисной техники'><img
                                src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/printeria33/printeria33.png"), "html", null, true);
        echo "\"
                                alt='Ремонт офисной техники' title='Ремонт офисной техники'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/printeria33/printeria33_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://ros-lift.ru/\" title='ООО \"Рослифт\"'><img
                                src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ros-lift/ros-lift.png"), "html", null, true);
        echo "\" alt='ООО \"Рослифт\"'
                                title='ООО \"Рослифт\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/ros-lift/ros-lift_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://smrstroy.ru/\"
                       title='Строительная компания \"СМР-строй\"'><img
                                src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/smr/smr.png"), "html", null, true);
        echo "\"
                                alt='Строительная компания \"СМР-строй\"' title='Строительная компания \"СМР-строй\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/smr/smr_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://stroy-swyaz33.colornew.ru/\"
                       title='Аренда спецавтотехники \"Строй-связь\"'><img
                                src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/stroy-swyaz33/stroy-swyaz33.png"), "html", null, true);
        echo "\"
                                alt='Аренда спецавтотехники \"Строй-связь\"' title='Аренда спецавтотехники \"Строй-связь\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/stroy-swyaz33/stroy-swyaz33_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://vip-yurist.colornew.ru/\"
                       title='Юридическая компания \"VIP-юрист\"'><img
                                src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/vip-yurist/vip-yurist.png"), "html", null, true);
        echo "\"
                                alt='Юридическая компания \"VIP-юрист\"' title='Юридическая компания \"VIP-юрист\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/vip-yurist/vip-yurist_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

                <li><a class=\"withImage\" target=\"_blank\" href=\"http://yagoda33.ru/\" title='РПФ \"Ягода\"'><img
                                src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/yagoda/yagoda.png"), "html", null, true);
        echo "\" alt='РПФ \"Ягода\"'
                                title='РПФ \"Ягода\"'>

                        <div class=\"abc\"
                             style=\"background:url(";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/portfolio/yagoda/yagoda_h.png"), "html", null, true);
        echo ") center no-repeat;'\"></div>
                    </a></li>

            </ul>
        </div>
        <!--~~~~~~~~~~~~~~~~~/portfolio~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 285
    public function block_calculate($context, array $blocks = array())
    {
        // line 286
        echo "        <!--~~~~~~~~~~~~~~~~~calculate~~~~~~~~~~~~~~~~~-->
        <div class=\"calculate container\" id=\"calculate\">
            <div class=\"korpus\" id=\"korpus\">
                <h2>А сколько стоит сайт?</h2>
                <input type=\"radio\" name=\"odin\" checked=\"checked\" id=\"vkl1\"/><label for=\"vkl1\"><a class=\"tab\"
                                                                                                  title=\"Cайт-визитка\">САЙТ-ВИЗИТКА</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vkl2\"/><label for=\"vkl2\"><a class=\"tab\" title=\"Интернет-магазин\">ИНТЕРНЕТ-МАГАЗИН</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vkl3\"/><label for=\"vkl3\"><a class=\"tab\" title=\"Корпоративный сайт\">КОРПОРАТИВНЫЙ
                        САЙТ</a></label>
                <input type=\"radio\" name=\"odin\" id=\"vkl4\"/><label for=\"vkl4\"><a class=\"tab\" title=\"Landing-page\">LANDING-PAGE</a></label>
                <!--~~~~~~~~~~~~~~~~~business card site calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"site_vizitka\" bs-type='feedback' bs-action='";
        // line 298
        echo $this->env->getExtension('routing')->getPath("feed_calc_order");
        echo "'>
                        <input type=\"hidden\" name=\"site_type_name\" value=\"Сайт-визитка\"/>
                        <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\"
                             title=\"Дизайн сайта\">

                        <p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\"
                                                           id=\"site_vizitka_gotoviy\" checked><label
                                        for=\"site_vizitka_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\"
                                                           id=\"site_vizitka_individualniy\"><label
                                        for=\"site_vizitka_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\"
                                                              id=\"site_vizitka_razrabotka_logotipa\"><label
                                        for=\"site_vizitka_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\"
                                                              id=\"site_vizitka_razrabotka_bannerov\"><label
                                        for=\"site_vizitka_razrabotka_bannerov\">Разработка баннеров для
                                    слайдшоу</label><input type=\"text\" id=\"site_vizitka_k\" value=\"0\"> шт.
                            </div>
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
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/kompl_logo.png"), "html", null, true);
        echo "\" alt=\"Комплектация\"
                             title=\"Комплектация\">

                        <p class=\"zagolovok_h2\">Комплектация</p>

                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"mini\" id=\"site_vizitka_mini\"
                                                           checked><label for=\"site_vizitka_mini\">Мини</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"standart\"
                                                           id=\"site_vizitka_standart\"><label
                                        for=\"site_vizitka_standart\">Стандарт</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"rashirenniy\"
                                                           id=\"site_vizitka_rashirenniy\"><label
                                        for=\"site_vizitka_rashirenniy\">Расширенный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"copyright\"
                                                              id=\"site_vizitka_copyright\"><label
                                        for=\"site_vizitka_copyright\">Копирайтинг</label><input type=\"text\"
                                                                                               id=\"site_vizitka_k2\"
                                                                                               value=\"0\"> страниц
                            </div>
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

                        <input type=\"checkbox\" id=\"site_vizitka_checkbox_spoyler\"><label
                                for=\"site_vizitka_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в
                            предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"site_vizitka_gotoviy_mini_dop\">
                                <p class=\"text\">1 страница и 4 вкладки (можно расширить до 6)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                            </div>
                            <div id=\"site_vizitka_gotoviy_standart_dop\">
                                <p class=\"text\">7 полноценных разделов (можно расширить бесплатно)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img
                                            src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\"
                                            title=\"Фотогалерея\">

                                    <div></div>
                                    <span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                            </div>
                            <div id=\"site_vizitka_gotoviy_rashireniy_dop\">
                                <p class=\"text\">7 полноценных разделов (можно расширить бесплатно)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img
                                            src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\"
                                            title=\"Фотогалерея\">

                                    <div></div>
                                    <span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Адаптивный дизайн\"><img
                                            src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/adaptive.png"), "html", null, true);
        echo "\" alt=\"Адаптивный дизайн\"
                                            title=\"Адаптивный дизайн\">

                                    <div></div>
                                    <span>Адаптивный дизайн</span></a>
                            </div>
                            <div id=\"site_vizitka_individualniy_rashireniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>

                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img
                                            src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\"
                                            title=\"Фотогалерея\">

                                    <div></div>
                                    <span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Адаптивный дизайн\"><img
                                            src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/adaptive.png"), "html", null, true);
        echo "\" alt=\"Адаптивный дизайн\"
                                            title=\"Адаптивный дизайн\">

                                    <div></div>
                                    <span>Адаптивный дизайн</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими
                                    материалами
                                </div>
                                <div><img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)
                                </div>
                                <div><img src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского
                                    номера (по желанию бесплатно)
                                </div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого: <span id=\"site_vizitka_cena\" name=\"cena\"></span> руб.</p>

                            <div class=\"checkbox_skidka\">
                                <input type=\"checkbox\" name=\"checkbox_skidka\" id=\"site_vizitka_checkbox_skidka\" checked>
                                <label for=\"site_vizitka_checkbox_skidka\">
                                    СДЕЛАТЬ СКИДКУ 
                                    <span id=\"site_vizitka_skidka\" name=\"skidka\"></span>
                                    %
                                </label>
                            </div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/phone_ico.png"), "html", null, true);
        echo "\" class=\"phone_img\"/>
                            <input type=\"text\" name=\"name\" placeholder=\"Ваше имя\" required>
                            <br>
                            <input type=\"email\" name=\"email\" placeholder=\"Электронная почта\" required>
                            <br>
                            <input type=\"tel\" name=\"tel\" placeholder=\"Телефон\" required>
                            <br>
                            <input class=\"btn-podrobnee\" data-loading-text=\"Отправляется запрос\" type=\"submit\" name=\"submit\" id=\"submit\"
                                   value=\"Заказать прямо сейчас\">
                        </div>
                    </form>

                </div>
                <!--~~~~~~~~~~~~~~~~~/business card site calc~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~online shop calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"internet-magazin\" bs-type='feedback' bs-action='";
        // line 618
        echo $this->env->getExtension('routing')->getPath("feed_calc_order");
        echo "'>
                        <input type=\"hidden\" name=\"site_type_name\" value=\"Интернет-магазин\"/>
                        <img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\"
                             title=\"Дизайн сайта\">

                        <p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\"
                                                           id=\"internet-magazin_gotoviy\" checked><label
                                        for=\"internet-magazin_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\"
                                                           id=\"internet-magazin_individualniy\"><label
                                        for=\"internet-magazin_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\"
                                                              id=\"internet-magazin_razrabotka_logotipa\"><label
                                        for=\"internet-magazin_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\"
                                                              id=\"internet-magazin_razrabotka_bannerov\"><label
                                        for=\"internet-magazin_razrabotka_bannerov\">Разработка баннеров для
                                    слайдшоу</label><input type=\"text\" id=\"internet-magazin_k\" value=\"0\"> шт.
                            </div>
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
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/kompl_logo.png"), "html", null, true);
        echo "\" alt=\"Комплектация\"
                             title=\"Комплектация\">

                        <p class=\"zagolovok_h2\">Комплектация</p>


                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"katalog_bez_korzini\"
                                                           id=\"internet-magazin_katalog_bez_korzini\" checked><label
                                        for=\"internet-magazin_katalog_bez_korzini\">Каталог без корзины</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"katalog_s_korzinoy\"
                                                           id=\"internet-magazin_katalog_s_korzinoy\"><label
                                        for=\"internet-magazin_katalog_s_korzinoy\">Каталог с корзиной</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"copyright\"
                                                              id=\"internet-magazin_copyright\"><label
                                        for=\"internet-magazin_copyright\">Копирайтинг</label><input type=\"text\"
                                                                                                   id=\"internet-magazin_k2\"
                                                                                                   value=\"0\"> страниц
                            </div>
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

                        <input type=\"checkbox\" id=\"internet-magazin_checkbox_spoyler\"><label
                                for=\"internet-magazin_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в
                            предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"internet-magazin_gotoviy_katalog_bez_korzini_dop\">
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 776
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 782
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img
                                            src=\"";
        // line 789
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\"
                                            title=\"Каталог товаров\">

                                    <div></div>
                                    <span>Каталог товаров</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img
                                            src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'>

                                    <div></div>
                                    <span>Модуль \"Купить в 1 клик\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img
                                            src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\"
                                            alt='Приём платежей на сайте \"стандарт\"'
                                            title='Приём платежей на сайте \"стандарт\"'>

                                    <div></div>
                                    <span>Приём платежей на сайте \"стандарт\"</span></a>
                            </div>
                            <div id=\"internet-magazin_gotoviy_katalog_s_korzinoy_dop\">
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img
                                            src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\"
                                            title=\"Каталог товаров\">

                                    <div></div>
                                    <span>Каталог товаров</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img
                                            src=\"";
        // line 835
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'>

                                    <div></div>
                                    <span>Модуль \"Купить в 1 клик\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img
                                            src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\"
                                            alt='Приём платежей на сайте \"стандарт\"'
                                            title='Приём платежей на сайте \"стандарт\"'>

                                    <div></div>
                                    <span>Приём платежей на сайте \"стандарт\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Корзина\"'><img
                                            src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/cart.png"), "html", null, true);
        echo "\" alt='Модуль \"Корзина\"'
                                            title='Модуль \"Корзина\"'>

                                    <div></div>
                                    <span>Модуль \"Корзина\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Производители\"'><img
                                            src=\"";
        // line 854
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Модуль \"Производители\"'
                                            title='Модуль \"Производители\"'>

                                    <div></div>
                                    <span>Модуль \"Производители\"</span></a>
                            </div>
                            <div id=\"internet-magazin_individualniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>

                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Каталог товаров\"><img
                                            src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Каталог товаров\"
                                            title=\"Каталог товаров\">

                                    <div></div>
                                    <span>Каталог товаров</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Купить в 1 клик\"'> <img
                                            src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt='Модуль \"Купить в 1 клик\"' title='Модуль \"Купить в 1 клик\"'>

                                    <div></div>
                                    <span>Модуль \"Купить в 1 клик\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Приём платежей на сайте \"стандарт\"'><img
                                            src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\"
                                            alt='Приём платежей на сайте \"стандарт\"'
                                            title='Приём платежей на сайте \"стандарт\"'>

                                    <div></div>
                                    <span>Приём платежей на сайте \"стандарт\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Корзина\"'><img
                                            src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/cart.png"), "html", null, true);
        echo "\" alt='Модуль \"Корзина\"'
                                            title='Модуль \"Корзина\"'>

                                    <div></div>
                                    <span>Модуль \"Корзина\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль \"Производители\"'><img
                                            src=\"";
        // line 909
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/payment.png"), "html", null, true);
        echo "\" alt='Модуль \"Производители\"'
                                            title='Модуль \"Производители\"'>

                                    <div></div>
                                    <span>Модуль \"Производители\"</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title='Модуль акций, хитов продаж'><img
                                            src=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/hit.png"), "html", null, true);
        echo "\" alt='Модуль акций, хитов продаж'
                                            title='Модуль акций, хитов продаж'>

                                    <div></div>
                                    <span>Модуль акций, хитов продаж</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими
                                    материалами
                                </div>
                                <div><img src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)
                                </div>
                                <div><img src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 930
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 931
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 932
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского
                                    номера (по желанию бесплатно)
                                </div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого: <span id=\"internet-magazin_cena\" name=\"cena\"></span> руб.</p>

                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\"
                                                                id=\"internet-magazin_checkbox_skidka\" checked><label
                                        for=\"internet-magazin_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span
                                            id=\"internet-magazin_skidka\" name=\"skidka\"></span>%</label></div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 948
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/phone_ico.png"), "html", null, true);
        echo "\" class=\"phone_img\"/>
                            <input type=\"text\" name=\"name\" placeholder=\"Ваше имя\" required>
                            <br>
                            <input type=\"email\" name=\"email\" placeholder=\"Электронная почта\" required>
                            <br>
                            <input type=\"tel\" name=\"tel\" placeholder=\"Телефон\" required>
                            <br>
                            <input class=\"btn-podrobnee\" data-loading-text=\"Отправляется запрос\" type=\"submit\" name=\"submit\" id=\"submit\"
                                   value=\"Заказать прямо сейчас\">
                        </div>
                    </form>
                </div>
                <!--~~~~~~~~~~~~~~~~~/online shop calc~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~corporate website calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"korparativniy-site\" bs-type='feedback' bs-action='";
        // line 963
        echo $this->env->getExtension('routing')->getPath("feed_calc_order");
        echo "'>
                        <input type=\"hidden\" name=\"site_type_name\" value=\"Корпоративный сайт\"/>
                        <img src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\"
                             title=\"Дизайн сайта\">

                        <p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\"
                                                           id=\"korparativniy-site_gotoviy\" checked=\"\"><label
                                        for=\"korparativniy-site_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\"
                                                           id=\"korparativniy-site_individualniy\"><label
                                        for=\"korparativniy-site_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\"
                                                              id=\"korparativniy-site_razrabotka_logotipa\"><label
                                        for=\"korparativniy-site_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\"
                                                              id=\"korparativniy-site_razrabotka_bannerov\"><label
                                        for=\"korparativniy-site_razrabotka_bannerov\">Разработка баннеров для
                                    слайдшоу</label><input type=\"text\" id=\"korparativniy-site_k\" value=\"0\"> шт.
                            </div>
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
        // line 1044
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/kompl_logo.png"), "html", null, true);
        echo "\" alt=\"Комплектация\"
                             title=\"Комплектация\">

                        <p class=\"zagolovok_h2\">Комплектация</p>

                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"standart\"
                                                           id=\"korparativniy-site_standart\" checked><label
                                        for=\"korparativniy-site_standart\">Стандарт</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"kompl\" value=\"rashireniy\"
                                                           id=\"korparativniy-site_rashireniy\" checked><label
                                        for=\"korparativniy-site_rashireniy\">Расширенный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"copyright\"
                                                              id=\"korparativniy-site_copyright\"><label
                                        for=\"korparativniy-site_copyright\">Копирайтинг</label><input type=\"text\"
                                                                                                     id=\"korparativniy-site_k2\"
                                                                                                     value=\"0\"> страниц
                            </div>
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

                        <input type=\"checkbox\" id=\"korparativniy-site_checkbox_spoyler\"><label
                                for=\"korparativniy-site_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в
                            предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"korparativniy-site_gotoviy_standart_dop\">
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 1114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img
                                            src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\"
                                            title=\"Фотогалерея\">

                                    <div></div>
                                    <span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Многоуровневое меню\"><img
                                            src=\"";
        // line 1139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/menu.png"), "html", null, true);
        echo "\" alt=\"Многоуровневое меню\"
                                            title=\"Многоуровневое меню\">

                                    <div></div>
                                    <span>Многоуровневое меню</span></a>
                            </div>
                            <div id=\"korparativniy-site_individualniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>

                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма обратной связи\"><img
                                            src=\"";
        // line 1150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Форма обратной связи\"
                                            title=\"Форма обратной связи\">

                                    <div></div>
                                    <span>Форма обратной связи</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Новостная лента\"><img
                                            src=\"";
        // line 1156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/news.png"), "html", null, true);
        echo "\" alt=\"Новостная лента\"
                                            title=\"Новостная лента\">

                                    <div></div>
                                    <span>Новостная лента</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Фотогалерея\"><img
                                            src=\"";
        // line 1162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/photo.png"), "html", null, true);
        echo "\" alt=\"Фотогалерея\"
                                            title=\"Фотогалерея\">

                                    <div></div>
                                    <span>Фотогалерея</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 1168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 1178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими
                                    материалами
                                </div>
                                <div><img src=\"";
        // line 1181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)
                                </div>
                                <div><img src=\"";
        // line 1183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 1184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 1185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 1186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского
                                    номера (по желанию бесплатно)
                                </div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого: <span id=\"korparativniy-site_cena\" name=\"cena\"></span> руб.</p>

                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\"
                                                                id=\"korparativniy-site_checkbox_skidka\" checked><label
                                        for=\"korparativniy-site_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span
                                            id=\"korparativniy-site_skidka\" name=\"skidka\"></span>%</label></div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 1200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 1201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 1202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/phone_ico.png"), "html", null, true);
        echo "\" class=\"phone_img\"/>
                            <input type=\"text\" name=\"name\" placeholder=\"Ваше имя\" required>
                            <br/>
                            <input type=\"email\" name=\"email\" placeholder=\"Электронная почта\" required>
                            <br/>
                            <input type=\"tel\" name=\"tel\" placeholder=\"Телефон\" required>
                            <br/>
                            <input class=\"btn-podrobnee\" data-loading-text=\"Отправляется запрос\" type=\"submit\" name=\"submit\" id=\"submit\"
                                   value=\"Заказать прямо сейчас\">
                        </div>
                    </form>
                </div>
                <!--~~~~~~~~~~~~~~~~~/corporate website calc~~~~~~~~~~~~~~~~~-->
                <!--~~~~~~~~~~~~~~~~~landing-page calc~~~~~~~~~~~~~~~~~-->
                <div>
                    <form name=\"landing-page\" bs-type='feedback' bs-action='";
        // line 1217
        echo $this->env->getExtension('routing')->getPath("feed_calc_order");
        echo "'>
                        <input type=\"hidden\" name=\"site_type_name\" value=\"Landing-page\"/>
                        <img src=\"";
        // line 1219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/calc/dizayn_logo.png"), "html", null, true);
        echo "\" alt=\"Дизайн сайта\"
                             title=\"Дизайн сайта\">

                        <p class=\"zagolovok_h2\">Дизайн сайта</p>
                        <li>
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"gotoviy\"
                                                           id=\"landing-page_gotoviy\" checked><label
                                        for=\"landing-page_gotoviy\">Готовый</label></div>
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
                            <div class=\"calc_radio\"><input type=\"radio\" name=\"dizayn\" value=\"individualniy\"
                                                           id=\"landing-page_individualniy\"><label
                                        for=\"landing-page_individualniy\">Индивидуальный</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_logotipa\"
                                                              id=\"landing-page_razrabotka_logotipa\"><label
                                        for=\"landing-page_razrabotka_logotipa\">Разработка логотипа</label></div>
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
                            <div class=\"calc_checkbox\"><input type=\"checkbox\" name=\"razrabotka_bannerov\"
                                                              id=\"landing-page_razrabotka_bannerov\"><label
                                        for=\"landing-page_razrabotka_bannerov\">Разработка баннеров для
                                    слайдшоу</label><input type=\"text\" id=\"landing-page_k\" value=\"0\"> шт.
                            </div>
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

                        <input type=\"checkbox\" id=\"landing-page_checkbox_spoyler\"><label
                                for=\"landing-page_checkbox_spoyler\" class=\"zagolovok_h2\">Что входит в
                            предложение:</label>

                        <div id=\"spoyler\">
                            <div id=\"landing-page_gotoviy_dop\">
                                <p class=\"text\">Выбор из 40 различных авторских дизайнов</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 1306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма сбора контактов (лидов)\"><img
                                            src=\"";
        // line 1313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Форма сбора контактов (лидов)\" title=\"Форма сбора контактов (лидов)\">

                                    <div></div>
                                    <span>Форма сбора контактов (лидов)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Продающий копирайтинг для лендинга\"><img
                                            src=\"";
        // line 1319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Продающий копирайтинг для лендинга\"
                                            title=\"Продающий копирайтинг для лендинга\">

                                    <div></div>
                                    <span>Продающий копирайтинг для лендинга</span></a>
                            </div>
                            <div id=\"landing-page_individualniy_dop\">
                                <p class=\"text\">Авторский дизайн без использования шаблонов</p>

                                <p class=\"text\">Любой функционал (под любые даже самые безумные идеи)</p>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Схема проезда Yandex (или Google)\"><img
                                            src=\"";
        // line 1331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Схема проезда Yandex (или Google)\"
                                            title=\"Схема проезда Yandex (или Google)\">

                                    <div></div>
                                    <span>Схема проезда Yandex (или Google)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Форма сбора контактов (лидов)\"><img
                                            src=\"";
        // line 1338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Форма сбора контактов (лидов)\" title=\"Форма сбора контактов (лидов)\">

                                    <div></div>
                                    <span>Форма сбора контактов (лидов)</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Продающий копирайтинг для лендинга\"><img
                                            src=\"";
        // line 1344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\"
                                            alt=\"Продающий копирайтинг для лендинга\"
                                            title=\"Продающий копирайтинг для лендинга\">

                                    <div></div>
                                    <span>Продающий копирайтинг для лендинга</span></a>
                                <a href=\"#q1\" class=\"fancybox dop\" title=\"Онлайн-консультант\"><img
                                            src=\"";
        // line 1351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/dop/feedback.png"), "html", null, true);
        echo "\" alt=\"Онлайн-консультант\"
                                            title=\"Онлайн-консультант\">

                                    <div></div>
                                    <span>Онлайн-консультант</span></a>
                            </div>
                            <a class=\"vse_moduli\" href=\"\">Посмотреть все модули</a>

                            <div class=\"vsyo_vklucheno\">
                                <div><img src=\"";
        // line 1360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_001.png"), "html", null, true);
        echo "\">Первичное наполнение Вашими
                                    материалами
                                </div>
                                <div><img src=\"";
        // line 1363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_002.png"), "html", null, true);
        echo "\">Система управления сайтом (CMS)
                                </div>
                                <div><img src=\"";
        // line 1365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_003.png"), "html", null, true);
        echo "\">Домен</div>
                                <div><img src=\"";
        // line 1366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_004.png"), "html", null, true);
        echo "\">Хостин</div>
                                <div><img src=\"";
        // line 1367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_005.png"), "html", null, true);
        echo "\">Реакция в поисковых системах</div>
                                <div><img src=\"";
        // line 1368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/ico_006.png"), "html", null, true);
        echo "\">Подключение прямого городского
                                    номера (по желанию бесплатно)
                                </div>
                            </div>
                        </div>

                        <div class=\"forma_zakaza\">
                            <p id=\"itogo\">Итого: <span id=\"landing-page_cena\" name=\"cena\"></span> руб.</p>

                            <div class=\"checkbox_skidka\"><input type=\"checkbox\" name=\"checkbox_skidka\"
                                                                id=\"landing-page_checkbox_skidka\" checked><label
                                        for=\"landing-page_checkbox_skidka\">СДЕЛАТЬ СКИДКУ <span id=\"landing-page_skidka\"
                                                                                                name=\"skidka\"></span>%</label>
                            </div>
                            <p id=\"pri_zakaze_prodvigheniya\">при заказе продвижения</p>
                            <img src=\"";
        // line 1383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/name_ico.png"), "html", null, true);
        echo "\" class=\"vashe_imya_img\"/>
                            <img src=\"";
        // line 1384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/email_ico.png"), "html", null, true);
        echo "\" class=\"email_img\"/>
                            <img src=\"";
        // line 1385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/phone_ico.png"), "html", null, true);
        echo "\" class=\"phone_img\"/>
                            <input type=\"text\" name=\"name\" placeholder=\"Ваше имя\" required>
                            <br>
                            <input type=\"email\" name=\"email\" placeholder=\"Электронная почта\" required>
                            <br>
                            <input type=\"tel\" name=\"tel\" placeholder=\"Телефон\" required>
                            <br>
                            <input class=\"btn-podrobnee\" data-loading-text=\"Отправляется запрос\" type=\"submit\" name=\"submit\" id=\"submit\"
                                   value=\"Заказать прямо сейчас\">
                        </div>
                    </form>
                </div>
                <!--~~~~~~~~~~~~~~~~~/landing-page calc~~~~~~~~~~~~~~~~~-->
            </div>
        </div>

        <!--~~~~~~~~~~~~~~~~~/calculate~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 1404
    public function block_domain($context, array $blocks = array())
    {
        // line 1405
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

                        <div class=\"svoboden\">Это имя свободно! Зарезервируйте его, пока не занял кто-то другой!<br/>Получите
                            доменное имя colornew.ru бесплатно при заказе сайта!<a href=\"#\"
                                                                                   title=\"Заказать доменное имя\"
                                                                                   class=\"btn-podrobnee\">Заказать</a>
                        </div>
                        <div class=\"zanyat\"></div>
                    </form>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~/domain~~~~~~~~~~~~~~~~~-->
    ";
    }

    // line 1432
    public function block_homeimage($context, array $blocks = array())
    {
        // line 1433
        echo "        <!--~~~~~~~~~~~~~~~~~home_image~~~~~~~~~~~~~~~~~-->
        <div class=\"home_image container\">
            <div><p>Сайт-визитка<span>Быстрый старт бизнеса в Интернете</span><span>от <span>4 995</span> руб.</span>
                </p><a href=\"#\" title=\"Сайт-визитка\" class=\"btn-podrobnee\">Получить консультацию</a></div>
            <div><p>Landing Page<span>Поток клиентов гарантирован</span><span>от <span>9 900</span> руб.</span></p><a
                        href=\"#\" title=\"Landing Page\" class=\"btn-podrobnee\">Получить консультацию</a></div>
            <div><p>Корпоративный сайт<span>Представьте свою компанию всему миру</span><span>от <span>21 910</span> руб.</span>
                </p><a href=\"#\" title=\"Корпоративный сайт\" class=\"btn-podrobnee\">Получить консультацию</a></div>
            <div><p>Интернет-магазин<span>Онлайн продажи доступны</span><span>от <span>9 995</span> руб.</span></p><a
                        href=\"#\" title=\"Интернет-магазин\" class=\"btn-podrobnee\">Получить консультацию</a></div>
        </div>
    ";
    }

    // line 1446
    public function block_blog($context, array $blocks = array())
    {
        // line 1447
        echo "        <!--~~~~~~~~~~~~~~~~~blog~~~~~~~~~~~~~~~~~-->
        ";
        // line 1448
        echo twig_include($this->env, $context, "AppBundle:Article:preview_list.html.twig", array("entities" => (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))));
        echo "
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
        return array (  2002 => 1448,  1999 => 1447,  1996 => 1446,  1981 => 1433,  1978 => 1432,  1949 => 1405,  1946 => 1404,  1924 => 1385,  1920 => 1384,  1916 => 1383,  1898 => 1368,  1894 => 1367,  1890 => 1366,  1886 => 1365,  1881 => 1363,  1875 => 1360,  1863 => 1351,  1853 => 1344,  1844 => 1338,  1834 => 1331,  1819 => 1319,  1810 => 1313,  1800 => 1306,  1710 => 1219,  1705 => 1217,  1687 => 1202,  1683 => 1201,  1679 => 1200,  1662 => 1186,  1658 => 1185,  1654 => 1184,  1650 => 1183,  1645 => 1181,  1639 => 1178,  1626 => 1168,  1617 => 1162,  1608 => 1156,  1599 => 1150,  1585 => 1139,  1575 => 1132,  1566 => 1126,  1557 => 1120,  1548 => 1114,  1475 => 1044,  1393 => 965,  1388 => 963,  1370 => 948,  1366 => 947,  1362 => 946,  1345 => 932,  1341 => 931,  1337 => 930,  1333 => 929,  1328 => 927,  1322 => 924,  1310 => 915,  1301 => 909,  1292 => 903,  1282 => 896,  1273 => 890,  1264 => 884,  1254 => 877,  1245 => 871,  1236 => 865,  1222 => 854,  1213 => 848,  1203 => 841,  1194 => 835,  1185 => 829,  1175 => 822,  1166 => 816,  1157 => 810,  1145 => 801,  1136 => 795,  1127 => 789,  1117 => 782,  1108 => 776,  1099 => 770,  1025 => 699,  943 => 620,  938 => 618,  919 => 602,  915 => 601,  911 => 600,  890 => 582,  886 => 581,  882 => 580,  878 => 579,  873 => 577,  867 => 574,  855 => 565,  845 => 558,  836 => 552,  827 => 546,  818 => 540,  804 => 529,  794 => 522,  785 => 516,  776 => 510,  767 => 504,  754 => 494,  745 => 488,  736 => 482,  727 => 476,  715 => 467,  624 => 379,  542 => 300,  537 => 298,  523 => 286,  520 => 285,  509 => 277,  502 => 273,  495 => 269,  488 => 265,  480 => 260,  473 => 256,  465 => 251,  458 => 247,  450 => 242,  443 => 238,  436 => 234,  429 => 230,  421 => 225,  414 => 221,  406 => 216,  399 => 212,  391 => 207,  383 => 202,  375 => 197,  367 => 192,  359 => 187,  352 => 183,  344 => 178,  336 => 173,  328 => 168,  321 => 164,  313 => 159,  306 => 155,  299 => 151,  292 => 147,  284 => 142,  277 => 138,  270 => 134,  263 => 130,  256 => 126,  249 => 122,  242 => 118,  235 => 114,  227 => 109,  220 => 105,  213 => 101,  206 => 97,  199 => 93,  192 => 89,  184 => 84,  177 => 80,  169 => 75,  162 => 71,  154 => 66,  147 => 62,  139 => 57,  132 => 53,  123 => 46,  120 => 45,  78 => 6,  74 => 4,  71 => 3,  65 => 1451,  63 => 1446,  60 => 1445,  58 => 1432,  55 => 1431,  53 => 1404,  50 => 1403,  48 => 285,  45 => 284,  43 => 45,  40 => 44,  37 => 3,  34 => 2,  11 => 1,);
    }
}
