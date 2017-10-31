<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_2c596755e4d981de07970c30780556e8bdce200a5c1f41e6f7e7357a21196621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c596755e4d981de07970c30780556e8bdce200a5c1f41e6f7e7357a21196621->enter($__internal_2c596755e4d981de07970c30780556e8bdce200a5c1f41e6f7e7357a21196621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7a504ca7392efda148dc47130a50d9d78726e889b8fa1fb6e31cf18179b4ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a504ca7392efda148dc47130a50d9d78726e889b8fa1fb6e31cf18179b4ceac->enter($__internal_7a504ca7392efda148dc47130a50d9d78726e889b8fa1fb6e31cf18179b4ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c596755e4d981de07970c30780556e8bdce200a5c1f41e6f7e7357a21196621->leave($__internal_2c596755e4d981de07970c30780556e8bdce200a5c1f41e6f7e7357a21196621_prof);

        
        $__internal_7a504ca7392efda148dc47130a50d9d78726e889b8fa1fb6e31cf18179b4ceac->leave($__internal_7a504ca7392efda148dc47130a50d9d78726e889b8fa1fb6e31cf18179b4ceac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e3eb2baaafd9a452abfd005bfea96566b14b6cd60ad3860ad91b34b07a00d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3eb2baaafd9a452abfd005bfea96566b14b6cd60ad3860ad91b34b07a00d48->enter($__internal_3e3eb2baaafd9a452abfd005bfea96566b14b6cd60ad3860ad91b34b07a00d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_705cefcabcef3d1549438e3014ba1df8a337c819d2f97d736b048c700c9ff1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705cefcabcef3d1549438e3014ba1df8a337c819d2f97d736b048c700c9ff1ce->enter($__internal_705cefcabcef3d1549438e3014ba1df8a337c819d2f97d736b048c700c9ff1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_705cefcabcef3d1549438e3014ba1df8a337c819d2f97d736b048c700c9ff1ce->leave($__internal_705cefcabcef3d1549438e3014ba1df8a337c819d2f97d736b048c700c9ff1ce_prof);

        
        $__internal_3e3eb2baaafd9a452abfd005bfea96566b14b6cd60ad3860ad91b34b07a00d48->leave($__internal_3e3eb2baaafd9a452abfd005bfea96566b14b6cd60ad3860ad91b34b07a00d48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d4c9437bd10f5b52136649eaae12c1ebb2d692680aadc5ca8e42fe5e75bca44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4c9437bd10f5b52136649eaae12c1ebb2d692680aadc5ca8e42fe5e75bca44->enter($__internal_2d4c9437bd10f5b52136649eaae12c1ebb2d692680aadc5ca8e42fe5e75bca44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e850fb172cdd51271643be4929d938a96644c6f87cd0f59679852f0e91a2da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e850fb172cdd51271643be4929d938a96644c6f87cd0f59679852f0e91a2da5->enter($__internal_0e850fb172cdd51271643be4929d938a96644c6f87cd0f59679852f0e91a2da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e850fb172cdd51271643be4929d938a96644c6f87cd0f59679852f0e91a2da5->leave($__internal_0e850fb172cdd51271643be4929d938a96644c6f87cd0f59679852f0e91a2da5_prof);

        
        $__internal_2d4c9437bd10f5b52136649eaae12c1ebb2d692680aadc5ca8e42fe5e75bca44->leave($__internal_2d4c9437bd10f5b52136649eaae12c1ebb2d692680aadc5ca8e42fe5e75bca44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1d52ef0f277dfc6159d32f409d2fb4b824bcfdf49fc24bef9fbd71310594302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d52ef0f277dfc6159d32f409d2fb4b824bcfdf49fc24bef9fbd71310594302->enter($__internal_c1d52ef0f277dfc6159d32f409d2fb4b824bcfdf49fc24bef9fbd71310594302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5790130da63d52381b44f2873e714874c91f340c472fd162334d3b963a28347a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5790130da63d52381b44f2873e714874c91f340c472fd162334d3b963a28347a->enter($__internal_5790130da63d52381b44f2873e714874c91f340c472fd162334d3b963a28347a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5790130da63d52381b44f2873e714874c91f340c472fd162334d3b963a28347a->leave($__internal_5790130da63d52381b44f2873e714874c91f340c472fd162334d3b963a28347a_prof);

        
        $__internal_c1d52ef0f277dfc6159d32f409d2fb4b824bcfdf49fc24bef9fbd71310594302->leave($__internal_c1d52ef0f277dfc6159d32f409d2fb4b824bcfdf49fc24bef9fbd71310594302_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
