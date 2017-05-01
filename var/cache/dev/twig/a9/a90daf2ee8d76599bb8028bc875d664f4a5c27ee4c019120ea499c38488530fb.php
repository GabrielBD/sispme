<?php

/* preinscripcion/edit.html.twig */
class __TwigTemplate_9e8e7ab968c838136683cba22f5ba147c1d3dee156c1bab27aceb9a44ca14243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "preinscripcion/edit.html.twig", 1);
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
        $__internal_7ace9a1ff6ba1a08b6eee8f68699ad28961d649a2ac8c5351d0ac2c93cee7ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ace9a1ff6ba1a08b6eee8f68699ad28961d649a2ac8c5351d0ac2c93cee7ab2->enter($__internal_7ace9a1ff6ba1a08b6eee8f68699ad28961d649a2ac8c5351d0ac2c93cee7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/edit.html.twig"));

        $__internal_90eb7115838966c8e1933c9dcf06ca10dd88daff25c19cf58331dcb1695c81dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90eb7115838966c8e1933c9dcf06ca10dd88daff25c19cf58331dcb1695c81dc->enter($__internal_90eb7115838966c8e1933c9dcf06ca10dd88daff25c19cf58331dcb1695c81dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ace9a1ff6ba1a08b6eee8f68699ad28961d649a2ac8c5351d0ac2c93cee7ab2->leave($__internal_7ace9a1ff6ba1a08b6eee8f68699ad28961d649a2ac8c5351d0ac2c93cee7ab2_prof);

        
        $__internal_90eb7115838966c8e1933c9dcf06ca10dd88daff25c19cf58331dcb1695c81dc->leave($__internal_90eb7115838966c8e1933c9dcf06ca10dd88daff25c19cf58331dcb1695c81dc_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3b1058f2ff8821ad75e4ad162f24447796cc4ced436127f5eca9304f3aee4a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1058f2ff8821ad75e4ad162f24447796cc4ced436127f5eca9304f3aee4a6e->enter($__internal_3b1058f2ff8821ad75e4ad162f24447796cc4ced436127f5eca9304f3aee4a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_99f721a4e353f1b16163263e00985d50eab10f2111a1e4c2b645bf8639519914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f721a4e353f1b16163263e00985d50eab10f2111a1e4c2b645bf8639519914->enter($__internal_99f721a4e353f1b16163263e00985d50eab10f2111a1e4c2b645bf8639519914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Editar Preinscripción</h3>
    </div>
<div class=\"panel-body\">
    
    ";
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Editar\" />
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

<br/>    
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Borrar\">
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

</div>
</div>
";
        
        $__internal_99f721a4e353f1b16163263e00985d50eab10f2111a1e4c2b645bf8639519914->leave($__internal_99f721a4e353f1b16163263e00985d50eab10f2111a1e4c2b645bf8639519914_prof);

        
        $__internal_3b1058f2ff8821ad75e4ad162f24447796cc4ced436127f5eca9304f3aee4a6e->leave($__internal_3b1058f2ff8821ad75e4ad162f24447796cc4ced436127f5eca9304f3aee4a6e_prof);

    }

    public function getTemplateName()
    {
        return "preinscripcion/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  77 => 18,  71 => 15,  66 => 13,  62 => 12,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"panel-title\">Editar Preinscripción</h3>
    </div>
<div class=\"panel-body\">
    
    {% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Editar\" />
    {{ form_end(edit_form) }}

<br/>    
            {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Borrar\">
            {{ form_end(delete_form) }}

</div>
</div>
{% endblock %}
", "preinscripcion/edit.html.twig", "/var/www/html/sispme/app/Resources/views/preinscripcion/edit.html.twig");
    }
}
