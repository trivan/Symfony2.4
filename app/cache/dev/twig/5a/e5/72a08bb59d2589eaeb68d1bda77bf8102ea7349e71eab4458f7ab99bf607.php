<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_5ae572a08bb59d2589eaeb68d1bda77bf8102ea7349e71eab4458f7ab99bf607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 91,  152 => 71,  124 => 55,  180 => 69,  155 => 55,  146 => 51,  134 => 49,  126 => 47,  118 => 45,  114 => 44,  110 => 47,  77 => 35,  186 => 62,  161 => 58,  127 => 63,  90 => 38,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 87,  169 => 82,  140 => 50,  132 => 51,  128 => 49,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 75,  143 => 56,  135 => 69,  119 => 42,  102 => 41,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 39,  89 => 35,  85 => 25,  75 => 27,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 50,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 62,  158 => 5,  156 => 66,  151 => 63,  142 => 59,  138 => 63,  136 => 56,  121 => 59,  117 => 51,  105 => 54,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 15,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 67,  139 => 45,  131 => 59,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 40,  96 => 39,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 10,  50 => 21,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 64,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 48,  125 => 61,  122 => 46,  116 => 41,  112 => 56,  109 => 55,  106 => 42,  103 => 43,  99 => 31,  95 => 28,  92 => 21,  86 => 37,  82 => 31,  80 => 36,  73 => 34,  64 => 29,  60 => 6,  57 => 12,  54 => 15,  51 => 14,  48 => 9,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
