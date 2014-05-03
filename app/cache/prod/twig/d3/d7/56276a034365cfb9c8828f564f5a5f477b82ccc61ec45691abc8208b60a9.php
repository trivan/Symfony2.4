<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_d3d756276a034365cfb9c8828f564f5a5f477b82ccc61ec45691abc8208b60a9 extends Twig_Template
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
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "actions"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "template"));
            $template->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  114 => 44,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  206 => 58,  198 => 55,  192 => 53,  174 => 47,  155 => 38,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  186 => 51,  90 => 36,  12 => 34,  20 => 11,  170 => 55,  150 => 27,  146 => 47,  157 => 29,  153 => 49,  34 => 17,  76 => 34,  97 => 41,  70 => 23,  53 => 18,  110 => 144,  65 => 29,  52 => 23,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  216 => 42,  211 => 84,  200 => 79,  195 => 54,  184 => 72,  172 => 46,  96 => 37,  84 => 34,  160 => 59,  139 => 59,  118 => 46,  113 => 48,  74 => 33,  232 => 93,  225 => 14,  222 => 13,  215 => 11,  212 => 10,  207 => 6,  188 => 73,  180 => 49,  175 => 33,  167 => 57,  165 => 52,  161 => 73,  152 => 63,  145 => 56,  126 => 48,  100 => 43,  81 => 33,  58 => 25,  23 => 11,  148 => 35,  124 => 49,  120 => 46,  104 => 42,  83 => 36,  77 => 34,  37 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 87,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  111 => 43,  107 => 46,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 66,  243 => 88,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 153,  119 => 148,  108 => 45,  102 => 43,  71 => 32,  67 => 19,  63 => 29,  59 => 27,  47 => 22,  38 => 19,  94 => 40,  89 => 17,  85 => 37,  79 => 34,  75 => 31,  68 => 30,  56 => 26,  50 => 23,  29 => 15,  87 => 35,  72 => 30,  55 => 24,  21 => 11,  26 => 14,  98 => 42,  93 => 40,  88 => 38,  78 => 32,  46 => 22,  27 => 14,  40 => 19,  44 => 21,  35 => 20,  31 => 16,  43 => 21,  41 => 20,  28 => 17,  201 => 56,  196 => 90,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 47,  121 => 51,  117 => 45,  115 => 45,  105 => 44,  101 => 39,  91 => 39,  69 => 31,  66 => 30,  62 => 28,  49 => 17,  24 => 14,  32 => 16,  25 => 13,  22 => 12,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 92,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 56,  144 => 49,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 45,  103 => 44,  99 => 42,  95 => 19,  92 => 34,  86 => 37,  82 => 31,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 17,  33 => 16,  30 => 13,);
    }
}
