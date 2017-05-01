<?php

/* formulario/new.html.twig */
class __TwigTemplate_a773f37a912a01479afb505ad480029808e487817f1fd92a7b9893840da098e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formulario/new.html.twig", 1);
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
        $__internal_838e51117446cede73390154add69066e0d1e1619d6dc234ed38b99b38dd6e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838e51117446cede73390154add69066e0d1e1619d6dc234ed38b99b38dd6e57->enter($__internal_838e51117446cede73390154add69066e0d1e1619d6dc234ed38b99b38dd6e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/new.html.twig"));

        $__internal_a677ae7e69a784ab25b8d974ed8e97c5bdbe32fd94b3bf291f9cc1e163b6f2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a677ae7e69a784ab25b8d974ed8e97c5bdbe32fd94b3bf291f9cc1e163b6f2ce->enter($__internal_a677ae7e69a784ab25b8d974ed8e97c5bdbe32fd94b3bf291f9cc1e163b6f2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838e51117446cede73390154add69066e0d1e1619d6dc234ed38b99b38dd6e57->leave($__internal_838e51117446cede73390154add69066e0d1e1619d6dc234ed38b99b38dd6e57_prof);

        
        $__internal_a677ae7e69a784ab25b8d974ed8e97c5bdbe32fd94b3bf291f9cc1e163b6f2ce->leave($__internal_a677ae7e69a784ab25b8d974ed8e97c5bdbe32fd94b3bf291f9cc1e163b6f2ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e38132d235044a79018c638c7ce8a4e2448df7fdbb460c78b2ded87fd9101a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38132d235044a79018c638c7ce8a4e2448df7fdbb460c78b2ded87fd9101a15->enter($__internal_e38132d235044a79018c638c7ce8a4e2448df7fdbb460c78b2ded87fd9101a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41135faf9af18a563089de707967c6a2e7f088087c79a7c6f0fc592363f2523e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41135faf9af18a563089de707967c6a2e7f088087c79a7c6f0fc592363f2523e->enter($__internal_41135faf9af18a563089de707967c6a2e7f088087c79a7c6f0fc592363f2523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    ";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enviar\" />
        </div>
        </div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
";
        
        $__internal_41135faf9af18a563089de707967c6a2e7f088087c79a7c6f0fc592363f2523e->leave($__internal_41135faf9af18a563089de707967c6a2e7f088087c79a7c6f0fc592363f2523e_prof);

        
        $__internal_e38132d235044a79018c638c7ce8a4e2448df7fdbb460c78b2ded87fd9101a15->leave($__internal_e38132d235044a79018c638c7ce8a4e2448df7fdbb460c78b2ded87fd9101a15_prof);

    }

    public function getTemplateName()
    {
        return "formulario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  62 => 9,  58 => 8,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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


    {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

    {{ form_start(form) }}
        {{ form_widget(form) }}

        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enviar\" />
        </div>
        </div>
    {{ form_end(form) }}
    
{% endblock %}
", "formulario/new.html.twig", "/var/www/html/sispme/app/Resources/views/formulario/new.html.twig");
    }
}
