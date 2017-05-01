<?php

/* nota/index.html.twig */
class __TwigTemplate_f5a4e73ce4d40a526dcc221587535e917c7ab4c5bdfdcea383a6305579f1a3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "nota/index.html.twig", 1);
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
        $__internal_0936a28ca6085d4332ce32cc17cae6c54526ae3a15ec2c5f0ad9fa4512bbfc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0936a28ca6085d4332ce32cc17cae6c54526ae3a15ec2c5f0ad9fa4512bbfc9a->enter($__internal_0936a28ca6085d4332ce32cc17cae6c54526ae3a15ec2c5f0ad9fa4512bbfc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/index.html.twig"));

        $__internal_df71c586d83c219fcade62f5a9692caddf7e7c5a930b0e4221912b4fac8af82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df71c586d83c219fcade62f5a9692caddf7e7c5a930b0e4221912b4fac8af82f->enter($__internal_df71c586d83c219fcade62f5a9692caddf7e7c5a930b0e4221912b4fac8af82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0936a28ca6085d4332ce32cc17cae6c54526ae3a15ec2c5f0ad9fa4512bbfc9a->leave($__internal_0936a28ca6085d4332ce32cc17cae6c54526ae3a15ec2c5f0ad9fa4512bbfc9a_prof);

        
        $__internal_df71c586d83c219fcade62f5a9692caddf7e7c5a930b0e4221912b4fac8af82f->leave($__internal_df71c586d83c219fcade62f5a9692caddf7e7c5a930b0e4221912b4fac8af82f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_38aaea17600e55afc7e954abfbac2ac9e6a2c8e15be351d46a320cf43fabb08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38aaea17600e55afc7e954abfbac2ac9e6a2c8e15be351d46a320cf43fabb08d->enter($__internal_38aaea17600e55afc7e954abfbac2ac9e6a2c8e15be351d46a320cf43fabb08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_1126c5f0c07952b44adc472b7d1f3ec1400f05997c9e8843842be008f018f576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1126c5f0c07952b44adc472b7d1f3ec1400f05997c9e8843842be008f018f576->enter($__internal_1126c5f0c07952b44adc472b7d1f3ec1400f05997c9e8843842be008f018f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Descripcion</th>
                <th>Destinatario</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notas"]) ? $context["notas"] : $this->getContext($context, "notas")));
        foreach ($context['_seq'] as $context["_key"] => $context["notum"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_nota_show", array("id" => $this->getAttribute($context["notum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if ($this->getAttribute($context["notum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["notum"], "motivo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["notum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["notum"], "destinatario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["notum"], "estado", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_nota_show", array("id" => $this->getAttribute($context["notum"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                    </a>
                    |
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_nota_edit", array("id" => $this->getAttribute($context["notum"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    </a>
                    |
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_nota_edit", array("id" => $this->getAttribute($context["notum"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"></span>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

</div>    
</div>
";
        
        $__internal_1126c5f0c07952b44adc472b7d1f3ec1400f05997c9e8843842be008f018f576->leave($__internal_1126c5f0c07952b44adc472b7d1f3ec1400f05997c9e8843842be008f018f576_prof);

        
        $__internal_38aaea17600e55afc7e954abfbac2ac9e6a2c8e15be351d46a320cf43fabb08d->leave($__internal_38aaea17600e55afc7e954abfbac2ac9e6a2c8e15be351d46a320cf43fabb08d_prof);

    }

    public function getTemplateName()
    {
        return "nota/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  120 => 40,  113 => 36,  106 => 32,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Descripcion</th>
                <th>Destinatario</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for notum in notas %}
            <tr>
                <td><a href=\"{{ path('admin_nota_show', { 'id': notum.id }) }}\">{{ notum.id }}</a></td>
                <td>{% if notum.fecha %}{{ notum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ notum.motivo }}</td>
                <td>{{ notum.descripcion }}</td>
                <td>{{ notum.destinatario }}</td>
                <td>{{ notum.estado }}</td>
                <td>
                    <a href=\"{{ path('admin_nota_show', { 'id': notum.id }) }}\">
                        <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                    </a>
                    |
                    <a href=\"{{ path('admin_nota_edit', { 'id': notum.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    </a>
                    |
                    <a href=\"{{ path('admin_nota_edit', { 'id': notum.id }) }}\">
                        <span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>    
</div>
{% endblock %}
", "nota/index.html.twig", "/var/www/html/sispme/app/Resources/views/nota/index.html.twig");
    }
}
