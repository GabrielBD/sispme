<?php

/* preinscripcion/index.html.twig */
class __TwigTemplate_dcd5905109e4283adef6e4903b5d34992b31081d69b14d9afb7c679becf63660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "preinscripcion/index.html.twig", 1);
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
        $__internal_021f5ccf504b01904cf11dc64c227a1a668bfb441ebb181a693d1a4690eafa2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021f5ccf504b01904cf11dc64c227a1a668bfb441ebb181a693d1a4690eafa2b->enter($__internal_021f5ccf504b01904cf11dc64c227a1a668bfb441ebb181a693d1a4690eafa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/index.html.twig"));

        $__internal_351f0834843d0e7fc14dceb8e9095d093af0dc132207a8bb791e4c7aa0f23773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351f0834843d0e7fc14dceb8e9095d093af0dc132207a8bb791e4c7aa0f23773->enter($__internal_351f0834843d0e7fc14dceb8e9095d093af0dc132207a8bb791e4c7aa0f23773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021f5ccf504b01904cf11dc64c227a1a668bfb441ebb181a693d1a4690eafa2b->leave($__internal_021f5ccf504b01904cf11dc64c227a1a668bfb441ebb181a693d1a4690eafa2b_prof);

        
        $__internal_351f0834843d0e7fc14dceb8e9095d093af0dc132207a8bb791e4c7aa0f23773->leave($__internal_351f0834843d0e7fc14dceb8e9095d093af0dc132207a8bb791e4c7aa0f23773_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3040a6a52513c6b7240bd3818b0db3dbaa0bda9ab7aa38beaa33292e5a295709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3040a6a52513c6b7240bd3818b0db3dbaa0bda9ab7aa38beaa33292e5a295709->enter($__internal_3040a6a52513c6b7240bd3818b0db3dbaa0bda9ab7aa38beaa33292e5a295709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_09afc33ca0cbcd68b59f2c8a591355b2547e7401c515fdd452b1e66553c7b74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09afc33ca0cbcd68b59f2c8a591355b2547e7401c515fdd452b1e66553c7b74f->enter($__internal_09afc33ca0cbcd68b59f2c8a591355b2547e7401c515fdd452b1e66553c7b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Listado completo</h3>
    </div>
<div class=\"panel-body\">
    
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fechaapertura</th>
                <th>Fechacierre</th>
                <th>Ultimonrosorteo</th>
                <th>Vacantes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preinscripcions"]) ? $context["preinscripcions"] : $this->getContext($context, "preinscripcions")));
        foreach ($context['_seq'] as $context["_key"] => $context["preinscripcion"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_preinscripcion_show", array("id" => $this->getAttribute($context["preinscripcion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["preinscripcion"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            if ($this->getAttribute($context["preinscripcion"], "fechaApertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["preinscripcion"], "fechaApertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["preinscripcion"], "fechaCierre", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["preinscripcion"], "fechaCierre", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["preinscripcion"], "ultimoNroSorteo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["preinscripcion"], "vacantes", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_preinscripcion_show", array("id" => $this->getAttribute($context["preinscripcion"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                    </a>
                    |
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_preinscripcion_edit", array("id" => $this->getAttribute($context["preinscripcion"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preinscripcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>
</div>
";
        
        $__internal_09afc33ca0cbcd68b59f2c8a591355b2547e7401c515fdd452b1e66553c7b74f->leave($__internal_09afc33ca0cbcd68b59f2c8a591355b2547e7401c515fdd452b1e66553c7b74f_prof);

        
        $__internal_3040a6a52513c6b7240bd3818b0db3dbaa0bda9ab7aa38beaa33292e5a295709->leave($__internal_3040a6a52513c6b7240bd3818b0db3dbaa0bda9ab7aa38beaa33292e5a295709_prof);

    }

    public function getTemplateName()
    {
        return "preinscripcion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  110 => 34,  103 => 30,  98 => 28,  94 => 27,  88 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"panel-title\">Listado completo</h3>
    </div>
<div class=\"panel-body\">
    
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fechaapertura</th>
                <th>Fechacierre</th>
                <th>Ultimonrosorteo</th>
                <th>Vacantes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for preinscripcion in preinscripcions %}
            <tr>
                <td><a href=\"{{ path('admin_preinscripcion_show', { 'id': preinscripcion.id }) }}\">{{ preinscripcion.id }}</a></td>
                <td>{% if preinscripcion.fechaApertura %}{{ preinscripcion.fechaApertura|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if preinscripcion.fechaCierre %}{{ preinscripcion.fechaCierre|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ preinscripcion.ultimoNroSorteo }}</td>
                <td>{{ preinscripcion.vacantes }}</td>
                <td>
                    <a href=\"{{ path('admin_preinscripcion_show', { 'id': preinscripcion.id }) }}\">
                        <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                    </a>
                    |
                    <a href=\"{{ path('admin_preinscripcion_edit', { 'id': preinscripcion.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
</div>
{% endblock %}
", "preinscripcion/index.html.twig", "/var/www/html/sispme/app/Resources/views/preinscripcion/index.html.twig");
    }
}
