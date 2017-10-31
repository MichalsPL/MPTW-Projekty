<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_396a67462f53a6bce840f3845d61142321886702a92cf2c0feb31bdc99a09442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396a67462f53a6bce840f3845d61142321886702a92cf2c0feb31bdc99a09442->enter($__internal_396a67462f53a6bce840f3845d61142321886702a92cf2c0feb31bdc99a09442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cc28d9261350f77cb27565f86ac5dd3f03890b2fc85e49ff687186ae2b3de78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc28d9261350f77cb27565f86ac5dd3f03890b2fc85e49ff687186ae2b3de78e->enter($__internal_cc28d9261350f77cb27565f86ac5dd3f03890b2fc85e49ff687186ae2b3de78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_396a67462f53a6bce840f3845d61142321886702a92cf2c0feb31bdc99a09442->leave($__internal_396a67462f53a6bce840f3845d61142321886702a92cf2c0feb31bdc99a09442_prof);

        
        $__internal_cc28d9261350f77cb27565f86ac5dd3f03890b2fc85e49ff687186ae2b3de78e->leave($__internal_cc28d9261350f77cb27565f86ac5dd3f03890b2fc85e49ff687186ae2b3de78e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74ccfb9b66376b87639226e03752d97e4fc9d632f9abb0b4e1551bbc32cd66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74ccfb9b66376b87639226e03752d97e4fc9d632f9abb0b4e1551bbc32cd66a->enter($__internal_c74ccfb9b66376b87639226e03752d97e4fc9d632f9abb0b4e1551bbc32cd66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a7b5f3f36c883aaa53c8ecc771e78b7571a618b1e7041b07495ebdf447ec91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7b5f3f36c883aaa53c8ecc771e78b7571a618b1e7041b07495ebdf447ec91b->enter($__internal_7a7b5f3f36c883aaa53c8ecc771e78b7571a618b1e7041b07495ebdf447ec91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a7b5f3f36c883aaa53c8ecc771e78b7571a618b1e7041b07495ebdf447ec91b->leave($__internal_7a7b5f3f36c883aaa53c8ecc771e78b7571a618b1e7041b07495ebdf447ec91b_prof);

        
        $__internal_c74ccfb9b66376b87639226e03752d97e4fc9d632f9abb0b4e1551bbc32cd66a->leave($__internal_c74ccfb9b66376b87639226e03752d97e4fc9d632f9abb0b4e1551bbc32cd66a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37b4deb82a82eab0841159286c7dc8f1a9fbd216d6d889465a5ff9ced8b7afdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b4deb82a82eab0841159286c7dc8f1a9fbd216d6d889465a5ff9ced8b7afdf->enter($__internal_37b4deb82a82eab0841159286c7dc8f1a9fbd216d6d889465a5ff9ced8b7afdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_789b5dd4c61e6aff3c217541a4bcc1d3e9a9d392d2b0ce4638f2ce3e46722c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789b5dd4c61e6aff3c217541a4bcc1d3e9a9d392d2b0ce4638f2ce3e46722c4c->enter($__internal_789b5dd4c61e6aff3c217541a4bcc1d3e9a9d392d2b0ce4638f2ce3e46722c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_789b5dd4c61e6aff3c217541a4bcc1d3e9a9d392d2b0ce4638f2ce3e46722c4c->leave($__internal_789b5dd4c61e6aff3c217541a4bcc1d3e9a9d392d2b0ce4638f2ce3e46722c4c_prof);

        
        $__internal_37b4deb82a82eab0841159286c7dc8f1a9fbd216d6d889465a5ff9ced8b7afdf->leave($__internal_37b4deb82a82eab0841159286c7dc8f1a9fbd216d6d889465a5ff9ced8b7afdf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de6e50715f54c566d329fdebe8ebf5c43da2629aa02e8cdd32f59cfcdbf2f404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6e50715f54c566d329fdebe8ebf5c43da2629aa02e8cdd32f59cfcdbf2f404->enter($__internal_de6e50715f54c566d329fdebe8ebf5c43da2629aa02e8cdd32f59cfcdbf2f404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d137bfba416aa01254b3fdb2eec6d890cc1eb4280789fa0034f2aca2f169da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d137bfba416aa01254b3fdb2eec6d890cc1eb4280789fa0034f2aca2f169da0->enter($__internal_3d137bfba416aa01254b3fdb2eec6d890cc1eb4280789fa0034f2aca2f169da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d137bfba416aa01254b3fdb2eec6d890cc1eb4280789fa0034f2aca2f169da0->leave($__internal_3d137bfba416aa01254b3fdb2eec6d890cc1eb4280789fa0034f2aca2f169da0_prof);

        
        $__internal_de6e50715f54c566d329fdebe8ebf5c43da2629aa02e8cdd32f59cfcdbf2f404->leave($__internal_de6e50715f54c566d329fdebe8ebf5c43da2629aa02e8cdd32f59cfcdbf2f404_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea741271d9d90607141a383fcddd6feb6c063eb9e918134b4495e8a54a5c1a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea741271d9d90607141a383fcddd6feb6c063eb9e918134b4495e8a54a5c1a92->enter($__internal_ea741271d9d90607141a383fcddd6feb6c063eb9e918134b4495e8a54a5c1a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f60699254bcf2bc374638d01ee8d71dcfb678ee3db5393ae561b9399fdbc62aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60699254bcf2bc374638d01ee8d71dcfb678ee3db5393ae561b9399fdbc62aa->enter($__internal_f60699254bcf2bc374638d01ee8d71dcfb678ee3db5393ae561b9399fdbc62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f60699254bcf2bc374638d01ee8d71dcfb678ee3db5393ae561b9399fdbc62aa->leave($__internal_f60699254bcf2bc374638d01ee8d71dcfb678ee3db5393ae561b9399fdbc62aa_prof);

        
        $__internal_ea741271d9d90607141a383fcddd6feb6c063eb9e918134b4495e8a54a5c1a92->leave($__internal_ea741271d9d90607141a383fcddd6feb6c063eb9e918134b4495e8a54a5c1a92_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/test/app/Resources/views/base.html.twig");
    }
}
