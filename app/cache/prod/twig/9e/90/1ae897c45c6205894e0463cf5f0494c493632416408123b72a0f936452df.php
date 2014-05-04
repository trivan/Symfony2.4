<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_9e901ae897c45c6205894e0463cf5f0494c493632416408123b72a0f936452df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : null))));
        echo "

    <div class=\"row-fluid\">
        ";
        // line 21
        $context["has_center"] = false;
        // line 22
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 23
            echo "            ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                // line 24
                echo "                ";
                $context["has_center"] = true;
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        <div class=\"";
        // line 28
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span3";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 30
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "left")) {
                // line 31
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>

        ";
        // line 36
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            // line 37
            echo "            <div class=\"span4\">
                ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 39
                echo "                    ";
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                    // line 40
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                    echo "
                    ";
                }
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
        }
        // line 45
        echo "
        <div class=\"";
        // line 46
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span4";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "right")) {
                // line 49
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 51
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>

    ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  150 => 48,  146 => 47,  157 => 64,  153 => 49,  34 => 15,  76 => 28,  97 => 33,  70 => 17,  53 => 22,  65 => 26,  52 => 13,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  244 => 99,  236 => 94,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  100 => 41,  96 => 33,  84 => 29,  58 => 23,  167 => 57,  165 => 52,  160 => 54,  145 => 59,  139 => 57,  126 => 45,  118 => 39,  113 => 42,  74 => 26,  249 => 101,  232 => 93,  225 => 12,  222 => 11,  198 => 97,  190 => 92,  185 => 90,  175 => 59,  155 => 75,  152 => 58,  114 => 61,  110 => 41,  23 => 3,  148 => 57,  124 => 52,  120 => 44,  104 => 40,  83 => 22,  77 => 22,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 5,  177 => 84,  169 => 69,  140 => 52,  132 => 47,  128 => 49,  111 => 37,  107 => 36,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  246 => 82,  243 => 88,  240 => 17,  238 => 85,  235 => 16,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 6,  208 => 68,  204 => 80,  179 => 72,  159 => 51,  143 => 71,  135 => 45,  131 => 43,  119 => 40,  108 => 38,  102 => 42,  71 => 29,  67 => 26,  63 => 17,  59 => 13,  47 => 21,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  79 => 28,  75 => 33,  68 => 30,  56 => 21,  50 => 25,  29 => 15,  87 => 23,  72 => 16,  55 => 25,  21 => 2,  26 => 14,  98 => 38,  93 => 26,  88 => 30,  78 => 31,  46 => 9,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 5,  43 => 21,  41 => 20,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 68,  158 => 67,  156 => 59,  151 => 61,  142 => 58,  138 => 46,  136 => 51,  123 => 47,  121 => 51,  117 => 50,  115 => 42,  105 => 35,  101 => 32,  91 => 31,  69 => 32,  66 => 18,  62 => 25,  49 => 10,  24 => 13,  32 => 4,  25 => 5,  22 => 12,  19 => 11,  209 => 82,  203 => 99,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 77,  154 => 58,  149 => 48,  147 => 56,  144 => 49,  141 => 48,  133 => 55,  130 => 65,  125 => 42,  122 => 43,  116 => 39,  112 => 38,  109 => 37,  106 => 44,  103 => 34,  99 => 17,  95 => 27,  92 => 26,  86 => 42,  82 => 33,  80 => 23,  73 => 27,  64 => 25,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 9,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
