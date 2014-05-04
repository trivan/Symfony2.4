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
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
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
        if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")), "SonataAdminBundle"), "html", null, true);
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
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
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
        return array (  12 => 34,  81 => 27,  20 => 1,  170 => 55,  150 => 58,  146 => 47,  157 => 58,  153 => 49,  34 => 16,  76 => 28,  97 => 33,  70 => 23,  53 => 16,  65 => 26,  52 => 23,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  244 => 99,  236 => 94,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  100 => 41,  96 => 33,  84 => 28,  58 => 23,  167 => 57,  165 => 52,  160 => 59,  145 => 56,  139 => 59,  126 => 55,  118 => 46,  113 => 46,  74 => 26,  249 => 101,  232 => 93,  225 => 12,  222 => 11,  198 => 97,  190 => 92,  185 => 90,  175 => 59,  155 => 75,  152 => 63,  114 => 61,  110 => 41,  23 => 3,  148 => 57,  124 => 49,  120 => 48,  104 => 42,  83 => 22,  77 => 22,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 5,  177 => 84,  169 => 69,  140 => 53,  132 => 47,  128 => 49,  111 => 43,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 82,  243 => 88,  240 => 17,  238 => 85,  235 => 16,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 6,  208 => 68,  204 => 80,  179 => 72,  159 => 51,  143 => 71,  135 => 45,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 32,  67 => 22,  63 => 27,  59 => 18,  47 => 14,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 25,  68 => 31,  56 => 25,  50 => 15,  29 => 15,  87 => 29,  72 => 30,  55 => 24,  21 => 2,  26 => 14,  98 => 36,  93 => 26,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 15,  43 => 21,  41 => 20,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 60,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 35,  101 => 37,  91 => 39,  69 => 32,  66 => 30,  62 => 25,  49 => 10,  24 => 13,  32 => 4,  25 => 5,  22 => 12,  19 => 11,  209 => 82,  203 => 99,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 77,  154 => 58,  149 => 62,  147 => 56,  144 => 49,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 43,  116 => 47,  112 => 38,  109 => 45,  106 => 44,  103 => 41,  99 => 17,  95 => 40,  92 => 32,  86 => 42,  82 => 36,  80 => 23,  73 => 24,  64 => 25,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 9,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
