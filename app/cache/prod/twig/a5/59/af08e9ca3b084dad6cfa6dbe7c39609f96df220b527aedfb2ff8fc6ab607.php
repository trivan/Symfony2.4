<?php

/* IbwJobeetBundle:Category:show.atom.twig */
class __TwigTemplate_a559af08e9ca3b084dad6cfa6dbe7c39609f96df220b527aedfb2ff8fc6ab607 extends Twig_Template
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
    <title>Jobeet (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <updated>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : null), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : null), "html", null, true);
        echo "</id>
 
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "        <entry>
            <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "positionslug"))), "html", null, true);
            echo "\" />
            <id>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</id>
            <updated>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 18
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo")) {
                // line 19
                echo "                        <div>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 21
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
            // line 25
            echo "                    <div>
                        ";
            // line 26
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true));
            echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply"), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
            echo "</name></author>
        </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  74 => 20,  207 => 11,  185 => 90,  180 => 88,  172 => 83,  167 => 81,  157 => 73,  153 => 71,  137 => 66,  134 => 65,  118 => 60,  96 => 52,  58 => 23,  23 => 3,  148 => 57,  124 => 45,  120 => 44,  104 => 32,  83 => 24,  77 => 22,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 13,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 10,  179 => 69,  159 => 75,  143 => 56,  135 => 53,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 10,  38 => 6,  94 => 28,  89 => 25,  85 => 25,  79 => 18,  75 => 17,  68 => 30,  56 => 10,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 13,  21 => 2,  26 => 3,  98 => 29,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  40 => 15,  44 => 12,  35 => 6,  31 => 5,  43 => 9,  41 => 7,  28 => 5,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 47,  121 => 46,  117 => 44,  115 => 42,  105 => 40,  101 => 32,  91 => 27,  69 => 18,  66 => 18,  62 => 23,  49 => 12,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 68,  141 => 67,  133 => 55,  130 => 41,  125 => 62,  122 => 61,  116 => 41,  112 => 56,  109 => 34,  106 => 33,  103 => 32,  99 => 53,  95 => 28,  92 => 26,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 22,  51 => 14,  48 => 13,  45 => 16,  42 => 10,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
