<?php

/* knp_menu.html.twig */
class __TwigTemplate_e52f3c4c80c50df47b9d1f68a71410b9d43e8e1cbdb3572e0b4fd8a1a2b16dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('children', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('item', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('linkElement', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('spanElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes");
        // line 17
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 22
            echo "    <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 23
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 28
    public function block_children($context, array $blocks = array())
    {
        // line 30
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 31
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 33
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")))) {
            // line 34
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth") - 1)));
        }
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 41
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        // line 45
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 47
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")) {
                // line 49
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor")) {
                // line 51
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 53
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 54
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 56
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 57
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 59
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 60
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 61
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 64
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
            echo ">";
            // line 65
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 66
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 68
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 71
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 72
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 73
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 74
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 81
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 83
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), "html", null, true);
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 1,  212 => 74,  210 => 73,  167 => 48,  137 => 37,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 115,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  270 => 4,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  274 => 68,  260 => 63,  244 => 65,  225 => 58,  205 => 38,  200 => 55,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  114 => 50,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 96,  327 => 104,  323 => 92,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  301 => 80,  296 => 77,  281 => 75,  237 => 64,  198 => 66,  195 => 54,  192 => 64,  172 => 51,  148 => 35,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  263 => 55,  231 => 47,  216 => 42,  180 => 56,  12 => 34,  20 => 11,  146 => 99,  153 => 49,  124 => 49,  58 => 19,  76 => 82,  53 => 23,  65 => 83,  271 => 76,  259 => 103,  255 => 71,  234 => 48,  213 => 84,  206 => 71,  202 => 68,  186 => 51,  181 => 29,  174 => 47,  170 => 55,  165 => 47,  129 => 59,  160 => 44,  134 => 41,  127 => 42,  100 => 23,  84 => 16,  70 => 23,  113 => 31,  104 => 23,  34 => 15,  289 => 74,  286 => 80,  280 => 16,  275 => 73,  272 => 14,  266 => 66,  261 => 104,  251 => 67,  248 => 5,  233 => 81,  222 => 87,  218 => 59,  211 => 91,  207 => 90,  197 => 54,  190 => 73,  185 => 59,  175 => 53,  155 => 38,  152 => 38,  118 => 28,  97 => 47,  90 => 20,  81 => 15,  23 => 13,  150 => 101,  126 => 55,  110 => 25,  77 => 36,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 3,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 69,  177 => 54,  169 => 49,  140 => 97,  132 => 57,  128 => 47,  107 => 52,  61 => 26,  273 => 96,  269 => 75,  254 => 7,  243 => 83,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 79,  219 => 76,  217 => 75,  208 => 72,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 45,  119 => 93,  102 => 43,  71 => 55,  67 => 25,  63 => 22,  59 => 164,  38 => 7,  94 => 40,  89 => 43,  85 => 86,  75 => 31,  68 => 30,  56 => 23,  87 => 87,  21 => 11,  26 => 14,  93 => 21,  88 => 33,  78 => 36,  46 => 19,  27 => 8,  44 => 18,  31 => 14,  28 => 14,  201 => 56,  196 => 65,  183 => 50,  171 => 72,  166 => 71,  163 => 45,  158 => 59,  156 => 41,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 29,  117 => 34,  105 => 51,  91 => 44,  62 => 82,  49 => 17,  24 => 3,  25 => 12,  19 => 11,  79 => 37,  72 => 10,  69 => 9,  47 => 43,  40 => 20,  37 => 19,  22 => 11,  246 => 66,  157 => 104,  145 => 53,  139 => 31,  131 => 48,  123 => 95,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 24,  96 => 90,  83 => 32,  74 => 11,  66 => 29,  55 => 79,  52 => 78,  50 => 44,  43 => 14,  41 => 18,  35 => 15,  32 => 14,  29 => 15,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 61,  187 => 60,  182 => 57,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 92,  112 => 26,  109 => 53,  106 => 45,  103 => 50,  99 => 91,  95 => 22,  92 => 19,  86 => 17,  82 => 39,  80 => 84,  73 => 24,  64 => 28,  60 => 81,  57 => 80,  54 => 153,  51 => 22,  48 => 21,  45 => 28,  42 => 27,  39 => 17,  36 => 16,  33 => 16,  30 => 9,);
    }
}
