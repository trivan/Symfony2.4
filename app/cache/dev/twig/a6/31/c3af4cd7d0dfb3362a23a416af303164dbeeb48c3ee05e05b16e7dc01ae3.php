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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors"))) {
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
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
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
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 43,  186 => 38,  90 => 57,  12 => 34,  20 => 1,  170 => 55,  150 => 27,  146 => 47,  153 => 49,  34 => 16,  76 => 28,  97 => 33,  70 => 23,  53 => 16,  110 => 41,  65 => 26,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  216 => 42,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  84 => 28,  160 => 59,  118 => 46,  113 => 46,  232 => 93,  225 => 14,  222 => 13,  215 => 11,  212 => 10,  207 => 6,  188 => 73,  180 => 36,  175 => 33,  167 => 57,  165 => 52,  161 => 73,  152 => 63,  126 => 25,  100 => 41,  81 => 27,  58 => 23,  23 => 3,  148 => 57,  124 => 49,  104 => 42,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 99,  312 => 98,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 58,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 75,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 44,  128 => 49,  107 => 40,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 50,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  119 => 22,  102 => 39,  71 => 32,  67 => 31,  63 => 16,  59 => 29,  38 => 14,  94 => 39,  89 => 37,  85 => 35,  75 => 25,  68 => 24,  56 => 25,  87 => 29,  21 => 11,  26 => 14,  93 => 58,  88 => 36,  78 => 21,  46 => 8,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 92,  196 => 90,  183 => 37,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  121 => 51,  117 => 50,  105 => 106,  91 => 39,  62 => 14,  49 => 28,  24 => 1,  25 => 12,  19 => 11,  79 => 35,  72 => 19,  69 => 16,  47 => 14,  40 => 24,  37 => 24,  22 => 11,  246 => 51,  157 => 29,  145 => 56,  139 => 59,  131 => 43,  123 => 48,  120 => 48,  115 => 45,  111 => 41,  108 => 42,  101 => 37,  98 => 38,  96 => 33,  83 => 22,  74 => 18,  66 => 17,  55 => 12,  52 => 24,  50 => 15,  43 => 25,  41 => 19,  35 => 17,  32 => 4,  29 => 15,  209 => 82,  203 => 39,  199 => 67,  193 => 92,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 62,  147 => 56,  144 => 49,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 21,  73 => 24,  64 => 25,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 4,  33 => 16,  30 => 15,);
    }
}
