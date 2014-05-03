<?php

/* IbwJobeetBundle:Affiliate:wait.html.twig */
class __TwigTemplate_c4b070a3d41027038447c741f24bf62edf92d36f8b789dd4cd3f05051bc960fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content\">
        <h1>Your affiliate account has been created</h1>
        <div style=\"padding: 20px\">
            Thank you!
            You will receive an email with your affiliate token
            as soon as your account will be activated.
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Affiliate:wait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
