<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_b1e46f6944f0a2ecdea6902269acb9a6df0eb88a01fc14f14a1d077e06374f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
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
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  81 => 24,  76 => 17,  53 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  58 => 19,  186 => 62,  161 => 6,  23 => 1,  170 => 57,  160 => 54,  155 => 52,  134 => 42,  127 => 28,  113 => 34,  104 => 37,  100 => 33,  90 => 32,  84 => 29,  77 => 22,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 11,  140 => 52,  132 => 51,  128 => 49,  107 => 35,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 69,  119 => 42,  102 => 17,  71 => 19,  67 => 16,  63 => 17,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 11,  87 => 23,  21 => 2,  26 => 11,  93 => 26,  88 => 31,  78 => 26,  46 => 8,  27 => 3,  44 => 4,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 63,  158 => 5,  156 => 59,  151 => 50,  142 => 59,  138 => 54,  136 => 51,  121 => 59,  117 => 19,  105 => 18,  91 => 29,  62 => 14,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 16,  69 => 22,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 44,  123 => 47,  120 => 20,  115 => 42,  111 => 37,  108 => 19,  101 => 36,  98 => 28,  96 => 31,  83 => 22,  74 => 19,  66 => 18,  55 => 15,  52 => 10,  50 => 9,  43 => 7,  41 => 5,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 65,  168 => 65,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 41,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 30,  103 => 32,  99 => 35,  95 => 27,  92 => 32,  86 => 48,  82 => 28,  80 => 23,  73 => 16,  64 => 13,  60 => 20,  57 => 12,  54 => 22,  51 => 15,  48 => 9,  45 => 8,  42 => 7,  39 => 3,  36 => 5,  33 => 3,  30 => 3,);
    }
}
