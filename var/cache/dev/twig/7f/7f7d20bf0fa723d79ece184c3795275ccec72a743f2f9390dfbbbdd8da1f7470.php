<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dbf1e2897c35b19b618752443939ff064806a96c456ecd753d0ef881b9461a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf1e2897c35b19b618752443939ff064806a96c456ecd753d0ef881b9461a46->enter($__internal_dbf1e2897c35b19b618752443939ff064806a96c456ecd753d0ef881b9461a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e7ab78a333d25877acb3e99b09f1cf7d1c1b915385222d84c0a4791f05e71ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ab78a333d25877acb3e99b09f1cf7d1c1b915385222d84c0a4791f05e71ae5->enter($__internal_e7ab78a333d25877acb3e99b09f1cf7d1c1b915385222d84c0a4791f05e71ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf1e2897c35b19b618752443939ff064806a96c456ecd753d0ef881b9461a46->leave($__internal_dbf1e2897c35b19b618752443939ff064806a96c456ecd753d0ef881b9461a46_prof);

        
        $__internal_e7ab78a333d25877acb3e99b09f1cf7d1c1b915385222d84c0a4791f05e71ae5->leave($__internal_e7ab78a333d25877acb3e99b09f1cf7d1c1b915385222d84c0a4791f05e71ae5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de904573ab51e957efb62729c055586d68619b4d2b42404194fcfef728e9e09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de904573ab51e957efb62729c055586d68619b4d2b42404194fcfef728e9e09d->enter($__internal_de904573ab51e957efb62729c055586d68619b4d2b42404194fcfef728e9e09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d1faf79dd34c43d5e7b04c4279c74d64f1e3f692569de7670424ad059b242f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1faf79dd34c43d5e7b04c4279c74d64f1e3f692569de7670424ad059b242f3->enter($__internal_0d1faf79dd34c43d5e7b04c4279c74d64f1e3f692569de7670424ad059b242f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0d1faf79dd34c43d5e7b04c4279c74d64f1e3f692569de7670424ad059b242f3->leave($__internal_0d1faf79dd34c43d5e7b04c4279c74d64f1e3f692569de7670424ad059b242f3_prof);

        
        $__internal_de904573ab51e957efb62729c055586d68619b4d2b42404194fcfef728e9e09d->leave($__internal_de904573ab51e957efb62729c055586d68619b4d2b42404194fcfef728e9e09d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60fefa0486b9fd776812ada5e02b6a56f10faa74f7a5c3348875b0dda3f13805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fefa0486b9fd776812ada5e02b6a56f10faa74f7a5c3348875b0dda3f13805->enter($__internal_60fefa0486b9fd776812ada5e02b6a56f10faa74f7a5c3348875b0dda3f13805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ff3d9ff330853f89b8928adacc213f145d188d680802a023e5075002f3002b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff3d9ff330853f89b8928adacc213f145d188d680802a023e5075002f3002b3->enter($__internal_0ff3d9ff330853f89b8928adacc213f145d188d680802a023e5075002f3002b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0ff3d9ff330853f89b8928adacc213f145d188d680802a023e5075002f3002b3->leave($__internal_0ff3d9ff330853f89b8928adacc213f145d188d680802a023e5075002f3002b3_prof);

        
        $__internal_60fefa0486b9fd776812ada5e02b6a56f10faa74f7a5c3348875b0dda3f13805->leave($__internal_60fefa0486b9fd776812ada5e02b6a56f10faa74f7a5c3348875b0dda3f13805_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_977d5d56a5820fee8e22b6135ea4ed141d8eca14841061adb037b1288a106dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977d5d56a5820fee8e22b6135ea4ed141d8eca14841061adb037b1288a106dfc->enter($__internal_977d5d56a5820fee8e22b6135ea4ed141d8eca14841061adb037b1288a106dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1b02e43cf44d0900a02de0532f04faa70d4cb48a015647f2dfcfb5c66d89f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b02e43cf44d0900a02de0532f04faa70d4cb48a015647f2dfcfb5c66d89f7f->enter($__internal_d1b02e43cf44d0900a02de0532f04faa70d4cb48a015647f2dfcfb5c66d89f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d1b02e43cf44d0900a02de0532f04faa70d4cb48a015647f2dfcfb5c66d89f7f->leave($__internal_d1b02e43cf44d0900a02de0532f04faa70d4cb48a015647f2dfcfb5c66d89f7f_prof);

        
        $__internal_977d5d56a5820fee8e22b6135ea4ed141d8eca14841061adb037b1288a106dfc->leave($__internal_977d5d56a5820fee8e22b6135ea4ed141d8eca14841061adb037b1288a106dfc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/zan/Profil/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
