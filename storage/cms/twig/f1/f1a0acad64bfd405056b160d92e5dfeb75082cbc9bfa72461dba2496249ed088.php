<?php

/* C:\xampp\htdocs\restaurant-planner/themes/rainlab-vanilla/partials/footer.htm */
class __TwigTemplate_d783edfb3ac11722f8d1a9c458a1ea459b489b8a4bb204ad96756227d51b79d7 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy;";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Grupo 2 - Modelagem de Sistemas</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy;{{ \"now\"|date(\"Y\") }} Grupo 2 - Modelagem de Sistemas</p>
    </div>
</div>", "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/partials/footer.htm", "");
    }
}
