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
        $__internal_54a2c648f6501d9d42315293dae93aead1c5f3fced39b27898dcef514fcc2e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a2c648f6501d9d42315293dae93aead1c5f3fced39b27898dcef514fcc2e71->enter($__internal_54a2c648f6501d9d42315293dae93aead1c5f3fced39b27898dcef514fcc2e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/index.html.twig"));

        $__internal_155da392430204167fa82dac22be6719f0edeaa01fd7f8f346915b33ed6f8a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155da392430204167fa82dac22be6719f0edeaa01fd7f8f346915b33ed6f8a53->enter($__internal_155da392430204167fa82dac22be6719f0edeaa01fd7f8f346915b33ed6f8a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a2c648f6501d9d42315293dae93aead1c5f3fced39b27898dcef514fcc2e71->leave($__internal_54a2c648f6501d9d42315293dae93aead1c5f3fced39b27898dcef514fcc2e71_prof);

        
        $__internal_155da392430204167fa82dac22be6719f0edeaa01fd7f8f346915b33ed6f8a53->leave($__internal_155da392430204167fa82dac22be6719f0edeaa01fd7f8f346915b33ed6f8a53_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_547279f803fed2581ba00aadccbe0b5310c7dd621b4aa7a27edbb640415236dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547279f803fed2581ba00aadccbe0b5310c7dd621b4aa7a27edbb640415236dc->enter($__internal_547279f803fed2581ba00aadccbe0b5310c7dd621b4aa7a27edbb640415236dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_9a8a4487690242d45c4a0ab9ca9f84020c850e050d64a2988cafbd320131b9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8a4487690242d45c4a0ab9ca9f84020c850e050d64a2988cafbd320131b9fe->enter($__internal_9a8a4487690242d45c4a0ab9ca9f84020c850e050d64a2988cafbd320131b9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
                <th>Nrosorteo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formularios"]) ? $context["formularios"] : $this->getContext($context, "formularios")));
        foreach ($context['_seq'] as $context["_key"] => $context["formulario"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_show", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "nroPreinscripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["formulario"], "fechaPreinscripcion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formulario"], "fechaPreinscripcion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "motivo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["formulario"], "nroSorteo", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_show", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_edit", array("id" => $this->getAttribute($context["formulario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formulario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

</div>
</div>
";
        
        $__internal_9a8a4487690242d45c4a0ab9ca9f84020c850e050d64a2988cafbd320131b9fe->leave($__internal_9a8a4487690242d45c4a0ab9ca9f84020c850e050d64a2988cafbd320131b9fe_prof);

        
        $__internal_547279f803fed2581ba00aadccbe0b5310c7dd621b4aa7a27edbb640415236dc->leave($__internal_547279f803fed2581ba00aadccbe0b5310c7dd621b4aa7a27edbb640415236dc_prof);

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
        return array (  121 => 41,  109 => 35,  103 => 32,  96 => 28,  92 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{{ formulario.nroSorteo }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('formulario_show', { 'id': formulario.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('formulario_edit', { 'id': formulario.id }) }}\">edit</a>
                        </li>
                    </ul>
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
