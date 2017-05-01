<?php

/* formulario/index.html.twig */
class __TwigTemplate_8fcdeacd5a0824688fc81b891593ea68a197a447da09d655981633171de3f8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "formulario/index.html.twig", 1);
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
        $__internal_ad775ba5f240ccd390ae5cf8ff40d7e0919f612b70b2dd4af70912a9b9fd28bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad775ba5f240ccd390ae5cf8ff40d7e0919f612b70b2dd4af70912a9b9fd28bf->enter($__internal_ad775ba5f240ccd390ae5cf8ff40d7e0919f612b70b2dd4af70912a9b9fd28bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/index.html.twig"));

        $__internal_a4538df3d19282307acf2051470d4898a9d91268b45d1369a017b35579acf265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4538df3d19282307acf2051470d4898a9d91268b45d1369a017b35579acf265->enter($__internal_a4538df3d19282307acf2051470d4898a9d91268b45d1369a017b35579acf265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad775ba5f240ccd390ae5cf8ff40d7e0919f612b70b2dd4af70912a9b9fd28bf->leave($__internal_ad775ba5f240ccd390ae5cf8ff40d7e0919f612b70b2dd4af70912a9b9fd28bf_prof);

        
        $__internal_a4538df3d19282307acf2051470d4898a9d91268b45d1369a017b35579acf265->leave($__internal_a4538df3d19282307acf2051470d4898a9d91268b45d1369a017b35579acf265_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9cda641fcc88393d2131aa6197cde2dafdd32ec6966f6103d8c5d717ba56557f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cda641fcc88393d2131aa6197cde2dafdd32ec6966f6103d8c5d717ba56557f->enter($__internal_9cda641fcc88393d2131aa6197cde2dafdd32ec6966f6103d8c5d717ba56557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_faa8c77275a9bb62c338e50c10d02b8a6b30e732e808ebb13685bc179a6d261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa8c77275a9bb62c338e50c10d02b8a6b30e732e808ebb13685bc179a6d261c->enter($__internal_faa8c77275a9bb62c338e50c10d02b8a6b30e732e808ebb13685bc179a6d261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Listado completo</h3>
    </div>
<div class=\"panel-body\">

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nropreinscripcion</th>
                <th>Fechapreinscripcion</th>
                <th>Motivo</th>
                <th>Confirmado</th>
                <th>Nrosorteo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formularios"]) ? $context["formularios"] : $this->getContext($context, "formularios")));
        foreach ($context['_seq'] as $context["_key"] => $context["formulario"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_show", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "nroPreinscripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["formulario"], "fechaPreinscripcion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formulario"], "fechaPreinscripcion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "motivo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo (($this->getAttribute($context["formulario"], "confirmado", array())) ? ("Si") : ("No"));
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "nroSorteo", array()), "html", null, true);
            echo "</td>
                <td>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_show", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                </a>
                | 
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_edit", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                </a>
                |
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_confirmar", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formulario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

</div>
</div>
";
        
        $__internal_faa8c77275a9bb62c338e50c10d02b8a6b30e732e808ebb13685bc179a6d261c->leave($__internal_faa8c77275a9bb62c338e50c10d02b8a6b30e732e808ebb13685bc179a6d261c_prof);

        
        $__internal_9cda641fcc88393d2131aa6197cde2dafdd32ec6966f6103d8c5d717ba56557f->leave($__internal_9cda641fcc88393d2131aa6197cde2dafdd32ec6966f6103d8c5d717ba56557f_prof);

    }

    public function getTemplateName()
    {
        return "formulario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  120 => 40,  113 => 36,  106 => 32,  101 => 30,  97 => 29,  93 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nropreinscripcion</th>
                <th>Fechapreinscripcion</th>
                <th>Motivo</th>
                <th>Confirmado</th>
                <th>Nrosorteo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for formulario in formularios %}
            <tr>
                <td><a href=\"{{ path('formulario_show', { 'id': formulario.id }) }}\">{{ formulario.id }}</a></td>
                <td>{{ formulario.nroPreinscripcion }}</td>
                <td>{% if formulario.fechaPreinscripcion %}{{ formulario.fechaPreinscripcion|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ formulario.motivo }}</td>
                <td>{{ formulario.confirmado ? 'Si' : 'No' }}</td>
                <td>{{ formulario.nroSorteo }}</td>
                <td>
                <a href=\"{{ path('formulario_show', { 'id': formulario.id }) }}\">
                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                </a>
                | 
                <a href=\"{{ path('formulario_edit', { 'id': formulario.id }) }}\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                </a>
                |
                <a href=\"{{ path('formulario_confirmar', { 'id': formulario.id }) }}\">
                    <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
</div>
{% endblock %}
", "formulario/index.html.twig", "/var/www/html/sispme/app/Resources/views/formulario/index.html.twig");
    }
}
