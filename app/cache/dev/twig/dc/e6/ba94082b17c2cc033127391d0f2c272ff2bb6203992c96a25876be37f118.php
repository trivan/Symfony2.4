<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_dce6ba94082b17c2cc033127391d0f2c272ff2bb6203992c96a25876be37f118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  206 => 58,  192 => 53,  174 => 47,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  186 => 51,  180 => 49,  90 => 36,  12 => 34,  81 => 33,  20 => 11,  170 => 55,  150 => 27,  146 => 47,  153 => 49,  34 => 18,  76 => 34,  97 => 69,  70 => 23,  53 => 24,  65 => 29,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  244 => 99,  236 => 94,  216 => 42,  211 => 84,  200 => 79,  195 => 54,  188 => 73,  184 => 72,  172 => 46,  100 => 43,  84 => 34,  58 => 25,  167 => 57,  165 => 52,  160 => 59,  126 => 48,  118 => 46,  113 => 48,  249 => 101,  232 => 93,  225 => 12,  222 => 11,  198 => 55,  190 => 92,  185 => 90,  175 => 33,  155 => 38,  152 => 63,  114 => 44,  110 => 144,  23 => 11,  148 => 35,  124 => 49,  104 => 42,  77 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 87,  214 => 5,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  107 => 46,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 65,  238 => 85,  235 => 16,  230 => 82,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 6,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 148,  102 => 79,  71 => 31,  67 => 30,  63 => 17,  59 => 27,  38 => 21,  94 => 40,  89 => 17,  85 => 37,  75 => 31,  68 => 30,  56 => 26,  87 => 35,  21 => 11,  26 => 14,  93 => 40,  88 => 37,  78 => 32,  46 => 8,  27 => 14,  44 => 21,  31 => 16,  28 => 17,  201 => 56,  196 => 90,  183 => 50,  171 => 80,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 51,  117 => 45,  105 => 41,  91 => 40,  62 => 28,  49 => 23,  24 => 14,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 29,  47 => 22,  40 => 19,  37 => 20,  22 => 12,  246 => 66,  157 => 29,  145 => 56,  139 => 59,  131 => 153,  123 => 47,  120 => 46,  115 => 45,  111 => 43,  108 => 42,  101 => 39,  98 => 42,  96 => 37,  83 => 15,  74 => 28,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 26,  41 => 25,  35 => 20,  32 => 16,  29 => 15,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 56,  144 => 49,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 45,  103 => 44,  99 => 38,  95 => 19,  92 => 34,  86 => 25,  82 => 31,  80 => 25,  73 => 34,  64 => 27,  60 => 16,  57 => 15,  54 => 26,  51 => 14,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 17,  33 => 16,  30 => 13,);
    }
}
