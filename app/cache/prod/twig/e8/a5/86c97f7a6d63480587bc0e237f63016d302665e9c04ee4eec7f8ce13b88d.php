<?php

/* IbwJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_e8a586c97f7a6d63480587bc0e237f63016d302665e9c04ee4eec7f8ce13b88d extends Twig_Template
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
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated"))) {
            // line 5
            echo "            <ul>
                <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo "</a></li>
                <li>
                    <form action=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\" method=\"post\">
                        ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : null), 'widget');
            echo "
                            <button type=\"submit\">";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("Publish", array(), "messages");
            echo "</button>
                    </form>
                </li>
            </ul>
        ";
        }
        // line 15
        echo "        <li>
            <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                    <button type=\"submit\" onclick=\"if(!confirm('";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Are you sure?", array(), "messages");
        echo "')) { return false; }\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "messages");
        echo "</button>
            </form>
        </li>
        ";
        // line 21
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated")) {
            // line 22
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 23
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isExpired")) {
                // line 24
                echo "                    ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Expired", array(), "messages");
                // line 25
                echo "                ";
            } else {
                // line 26
                echo "                    ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Expires in %count% days", array("%count%" => (("<strong>" . $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "getDaysBeforeExpires")) . "</strong>")), "messages");
                // line 27
                echo "                ";
            }
            // line 28
            echo " 
                ";
            // line 29
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresSoon")) {
                // line 30
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_extend", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 31
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : null), 'widget');
                echo "
                            <button type=\"submit\" value=\"Extend\">";
                // line 32
                echo $this->env->getExtension('translator')->getTranslator()->trans("Extend", array(), "messages");
                echo "</button> ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("for another 30 days", array(), "messages");
                // line 33
                echo "                    </form>
                ";
            }
            // line 35
            echo "            </li>
        ";
        } else {
            // line 37
            echo "            <li>
                [";
            // line 38
            echo $this->env->getExtension('translator')->getTranslator()->trans("Bookmark this %url% to manage this job in the future", array("%url%" => (("<a href=\"" . $this->env->getExtension('routing')->getUrl("ibw_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "positionslug")))) . "\">URL</a>")), "messages");
            echo ".]
            </li>
        ";
        }
        // line 41
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  120 => 37,  160 => 55,  157 => 54,  134 => 41,  127 => 39,  100 => 32,  84 => 25,  70 => 20,  52 => 15,  113 => 36,  104 => 31,  74 => 20,  34 => 5,  289 => 75,  286 => 74,  280 => 16,  275 => 15,  272 => 14,  266 => 12,  261 => 11,  251 => 6,  248 => 5,  233 => 97,  222 => 94,  218 => 93,  211 => 91,  207 => 90,  197 => 88,  190 => 84,  185 => 82,  175 => 74,  155 => 51,  152 => 66,  118 => 55,  97 => 29,  90 => 28,  81 => 38,  23 => 3,  150 => 57,  126 => 45,  110 => 38,  77 => 23,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 10,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  111 => 53,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 7,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 96,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 63,  135 => 53,  131 => 58,  119 => 42,  108 => 32,  102 => 32,  71 => 21,  67 => 32,  63 => 18,  59 => 17,  47 => 10,  38 => 7,  94 => 28,  89 => 25,  85 => 25,  79 => 18,  75 => 22,  68 => 14,  56 => 10,  50 => 24,  29 => 6,  87 => 25,  72 => 21,  55 => 16,  21 => 2,  26 => 5,  98 => 29,  93 => 28,  88 => 26,  78 => 21,  46 => 9,  27 => 4,  40 => 9,  44 => 10,  35 => 7,  31 => 5,  43 => 10,  41 => 8,  28 => 5,  201 => 89,  196 => 90,  183 => 82,  171 => 72,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 49,  142 => 52,  138 => 51,  136 => 61,  123 => 38,  121 => 38,  117 => 42,  115 => 54,  105 => 40,  101 => 35,  91 => 27,  69 => 18,  66 => 18,  62 => 30,  49 => 12,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 57,  164 => 59,  162 => 69,  154 => 58,  149 => 51,  147 => 58,  144 => 45,  141 => 48,  133 => 49,  130 => 40,  125 => 44,  122 => 44,  116 => 35,  112 => 33,  109 => 34,  106 => 51,  103 => 32,  99 => 30,  95 => 43,  92 => 26,  86 => 28,  82 => 24,  80 => 23,  73 => 22,  64 => 17,  60 => 13,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 7,  36 => 8,  33 => 4,  30 => 5,);
    }
}
