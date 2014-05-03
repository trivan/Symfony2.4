<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_382e4b302215bc00d89e6f23828c36ae00f759eb68f43333077c25c969715c5a extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : null))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : null), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 18,  76 => 27,  97 => 32,  70 => 17,  53 => 24,  110 => 41,  65 => 26,  52 => 13,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  152 => 58,  100 => 41,  84 => 26,  175 => 59,  165 => 56,  160 => 54,  145 => 59,  139 => 57,  126 => 45,  113 => 42,  74 => 26,  207 => 11,  185 => 90,  180 => 88,  172 => 66,  167 => 57,  157 => 64,  153 => 62,  137 => 66,  134 => 65,  118 => 39,  96 => 33,  58 => 22,  23 => 3,  148 => 57,  124 => 52,  120 => 44,  104 => 40,  83 => 22,  77 => 22,  37 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 13,  177 => 65,  169 => 69,  140 => 52,  132 => 47,  128 => 49,  111 => 37,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 80,  179 => 72,  159 => 75,  143 => 56,  135 => 48,  131 => 44,  119 => 37,  108 => 38,  102 => 42,  71 => 29,  67 => 31,  63 => 17,  59 => 13,  47 => 21,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  79 => 28,  75 => 33,  68 => 30,  56 => 21,  50 => 25,  29 => 15,  87 => 23,  72 => 16,  55 => 25,  21 => 2,  26 => 14,  98 => 38,  93 => 26,  88 => 36,  78 => 31,  46 => 9,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 5,  43 => 21,  41 => 20,  28 => 5,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 54,  136 => 51,  123 => 47,  121 => 51,  117 => 50,  115 => 42,  105 => 35,  101 => 32,  91 => 38,  69 => 32,  66 => 18,  62 => 25,  49 => 6,  24 => 13,  32 => 5,  25 => 5,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 59,  154 => 58,  149 => 48,  147 => 56,  144 => 68,  141 => 67,  133 => 55,  130 => 41,  125 => 41,  122 => 61,  116 => 43,  112 => 47,  109 => 19,  106 => 44,  103 => 36,  99 => 17,  95 => 27,  92 => 26,  86 => 28,  82 => 33,  80 => 23,  73 => 24,  64 => 15,  60 => 24,  57 => 27,  54 => 26,  51 => 15,  48 => 9,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 16,  30 => 15,);
    }
}
