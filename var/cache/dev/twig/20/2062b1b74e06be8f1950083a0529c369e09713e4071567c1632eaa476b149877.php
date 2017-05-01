<?php

/* formulario/edit.html.twig */
class __TwigTemplate_35f8c58f689d4b2961de9539ec5a0022c34bb1325a290028e7584f5313a10fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "formulario/edit.html.twig", 1);
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
        $__internal_f3be4246f89b350d7de3de8c164b84c0ddeedfd448129f1256b761ea262c7d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3be4246f89b350d7de3de8c164b84c0ddeedfd448129f1256b761ea262c7d6d->enter($__internal_f3be4246f89b350d7de3de8c164b84c0ddeedfd448129f1256b761ea262c7d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/edit.html.twig"));

        $__internal_2a7515ebb6bba137a644608052c47d954d08165c8d38b56fce8afb0244640774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7515ebb6bba137a644608052c47d954d08165c8d38b56fce8afb0244640774->enter($__internal_2a7515ebb6bba137a644608052c47d954d08165c8d38b56fce8afb0244640774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3be4246f89b350d7de3de8c164b84c0ddeedfd448129f1256b761ea262c7d6d->leave($__internal_f3be4246f89b350d7de3de8c164b84c0ddeedfd448129f1256b761ea262c7d6d_prof);

        
        $__internal_2a7515ebb6bba137a644608052c47d954d08165c8d38b56fce8afb0244640774->leave($__internal_2a7515ebb6bba137a644608052c47d954d08165c8d38b56fce8afb0244640774_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c8c1891f3037317f0972bed85aa308088dddf99a92b33354d0699b0f2a8c6c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c1891f3037317f0972bed85aa308088dddf99a92b33354d0699b0f2a8c6c3c->enter($__internal_c8c1891f3037317f0972bed85aa308088dddf99a92b33354d0699b0f2a8c6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_f77a469f4ae459b9c5e483a10dce09ebb99942f4514257aa0c407c9488abe168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77a469f4ae459b9c5e483a10dce09ebb99942f4514257aa0c407c9488abe168->enter($__internal_f77a469f4ae459b9c5e483a10dce09ebb99942f4514257aa0c407c9488abe168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Editar</h3>
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
        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
        <input type=\"submit\" class=\"btn btn-danger\" value=\"Editar\" />
        </div>
        </div>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

</div>
</div>
";
        
        $__internal_f77a469f4ae459b9c5e483a10dce09ebb99942f4514257aa0c407c9488abe168->leave($__internal_f77a469f4ae459b9c5e483a10dce09ebb99942f4514257aa0c407c9488abe168_prof);

        
        $__internal_c8c1891f3037317f0972bed85aa308088dddf99a92b33354d0699b0f2a8c6c3c->leave($__internal_c8c1891f3037317f0972bed85aa308088dddf99a92b33354d0699b0f2a8c6c3c_prof);

    }

    public function getTemplateName()
    {
        return "formulario/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  66 => 13,  62 => 12,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"panel-title\">Editar</h3>
    </div>
<div class=\"panel-body\">
    
    {% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
        <input type=\"submit\" class=\"btn btn-danger\" value=\"Editar\" />
        </div>
        </div>
    {{ form_end(edit_form) }}

</div>
</div>
{% endblock %}
", "formulario/edit.html.twig", "/var/www/html/sispme/app/Resources/views/formulario/edit.html.twig");
    }
}
