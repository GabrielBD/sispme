<?php

/* nota/new.html.twig */
class __TwigTemplate_44b2333f02e553c22181c6817270a83aee63b33ef42f88c541850f4063d872d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "nota/new.html.twig", 1);
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
        $__internal_22f3c1a704f38ab685fd394d3906a4274f47be047d8cef4dcff862dc21877b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f3c1a704f38ab685fd394d3906a4274f47be047d8cef4dcff862dc21877b90->enter($__internal_22f3c1a704f38ab685fd394d3906a4274f47be047d8cef4dcff862dc21877b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/new.html.twig"));

        $__internal_ac40f660bf0bc4434b7f3b2b5e7c702e476f8847372ffbec301b8788889ed8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac40f660bf0bc4434b7f3b2b5e7c702e476f8847372ffbec301b8788889ed8cb->enter($__internal_ac40f660bf0bc4434b7f3b2b5e7c702e476f8847372ffbec301b8788889ed8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f3c1a704f38ab685fd394d3906a4274f47be047d8cef4dcff862dc21877b90->leave($__internal_22f3c1a704f38ab685fd394d3906a4274f47be047d8cef4dcff862dc21877b90_prof);

        
        $__internal_ac40f660bf0bc4434b7f3b2b5e7c702e476f8847372ffbec301b8788889ed8cb->leave($__internal_ac40f660bf0bc4434b7f3b2b5e7c702e476f8847372ffbec301b8788889ed8cb_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_85bb944531b367d5f810fc59fc8acad65954ecb3dbf59cbecaa8f46ee2afd7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85bb944531b367d5f810fc59fc8acad65954ecb3dbf59cbecaa8f46ee2afd7c3->enter($__internal_85bb944531b367d5f810fc59fc8acad65954ecb3dbf59cbecaa8f46ee2afd7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_f6e7836a78e79aa2acbf2e9f4905dacd429891ae582b4562cb799ca0b48f84ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e7836a78e79aa2acbf2e9f4905dacd429891ae582b4562cb799ca0b48f84ed->enter($__internal_f6e7836a78e79aa2acbf2e9f4905dacd429891ae582b4562cb799ca0b48f84ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Recibida</h3>
    </div>
<div class=\"panel-body\">
    
     ";
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Recibida\" />
        </div>
        </div>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
</div>
";
        
        $__internal_f6e7836a78e79aa2acbf2e9f4905dacd429891ae582b4562cb799ca0b48f84ed->leave($__internal_f6e7836a78e79aa2acbf2e9f4905dacd429891ae582b4562cb799ca0b48f84ed_prof);

        
        $__internal_85bb944531b367d5f810fc59fc8acad65954ecb3dbf59cbecaa8f46ee2afd7c3->leave($__internal_85bb944531b367d5f810fc59fc8acad65954ecb3dbf59cbecaa8f46ee2afd7c3_prof);

    }

    public function getTemplateName()
    {
        return "nota/new.html.twig";
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
        <h3 class=\"panel-title\">Recibida</h3>
    </div>
<div class=\"panel-body\">
    
     {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Recibida\" />
        </div>
        </div>
    {{ form_end(form) }}

</div>
</div>
{% endblock %}
", "nota/new.html.twig", "/var/www/html/sispme/app/Resources/views/nota/new.html.twig");
    }
}
