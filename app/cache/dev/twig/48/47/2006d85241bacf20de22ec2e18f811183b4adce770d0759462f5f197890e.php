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
        $this->env->loadTemplate("IbwJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => (isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")))));
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
        return array (  76 => 13,  97 => 32,  70 => 20,  53 => 7,  65 => 16,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  244 => 99,  236 => 94,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  100 => 35,  84 => 26,  58 => 19,  167 => 57,  165 => 56,  160 => 54,  126 => 41,  118 => 39,  113 => 35,  249 => 101,  232 => 93,  225 => 12,  222 => 11,  198 => 97,  190 => 92,  185 => 90,  175 => 59,  155 => 75,  152 => 58,  114 => 61,  110 => 34,  23 => 3,  148 => 57,  124 => 45,  104 => 37,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 5,  177 => 84,  169 => 60,  140 => 52,  132 => 42,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 17,  238 => 85,  235 => 16,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 6,  208 => 68,  204 => 80,  179 => 70,  159 => 76,  143 => 71,  135 => 43,  119 => 37,  102 => 32,  71 => 19,  67 => 21,  63 => 17,  59 => 10,  38 => 9,  94 => 28,  89 => 28,  85 => 27,  75 => 20,  68 => 19,  56 => 12,  87 => 27,  21 => 2,  26 => 5,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 3,  44 => 4,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 62,  105 => 35,  91 => 27,  62 => 16,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 16,  69 => 17,  47 => 10,  40 => 8,  37 => 5,  22 => 2,  246 => 82,  157 => 56,  145 => 47,  139 => 44,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 28,  96 => 33,  83 => 24,  74 => 20,  66 => 18,  55 => 14,  52 => 13,  50 => 21,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 99,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 77,  154 => 58,  149 => 48,  147 => 56,  144 => 49,  141 => 48,  133 => 55,  130 => 65,  125 => 38,  122 => 43,  116 => 41,  112 => 37,  109 => 39,  106 => 36,  103 => 36,  99 => 35,  95 => 27,  92 => 26,  86 => 42,  82 => 25,  80 => 23,  73 => 24,  64 => 17,  60 => 20,  57 => 13,  54 => 12,  51 => 11,  48 => 9,  45 => 17,  42 => 10,  39 => 3,  36 => 8,  33 => 7,  30 => 5,);
    }
}
