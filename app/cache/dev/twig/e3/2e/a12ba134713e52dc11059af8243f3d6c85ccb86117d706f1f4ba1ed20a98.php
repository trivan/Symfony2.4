<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_e32ea12ba134713e52dc11059af8243f3d6c85ccb86117d706f1f4ba1ed20a98 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show")) > 0))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  34 => 18,  76 => 27,  97 => 32,  70 => 17,  53 => 24,  65 => 26,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  244 => 99,  236 => 94,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  100 => 41,  84 => 26,  58 => 22,  167 => 57,  165 => 56,  160 => 54,  126 => 45,  118 => 39,  113 => 42,  249 => 101,  232 => 93,  225 => 12,  222 => 11,  198 => 97,  190 => 92,  185 => 90,  175 => 59,  155 => 75,  152 => 58,  114 => 61,  110 => 41,  23 => 3,  148 => 57,  124 => 52,  104 => 40,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 5,  177 => 84,  169 => 69,  140 => 52,  132 => 47,  128 => 49,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 17,  238 => 85,  235 => 16,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 6,  208 => 68,  204 => 80,  179 => 72,  159 => 76,  143 => 71,  135 => 48,  119 => 37,  102 => 42,  71 => 29,  67 => 31,  63 => 17,  59 => 13,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  75 => 33,  68 => 30,  56 => 21,  87 => 23,  21 => 2,  26 => 14,  93 => 26,  88 => 36,  78 => 31,  46 => 9,  27 => 14,  44 => 21,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 68,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 54,  136 => 51,  121 => 51,  117 => 50,  105 => 35,  91 => 38,  62 => 25,  49 => 10,  24 => 13,  25 => 5,  19 => 11,  79 => 28,  72 => 16,  69 => 32,  47 => 21,  40 => 8,  37 => 5,  22 => 12,  246 => 82,  157 => 64,  145 => 59,  139 => 57,  131 => 44,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 38,  96 => 33,  83 => 22,  74 => 26,  66 => 18,  55 => 25,  52 => 13,  50 => 25,  43 => 21,  41 => 20,  35 => 6,  32 => 4,  29 => 15,  209 => 82,  203 => 99,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 77,  154 => 58,  149 => 48,  147 => 56,  144 => 49,  141 => 48,  133 => 55,  130 => 65,  125 => 41,  122 => 43,  116 => 43,  112 => 47,  109 => 19,  106 => 44,  103 => 36,  99 => 17,  95 => 27,  92 => 26,  86 => 42,  82 => 33,  80 => 23,  73 => 24,  64 => 15,  60 => 24,  57 => 27,  54 => 26,  51 => 11,  48 => 9,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 16,  30 => 15,);
    }
}
