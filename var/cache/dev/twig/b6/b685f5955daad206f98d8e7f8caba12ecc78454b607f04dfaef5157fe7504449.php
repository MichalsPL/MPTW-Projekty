<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c609787acd24ec0b4b1a361d4531bbba377252f376fc0c3641ca193572b7906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b2cb7cbb8b392b7d76735ab95a9dafcf00c542e419e57b5431e46960e6d5189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2cb7cbb8b392b7d76735ab95a9dafcf00c542e419e57b5431e46960e6d5189->enter($__internal_7b2cb7cbb8b392b7d76735ab95a9dafcf00c542e419e57b5431e46960e6d5189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3c44bd8a080941c2e9dbdd6ad10025ed9384fb764e84ebdc6e9dd9aaab6b4c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c44bd8a080941c2e9dbdd6ad10025ed9384fb764e84ebdc6e9dd9aaab6b4c72->enter($__internal_3c44bd8a080941c2e9dbdd6ad10025ed9384fb764e84ebdc6e9dd9aaab6b4c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2cb7cbb8b392b7d76735ab95a9dafcf00c542e419e57b5431e46960e6d5189->leave($__internal_7b2cb7cbb8b392b7d76735ab95a9dafcf00c542e419e57b5431e46960e6d5189_prof);

        
        $__internal_3c44bd8a080941c2e9dbdd6ad10025ed9384fb764e84ebdc6e9dd9aaab6b4c72->leave($__internal_3c44bd8a080941c2e9dbdd6ad10025ed9384fb764e84ebdc6e9dd9aaab6b4c72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebfc19bfa744a8720ad30b24c679e5e2a1b96f3725cc2347a4c1bf8076cee3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfc19bfa744a8720ad30b24c679e5e2a1b96f3725cc2347a4c1bf8076cee3b8->enter($__internal_ebfc19bfa744a8720ad30b24c679e5e2a1b96f3725cc2347a4c1bf8076cee3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6fb2532a0a265304c157f2e33d766efc5469b1d749460420a626e93c0d86e991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb2532a0a265304c157f2e33d766efc5469b1d749460420a626e93c0d86e991->enter($__internal_6fb2532a0a265304c157f2e33d766efc5469b1d749460420a626e93c0d86e991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6fb2532a0a265304c157f2e33d766efc5469b1d749460420a626e93c0d86e991->leave($__internal_6fb2532a0a265304c157f2e33d766efc5469b1d749460420a626e93c0d86e991_prof);

        
        $__internal_ebfc19bfa744a8720ad30b24c679e5e2a1b96f3725cc2347a4c1bf8076cee3b8->leave($__internal_ebfc19bfa744a8720ad30b24c679e5e2a1b96f3725cc2347a4c1bf8076cee3b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/test/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
