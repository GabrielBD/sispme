<?php

/* base.html.twig */
class __TwigTemplate_1f5723ad171401e5b8264b5aed33aa598c4353d42e0f0de9f181dc05c06d08fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c9bc1291868d7496e799a45b1ea0af7cd2b429f0b39cd8957438dbd7623ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c9bc1291868d7496e799a45b1ea0af7cd2b429f0b39cd8957438dbd7623ac2->enter($__internal_29c9bc1291868d7496e799a45b1ea0af7cd2b429f0b39cd8957438dbd7623ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_792dbb8cccb47491eae94e8f1f2f5f9787bf0ae5213e59587ebe5b9ccd0af560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792dbb8cccb47491eae94e8f1f2f5f9787bf0ae5213e59587ebe5b9ccd0af560->enter($__internal_792dbb8cccb47491eae94e8f1f2f5f9787bf0ae5213e59587ebe5b9ccd0af560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <div class=\"container-fluid\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>

        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>



";
        
        $__internal_29c9bc1291868d7496e799a45b1ea0af7cd2b429f0b39cd8957438dbd7623ac2->leave($__internal_29c9bc1291868d7496e799a45b1ea0af7cd2b429f0b39cd8957438dbd7623ac2_prof);

        
        $__internal_792dbb8cccb47491eae94e8f1f2f5f9787bf0ae5213e59587ebe5b9ccd0af560->leave($__internal_792dbb8cccb47491eae94e8f1f2f5f9787bf0ae5213e59587ebe5b9ccd0af560_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a599bc39178ce7b10887eff35ffaf0c77d4684870b3a185d83fac50d659901d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a599bc39178ce7b10887eff35ffaf0c77d4684870b3a185d83fac50d659901d7->enter($__internal_a599bc39178ce7b10887eff35ffaf0c77d4684870b3a185d83fac50d659901d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85241468e428ed8d0d526bf8e303cf97757f7b1646a7612ea722a23e591b2380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85241468e428ed8d0d526bf8e303cf97757f7b1646a7612ea722a23e591b2380->enter($__internal_85241468e428ed8d0d526bf8e303cf97757f7b1646a7612ea722a23e591b2380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SISPME";
        
        $__internal_85241468e428ed8d0d526bf8e303cf97757f7b1646a7612ea722a23e591b2380->leave($__internal_85241468e428ed8d0d526bf8e303cf97757f7b1646a7612ea722a23e591b2380_prof);

        
        $__internal_a599bc39178ce7b10887eff35ffaf0c77d4684870b3a185d83fac50d659901d7->leave($__internal_a599bc39178ce7b10887eff35ffaf0c77d4684870b3a185d83fac50d659901d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d581b83b44d2a2bca331b76f178ae85b7036b224f74e2d9918ac889e05563ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d581b83b44d2a2bca331b76f178ae85b7036b224f74e2d9918ac889e05563ec->enter($__internal_3d581b83b44d2a2bca331b76f178ae85b7036b224f74e2d9918ac889e05563ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9fb8f8c03bc291b4081e1d6af26a2ffb5d2cd71c2a55104aa09c985078a0f514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb8f8c03bc291b4081e1d6af26a2ffb5d2cd71c2a55104aa09c985078a0f514->enter($__internal_9fb8f8c03bc291b4081e1d6af26a2ffb5d2cd71c2a55104aa09c985078a0f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.eot"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.svg"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.woff"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.woff2"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_9fb8f8c03bc291b4081e1d6af26a2ffb5d2cd71c2a55104aa09c985078a0f514->leave($__internal_9fb8f8c03bc291b4081e1d6af26a2ffb5d2cd71c2a55104aa09c985078a0f514_prof);

        
        $__internal_3d581b83b44d2a2bca331b76f178ae85b7036b224f74e2d9918ac889e05563ec->leave($__internal_3d581b83b44d2a2bca331b76f178ae85b7036b224f74e2d9918ac889e05563ec_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcf431a8ce9727364d3ef6eec17db9b3ae7233c5c28494609b4024ac586a1471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf431a8ce9727364d3ef6eec17db9b3ae7233c5c28494609b4024ac586a1471->enter($__internal_dcf431a8ce9727364d3ef6eec17db9b3ae7233c5c28494609b4024ac586a1471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c72516afdfd3bea0c814dadec46f2da69c8dc5b10b306797d22b43e45c5333b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72516afdfd3bea0c814dadec46f2da69c8dc5b10b306797d22b43e45c5333b1->enter($__internal_c72516afdfd3bea0c814dadec46f2da69c8dc5b10b306797d22b43e45c5333b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "      
        ";
        
        $__internal_c72516afdfd3bea0c814dadec46f2da69c8dc5b10b306797d22b43e45c5333b1->leave($__internal_c72516afdfd3bea0c814dadec46f2da69c8dc5b10b306797d22b43e45c5333b1_prof);

        
        $__internal_dcf431a8ce9727364d3ef6eec17db9b3ae7233c5c28494609b4024ac586a1471->leave($__internal_dcf431a8ce9727364d3ef6eec17db9b3ae7233c5c28494609b4024ac586a1471_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c145eb0f89b75a41ee194e4183fc27f199da0db48fbe9640ae02bc5949cbc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c145eb0f89b75a41ee194e4183fc27f199da0db48fbe9640ae02bc5949cbc09->enter($__internal_9c145eb0f89b75a41ee194e4183fc27f199da0db48fbe9640ae02bc5949cbc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7bea17e52212e504d817129eea514acfd3a147c609e2aa077628557f20de2bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bea17e52212e504d817129eea514acfd3a147c609e2aa077628557f20de2bf6->enter($__internal_7bea17e52212e504d817129eea514acfd3a147c609e2aa077628557f20de2bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-2.2.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7bea17e52212e504d817129eea514acfd3a147c609e2aa077628557f20de2bf6->leave($__internal_7bea17e52212e504d817129eea514acfd3a147c609e2aa077628557f20de2bf6_prof);

        
        $__internal_9c145eb0f89b75a41ee194e4183fc27f199da0db48fbe9640ae02bc5949cbc09->leave($__internal_9c145eb0f89b75a41ee194e4183fc27f199da0db48fbe9640ae02bc5949cbc09_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 25,  158 => 24,  149 => 23,  130 => 19,  118 => 12,  114 => 11,  110 => 10,  106 => 9,  100 => 7,  91 => 6,  73 => 5,  58 => 27,  56 => 23,  52 => 21,  50 => 19,  41 => 14,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}SISPME{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.eot') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.svg') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.woff') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/app/fonts/glyphicons-halflings-regular.woff2')}}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        
        <div class=\"container-fluid\">
        {% block body %}      
        {% endblock %}
        </div>

        {% block javascripts %}
        <script src=\"{{ asset('bundles/app/js/jquery-2.2.3.js') }}\"></script>
        <script src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>



", "base.html.twig", "/var/www/html/sispme/app/Resources/views/base.html.twig");
    }
}
