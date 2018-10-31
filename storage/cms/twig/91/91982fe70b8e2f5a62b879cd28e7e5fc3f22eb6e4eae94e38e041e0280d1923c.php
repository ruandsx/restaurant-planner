<?php

/* C:\Users\ruanl\Desktop\modelagem/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_1ca649a2941c0a9fa55f9657b49e39d8ff900d99f080452517da4b23333f7003 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-user.png");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Account management</h3>
                <p>The user plugin <em>RainLab.User</em> provides the basic account management features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">View Account</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-blog.png");
        echo "\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-forum.png");
        echo "\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>
";
        // line 47
        $context["dias"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 48
        echo "<div class=\"row\">
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 50
            echo "        <div class=\"col-md-4 filter-option\" style=\"text-align: center;\">
            <h2>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dia"], "dia", array()), "d - M"), "html", null, true);
            echo "</h2>
    
    
    
    


        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  101 => 51,  98 => 50,  94 => 49,  91 => 48,  89 => 47,  80 => 41,  71 => 35,  59 => 26,  50 => 20,  38 => 11,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-user.png'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Account management</h3>
                <p>The user plugin <em>RainLab.User</em> provides the basic account management features.</p>
                <br />
                <p>
                    <a href=\"{{ 'account'|page }}\" class=\"btn btn-lg btn-info\" role=\"button\">View Account</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-blog.png'|theme }}\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"{{ 'blog'|page }}\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-forum.png'|theme }}\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"{{ 'forum'|page }}\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>
{% set dias = builderList.records %}
<div class=\"row\">
    {% for dia in dias %}
        <div class=\"col-md-4 filter-option\" style=\"text-align: center;\">
            <h2>{{dia.dia|date('d - M') }}</h2>
    
    
    
    


        </div>
    {% endfor %}    
</div>", "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
