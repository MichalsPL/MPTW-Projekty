<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32ebba2030fe799f7da98ab9b50856c18eada686bff6e38977b334448d4bac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ebba2030fe799f7da98ab9b50856c18eada686bff6e38977b334448d4bac7b->enter($__internal_32ebba2030fe799f7da98ab9b50856c18eada686bff6e38977b334448d4bac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_61ed40ef2ef0869582b9c1c965e64804e9f2189877b0bfea2eaf9c363253c4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ed40ef2ef0869582b9c1c965e64804e9f2189877b0bfea2eaf9c363253c4e8->enter($__internal_61ed40ef2ef0869582b9c1c965e64804e9f2189877b0bfea2eaf9c363253c4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_32ebba2030fe799f7da98ab9b50856c18eada686bff6e38977b334448d4bac7b->leave($__internal_32ebba2030fe799f7da98ab9b50856c18eada686bff6e38977b334448d4bac7b_prof);

        
        $__internal_61ed40ef2ef0869582b9c1c965e64804e9f2189877b0bfea2eaf9c363253c4e8->leave($__internal_61ed40ef2ef0869582b9c1c965e64804e9f2189877b0bfea2eaf9c363253c4e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe37d97e69563bd249252510854779d4cdb6f12418af64ff4a9ae6c265683f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe37d97e69563bd249252510854779d4cdb6f12418af64ff4a9ae6c265683f2a->enter($__internal_fe37d97e69563bd249252510854779d4cdb6f12418af64ff4a9ae6c265683f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f3ad0fde230ca567128307413bd1f0907570ba89627d836e8baa05dc9e0863b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3ad0fde230ca567128307413bd1f0907570ba89627d836e8baa05dc9e0863b->enter($__internal_2f3ad0fde230ca567128307413bd1f0907570ba89627d836e8baa05dc9e0863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2f3ad0fde230ca567128307413bd1f0907570ba89627d836e8baa05dc9e0863b->leave($__internal_2f3ad0fde230ca567128307413bd1f0907570ba89627d836e8baa05dc9e0863b_prof);

        
        $__internal_fe37d97e69563bd249252510854779d4cdb6f12418af64ff4a9ae6c265683f2a->leave($__internal_fe37d97e69563bd249252510854779d4cdb6f12418af64ff4a9ae6c265683f2a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_43e4c8d9aa0658c2143a8732eaeeb12f7f6e6297a75625873c5e6b161adb2b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e4c8d9aa0658c2143a8732eaeeb12f7f6e6297a75625873c5e6b161adb2b94->enter($__internal_43e4c8d9aa0658c2143a8732eaeeb12f7f6e6297a75625873c5e6b161adb2b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87ed65f56d459a6e305f86e1ebdc5ae24bc807b0903d22103a3352daef321a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ed65f56d459a6e305f86e1ebdc5ae24bc807b0903d22103a3352daef321a51->enter($__internal_87ed65f56d459a6e305f86e1ebdc5ae24bc807b0903d22103a3352daef321a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_87ed65f56d459a6e305f86e1ebdc5ae24bc807b0903d22103a3352daef321a51->leave($__internal_87ed65f56d459a6e305f86e1ebdc5ae24bc807b0903d22103a3352daef321a51_prof);

        
        $__internal_43e4c8d9aa0658c2143a8732eaeeb12f7f6e6297a75625873c5e6b161adb2b94->leave($__internal_43e4c8d9aa0658c2143a8732eaeeb12f7f6e6297a75625873c5e6b161adb2b94_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7283689477cf1f33ee5d305304cb9d21ee3734f6a733858ce7b8be3fde104bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7283689477cf1f33ee5d305304cb9d21ee3734f6a733858ce7b8be3fde104bb4->enter($__internal_7283689477cf1f33ee5d305304cb9d21ee3734f6a733858ce7b8be3fde104bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d4df201544f045d6fac9308ecc076cd2b04311ef12b3b1a2ff37145bd0ed4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4df201544f045d6fac9308ecc076cd2b04311ef12b3b1a2ff37145bd0ed4da->enter($__internal_0d4df201544f045d6fac9308ecc076cd2b04311ef12b3b1a2ff37145bd0ed4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d4df201544f045d6fac9308ecc076cd2b04311ef12b3b1a2ff37145bd0ed4da->leave($__internal_0d4df201544f045d6fac9308ecc076cd2b04311ef12b3b1a2ff37145bd0ed4da_prof);

        
        $__internal_7283689477cf1f33ee5d305304cb9d21ee3734f6a733858ce7b8be3fde104bb4->leave($__internal_7283689477cf1f33ee5d305304cb9d21ee3734f6a733858ce7b8be3fde104bb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
