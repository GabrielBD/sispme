<?php

/* nota/edit.html.twig */
class __TwigTemplate_a49aa7f027e441faedc322635daaefcea7c6142aa68bc95043e3a0bb5b452d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "nota/edit.html.twig", 1);
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
        $__internal_4dbbdb26f8d1ff9ce682b4afcf08488d31a5bb20c9079ed3fa55c5ab67be7532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbbdb26f8d1ff9ce682b4afcf08488d31a5bb20c9079ed3fa55c5ab67be7532->enter($__internal_4dbbdb26f8d1ff9ce682b4afcf08488d31a5bb20c9079ed3fa55c5ab67be7532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/edit.html.twig"));

        $__internal_8ac67a180666f4bea0afca02282679e4497272dd4aa3b0c2b4bc9d0ca430fe82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac67a180666f4bea0afca02282679e4497272dd4aa3b0c2b4bc9d0ca430fe82->enter($__internal_8ac67a180666f4bea0afca02282679e4497272dd4aa3b0c2b4bc9d0ca430fe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nota/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbbdb26f8d1ff9ce682b4afcf08488d31a5bb20c9079ed3fa55c5ab67be7532->leave($__internal_4dbbdb26f8d1ff9ce682b4afcf08488d31a5bb20c9079ed3fa55c5ab67be7532_prof);

        
        $__internal_8ac67a180666f4bea0afca02282679e4497272dd4aa3b0c2b4bc9d0ca430fe82->leave($__internal_8ac67a180666f4bea0afca02282679e4497272dd4aa3b0c2b4bc9d0ca430fe82_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4d8db93f5cf4d0fc6c4692b16dd6598f57a0ac411db675ca58b44ed0dc36cd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8db93f5cf4d0fc6c4692b16dd6598f57a0ac411db675ca58b44ed0dc36cd5a->enter($__internal_4d8db93f5cf4d0fc6c4692b16dd6598f57a0ac411db675ca58b44ed0dc36cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_be53fbd1f8da4d5eac0a8791c8f0e9cf3c287a736f1f370d620674aa22b237db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be53fbd1f8da4d5eac0a8791c8f0e9cf3c287a736f1f370d620674aa22b237db->enter($__internal_be53fbd1f8da4d5eac0a8791c8f0e9cf3c287a736f1f370d620674aa22b237db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_be53fbd1f8da4d5eac0a8791c8f0e9cf3c287a736f1f370d620674aa22b237db->leave($__internal_be53fbd1f8da4d5eac0a8791c8f0e9cf3c287a736f1f370d620674aa22b237db_prof);

        
        $__internal_4d8db93f5cf4d0fc6c4692b16dd6598f57a0ac411db675ca58b44ed0dc36cd5a->leave($__internal_4d8db93f5cf4d0fc6c4692b16dd6598f57a0ac411db675ca58b44ed0dc36cd5a_prof);

    }

    public function getTemplateName()
    {
        return "nota/edit.html.twig";
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
", "nota/edit.html.twig", "/var/www/html/sispme/app/Resources/views/nota/edit.html.twig");
    }
}
