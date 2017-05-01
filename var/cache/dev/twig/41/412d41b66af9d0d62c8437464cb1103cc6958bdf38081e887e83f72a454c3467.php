<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_285fd23d16de90e4466f1d9db3a87d48d2edadbbec7a90a2b4cb211848743dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bfa4b84baa30d314593a4f38ba7c854ee83cc2557d82083234777c25a5e8d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfa4b84baa30d314593a4f38ba7c854ee83cc2557d82083234777c25a5e8d43->enter($__internal_6bfa4b84baa30d314593a4f38ba7c854ee83cc2557d82083234777c25a5e8d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_03749f067b8060048fe54b2db6c26a77d9a24464b55847113e79bba70b8b37f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03749f067b8060048fe54b2db6c26a77d9a24464b55847113e79bba70b8b37f5->enter($__internal_03749f067b8060048fe54b2db6c26a77d9a24464b55847113e79bba70b8b37f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bfa4b84baa30d314593a4f38ba7c854ee83cc2557d82083234777c25a5e8d43->leave($__internal_6bfa4b84baa30d314593a4f38ba7c854ee83cc2557d82083234777c25a5e8d43_prof);

        
        $__internal_03749f067b8060048fe54b2db6c26a77d9a24464b55847113e79bba70b8b37f5->leave($__internal_03749f067b8060048fe54b2db6c26a77d9a24464b55847113e79bba70b8b37f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_374263a730942120fafb830d8559a1d414f2d3b655ec80e664c0bc9f36cb3ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374263a730942120fafb830d8559a1d414f2d3b655ec80e664c0bc9f36cb3ad8->enter($__internal_374263a730942120fafb830d8559a1d414f2d3b655ec80e664c0bc9f36cb3ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6fda7be675e44434761e2f0e3bcd804d0bc6ce18496ee15f5c231cfac1e7b57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fda7be675e44434761e2f0e3bcd804d0bc6ce18496ee15f5c231cfac1e7b57a->enter($__internal_6fda7be675e44434761e2f0e3bcd804d0bc6ce18496ee15f5c231cfac1e7b57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6fda7be675e44434761e2f0e3bcd804d0bc6ce18496ee15f5c231cfac1e7b57a->leave($__internal_6fda7be675e44434761e2f0e3bcd804d0bc6ce18496ee15f5c231cfac1e7b57a_prof);

        
        $__internal_374263a730942120fafb830d8559a1d414f2d3b655ec80e664c0bc9f36cb3ad8->leave($__internal_374263a730942120fafb830d8559a1d414f2d3b655ec80e664c0bc9f36cb3ad8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4e127dc2b6850dad5fad0b9d3fbd2b3e0a5921fd7081533eaf0adf64a846cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e127dc2b6850dad5fad0b9d3fbd2b3e0a5921fd7081533eaf0adf64a846cd5->enter($__internal_b4e127dc2b6850dad5fad0b9d3fbd2b3e0a5921fd7081533eaf0adf64a846cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79b350a544a907c9b3208c067c5b0d7cba24983e2519c6d846ea86914a931cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b350a544a907c9b3208c067c5b0d7cba24983e2519c6d846ea86914a931cf7->enter($__internal_79b350a544a907c9b3208c067c5b0d7cba24983e2519c6d846ea86914a931cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_79b350a544a907c9b3208c067c5b0d7cba24983e2519c6d846ea86914a931cf7->leave($__internal_79b350a544a907c9b3208c067c5b0d7cba24983e2519c6d846ea86914a931cf7_prof);

        
        $__internal_b4e127dc2b6850dad5fad0b9d3fbd2b3e0a5921fd7081533eaf0adf64a846cd5->leave($__internal_b4e127dc2b6850dad5fad0b9d3fbd2b3e0a5921fd7081533eaf0adf64a846cd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e86cbcccb3fc9cbdf26d7d80cc13777f5c65c465b6ae6ee81f922c057c1189b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86cbcccb3fc9cbdf26d7d80cc13777f5c65c465b6ae6ee81f922c057c1189b7->enter($__internal_e86cbcccb3fc9cbdf26d7d80cc13777f5c65c465b6ae6ee81f922c057c1189b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d12b58be7603d413aca330b6f0ad951dc0767dc9933b7be169d5b96682a23d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12b58be7603d413aca330b6f0ad951dc0767dc9933b7be169d5b96682a23d0f->enter($__internal_d12b58be7603d413aca330b6f0ad951dc0767dc9933b7be169d5b96682a23d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d12b58be7603d413aca330b6f0ad951dc0767dc9933b7be169d5b96682a23d0f->leave($__internal_d12b58be7603d413aca330b6f0ad951dc0767dc9933b7be169d5b96682a23d0f_prof);

        
        $__internal_e86cbcccb3fc9cbdf26d7d80cc13777f5c65c465b6ae6ee81f922c057c1189b7->leave($__internal_e86cbcccb3fc9cbdf26d7d80cc13777f5c65c465b6ae6ee81f922c057c1189b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/sispme/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
