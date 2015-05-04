<?php

/* AppBundle:Default:installments.html.twig */
class __TwigTemplate_f25be425d55dc52f1d07c6920f93551f9da324450fb803bfb0d6f5e155a4c1d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "AppBundle:Default:installments.html.twig", 1);
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
<!--~~~~~~~~~~~~~~~~~banner~~~~~~~~~~~~~~~~~-->
<div class=\"banner banner_site-in-installments banner_big\">
    <div class=\"container\">
        <div class=\"banner_content\">
            <h2>Сайт в рассрочку</h2>
            <p>Получаете прибыль с сайта - постепенно<br>оплачиваете рассрочку<br><br></p>
            <p>Мы рады сообщить Вам приятную новость!</p>
            <p>Теперь у нас можно заказать сайт в рассрочку без первоначального взноса. Стоимость Вашего сайта окупится уже в первые месяцы пребывания в сети!<br><br></p>
            <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
        </div>
    </div>
</div>
<div class=\"banner banner_site-in-installments banner_small\">
    <div class=\"container\">
        <div class=\"banner_content\">
            <h2>Сайт в рассрочку</h2>
            <p>Получаете прибыль с сайта - постепенно<br>оплачиваете рассрочку<br><br></p>
            <p>Мы рады сообщить Вам приятную новость!</p>
            <p>Теперь у нас можно заказать сайт в рассрочку без первоначального взноса. Стоимость Вашего сайта окупится уже в первые месяцы пребывания в сети!<br><br></p>
            <a href=\"\" class=\"btn-podrobnee\">Узнать подробнее</a>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~/banner~~~~~~~~~~~~~~~~~-->
<!--~~~~~~~~~~~~~~~~~svyazatsya~~~~~~~~~~~~~~~~~-->
<div class=\"forma container svyazatsya\">
    <h2>Почему это выгодно?</h2>
    <p>Потому что у Вас есть возможность разобраться с финансовыми трудностями, не «выдирая» из бюджета Вашей организации средств на сайт.</p>
    <p>Создание сайта в рассрочку может позволить реализовать Ваши идеи, поможет вам с бизнесом. При этом, заказав сайт в рассрочку, Вы нисколько не переплачиваете!</p>
    <form action=\"\">
        <p>Заполните форму и мы перезвоним вам!</p>
        <input type=\"text\" placeholder=\"Ваше имя\" required>
        <input type=\"tel\" class=\"phone_input\" placeholder=\"Телефон\" required>
        <input type=\"email\" placeholder=\"Электронная почта\">
        <textarea name=\"\" id=\"\" cols=\"30\" rows=\"8\" placeholder=\"Сообщение\"></textarea>
        <a href=\"\" class=\"politica\">Политика конфиденциальности</a>
        <input type=\"submit\" class=\"btn-dashed\" value=\"Отправить\">
    </form>
    <div class=\"escho\">
        <p>Еще несколько причин:</p>
        <li>Вы не переплачиваете за сайт, заказав его в рассрочку.</li>
        <li>Стоимость Вашего сайта окупится уже в первые месяцы пребывания в сети!</li>
        <li>Параллельно получая доход с сайта, вы оплачиваете равными долями рассрочку.</li>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~/svyazatsya~~~~~~~~~~~~~~~~~-->
<!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:installments.html.twig";
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
