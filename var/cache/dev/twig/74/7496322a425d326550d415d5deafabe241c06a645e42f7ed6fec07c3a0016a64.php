<?php

/* destinatario/show.html.twig */
class __TwigTemplate_4b780d622f29ea74fd9bbb8df17678fc239ea5b5c65cc628814345f1485e1eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "destinatario/show.html.twig", 1);
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
        $__internal_a10596ace11bf6272cec71fdf2992ab941d7dd8013acfc997bc80bb080d3fa6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10596ace11bf6272cec71fdf2992ab941d7dd8013acfc997bc80bb080d3fa6c->enter($__internal_a10596ace11bf6272cec71fdf2992ab941d7dd8013acfc997bc80bb080d3fa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "destinatario/show.html.twig"));

        $__internal_db4604496857de927f1bca4756b126e7f6159a35c3350392a33505897e32940d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4604496857de927f1bca4756b126e7f6159a35c3350392a33505897e32940d->enter($__internal_db4604496857de927f1bca4756b126e7f6159a35c3350392a33505897e32940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "destinatario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10596ace11bf6272cec71fdf2992ab941d7dd8013acfc997bc80bb080d3fa6c->leave($__internal_a10596ace11bf6272cec71fdf2992ab941d7dd8013acfc997bc80bb080d3fa6c_prof);

        
        $__internal_db4604496857de927f1bca4756b126e7f6159a35c3350392a33505897e32940d->leave($__internal_db4604496857de927f1bca4756b126e7f6159a35c3350392a33505897e32940d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_098f68d441b3405f65c901ddeb3782fd3a24075a57c8877a882da7f9670c1147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098f68d441b3405f65c901ddeb3782fd3a24075a57c8877a882da7f9670c1147->enter($__internal_098f68d441b3405f65c901ddeb3782fd3a24075a57c8877a882da7f9670c1147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_887f09ce59a7c3bb46ea8f19e8ff335573b442c4ab61507b59be58e56dd5172f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887f09ce59a7c3bb46ea8f19e8ff335573b442c4ab61507b59be58e56dd5172f->enter($__internal_887f09ce59a7c3bb46ea8f19e8ff335573b442c4ab61507b59be58e56dd5172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Destinatario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destinatario"]) ? $context["destinatario"] : $this->getContext($context, "destinatario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destinatario"]) ? $context["destinatario"] : $this->getContext($context, "destinatario")), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombres</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destinatario"]) ? $context["destinatario"] : $this->getContext($context, "destinatario")), "nombres", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_destinatario_edit", array("id" => $this->getAttribute((isset($context["destinatario"]) ? $context["destinatario"] : $this->getContext($context, "destinatario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_887f09ce59a7c3bb46ea8f19e8ff335573b442c4ab61507b59be58e56dd5172f->leave($__internal_887f09ce59a7c3bb46ea8f19e8ff335573b442c4ab61507b59be58e56dd5172f_prof);

        
        $__internal_098f68d441b3405f65c901ddeb3782fd3a24075a57c8877a882da7f9670c1147->leave($__internal_098f68d441b3405f65c901ddeb3782fd3a24075a57c8877a882da7f9670c1147_prof);

    }

    public function getTemplateName()
    {
        return "destinatario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Destinatario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ destinatario.id }}</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>{{ destinatario.apellidos }}</td>
            </tr>
            <tr>
                <th>Nombres</th>
                <td>{{ destinatario.nombres }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_destinatario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_destinatario_edit', { 'id': destinatario.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "destinatario/show.html.twig", "/var/www/html/sispme/app/Resources/views/destinatario/show.html.twig");
    }
}
