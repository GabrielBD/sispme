<?php

/* base.html.twig */
class __TwigTemplate_1f5723ad171401e5b8264b5aed33aa598c4353d42e0f0de9f181dc05c06d08fd extends Twig_Template
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
        $__internal_2838b521f17fdbc2296a229d912c7d69b947c1b21f7d684e8a8ee76e4c86b638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2838b521f17fdbc2296a229d912c7d69b947c1b21f7d684e8a8ee76e4c86b638->enter($__internal_2838b521f17fdbc2296a229d912c7d69b947c1b21f7d684e8a8ee76e4c86b638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_66027c418f0fd74a553cad7aa067c1d2cf2c998c8ee6989c9b5840bd9faac9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66027c418f0fd74a553cad7aa067c1d2cf2c998c8ee6989c9b5840bd9faac9e2->enter($__internal_66027c418f0fd74a553cad7aa067c1d2cf2c998c8ee6989c9b5840bd9faac9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <div class=\"container-fluid panel-ppal\">
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>

        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>



";
        
        $__internal_2838b521f17fdbc2296a229d912c7d69b947c1b21f7d684e8a8ee76e4c86b638->leave($__internal_2838b521f17fdbc2296a229d912c7d69b947c1b21f7d684e8a8ee76e4c86b638_prof);

        
        $__internal_66027c418f0fd74a553cad7aa067c1d2cf2c998c8ee6989c9b5840bd9faac9e2->leave($__internal_66027c418f0fd74a553cad7aa067c1d2cf2c998c8ee6989c9b5840bd9faac9e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0b1643fb26f8181db2154e0ef164b3694253c3d476c9c90a1d3967c46fa3d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b1643fb26f8181db2154e0ef164b3694253c3d476c9c90a1d3967c46fa3d00->enter($__internal_e0b1643fb26f8181db2154e0ef164b3694253c3d476c9c90a1d3967c46fa3d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a001e21e241df0eed144a5cdf30670e13ff65b03c1c0ef4b3d22e382630a07a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a001e21e241df0eed144a5cdf30670e13ff65b03c1c0ef4b3d22e382630a07a3->enter($__internal_a001e21e241df0eed144a5cdf30670e13ff65b03c1c0ef4b3d22e382630a07a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SISPME";
        
        $__internal_a001e21e241df0eed144a5cdf30670e13ff65b03c1c0ef4b3d22e382630a07a3->leave($__internal_a001e21e241df0eed144a5cdf30670e13ff65b03c1c0ef4b3d22e382630a07a3_prof);

        
        $__internal_e0b1643fb26f8181db2154e0ef164b3694253c3d476c9c90a1d3967c46fa3d00->leave($__internal_e0b1643fb26f8181db2154e0ef164b3694253c3d476c9c90a1d3967c46fa3d00_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a8a4d42bf3cfeef4289cbb9a14e0d14f61c164677cc799a1a07c1a18b5a90e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8a4d42bf3cfeef4289cbb9a14e0d14f61c164677cc799a1a07c1a18b5a90e1->enter($__internal_9a8a4d42bf3cfeef4289cbb9a14e0d14f61c164677cc799a1a07c1a18b5a90e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3140d3d8fc1a3666ad2656a0c8793932ce553a5591d9cb79fab8aea42405d73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3140d3d8fc1a3666ad2656a0c8793932ce553a5591d9cb79fab8aea42405d73e->enter($__internal_3140d3d8fc1a3666ad2656a0c8793932ce553a5591d9cb79fab8aea42405d73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/mio.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.eot"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.svg"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.woff"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.woff2"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3140d3d8fc1a3666ad2656a0c8793932ce553a5591d9cb79fab8aea42405d73e->leave($__internal_3140d3d8fc1a3666ad2656a0c8793932ce553a5591d9cb79fab8aea42405d73e_prof);

        
        $__internal_9a8a4d42bf3cfeef4289cbb9a14e0d14f61c164677cc799a1a07c1a18b5a90e1->leave($__internal_9a8a4d42bf3cfeef4289cbb9a14e0d14f61c164677cc799a1a07c1a18b5a90e1_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbd34ac265873457c0e6a862473cac5d4c5f2b878de795f8e914b2d0b158bb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd34ac265873457c0e6a862473cac5d4c5f2b878de795f8e914b2d0b158bb71->enter($__internal_bbd34ac265873457c0e6a862473cac5d4c5f2b878de795f8e914b2d0b158bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_109dad778b7430f7f74ead988a53528adb523aab2794e8119f652131660e7423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109dad778b7430f7f74ead988a53528adb523aab2794e8119f652131660e7423->enter($__internal_109dad778b7430f7f74ead988a53528adb523aab2794e8119f652131660e7423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "      
        ";
        
        $__internal_109dad778b7430f7f74ead988a53528adb523aab2794e8119f652131660e7423->leave($__internal_109dad778b7430f7f74ead988a53528adb523aab2794e8119f652131660e7423_prof);

        
        $__internal_bbd34ac265873457c0e6a862473cac5d4c5f2b878de795f8e914b2d0b158bb71->leave($__internal_bbd34ac265873457c0e6a862473cac5d4c5f2b878de795f8e914b2d0b158bb71_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2955f8bf48f7c24cb72e1cbacf3d54e42a92550e3c4f35d16d66d192f828023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2955f8bf48f7c24cb72e1cbacf3d54e42a92550e3c4f35d16d66d192f828023->enter($__internal_c2955f8bf48f7c24cb72e1cbacf3d54e42a92550e3c4f35d16d66d192f828023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e42980ef7d9675075d66ae451d388a96b3ed3f31c26c92967eab12da1e75152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e42980ef7d9675075d66ae451d388a96b3ed3f31c26c92967eab12da1e75152->enter($__internal_2e42980ef7d9675075d66ae451d388a96b3ed3f31c26c92967eab12da1e75152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-2.2.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2e42980ef7d9675075d66ae451d388a96b3ed3f31c26c92967eab12da1e75152->leave($__internal_2e42980ef7d9675075d66ae451d388a96b3ed3f31c26c92967eab12da1e75152_prof);

        
        $__internal_c2955f8bf48f7c24cb72e1cbacf3d54e42a92550e3c4f35d16d66d192f828023->leave($__internal_c2955f8bf48f7c24cb72e1cbacf3d54e42a92550e3c4f35d16d66d192f828023_prof);

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
        return array (  168 => 27,  163 => 26,  154 => 25,  135 => 21,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  106 => 9,  100 => 7,  91 => 6,  73 => 5,  58 => 29,  56 => 25,  52 => 23,  50 => 21,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}SISPME{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"{{ asset('bundles/app/css/mio.css') }}\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.eot') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.svg') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.woff') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.woff2')}}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        
        <div class=\"container-fluid panel-ppal\">
        {% block body %}      
        {% endblock %}
        </div>

        {% block javascripts %}
        <script src=\"{{ asset('bundles/app/js/jquery-2.2.3.js') }}\"></script>
        <script src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>



", "base.html.twig", "/var/www/html/sispme/app/Resources/views/base.html.twig");
    }
}
