<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_5526f6087b89fa4537348624437a4eaef209ab9d30448d724320b8c7f95b2010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  90 => 32,  84 => 29,  76 => 17,  137 => 66,  81 => 34,  165 => 64,  146 => 53,  65 => 31,  58 => 29,  53 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 50,  132 => 51,  128 => 49,  107 => 41,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 44,  102 => 17,  71 => 32,  67 => 26,  63 => 15,  59 => 6,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 11,  87 => 36,  21 => 2,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 37,  62 => 30,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 34,  72 => 16,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 46,  123 => 58,  120 => 20,  115 => 43,  111 => 42,  108 => 19,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 30,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 82,  154 => 77,  149 => 51,  147 => 58,  144 => 70,  141 => 48,  133 => 55,  130 => 62,  125 => 45,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 36,  103 => 40,  99 => 39,  95 => 42,  92 => 21,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 17,  42 => 10,  39 => 10,  36 => 4,  33 => 3,  30 => 7,);
    }
}
