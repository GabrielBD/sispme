<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbb845eb0eac7b29db2e34b322efa6edd19666ea268a686219e32e89e5df1cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f187393ae29146963acfb759e4811ad3bac982c621e8065d510fdeb50a6f049c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f187393ae29146963acfb759e4811ad3bac982c621e8065d510fdeb50a6f049c->enter($__internal_f187393ae29146963acfb759e4811ad3bac982c621e8065d510fdeb50a6f049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_57a47dbd4ffb5006a66e4c39950888c8c46d9c0e826f053d94c1bcb504cf5239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a47dbd4ffb5006a66e4c39950888c8c46d9c0e826f053d94c1bcb504cf5239->enter($__internal_57a47dbd4ffb5006a66e4c39950888c8c46d9c0e826f053d94c1bcb504cf5239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f187393ae29146963acfb759e4811ad3bac982c621e8065d510fdeb50a6f049c->leave($__internal_f187393ae29146963acfb759e4811ad3bac982c621e8065d510fdeb50a6f049c_prof);

        
        $__internal_57a47dbd4ffb5006a66e4c39950888c8c46d9c0e826f053d94c1bcb504cf5239->leave($__internal_57a47dbd4ffb5006a66e4c39950888c8c46d9c0e826f053d94c1bcb504cf5239_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64eecdc73dca99aa9aa9025ef9e5e29941ad9af991d6ad36403293d3ce141435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64eecdc73dca99aa9aa9025ef9e5e29941ad9af991d6ad36403293d3ce141435->enter($__internal_64eecdc73dca99aa9aa9025ef9e5e29941ad9af991d6ad36403293d3ce141435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a5e8767d37ef3805a8fc14bdf9ece812263267571355436863113ffd5646901d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e8767d37ef3805a8fc14bdf9ece812263267571355436863113ffd5646901d->enter($__internal_a5e8767d37ef3805a8fc14bdf9ece812263267571355436863113ffd5646901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a5e8767d37ef3805a8fc14bdf9ece812263267571355436863113ffd5646901d->leave($__internal_a5e8767d37ef3805a8fc14bdf9ece812263267571355436863113ffd5646901d_prof);

        
        $__internal_64eecdc73dca99aa9aa9025ef9e5e29941ad9af991d6ad36403293d3ce141435->leave($__internal_64eecdc73dca99aa9aa9025ef9e5e29941ad9af991d6ad36403293d3ce141435_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/sispme/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
