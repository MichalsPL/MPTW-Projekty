<?php

/* AppBundle:IndexPageController:index.html.twig */
class __TwigTemplate_fb3cbb51fb20af1387f59a418d3f5288e38cd1220524bd1e95054575ca0bfccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:IndexPageController:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ad17246c616e581f0499099a282a1f3452354203b80831aa3fd4ae2b86d0bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad17246c616e581f0499099a282a1f3452354203b80831aa3fd4ae2b86d0bc1->enter($__internal_9ad17246c616e581f0499099a282a1f3452354203b80831aa3fd4ae2b86d0bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:IndexPageController:index.html.twig"));

        $__internal_0b54826a06556f4a461d0e2da19f6ad469507615069348b9793f3b8d20e57d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b54826a06556f4a461d0e2da19f6ad469507615069348b9793f3b8d20e57d2a->enter($__internal_0b54826a06556f4a461d0e2da19f6ad469507615069348b9793f3b8d20e57d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:IndexPageController:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ad17246c616e581f0499099a282a1f3452354203b80831aa3fd4ae2b86d0bc1->leave($__internal_9ad17246c616e581f0499099a282a1f3452354203b80831aa3fd4ae2b86d0bc1_prof);

        
        $__internal_0b54826a06556f4a461d0e2da19f6ad469507615069348b9793f3b8d20e57d2a->leave($__internal_0b54826a06556f4a461d0e2da19f6ad469507615069348b9793f3b8d20e57d2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35bbe7e3117005b37ffdc147f061086e7867fe0984ac7e42dd640ac179e8a17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35bbe7e3117005b37ffdc147f061086e7867fe0984ac7e42dd640ac179e8a17a->enter($__internal_35bbe7e3117005b37ffdc147f061086e7867fe0984ac7e42dd640ac179e8a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d44e0f8935a3218b5b469e4ae86d06b601108d0c72b32a86d9aaceab959553b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44e0f8935a3218b5b469e4ae86d06b601108d0c72b32a86d9aaceab959553b9->enter($__internal_d44e0f8935a3218b5b469e4ae86d06b601108d0c72b32a86d9aaceab959553b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
             <h1> To jest przykładowa strona startowa</h1>



            ";
        // line 10
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "                <a href=\"/logout\"> <h3> wyloguj się</h3></a>
                <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show_all");
            echo "\"> <h3> przejdź do projektów</h3></a>
            ";
        } else {
            // line 14
            echo "                <a href=\"/login\"> <h3> Zaloguj się</h3></a>
            ";
        }
        // line 16
        echo "
            </div>

        </div>
    </div>
";
        
        $__internal_d44e0f8935a3218b5b469e4ae86d06b601108d0c72b32a86d9aaceab959553b9->leave($__internal_d44e0f8935a3218b5b469e4ae86d06b601108d0c72b32a86d9aaceab959553b9_prof);

        
        $__internal_35bbe7e3117005b37ffdc147f061086e7867fe0984ac7e42dd640ac179e8a17a->leave($__internal_35bbe7e3117005b37ffdc147f061086e7867fe0984ac7e42dd640ac179e8a17a_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3963b3954eab394f547e6feccb556b129c0fb80e9ca8de394489cf8fa657533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3963b3954eab394f547e6feccb556b129c0fb80e9ca8de394489cf8fa657533->enter($__internal_e3963b3954eab394f547e6feccb556b129c0fb80e9ca8de394489cf8fa657533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce035afa42d6b1757e71adc65ac28f4395d6ac399246c9a5147472a262d098cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce035afa42d6b1757e71adc65ac28f4395d6ac399246c9a5147472a262d098cb->enter($__internal_ce035afa42d6b1757e71adc65ac28f4395d6ac399246c9a5147472a262d098cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_ce035afa42d6b1757e71adc65ac28f4395d6ac399246c9a5147472a262d098cb->leave($__internal_ce035afa42d6b1757e71adc65ac28f4395d6ac399246c9a5147472a262d098cb_prof);

        
        $__internal_e3963b3954eab394f547e6feccb556b129c0fb80e9ca8de394489cf8fa657533->leave($__internal_e3963b3954eab394f547e6feccb556b129c0fb80e9ca8de394489cf8fa657533_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:IndexPageController:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  87 => 23,  72 => 16,  68 => 14,  63 => 12,  60 => 11,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
             <h1> To jest przykładowa strona startowa</h1>



            {% if app.user %}
                <a href=\"/logout\"> <h3> wyloguj się</h3></a>
                <a href=\"{{ path('project_show_all') }}\"> <h3> przejdź do projektów</h3></a>
            {% else %}
                <a href=\"/login\"> <h3> Zaloguj się</h3></a>
            {% endif %}

            </div>

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "AppBundle:IndexPageController:index.html.twig", "/var/www/html/test/src/AppBundle/Resources/views/IndexPageController/index.html.twig");
    }
}
