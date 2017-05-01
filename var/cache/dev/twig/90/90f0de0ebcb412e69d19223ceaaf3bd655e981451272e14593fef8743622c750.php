<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_e78b468de3bed8206fdaea0f99d70bac990877e91597afa94ec2d6dc465638eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf66de66142b25c9e370d9177fe3998ce3c3b1b149f494d0cd44d913626d3a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf66de66142b25c9e370d9177fe3998ce3c3b1b149f494d0cd44d913626d3a7a->enter($__internal_bf66de66142b25c9e370d9177fe3998ce3c3b1b149f494d0cd44d913626d3a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_fe1f79fb643915fe753225f2f49bd793d693c13b3221defe96ede9557151872a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1f79fb643915fe753225f2f49bd793d693c13b3221defe96ede9557151872a->enter($__internal_fe1f79fb643915fe753225f2f49bd793d693c13b3221defe96ede9557151872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bf66de66142b25c9e370d9177fe3998ce3c3b1b149f494d0cd44d913626d3a7a->leave($__internal_bf66de66142b25c9e370d9177fe3998ce3c3b1b149f494d0cd44d913626d3a7a_prof);

        
        $__internal_fe1f79fb643915fe753225f2f49bd793d693c13b3221defe96ede9557151872a->leave($__internal_fe1f79fb643915fe753225f2f49bd793d693c13b3221defe96ede9557151872a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/sispme/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
