<?php

/* preinscripcion/show.html.twig */
class __TwigTemplate_0f01a48b240ac6a5a42b3e8583ae78a1c67c51823980e95f03d6a682015fb2fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "preinscripcion/show.html.twig", 1);
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
        $__internal_96b0e3b4c998fba9ba096304da374a3a34c31d2f0bb8e8a3d145b93d8e767746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b0e3b4c998fba9ba096304da374a3a34c31d2f0bb8e8a3d145b93d8e767746->enter($__internal_96b0e3b4c998fba9ba096304da374a3a34c31d2f0bb8e8a3d145b93d8e767746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/show.html.twig"));

        $__internal_402bd7d8959b8ea992dee3533048a4f2f4dd7fa7cc5eacfc5e16e58318494693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402bd7d8959b8ea992dee3533048a4f2f4dd7fa7cc5eacfc5e16e58318494693->enter($__internal_402bd7d8959b8ea992dee3533048a4f2f4dd7fa7cc5eacfc5e16e58318494693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b0e3b4c998fba9ba096304da374a3a34c31d2f0bb8e8a3d145b93d8e767746->leave($__internal_96b0e3b4c998fba9ba096304da374a3a34c31d2f0bb8e8a3d145b93d8e767746_prof);

        
        $__internal_402bd7d8959b8ea992dee3533048a4f2f4dd7fa7cc5eacfc5e16e58318494693->leave($__internal_402bd7d8959b8ea992dee3533048a4f2f4dd7fa7cc5eacfc5e16e58318494693_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_377e362cc1772f5a87db05141b22fe7365ab3da6a1d2371763849c3bdc5e44a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377e362cc1772f5a87db05141b22fe7365ab3da6a1d2371763849c3bdc5e44a1->enter($__internal_377e362cc1772f5a87db05141b22fe7365ab3da6a1d2371763849c3bdc5e44a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_65c69a507eba62693522ee1f0faf2e86d325beffce2e56029b3a0edb75dc6068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c69a507eba62693522ee1f0faf2e86d325beffce2e56029b3a0edb75dc6068->enter($__internal_65c69a507eba62693522ee1f0faf2e86d325beffce2e56029b3a0edb75dc6068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Ver Preinscripción</h3>
    </div>
<div class=\"panel-body\">
    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaapertura</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "fechaApertura", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "fechaApertura", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechacierre</th>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "fechaCierre", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "fechaCierre", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Ultimonrosorteo</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "ultimoNroSorteo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vacantes</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "vacantes", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
    
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_preinscripcion_edit", array("id" => $this->getAttribute((isset($context["preinscripcion"]) ? $context["preinscripcion"] : $this->getContext($context, "preinscripcion")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar</a>
    
    </ul>

</div>    
</div>
";
        
        $__internal_65c69a507eba62693522ee1f0faf2e86d325beffce2e56029b3a0edb75dc6068->leave($__internal_65c69a507eba62693522ee1f0faf2e86d325beffce2e56029b3a0edb75dc6068_prof);

        
        $__internal_377e362cc1772f5a87db05141b22fe7365ab3da6a1d2371763849c3bdc5e44a1->leave($__internal_377e362cc1772f5a87db05141b22fe7365ab3da6a1d2371763849c3bdc5e44a1_prof);

    }

    public function getTemplateName()
    {
        return "preinscripcion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  92 => 29,  85 => 25,  76 => 21,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"panel-title\">Ver Preinscripción</h3>
    </div>
<div class=\"panel-body\">
    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ preinscripcion.id }}</td>
            </tr>
            <tr>
                <th>Fechaapertura</th>
                <td>{% if preinscripcion.fechaApertura %}{{ preinscripcion.fechaApertura|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechacierre</th>
                <td>{% if preinscripcion.fechaCierre %}{{ preinscripcion.fechaCierre|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Ultimonrosorteo</th>
                <td>{{ preinscripcion.ultimoNroSorteo }}</td>
            </tr>
            <tr>
                <th>Vacantes</th>
                <td>{{ preinscripcion.vacantes }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
    
            <a href=\"{{ path('admin_preinscripcion_edit', { 'id': preinscripcion.id }) }}\" class=\"btn btn-primary\">Editar</a>
    
    </ul>

</div>    
</div>
{% endblock %}
", "preinscripcion/show.html.twig", "/var/www/html/sispme/app/Resources/views/preinscripcion/show.html.twig");
    }
}
