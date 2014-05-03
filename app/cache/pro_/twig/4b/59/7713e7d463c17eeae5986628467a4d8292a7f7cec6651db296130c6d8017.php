<?php

/* IbwJobeetBundle:Job:show.html.twig */
class __TwigTemplate_4b597713e7d463c17eeae5986628467a4d8292a7f7cec6651db296130c6d8017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "token"), "method")) {
            // line 15
            echo "        ";
            $this->env->loadTemplate("IbwJobeetBundle:Job:admin.html.twig")->display(array_merge($context, array("job" => (isset($context["entity"]) ? $context["entity"] : null))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    <div id=\"job\">
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
        echo "</h1>
        <h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
        echo "
            <small> - ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type"), "html", null, true);
        echo "</small>
        </h3>
 
        ";
        // line 26
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo")) {
            // line 27
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo"), "html", null, true);
            echo "\"
                        alt=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 34
        echo " 
        <div class=\"description\">
            ";
        // line 36
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true));
        echo "
        </div>
 
        <h4>How to apply?</h4>
 
        <p class=\"how_to_apply\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply"), "html", null, true);
        echo "</p>
 
        <div class=\"meta\">
            <small>posted on ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat"), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  97 => 32,  70 => 17,  53 => 7,  110 => 34,  65 => 16,  52 => 13,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  152 => 58,  124 => 45,  120 => 44,  83 => 22,  77 => 22,  100 => 35,  84 => 26,  218 => 73,  211 => 84,  180 => 88,  172 => 66,  157 => 73,  153 => 71,  137 => 66,  134 => 65,  96 => 33,  58 => 19,  175 => 59,  167 => 81,  165 => 56,  160 => 54,  145 => 47,  139 => 44,  126 => 41,  118 => 60,  113 => 34,  104 => 37,  74 => 19,  37 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 14,  177 => 65,  169 => 60,  140 => 52,  132 => 42,  128 => 49,  111 => 37,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 74,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 75,  143 => 56,  135 => 43,  131 => 44,  119 => 37,  108 => 38,  102 => 29,  71 => 19,  67 => 16,  63 => 17,  59 => 13,  47 => 10,  38 => 9,  94 => 28,  89 => 28,  85 => 27,  79 => 26,  75 => 20,  68 => 19,  56 => 12,  50 => 9,  29 => 3,  87 => 23,  72 => 16,  55 => 14,  21 => 2,  26 => 5,  98 => 28,  93 => 26,  88 => 6,  78 => 20,  46 => 9,  27 => 3,  40 => 8,  44 => 4,  35 => 6,  31 => 8,  43 => 9,  41 => 7,  28 => 5,  201 => 10,  196 => 6,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 47,  121 => 46,  117 => 36,  115 => 42,  105 => 35,  101 => 32,  91 => 27,  69 => 17,  66 => 18,  62 => 14,  49 => 6,  24 => 4,  32 => 5,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 5,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 59,  154 => 58,  149 => 48,  147 => 56,  144 => 68,  141 => 67,  133 => 55,  130 => 41,  125 => 41,  122 => 61,  116 => 41,  112 => 56,  109 => 39,  106 => 30,  103 => 36,  99 => 35,  95 => 27,  92 => 51,  86 => 28,  82 => 25,  80 => 23,  73 => 24,  64 => 15,  60 => 20,  57 => 13,  54 => 22,  51 => 15,  48 => 9,  45 => 8,  42 => 7,  39 => 3,  36 => 8,  33 => 4,  30 => 3,);
    }
}