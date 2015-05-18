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
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('portfolio', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('calculate', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('domain', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('homeimage', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        $this->displayBlock('blog', $context, $blocks);
        // line 31
        echo "    <!--~~~~~~~~~~~~~~~~~/content~~~~~~~~~~~~~~~~~-->

";
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Blocks/Banners:main.html.twig");
        echo "
    ";
    }

    // line 7
    public function block_portfolio($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Portfolio:gallery.html.twig");
        echo "
    ";
    }

    // line 11
    public function block_calculate($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Blocks:calculator.html.twig", array("vizitka" => true, "shop" => true, "corp" => true, "landing" => true));
        // line 17
        echo "
    ";
    }

    // line 20
    public function block_domain($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Blocks:whois.html.twig");
        echo "
    ";
    }

    // line 24
    public function block_homeimage($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Blocks:homeimage.html.twig");
        echo "
    ";
    }

    // line 28
    public function block_blog($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle:Article:preview_list.html.twig", array("entities" => (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))));
        echo "
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
        return array (  125 => 29,  122 => 28,  115 => 25,  112 => 24,  105 => 21,  102 => 20,  97 => 17,  94 => 12,  91 => 11,  84 => 8,  81 => 7,  74 => 4,  71 => 3,  65 => 31,  63 => 28,  60 => 27,  58 => 24,  55 => 23,  53 => 20,  50 => 19,  48 => 11,  45 => 10,  43 => 7,  40 => 6,  37 => 3,  34 => 2,  11 => 1,);
    }
}
