<?php

/* IbwJobeetBundle:Job:index.atom.twig */
class __TwigTemplate_d03f6e6f65bbbef27297561110aaf288e05bb9e006fe01832f194b6914337814 extends Twig_Template
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
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("ibw_job", array("_format" => "atom"));
        echo "\" rel=\"self\"/>
    <link href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ibw_jobeet_homepage");
        echo "\"/>
    <updated>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : $this->getContext($context, "lastUpdated")), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>
 
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "            <entry>
                <title>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location"), "html", null, true);
                echo ")</title>
                <link href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "positionslug"))), "html", null, true);
                echo "\" />
                <id>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</id>
                <updated>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
                <summary type=\"xhtml\">
                    <div xmlns=\"http://www.w3.org/1999/xhtml\">
                        ";
                // line 20
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo")) {
                    // line 21
                    echo "                            <div>
                                <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
                    echo "\">
                                    <img src=\"http://";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
                    echo "/uploads/jobs/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
                    echo " logo\" />
                                </a>
                            </div>
                        ";
                }
                // line 27
                echo "                        <div>
                            ";
                // line 28
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true));
                echo "
                        </div>
                        <h4>How to apply?</h4>
                        <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply"), "html", null, true);
                echo "</p>
                    </div>
                </summary>
                <author><name>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
                echo "</name></author>
            </entry>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  271 => 109,  259 => 103,  255 => 102,  234 => 93,  213 => 84,  206 => 80,  202 => 79,  186 => 72,  181 => 70,  174 => 66,  170 => 65,  165 => 63,  129 => 41,  160 => 55,  134 => 41,  127 => 39,  100 => 32,  84 => 23,  70 => 20,  113 => 36,  104 => 31,  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 110,  272 => 14,  266 => 107,  261 => 104,  251 => 101,  248 => 5,  233 => 97,  222 => 87,  218 => 86,  211 => 91,  207 => 90,  197 => 77,  190 => 73,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 55,  97 => 29,  90 => 28,  81 => 38,  23 => 3,  150 => 57,  126 => 45,  110 => 34,  77 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 91,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  107 => 34,  61 => 15,  273 => 96,  269 => 94,  254 => 7,  243 => 88,  240 => 86,  238 => 94,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  119 => 37,  102 => 32,  71 => 19,  67 => 32,  63 => 17,  59 => 17,  38 => 9,  94 => 28,  89 => 25,  85 => 24,  75 => 20,  68 => 14,  56 => 12,  87 => 25,  21 => 2,  26 => 5,  93 => 28,  88 => 26,  78 => 21,  46 => 9,  27 => 3,  44 => 10,  31 => 5,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 59,  156 => 66,  151 => 49,  142 => 52,  138 => 51,  136 => 61,  121 => 38,  117 => 42,  105 => 40,  91 => 27,  62 => 30,  49 => 12,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 21,  69 => 17,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 99,  157 => 54,  145 => 46,  139 => 45,  131 => 58,  123 => 38,  120 => 37,  115 => 54,  111 => 53,  108 => 32,  101 => 35,  98 => 28,  96 => 31,  83 => 25,  74 => 20,  66 => 18,  55 => 14,  52 => 13,  50 => 24,  43 => 11,  41 => 8,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 56,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 40,  125 => 38,  122 => 44,  116 => 35,  112 => 33,  109 => 34,  106 => 37,  103 => 32,  99 => 30,  95 => 27,  92 => 26,  86 => 28,  82 => 24,  80 => 22,  73 => 22,  64 => 17,  60 => 6,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 7,  36 => 8,  33 => 7,  30 => 5,);
    }
}
