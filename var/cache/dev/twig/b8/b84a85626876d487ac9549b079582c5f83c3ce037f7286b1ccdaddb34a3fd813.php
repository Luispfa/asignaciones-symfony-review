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
        $__internal_e516da33f404d81968e423a9cd9eac08ea65bd61d45e32f5d8ef8904e8b8aacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e516da33f404d81968e423a9cd9eac08ea65bd61d45e32f5d8ef8904e8b8aacb->enter($__internal_e516da33f404d81968e423a9cd9eac08ea65bd61d45e32f5d8ef8904e8b8aacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c626996d94adb871e95662581ee5f025ae0cb82614df708420734af19c336619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c626996d94adb871e95662581ee5f025ae0cb82614df708420734af19c336619->enter($__internal_c626996d94adb871e95662581ee5f025ae0cb82614df708420734af19c336619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e516da33f404d81968e423a9cd9eac08ea65bd61d45e32f5d8ef8904e8b8aacb->leave($__internal_e516da33f404d81968e423a9cd9eac08ea65bd61d45e32f5d8ef8904e8b8aacb_prof);

        
        $__internal_c626996d94adb871e95662581ee5f025ae0cb82614df708420734af19c336619->leave($__internal_c626996d94adb871e95662581ee5f025ae0cb82614df708420734af19c336619_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c5f1ee2e9c67dcc1eb218a00b836bf55ac6f2d7ca1b60d1137af0721c0ee782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5f1ee2e9c67dcc1eb218a00b836bf55ac6f2d7ca1b60d1137af0721c0ee782->enter($__internal_2c5f1ee2e9c67dcc1eb218a00b836bf55ac6f2d7ca1b60d1137af0721c0ee782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d5f58728981e9c76b957d868d9188121e6b306c06c2b8d9d733a17028f6cf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5f58728981e9c76b957d868d9188121e6b306c06c2b8d9d733a17028f6cf0f->enter($__internal_1d5f58728981e9c76b957d868d9188121e6b306c06c2b8d9d733a17028f6cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_1d5f58728981e9c76b957d868d9188121e6b306c06c2b8d9d733a17028f6cf0f->leave($__internal_1d5f58728981e9c76b957d868d9188121e6b306c06c2b8d9d733a17028f6cf0f_prof);

        
        $__internal_2c5f1ee2e9c67dcc1eb218a00b836bf55ac6f2d7ca1b60d1137af0721c0ee782->leave($__internal_2c5f1ee2e9c67dcc1eb218a00b836bf55ac6f2d7ca1b60d1137af0721c0ee782_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe963119fad5da7c7704aabe5163ebe0a0097496adf9a74464831d7f1f170858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe963119fad5da7c7704aabe5163ebe0a0097496adf9a74464831d7f1f170858->enter($__internal_fe963119fad5da7c7704aabe5163ebe0a0097496adf9a74464831d7f1f170858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bf7ddec8ab22de921900ab9374910e055bafab1d3c9f706978eb673b62b830eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7ddec8ab22de921900ab9374910e055bafab1d3c9f706978eb673b62b830eb->enter($__internal_bf7ddec8ab22de921900ab9374910e055bafab1d3c9f706978eb673b62b830eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_bf7ddec8ab22de921900ab9374910e055bafab1d3c9f706978eb673b62b830eb->leave($__internal_bf7ddec8ab22de921900ab9374910e055bafab1d3c9f706978eb673b62b830eb_prof);

        
        $__internal_fe963119fad5da7c7704aabe5163ebe0a0097496adf9a74464831d7f1f170858->leave($__internal_fe963119fad5da7c7704aabe5163ebe0a0097496adf9a74464831d7f1f170858_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_29112fd28b6be8f753f2473efee84de82130b66f2b0c81f5e0e768a9682210d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29112fd28b6be8f753f2473efee84de82130b66f2b0c81f5e0e768a9682210d4->enter($__internal_29112fd28b6be8f753f2473efee84de82130b66f2b0c81f5e0e768a9682210d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7740b2002301098af7b905066ef4007ed05cf79dda6e6d21e44720d30cacd741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7740b2002301098af7b905066ef4007ed05cf79dda6e6d21e44720d30cacd741->enter($__internal_7740b2002301098af7b905066ef4007ed05cf79dda6e6d21e44720d30cacd741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
    ";
        
        $__internal_7740b2002301098af7b905066ef4007ed05cf79dda6e6d21e44720d30cacd741->leave($__internal_7740b2002301098af7b905066ef4007ed05cf79dda6e6d21e44720d30cacd741_prof);

        
        $__internal_29112fd28b6be8f753f2473efee84de82130b66f2b0c81f5e0e768a9682210d4->leave($__internal_29112fd28b6be8f753f2473efee84de82130b66f2b0c81f5e0e768a9682210d4_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c8a0889ece4eadb3e5c8583ff5888a9fb2bc8699597c7776d3cdc16664af019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8a0889ece4eadb3e5c8583ff5888a9fb2bc8699597c7776d3cdc16664af019->enter($__internal_1c8a0889ece4eadb3e5c8583ff5888a9fb2bc8699597c7776d3cdc16664af019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a59fdec6e417b652944271f8f70c81b2edf6d41a323b18df1011aa6d454b0aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59fdec6e417b652944271f8f70c81b2edf6d41a323b18df1011aa6d454b0aa3->enter($__internal_a59fdec6e417b652944271f8f70c81b2edf6d41a323b18df1011aa6d454b0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a59fdec6e417b652944271f8f70c81b2edf6d41a323b18df1011aa6d454b0aa3->leave($__internal_a59fdec6e417b652944271f8f70c81b2edf6d41a323b18df1011aa6d454b0aa3_prof);

        
        $__internal_1c8a0889ece4eadb3e5c8583ff5888a9fb2bc8699597c7776d3cdc16664af019->leave($__internal_1c8a0889ece4eadb3e5c8583ff5888a9fb2bc8699597c7776d3cdc16664af019_prof);

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
