<?php

/* ::base.html.twig */
class __TwigTemplate_6089f6c5abbc23fadda0120076cbfee9c8762c51d7f6608283fc7a8b4750b92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  81 => 24,  76 => 13,  53 => 5,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  120 => 44,  83 => 22,  58 => 19,  186 => 62,  161 => 6,  37 => 7,  23 => 1,  170 => 57,  160 => 54,  155 => 52,  134 => 42,  127 => 63,  113 => 34,  104 => 37,  100 => 33,  90 => 49,  84 => 28,  77 => 22,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 11,  140 => 52,  132 => 51,  128 => 49,  111 => 37,  107 => 35,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 69,  131 => 44,  119 => 42,  108 => 38,  102 => 29,  71 => 19,  67 => 16,  63 => 17,  59 => 6,  47 => 12,  38 => 6,  94 => 30,  89 => 20,  85 => 25,  79 => 26,  75 => 23,  68 => 14,  56 => 12,  50 => 9,  29 => 5,  87 => 23,  72 => 16,  55 => 15,  21 => 2,  26 => 5,  98 => 28,  93 => 26,  88 => 30,  78 => 20,  46 => 9,  27 => 3,  40 => 8,  44 => 11,  35 => 7,  31 => 8,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 63,  158 => 5,  156 => 59,  151 => 50,  142 => 59,  138 => 54,  136 => 51,  123 => 47,  121 => 59,  117 => 36,  115 => 42,  105 => 54,  101 => 36,  91 => 29,  69 => 11,  66 => 18,  62 => 14,  49 => 6,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 65,  168 => 65,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 41,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 30,  103 => 32,  99 => 35,  95 => 27,  92 => 32,  86 => 48,  82 => 27,  80 => 23,  73 => 24,  64 => 10,  60 => 20,  57 => 13,  54 => 22,  51 => 15,  48 => 9,  45 => 8,  42 => 10,  39 => 3,  36 => 8,  33 => 6,  30 => 3,);
    }
}
