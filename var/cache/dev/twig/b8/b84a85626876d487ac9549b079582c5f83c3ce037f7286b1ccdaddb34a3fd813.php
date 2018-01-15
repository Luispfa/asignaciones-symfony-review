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
        $__internal_8ab4e80c6b52e085bd73e3b161b62d5fa59b02aaaba74313db8e05c0ed0adfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab4e80c6b52e085bd73e3b161b62d5fa59b02aaaba74313db8e05c0ed0adfed->enter($__internal_8ab4e80c6b52e085bd73e3b161b62d5fa59b02aaaba74313db8e05c0ed0adfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f00d064f3aedb5433485a024ade87afa95b1f382c4b73700ae70746108eff05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f00d064f3aedb5433485a024ade87afa95b1f382c4b73700ae70746108eff05->enter($__internal_5f00d064f3aedb5433485a024ade87afa95b1f382c4b73700ae70746108eff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8ab4e80c6b52e085bd73e3b161b62d5fa59b02aaaba74313db8e05c0ed0adfed->leave($__internal_8ab4e80c6b52e085bd73e3b161b62d5fa59b02aaaba74313db8e05c0ed0adfed_prof);

        
        $__internal_5f00d064f3aedb5433485a024ade87afa95b1f382c4b73700ae70746108eff05->leave($__internal_5f00d064f3aedb5433485a024ade87afa95b1f382c4b73700ae70746108eff05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_246f54cc54b787b4284424ffdb9901bda52210cc291d3193e9dd05496a29baa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246f54cc54b787b4284424ffdb9901bda52210cc291d3193e9dd05496a29baa8->enter($__internal_246f54cc54b787b4284424ffdb9901bda52210cc291d3193e9dd05496a29baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e795604b2d05c4f06469877da8d120ed527a7bd5c2ebd2cfa574134e5e9d4413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e795604b2d05c4f06469877da8d120ed527a7bd5c2ebd2cfa574134e5e9d4413->enter($__internal_e795604b2d05c4f06469877da8d120ed527a7bd5c2ebd2cfa574134e5e9d4413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_e795604b2d05c4f06469877da8d120ed527a7bd5c2ebd2cfa574134e5e9d4413->leave($__internal_e795604b2d05c4f06469877da8d120ed527a7bd5c2ebd2cfa574134e5e9d4413_prof);

        
        $__internal_246f54cc54b787b4284424ffdb9901bda52210cc291d3193e9dd05496a29baa8->leave($__internal_246f54cc54b787b4284424ffdb9901bda52210cc291d3193e9dd05496a29baa8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08b90a20f80d82c549520112e8bf9fd1ac804d48b6049ada7643948991f46268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b90a20f80d82c549520112e8bf9fd1ac804d48b6049ada7643948991f46268->enter($__internal_08b90a20f80d82c549520112e8bf9fd1ac804d48b6049ada7643948991f46268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae81f4b3b6a38f6b3341c21a1bbba584c036271e7b449c44ef50b58eeb20999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae81f4b3b6a38f6b3341c21a1bbba584c036271e7b449c44ef50b58eeb20999e->enter($__internal_ae81f4b3b6a38f6b3341c21a1bbba584c036271e7b449c44ef50b58eeb20999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ae81f4b3b6a38f6b3341c21a1bbba584c036271e7b449c44ef50b58eeb20999e->leave($__internal_ae81f4b3b6a38f6b3341c21a1bbba584c036271e7b449c44ef50b58eeb20999e_prof);

        
        $__internal_08b90a20f80d82c549520112e8bf9fd1ac804d48b6049ada7643948991f46268->leave($__internal_08b90a20f80d82c549520112e8bf9fd1ac804d48b6049ada7643948991f46268_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_abae909e09785da57f5a131c60de21b0282d02cb687b34ef996e21f64487d663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abae909e09785da57f5a131c60de21b0282d02cb687b34ef996e21f64487d663->enter($__internal_abae909e09785da57f5a131c60de21b0282d02cb687b34ef996e21f64487d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc7e7da94ea5ec05c40e2c1495289fd65323d95e2b80673752171ff87ae004d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7e7da94ea5ec05c40e2c1495289fd65323d95e2b80673752171ff87ae004d2->enter($__internal_fc7e7da94ea5ec05c40e2c1495289fd65323d95e2b80673752171ff87ae004d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc7e7da94ea5ec05c40e2c1495289fd65323d95e2b80673752171ff87ae004d2->leave($__internal_fc7e7da94ea5ec05c40e2c1495289fd65323d95e2b80673752171ff87ae004d2_prof);

        
        $__internal_abae909e09785da57f5a131c60de21b0282d02cb687b34ef996e21f64487d663->leave($__internal_abae909e09785da57f5a131c60de21b0282d02cb687b34ef996e21f64487d663_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cf3bb42d7989f7cc1aa21b4bafe31320daf234b1e7565ece122b4c84d393bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf3bb42d7989f7cc1aa21b4bafe31320daf234b1e7565ece122b4c84d393bdd->enter($__internal_9cf3bb42d7989f7cc1aa21b4bafe31320daf234b1e7565ece122b4c84d393bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5f0e273bad8e92831ec9c8b18449aa088d57652eaaee5a1b797f50ee9de64f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f0e273bad8e92831ec9c8b18449aa088d57652eaaee5a1b797f50ee9de64f4->enter($__internal_c5f0e273bad8e92831ec9c8b18449aa088d57652eaaee5a1b797f50ee9de64f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c5f0e273bad8e92831ec9c8b18449aa088d57652eaaee5a1b797f50ee9de64f4->leave($__internal_c5f0e273bad8e92831ec9c8b18449aa088d57652eaaee5a1b797f50ee9de64f4_prof);

        
        $__internal_9cf3bb42d7989f7cc1aa21b4bafe31320daf234b1e7565ece122b4c84d393bdd->leave($__internal_9cf3bb42d7989f7cc1aa21b4bafe31320daf234b1e7565ece122b4c84d393bdd_prof);

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
