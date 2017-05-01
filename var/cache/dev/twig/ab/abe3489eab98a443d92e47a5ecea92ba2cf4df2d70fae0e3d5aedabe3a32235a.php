<?php

/* preinscripcion/new.html.twig */
class __TwigTemplate_cd7220036194ab20607546e3c10b40b7bbe6165b9f00f1c9699523498b251a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.html.twig", "preinscripcion/new.html.twig", 1);
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
        $__internal_8a57024454fbd1e7b9f1da195bee34399daf20484862f4f203aaa891ca4137ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a57024454fbd1e7b9f1da195bee34399daf20484862f4f203aaa891ca4137ae->enter($__internal_8a57024454fbd1e7b9f1da195bee34399daf20484862f4f203aaa891ca4137ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/new.html.twig"));

        $__internal_6cbfe4d705cec33fd27e70e141167195bcb9f8382f81ee901450c7bba52cd2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbfe4d705cec33fd27e70e141167195bcb9f8382f81ee901450c7bba52cd2d0->enter($__internal_6cbfe4d705cec33fd27e70e141167195bcb9f8382f81ee901450c7bba52cd2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preinscripcion/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a57024454fbd1e7b9f1da195bee34399daf20484862f4f203aaa891ca4137ae->leave($__internal_8a57024454fbd1e7b9f1da195bee34399daf20484862f4f203aaa891ca4137ae_prof);

        
        $__internal_6cbfe4d705cec33fd27e70e141167195bcb9f8382f81ee901450c7bba52cd2d0->leave($__internal_6cbfe4d705cec33fd27e70e141167195bcb9f8382f81ee901450c7bba52cd2d0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_bb7a20bfadbb9cd5756c23de78a843844a116b6f78924b166b985d34c5dc8d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7a20bfadbb9cd5756c23de78a843844a116b6f78924b166b985d34c5dc8d8f->enter($__internal_bb7a20bfadbb9cd5756c23de78a843844a116b6f78924b166b985d34c5dc8d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_7475d3f721c013479162118188fc68ec897b51ba96b2c7142bed253bde1df3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7475d3f721c013479162118188fc68ec897b51ba96b2c7142bed253bde1df3c1->enter($__internal_7475d3f721c013479162118188fc68ec897b51ba96b2c7142bed253bde1df3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Abir Preinscripción</h3>
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
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Crear\" />
        </div>
        </div>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_7475d3f721c013479162118188fc68ec897b51ba96b2c7142bed253bde1df3c1->leave($__internal_7475d3f721c013479162118188fc68ec897b51ba96b2c7142bed253bde1df3c1_prof);

        
        $__internal_bb7a20bfadbb9cd5756c23de78a843844a116b6f78924b166b985d34c5dc8d8f->leave($__internal_bb7a20bfadbb9cd5756c23de78a843844a116b6f78924b166b985d34c5dc8d8f_prof);

    }

    public function getTemplateName()
    {
        return "preinscripcion/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  67 => 14,  62 => 12,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"panel-title\">Abir Preinscripción</h3>
    </div>
<div class=\"panel-body\">
    
    {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

    {{ form_start(form) }}

        {{ form_widget(form) }}
        <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Crear\" />
        </div>
        </div>
    {{ form_end(form) }}
</div>
</div>
{% endblock %}
", "preinscripcion/new.html.twig", "/var/www/html/sispme/app/Resources/views/preinscripcion/new.html.twig");
    }
}
