<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_0af5b95edd74bc39f64d23a25291d1b092ad6fefb36fb0529fdffb53ef1103d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : null), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 43,  180 => 36,  175 => 33,  12 => 34,  52 => 11,  20 => 1,  118 => 46,  165 => 52,  150 => 27,  146 => 47,  97 => 33,  126 => 25,  157 => 29,  153 => 49,  145 => 56,  139 => 59,  110 => 41,  65 => 26,  34 => 16,  74 => 18,  81 => 27,  76 => 28,  53 => 16,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 42,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 63,  124 => 49,  120 => 48,  83 => 22,  96 => 33,  58 => 23,  186 => 38,  161 => 6,  37 => 24,  23 => 3,  170 => 55,  160 => 59,  155 => 52,  134 => 42,  127 => 63,  113 => 46,  104 => 42,  100 => 41,  90 => 57,  84 => 28,  77 => 22,  70 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 99,  312 => 98,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 58,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 47,  128 => 49,  111 => 43,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 51,  243 => 88,  240 => 50,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 22,  108 => 42,  102 => 42,  71 => 17,  67 => 22,  63 => 20,  59 => 18,  47 => 14,  38 => 5,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 25,  68 => 24,  56 => 25,  50 => 15,  29 => 15,  87 => 29,  72 => 30,  55 => 12,  21 => 11,  26 => 14,  98 => 62,  93 => 58,  88 => 36,  78 => 26,  46 => 8,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 23,  43 => 7,  41 => 6,  28 => 22,  201 => 92,  196 => 90,  183 => 37,  171 => 61,  166 => 10,  163 => 60,  158 => 5,  156 => 59,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 106,  101 => 37,  91 => 39,  69 => 16,  66 => 15,  62 => 14,  49 => 6,  24 => 1,  32 => 5,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 71,  168 => 65,  164 => 59,  162 => 55,  154 => 58,  149 => 62,  147 => 56,  144 => 46,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 61,  92 => 32,  86 => 48,  82 => 36,  80 => 21,  73 => 24,  64 => 25,  60 => 24,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 4,  33 => 16,  30 => 2,);
    }
}
