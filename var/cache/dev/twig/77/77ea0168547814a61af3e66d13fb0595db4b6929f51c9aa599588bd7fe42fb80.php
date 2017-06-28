<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0fa9cc1594b3abeeba47e59d50d8feb9086fbd3b0b019fb452273ce6c384a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fa9cc1594b3abeeba47e59d50d8feb9086fbd3b0b019fb452273ce6c384a8b->enter($__internal_b0fa9cc1594b3abeeba47e59d50d8feb9086fbd3b0b019fb452273ce6c384a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_39c44e24b5bed5058c095237779bee5315b6ce0cbb09ca9f6800b513870cc8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c44e24b5bed5058c095237779bee5315b6ce0cbb09ca9f6800b513870cc8f0->enter($__internal_39c44e24b5bed5058c095237779bee5315b6ce0cbb09ca9f6800b513870cc8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0fa9cc1594b3abeeba47e59d50d8feb9086fbd3b0b019fb452273ce6c384a8b->leave($__internal_b0fa9cc1594b3abeeba47e59d50d8feb9086fbd3b0b019fb452273ce6c384a8b_prof);

        
        $__internal_39c44e24b5bed5058c095237779bee5315b6ce0cbb09ca9f6800b513870cc8f0->leave($__internal_39c44e24b5bed5058c095237779bee5315b6ce0cbb09ca9f6800b513870cc8f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a3c153f1ec939c11fb03ccfea29ab62c4bcaab6eba25fd83e90865a5530e642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3c153f1ec939c11fb03ccfea29ab62c4bcaab6eba25fd83e90865a5530e642->enter($__internal_4a3c153f1ec939c11fb03ccfea29ab62c4bcaab6eba25fd83e90865a5530e642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0da3c1e2e2685fabc07eef70d1a62f414b07cbae50fb28c279ff3c2073ac4f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da3c1e2e2685fabc07eef70d1a62f414b07cbae50fb28c279ff3c2073ac4f8a->enter($__internal_0da3c1e2e2685fabc07eef70d1a62f414b07cbae50fb28c279ff3c2073ac4f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0da3c1e2e2685fabc07eef70d1a62f414b07cbae50fb28c279ff3c2073ac4f8a->leave($__internal_0da3c1e2e2685fabc07eef70d1a62f414b07cbae50fb28c279ff3c2073ac4f8a_prof);

        
        $__internal_4a3c153f1ec939c11fb03ccfea29ab62c4bcaab6eba25fd83e90865a5530e642->leave($__internal_4a3c153f1ec939c11fb03ccfea29ab62c4bcaab6eba25fd83e90865a5530e642_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c714196a1b38a7a1cf213947e56c219d4b9ff3e95e2bd22aead497772cb737e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c714196a1b38a7a1cf213947e56c219d4b9ff3e95e2bd22aead497772cb737e0->enter($__internal_c714196a1b38a7a1cf213947e56c219d4b9ff3e95e2bd22aead497772cb737e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_76133752e03a679f951b03c31575d2e4f4ce9d3e4dd8ccd68dbccfa89356f746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76133752e03a679f951b03c31575d2e4f4ce9d3e4dd8ccd68dbccfa89356f746->enter($__internal_76133752e03a679f951b03c31575d2e4f4ce9d3e4dd8ccd68dbccfa89356f746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76133752e03a679f951b03c31575d2e4f4ce9d3e4dd8ccd68dbccfa89356f746->leave($__internal_76133752e03a679f951b03c31575d2e4f4ce9d3e4dd8ccd68dbccfa89356f746_prof);

        
        $__internal_c714196a1b38a7a1cf213947e56c219d4b9ff3e95e2bd22aead497772cb737e0->leave($__internal_c714196a1b38a7a1cf213947e56c219d4b9ff3e95e2bd22aead497772cb737e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bd823fe9834e6b01f791239aa973a3482454b4ab8a095871d2a128255646ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd823fe9834e6b01f791239aa973a3482454b4ab8a095871d2a128255646ca4->enter($__internal_3bd823fe9834e6b01f791239aa973a3482454b4ab8a095871d2a128255646ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2097a1fb0481ab432f620bfee63c0fe268d668f334faadc9a444917121f5bf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2097a1fb0481ab432f620bfee63c0fe268d668f334faadc9a444917121f5bf56->enter($__internal_2097a1fb0481ab432f620bfee63c0fe268d668f334faadc9a444917121f5bf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2097a1fb0481ab432f620bfee63c0fe268d668f334faadc9a444917121f5bf56->leave($__internal_2097a1fb0481ab432f620bfee63c0fe268d668f334faadc9a444917121f5bf56_prof);

        
        $__internal_3bd823fe9834e6b01f791239aa973a3482454b4ab8a095871d2a128255646ca4->leave($__internal_3bd823fe9834e6b01f791239aa973a3482454b4ab8a095871d2a128255646ca4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/zan/Profil/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
