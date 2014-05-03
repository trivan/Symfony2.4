<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_cc30ac01c2cbba04c30a9136d3d3115a44e851818f5327b5e139cac0d9fa86d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 34
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'side_menu' => array($this, 'block_side_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 24
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 25
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 26
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 27
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 28
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 29
        echo "    </div>
";
    }

    // line 32
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 36
    public function block_form($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  12 => 34,  81 => 27,  20 => 1,  170 => 55,  150 => 58,  146 => 47,  34 => 16,  76 => 28,  97 => 33,  70 => 23,  53 => 16,  110 => 41,  65 => 26,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  152 => 63,  100 => 41,  84 => 28,  175 => 59,  165 => 52,  160 => 59,  126 => 55,  113 => 46,  207 => 11,  185 => 90,  180 => 88,  172 => 66,  167 => 57,  153 => 49,  137 => 66,  134 => 65,  118 => 46,  58 => 23,  23 => 3,  148 => 57,  124 => 49,  104 => 42,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 13,  177 => 65,  169 => 69,  140 => 53,  132 => 47,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 80,  179 => 72,  159 => 51,  143 => 56,  135 => 45,  119 => 40,  102 => 42,  71 => 32,  67 => 22,  63 => 27,  59 => 18,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  75 => 25,  68 => 31,  56 => 25,  87 => 29,  21 => 2,  26 => 14,  93 => 26,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  121 => 51,  117 => 50,  105 => 35,  91 => 39,  62 => 25,  49 => 6,  24 => 13,  25 => 5,  19 => 11,  79 => 35,  72 => 30,  69 => 32,  47 => 14,  40 => 8,  37 => 7,  22 => 12,  246 => 90,  157 => 58,  145 => 56,  139 => 59,  131 => 43,  123 => 48,  120 => 48,  115 => 45,  111 => 43,  108 => 42,  101 => 37,  98 => 36,  96 => 33,  83 => 22,  74 => 26,  66 => 30,  55 => 24,  52 => 23,  50 => 15,  43 => 21,  41 => 20,  35 => 6,  32 => 5,  29 => 15,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 62,  147 => 56,  144 => 68,  141 => 67,  133 => 51,  130 => 57,  125 => 42,  122 => 61,  116 => 47,  112 => 38,  109 => 45,  106 => 44,  103 => 41,  99 => 17,  95 => 40,  92 => 32,  86 => 28,  82 => 36,  80 => 23,  73 => 24,  64 => 25,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 9,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
