<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_f19ecb47aa23aecc72d065f3de11aea5749d1eed31ee7017af552a68eec94c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row-fluid\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "span10";
            } else {
                echo "span12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter span2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  97 => 32,  70 => 17,  53 => 20,  110 => 34,  65 => 16,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  84 => 26,  160 => 54,  118 => 39,  113 => 34,  232 => 93,  225 => 14,  222 => 13,  215 => 11,  212 => 10,  207 => 6,  188 => 73,  180 => 85,  175 => 59,  167 => 57,  165 => 56,  161 => 73,  152 => 58,  126 => 41,  100 => 35,  81 => 37,  58 => 22,  23 => 3,  148 => 57,  124 => 45,  104 => 18,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 75,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 42,  128 => 49,  107 => 55,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 43,  119 => 37,  102 => 29,  71 => 19,  67 => 16,  63 => 17,  59 => 13,  38 => 9,  94 => 16,  89 => 33,  85 => 31,  75 => 20,  68 => 19,  56 => 21,  87 => 23,  21 => 2,  26 => 5,  93 => 26,  88 => 6,  78 => 20,  46 => 9,  27 => 12,  44 => 17,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 67,  138 => 54,  136 => 51,  121 => 46,  117 => 36,  105 => 35,  91 => 27,  62 => 14,  49 => 10,  24 => 11,  25 => 5,  19 => 1,  79 => 28,  72 => 16,  69 => 24,  47 => 18,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 47,  139 => 44,  131 => 44,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 28,  96 => 33,  83 => 22,  74 => 26,  66 => 18,  55 => 14,  52 => 13,  50 => 19,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 92,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 48,  147 => 56,  144 => 49,  141 => 48,  133 => 64,  130 => 63,  125 => 41,  122 => 43,  116 => 41,  112 => 37,  109 => 19,  106 => 30,  103 => 36,  99 => 17,  95 => 27,  92 => 26,  86 => 28,  82 => 25,  80 => 23,  73 => 24,  64 => 15,  60 => 20,  57 => 13,  54 => 12,  51 => 11,  48 => 9,  45 => 8,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 3,);
    }
}
