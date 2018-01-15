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
        $__internal_dbdf226db41eeeb76818ec7e2941fb8def08ebb4e86ac4c22efe23da2060797e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdf226db41eeeb76818ec7e2941fb8def08ebb4e86ac4c22efe23da2060797e->enter($__internal_dbdf226db41eeeb76818ec7e2941fb8def08ebb4e86ac4c22efe23da2060797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0bf2c03ea96ffdba2b28d61cca568c388c7b8c25a6617bfe7e21f52de8256ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf2c03ea96ffdba2b28d61cca568c388c7b8c25a6617bfe7e21f52de8256ae3->enter($__internal_0bf2c03ea96ffdba2b28d61cca568c388c7b8c25a6617bfe7e21f52de8256ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_dbdf226db41eeeb76818ec7e2941fb8def08ebb4e86ac4c22efe23da2060797e->leave($__internal_dbdf226db41eeeb76818ec7e2941fb8def08ebb4e86ac4c22efe23da2060797e_prof);

        
        $__internal_0bf2c03ea96ffdba2b28d61cca568c388c7b8c25a6617bfe7e21f52de8256ae3->leave($__internal_0bf2c03ea96ffdba2b28d61cca568c388c7b8c25a6617bfe7e21f52de8256ae3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_53edaa7451a8b980f3130a27e5325c5a9f669db56d81daba8059d5e5bcc6bed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53edaa7451a8b980f3130a27e5325c5a9f669db56d81daba8059d5e5bcc6bed9->enter($__internal_53edaa7451a8b980f3130a27e5325c5a9f669db56d81daba8059d5e5bcc6bed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8d3fb14f1b6b97622e7291a5e28570cd8fe58c275da0c2eb3741f964e60bd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d3fb14f1b6b97622e7291a5e28570cd8fe58c275da0c2eb3741f964e60bd66->enter($__internal_c8d3fb14f1b6b97622e7291a5e28570cd8fe58c275da0c2eb3741f964e60bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_c8d3fb14f1b6b97622e7291a5e28570cd8fe58c275da0c2eb3741f964e60bd66->leave($__internal_c8d3fb14f1b6b97622e7291a5e28570cd8fe58c275da0c2eb3741f964e60bd66_prof);

        
        $__internal_53edaa7451a8b980f3130a27e5325c5a9f669db56d81daba8059d5e5bcc6bed9->leave($__internal_53edaa7451a8b980f3130a27e5325c5a9f669db56d81daba8059d5e5bcc6bed9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfed45d96ccb02dfdb539910f411ab1040348bb9a7b451b083433d204c7363de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfed45d96ccb02dfdb539910f411ab1040348bb9a7b451b083433d204c7363de->enter($__internal_bfed45d96ccb02dfdb539910f411ab1040348bb9a7b451b083433d204c7363de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_15016f74af925185403b2d719f1dc33d3886da939fca747f750cd4ffd84cf3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15016f74af925185403b2d719f1dc33d3886da939fca747f750cd4ffd84cf3f0->enter($__internal_15016f74af925185403b2d719f1dc33d3886da939fca747f750cd4ffd84cf3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_15016f74af925185403b2d719f1dc33d3886da939fca747f750cd4ffd84cf3f0->leave($__internal_15016f74af925185403b2d719f1dc33d3886da939fca747f750cd4ffd84cf3f0_prof);

        
        $__internal_bfed45d96ccb02dfdb539910f411ab1040348bb9a7b451b083433d204c7363de->leave($__internal_bfed45d96ccb02dfdb539910f411ab1040348bb9a7b451b083433d204c7363de_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a5b7403c27159ac5bdaaa52891378e31db41f32675b335fed9cbdd6809d466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a5b7403c27159ac5bdaaa52891378e31db41f32675b335fed9cbdd6809d466->enter($__internal_e9a5b7403c27159ac5bdaaa52891378e31db41f32675b335fed9cbdd6809d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0fb82dd82f5caee1e1def21b0b3b29bf431a318d94d13a47d51b98a68f7c416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fb82dd82f5caee1e1def21b0b3b29bf431a318d94d13a47d51b98a68f7c416->enter($__internal_c0fb82dd82f5caee1e1def21b0b3b29bf431a318d94d13a47d51b98a68f7c416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
    ";
        
        $__internal_c0fb82dd82f5caee1e1def21b0b3b29bf431a318d94d13a47d51b98a68f7c416->leave($__internal_c0fb82dd82f5caee1e1def21b0b3b29bf431a318d94d13a47d51b98a68f7c416_prof);

        
        $__internal_e9a5b7403c27159ac5bdaaa52891378e31db41f32675b335fed9cbdd6809d466->leave($__internal_e9a5b7403c27159ac5bdaaa52891378e31db41f32675b335fed9cbdd6809d466_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d10e05dceceedc65f91e60826991c0409049ce82e0906bb9c2a08e0141afa619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10e05dceceedc65f91e60826991c0409049ce82e0906bb9c2a08e0141afa619->enter($__internal_d10e05dceceedc65f91e60826991c0409049ce82e0906bb9c2a08e0141afa619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_60c37af04aeadd6226a54406a59cb8d087ba4c6a84c7f278afbec0c0229bcc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c37af04aeadd6226a54406a59cb8d087ba4c6a84c7f278afbec0c0229bcc50->enter($__internal_60c37af04aeadd6226a54406a59cb8d087ba4c6a84c7f278afbec0c0229bcc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_60c37af04aeadd6226a54406a59cb8d087ba4c6a84c7f278afbec0c0229bcc50->leave($__internal_60c37af04aeadd6226a54406a59cb8d087ba4c6a84c7f278afbec0c0229bcc50_prof);

        
        $__internal_d10e05dceceedc65f91e60826991c0409049ce82e0906bb9c2a08e0141afa619->leave($__internal_d10e05dceceedc65f91e60826991c0409049ce82e0906bb9c2a08e0141afa619_prof);

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
