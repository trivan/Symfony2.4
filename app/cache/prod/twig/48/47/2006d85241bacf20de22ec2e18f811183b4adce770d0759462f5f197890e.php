<?php

/* IbwJobeetBundle:Job:search.html.twig */
class __TwigTemplate_48472006d85241bacf20de22ec2e18f811183b4adce770d0759462f5f197890e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $this->env->loadTemplate("IbwJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => (isset($context["jobs"]) ? $context["jobs"] : null))));
        // line 11
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  53 => 7,  65 => 16,  271 => 109,  259 => 103,  255 => 102,  234 => 93,  213 => 84,  206 => 80,  202 => 79,  186 => 72,  181 => 70,  174 => 66,  170 => 65,  165 => 63,  129 => 41,  120 => 37,  160 => 55,  157 => 54,  134 => 41,  127 => 39,  100 => 32,  84 => 26,  70 => 20,  52 => 13,  113 => 36,  104 => 31,  74 => 20,  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 110,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 97,  222 => 87,  218 => 86,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 55,  97 => 29,  90 => 28,  81 => 38,  23 => 3,  150 => 57,  126 => 45,  110 => 38,  77 => 22,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 91,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  111 => 53,  107 => 34,  61 => 15,  273 => 96,  269 => 94,  254 => 7,  246 => 99,  243 => 88,  240 => 86,  238 => 94,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 37,  108 => 32,  102 => 32,  71 => 19,  67 => 32,  63 => 17,  59 => 10,  47 => 10,  38 => 9,  94 => 28,  89 => 29,  85 => 24,  79 => 18,  75 => 20,  68 => 19,  56 => 12,  50 => 24,  29 => 3,  87 => 27,  72 => 21,  55 => 14,  21 => 2,  26 => 5,  98 => 28,  93 => 31,  88 => 26,  78 => 21,  46 => 9,  27 => 3,  40 => 8,  44 => 4,  35 => 6,  31 => 5,  43 => 8,  41 => 8,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 59,  156 => 66,  151 => 49,  142 => 52,  138 => 51,  136 => 61,  123 => 38,  121 => 38,  117 => 42,  115 => 54,  105 => 40,  101 => 35,  91 => 27,  69 => 17,  66 => 18,  62 => 30,  49 => 10,  24 => 4,  32 => 4,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 56,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 40,  125 => 38,  122 => 44,  116 => 35,  112 => 33,  109 => 34,  106 => 37,  103 => 32,  99 => 30,  95 => 27,  92 => 26,  86 => 28,  82 => 25,  80 => 23,  73 => 22,  64 => 17,  60 => 13,  57 => 11,  54 => 25,  51 => 11,  48 => 13,  45 => 8,  42 => 10,  39 => 3,  36 => 8,  33 => 7,  30 => 5,);
    }
}
