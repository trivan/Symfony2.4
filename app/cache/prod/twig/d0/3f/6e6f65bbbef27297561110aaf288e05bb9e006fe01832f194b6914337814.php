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
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : null), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : null), "html", null, true);
        echo "</id>
 
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "            <entry>
                <title>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
                echo ")</title>
                <link href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "positionslug"))), "html", null, true);
                echo "\" />
                <id>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "</id>
                <updated>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
                <summary type=\"xhtml\">
                    <div xmlns=\"http://www.w3.org/1999/xhtml\">
                        ";
                // line 20
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo")) {
                    // line 21
                    echo "                            <div>
                                <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                    echo "\">
                                    <img src=\"http://";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "host"), "html", null, true);
                    echo "/uploads/jobs/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
                    echo " logo\" />
                                </a>
                            </div>
                        ";
                }
                // line 27
                echo "                        <div>
                            ";
                // line 28
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true));
                echo "
                        </div>
                        <h4>How to apply?</h4>
                        <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply"), "html", null, true);
                echo "</p>
                    </div>
                </summary>
                <author><name>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
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
        return array (  110 => 34,  65 => 16,  52 => 13,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  184 => 72,  172 => 66,  96 => 33,  84 => 23,  160 => 54,  139 => 44,  118 => 39,  113 => 35,  74 => 20,  232 => 93,  225 => 14,  222 => 13,  215 => 11,  212 => 10,  207 => 6,  188 => 73,  180 => 85,  175 => 59,  167 => 57,  165 => 56,  161 => 73,  152 => 58,  145 => 47,  126 => 41,  100 => 35,  81 => 37,  58 => 19,  23 => 3,  148 => 57,  124 => 45,  120 => 44,  104 => 31,  83 => 24,  77 => 21,  37 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 75,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 42,  128 => 49,  111 => 37,  107 => 55,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 43,  131 => 49,  119 => 37,  108 => 38,  102 => 32,  71 => 19,  67 => 21,  63 => 17,  59 => 14,  47 => 12,  38 => 9,  94 => 28,  89 => 29,  85 => 27,  79 => 26,  75 => 20,  68 => 30,  56 => 12,  50 => 10,  29 => 6,  87 => 25,  72 => 16,  55 => 14,  21 => 2,  26 => 5,  98 => 28,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 3,  40 => 8,  44 => 13,  35 => 6,  31 => 5,  43 => 11,  41 => 7,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 67,  138 => 54,  136 => 51,  123 => 47,  121 => 46,  117 => 44,  115 => 42,  105 => 35,  101 => 32,  91 => 27,  69 => 17,  66 => 18,  62 => 16,  49 => 12,  24 => 4,  32 => 5,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 92,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 59,  154 => 58,  149 => 48,  147 => 56,  144 => 49,  141 => 48,  133 => 64,  130 => 63,  125 => 38,  122 => 43,  116 => 41,  112 => 37,  109 => 39,  106 => 33,  103 => 36,  99 => 35,  95 => 27,  92 => 26,  86 => 28,  82 => 27,  80 => 22,  73 => 24,  64 => 17,  60 => 20,  57 => 13,  54 => 12,  51 => 15,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 5,);
    }
}
