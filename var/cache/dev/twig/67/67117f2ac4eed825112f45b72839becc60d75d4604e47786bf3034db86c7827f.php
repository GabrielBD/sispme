<?php

/* destinatario/index.html.twig */
class __TwigTemplate_4b1c71fb07e79a6491f4cad4c047c3568d1cb5b54a8e4054d1fe11544b9c920c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "destinatario/index.html.twig", 1);
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
        $__internal_7b6a31fedc0f2938d4c6cfacc41d478ea5bf803305149bf9b19a085b6470cfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6a31fedc0f2938d4c6cfacc41d478ea5bf803305149bf9b19a085b6470cfe3->enter($__internal_7b6a31fedc0f2938d4c6cfacc41d478ea5bf803305149bf9b19a085b6470cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "destinatario/index.html.twig"));

        $__internal_b58709ebfa0f4aa48c5d70e1b58dd2db5e9c8b4b15c6f423985afb8d265df8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58709ebfa0f4aa48c5d70e1b58dd2db5e9c8b4b15c6f423985afb8d265df8b7->enter($__internal_b58709ebfa0f4aa48c5d70e1b58dd2db5e9c8b4b15c6f423985afb8d265df8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "destinatario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b6a31fedc0f2938d4c6cfacc41d478ea5bf803305149bf9b19a085b6470cfe3->leave($__internal_7b6a31fedc0f2938d4c6cfacc41d478ea5bf803305149bf9b19a085b6470cfe3_prof);

        
        $__internal_b58709ebfa0f4aa48c5d70e1b58dd2db5e9c8b4b15c6f423985afb8d265df8b7->leave($__internal_b58709ebfa0f4aa48c5d70e1b58dd2db5e9c8b4b15c6f423985afb8d265df8b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5c90186f3d1e3ddc1d9d8c7c152248f1597d035da94ebe588d92b2d4fa0f365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c90186f3d1e3ddc1d9d8c7c152248f1597d035da94ebe588d92b2d4fa0f365->enter($__internal_a5c90186f3d1e3ddc1d9d8c7c152248f1597d035da94ebe588d92b2d4fa0f365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fc4fad0a650dfb527cd4e58a848cc404004627535732e3d3e3834f80449dee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc4fad0a650dfb527cd4e58a848cc404004627535732e3d3e3834f80449dee4->enter($__internal_1fc4fad0a650dfb527cd4e58a848cc404004627535732e3d3e3834f80449dee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Destinatarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinatarios"]) ? $context["destinatarios"] : $this->getContext($context, "destinatarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["destinatario"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_show", array("id" => $this->getAttribute($context["destinatario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["destinatario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["destinatario"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["destinatario"], "nombres", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_show", array("id" => $this->getAttribute($context["destinatario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_edit", array("id" => $this->getAttribute($context["destinatario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destinatario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_new");
        echo "\">Create a new destinatario</a>
        </li>
    </ul>
";
        
        $__internal_1fc4fad0a650dfb527cd4e58a848cc404004627535732e3d3e3834f80449dee4->leave($__internal_1fc4fad0a650dfb527cd4e58a848cc404004627535732e3d3e3834f80449dee4_prof);

        
        $__internal_a5c90186f3d1e3ddc1d9d8c7c152248f1597d035da94ebe588d92b2d4fa0f365->leave($__internal_a5c90186f3d1e3ddc1d9d8c7c152248f1597d035da94ebe588d92b2d4fa0f365_prof);

    }

    public function getTemplateName()
    {
        return "destinatario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Destinatarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for destinatario in destinatarios %}
            <tr>
                <td><a href=\"{{ path('admin_destinatario_show', { 'id': destinatario.id }) }}\">{{ destinatario.id }}</a></td>
                <td>{{ destinatario.apellidos }}</td>
                <td>{{ destinatario.nombres }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_destinatario_show', { 'id': destinatario.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_destinatario_edit', { 'id': destinatario.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_destinatario_new') }}\">Create a new destinatario</a>
        </li>
    </ul>
{% endblock %}
", "destinatario/index.html.twig", "/var/www/html/sispme/app/Resources/views/destinatario/index.html.twig");
    }
}
