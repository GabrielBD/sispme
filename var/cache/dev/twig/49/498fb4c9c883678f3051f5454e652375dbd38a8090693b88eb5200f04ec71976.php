<?php

/* anonimous/index.html.twig */
class __TwigTemplate_924cfaf1a1feef35d31ba6ba639c620b68b5c65a76d05ead4927e7d145519672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anonimous/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21252d5075fb1128f91ee20b256e8efa818027457cf3e5e8a0427a412e96ac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21252d5075fb1128f91ee20b256e8efa818027457cf3e5e8a0427a412e96ac6e->enter($__internal_21252d5075fb1128f91ee20b256e8efa818027457cf3e5e8a0427a412e96ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anonimous/index.html.twig"));

        $__internal_b719e6531afd9c3f47f8535eecce2c816a9566d9c47316f5dca1d09642f1f311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b719e6531afd9c3f47f8535eecce2c816a9566d9c47316f5dca1d09642f1f311->enter($__internal_b719e6531afd9c3f47f8535eecce2c816a9566d9c47316f5dca1d09642f1f311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anonimous/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21252d5075fb1128f91ee20b256e8efa818027457cf3e5e8a0427a412e96ac6e->leave($__internal_21252d5075fb1128f91ee20b256e8efa818027457cf3e5e8a0427a412e96ac6e_prof);

        
        $__internal_b719e6531afd9c3f47f8535eecce2c816a9566d9c47316f5dca1d09642f1f311->leave($__internal_b719e6531afd9c3f47f8535eecce2c816a9566d9c47316f5dca1d09642f1f311_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db5ba11e69724bac0768cd946fb1defc6e4ed6b7a40fb5be2f05a72cf4686b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5ba11e69724bac0768cd946fb1defc6e4ed6b7a40fb5be2f05a72cf4686b4f->enter($__internal_db5ba11e69724bac0768cd946fb1defc6e4ed6b7a40fb5be2f05a72cf4686b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e714f8fd09456daee0c3a07f03c8d1185b68c237d75143d62540110d7342965e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e714f8fd09456daee0c3a07f03c8d1185b68c237d75143d62540110d7342965e->enter($__internal_e714f8fd09456daee0c3a07f03c8d1185b68c237d75143d62540110d7342965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_new");
        echo "\" class=\"btn btn-success\">Preinscribirse</a>

";
        
        $__internal_e714f8fd09456daee0c3a07f03c8d1185b68c237d75143d62540110d7342965e->leave($__internal_e714f8fd09456daee0c3a07f03c8d1185b68c237d75143d62540110d7342965e_prof);

        
        $__internal_db5ba11e69724bac0768cd946fb1defc6e4ed6b7a40fb5be2f05a72cf4686b4f->leave($__internal_db5ba11e69724bac0768cd946fb1defc6e4ed6b7a40fb5be2f05a72cf4686b4f_prof);

    }

    public function getTemplateName()
    {
        return "anonimous/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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


<a href=\"{{ path('formulario_new') }}\" class=\"btn btn-success\">Preinscribirse</a>

{% endblock %}", "anonimous/index.html.twig", "/var/www/html/sispme/app/Resources/views/anonimous/index.html.twig");
    }
}
