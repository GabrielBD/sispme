<?php

/* destinatario/new.html.twig */
class __TwigTemplate_6852b6e44df2b09511e31b036aa16676ddd5c11f375a1a90560743c2da082c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "destinatario/new.html.twig", 1);
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
        $__internal_b4a64a23b3a18d2cbffda5bdd65fcb7e16ac34e64d68f742a30a9e64da3ea21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a64a23b3a18d2cbffda5bdd65fcb7e16ac34e64d68f742a30a9e64da3ea21d->enter($__internal_b4a64a23b3a18d2cbffda5bdd65fcb7e16ac34e64d68f742a30a9e64da3ea21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "destinatario/new.html.twig"));

        $__internal_b18ade710888f18e040a69bc58af3fb04e9ce1e5e4d65cfc6625ae3da99b5c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18ade710888f18e040a69bc58af3fb04e9ce1e5e4d65cfc6625ae3da99b5c06->enter($__internal_b18ade710888f18e040a69bc58af3fb04e9ce1e5e4d65cfc6625ae3da99b5c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "destinatario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a64a23b3a18d2cbffda5bdd65fcb7e16ac34e64d68f742a30a9e64da3ea21d->leave($__internal_b4a64a23b3a18d2cbffda5bdd65fcb7e16ac34e64d68f742a30a9e64da3ea21d_prof);

        
        $__internal_b18ade710888f18e040a69bc58af3fb04e9ce1e5e4d65cfc6625ae3da99b5c06->leave($__internal_b18ade710888f18e040a69bc58af3fb04e9ce1e5e4d65cfc6625ae3da99b5c06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b14b86e2cd5eb085a9817daa660fc8d30514016bc57d92700553addc20ea43b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14b86e2cd5eb085a9817daa660fc8d30514016bc57d92700553addc20ea43b6->enter($__internal_b14b86e2cd5eb085a9817daa660fc8d30514016bc57d92700553addc20ea43b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_186846efc43c7d7e5a8754dabfcd0b5ad73f12532ebfbd4b998e01685e0f9d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186846efc43c7d7e5a8754dabfcd0b5ad73f12532ebfbd4b998e01685e0f9d33->enter($__internal_186846efc43c7d7e5a8754dabfcd0b5ad73f12532ebfbd4b998e01685e0f9d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Destinatario creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_186846efc43c7d7e5a8754dabfcd0b5ad73f12532ebfbd4b998e01685e0f9d33->leave($__internal_186846efc43c7d7e5a8754dabfcd0b5ad73f12532ebfbd4b998e01685e0f9d33_prof);

        
        $__internal_b14b86e2cd5eb085a9817daa660fc8d30514016bc57d92700553addc20ea43b6->leave($__internal_b14b86e2cd5eb085a9817daa660fc8d30514016bc57d92700553addc20ea43b6_prof);

    }

    public function getTemplateName()
    {
        return "destinatario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Destinatario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_destinatario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "destinatario/new.html.twig", "/var/www/html/sispme/app/Resources/views/destinatario/new.html.twig");
    }
}
