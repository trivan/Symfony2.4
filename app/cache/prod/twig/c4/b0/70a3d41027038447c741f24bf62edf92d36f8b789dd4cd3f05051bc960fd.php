<?php

/* IbwJobeetBundle:Affiliate:wait.html.twig */
class __TwigTemplate_c4b070a3d41027038447c741f24bf62edf92d36f8b789dd4cd3f05051bc960fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content\">
        <h1>Your affiliate account has been created</h1>
        <div style=\"padding: 20px\">
            Thank you!
            You will receive an email with your affiliate token
            as soon as your account will be activated.
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Affiliate:wait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 83,  232 => 15,  225 => 12,  222 => 11,  198 => 97,  190 => 92,  185 => 90,  175 => 82,  155 => 75,  152 => 74,  114 => 61,  110 => 60,  23 => 1,  148 => 57,  124 => 45,  120 => 44,  104 => 37,  83 => 24,  77 => 22,  37 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 5,  177 => 84,  169 => 60,  140 => 70,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 82,  243 => 88,  240 => 17,  238 => 85,  235 => 16,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 6,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 71,  135 => 53,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 28,  59 => 27,  47 => 10,  38 => 14,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 12,  50 => 21,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 20,  27 => 4,  40 => 8,  44 => 12,  35 => 6,  31 => 4,  43 => 19,  41 => 15,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 69,  123 => 47,  121 => 46,  117 => 62,  115 => 42,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 18,  62 => 23,  49 => 19,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 99,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 65,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 35,  95 => 28,  92 => 45,  86 => 42,  82 => 41,  80 => 23,  73 => 35,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 11,  33 => 4,  30 => 7,);
    }
}
