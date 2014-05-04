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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "query"), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 54
            echo "                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_show", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 62
            echo "                   <div class=\"flash_notice\">
                       ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 68
            echo "                   <div class=\"flash_error\">
                       ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_locale"), "method") == "en")) {
            echo "selected=\"selected\"";
        }
        echo ">English</option>
                                <option value=\"fr\" ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_locale"), "method") == "fr")) {
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
        return array (  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 11,  258 => 10,  254 => 7,  251 => 6,  248 => 5,  233 => 97,  227 => 96,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  201 => 89,  197 => 88,  190 => 84,  185 => 82,  177 => 76,  175 => 74,  171 => 72,  162 => 69,  159 => 68,  155 => 67,  152 => 66,  143 => 63,  140 => 62,  136 => 61,  131 => 58,  118 => 55,  115 => 54,  111 => 53,  108 => 52,  106 => 51,  97 => 44,  95 => 43,  90 => 41,  85 => 39,  81 => 38,  67 => 32,  62 => 30,  54 => 25,  50 => 24,  40 => 18,  35 => 10,  31 => 8,  23 => 1,  101 => 34,  93 => 31,  89 => 29,  87 => 27,  84 => 26,  82 => 25,  77 => 37,  70 => 20,  68 => 19,  63 => 16,  61 => 15,  53 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 14,  32 => 4,  29 => 5,);
    }
}
