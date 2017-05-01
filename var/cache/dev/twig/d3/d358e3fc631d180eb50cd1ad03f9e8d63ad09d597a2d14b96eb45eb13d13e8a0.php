<?php

/* estadonota/new.html.twig */
class __TwigTemplate_3aa2ca277adca2f3a6f3320aa5f0da848249c10e87e7dec27adc0f8b163c4c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estadonota/new.html.twig", 1);
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
        $__internal_a4004e81ec695de12bed8459ff668ad8e73f752cab89cc1e060d79906f934718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4004e81ec695de12bed8459ff668ad8e73f752cab89cc1e060d79906f934718->enter($__internal_a4004e81ec695de12bed8459ff668ad8e73f752cab89cc1e060d79906f934718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadonota/new.html.twig"));

        $__internal_8ae1609945f0476c71ef18691daa724703f21fbf65c0a95192b7f5930aba6637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae1609945f0476c71ef18691daa724703f21fbf65c0a95192b7f5930aba6637->enter($__internal_8ae1609945f0476c71ef18691daa724703f21fbf65c0a95192b7f5930aba6637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadonota/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4004e81ec695de12bed8459ff668ad8e73f752cab89cc1e060d79906f934718->leave($__internal_a4004e81ec695de12bed8459ff668ad8e73f752cab89cc1e060d79906f934718_prof);

        
        $__internal_8ae1609945f0476c71ef18691daa724703f21fbf65c0a95192b7f5930aba6637->leave($__internal_8ae1609945f0476c71ef18691daa724703f21fbf65c0a95192b7f5930aba6637_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee4c54a12c47d7cd736abee738ef1f85f9cfd1cf1ca985ba82710b09c8d2f46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4c54a12c47d7cd736abee738ef1f85f9cfd1cf1ca985ba82710b09c8d2f46b->enter($__internal_ee4c54a12c47d7cd736abee738ef1f85f9cfd1cf1ca985ba82710b09c8d2f46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af41330302d11b40a8c5ddbb4a919f0be2d1c689ba70deacccfa5daa7af7ad1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af41330302d11b40a8c5ddbb4a919f0be2d1c689ba70deacccfa5daa7af7ad1e->enter($__internal_af41330302d11b40a8c5ddbb4a919f0be2d1c689ba70deacccfa5daa7af7ad1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadonotum creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_estadonota_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_af41330302d11b40a8c5ddbb4a919f0be2d1c689ba70deacccfa5daa7af7ad1e->leave($__internal_af41330302d11b40a8c5ddbb4a919f0be2d1c689ba70deacccfa5daa7af7ad1e_prof);

        
        $__internal_ee4c54a12c47d7cd736abee738ef1f85f9cfd1cf1ca985ba82710b09c8d2f46b->leave($__internal_ee4c54a12c47d7cd736abee738ef1f85f9cfd1cf1ca985ba82710b09c8d2f46b_prof);

    }

    public function getTemplateName()
    {
        return "estadonota/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Estadonotum creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_estadonota_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "estadonota/new.html.twig", "/var/www/html/sispme/app/Resources/views/estadonota/new.html.twig");
    }
}
