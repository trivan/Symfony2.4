<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_653ae846cc341542ae9fdbd86153012643ea6d2553eb026ea9b5bdd4de8c72b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " => ";
                echo (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val"));
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  237 => 64,  198 => 55,  195 => 54,  192 => 53,  172 => 46,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  263 => 55,  231 => 47,  216 => 42,  180 => 49,  12 => 34,  20 => 11,  146 => 47,  153 => 49,  124 => 49,  58 => 25,  76 => 35,  53 => 18,  65 => 29,  271 => 59,  259 => 103,  255 => 71,  234 => 48,  213 => 84,  206 => 58,  202 => 79,  186 => 51,  181 => 70,  174 => 47,  170 => 55,  165 => 52,  129 => 56,  160 => 59,  134 => 41,  127 => 42,  100 => 43,  84 => 34,  70 => 23,  113 => 48,  104 => 42,  34 => 17,  289 => 75,  286 => 74,  280 => 16,  275 => 73,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 62,  222 => 87,  218 => 59,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 33,  155 => 38,  152 => 63,  118 => 46,  97 => 41,  90 => 36,  81 => 33,  23 => 11,  150 => 27,  126 => 55,  110 => 144,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 57,  128 => 152,  107 => 48,  61 => 26,  273 => 96,  269 => 94,  254 => 7,  243 => 88,  240 => 65,  238 => 94,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 148,  102 => 43,  71 => 32,  67 => 19,  63 => 31,  59 => 27,  38 => 19,  94 => 40,  89 => 42,  85 => 37,  75 => 31,  68 => 30,  56 => 27,  87 => 35,  21 => 11,  26 => 14,  93 => 40,  88 => 38,  78 => 36,  46 => 22,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 56,  196 => 90,  183 => 50,  171 => 72,  166 => 71,  163 => 60,  158 => 59,  156 => 66,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 52,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 33,  47 => 19,  40 => 19,  37 => 17,  22 => 12,  246 => 66,  157 => 29,  145 => 56,  139 => 59,  131 => 153,  123 => 47,  120 => 46,  115 => 45,  111 => 43,  108 => 45,  101 => 46,  98 => 42,  96 => 44,  83 => 36,  74 => 33,  66 => 32,  55 => 21,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 20,  32 => 14,  29 => 15,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 58,  144 => 45,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 45,  103 => 44,  99 => 45,  95 => 19,  92 => 43,  86 => 37,  82 => 38,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 22,  45 => 21,  42 => 20,  39 => 17,  36 => 16,  33 => 17,  30 => 13,);
    }
}
