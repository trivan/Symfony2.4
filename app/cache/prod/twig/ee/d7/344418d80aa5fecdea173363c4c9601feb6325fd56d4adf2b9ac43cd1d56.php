<?php

/* IbwJobeetBundle::layout.html.twig */
class __TwigTemplate_eed7344418d80aa5fecdea173363c4c9601feb6325fd56d4adf2b9ac43cd1d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("ibw_job", array("_format" => "atom"));
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ibw_jobeet_homepage");
        echo "\">
                        <img alt=\"Jobeet Job Board\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" />
                    </a></h1>
 
                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ibw_job_new");
        echo "\">Post a Job</a>
                            </div>
                        </div>
 
                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
 <div id=\"job_history\">
    Recent viewed jobs:
    <ul>
        ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 52
            echo "            <li>
                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_show", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "positionslug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "position"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
</div>

           <div id=\"content\">
               ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            echo "                   <div class=\"flash_notice\">
                       ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " 
               ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "                   <div class=\"flash_error\">
                       ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo " 
               <div class=\"content\">
                   ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "               </div>
           </div>
 
           <div id=\"footer\">
               <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                       </a>
                   </span>
                   <ul>
                       <li><a href=\"\">About Jobeet</a></li>
                       <li class=\"feed\"><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ibw_job", array("_format" => "atom"));
        echo "\">Full feed</a></li>
                       <li><a href=\"\">Jobeet API</a></li>
                       <li class=\"last\"><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("ibw_affiliate_new");
        echo "\">Become an affiliate</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                Jobeet - Your best job board
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 11,  185 => 90,  180 => 88,  172 => 83,  167 => 81,  157 => 73,  153 => 71,  137 => 66,  134 => 65,  118 => 60,  96 => 52,  58 => 23,  23 => 1,  148 => 57,  124 => 45,  120 => 44,  104 => 37,  83 => 24,  77 => 22,  37 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 13,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 74,  221 => 73,  219 => 76,  217 => 14,  208 => 68,  204 => 10,  179 => 69,  159 => 75,  143 => 56,  135 => 53,  131 => 49,  119 => 42,  108 => 38,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  47 => 10,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 30,  56 => 12,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 3,  40 => 15,  44 => 12,  35 => 10,  31 => 8,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 5,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  123 => 47,  121 => 46,  117 => 44,  115 => 42,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 18,  62 => 23,  49 => 19,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 6,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 68,  141 => 67,  133 => 55,  130 => 41,  125 => 62,  122 => 61,  116 => 41,  112 => 56,  109 => 34,  106 => 33,  103 => 32,  99 => 53,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 22,  51 => 14,  48 => 13,  45 => 16,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
