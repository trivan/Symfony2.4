<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_652485577af44c3752f154ea2d4be92610e3cb0f9e79edb296333da729214b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  303 => 140,  236 => 109,  537 => 178,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  375 => 106,  372 => 105,  348 => 100,  325 => 93,  313 => 90,  292 => 135,  161 => 71,  215 => 78,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  267 => 156,  232 => 84,  347 => 134,  338 => 130,  319 => 92,  277 => 78,  265 => 126,  262 => 105,  257 => 149,  239 => 97,  253 => 95,  212 => 74,  210 => 75,  167 => 48,  137 => 46,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 186,  550 => 185,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 116,  386 => 111,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 89,  300 => 139,  297 => 77,  291 => 169,  270 => 4,  256 => 121,  250 => 93,  242 => 113,  228 => 68,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  509 => 304,  507 => 157,  504 => 302,  483 => 154,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 139,  443 => 137,  425 => 175,  422 => 250,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  371 => 182,  358 => 139,  346 => 99,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 123,  316 => 121,  308 => 88,  288 => 107,  274 => 129,  260 => 124,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  194 => 87,  188 => 49,  184 => 64,  178 => 28,  114 => 71,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 184,  545 => 169,  541 => 180,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  495 => 133,  492 => 295,  489 => 157,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 260,  424 => 128,  418 => 113,  415 => 247,  404 => 126,  401 => 86,  396 => 234,  394 => 136,  388 => 112,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 174,  301 => 117,  296 => 82,  281 => 105,  237 => 70,  198 => 66,  195 => 54,  192 => 88,  172 => 51,  148 => 64,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 102,  352 => 123,  349 => 90,  342 => 97,  335 => 188,  332 => 85,  326 => 185,  324 => 82,  318 => 145,  315 => 123,  302 => 84,  299 => 83,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 64,  263 => 125,  231 => 47,  216 => 100,  180 => 62,  12 => 34,  20 => 11,  146 => 49,  153 => 72,  124 => 31,  58 => 17,  76 => 28,  53 => 11,  65 => 30,  271 => 108,  259 => 103,  255 => 74,  234 => 48,  213 => 126,  206 => 71,  202 => 77,  186 => 82,  181 => 80,  174 => 60,  170 => 79,  165 => 77,  129 => 57,  160 => 76,  134 => 59,  127 => 60,  100 => 36,  84 => 29,  70 => 33,  113 => 41,  104 => 49,  34 => 16,  289 => 112,  286 => 133,  280 => 131,  275 => 103,  272 => 158,  266 => 66,  261 => 104,  251 => 101,  248 => 116,  233 => 81,  222 => 81,  218 => 59,  211 => 81,  207 => 90,  197 => 90,  190 => 73,  185 => 86,  175 => 77,  155 => 53,  152 => 92,  118 => 28,  97 => 41,  90 => 32,  81 => 25,  23 => 12,  150 => 65,  126 => 42,  110 => 22,  77 => 27,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 108,  379 => 126,  374 => 114,  368 => 103,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 143,  309 => 117,  305 => 87,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 127,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 80,  214 => 99,  177 => 61,  169 => 57,  140 => 97,  132 => 59,  128 => 58,  107 => 52,  61 => 12,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 64,  238 => 139,  235 => 56,  230 => 106,  227 => 134,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 66,  159 => 70,  143 => 48,  135 => 62,  119 => 28,  102 => 17,  71 => 55,  67 => 32,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 40,  85 => 32,  75 => 39,  68 => 31,  56 => 11,  87 => 33,  21 => 12,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 8,  27 => 8,  44 => 19,  31 => 3,  28 => 3,  201 => 65,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 45,  158 => 79,  156 => 68,  151 => 36,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 19,  105 => 18,  91 => 34,  62 => 29,  49 => 13,  24 => 13,  25 => 35,  19 => 11,  79 => 37,  72 => 37,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 12,  246 => 99,  157 => 104,  145 => 52,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 50,  111 => 30,  108 => 19,  101 => 43,  98 => 47,  96 => 90,  83 => 32,  74 => 27,  66 => 25,  55 => 21,  52 => 14,  50 => 20,  43 => 11,  41 => 10,  35 => 5,  32 => 16,  29 => 3,  209 => 96,  203 => 93,  199 => 67,  193 => 33,  189 => 71,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 69,  144 => 68,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 52,  109 => 40,  106 => 45,  103 => 46,  99 => 26,  95 => 43,  92 => 45,  86 => 43,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 25,  51 => 24,  48 => 9,  45 => 8,  42 => 7,  39 => 17,  36 => 5,  33 => 4,  30 => 3,);
    }
}
