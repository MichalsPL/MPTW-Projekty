<?php

/* AppBundle:ProjectController:show_project.html.twig */
class __TwigTemplate_698cd05047319b567511b39685c24908a950a5f18f62c81946e7d9cea9f7ba37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:ProjectController:show_project.html.twig", 1);
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
        $__internal_4c910ebdf5593e40a360b9b6dbca3e90c815b7be4c35f73aeb28a778000ac7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c910ebdf5593e40a360b9b6dbca3e90c815b7be4c35f73aeb28a778000ac7b8->enter($__internal_4c910ebdf5593e40a360b9b6dbca3e90c815b7be4c35f73aeb28a778000ac7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ProjectController:show_project.html.twig"));

        $__internal_98e0d1a57c66cfc3fa46d43a898128e6297e52c7e0f34c93b4139d4a1a21bad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e0d1a57c66cfc3fa46d43a898128e6297e52c7e0f34c93b4139d4a1a21bad9->enter($__internal_98e0d1a57c66cfc3fa46d43a898128e6297e52c7e0f34c93b4139d4a1a21bad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ProjectController:show_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c910ebdf5593e40a360b9b6dbca3e90c815b7be4c35f73aeb28a778000ac7b8->leave($__internal_4c910ebdf5593e40a360b9b6dbca3e90c815b7be4c35f73aeb28a778000ac7b8_prof);

        
        $__internal_98e0d1a57c66cfc3fa46d43a898128e6297e52c7e0f34c93b4139d4a1a21bad9->leave($__internal_98e0d1a57c66cfc3fa46d43a898128e6297e52c7e0f34c93b4139d4a1a21bad9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a18d6eab66a2c435590a41453557521ef62d87e7f892f1b185929e193d9576cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18d6eab66a2c435590a41453557521ef62d87e7f892f1b185929e193d9576cb->enter($__internal_a18d6eab66a2c435590a41453557521ef62d87e7f892f1b185929e193d9576cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecf52a9eefb04b210c73a6314b8aaf0cdcacb943f4eb6014f4c0feaa8a98bb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf52a9eefb04b210c73a6314b8aaf0cdcacb943f4eb6014f4c0feaa8a98bb62->enter($__internal_ecf52a9eefb04b210c73a6314b8aaf0cdcacb943f4eb6014f4c0feaa8a98bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:ProjectController:addProject";
        
        $__internal_ecf52a9eefb04b210c73a6314b8aaf0cdcacb943f4eb6014f4c0feaa8a98bb62->leave($__internal_ecf52a9eefb04b210c73a6314b8aaf0cdcacb943f4eb6014f4c0feaa8a98bb62_prof);

        
        $__internal_a18d6eab66a2c435590a41453557521ef62d87e7f892f1b185929e193d9576cb->leave($__internal_a18d6eab66a2c435590a41453557521ef62d87e7f892f1b185929e193d9576cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9778752d72c8271a54a6b0e44d2004ffdd104bf97a0aa6181e6b88206b42e065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9778752d72c8271a54a6b0e44d2004ffdd104bf97a0aa6181e6b88206b42e065->enter($__internal_9778752d72c8271a54a6b0e44d2004ffdd104bf97a0aa6181e6b88206b42e065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a3fac8f223a740865fdeed76efc888b9066bb70ad6b66fffadb6604c7207716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3fac8f223a740865fdeed76efc888b9066bb70ad6b66fffadb6604c7207716->enter($__internal_1a3fac8f223a740865fdeed76efc888b9066bb70ad6b66fffadb6604c7207716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 31
        echo "

    <h1>To jest strona projektu tu się będzie działo</h1>
    <h2> id projektu ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "getId", array(), "method"), "html", null, true);
        echo "</h2>
    <h2> nazwa projektu ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "getName", array(), "method"), "html", null, true);
        echo "</h2>

    <h3>nie masz żadych podzespołów dodaj podzespół</h3>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("component_add_form", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "getId", array(), "method"), "comp_id" => 0)), "html", null, true);
        echo "\"><h5> dodaj podzespół</h5></a>






        ";
        // line 46
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "getComponents", array(), "method")) {
            // line 47
            echo "            <div id=\"categories\">
                <ul>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "getComponents", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
                // line 50
                echo "                        ";
                echo $this->getAttribute($this, "recursiveCategory", array(0 => $context["component"], 1 => ($context["project"] ?? $this->getContext($context, "project"))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </ul>
            </div>
        ";
        }
        // line 55
        echo "



";
        
        $__internal_1a3fac8f223a740865fdeed76efc888b9066bb70ad6b66fffadb6604c7207716->leave($__internal_1a3fac8f223a740865fdeed76efc888b9066bb70ad6b66fffadb6604c7207716_prof);

        
        $__internal_9778752d72c8271a54a6b0e44d2004ffdd104bf97a0aa6181e6b88206b42e065->leave($__internal_9778752d72c8271a54a6b0e44d2004ffdd104bf97a0aa6181e6b88206b42e065_prof);

    }

    // line 7
    public function getrecursiveCategory($__component__ = null, $__project__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "component" => $__component__,
            "project" => $__project__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aa3cd1f6473b7c2231354d4b6f179a328108566e6392e8245fc1d2f69279fe14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_aa3cd1f6473b7c2231354d4b6f179a328108566e6392e8245fc1d2f69279fe14->enter($__internal_aa3cd1f6473b7c2231354d4b6f179a328108566e6392e8245fc1d2f69279fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "recursiveCategory"));

            $__internal_770614ca6aa5ae49c07f418991a227e66c52487ca788810026b2fd58f9be2fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_770614ca6aa5ae49c07f418991a227e66c52487ca788810026b2fd58f9be2fb7->enter($__internal_770614ca6aa5ae49c07f418991a227e66c52487ca788810026b2fd58f9be2fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "recursiveCategory"));

            // line 8
            echo "        <li>
            <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getName", array(), "method"), "html", null, true);
            echo " </h4>
            <h5> <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("component_add_form", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "getId", array(), "method"), "comp_id" => $this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getId", array(), "method"))), "html", null, true);
            echo "\">
                    dodaj podzespół</a>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("part_add_form", array("comp_id" => $this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getId", array(), "method"))), "html", null, true);
            echo "\">
                    dodaj część</a></h5>
            ";
            // line 14
            if ((twig_length_filter($this->env, $this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getParts", array(), "method")) > 0)) {
                // line 15
                echo "                <ul>
                    ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getParts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
                    // line 17
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["part"], "getName", array(), "method"), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                </ul>
            ";
            }
            // line 21
            echo "
            ";
            // line 22
            if (twig_length_filter($this->env, $this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getChildrenComponent", array(), "method"))) {
                // line 23
                echo "                <ul>
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["component"] ?? $this->getContext($context, "component")), "getChildrenComponent", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 25
                    echo "                        ";
                    echo $this->getAttribute($this, "recursiveCategory", array(0 => $context["child"], 1 => ($context["project"] ?? $this->getContext($context, "project"))), "method");
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </ul>
            ";
            }
            // line 29
            echo "        </li>
    ";
            
            $__internal_770614ca6aa5ae49c07f418991a227e66c52487ca788810026b2fd58f9be2fb7->leave($__internal_770614ca6aa5ae49c07f418991a227e66c52487ca788810026b2fd58f9be2fb7_prof);

            
            $__internal_aa3cd1f6473b7c2231354d4b6f179a328108566e6392e8245fc1d2f69279fe14->leave($__internal_aa3cd1f6473b7c2231354d4b6f179a328108566e6392e8245fc1d2f69279fe14_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AppBundle:ProjectController:show_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 29,  214 => 27,  205 => 25,  201 => 24,  198 => 23,  196 => 22,  193 => 21,  189 => 19,  180 => 17,  176 => 16,  173 => 15,  171 => 14,  166 => 12,  161 => 10,  157 => 9,  154 => 8,  135 => 7,  121 => 55,  116 => 52,  107 => 50,  103 => 49,  99 => 47,  97 => 46,  87 => 39,  80 => 35,  76 => 34,  71 => 31,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    {% macro recursiveCategory(component, project) %}
        <li>
            <h4>{{component.getName()}} </h4>
            <h5> <a href=\"{{ path('component_add_form',{'id': project.getId(), 'comp_id': component.getId()}) }}\">
                    dodaj podzespół</a>
                <a href=\"{{ path('part_add_form',{ 'comp_id': component.getId()}) }}\">
                    dodaj część</a></h5>
            {% if component.getParts()|length > 0 %}
                <ul>
                    {% for part in component.getParts() %}
                        <li>{{ part.getName() }}</li>
                    {% endfor %}
                </ul>
            {% endif %}

            {% if component.getChildrenComponent()|length %}
                <ul>
                    {% for child in component.getChildrenComponent %}
                        {{ _self.recursiveCategory(child, project) }}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% endmacro %}


    <h1>To jest strona projektu tu się będzie działo</h1>
    <h2> id projektu {{ project.getId() }}</h2>
    <h2> nazwa projektu {{ project.getName() }}</h2>

    <h3>nie masz żadych podzespołów dodaj podzespół</h3>

    <a href=\"{{ path('component_add_form',{'id': project.getId(), 'comp_id': 0}) }}\"><h5> dodaj podzespół</h5></a>






        {% if project.getComponents() %}
            <div id=\"categories\">
                <ul>
                    {% for component in project.getComponents() %}
                        {{ _self.recursiveCategory(component, project) }}
                    {% endfor %}
                </ul>
            </div>
        {% endif %}




{% endblock %}
", "AppBundle:ProjectController:show_project.html.twig", "/var/www/html/test/src/AppBundle/Resources/views/ProjectController/show_project.html.twig");
    }
}
