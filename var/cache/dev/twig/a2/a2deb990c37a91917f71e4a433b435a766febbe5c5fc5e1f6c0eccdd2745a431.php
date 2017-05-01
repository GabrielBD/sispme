<?php

/* estadonota/index.html.twig */
class __TwigTemplate_17a7e53e9058e23cde3c7ae25a0d782e295ffb3eba1e5a2d241c2253878338d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estadonota/index.html.twig", 1);
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
        $__internal_e6b08bcec5ea6ad261dce658f76a39ee6394d63e2ff6d530d5bd5f2da323bb4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b08bcec5ea6ad261dce658f76a39ee6394d63e2ff6d530d5bd5f2da323bb4c->enter($__internal_e6b08bcec5ea6ad261dce658f76a39ee6394d63e2ff6d530d5bd5f2da323bb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadonota/index.html.twig"));

        $__internal_4367709efa948498003550657c4671929facc9dbd0026fefc786cba3d09b8b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4367709efa948498003550657c4671929facc9dbd0026fefc786cba3d09b8b87->enter($__internal_4367709efa948498003550657c4671929facc9dbd0026fefc786cba3d09b8b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadonota/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b08bcec5ea6ad261dce658f76a39ee6394d63e2ff6d530d5bd5f2da323bb4c->leave($__internal_e6b08bcec5ea6ad261dce658f76a39ee6394d63e2ff6d530d5bd5f2da323bb4c_prof);

        
        $__internal_4367709efa948498003550657c4671929facc9dbd0026fefc786cba3d09b8b87->leave($__internal_4367709efa948498003550657c4671929facc9dbd0026fefc786cba3d09b8b87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08eb5dd2b2c70c4f8343cd18ab8748063062e89594c5fbfe16cac29e493a7483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08eb5dd2b2c70c4f8343cd18ab8748063062e89594c5fbfe16cac29e493a7483->enter($__internal_08eb5dd2b2c70c4f8343cd18ab8748063062e89594c5fbfe16cac29e493a7483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_daf508d9673ab9d1538333b512aecef029dd719131c0d72abf08e683025ab921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf508d9673ab9d1538333b512aecef029dd719131c0d72abf08e683025ab921->enter($__internal_daf508d9673ab9d1538333b512aecef029dd719131c0d72abf08e683025ab921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadonotas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estadoNotas"]) ? $context["estadoNotas"] : $this->getContext($context, "estadoNotas")));
        foreach ($context['_seq'] as $context["_key"] => $context["estadoNotum"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_show", array("id" => $this->getAttribute($context["estadoNotum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estadoNotum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["estadoNotum"], "estado", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_show", array("id" => $this->getAttribute($context["estadoNotum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_edit", array("id" => $this->getAttribute($context["estadoNotum"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estadoNotum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_new");
        echo "\">Create a new estadoNotum</a>
        </li>
    </ul>
";
        
        $__internal_daf508d9673ab9d1538333b512aecef029dd719131c0d72abf08e683025ab921->leave($__internal_daf508d9673ab9d1538333b512aecef029dd719131c0d72abf08e683025ab921_prof);

        
        $__internal_08eb5dd2b2c70c4f8343cd18ab8748063062e89594c5fbfe16cac29e493a7483->leave($__internal_08eb5dd2b2c70c4f8343cd18ab8748063062e89594c5fbfe16cac29e493a7483_prof);

    }

    public function getTemplateName()
    {
        return "estadonota/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Estadonotas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for estadoNotum in estadoNotas %}
            <tr>
                <td><a href=\"{{ path('admin_estadonota_show', { 'id': estadoNotum.id }) }}\">{{ estadoNotum.id }}</a></td>
                <td>{{ estadoNotum.estado }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_estadonota_show', { 'id': estadoNotum.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_estadonota_edit', { 'id': estadoNotum.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_estadonota_new') }}\">Create a new estadoNotum</a>
        </li>
    </ul>
{% endblock %}
", "estadonota/index.html.twig", "/var/www/html/sispme/app/Resources/views/estadonota/index.html.twig");
    }
}
