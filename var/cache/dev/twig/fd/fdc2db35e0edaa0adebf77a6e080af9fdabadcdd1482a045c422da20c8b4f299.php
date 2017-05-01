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
        $__internal_2ebed4a81c1d664cd1aef379d38334ce0b4cc9a72f13d7871bfcb4aa82619b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebed4a81c1d664cd1aef379d38334ce0b4cc9a72f13d7871bfcb4aa82619b46->enter($__internal_2ebed4a81c1d664cd1aef379d38334ce0b4cc9a72f13d7871bfcb4aa82619b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/new.html.twig"));

        $__internal_6de409281b2ef0d7139b2a96330fa91ee231e875c07a957289ce0d5ef4dddefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de409281b2ef0d7139b2a96330fa91ee231e875c07a957289ce0d5ef4dddefd->enter($__internal_6de409281b2ef0d7139b2a96330fa91ee231e875c07a957289ce0d5ef4dddefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ebed4a81c1d664cd1aef379d38334ce0b4cc9a72f13d7871bfcb4aa82619b46->leave($__internal_2ebed4a81c1d664cd1aef379d38334ce0b4cc9a72f13d7871bfcb4aa82619b46_prof);

        
        $__internal_6de409281b2ef0d7139b2a96330fa91ee231e875c07a957289ce0d5ef4dddefd->leave($__internal_6de409281b2ef0d7139b2a96330fa91ee231e875c07a957289ce0d5ef4dddefd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab15e3cf17720f9877c2045e13c83dc5c633af56648068f8c1575816d8511efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab15e3cf17720f9877c2045e13c83dc5c633af56648068f8c1575816d8511efa->enter($__internal_ab15e3cf17720f9877c2045e13c83dc5c633af56648068f8c1575816d8511efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f455a505e5456e8381a5c2bfb1d5a6567d5eadd832544c4f5c45b275e101406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f455a505e5456e8381a5c2bfb1d5a6567d5eadd832544c4f5c45b275e101406->enter($__internal_5f455a505e5456e8381a5c2bfb1d5a6567d5eadd832544c4f5c45b275e101406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f455a505e5456e8381a5c2bfb1d5a6567d5eadd832544c4f5c45b275e101406->leave($__internal_5f455a505e5456e8381a5c2bfb1d5a6567d5eadd832544c4f5c45b275e101406_prof);

        
        $__internal_ab15e3cf17720f9877c2045e13c83dc5c633af56648068f8c1575816d8511efa->leave($__internal_ab15e3cf17720f9877c2045e13c83dc5c633af56648068f8c1575816d8511efa_prof);

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
