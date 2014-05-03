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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("IbwJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <updated>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : $this->getContext($context, "lastUpdated")), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>
 
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "        <entry>
            <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location"), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "positionslug"))), "html", null, true);
            echo "\" />
            <id>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</id>
            <updated>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 18
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo")) {
                // line 19
                echo "                        <div>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 21
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
            // line 25
            echo "                    <div>
                        ";
            // line 26
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true));
            echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply"), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company"), "html", null, true);
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
        return array (  113 => 35,  104 => 32,  98 => 29,  92 => 26,  89 => 25,  78 => 21,  74 => 20,  71 => 19,  69 => 18,  63 => 15,  59 => 14,  55 => 13,  49 => 12,  46 => 11,  42 => 10,  37 => 8,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
