<?php

/* C:\xampp\htdocs\restaurant-planner/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_cc7b9b9d624a33e392c4a74dc52f7e3740d2f343f057ecfc224ad54af3722b84 extends Twig_Template
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
        $context["ing"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 3
        echo "
<!-- Button trigger modal -->


<!-- Modal -->
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dia"], "pratos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["prato"]) {
                // line 10
                echo "
<div class=\"modal fade\" id=\"exampleModal";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prato"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ingredientes</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">



        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prato"], "ingredientes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["prat"]) {
                    // line 26
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prat"], "ingrediente", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["prati"]) {
                        // line 27
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["ing"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["ingg"]) {
                            // line 28
                            echo "        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["ingg"], "id", array()) == $context["prati"])) {
                                // line 29
                                echo "        <p>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingg"], "nome", array()), "html", null, true);
                                echo "</p>
        ";
                            }
                            // line 31
                            echo "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingg'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prati'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
      </div>
    </div>
  </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "


<div class=\"row responsive \">
  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 50
            echo "  <div class=\"thumbnail text-center teste\">
    <br />
    <img src=\"";
            // line 52
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-user.png");
            echo "\" alt=\"RainLab.User\" />
    <div class=\"caption\">
      <h3>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dia"], "dia", array()), "d/m/y"), "html", null, true);
            echo "</h3>
      ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dia"], "pratos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["prato"]) {
                // line 56
                echo "      <p><a data-toggle=\"modal\" data-target=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prato"], "id", array()), "html", null, true);
                echo "\" style=\"color: #000; text-decoration: none;\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 57
$context["prato"], "nome", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return array (  169 => 62,  161 => 59,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  136 => 52,  132 => 50,  128 => 49,  122 => 45,  104 => 35,  98 => 34,  91 => 32,  85 => 31,  79 => 29,  76 => 28,  71 => 27,  66 => 26,  62 => 25,  45 => 11,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set dias = dias.records %}
{% set ing = builderList.records %}

<!-- Button trigger modal -->


<!-- Modal -->
{% for dia in dias %}
{% for prato in dia.pratos %}

<div class=\"modal fade\" id=\"exampleModal{{prato.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ingredientes</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">



        {% for prat in prato.ingredientes %}
        {% for prati in prat.ingrediente %}
        {% for ingg in ing %}
        {% if ingg.id == prati %}
        <p>{{ ingg.nome }}</p>
        {% endif %}
        {% endfor %}

        {% endfor%}
        {% endfor %}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
      </div>
    </div>
  </div>
</div>
{% endfor %}
{% endfor %}



<div class=\"row responsive \">
  {% for dia in dias %}
  <div class=\"thumbnail text-center teste\">
    <br />
    <img src=\"{{ 'assets/images/plugin-user.png'|theme }}\" alt=\"RainLab.User\" />
    <div class=\"caption\">
      <h3>{{ dia.dia |date(\"d/m/y\") }}</h3>
      {% for prato in dia.pratos %}
      <p><a data-toggle=\"modal\" data-target=\"#exampleModal{{prato.id}}\" style=\"color: #000; text-decoration: none;\"> {{
          prato.nome }}</a></p>
      {% endfor %}
    </div>
  </div>
  {% endfor %}
</div>", "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
