<?php

/* estadonota/show.html.twig */
class __TwigTemplate_24e42cab1720aa83094b80edd07926aaf1eb9be7b17da2519ecc0159c1eee578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estadonota/show.html.twig", 1);
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
        $__internal_20bc76bc274732f605e76f13dad0f6043663b4052960418af7052b6cd6ca3080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bc76bc274732f605e76f13dad0f6043663b4052960418af7052b6cd6ca3080->enter($__internal_20bc76bc274732f605e76f13dad0f6043663b4052960418af7052b6cd6ca3080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadonota/show.html.twig"));

        $__internal_4ea6d301c8f517c2d15fa9ecab292ac1a8d5ac88c7474ce8af65f366f0e0545c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea6d301c8f517c2d15fa9ecab292ac1a8d5ac88c7474ce8af65f366f0e0545c->enter($__internal_4ea6d301c8f517c2d15fa9ecab292ac1a8d5ac88c7474ce8af65f366f0e0545c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadonota/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bc76bc274732f605e76f13dad0f6043663b4052960418af7052b6cd6ca3080->leave($__internal_20bc76bc274732f605e76f13dad0f6043663b4052960418af7052b6cd6ca3080_prof);

        
        $__internal_4ea6d301c8f517c2d15fa9ecab292ac1a8d5ac88c7474ce8af65f366f0e0545c->leave($__internal_4ea6d301c8f517c2d15fa9ecab292ac1a8d5ac88c7474ce8af65f366f0e0545c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7204b484580d95e5f75db078ad6a9ad5adbc67bcb743e31a5bd6c4a92698ba27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7204b484580d95e5f75db078ad6a9ad5adbc67bcb743e31a5bd6c4a92698ba27->enter($__internal_7204b484580d95e5f75db078ad6a9ad5adbc67bcb743e31a5bd6c4a92698ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_819511f23dda7dcb78547fe1445a6f0ffc12b3c2a619949f6ad736a07edf8b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819511f23dda7dcb78547fe1445a6f0ffc12b3c2a619949f6ad736a07edf8b62->enter($__internal_819511f23dda7dcb78547fe1445a6f0ffc12b3c2a619949f6ad736a07edf8b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadonotum</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estadoNotum"]) ? $context["estadoNotum"] : $this->getContext($context, "estadoNotum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estadoNotum"]) ? $context["estadoNotum"] : $this->getContext($context, "estadoNotum")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_edit", array("id" => $this->getAttribute((isset($context["estadoNotum"]) ? $context["estadoNotum"] : $this->getContext($context, "estadoNotum")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_819511f23dda7dcb78547fe1445a6f0ffc12b3c2a619949f6ad736a07edf8b62->leave($__internal_819511f23dda7dcb78547fe1445a6f0ffc12b3c2a619949f6ad736a07edf8b62_prof);

        
        $__internal_7204b484580d95e5f75db078ad6a9ad5adbc67bcb743e31a5bd6c4a92698ba27->leave($__internal_7204b484580d95e5f75db078ad6a9ad5adbc67bcb743e31a5bd6c4a92698ba27_prof);

    }

    public function getTemplateName()
    {
        return "estadonota/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Estadonotum</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ estadoNotum.id }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ estadoNotum.estado }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_estadonota_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_estadonota_edit', { 'id': estadoNotum.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "estadonota/show.html.twig", "/var/www/html/sispme/app/Resources/views/estadonota/show.html.twig");
    }
}
