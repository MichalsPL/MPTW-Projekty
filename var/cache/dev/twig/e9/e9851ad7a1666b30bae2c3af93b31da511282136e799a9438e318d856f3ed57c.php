<?php

/* AppBundle:ProjectController:show_projects.html.twig */
class __TwigTemplate_a836b2528e664fa5906fbf9958f2be3f17cc55a0000a21d3d8ec840d10c4a658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:ProjectController:show_projects.html.twig", 1);
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
        $__internal_548a30f7740ff472304e78c8f5b32460aee5f0090c90cc75badef12c66f79c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548a30f7740ff472304e78c8f5b32460aee5f0090c90cc75badef12c66f79c76->enter($__internal_548a30f7740ff472304e78c8f5b32460aee5f0090c90cc75badef12c66f79c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ProjectController:show_projects.html.twig"));

        $__internal_fbf718c00ec389ae38ffab6ee2962ca99d4d25fe4a6571b29c037f6aae0da1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf718c00ec389ae38ffab6ee2962ca99d4d25fe4a6571b29c037f6aae0da1b5->enter($__internal_fbf718c00ec389ae38ffab6ee2962ca99d4d25fe4a6571b29c037f6aae0da1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ProjectController:show_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548a30f7740ff472304e78c8f5b32460aee5f0090c90cc75badef12c66f79c76->leave($__internal_548a30f7740ff472304e78c8f5b32460aee5f0090c90cc75badef12c66f79c76_prof);

        
        $__internal_fbf718c00ec389ae38ffab6ee2962ca99d4d25fe4a6571b29c037f6aae0da1b5->leave($__internal_fbf718c00ec389ae38ffab6ee2962ca99d4d25fe4a6571b29c037f6aae0da1b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_101194a3e16cadf2deac816c7c47f41542b6f3877dd86180c38488b142a254b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101194a3e16cadf2deac816c7c47f41542b6f3877dd86180c38488b142a254b8->enter($__internal_101194a3e16cadf2deac816c7c47f41542b6f3877dd86180c38488b142a254b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13090a8d704811783c10bb7a2530c707c2737782b19cf47b15c544745a90d3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13090a8d704811783c10bb7a2530c707c2737782b19cf47b15c544745a90d3f7->enter($__internal_13090a8d704811783c10bb7a2530c707c2737782b19cf47b15c544745a90d3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Wszystkie projekty ";
        
        $__internal_13090a8d704811783c10bb7a2530c707c2737782b19cf47b15c544745a90d3f7->leave($__internal_13090a8d704811783c10bb7a2530c707c2737782b19cf47b15c544745a90d3f7_prof);

        
        $__internal_101194a3e16cadf2deac816c7c47f41542b6f3877dd86180c38488b142a254b8->leave($__internal_101194a3e16cadf2deac816c7c47f41542b6f3877dd86180c38488b142a254b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_84c102b75ee579ac5391b928c49cdd20c5b58b304cf6eab6eb6d687d75109db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c102b75ee579ac5391b928c49cdd20c5b58b304cf6eab6eb6d687d75109db1->enter($__internal_84c102b75ee579ac5391b928c49cdd20c5b58b304cf6eab6eb6d687d75109db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25b008093c753205f90dc29005087bf82e422f16c3472b9ffdb68afc8bded04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b008093c753205f90dc29005087bf82e422f16c3472b9ffdb68afc8bded04b->enter($__internal_25b008093c753205f90dc29005087bf82e422f16c3472b9ffdb68afc8bded04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"/logout\"> <h3> wyloguj się</h3></a>
    <h1>tu będą wszystkie projekty </h1>


";
        // line 10
        if ((twig_length_filter($this->env, ($context["projects"] ?? $this->getContext($context, "projects"))) > 0)) {
            // line 11
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_add_form");
            echo "\"><h4> dodaj projekt</h4></a>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>opis</th>
            <th>data rozpoczecia</th>
            <th>data zakończenia</th>
            <th>akcje</th>
        </tr>
        </thead>
        <tbody>
";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 25
                echo "        <tr>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getId", array(), "method"), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getName", array(), "method"), "html", null, true);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getDescription", array(), "method"), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "getStarted", array()), "Y-m-d"), "html", null, true);
                echo "</td>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "getEnded", array()), "Y-m-d"), "html", null, true);
                echo "</td>
            <td>
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "getId", array(), "method"))), "html", null, true);
                echo "\">zobacz</a>
                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_modify", array("id" => $this->getAttribute($context["project"], "getId", array(), "method"))), "html", null, true);
                echo "\">edytuj</a>
            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tbody>
    </table>
";
        } else {
            // line 40
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_add_form");
            echo "\"><h2>nie masz żadnych projektów dodaj projekt </h2></a>
";
        }
        
        $__internal_25b008093c753205f90dc29005087bf82e422f16c3472b9ffdb68afc8bded04b->leave($__internal_25b008093c753205f90dc29005087bf82e422f16c3472b9ffdb68afc8bded04b_prof);

        
        $__internal_84c102b75ee579ac5391b928c49cdd20c5b58b304cf6eab6eb6d687d75109db1->leave($__internal_84c102b75ee579ac5391b928c49cdd20c5b58b304cf6eab6eb6d687d75109db1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ProjectController:show_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  135 => 37,  125 => 33,  121 => 32,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  97 => 25,  93 => 24,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Wszystkie projekty {% endblock %}

{% block body %}
    <a href=\"/logout\"> <h3> wyloguj się</h3></a>
    <h1>tu będą wszystkie projekty </h1>


{% if projects|length > 0 %}
    <a href=\"{{ path('project_add_form') }}\"><h4> dodaj projekt</h4></a>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>opis</th>
            <th>data rozpoczecia</th>
            <th>data zakończenia</th>
            <th>akcje</th>
        </tr>
        </thead>
        <tbody>
{% for project in projects %}
        <tr>
            <td>{{ project.getId() }}</td>
            <td>{{ project.getName() }}</td>
            <td>{{ project.getDescription() }}</td>
            <td>{{ project.getStarted|date('Y-m-d') }}</td>
            <td>{{ project.getEnded|date('Y-m-d') }}</td>
            <td>
                <a href=\"{{ path('project_show',{'id': project.getId()}) }}\">zobacz</a>
                <a href=\"{{ path('project_modify',{'id': project.getId()}) }}\">edytuj</a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% else %}
    <a href=\"{{ path('project_add_form') }}\"><h2>nie masz żadnych projektów dodaj projekt </h2></a>
{% endif %}
{% endblock %}
", "AppBundle:ProjectController:show_projects.html.twig", "/var/www/html/test/src/AppBundle/Resources/views/ProjectController/show_projects.html.twig");
    }
}
