<?php

/* IbwJobeetBundle:Job:list.html.twig */
class __TwigTemplate_f627adb235ccbbab4419706ab6ecf0a077673b33fc509f9288cd5b27d58a1b41 extends Twig_Template
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
        echo "<table class=\"jobs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
            echo "\">
            <td class=\"location\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
            echo "</td>
            <td class=\"position\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "positionslug"))), "html", null, true);
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
            echo "
                </a>
            </td>
            <td class=\"company\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
            echo "</td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  76 => 13,  53 => 7,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  83 => 25,  96 => 33,  58 => 19,  216 => 86,  213 => 74,  206 => 13,  191 => 6,  188 => 73,  165 => 82,  157 => 76,  139 => 68,  120 => 44,  37 => 5,  23 => 1,  170 => 84,  160 => 54,  155 => 74,  134 => 42,  127 => 40,  113 => 37,  104 => 37,  100 => 35,  90 => 29,  84 => 28,  77 => 22,  70 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 66,  128 => 49,  111 => 37,  107 => 35,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 67,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 20,  67 => 21,  63 => 17,  59 => 10,  47 => 10,  38 => 6,  94 => 30,  89 => 29,  85 => 25,  79 => 26,  75 => 23,  68 => 14,  56 => 12,  50 => 21,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 5,  98 => 31,  93 => 28,  88 => 50,  78 => 23,  46 => 9,  27 => 3,  40 => 8,  44 => 4,  35 => 6,  31 => 8,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 10,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 72,  142 => 69,  138 => 54,  136 => 51,  123 => 63,  121 => 39,  117 => 44,  115 => 42,  105 => 40,  101 => 32,  91 => 29,  69 => 22,  66 => 18,  62 => 16,  49 => 6,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 14,  203 => 78,  199 => 11,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 61,  112 => 42,  109 => 39,  106 => 33,  103 => 36,  99 => 32,  95 => 52,  92 => 51,  86 => 28,  82 => 27,  80 => 23,  73 => 24,  64 => 17,  60 => 20,  57 => 13,  54 => 22,  51 => 15,  48 => 9,  45 => 8,  42 => 7,  39 => 3,  36 => 8,  33 => 4,  30 => 5,);
    }
}