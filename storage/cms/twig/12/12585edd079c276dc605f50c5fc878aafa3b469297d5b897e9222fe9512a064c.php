<?php

/* C:\xampp\htdocs\restaurant-planner/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_6ab4daf1d8bbb589352410e981aedbc372bbefbc2381f865778de6df626a269b extends Twig_Template
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
        $context["dias"] = twig_get_attribute($this->env, $this->source, ($context["dias"] ?? null), "records", array());
        // line 2
        echo "
<div class=\"row responsive \">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 5
            echo "    <div class=\"thumbnail text-center teste\">
        <br />
        <img src=\"";
            // line 7
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-user.png");
            echo "\" alt=\"RainLab.User\" />
        <div class=\"caption\">
            <h3>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dia"], "dia", array()), "d/m/y"), "html", null, true);
            echo "</h3>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dia"], "pratos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["prato"]) {
                // line 11
                echo "            <p> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prato"], "nome", array()), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  59 => 13,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set dias = dias.records %}

<div class=\"row responsive \">
    {% for dia in dias %}
    <div class=\"thumbnail text-center teste\">
        <br />
        <img src=\"{{ 'assets/images/plugin-user.png'|theme }}\" alt=\"RainLab.User\" />
        <div class=\"caption\">
            <h3>{{ dia.dia |date(\"d/m/y\") }}</h3>
            {% for prato in dia.pratos %}
            <p> {{ prato.nome }}</p>
            {% endfor %}
        </div>
    </div>
    {% endfor %}
</div>", "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
