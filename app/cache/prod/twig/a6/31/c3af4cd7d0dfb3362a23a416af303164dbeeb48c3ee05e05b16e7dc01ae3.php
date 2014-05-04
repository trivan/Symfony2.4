<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_a631c3af4cd7d0dfb3362a23a416af303164dbeeb48c3ee05e05b16e7dc01ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : null), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : null) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  263 => 55,  231 => 47,  216 => 42,  180 => 36,  83 => 22,  12 => 34,  20 => 1,  146 => 47,  153 => 49,  145 => 56,  139 => 59,  124 => 49,  58 => 23,  76 => 28,  53 => 16,  65 => 26,  271 => 59,  259 => 103,  255 => 102,  234 => 48,  213 => 84,  206 => 80,  202 => 79,  186 => 38,  181 => 70,  174 => 66,  170 => 55,  165 => 52,  129 => 41,  120 => 48,  160 => 59,  157 => 29,  134 => 41,  127 => 42,  100 => 41,  84 => 28,  70 => 23,  52 => 24,  113 => 46,  104 => 42,  74 => 18,  34 => 16,  289 => 75,  286 => 74,  280 => 16,  275 => 110,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 97,  222 => 87,  218 => 43,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 33,  155 => 51,  152 => 63,  118 => 46,  97 => 33,  90 => 57,  81 => 27,  23 => 3,  150 => 27,  126 => 25,  110 => 41,  77 => 22,  37 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 99,  312 => 98,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 58,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 91,  220 => 70,  214 => 69,  177 => 76,  169 => 69,  140 => 53,  132 => 44,  128 => 49,  111 => 41,  107 => 40,  61 => 28,  273 => 96,  269 => 94,  254 => 7,  246 => 51,  243 => 88,  240 => 50,  238 => 94,  235 => 74,  230 => 82,  227 => 46,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 22,  108 => 42,  102 => 39,  71 => 32,  67 => 31,  63 => 16,  59 => 29,  47 => 14,  38 => 14,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 25,  68 => 24,  56 => 25,  50 => 15,  29 => 15,  87 => 29,  72 => 19,  55 => 12,  21 => 11,  26 => 14,  98 => 38,  93 => 58,  88 => 36,  78 => 21,  46 => 8,  27 => 14,  40 => 24,  44 => 20,  35 => 17,  31 => 23,  43 => 25,  41 => 19,  28 => 22,  201 => 89,  196 => 90,  183 => 37,  171 => 72,  166 => 71,  163 => 60,  158 => 59,  156 => 66,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 106,  101 => 37,  91 => 39,  69 => 16,  66 => 17,  62 => 14,  49 => 28,  24 => 1,  32 => 4,  25 => 12,  22 => 11,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 62,  147 => 58,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 21,  73 => 24,  64 => 25,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 4,  33 => 16,  30 => 15,);
    }
}
