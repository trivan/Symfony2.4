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
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars"), "errors")) {
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
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
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 43,  186 => 38,  90 => 57,  12 => 34,  20 => 1,  170 => 55,  150 => 27,  146 => 47,  153 => 49,  34 => 16,  76 => 28,  97 => 33,  70 => 23,  53 => 16,  110 => 41,  65 => 26,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  216 => 42,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  84 => 28,  160 => 59,  118 => 46,  113 => 46,  232 => 93,  225 => 14,  222 => 13,  215 => 11,  212 => 10,  207 => 6,  188 => 73,  180 => 36,  175 => 33,  167 => 57,  165 => 52,  161 => 73,  152 => 63,  126 => 25,  100 => 41,  81 => 27,  58 => 23,  23 => 3,  148 => 57,  124 => 49,  104 => 42,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 99,  312 => 98,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 58,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 75,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 47,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 50,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  119 => 22,  102 => 42,  71 => 17,  67 => 22,  63 => 20,  59 => 18,  38 => 5,  94 => 39,  89 => 37,  85 => 35,  75 => 25,  68 => 24,  56 => 25,  87 => 29,  21 => 11,  26 => 14,  93 => 58,  88 => 36,  78 => 26,  46 => 8,  27 => 14,  44 => 21,  31 => 23,  28 => 22,  201 => 92,  196 => 90,  183 => 37,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  121 => 51,  117 => 50,  105 => 106,  91 => 39,  62 => 14,  49 => 10,  24 => 1,  25 => 5,  19 => 11,  79 => 35,  72 => 30,  69 => 16,  47 => 14,  40 => 8,  37 => 24,  22 => 12,  246 => 51,  157 => 29,  145 => 56,  139 => 59,  131 => 43,  123 => 48,  120 => 48,  115 => 45,  111 => 43,  108 => 42,  101 => 37,  98 => 62,  96 => 33,  83 => 22,  74 => 18,  66 => 15,  55 => 12,  52 => 11,  50 => 15,  43 => 7,  41 => 6,  35 => 6,  32 => 4,  29 => 15,  209 => 82,  203 => 39,  199 => 67,  193 => 92,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 62,  147 => 56,  144 => 49,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 61,  92 => 32,  86 => 28,  82 => 36,  80 => 21,  73 => 24,  64 => 25,  60 => 24,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 4,  33 => 16,  30 => 2,);
    }
}
