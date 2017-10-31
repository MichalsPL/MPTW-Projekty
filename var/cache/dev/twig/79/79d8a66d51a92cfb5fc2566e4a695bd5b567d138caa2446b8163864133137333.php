<?php

/* AppBundle:ProjectController:add_project.html.twig */
class __TwigTemplate_aecde24a67575b5dc4267eddb57a2b9c9d4bb3a6dd2b0d85ac1df4b19b1e3ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:ProjectController:add_project.html.twig", 1);
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
        $__internal_a7df9dd523b8108d3f86eb9804a3b0795571bfd1d9da025345e0a540512efa1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7df9dd523b8108d3f86eb9804a3b0795571bfd1d9da025345e0a540512efa1b->enter($__internal_a7df9dd523b8108d3f86eb9804a3b0795571bfd1d9da025345e0a540512efa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ProjectController:add_project.html.twig"));

        $__internal_e0130ada289534e6940b8bd1f9f854fe93cb5c32889e882c4d5906bb75c09ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0130ada289534e6940b8bd1f9f854fe93cb5c32889e882c4d5906bb75c09ab7->enter($__internal_e0130ada289534e6940b8bd1f9f854fe93cb5c32889e882c4d5906bb75c09ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ProjectController:add_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7df9dd523b8108d3f86eb9804a3b0795571bfd1d9da025345e0a540512efa1b->leave($__internal_a7df9dd523b8108d3f86eb9804a3b0795571bfd1d9da025345e0a540512efa1b_prof);

        
        $__internal_e0130ada289534e6940b8bd1f9f854fe93cb5c32889e882c4d5906bb75c09ab7->leave($__internal_e0130ada289534e6940b8bd1f9f854fe93cb5c32889e882c4d5906bb75c09ab7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28a791c058dab179f5a2ea9dc5842e1da292fab4397a8b43a583e78e293a5e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a791c058dab179f5a2ea9dc5842e1da292fab4397a8b43a583e78e293a5e14->enter($__internal_28a791c058dab179f5a2ea9dc5842e1da292fab4397a8b43a583e78e293a5e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f44e6e8c28b1c91bea0b6aa3d4099cfc346492d41d309d99344cbdebe4fe450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f44e6e8c28b1c91bea0b6aa3d4099cfc346492d41d309d99344cbdebe4fe450->enter($__internal_6f44e6e8c28b1c91bea0b6aa3d4099cfc346492d41d309d99344cbdebe4fe450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:ProjectController:addProject";
        
        $__internal_6f44e6e8c28b1c91bea0b6aa3d4099cfc346492d41d309d99344cbdebe4fe450->leave($__internal_6f44e6e8c28b1c91bea0b6aa3d4099cfc346492d41d309d99344cbdebe4fe450_prof);

        
        $__internal_28a791c058dab179f5a2ea9dc5842e1da292fab4397a8b43a583e78e293a5e14->leave($__internal_28a791c058dab179f5a2ea9dc5842e1da292fab4397a8b43a583e78e293a5e14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_313ab8a42106432df8d10a0429e1a3c0367c910a76eafbfa483da0564855854d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313ab8a42106432df8d10a0429e1a3c0367c910a76eafbfa483da0564855854d->enter($__internal_313ab8a42106432df8d10a0429e1a3c0367c910a76eafbfa483da0564855854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62d32c97717a0cda6c72608c247cf454850465bfe00c80135d83b018732e7224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d32c97717a0cda6c72608c247cf454850465bfe00c80135d83b018732e7224->enter($__internal_62d32c97717a0cda6c72608c247cf454850465bfe00c80135d83b018732e7224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>To jest przykładowa strona dodawania projektu</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_62d32c97717a0cda6c72608c247cf454850465bfe00c80135d83b018732e7224->leave($__internal_62d32c97717a0cda6c72608c247cf454850465bfe00c80135d83b018732e7224_prof);

        
        $__internal_313ab8a42106432df8d10a0429e1a3c0367c910a76eafbfa483da0564855854d->leave($__internal_313ab8a42106432df8d10a0429e1a3c0367c910a76eafbfa483da0564855854d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ProjectController:add_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:ProjectController:addProject{% endblock %}

{% block body %}
<h1>To jest przykładowa strona dodawania projektu</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:ProjectController:add_project.html.twig", "/var/www/html/test/src/AppBundle/Resources/views/ProjectController/add_project.html.twig");
    }
}
