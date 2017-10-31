<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_62805c320e62c110ea8515ebab17ea916b0bfdb76e957a3a6f4053fc4eb42547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62805c320e62c110ea8515ebab17ea916b0bfdb76e957a3a6f4053fc4eb42547->enter($__internal_62805c320e62c110ea8515ebab17ea916b0bfdb76e957a3a6f4053fc4eb42547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ea98ef7cede0f4614aa6a85cf8e041e1b9d5a13e1c37ce178c3eba8473133aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea98ef7cede0f4614aa6a85cf8e041e1b9d5a13e1c37ce178c3eba8473133aae->enter($__internal_ea98ef7cede0f4614aa6a85cf8e041e1b9d5a13e1c37ce178c3eba8473133aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62805c320e62c110ea8515ebab17ea916b0bfdb76e957a3a6f4053fc4eb42547->leave($__internal_62805c320e62c110ea8515ebab17ea916b0bfdb76e957a3a6f4053fc4eb42547_prof);

        
        $__internal_ea98ef7cede0f4614aa6a85cf8e041e1b9d5a13e1c37ce178c3eba8473133aae->leave($__internal_ea98ef7cede0f4614aa6a85cf8e041e1b9d5a13e1c37ce178c3eba8473133aae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f07fbc6493dfba04f67b65a8d15190bc170b2a45fb7e994f0018cd804aba7df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07fbc6493dfba04f67b65a8d15190bc170b2a45fb7e994f0018cd804aba7df1->enter($__internal_f07fbc6493dfba04f67b65a8d15190bc170b2a45fb7e994f0018cd804aba7df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8e353d6797508d33000d1e75d2b8ebb1b327b294da0a8bdada37713eb1052b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e353d6797508d33000d1e75d2b8ebb1b327b294da0a8bdada37713eb1052b4->enter($__internal_a8e353d6797508d33000d1e75d2b8ebb1b327b294da0a8bdada37713eb1052b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a8e353d6797508d33000d1e75d2b8ebb1b327b294da0a8bdada37713eb1052b4->leave($__internal_a8e353d6797508d33000d1e75d2b8ebb1b327b294da0a8bdada37713eb1052b4_prof);

        
        $__internal_f07fbc6493dfba04f67b65a8d15190bc170b2a45fb7e994f0018cd804aba7df1->leave($__internal_f07fbc6493dfba04f67b65a8d15190bc170b2a45fb7e994f0018cd804aba7df1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13311018fa2662a86ec900217f80af1fd171b46a70c430d1dac28c4762706ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13311018fa2662a86ec900217f80af1fd171b46a70c430d1dac28c4762706ddf->enter($__internal_13311018fa2662a86ec900217f80af1fd171b46a70c430d1dac28c4762706ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_59fec92f4ad19318d55af66858dfe831cf87c7ffba0c5934f016ab934d926037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fec92f4ad19318d55af66858dfe831cf87c7ffba0c5934f016ab934d926037->enter($__internal_59fec92f4ad19318d55af66858dfe831cf87c7ffba0c5934f016ab934d926037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_59fec92f4ad19318d55af66858dfe831cf87c7ffba0c5934f016ab934d926037->leave($__internal_59fec92f4ad19318d55af66858dfe831cf87c7ffba0c5934f016ab934d926037_prof);

        
        $__internal_13311018fa2662a86ec900217f80af1fd171b46a70c430d1dac28c4762706ddf->leave($__internal_13311018fa2662a86ec900217f80af1fd171b46a70c430d1dac28c4762706ddf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3484f0d6a9d50e3fb583ac7d2d54b35a3cc3fe1add989a7474e8868f343b8004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3484f0d6a9d50e3fb583ac7d2d54b35a3cc3fe1add989a7474e8868f343b8004->enter($__internal_3484f0d6a9d50e3fb583ac7d2d54b35a3cc3fe1add989a7474e8868f343b8004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49867b989befbb24fed4852afd51c5a65b64f189b05eea1e07862d7256096ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49867b989befbb24fed4852afd51c5a65b64f189b05eea1e07862d7256096ea8->enter($__internal_49867b989befbb24fed4852afd51c5a65b64f189b05eea1e07862d7256096ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_49867b989befbb24fed4852afd51c5a65b64f189b05eea1e07862d7256096ea8->leave($__internal_49867b989befbb24fed4852afd51c5a65b64f189b05eea1e07862d7256096ea8_prof);

        
        $__internal_3484f0d6a9d50e3fb583ac7d2d54b35a3cc3fe1add989a7474e8868f343b8004->leave($__internal_3484f0d6a9d50e3fb583ac7d2d54b35a3cc3fe1add989a7474e8868f343b8004_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
