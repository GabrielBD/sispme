<?php

/* admin/menu.html.twig */
class __TwigTemplate_248a01ff9b35c7de5e6ee1715b62f11930b4d7c9c69160e8ec80051698c01a2b extends Twig_Template
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
        $__internal_b211c5cf11d3af9358aba3b9080d79337e1b0582f719013f54b5758870af58a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b211c5cf11d3af9358aba3b9080d79337e1b0582f719013f54b5758870af58a4->enter($__internal_b211c5cf11d3af9358aba3b9080d79337e1b0582f719013f54b5758870af58a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/menu.html.twig"));

        $__internal_5169435a0797364494fda335f9b1d9b83ba81e53e5b2a289b7caa3d0ba3f484c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5169435a0797364494fda335f9b1d9b83ba81e53e5b2a289b7caa3d0ba3f484c->enter($__internal_5169435a0797364494fda335f9b1d9b83ba81e53e5b2a289b7caa3d0ba3f484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/menu.html.twig"));

        // line 1
        echo "<div class=\"panel panel-info\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Menú</h3>
  </div>
  <div class=\"panel-body\">
    <ul>
    <li><h4><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\">Inicio</a></h4></li>
    <li><h4>Preinscripciones</h4></li>
    \t<ul>
    \t<li><h4><small><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_preinscripcion_new");
        echo "\">Abrir</a></small></h4></li>
    \t<li><h4><small><a href=\"\">Cerrar</a></small></h4></li>
    \t<li><h4><small><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_preinscripcion_index");
        echo "\">Listar</a></small></h4></li>
    \t</ul>
    <li><h4>Formularios</h4></li>
        <ul>
        <li><h4><small><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulario_index");
        echo "\">Confirmar</a></small></h4></li>
        </ul>
    <li><h4>Notas</h4></li>
    \t<ul>
    \t<li><h4><small><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_nota_new");
        echo "\">Marcar como Recibida</a></small></h4></li>
        <li><h4><small><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_nota_index");
        echo "\">Listar todas las notas</a></small></h4></li>
    \t</ul>
    <li><h4>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </a>
        </h4>
    </li>
    </ul> 
  </div>
</div>";
        
        $__internal_b211c5cf11d3af9358aba3b9080d79337e1b0582f719013f54b5758870af58a4->leave($__internal_b211c5cf11d3af9358aba3b9080d79337e1b0582f719013f54b5758870af58a4_prof);

        
        $__internal_5169435a0797364494fda335f9b1d9b83ba81e53e5b2a289b7caa3d0ba3f484c->leave($__internal_5169435a0797364494fda335f9b1d9b83ba81e53e5b2a289b7caa3d0ba3f484c_prof);

    }

    public function getTemplateName()
    {
        return "admin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  68 => 24,  62 => 21,  58 => 20,  51 => 16,  44 => 12,  39 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-info\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Menú</h3>
  </div>
  <div class=\"panel-body\">
    <ul>
    <li><h4><a href=\"{{ path('admin_homepage') }}\">Inicio</a></h4></li>
    <li><h4>Preinscripciones</h4></li>
    \t<ul>
    \t<li><h4><small><a href=\"{{ path('admin_preinscripcion_new') }}\">Abrir</a></small></h4></li>
    \t<li><h4><small><a href=\"\">Cerrar</a></small></h4></li>
    \t<li><h4><small><a href=\"{{ path('admin_preinscripcion_index') }}\">Listar</a></small></h4></li>
    \t</ul>
    <li><h4>Formularios</h4></li>
        <ul>
        <li><h4><small><a href=\"{{ path('formulario_index') }}\">Confirmar</a></small></h4></li>
        </ul>
    <li><h4>Notas</h4></li>
    \t<ul>
    \t<li><h4><small><a href=\"{{ path('admin_nota_new') }}\">Marcar como Recibida</a></small></h4></li>
        <li><h4><small><a href=\"{{ path('admin_nota_index') }}\">Listar todas las notas</a></small></h4></li>
    \t</ul>
    <li><h4>
        <a href=\"{{ path('fos_user_security_logout') }}\">
        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
        </h4>
    </li>
    </ul> 
  </div>
</div>", "admin/menu.html.twig", "/var/www/html/sispme/app/Resources/views/admin/menu.html.twig");
    }
}
