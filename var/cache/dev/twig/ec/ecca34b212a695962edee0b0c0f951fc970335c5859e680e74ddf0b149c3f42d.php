<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_050e20d373bad963928c13568db78d73f657ec22f6d9d6ae3e34a4aae94ea7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5ace97d0fafda7488aef50c8394c3d7d796a72f6309fe497dd7d54ef463d4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ace97d0fafda7488aef50c8394c3d7d796a72f6309fe497dd7d54ef463d4f6->enter($__internal_e5ace97d0fafda7488aef50c8394c3d7d796a72f6309fe497dd7d54ef463d4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_415e5a4768eb6492d568f63bc54435d42819d682aac4d8dda17b40a4d63263a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415e5a4768eb6492d568f63bc54435d42819d682aac4d8dda17b40a4d63263a2->enter($__internal_415e5a4768eb6492d568f63bc54435d42819d682aac4d8dda17b40a4d63263a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ace97d0fafda7488aef50c8394c3d7d796a72f6309fe497dd7d54ef463d4f6->leave($__internal_e5ace97d0fafda7488aef50c8394c3d7d796a72f6309fe497dd7d54ef463d4f6_prof);

        
        $__internal_415e5a4768eb6492d568f63bc54435d42819d682aac4d8dda17b40a4d63263a2->leave($__internal_415e5a4768eb6492d568f63bc54435d42819d682aac4d8dda17b40a4d63263a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77e06047708d8d9916996e4b642e8fa718ccc31b9a320794b1f4402942134217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e06047708d8d9916996e4b642e8fa718ccc31b9a320794b1f4402942134217->enter($__internal_77e06047708d8d9916996e4b642e8fa718ccc31b9a320794b1f4402942134217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7a51df436fb6f229fcc01d814b0d9240fecbc7c6a29b00948c0adeb084e0ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a51df436fb6f229fcc01d814b0d9240fecbc7c6a29b00948c0adeb084e0ff7->enter($__internal_f7a51df436fb6f229fcc01d814b0d9240fecbc7c6a29b00948c0adeb084e0ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f7a51df436fb6f229fcc01d814b0d9240fecbc7c6a29b00948c0adeb084e0ff7->leave($__internal_f7a51df436fb6f229fcc01d814b0d9240fecbc7c6a29b00948c0adeb084e0ff7_prof);

        
        $__internal_77e06047708d8d9916996e4b642e8fa718ccc31b9a320794b1f4402942134217->leave($__internal_77e06047708d8d9916996e4b642e8fa718ccc31b9a320794b1f4402942134217_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/sispme/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
