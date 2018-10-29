<?php

/* C:\Users\ruanl\Desktop\modelagem/themes/rainlab-vanilla/pages/blog.htm */
class __TwigTemplate_08bc934d8857c8eed7f53b304d57c3f01158738d6dca174e323dc50564a7b5fe extends Twig_Template
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
    <div class=\"col-md-8\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    </div>
    <div class=\"col-md-4\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/categories"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-8\">
        {% partial 'blog/posts' %}
    </div>
    <div class=\"col-md-4\">
        {% partial 'blog/categories' %}
    </div>
</div>", "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/blog.htm", "");
    }
}
