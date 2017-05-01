<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9b68d0365e7643d36686183f690c7cb95b40c055bd388a604e824126a9efb7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c10a3df69c449cfde5c3fc6dc12803061ef470689d8944a08f60aa0b9020979e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10a3df69c449cfde5c3fc6dc12803061ef470689d8944a08f60aa0b9020979e->enter($__internal_c10a3df69c449cfde5c3fc6dc12803061ef470689d8944a08f60aa0b9020979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7d9ce8fda50a903043cf112ac8b8e889c238b0798176e452b22009f9e3e0a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d9ce8fda50a903043cf112ac8b8e889c238b0798176e452b22009f9e3e0a20->enter($__internal_f7d9ce8fda50a903043cf112ac8b8e889c238b0798176e452b22009f9e3e0a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10a3df69c449cfde5c3fc6dc12803061ef470689d8944a08f60aa0b9020979e->leave($__internal_c10a3df69c449cfde5c3fc6dc12803061ef470689d8944a08f60aa0b9020979e_prof);

        
        $__internal_f7d9ce8fda50a903043cf112ac8b8e889c238b0798176e452b22009f9e3e0a20->leave($__internal_f7d9ce8fda50a903043cf112ac8b8e889c238b0798176e452b22009f9e3e0a20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf25ab7040af79e7c4d89291df4f5d1ce203ad6592734e635d16d9f04990d8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf25ab7040af79e7c4d89291df4f5d1ce203ad6592734e635d16d9f04990d8fe->enter($__internal_cf25ab7040af79e7c4d89291df4f5d1ce203ad6592734e635d16d9f04990d8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d1ad048d2446e44d590cb1412b8071dd24b1caed665e8a05ecdfe70e2a528c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1ad048d2446e44d590cb1412b8071dd24b1caed665e8a05ecdfe70e2a528c0->enter($__internal_7d1ad048d2446e44d590cb1412b8071dd24b1caed665e8a05ecdfe70e2a528c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d1ad048d2446e44d590cb1412b8071dd24b1caed665e8a05ecdfe70e2a528c0->leave($__internal_7d1ad048d2446e44d590cb1412b8071dd24b1caed665e8a05ecdfe70e2a528c0_prof);

        
        $__internal_cf25ab7040af79e7c4d89291df4f5d1ce203ad6592734e635d16d9f04990d8fe->leave($__internal_cf25ab7040af79e7c4d89291df4f5d1ce203ad6592734e635d16d9f04990d8fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bb2d43539ad2f95e35fbc65d445b69a31e578fb0047c8c310a3344171c99a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb2d43539ad2f95e35fbc65d445b69a31e578fb0047c8c310a3344171c99a4a->enter($__internal_2bb2d43539ad2f95e35fbc65d445b69a31e578fb0047c8c310a3344171c99a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da422156925c3319658534976adc821c66e411b554a24d8ab6bb43cf42fae53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da422156925c3319658534976adc821c66e411b554a24d8ab6bb43cf42fae53e->enter($__internal_da422156925c3319658534976adc821c66e411b554a24d8ab6bb43cf42fae53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da422156925c3319658534976adc821c66e411b554a24d8ab6bb43cf42fae53e->leave($__internal_da422156925c3319658534976adc821c66e411b554a24d8ab6bb43cf42fae53e_prof);

        
        $__internal_2bb2d43539ad2f95e35fbc65d445b69a31e578fb0047c8c310a3344171c99a4a->leave($__internal_2bb2d43539ad2f95e35fbc65d445b69a31e578fb0047c8c310a3344171c99a4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20bf3aa8940da921216b11151def621c16218c33c0a533c5e88f33cbf118e030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bf3aa8940da921216b11151def621c16218c33c0a533c5e88f33cbf118e030->enter($__internal_20bf3aa8940da921216b11151def621c16218c33c0a533c5e88f33cbf118e030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_381fe96c02fe3e3a7e13066016a7a7bd95ba5664aaa48d6717b28c31dd4913ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381fe96c02fe3e3a7e13066016a7a7bd95ba5664aaa48d6717b28c31dd4913ca->enter($__internal_381fe96c02fe3e3a7e13066016a7a7bd95ba5664aaa48d6717b28c31dd4913ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_381fe96c02fe3e3a7e13066016a7a7bd95ba5664aaa48d6717b28c31dd4913ca->leave($__internal_381fe96c02fe3e3a7e13066016a7a7bd95ba5664aaa48d6717b28c31dd4913ca_prof);

        
        $__internal_20bf3aa8940da921216b11151def621c16218c33c0a533c5e88f33cbf118e030->leave($__internal_20bf3aa8940da921216b11151def621c16218c33c0a533c5e88f33cbf118e030_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/sispme/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
