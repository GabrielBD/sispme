<?php

/* nota/show.html.twig */
class __TwigTemplate_a5cc05021ca48673b19ca9dfdf68364b680597aaacb71c16761a75d82fb19591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "nota/show.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e232b909530fe848ff300935a64a23e65ddef3cfe4a15aa8f8131d4e13e13a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e232b909530fe848ff300935a64a23e65ddef3cfe4a15aa8f8131d4e13e13a4c->enter($__internal_e232b909530fe848ff300935a64a23e65ddef3cfe4a15aa8f8131d4e13e13a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/show.html.twig"));

        $__internal_c0adc852d3fcb5d294d8d602de652773f30267581d8cb7916af0037dd998fc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0adc852d3fcb5d294d8d602de652773f30267581d8cb7916af0037dd998fc3b->enter($__internal_c0adc852d3fcb5d294d8d602de652773f30267581d8cb7916af0037dd998fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e232b909530fe848ff300935a64a23e65ddef3cfe4a15aa8f8131d4e13e13a4c->leave($__internal_e232b909530fe848ff300935a64a23e65ddef3cfe4a15aa8f8131d4e13e13a4c_prof);

        
        $__internal_c0adc852d3fcb5d294d8d602de652773f30267581d8cb7916af0037dd998fc3b->leave($__internal_c0adc852d3fcb5d294d8d602de652773f30267581d8cb7916af0037dd998fc3b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_240a9a298f29060bb88a5a2e42c0169aa0f8c8d3572065e8ef991df8ffe28668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240a9a298f29060bb88a5a2e42c0169aa0f8c8d3572065e8ef991df8ffe28668->enter($__internal_240a9a298f29060bb88a5a2e42c0169aa0f8c8d3572065e8ef991df8ffe28668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_f1d508e8d75419fb7c5f618b4db984c7faeb2dd4804172241da8316aa262b259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d508e8d75419fb7c5f618b4db984c7faeb2dd4804172241da8316aa262b259->enter($__internal_f1d508e8d75419fb7c5f618b4db984c7faeb2dd4804172241da8316aa262b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Abir Preinscripción</h3>
    </div>
<div class=\"panel-body\">

    <table class=\"table table-striped table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Motivo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "motivo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Destinatario</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "destinatario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notum"]) ? $context["notum"] : $this->getContext($context, "notum")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

</div>
</div>
";
        
        $__internal_f1d508e8d75419fb7c5f618b4db984c7faeb2dd4804172241da8316aa262b259->leave($__internal_f1d508e8d75419fb7c5f618b4db984c7faeb2dd4804172241da8316aa262b259_prof);

        
        $__internal_240a9a298f29060bb88a5a2e42c0169aa0f8c8d3572065e8ef991df8ffe28668->leave($__internal_240a9a298f29060bb88a5a2e42c0169aa0f8c8d3572065e8ef991df8ffe28668_prof);

    }

    public function getTemplateName()
    {
        return "nota/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  91 => 30,  84 => 26,  77 => 22,  68 => 18,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/index.html.twig' %}

{% block contenido %}
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Abir Preinscripción</h3>
    </div>
<div class=\"panel-body\">

    <table class=\"table table-striped table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ notum.id }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{% if notum.fecha %}{{ notum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Motivo</th>
                <td>{{ notum.motivo }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ notum.descripcion }}</td>
            </tr>
            <tr>
                <th>Destinatario</th>
                <td>{{ notum.destinatario }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ notum.estado }}</td>
            </tr>
        </tbody>
    </table>

</div>
</div>
{% endblock %}
", "nota/show.html.twig", "/var/www/html/sispme/app/Resources/views/nota/show.html.twig");
    }
}
