<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_78fbd446a994d7ec4a1597c84440de56337cf569df7655bd0158e7b53bef3b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  533 => 169,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 158,  507 => 157,  504 => 156,  483 => 129,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  448 => 140,  443 => 138,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 113,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 77,  260 => 70,  251 => 67,  225 => 58,  205 => 56,  197 => 54,  194 => 53,  178 => 45,  129 => 56,  114 => 50,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 146,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 96,  327 => 118,  323 => 92,  320 => 115,  317 => 86,  307 => 82,  304 => 86,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  206 => 58,  198 => 55,  192 => 53,  174 => 47,  155 => 38,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 104,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 64,  271 => 76,  263 => 55,  234 => 48,  231 => 47,  186 => 51,  90 => 18,  12 => 34,  81 => 15,  20 => 11,  170 => 55,  150 => 27,  146 => 34,  34 => 52,  76 => 13,  97 => 41,  70 => 23,  53 => 24,  110 => 25,  65 => 29,  270 => 110,  266 => 74,  261 => 107,  253 => 102,  249 => 101,  244 => 65,  236 => 94,  232 => 93,  216 => 42,  200 => 55,  195 => 54,  188 => 49,  184 => 47,  152 => 38,  124 => 49,  77 => 30,  100 => 43,  84 => 16,  218 => 59,  211 => 84,  180 => 49,  172 => 46,  153 => 49,  137 => 66,  134 => 65,  58 => 25,  175 => 43,  167 => 81,  165 => 52,  160 => 59,  126 => 55,  118 => 28,  113 => 46,  104 => 23,  23 => 11,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 136,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 114,  368 => 112,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 14,  177 => 48,  169 => 69,  140 => 53,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 92,  243 => 88,  240 => 64,  238 => 85,  235 => 63,  230 => 61,  227 => 46,  224 => 60,  221 => 74,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 44,  102 => 43,  71 => 31,  67 => 184,  63 => 25,  59 => 164,  38 => 7,  94 => 40,  89 => 34,  85 => 36,  75 => 31,  68 => 30,  56 => 25,  87 => 17,  21 => 11,  26 => 14,  93 => 39,  88 => 37,  78 => 36,  46 => 19,  27 => 14,  44 => 73,  31 => 15,  28 => 14,  201 => 56,  196 => 6,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 29,  117 => 45,  105 => 44,  91 => 39,  62 => 165,  49 => 111,  24 => 3,  25 => 13,  19 => 1,  79 => 14,  72 => 198,  69 => 197,  47 => 74,  40 => 19,  37 => 53,  22 => 2,  246 => 66,  157 => 41,  145 => 53,  139 => 31,  131 => 48,  123 => 30,  120 => 46,  115 => 27,  111 => 43,  108 => 45,  101 => 22,  98 => 21,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 21,  52 => 112,  50 => 21,  43 => 20,  41 => 20,  35 => 20,  32 => 5,  29 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 5,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 36,  147 => 56,  144 => 33,  141 => 67,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 108,  106 => 45,  103 => 38,  99 => 41,  95 => 20,  92 => 19,  86 => 33,  82 => 35,  80 => 31,  73 => 32,  64 => 183,  60 => 24,  57 => 154,  54 => 153,  51 => 23,  48 => 22,  45 => 21,  42 => 61,  39 => 60,  36 => 17,  33 => 16,  30 => 13,);
    }
}
