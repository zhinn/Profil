<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35ffee33743ffbd83f9ad6fd1ec7622b59996c9a161d25477c9df8c1c240cc39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ffee33743ffbd83f9ad6fd1ec7622b59996c9a161d25477c9df8c1c240cc39->enter($__internal_35ffee33743ffbd83f9ad6fd1ec7622b59996c9a161d25477c9df8c1c240cc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_703b60904af4c51a66d2e0957819b338a1902d6738cd28606c6a440d3058620a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703b60904af4c51a66d2e0957819b338a1902d6738cd28606c6a440d3058620a->enter($__internal_703b60904af4c51a66d2e0957819b338a1902d6738cd28606c6a440d3058620a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_35ffee33743ffbd83f9ad6fd1ec7622b59996c9a161d25477c9df8c1c240cc39->leave($__internal_35ffee33743ffbd83f9ad6fd1ec7622b59996c9a161d25477c9df8c1c240cc39_prof);

        
        $__internal_703b60904af4c51a66d2e0957819b338a1902d6738cd28606c6a440d3058620a->leave($__internal_703b60904af4c51a66d2e0957819b338a1902d6738cd28606c6a440d3058620a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1a7422633dd329f5501ffe2f649962c4b280aa772341018ab24370f607c619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1a7422633dd329f5501ffe2f649962c4b280aa772341018ab24370f607c619->enter($__internal_4b1a7422633dd329f5501ffe2f649962c4b280aa772341018ab24370f607c619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5913856271ad2ebe7490e64d157015a1c95f5a2801f88de5d253b34ad324d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5913856271ad2ebe7490e64d157015a1c95f5a2801f88de5d253b34ad324d18->enter($__internal_b5913856271ad2ebe7490e64d157015a1c95f5a2801f88de5d253b34ad324d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b5913856271ad2ebe7490e64d157015a1c95f5a2801f88de5d253b34ad324d18->leave($__internal_b5913856271ad2ebe7490e64d157015a1c95f5a2801f88de5d253b34ad324d18_prof);

        
        $__internal_4b1a7422633dd329f5501ffe2f649962c4b280aa772341018ab24370f607c619->leave($__internal_4b1a7422633dd329f5501ffe2f649962c4b280aa772341018ab24370f607c619_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ae8c543e4291ac61ff50e4305dfcaaef4b66bf14bfc4d4cf787d42f4808f0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae8c543e4291ac61ff50e4305dfcaaef4b66bf14bfc4d4cf787d42f4808f0a2->enter($__internal_7ae8c543e4291ac61ff50e4305dfcaaef4b66bf14bfc4d4cf787d42f4808f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d331fdc9bff8eb5238d25725fa90180f4310464944aa72006d053eacd9121108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d331fdc9bff8eb5238d25725fa90180f4310464944aa72006d053eacd9121108->enter($__internal_d331fdc9bff8eb5238d25725fa90180f4310464944aa72006d053eacd9121108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d331fdc9bff8eb5238d25725fa90180f4310464944aa72006d053eacd9121108->leave($__internal_d331fdc9bff8eb5238d25725fa90180f4310464944aa72006d053eacd9121108_prof);

        
        $__internal_7ae8c543e4291ac61ff50e4305dfcaaef4b66bf14bfc4d4cf787d42f4808f0a2->leave($__internal_7ae8c543e4291ac61ff50e4305dfcaaef4b66bf14bfc4d4cf787d42f4808f0a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b1e04e0d1dde9afa67ad47229136ff737d7029fc4ee7a4e0e72cd8ca2849744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1e04e0d1dde9afa67ad47229136ff737d7029fc4ee7a4e0e72cd8ca2849744->enter($__internal_4b1e04e0d1dde9afa67ad47229136ff737d7029fc4ee7a4e0e72cd8ca2849744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69c53a8dba2a47a4984ef5416f93c396975371cead8961b5880691cc8b18e950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c53a8dba2a47a4984ef5416f93c396975371cead8961b5880691cc8b18e950->enter($__internal_69c53a8dba2a47a4984ef5416f93c396975371cead8961b5880691cc8b18e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69c53a8dba2a47a4984ef5416f93c396975371cead8961b5880691cc8b18e950->leave($__internal_69c53a8dba2a47a4984ef5416f93c396975371cead8961b5880691cc8b18e950_prof);

        
        $__internal_4b1e04e0d1dde9afa67ad47229136ff737d7029fc4ee7a4e0e72cd8ca2849744->leave($__internal_4b1e04e0d1dde9afa67ad47229136ff737d7029fc4ee7a4e0e72cd8ca2849744_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc1a2bcb8fb2fcf3a296afb8236340fe3231ef4049d7e6987ad9e15074591af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1a2bcb8fb2fcf3a296afb8236340fe3231ef4049d7e6987ad9e15074591af9->enter($__internal_dc1a2bcb8fb2fcf3a296afb8236340fe3231ef4049d7e6987ad9e15074591af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68e753676daeff79091970222cc8bee58b7b45d85acb898795331f50261e8e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e753676daeff79091970222cc8bee58b7b45d85acb898795331f50261e8e83->enter($__internal_68e753676daeff79091970222cc8bee58b7b45d85acb898795331f50261e8e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_68e753676daeff79091970222cc8bee58b7b45d85acb898795331f50261e8e83->leave($__internal_68e753676daeff79091970222cc8bee58b7b45d85acb898795331f50261e8e83_prof);

        
        $__internal_dc1a2bcb8fb2fcf3a296afb8236340fe3231ef4049d7e6987ad9e15074591af9->leave($__internal_dc1a2bcb8fb2fcf3a296afb8236340fe3231ef4049d7e6987ad9e15074591af9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/zan/Profil/app/Resources/views/base.html.twig");
    }
}
