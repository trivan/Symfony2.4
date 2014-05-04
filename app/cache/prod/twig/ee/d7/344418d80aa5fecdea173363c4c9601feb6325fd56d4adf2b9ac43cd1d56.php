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
        echo "<!DOCTYPE html>
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
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ibw_jobeet_homepage");
        echo "\">
                        <img alt=\"Jobeet Job Board\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" />
                    </a></h1>
 
                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ask for people", array(), "messages");
        echo "</h2>
                            <div>
                                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ibw_job_new");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Post a Job", array(), "messages");
        echo "</a>
                            </div>
                        </div>
 
                        <div class=\"search\">
                            <h2>";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ask for a job", array(), "messages");
        echo "</h2>
                            <form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ibw_job_search");
        echo "\" method=\"get\">
                                <input type=\"text\" name=\"query\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <img id=\"loader\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/loader.gif"), "html", null, true);
        echo "\" style=\"vertical-align: middle; display: none\" />
                                <div class=\"help\">
                                    ";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Enter some keywords (city, country, position, ...)", array(), "messages");
        // line 44
        echo "                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           <div id=\"job_history\">
                ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("Recent viewed jobs:", array(), "messages");
        // line 52
        echo "                <ul>
                    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 54
            echo "                        <li>
                            <a href=\"";
            // line 55
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
        // line 58
        echo "                </ul>
            </div>
           <div id=\"content\">
               ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 62
            echo "                   <div class=\"flash_notice\">
                       ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo " 
               ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 68
            echo "                   <div class=\"flash_error\">
                       ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo " 
               <div class=\"content\">
                   ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "               </div>
           </div>
 
           <div id=\"footer\">
               <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                       </a>
                   </span>
                   <ul>
                       <li><a href=\"\">";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("About Jobeet", array(), "messages");
        echo "</a></li>
                       <li class=\"feed\"><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("ibw_job", array("_format" => "atom"));
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Full feed", array(), "messages");
        echo "</a></li>
                       <li><a href=\"\">";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jobeet API", array(), "messages");
        echo "</a></li>
                       <li class=\"last\"><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("ibw_affiliate_new");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Become an affiliate", array(), "messages");
        echo "</a></li>
                   </ul>
                   <form action=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("IbwJobeetBundle_changeLanguage");
        echo "\" method=\"get\">
                       <label>";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label>
                       <select name=\"language\">
                           <option value=\"en\" ";
        // line 96
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_locale"), "method") == "en")) {
            echo "selected=\"selected\"";
        }
        echo ">English</option>
                                <option value=\"fr\" ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_locale"), "method") == "fr")) {
            echo "selected=\"selected\"";
        }
        echo ">French</option>
                       </select>
                       <input type=\"submit\" value=\"Ok\">
                   </form>
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
        echo "                ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jobeet - Your best job board", array(), "messages");
        // line 7
        echo "            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("ibw_job", array("_format" => "atom"));
        echo "\" />
        ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/search.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 75
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
        return array (  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 11,  251 => 6,  248 => 5,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 67,  152 => 66,  118 => 55,  97 => 44,  90 => 41,  81 => 38,  23 => 1,  150 => 57,  126 => 45,  110 => 38,  77 => 37,  37 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 62,  132 => 51,  128 => 49,  111 => 53,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 7,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 42,  108 => 52,  102 => 32,  71 => 19,  67 => 32,  63 => 17,  59 => 14,  47 => 10,  38 => 6,  94 => 28,  89 => 20,  85 => 39,  79 => 18,  75 => 17,  68 => 14,  56 => 12,  50 => 24,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 3,  40 => 18,  44 => 12,  35 => 10,  31 => 8,  43 => 9,  41 => 7,  28 => 3,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 52,  138 => 51,  136 => 61,  123 => 47,  121 => 46,  117 => 42,  115 => 54,  105 => 40,  101 => 35,  91 => 27,  69 => 25,  66 => 18,  62 => 30,  49 => 19,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 41,  125 => 44,  122 => 44,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 43,  92 => 21,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
