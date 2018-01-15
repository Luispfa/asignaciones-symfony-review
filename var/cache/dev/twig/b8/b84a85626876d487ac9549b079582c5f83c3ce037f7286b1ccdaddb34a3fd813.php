<?php

/* base.html.twig */
class __TwigTemplate_4a658e33ffcaab0ebac23ec7730a7e8e471fa6d9dc38d5fef3a22fea83a39fd4 extends Twig_Template
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
        $__internal_88b9457d0fdfcfe81d3544459cb6beb3653b5d37cd13520508dd74b6e8076560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b9457d0fdfcfe81d3544459cb6beb3653b5d37cd13520508dd74b6e8076560->enter($__internal_88b9457d0fdfcfe81d3544459cb6beb3653b5d37cd13520508dd74b6e8076560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_05a6fbef1b41a88b0d89a99753c80ff7e6cb420eb8c5a47ebbfe2e844fb03088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a6fbef1b41a88b0d89a99753c80ff7e6cb420eb8c5a47ebbfe2e844fb03088->enter($__internal_05a6fbef1b41a88b0d89a99753c80ff7e6cb420eb8c5a47ebbfe2e844fb03088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_88b9457d0fdfcfe81d3544459cb6beb3653b5d37cd13520508dd74b6e8076560->leave($__internal_88b9457d0fdfcfe81d3544459cb6beb3653b5d37cd13520508dd74b6e8076560_prof);

        
        $__internal_05a6fbef1b41a88b0d89a99753c80ff7e6cb420eb8c5a47ebbfe2e844fb03088->leave($__internal_05a6fbef1b41a88b0d89a99753c80ff7e6cb420eb8c5a47ebbfe2e844fb03088_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_626b3b6ebad35cf2e5c90616e7cc585a7dd4b1213fc6263c5c0358972b2eccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626b3b6ebad35cf2e5c90616e7cc585a7dd4b1213fc6263c5c0358972b2eccd1->enter($__internal_626b3b6ebad35cf2e5c90616e7cc585a7dd4b1213fc6263c5c0358972b2eccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abca5c2317d3dd36e7c91bd1763df04354c82ab01eee3ae538836f2e97016e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abca5c2317d3dd36e7c91bd1763df04354c82ab01eee3ae538836f2e97016e1a->enter($__internal_abca5c2317d3dd36e7c91bd1763df04354c82ab01eee3ae538836f2e97016e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_abca5c2317d3dd36e7c91bd1763df04354c82ab01eee3ae538836f2e97016e1a->leave($__internal_abca5c2317d3dd36e7c91bd1763df04354c82ab01eee3ae538836f2e97016e1a_prof);

        
        $__internal_626b3b6ebad35cf2e5c90616e7cc585a7dd4b1213fc6263c5c0358972b2eccd1->leave($__internal_626b3b6ebad35cf2e5c90616e7cc585a7dd4b1213fc6263c5c0358972b2eccd1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91f7ed010b3c5a02f35e85cef9efb0bd499272f56fe5191e25662e1140b5284f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f7ed010b3c5a02f35e85cef9efb0bd499272f56fe5191e25662e1140b5284f->enter($__internal_91f7ed010b3c5a02f35e85cef9efb0bd499272f56fe5191e25662e1140b5284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f3008a904ccb2bde6d53d5b8acf489d43471035132d17ac4fbd139f7c03851e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3008a904ccb2bde6d53d5b8acf489d43471035132d17ac4fbd139f7c03851e6->enter($__internal_f3008a904ccb2bde6d53d5b8acf489d43471035132d17ac4fbd139f7c03851e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f3008a904ccb2bde6d53d5b8acf489d43471035132d17ac4fbd139f7c03851e6->leave($__internal_f3008a904ccb2bde6d53d5b8acf489d43471035132d17ac4fbd139f7c03851e6_prof);

        
        $__internal_91f7ed010b3c5a02f35e85cef9efb0bd499272f56fe5191e25662e1140b5284f->leave($__internal_91f7ed010b3c5a02f35e85cef9efb0bd499272f56fe5191e25662e1140b5284f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_75ea19b48625e566bd3c156369415516de53f9de8ae75cc3b674410aea2aff05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ea19b48625e566bd3c156369415516de53f9de8ae75cc3b674410aea2aff05->enter($__internal_75ea19b48625e566bd3c156369415516de53f9de8ae75cc3b674410aea2aff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aedc15a797374e901ff6e1ea84892a96b243b42c9b17b2874335f7a52d47dca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedc15a797374e901ff6e1ea84892a96b243b42c9b17b2874335f7a52d47dca1->enter($__internal_aedc15a797374e901ff6e1ea84892a96b243b42c9b17b2874335f7a52d47dca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "                ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
            ";
        }
        // line 17
        echo "        ";
        
        $__internal_aedc15a797374e901ff6e1ea84892a96b243b42c9b17b2874335f7a52d47dca1->leave($__internal_aedc15a797374e901ff6e1ea84892a96b243b42c9b17b2874335f7a52d47dca1_prof);

        
        $__internal_75ea19b48625e566bd3c156369415516de53f9de8ae75cc3b674410aea2aff05->leave($__internal_75ea19b48625e566bd3c156369415516de53f9de8ae75cc3b674410aea2aff05_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f98b6c4f0b104b0a5fc70893a813d1088f898724b6b031c2c7df1c8ad474a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f98b6c4f0b104b0a5fc70893a813d1088f898724b6b031c2c7df1c8ad474a35->enter($__internal_5f98b6c4f0b104b0a5fc70893a813d1088f898724b6b031c2c7df1c8ad474a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_224f3a8bb597406d7a34e545171bcc1b0228329f67a8c02a049041e1775a88d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224f3a8bb597406d7a34e545171bcc1b0228329f67a8c02a049041e1775a88d5->enter($__internal_224f3a8bb597406d7a34e545171bcc1b0228329f67a8c02a049041e1775a88d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_224f3a8bb597406d7a34e545171bcc1b0228329f67a8c02a049041e1775a88d5->leave($__internal_224f3a8bb597406d7a34e545171bcc1b0228329f67a8c02a049041e1775a88d5_prof);

        
        $__internal_5f98b6c4f0b104b0a5fc70893a813d1088f898724b6b031c2c7df1c8ad474a35->leave($__internal_5f98b6c4f0b104b0a5fc70893a813d1088f898724b6b031c2c7df1c8ad474a35_prof);

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
        return array (  155 => 21,  151 => 20,  146 => 19,  137 => 18,  127 => 17,  121 => 15,  118 => 14,  109 => 13,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 23,  50 => 18,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Asignacion de tareas{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {{ include('menu.html.twig') }}
            {% endif %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('public/js/jquery-3.2.1.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootbox.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/base.html.twig");
    }
}
