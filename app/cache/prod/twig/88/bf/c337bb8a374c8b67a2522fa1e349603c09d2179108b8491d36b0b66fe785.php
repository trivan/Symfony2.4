<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_88bfc337bb8a374c8b67a2522fa1e349603c09d2179108b8491d36b0b66fe785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 19
        echo "    </div>
";
    }

    // line 22
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"sonata-ba-delete\">

        <h1>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")), "SonataAdminBundle"), "html", null, true);
        echo "

        <div class=\"well well-small form-actions\">
            <form method=\"POST\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\">

                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                ";
        // line 37
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 38
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-white icon-edit\"></i>
                        ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 44
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  198 => 55,  192 => 53,  174 => 47,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  186 => 51,  180 => 49,  175 => 33,  12 => 34,  52 => 24,  20 => 11,  118 => 46,  150 => 27,  146 => 47,  97 => 69,  126 => 25,  153 => 49,  145 => 56,  110 => 144,  65 => 29,  34 => 16,  74 => 28,  81 => 36,  76 => 34,  53 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  211 => 84,  200 => 79,  195 => 54,  184 => 72,  172 => 46,  152 => 63,  124 => 49,  83 => 15,  96 => 33,  58 => 22,  216 => 42,  213 => 74,  206 => 58,  191 => 6,  188 => 73,  165 => 52,  157 => 29,  139 => 59,  120 => 49,  37 => 18,  23 => 11,  170 => 55,  160 => 59,  155 => 38,  134 => 42,  127 => 40,  113 => 48,  104 => 42,  100 => 43,  90 => 57,  84 => 36,  77 => 13,  70 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 87,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  111 => 30,  107 => 46,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  246 => 66,  243 => 88,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 153,  119 => 148,  108 => 42,  102 => 79,  71 => 32,  67 => 30,  63 => 28,  59 => 26,  47 => 22,  38 => 21,  94 => 40,  89 => 17,  85 => 37,  79 => 34,  75 => 32,  68 => 30,  56 => 25,  50 => 23,  29 => 14,  87 => 38,  72 => 31,  55 => 25,  21 => 11,  26 => 12,  98 => 42,  93 => 40,  88 => 37,  78 => 21,  46 => 8,  27 => 14,  40 => 13,  44 => 21,  35 => 20,  31 => 15,  43 => 20,  41 => 19,  28 => 14,  201 => 56,  196 => 10,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 52,  121 => 51,  117 => 49,  115 => 45,  105 => 45,  101 => 37,  91 => 40,  69 => 30,  66 => 17,  62 => 14,  49 => 23,  24 => 12,  32 => 19,  25 => 13,  22 => 12,  19 => 11,  209 => 14,  203 => 39,  199 => 11,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 56,  144 => 46,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 45,  103 => 44,  99 => 23,  95 => 19,  92 => 34,  86 => 25,  82 => 31,  80 => 14,  73 => 34,  64 => 24,  60 => 27,  57 => 26,  54 => 26,  51 => 26,  48 => 25,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 13,);
    }
}
