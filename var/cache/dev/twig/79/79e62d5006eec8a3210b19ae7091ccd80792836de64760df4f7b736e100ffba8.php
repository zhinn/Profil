<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_115c1024f5cdc66889422ad7ceb7ed2496e0d6d80185e76228036d062ab17ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115c1024f5cdc66889422ad7ceb7ed2496e0d6d80185e76228036d062ab17ff6->enter($__internal_115c1024f5cdc66889422ad7ceb7ed2496e0d6d80185e76228036d062ab17ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b7ceee30ea956f7b1716b6b8bca9a6bef90d81082e6c53dc62a302d8847e0bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ceee30ea956f7b1716b6b8bca9a6bef90d81082e6c53dc62a302d8847e0bf4->enter($__internal_b7ceee30ea956f7b1716b6b8bca9a6bef90d81082e6c53dc62a302d8847e0bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115c1024f5cdc66889422ad7ceb7ed2496e0d6d80185e76228036d062ab17ff6->leave($__internal_115c1024f5cdc66889422ad7ceb7ed2496e0d6d80185e76228036d062ab17ff6_prof);

        
        $__internal_b7ceee30ea956f7b1716b6b8bca9a6bef90d81082e6c53dc62a302d8847e0bf4->leave($__internal_b7ceee30ea956f7b1716b6b8bca9a6bef90d81082e6c53dc62a302d8847e0bf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_440b315e57b82163f56bc96a11e4934b6c5b71f91e24c1306143ba72a3c30a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440b315e57b82163f56bc96a11e4934b6c5b71f91e24c1306143ba72a3c30a5b->enter($__internal_440b315e57b82163f56bc96a11e4934b6c5b71f91e24c1306143ba72a3c30a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_883688c19de3372b0eb0d798870acea989b5c5a37525b59d233f430716dc485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883688c19de3372b0eb0d798870acea989b5c5a37525b59d233f430716dc485b->enter($__internal_883688c19de3372b0eb0d798870acea989b5c5a37525b59d233f430716dc485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_883688c19de3372b0eb0d798870acea989b5c5a37525b59d233f430716dc485b->leave($__internal_883688c19de3372b0eb0d798870acea989b5c5a37525b59d233f430716dc485b_prof);

        
        $__internal_440b315e57b82163f56bc96a11e4934b6c5b71f91e24c1306143ba72a3c30a5b->leave($__internal_440b315e57b82163f56bc96a11e4934b6c5b71f91e24c1306143ba72a3c30a5b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_024ef3fff71c8c33008980c1ab6e359891aa63e8bb649538b5ba0bebfbfbddb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024ef3fff71c8c33008980c1ab6e359891aa63e8bb649538b5ba0bebfbfbddb3->enter($__internal_024ef3fff71c8c33008980c1ab6e359891aa63e8bb649538b5ba0bebfbfbddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d882caa4aab46ef7715995f6b289ab8103d4af371ffffbf309eac7238f688eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d882caa4aab46ef7715995f6b289ab8103d4af371ffffbf309eac7238f688eab->enter($__internal_d882caa4aab46ef7715995f6b289ab8103d4af371ffffbf309eac7238f688eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d882caa4aab46ef7715995f6b289ab8103d4af371ffffbf309eac7238f688eab->leave($__internal_d882caa4aab46ef7715995f6b289ab8103d4af371ffffbf309eac7238f688eab_prof);

        
        $__internal_024ef3fff71c8c33008980c1ab6e359891aa63e8bb649538b5ba0bebfbfbddb3->leave($__internal_024ef3fff71c8c33008980c1ab6e359891aa63e8bb649538b5ba0bebfbfbddb3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ea71c8560c5d2698e989ddcd89a6c701b0bcc146d546c6184fd0de99d1b7334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea71c8560c5d2698e989ddcd89a6c701b0bcc146d546c6184fd0de99d1b7334->enter($__internal_8ea71c8560c5d2698e989ddcd89a6c701b0bcc146d546c6184fd0de99d1b7334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec1d62bfd63e6afe31dce0497c10990b5873debf441c3f13fec7e249310b940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1d62bfd63e6afe31dce0497c10990b5873debf441c3f13fec7e249310b940a->enter($__internal_ec1d62bfd63e6afe31dce0497c10990b5873debf441c3f13fec7e249310b940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ec1d62bfd63e6afe31dce0497c10990b5873debf441c3f13fec7e249310b940a->leave($__internal_ec1d62bfd63e6afe31dce0497c10990b5873debf441c3f13fec7e249310b940a_prof);

        
        $__internal_8ea71c8560c5d2698e989ddcd89a6c701b0bcc146d546c6184fd0de99d1b7334->leave($__internal_8ea71c8560c5d2698e989ddcd89a6c701b0bcc146d546c6184fd0de99d1b7334_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/zan/Profil/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
