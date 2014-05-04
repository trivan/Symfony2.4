<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_69e54062063ea4ca310ec529cd1b74855309ffa8fbb88b2f5229df20abf62a68 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-book\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  145 => 59,  139 => 57,  124 => 52,  58 => 22,  76 => 27,  53 => 24,  65 => 26,  271 => 109,  259 => 103,  255 => 102,  234 => 93,  213 => 84,  206 => 80,  202 => 79,  186 => 72,  181 => 70,  174 => 66,  170 => 65,  165 => 63,  129 => 41,  120 => 37,  160 => 55,  157 => 64,  134 => 41,  127 => 42,  100 => 41,  84 => 26,  70 => 20,  52 => 12,  113 => 42,  104 => 40,  74 => 26,  34 => 18,  289 => 75,  286 => 74,  280 => 16,  275 => 110,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 97,  222 => 87,  218 => 86,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 55,  97 => 29,  90 => 28,  81 => 38,  23 => 3,  150 => 57,  126 => 45,  110 => 41,  77 => 22,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 91,  220 => 70,  214 => 69,  177 => 76,  169 => 69,  140 => 44,  132 => 47,  128 => 49,  111 => 53,  107 => 34,  61 => 27,  273 => 96,  269 => 94,  254 => 7,  246 => 99,  243 => 88,  240 => 86,  238 => 94,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 68,  143 => 63,  135 => 48,  131 => 58,  119 => 37,  108 => 32,  102 => 42,  71 => 29,  67 => 31,  63 => 17,  59 => 10,  47 => 21,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  79 => 28,  75 => 33,  68 => 30,  56 => 21,  50 => 25,  29 => 15,  87 => 27,  72 => 21,  55 => 25,  21 => 2,  26 => 14,  98 => 38,  93 => 31,  88 => 36,  78 => 31,  46 => 9,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 5,  43 => 21,  41 => 20,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 68,  158 => 59,  156 => 66,  151 => 61,  142 => 58,  138 => 51,  136 => 61,  123 => 38,  121 => 51,  117 => 50,  115 => 54,  105 => 40,  101 => 35,  91 => 38,  69 => 32,  66 => 18,  62 => 25,  49 => 10,  24 => 13,  32 => 4,  25 => 5,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 56,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 40,  125 => 38,  122 => 44,  116 => 43,  112 => 47,  109 => 19,  106 => 44,  103 => 32,  99 => 17,  95 => 27,  92 => 26,  86 => 24,  82 => 33,  80 => 21,  73 => 22,  64 => 16,  60 => 24,  57 => 27,  54 => 26,  51 => 11,  48 => 13,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 16,  30 => 15,);
    }
}
