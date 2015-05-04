<?php

/* AppBundle:Default:gotovie.html.twig */
class __TwigTemplate_88455df74348602f8855edbd76da9d3d18af3c33c4569853baccd29f9cc1f9f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:gotovie.html.twig", 1);
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
        echo "        <style type=\"text/css\">
        .fancybox-wrap {
            /*width: 55% !important;*/
        }
        .fancybox-skin {
            padding: 0px !important;
        }
        </style>
        <!--~~~~~~~~~~~~~~~~~content~~~~~~~~~~~~~~~~~-->

        <div class=\"banner banner_empty\"> 
            <div class=\"banner_content\"></div>
        </div>
        <div class=\"tariffs container\" id='completedSites'>
            <div class=\"\">
                <div class=\"container\">
                    <!-- Module sites -->
                    <div class=\"tariffs container\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <ul class=\"list-unstyled left-menu-sites\"  role=\"tablist\">
                                    <li class=\"thead col-md-12\" style=\"color:#fff; margin-bottom: 0px;\">Бизнес-сайты</li>
                                    <li class=\"tbody col-md-12\" role=\"presentation\" style=\"border-left: 1px solid rgba(0,0,0,.1);border-right: 1px solid rgba(0,0,0,.1);border-bottom: 1px solid rgba(0,0,0,.2);height: 60px;cursor: pointer;margin-bottom: 0px; text-align: center;\">
                                        <a href=\"#buisnessMini\" style=\"border:none; line-height: 60px;\" data-toggle='tab'>Готовый(мини)</a>
                                    </li>
                                    <li class=\"tbody col-md-12\" role=\"presentation\" style=\"border-left: 1px solid rgba(0,0,0,.1);border-right: 1px solid rgba(0,0,0,.1);border-bottom: 1px solid rgba(0,0,0,.2);height: 60px;cursor: pointer;margin-bottom: 0px; text-align: center;\">
                                        <a href=\"#buisnessStandart\" style=\"border:none; line-height: 60px;\" data-toggle='tab'>Готовый(стандартный)</a>
                                    </li>
                                    <li class=\"tbody col-md-12\" role=\"presentation\" style=\"border-left: 1px solid rgba(0,0,0,.1);border-right: 1px solid rgba(0,0,0,.1);border-bottom: 1px solid rgba(0,0,0,.2);height: 60px;cursor: pointer;margin-bottom: 0px; text-align: center;\">
                                        <a href=\"#buisnessExtend\" style=\"border:none; line-height: 60px;\" data-toggle='tab'>Готовый(расширенный)</a>
                                    </li>
                                    <li class=\"tbody col-md-12\" role=\"presentation\" style=\"border-left: 1px solid rgba(0,0,0,.1);border-right: 1px solid rgba(0,0,0,.1);border-bottom: 1px solid rgba(0,0,0,.2);height: 60px;cursor: pointer;margin-bottom: 0px; text-align: center;\">
                                        <a href=\"#buisnessCorp\" style=\"border:none; line-height: 60px;\" data-toggle='tab'>Корпоративный</a>
                                    </li>
                                    <div class=\"row\">
                                        <div class=\"thead col-md-12\" style=\"margin-bottom: 0px;\">
                                            <li style=\"color:#fff;\">Интернет-магазин</li>
                                        </div>
                                    </div>
                                    <li class=\"tbody col-md-12\" role=\"presentation\" style=\"border-left: 1px solid rgba(0,0,0,.1);border-right: 1px solid rgba(0,0,0,.1);border-bottom: 1px solid rgba(0,0,0,.2);height: 60px;cursor: pointer;margin-bottom: 0px; text-align: center;\">
                                        <a href=\"#shopWithoutCart\" style=\"border:none; line-height: 60px;\" data-toggle='tab'>Каталог без корзины</a>
                                    </li>
                                    <li class=\"tbody col-md-12\" role=\"presentation\" style=\"border-left: 1px solid rgba(0,0,0,.1);border-right: 1px solid rgba(0,0,0,.1);border-bottom: 1px solid rgba(0,0,0,.2);height: 60px;cursor: pointer;margin-bottom: 0px; text-align: center;\">
                                        <a href=\"#shopWithCart\" style=\"border:none; line-height: 60px;\" data-toggle='tab'>Каталог с корзиной</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-9\">
                                <div class=\"tab-content\" style=\"margin-top: -42px;\">
                                    <div class=\"tab-pane fade in active\" id=\"buisnessMini\">
                                        <div class=\"description\">
                                            <h2 class=\"caption\">Сайт-визитка:Готовый(мини)</h2>
                                            <div class=\"content\">
                                                В готовом варианте – мы предлагаем Вам на выбор несколько вариантов готового дизайна сайта, из которых Вы сможете выбрать понравившийся. Выбранный вариант мы наполняем Вашими материалами и размещаем в сеть. Данный тип сайта подойдет Вам, если нужно в кратчайшее время запустить сайт компании с минимальными затратами на разработку если требования к дизайну не критичны!
                                            </div>
                                            <div class=\"images\">
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "' src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"buisnessStandart\">
                                        <div class=\"description\">
                                            <h2 class=\"caption\">Сайт-визитка:Готовый(стандартный)</h2>
                                            <div class=\"content\">
                                                В готовом варианте – мы предлагаем Вам на выбор несколько вариантов готового дизайна сайта, из которых Вы сможете выбрать понравившийся. Выбранный вариант мы наполняем Вашими материалами и размещаем в сеть. Данный тип сайта подойдет Вам, если нужно в кратчайшее время запустить сайт компании с минимальными затратами на разработку если требования к дизайну не критичны!
                                            </div>
                                            <div class=\"images\">
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                            </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"buisnessExtend\">
                                        <div class=\"description\">
                                            <h2 class=\"caption\">Сайт-визитка:Готовый(расширенный)</h2>
                                            <div class=\"content\">
                                                В готовом варианте – мы предлагаем Вам на выбор несколько вариантов готового дизайна сайта, из которых Вы сможете выбрать понравившийся. Выбранный вариант мы наполняем Вашими материалами и размещаем в сеть. Данный тип сайта подойдет Вам, если нужно в кратчайшее время запустить сайт компании с минимальными затратами на разработку если требования к дизайну не критичны!
                                            </div>
                                            <div class=\"images\">
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class='notpaginated' data-categories=\"\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-medium' src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-medium.jpg"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"buisnessCorp\">
                                        <section class=\"portfolioListing\" data-rel-list=\"app-master-list\">
                                            <nav>
                                                <ul class=\"portfolio-filters list-inline list-unstyled\">
                                                    <li><a class=\"sites-hashtags active\" data-category=\"Корпоративный\">#Все</a></li>
                                                    <li><a class=\"sites-hashtags\" data-category=\"Корпоративный, Корпоративный адаптивные сайты\">#Адаптивные сайты</a></li>
                                                    <li><a class=\"sites-hashtags\" data-category=\"Корпоративный, Корпоративный бизнес и финансы\">#Бизнес и финансы</a></li>
                                                </ul>
                                            </nav>
                                            <div class=\"portfolioCarrousel fn-portfolioCarrousel\" data-ajust-height=\"false\"></div>
                                            <div class=\"portfolioCarrousel_nav_wrapper\">
                                                <a href=\"#\" class=\"carrousel_prev page-button-disabled\" data-page=\"0\" style=\"float:left;\">
                                                <span class=\"caption\">
                                                <
                                                </span>
                                                </a>
                                                <div class=\"portfolioCarrousel_nav\"></div>
                                                <a href=\"#\" class=\"carrousel_next\" data-page=\"2\" style=\"float:left;\">
                                                <span class=\"caption\">
                                                >
                                                </span>
                                                </a>
                                            </div>
                                            <div id=\"app-master-list\" class=\"hidden\" style=\"display: none;\">
                                                <article class='paginated' data-categories=\"Корпоративный, Корпоративный адаптивные сайты\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-mini' src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-mini.png"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                                <article class=\"paginated\" data-categories=\"Корпоративный, Корпоративный бизнес и финансы\">
                                                <div class=\"preview\">
                                                    <a href=\"#orderSite\" class=\"fancybox dop\" title=\"Заказать сайт\" src='";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-big.jpg"), "html", null, true);
        echo "'>
                                                    <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/zoom.png"), "html", null, true);
        echo "\" alt=\"Заказать сайт\" title=\"Заказать сайт\">
                                                    </a>
                                                </div>
                                                <a href=\"#\">
                                                <img class='site-prev-mini' src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/sample-mini.png"), "html", null, true);
        echo "\"/>
                                                </a>
                                                </article>
                                            </div>
                                        </section>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"shopWithoutCart\">
                                        <section class=\"portfolioListing\" data-rel-list=\"app-master-list\">
                                            <nav>
                                                <ul class=\"portfolio-filters list-inline list-unstyled\">
                                                    <li><a class=\"sites-hashtags active\">#Все</a></li>
                                                    <li><a class=\"sites-hashtags\" data-category=\"Адаптивные сайты\">#Адаптивные сайты</a></li>
                                                    <li><a class=\"sites-hashtags\" data-category=\"Бизнес и финансы\">#Бизнес и финансы</a></li>
                                                </ul>
                                            </nav>
                                            <div class=\"portfolioCarrousel fn-portfolioCarrousel\" data-ajust-height=\"false\"></div>

                                            <div class=\"portfolioCarrousel_nav_wrapper\">
                                                <a href=\"#\" class=\"carrousel_prev page-button-disabled\" data-page=\"0\" style=\"float:left;\">
                                                <span class=\"caption\">
                                                <
                                                </span>
                                                </a>
                                                <div class=\"portfolioCarrousel_nav\"></div>
                                                <a href=\"#\" class=\"carrousel_next\" data-page=\"2\" style=\"float:left;\">
                                                <span class=\"caption\">
                                                >
                                                </span>
                                                </a>
                                            </div>
                                            <div id=\"app-master-list\" class=\"hidden\" style=\"display: none;\">
                                            </div>
                                        </section>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"shopWithCart\">
                                        <section class=\"portfolioListing\" data-rel-list=\"app-master-list\">
                                            <nav>
                                                <ul class=\"portfolio-filters list-inline list-unstyled\">
                                                    <li><a class=\"sites-hashtags active\">#Все</a></li>
                                                    <li><a class=\"sites-hashtags\" data-category=\"Адаптивные сайты\">#Адаптивные сайты</a></li>
                                                    <li><a class=\"sites-hashtags\" data-category=\"Бизнес и финансы\">#Бизнес и финансы</a></li>
                                                </ul>
                                            </nav>
                                            <div class=\"portfolioCarrousel fn-portfolioCarrousel\" data-ajust-height=\"false\"></div>

                                            <div class=\"portfolioCarrousel_nav_wrapper\">
                                                <a href=\"#\" class=\"carrousel_prev page-button-disabled\" data-page=\"0\" style=\"float:left;\">
                                                <span class=\"caption\">
                                                <
                                                </span>
                                                </a>
                                                <div class=\"portfolioCarrousel_nav\"></div>
                                                <a href=\"#\" class=\"carrousel_next\" data-page=\"2\" style=\"float:left;\">
                                                <span class=\"caption\">
                                                >
                                                </span>
                                                </a>
                                            </div>
                                            <div id=\"app-master-list\" class=\"hidden\" style=\"display: none;\">
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end sites -->
                </div>
            </div>
        </div>

        <div id=\"orderSite\" style=\"display: none;\">
            <div id=\"screen-wrapper\">
                <img src=\"img/sample-big.jpg\" alt=\"\" id=\"activeNowSiteItem\" class=\"img-responsive\" />
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:gotovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 304,  506 => 300,  502 => 299,  494 => 294,  487 => 290,  483 => 289,  448 => 257,  441 => 253,  437 => 252,  429 => 247,  422 => 243,  418 => 242,  410 => 237,  403 => 233,  399 => 232,  391 => 227,  384 => 223,  380 => 222,  372 => 217,  365 => 213,  361 => 212,  353 => 207,  346 => 203,  342 => 202,  323 => 186,  316 => 182,  312 => 181,  304 => 176,  297 => 172,  293 => 171,  285 => 166,  278 => 162,  274 => 161,  266 => 156,  259 => 152,  255 => 151,  247 => 146,  240 => 142,  236 => 141,  228 => 136,  221 => 132,  217 => 131,  199 => 116,  192 => 112,  188 => 111,  180 => 106,  173 => 102,  169 => 101,  161 => 96,  154 => 92,  150 => 91,  142 => 86,  135 => 82,  131 => 81,  123 => 76,  116 => 72,  112 => 71,  104 => 66,  97 => 62,  91 => 61,  31 => 3,  28 => 2,  11 => 1,);
    }
}
