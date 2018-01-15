<?php

/* ::base.html.twig */
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
        $__internal_abd09b4a2e6ff3120b934a8175598440c1ecf16ffce7e855b86d3e31f292d673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd09b4a2e6ff3120b934a8175598440c1ecf16ffce7e855b86d3e31f292d673->enter($__internal_abd09b4a2e6ff3120b934a8175598440c1ecf16ffce7e855b86d3e31f292d673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f22df0b2c1812705b31587f09c31a25b8a17aa57436195184dbb2e24dedc5ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22df0b2c1812705b31587f09c31a25b8a17aa57436195184dbb2e24dedc5ef1->enter($__internal_f22df0b2c1812705b31587f09c31a25b8a17aa57436195184dbb2e24dedc5ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 16
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</body>
</html>
";
        
        $__internal_abd09b4a2e6ff3120b934a8175598440c1ecf16ffce7e855b86d3e31f292d673->leave($__internal_abd09b4a2e6ff3120b934a8175598440c1ecf16ffce7e855b86d3e31f292d673_prof);

        
        $__internal_f22df0b2c1812705b31587f09c31a25b8a17aa57436195184dbb2e24dedc5ef1->leave($__internal_f22df0b2c1812705b31587f09c31a25b8a17aa57436195184dbb2e24dedc5ef1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_104ef706d3b06ab86cf6d8854e794b4a0947918cb889c2a1b12ad37f08e95e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104ef706d3b06ab86cf6d8854e794b4a0947918cb889c2a1b12ad37f08e95e01->enter($__internal_104ef706d3b06ab86cf6d8854e794b4a0947918cb889c2a1b12ad37f08e95e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4589f516cf7c5346f97a2f36a14e81fc83bdc86449d4ca41ce2b0fcf838d092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4589f516cf7c5346f97a2f36a14e81fc83bdc86449d4ca41ce2b0fcf838d092->enter($__internal_d4589f516cf7c5346f97a2f36a14e81fc83bdc86449d4ca41ce2b0fcf838d092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_d4589f516cf7c5346f97a2f36a14e81fc83bdc86449d4ca41ce2b0fcf838d092->leave($__internal_d4589f516cf7c5346f97a2f36a14e81fc83bdc86449d4ca41ce2b0fcf838d092_prof);

        
        $__internal_104ef706d3b06ab86cf6d8854e794b4a0947918cb889c2a1b12ad37f08e95e01->leave($__internal_104ef706d3b06ab86cf6d8854e794b4a0947918cb889c2a1b12ad37f08e95e01_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_454dd7e863ebb08da216654dff741390c62d38ace03d503fe7e4249d85e379a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454dd7e863ebb08da216654dff741390c62d38ace03d503fe7e4249d85e379a5->enter($__internal_454dd7e863ebb08da216654dff741390c62d38ace03d503fe7e4249d85e379a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1db6dcb4dfdfb3ade7fbb4dbea7423e80991d5c40c0105d08c8a5862a1659d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db6dcb4dfdfb3ade7fbb4dbea7423e80991d5c40c0105d08c8a5862a1659d1f->enter($__internal_1db6dcb4dfdfb3ade7fbb4dbea7423e80991d5c40c0105d08c8a5862a1659d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_1db6dcb4dfdfb3ade7fbb4dbea7423e80991d5c40c0105d08c8a5862a1659d1f->leave($__internal_1db6dcb4dfdfb3ade7fbb4dbea7423e80991d5c40c0105d08c8a5862a1659d1f_prof);

        
        $__internal_454dd7e863ebb08da216654dff741390c62d38ace03d503fe7e4249d85e379a5->leave($__internal_454dd7e863ebb08da216654dff741390c62d38ace03d503fe7e4249d85e379a5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a023de64e85325e60206c5de99690f7caa880749e34ca73691eb036df608939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a023de64e85325e60206c5de99690f7caa880749e34ca73691eb036df608939->enter($__internal_9a023de64e85325e60206c5de99690f7caa880749e34ca73691eb036df608939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84c4955b8d9202432076e94c6c5e0da8d7217f6c25b283eceef378b336e06f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c4955b8d9202432076e94c6c5e0da8d7217f6c25b283eceef378b336e06f59->enter($__internal_84c4955b8d9202432076e94c6c5e0da8d7217f6c25b283eceef378b336e06f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
    ";
        
        $__internal_84c4955b8d9202432076e94c6c5e0da8d7217f6c25b283eceef378b336e06f59->leave($__internal_84c4955b8d9202432076e94c6c5e0da8d7217f6c25b283eceef378b336e06f59_prof);

        
        $__internal_9a023de64e85325e60206c5de99690f7caa880749e34ca73691eb036df608939->leave($__internal_9a023de64e85325e60206c5de99690f7caa880749e34ca73691eb036df608939_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aaef4a941b7d3fe80ec12df66240c5dc910deb3ddb0a0126e2be9f9e4f38b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aaef4a941b7d3fe80ec12df66240c5dc910deb3ddb0a0126e2be9f9e4f38b1e->enter($__internal_4aaef4a941b7d3fe80ec12df66240c5dc910deb3ddb0a0126e2be9f9e4f38b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5b63e2de3558eb86234fe12382f11debebcb71c5294e19461a1e8d0a36171a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b63e2de3558eb86234fe12382f11debebcb71c5294e19461a1e8d0a36171a28->enter($__internal_5b63e2de3558eb86234fe12382f11debebcb71c5294e19461a1e8d0a36171a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_5b63e2de3558eb86234fe12382f11debebcb71c5294e19461a1e8d0a36171a28->leave($__internal_5b63e2de3558eb86234fe12382f11debebcb71c5294e19461a1e8d0a36171a28_prof);

        
        $__internal_4aaef4a941b7d3fe80ec12df66240c5dc910deb3ddb0a0126e2be9f9e4f38b1e->leave($__internal_4aaef4a941b7d3fe80ec12df66240c5dc910deb3ddb0a0126e2be9f9e4f38b1e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 19,  145 => 18,  140 => 17,  131 => 16,  118 => 14,  109 => 13,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 21,  50 => 16,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
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
        {{ include('menu.html.twig') }}
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('public/js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('public/js/bootbox.min.js') }}\"></script>
    {% endblock %}
</body>
</html>
", "::base.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/base.html.twig");
    }
}
