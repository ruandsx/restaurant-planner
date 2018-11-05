<?php

/* C:\xampp\htdocs\restaurant-planner/themes/rainlab-vanilla/pages/blog/post.htm */
class __TwigTemplate_8f86efcf3fc57023ae924d6fd3ab837003c7999585888a91270df205c514a6d5 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />
<h4>Comments</h4>
";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumEmbedTopic"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 8
            echo "    <p>Please <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
            echo "\">sign in</a> to comment!</p>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 6,  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}

<hr />
<h4>Comments</h4>
{% if user %}
    {% component 'forumEmbedTopic' %}
{% else %}
    <p>Please <a href=\"{{ 'account'|page }}\">sign in</a> to comment!</p>
{% endif %}", "C:\\xampp\\htdocs\\restaurant-planner/themes/rainlab-vanilla/pages/blog/post.htm", "");
    }
}
