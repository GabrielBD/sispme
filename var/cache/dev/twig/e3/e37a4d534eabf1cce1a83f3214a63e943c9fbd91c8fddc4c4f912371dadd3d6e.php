<?php

/* admin/index.html.twig */
class __TwigTemplate_15cb208cd793c43d987021aa95590986766228bbb558df18b77eb371630e57d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_413753e196ab9c91716740176f01dafe0685fd51550a622cec3b4075235d7e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413753e196ab9c91716740176f01dafe0685fd51550a622cec3b4075235d7e98->enter($__internal_413753e196ab9c91716740176f01dafe0685fd51550a622cec3b4075235d7e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_d62ec3ac6c4739e13df5ddc72b8ed464882d4b6c4a71f1c01a02b07c1ad61875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62ec3ac6c4739e13df5ddc72b8ed464882d4b6c4a71f1c01a02b07c1ad61875->enter($__internal_d62ec3ac6c4739e13df5ddc72b8ed464882d4b6c4a71f1c01a02b07c1ad61875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413753e196ab9c91716740176f01dafe0685fd51550a622cec3b4075235d7e98->leave($__internal_413753e196ab9c91716740176f01dafe0685fd51550a622cec3b4075235d7e98_prof);

        
        $__internal_d62ec3ac6c4739e13df5ddc72b8ed464882d4b6c4a71f1c01a02b07c1ad61875->leave($__internal_d62ec3ac6c4739e13df5ddc72b8ed464882d4b6c4a71f1c01a02b07c1ad61875_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_121cc21fae854a1a7ad4f026342daa063f2c982dbe660e2f4f4a94c9d9c01dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121cc21fae854a1a7ad4f026342daa063f2c982dbe660e2f4f4a94c9d9c01dd9->enter($__internal_121cc21fae854a1a7ad4f026342daa063f2c982dbe660e2f4f4a94c9d9c01dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_572b626b010c763839ac3a05cc26f32dbe2ffd20b9a0a76f7e131a354dfaf766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572b626b010c763839ac3a05cc26f32dbe2ffd20b9a0a76f7e131a354dfaf766->enter($__internal_572b626b010c763839ac3a05cc26f32dbe2ffd20b9a0a76f7e131a354dfaf766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"page-header\">
<h2>Sistema de Preinscripciones y Mesa de Entrada <span class=\"text-right\"><small> bienvenido <mark>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</mark></small></span></h2>
</div>

<div class=\"row-fluid\">
    <div class=\"col-md-3\">
    <!--Sidebar content-->
    ";
        // line 12
        echo twig_include($this->env, $context, "admin/menu.html.twig");
        echo "
    </div>
        
    <div class=\"col-md-9\">
    ";
        // line 16
        $this->displayBlock('contenido', $context, $blocks);
        // line 18
        echo "    </div>
</div>

";
        
        $__internal_572b626b010c763839ac3a05cc26f32dbe2ffd20b9a0a76f7e131a354dfaf766->leave($__internal_572b626b010c763839ac3a05cc26f32dbe2ffd20b9a0a76f7e131a354dfaf766_prof);

        
        $__internal_121cc21fae854a1a7ad4f026342daa063f2c982dbe660e2f4f4a94c9d9c01dd9->leave($__internal_121cc21fae854a1a7ad4f026342daa063f2c982dbe660e2f4f4a94c9d9c01dd9_prof);

    }

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_63332fb8fbf8e1c643d58336c092568a9a1132e607e04af0f024af8518996a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63332fb8fbf8e1c643d58336c092568a9a1132e607e04af0f024af8518996a21->enter($__internal_63332fb8fbf8e1c643d58336c092568a9a1132e607e04af0f024af8518996a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_884ef9d9fada27fc0e0b0559e6233a5c3bc9f819f41ada4888f18e380ba572e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884ef9d9fada27fc0e0b0559e6233a5c3bc9f819f41ada4888f18e380ba572e9->enter($__internal_884ef9d9fada27fc0e0b0559e6233a5c3bc9f819f41ada4888f18e380ba572e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 17
        echo "    ";
        
        $__internal_884ef9d9fada27fc0e0b0559e6233a5c3bc9f819f41ada4888f18e380ba572e9->leave($__internal_884ef9d9fada27fc0e0b0559e6233a5c3bc9f819f41ada4888f18e380ba572e9_prof);

        
        $__internal_63332fb8fbf8e1c643d58336c092568a9a1132e607e04af0f024af8518996a21->leave($__internal_63332fb8fbf8e1c643d58336c092568a9a1132e607e04af0f024af8518996a21_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 17,  85 => 16,  72 => 18,  70 => 16,  63 => 12,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

<div class=\"page-header\">
<h2>Sistema de Preinscripciones y Mesa de Entrada <span class=\"text-right\"><small> bienvenido <mark>{{app.user.username}}</mark></small></span></h2>
</div>

<div class=\"row-fluid\">
    <div class=\"col-md-3\">
    <!--Sidebar content-->
    {{ include('admin/menu.html.twig') }}
    </div>
        
    <div class=\"col-md-9\">
    {% block contenido %}
    {% endblock %}
    </div>
</div>

{% endblock %}
", "admin/index.html.twig", "/var/www/html/sispme/app/Resources/views/admin/index.html.twig");
    }
}
