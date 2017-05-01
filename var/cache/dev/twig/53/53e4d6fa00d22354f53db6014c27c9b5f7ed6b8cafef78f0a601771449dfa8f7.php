<?php

/* formulario/show.html.twig */
class __TwigTemplate_a56f9560769871e761403b12adf853723766b031259c2a276cf60f45096d7fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "formulario/show.html.twig", 1);
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
        $__internal_86109603f0ac12c2fe85dcca3fabfe6198787dfd7fb6295fe6856d28c043e152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86109603f0ac12c2fe85dcca3fabfe6198787dfd7fb6295fe6856d28c043e152->enter($__internal_86109603f0ac12c2fe85dcca3fabfe6198787dfd7fb6295fe6856d28c043e152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/show.html.twig"));

        $__internal_48f27ad44def60ccefe1492a1227182c72bcfae67d9da6b16c1e082b3037b068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f27ad44def60ccefe1492a1227182c72bcfae67d9da6b16c1e082b3037b068->enter($__internal_48f27ad44def60ccefe1492a1227182c72bcfae67d9da6b16c1e082b3037b068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86109603f0ac12c2fe85dcca3fabfe6198787dfd7fb6295fe6856d28c043e152->leave($__internal_86109603f0ac12c2fe85dcca3fabfe6198787dfd7fb6295fe6856d28c043e152_prof);

        
        $__internal_48f27ad44def60ccefe1492a1227182c72bcfae67d9da6b16c1e082b3037b068->leave($__internal_48f27ad44def60ccefe1492a1227182c72bcfae67d9da6b16c1e082b3037b068_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d1e471f0b34c95888e60549fbfedf26f05b580754e217e59a89b305d86297dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e471f0b34c95888e60549fbfedf26f05b580754e217e59a89b305d86297dac->enter($__internal_d1e471f0b34c95888e60549fbfedf26f05b580754e217e59a89b305d86297dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_bcdf3cfb771c48da3f71dd9970ac769246e72c02e137950cf0254154eaee1f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdf3cfb771c48da3f71dd9970ac769246e72c02e137950cf0254154eaee1f8b->enter($__internal_bcdf3cfb771c48da3f71dd9970ac769246e72c02e137950cf0254154eaee1f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Formulario</h3>
    </div>
<div class=\"panel-body\">

    <table class=\"table table-striped table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nropreinscripcion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nroPreinscripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechapreinscripcion</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaPreinscripcion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaPreinscripcion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Motivo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "motivo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nrosorteo</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nroSorteo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confirmado</th>
                <td>";
        // line 34
        echo (($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "confirmado", array())) ? ("Si") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

</div>
</div>
";
        
        $__internal_bcdf3cfb771c48da3f71dd9970ac769246e72c02e137950cf0254154eaee1f8b->leave($__internal_bcdf3cfb771c48da3f71dd9970ac769246e72c02e137950cf0254154eaee1f8b_prof);

        
        $__internal_d1e471f0b34c95888e60549fbfedf26f05b580754e217e59a89b305d86297dac->leave($__internal_d1e471f0b34c95888e60549fbfedf26f05b580754e217e59a89b305d86297dac_prof);

    }

    public function getTemplateName()
    {
        return "formulario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  91 => 30,  84 => 26,  75 => 22,  68 => 18,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"panel-title\">Formulario</h3>
    </div>
<div class=\"panel-body\">

    <table class=\"table table-striped table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ formulario.id }}</td>
            </tr>
            <tr>
                <th>Nropreinscripcion</th>
                <td>{{ formulario.nroPreinscripcion }}</td>
            </tr>
            <tr>
                <th>Fechapreinscripcion</th>
                <td>{% if formulario.fechaPreinscripcion %}{{ formulario.fechaPreinscripcion|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Motivo</th>
                <td>{{ formulario.motivo }}</td>
            </tr>
            <tr>
                <th>Nrosorteo</th>
                <td>{{ formulario.nroSorteo }}</td>
            </tr>
            <tr>
                <th>Confirmado</th>
                <td>{{ formulario.confirmado ? 'Si' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

</div>
</div>
{% endblock %}
", "formulario/show.html.twig", "/var/www/html/sispme/app/Resources/views/formulario/show.html.twig");
    }
}
