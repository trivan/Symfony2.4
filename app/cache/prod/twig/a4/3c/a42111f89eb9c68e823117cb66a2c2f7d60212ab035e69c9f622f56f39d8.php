<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_a43ca42111f89eb9c68e823117cb66a2c2f7d60212ab035e69c9f622f56f39d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  146 => 47,  153 => 49,  145 => 60,  139 => 59,  124 => 52,  58 => 23,  76 => 28,  53 => 22,  65 => 26,  271 => 109,  259 => 103,  255 => 102,  234 => 93,  213 => 84,  206 => 80,  202 => 79,  186 => 72,  181 => 70,  174 => 66,  170 => 55,  165 => 52,  129 => 41,  120 => 47,  160 => 55,  157 => 64,  134 => 41,  127 => 42,  100 => 41,  84 => 29,  70 => 20,  52 => 12,  113 => 42,  104 => 40,  74 => 26,  34 => 15,  289 => 75,  286 => 74,  280 => 16,  275 => 110,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 97,  222 => 87,  218 => 86,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 46,  97 => 33,  90 => 28,  81 => 38,  23 => 3,  150 => 48,  126 => 55,  110 => 41,  77 => 22,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 91,  220 => 70,  214 => 69,  177 => 76,  169 => 69,  140 => 44,  132 => 47,  128 => 49,  111 => 43,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 7,  246 => 99,  243 => 88,  240 => 86,  238 => 94,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 51,  143 => 63,  135 => 45,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 32,  67 => 26,  63 => 17,  59 => 10,  47 => 21,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 34,  68 => 31,  56 => 21,  50 => 25,  29 => 15,  87 => 27,  72 => 21,  55 => 25,  21 => 2,  26 => 14,  98 => 39,  93 => 31,  88 => 37,  78 => 31,  46 => 19,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 5,  43 => 21,  41 => 20,  28 => 14,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 68,  158 => 59,  156 => 66,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 40,  101 => 40,  91 => 38,  69 => 32,  66 => 30,  62 => 25,  49 => 10,  24 => 13,  32 => 4,  25 => 5,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 62,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 57,  125 => 42,  122 => 44,  116 => 39,  112 => 38,  109 => 37,  106 => 44,  103 => 41,  99 => 17,  95 => 27,  92 => 26,  86 => 24,  82 => 36,  80 => 21,  73 => 27,  64 => 25,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 13,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
