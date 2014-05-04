<?php

/* IbwJobeetBundle:Api:jobs.xml.twig */
class __TwigTemplate_2352f08b6222057dfe7a82f0126c87cee4c687f99b6232543cc374af47e972b5 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<jobs>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["url"] => $context["job"]) {
            // line 4
            echo "    <job url=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["job"]) ? $context["job"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 6
                echo "        <";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo ">
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </job>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['url'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</jobs>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Api:jobs.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 11,  251 => 6,  248 => 5,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 67,  152 => 66,  118 => 55,  97 => 44,  90 => 41,  81 => 38,  23 => 3,  150 => 57,  126 => 45,  110 => 38,  77 => 37,  37 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 62,  132 => 51,  128 => 49,  111 => 53,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 7,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 42,  108 => 52,  102 => 32,  71 => 19,  67 => 32,  63 => 17,  59 => 14,  47 => 10,  38 => 6,  94 => 28,  89 => 20,  85 => 39,  79 => 18,  75 => 17,  68 => 14,  56 => 10,  50 => 24,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 3,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 18,  44 => 12,  35 => 6,  31 => 5,  43 => 10,  41 => 7,  28 => 3,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 52,  138 => 51,  136 => 61,  123 => 47,  121 => 46,  117 => 42,  115 => 54,  105 => 40,  101 => 35,  91 => 27,  69 => 25,  66 => 18,  62 => 30,  49 => 8,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 41,  125 => 44,  122 => 44,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 43,  92 => 21,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 7,  36 => 6,  33 => 4,  30 => 7,);
    }
}
