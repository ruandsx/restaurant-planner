<?php

/* C:\Users\ruanl\Desktop\modelagem/themes/rainlab-vanilla/pages/account.htm */
class __TwigTemplate_7d46638d6e739c32363bc58a64a54446f8cf6f64ac01d608c95d4e3532d88331 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />

<p><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
        echo "\">Forgotten your password?</a></p>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'account' %}

<hr />

<p><a href=\"{{ 'forgot-password'|page }}\">Forgotten your password?</a></p>", "C:\\Users\\ruanl\\Desktop\\modelagem/themes/rainlab-vanilla/pages/account.htm", "");
    }
}
