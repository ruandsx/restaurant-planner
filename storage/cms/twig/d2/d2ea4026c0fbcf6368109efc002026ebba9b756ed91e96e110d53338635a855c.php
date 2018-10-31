<?php

/* C:\Users\ruanl\Desktop\modelagem/themes/rainlab-vanilla/pages/forum.htm */
class __TwigTemplate_b38d87f89d8bb8c2bdd38ad8fbe3082fdd6ac77b68b7117866acb1b260785f57 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumChannels"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/forum.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'forumChannels' %}", "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/forum.htm", "");
    }
}
