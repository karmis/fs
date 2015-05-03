<?php

/* AppBundle:Default:gotovie.html.twig */
class __TwigTemplate_88455df74348602f8855edbd76da9d3d18af3c33c4569853baccd29f9cc1f9f1 extends Twig_Template
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
        return array (  521 => 304,  514 => 300,  510 => 299,  502 => 294,  495 => 290,  491 => 289,  456 => 257,  449 => 253,  445 => 252,  437 => 247,  430 => 243,  426 => 242,  418 => 237,  411 => 233,  407 => 232,  399 => 227,  392 => 223,  388 => 222,  380 => 217,  373 => 213,  369 => 212,  361 => 207,  354 => 203,  350 => 202,  331 => 186,  324 => 182,  320 => 181,  312 => 176,  305 => 172,  301 => 171,  293 => 166,  286 => 162,  282 => 161,  274 => 156,  267 => 152,  263 => 151,  255 => 146,  248 => 142,  244 => 141,  236 => 136,  229 => 132,  225 => 131,  207 => 116,  200 => 112,  196 => 111,  188 => 106,  181 => 102,  177 => 101,  169 => 96,  162 => 92,  158 => 91,  150 => 86,  143 => 82,  139 => 81,  131 => 76,  124 => 72,  120 => 71,  112 => 66,  105 => 62,  99 => 61,  39 => 3,  36 => 2,  11 => 1,);
    }
}
