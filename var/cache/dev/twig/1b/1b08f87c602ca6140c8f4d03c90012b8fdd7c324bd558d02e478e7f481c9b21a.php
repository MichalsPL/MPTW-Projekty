<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
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
        $__internal_1af2abf9d976187c209e0419604421732994a4fcd73e87419436b34900ed43bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af2abf9d976187c209e0419604421732994a4fcd73e87419436b34900ed43bf->enter($__internal_1af2abf9d976187c209e0419604421732994a4fcd73e87419436b34900ed43bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bd8f6fe12e6efc149c6daf500bd1bb36f5423ae1167f7293fa533dbaa2808b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8f6fe12e6efc149c6daf500bd1bb36f5423ae1167f7293fa533dbaa2808b9b->enter($__internal_bd8f6fe12e6efc149c6daf500bd1bb36f5423ae1167f7293fa533dbaa2808b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1af2abf9d976187c209e0419604421732994a4fcd73e87419436b34900ed43bf->leave($__internal_1af2abf9d976187c209e0419604421732994a4fcd73e87419436b34900ed43bf_prof);

        
        $__internal_bd8f6fe12e6efc149c6daf500bd1bb36f5423ae1167f7293fa533dbaa2808b9b->leave($__internal_bd8f6fe12e6efc149c6daf500bd1bb36f5423ae1167f7293fa533dbaa2808b9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2efda9ddabeb848b288104dcb6c5e74d6d4fc85605812a9a2d585043b43d3edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efda9ddabeb848b288104dcb6c5e74d6d4fc85605812a9a2d585043b43d3edf->enter($__internal_2efda9ddabeb848b288104dcb6c5e74d6d4fc85605812a9a2d585043b43d3edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb08ab5d67fd887d202d4488231fb1cbae56d7f1a2223e7614364ac0fdef2030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb08ab5d67fd887d202d4488231fb1cbae56d7f1a2223e7614364ac0fdef2030->enter($__internal_eb08ab5d67fd887d202d4488231fb1cbae56d7f1a2223e7614364ac0fdef2030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eb08ab5d67fd887d202d4488231fb1cbae56d7f1a2223e7614364ac0fdef2030->leave($__internal_eb08ab5d67fd887d202d4488231fb1cbae56d7f1a2223e7614364ac0fdef2030_prof);

        
        $__internal_2efda9ddabeb848b288104dcb6c5e74d6d4fc85605812a9a2d585043b43d3edf->leave($__internal_2efda9ddabeb848b288104dcb6c5e74d6d4fc85605812a9a2d585043b43d3edf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58ff2c0fd1ac9941d9e799b07626d432bd0b1c207e4740fcd46d9bcf2ce21414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ff2c0fd1ac9941d9e799b07626d432bd0b1c207e4740fcd46d9bcf2ce21414->enter($__internal_58ff2c0fd1ac9941d9e799b07626d432bd0b1c207e4740fcd46d9bcf2ce21414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7f4ec3b10e40f21edff5effca2489711370047ab700b7061ccb28068a779c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4ec3b10e40f21edff5effca2489711370047ab700b7061ccb28068a779c22->enter($__internal_c7f4ec3b10e40f21edff5effca2489711370047ab700b7061ccb28068a779c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7f4ec3b10e40f21edff5effca2489711370047ab700b7061ccb28068a779c22->leave($__internal_c7f4ec3b10e40f21edff5effca2489711370047ab700b7061ccb28068a779c22_prof);

        
        $__internal_58ff2c0fd1ac9941d9e799b07626d432bd0b1c207e4740fcd46d9bcf2ce21414->leave($__internal_58ff2c0fd1ac9941d9e799b07626d432bd0b1c207e4740fcd46d9bcf2ce21414_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf7835ede9b7697965efbbdcc463eb85743a3f5d12d0351204b0b6fabe361e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf7835ede9b7697965efbbdcc463eb85743a3f5d12d0351204b0b6fabe361e5->enter($__internal_ecf7835ede9b7697965efbbdcc463eb85743a3f5d12d0351204b0b6fabe361e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf789048576242c22c96c20bb13decdbfeee29f2639766d61c1edbfc1fb020e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf789048576242c22c96c20bb13decdbfeee29f2639766d61c1edbfc1fb020e8->enter($__internal_bf789048576242c22c96c20bb13decdbfeee29f2639766d61c1edbfc1fb020e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bf789048576242c22c96c20bb13decdbfeee29f2639766d61c1edbfc1fb020e8->leave($__internal_bf789048576242c22c96c20bb13decdbfeee29f2639766d61c1edbfc1fb020e8_prof);

        
        $__internal_ecf7835ede9b7697965efbbdcc463eb85743a3f5d12d0351204b0b6fabe361e5->leave($__internal_ecf7835ede9b7697965efbbdcc463eb85743a3f5d12d0351204b0b6fabe361e5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
