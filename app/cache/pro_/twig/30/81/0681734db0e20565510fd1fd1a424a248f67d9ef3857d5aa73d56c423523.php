<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_30810681734db0e20565510fd1fd1a424a248f67d9ef3857d5aa73d56c423523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  206 => 58,  198 => 55,  192 => 53,  174 => 47,  155 => 38,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  186 => 51,  90 => 57,  12 => 34,  81 => 20,  20 => 11,  170 => 55,  150 => 27,  146 => 47,  34 => 17,  76 => 35,  97 => 69,  70 => 23,  53 => 27,  110 => 144,  65 => 26,  52 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 42,  200 => 79,  195 => 54,  188 => 73,  184 => 72,  152 => 63,  124 => 49,  120 => 48,  83 => 22,  77 => 22,  100 => 70,  84 => 28,  218 => 59,  211 => 84,  180 => 49,  172 => 46,  157 => 29,  153 => 49,  137 => 66,  134 => 65,  96 => 33,  58 => 22,  175 => 33,  167 => 81,  165 => 52,  160 => 59,  145 => 56,  139 => 59,  126 => 25,  118 => 46,  113 => 46,  104 => 42,  74 => 28,  37 => 18,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 87,  214 => 14,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  111 => 41,  107 => 143,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  246 => 66,  243 => 88,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 74,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 153,  119 => 148,  108 => 42,  102 => 79,  71 => 27,  67 => 32,  63 => 16,  59 => 29,  47 => 22,  38 => 21,  94 => 39,  89 => 37,  85 => 35,  79 => 30,  75 => 25,  68 => 24,  56 => 28,  50 => 15,  29 => 13,  87 => 28,  72 => 19,  55 => 12,  21 => 11,  26 => 14,  98 => 38,  93 => 58,  88 => 36,  78 => 21,  46 => 8,  27 => 14,  40 => 24,  44 => 20,  35 => 20,  31 => 19,  43 => 20,  41 => 19,  28 => 14,  201 => 56,  196 => 6,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 80,  101 => 37,  91 => 39,  69 => 26,  66 => 17,  62 => 14,  49 => 23,  24 => 12,  32 => 19,  25 => 13,  22 => 11,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 5,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 56,  144 => 68,  141 => 67,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 35,  92 => 34,  86 => 25,  82 => 31,  80 => 21,  73 => 34,  64 => 24,  60 => 19,  57 => 14,  54 => 26,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  39 => 14,  36 => 20,  33 => 16,  30 => 13,);
    }
}
