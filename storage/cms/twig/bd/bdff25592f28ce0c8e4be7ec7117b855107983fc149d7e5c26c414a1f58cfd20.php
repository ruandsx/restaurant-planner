<?php

/* C:\xampp\htdocs\restaurant-planner/themes/rainlab-vanilla/pages/404.htm */
class __TwigTemplate_fc4e51c05037851c3cc0f8644989cd3f8d1bf8cb673f087d7d3d870a4a124dcf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>We're sorry, but the page you requested cannot be found.</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>We're sorry, but the page you requested cannot be found.</p>", "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/404.htm", "");
    }
}
