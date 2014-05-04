<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_1b2792bdb97780d7bad920098f2add1244583495ee8cc44157b4d4e69fafff22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : null) && (isset($context["xEditableType"]) ? $context["xEditableType"] : null))) {
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-important\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  237 => 64,  198 => 55,  195 => 54,  192 => 53,  172 => 46,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  263 => 55,  231 => 47,  216 => 42,  180 => 49,  83 => 15,  12 => 34,  20 => 11,  146 => 47,  153 => 49,  145 => 56,  139 => 59,  124 => 49,  58 => 22,  76 => 34,  53 => 24,  65 => 29,  271 => 59,  259 => 103,  255 => 71,  234 => 48,  213 => 84,  206 => 58,  202 => 79,  186 => 51,  181 => 70,  174 => 47,  170 => 55,  165 => 52,  129 => 41,  120 => 49,  160 => 59,  157 => 29,  134 => 41,  127 => 42,  100 => 43,  84 => 36,  70 => 23,  52 => 23,  113 => 48,  104 => 42,  74 => 28,  34 => 18,  289 => 75,  286 => 74,  280 => 16,  275 => 73,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 62,  222 => 87,  218 => 59,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 33,  155 => 38,  152 => 63,  118 => 46,  97 => 69,  90 => 57,  81 => 36,  23 => 11,  150 => 27,  126 => 25,  110 => 144,  77 => 33,  37 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  111 => 30,  107 => 46,  61 => 27,  273 => 96,  269 => 94,  254 => 7,  246 => 66,  243 => 88,  240 => 65,  238 => 94,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 153,  119 => 148,  108 => 42,  102 => 79,  71 => 31,  67 => 30,  63 => 17,  59 => 27,  47 => 22,  38 => 21,  94 => 40,  89 => 17,  85 => 37,  79 => 34,  75 => 21,  68 => 30,  56 => 26,  50 => 23,  29 => 15,  87 => 38,  72 => 31,  55 => 25,  21 => 11,  26 => 15,  98 => 42,  93 => 40,  88 => 37,  78 => 21,  46 => 8,  27 => 14,  40 => 20,  44 => 21,  35 => 20,  31 => 15,  43 => 26,  41 => 25,  28 => 17,  201 => 56,  196 => 90,  183 => 50,  171 => 72,  166 => 71,  163 => 60,  158 => 59,  156 => 66,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 52,  121 => 51,  117 => 49,  115 => 45,  105 => 45,  101 => 37,  91 => 40,  69 => 19,  66 => 17,  62 => 28,  49 => 23,  24 => 14,  32 => 14,  25 => 13,  22 => 12,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 58,  144 => 45,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 45,  103 => 44,  99 => 23,  95 => 19,  92 => 34,  86 => 25,  82 => 31,  80 => 25,  73 => 34,  64 => 24,  60 => 16,  57 => 15,  54 => 26,  51 => 14,  48 => 25,  45 => 21,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 13,);
    }
}
