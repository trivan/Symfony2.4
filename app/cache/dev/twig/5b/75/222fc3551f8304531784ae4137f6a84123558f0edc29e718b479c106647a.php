<?php

/* IbwJobeetBundle:Affiliate:email.txt.twig */
class __TwigTemplate_5b75222fc3551f8304531784ae4137f6a84123558f0edc29e718b479c106647a extends Twig_Template
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
        echo "Your affiliate account has been activated.
Your secret token is ";
        // line 2
        echo (isset($context["affiliate"]) ? $context["affiliate"] : $this->getContext($context, "affiliate"));
        echo ".
You can see the jobs list at the following addresses:
http://jobeet.local/app_dev.php/api/";
        // line 4
        echo (isset($context["affiliate"]) ? $context["affiliate"] : $this->getContext($context, "affiliate"));
        echo "/jobs.xml
or http://jobeet.local/app_dev.php/api/";
        // line 5
        echo (isset($context["affiliate"]) ? $context["affiliate"] : $this->getContext($context, "affiliate"));
        echo "/jobs.json
or http://jobeet.local/app_dev.php/api/";
        // line 6
        echo (isset($context["affiliate"]) ? $context["affiliate"] : $this->getContext($context, "affiliate"));
        echo "/jobs.yaml";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Affiliate:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
