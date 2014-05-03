<?php

/* IbwJobeetBundle:Default:login.html.twig */
class __TwigTemplate_17a116397d593904bd7c8999afd69515c060668b7c35bd654fc2a4b822e576cf extends Twig_Template
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
        // line 1
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo " 
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    <button type=\"submit\">login</button>
</form>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  139 => 44,  118 => 39,  113 => 35,  74 => 20,  232 => 76,  225 => 14,  222 => 13,  215 => 11,  212 => 10,  207 => 6,  188 => 90,  180 => 85,  175 => 59,  167 => 57,  165 => 56,  161 => 73,  152 => 70,  145 => 47,  126 => 41,  100 => 53,  81 => 37,  58 => 23,  23 => 3,  148 => 57,  124 => 45,  120 => 58,  104 => 32,  83 => 24,  77 => 36,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 42,  128 => 49,  111 => 37,  107 => 55,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 5,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 10,  38 => 6,  94 => 28,  89 => 28,  85 => 27,  79 => 18,  75 => 23,  68 => 30,  56 => 10,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 13,  21 => 2,  26 => 3,  98 => 29,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  40 => 7,  44 => 12,  35 => 7,  31 => 5,  43 => 8,  41 => 7,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 67,  138 => 54,  136 => 51,  123 => 47,  121 => 46,  117 => 44,  115 => 42,  105 => 35,  101 => 32,  91 => 27,  69 => 20,  66 => 18,  62 => 16,  49 => 12,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 92,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 64,  130 => 63,  125 => 44,  122 => 43,  116 => 41,  112 => 37,  109 => 36,  106 => 33,  103 => 32,  99 => 32,  95 => 31,  92 => 26,  86 => 28,  82 => 26,  80 => 25,  73 => 19,  64 => 17,  60 => 13,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 6,  33 => 4,  30 => 5,);
    }
}
