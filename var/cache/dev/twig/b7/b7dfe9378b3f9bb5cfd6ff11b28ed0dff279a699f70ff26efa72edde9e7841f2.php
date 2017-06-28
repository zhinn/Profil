<?php

/* AppBundle:Front:index.html.twig */
class __TwigTemplate_e4cbfb566623eb9f8922483af335b35c64ff6a6e36d30c408bdda0b56e6d990c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ab34ecc1bd7606b58fed9b66267500ed8dc0bc07f221f58cc44b901b5b0fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ab34ecc1bd7606b58fed9b66267500ed8dc0bc07f221f58cc44b901b5b0fe8->enter($__internal_59ab34ecc1bd7606b58fed9b66267500ed8dc0bc07f221f58cc44b901b5b0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Front:index.html.twig"));

        $__internal_f76b6c7fc55f009f9219aa68f4d5cad82e5af861cc89743b697eea1a546f178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76b6c7fc55f009f9219aa68f4d5cad82e5af861cc89743b697eea1a546f178f->enter($__internal_f76b6c7fc55f009f9219aa68f4d5cad82e5af861cc89743b697eea1a546f178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ab34ecc1bd7606b58fed9b66267500ed8dc0bc07f221f58cc44b901b5b0fe8->leave($__internal_59ab34ecc1bd7606b58fed9b66267500ed8dc0bc07f221f58cc44b901b5b0fe8_prof);

        
        $__internal_f76b6c7fc55f009f9219aa68f4d5cad82e5af861cc89743b697eea1a546f178f->leave($__internal_f76b6c7fc55f009f9219aa68f4d5cad82e5af861cc89743b697eea1a546f178f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_468c1eb49b6961c47224ba65eaa4709ebadb993b71a02346611cd1dcb43bb543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468c1eb49b6961c47224ba65eaa4709ebadb993b71a02346611cd1dcb43bb543->enter($__internal_468c1eb49b6961c47224ba65eaa4709ebadb993b71a02346611cd1dcb43bb543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_981fe73c5fca5c43173852a3e13cfeb8bd27bc8236e58156f15ca261574d63bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981fe73c5fca5c43173852a3e13cfeb8bd27bc8236e58156f15ca261574d63bb->enter($__internal_981fe73c5fca5c43173852a3e13cfeb8bd27bc8236e58156f15ca261574d63bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Front:index";
        
        $__internal_981fe73c5fca5c43173852a3e13cfeb8bd27bc8236e58156f15ca261574d63bb->leave($__internal_981fe73c5fca5c43173852a3e13cfeb8bd27bc8236e58156f15ca261574d63bb_prof);

        
        $__internal_468c1eb49b6961c47224ba65eaa4709ebadb993b71a02346611cd1dcb43bb543->leave($__internal_468c1eb49b6961c47224ba65eaa4709ebadb993b71a02346611cd1dcb43bb543_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b1685e692ecf651995e817bd21567aaaf9a271b659fa242fc7cf1d13858454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b1685e692ecf651995e817bd21567aaaf9a271b659fa242fc7cf1d13858454->enter($__internal_e2b1685e692ecf651995e817bd21567aaaf9a271b659fa242fc7cf1d13858454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fc7253d7324b09625e830df28cbb89f745255597317cfb83d1e792b4bf45c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc7253d7324b09625e830df28cbb89f745255597317cfb83d1e792b4bf45c2b->enter($__internal_8fc7253d7324b09625e830df28cbb89f745255597317cfb83d1e792b4bf45c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Front:index page</h1>
";
        
        $__internal_8fc7253d7324b09625e830df28cbb89f745255597317cfb83d1e792b4bf45c2b->leave($__internal_8fc7253d7324b09625e830df28cbb89f745255597317cfb83d1e792b4bf45c2b_prof);

        
        $__internal_e2b1685e692ecf651995e817bd21567aaaf9a271b659fa242fc7cf1d13858454->leave($__internal_e2b1685e692ecf651995e817bd21567aaaf9a271b659fa242fc7cf1d13858454_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Front:index{% endblock %}

{% block body %}
<h1>Welcome to the Front:index page</h1>
{% endblock %}
", "AppBundle:Front:index.html.twig", "/home/zan/Profil/src/AppBundle/Resources/views/Front/index.html.twig");
    }
}
