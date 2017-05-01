<?php

/* formulario/show.html.twig */
class __TwigTemplate_a56f9560769871e761403b12adf853723766b031259c2a276cf60f45096d7fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formulario/show.html.twig", 1);
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
        $__internal_7884715727ca88581d170d3327806058ab2516e24d3deb0facb78536c00afafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7884715727ca88581d170d3327806058ab2516e24d3deb0facb78536c00afafa->enter($__internal_7884715727ca88581d170d3327806058ab2516e24d3deb0facb78536c00afafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/show.html.twig"));

        $__internal_3cbafa521d32fb5d86ab3b25fe626ad4f057317cb709f6feea280daeb809ee10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbafa521d32fb5d86ab3b25fe626ad4f057317cb709f6feea280daeb809ee10->enter($__internal_3cbafa521d32fb5d86ab3b25fe626ad4f057317cb709f6feea280daeb809ee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7884715727ca88581d170d3327806058ab2516e24d3deb0facb78536c00afafa->leave($__internal_7884715727ca88581d170d3327806058ab2516e24d3deb0facb78536c00afafa_prof);

        
        $__internal_3cbafa521d32fb5d86ab3b25fe626ad4f057317cb709f6feea280daeb809ee10->leave($__internal_3cbafa521d32fb5d86ab3b25fe626ad4f057317cb709f6feea280daeb809ee10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d08fb8e5a40473727ef22f6f797ba118375aa960f0d6fd3081cb9fe2f1503b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d08fb8e5a40473727ef22f6f797ba118375aa960f0d6fd3081cb9fe2f1503b->enter($__internal_02d08fb8e5a40473727ef22f6f797ba118375aa960f0d6fd3081cb9fe2f1503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d6561560f3d12800ea27666d30d5a8d5bdceb58bd4aed9cfba3de1774433734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6561560f3d12800ea27666d30d5a8d5bdceb58bd4aed9cfba3de1774433734->enter($__internal_6d6561560f3d12800ea27666d30d5a8d5bdceb58bd4aed9cfba3de1774433734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Formulario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nropreinscripcion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nroPreinscripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechapreinscripcion</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaPreinscripcion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaPreinscripcion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Motivo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "motivo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nrosorteo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nroSorteo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_edit", array("id" => $this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6d6561560f3d12800ea27666d30d5a8d5bdceb58bd4aed9cfba3de1774433734->leave($__internal_6d6561560f3d12800ea27666d30d5a8d5bdceb58bd4aed9cfba3de1774433734_prof);

        
        $__internal_02d08fb8e5a40473727ef22f6f797ba118375aa960f0d6fd3081cb9fe2f1503b->leave($__internal_02d08fb8e5a40473727ef22f6f797ba118375aa960f0d6fd3081cb9fe2f1503b_prof);

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
        return array (  114 => 41,  109 => 39,  103 => 36,  97 => 33,  87 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Formulario</h1>

    <table>
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
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('formulario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('formulario_edit', { 'id': formulario.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "formulario/show.html.twig", "/var/www/html/sispme/app/Resources/views/formulario/show.html.twig");
    }
}
