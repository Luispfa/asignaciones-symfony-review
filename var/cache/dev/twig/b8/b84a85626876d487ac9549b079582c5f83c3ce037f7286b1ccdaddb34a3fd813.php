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
        $__internal_9db3bf110207ba4778cff23683dfa95dad70187fb22405e4f7dba1b4ba9ad7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db3bf110207ba4778cff23683dfa95dad70187fb22405e4f7dba1b4ba9ad7a4->enter($__internal_9db3bf110207ba4778cff23683dfa95dad70187fb22405e4f7dba1b4ba9ad7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_57e502a2fcae078c24703e3a18f437f0ea7edb6d45fc56beb118bac405811f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e502a2fcae078c24703e3a18f437f0ea7edb6d45fc56beb118bac405811f2e->enter($__internal_57e502a2fcae078c24703e3a18f437f0ea7edb6d45fc56beb118bac405811f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9db3bf110207ba4778cff23683dfa95dad70187fb22405e4f7dba1b4ba9ad7a4->leave($__internal_9db3bf110207ba4778cff23683dfa95dad70187fb22405e4f7dba1b4ba9ad7a4_prof);

        
        $__internal_57e502a2fcae078c24703e3a18f437f0ea7edb6d45fc56beb118bac405811f2e->leave($__internal_57e502a2fcae078c24703e3a18f437f0ea7edb6d45fc56beb118bac405811f2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae454a68d39004605fdae0d2881c05663c7491318a32d0503ebd64dd166f2ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae454a68d39004605fdae0d2881c05663c7491318a32d0503ebd64dd166f2ed5->enter($__internal_ae454a68d39004605fdae0d2881c05663c7491318a32d0503ebd64dd166f2ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c1d33dd8f62220ce60a29d5091852eeefea2a26f467440407e80db98d021d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1d33dd8f62220ce60a29d5091852eeefea2a26f467440407e80db98d021d87->enter($__internal_4c1d33dd8f62220ce60a29d5091852eeefea2a26f467440407e80db98d021d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_4c1d33dd8f62220ce60a29d5091852eeefea2a26f467440407e80db98d021d87->leave($__internal_4c1d33dd8f62220ce60a29d5091852eeefea2a26f467440407e80db98d021d87_prof);

        
        $__internal_ae454a68d39004605fdae0d2881c05663c7491318a32d0503ebd64dd166f2ed5->leave($__internal_ae454a68d39004605fdae0d2881c05663c7491318a32d0503ebd64dd166f2ed5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d37ec059e3c15c152c5d2fc0fc012fb3c36ed6a6ee9a2049ef22098ca181cfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37ec059e3c15c152c5d2fc0fc012fb3c36ed6a6ee9a2049ef22098ca181cfc2->enter($__internal_d37ec059e3c15c152c5d2fc0fc012fb3c36ed6a6ee9a2049ef22098ca181cfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ddf2ba7af4f97fe080ed7f6943539cd7ded1907caf657664869574ced58bfacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf2ba7af4f97fe080ed7f6943539cd7ded1907caf657664869574ced58bfacb->enter($__internal_ddf2ba7af4f97fe080ed7f6943539cd7ded1907caf657664869574ced58bfacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ddf2ba7af4f97fe080ed7f6943539cd7ded1907caf657664869574ced58bfacb->leave($__internal_ddf2ba7af4f97fe080ed7f6943539cd7ded1907caf657664869574ced58bfacb_prof);

        
        $__internal_d37ec059e3c15c152c5d2fc0fc012fb3c36ed6a6ee9a2049ef22098ca181cfc2->leave($__internal_d37ec059e3c15c152c5d2fc0fc012fb3c36ed6a6ee9a2049ef22098ca181cfc2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_00c240cd9d26b421de74203e74d7b74ec1079fbc340e04fd7d2b9b8f194336b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c240cd9d26b421de74203e74d7b74ec1079fbc340e04fd7d2b9b8f194336b8->enter($__internal_00c240cd9d26b421de74203e74d7b74ec1079fbc340e04fd7d2b9b8f194336b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b90fca53866aa3311996721193c1e2a3a1e6c0b01e6f0a9597fe1c7acf0e87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b90fca53866aa3311996721193c1e2a3a1e6c0b01e6f0a9597fe1c7acf0e87f->enter($__internal_9b90fca53866aa3311996721193c1e2a3a1e6c0b01e6f0a9597fe1c7acf0e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b90fca53866aa3311996721193c1e2a3a1e6c0b01e6f0a9597fe1c7acf0e87f->leave($__internal_9b90fca53866aa3311996721193c1e2a3a1e6c0b01e6f0a9597fe1c7acf0e87f_prof);

        
        $__internal_00c240cd9d26b421de74203e74d7b74ec1079fbc340e04fd7d2b9b8f194336b8->leave($__internal_00c240cd9d26b421de74203e74d7b74ec1079fbc340e04fd7d2b9b8f194336b8_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_709bc112272a9061e879823fd3b7a0d73016a134072416e62d42437c2ceef043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709bc112272a9061e879823fd3b7a0d73016a134072416e62d42437c2ceef043->enter($__internal_709bc112272a9061e879823fd3b7a0d73016a134072416e62d42437c2ceef043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34f548633d5a66d3e2b78d262da446f7328e56ad53614e285482d7bcec16f919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f548633d5a66d3e2b78d262da446f7328e56ad53614e285482d7bcec16f919->enter($__internal_34f548633d5a66d3e2b78d262da446f7328e56ad53614e285482d7bcec16f919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_34f548633d5a66d3e2b78d262da446f7328e56ad53614e285482d7bcec16f919->leave($__internal_34f548633d5a66d3e2b78d262da446f7328e56ad53614e285482d7bcec16f919_prof);

        
        $__internal_709bc112272a9061e879823fd3b7a0d73016a134072416e62d42437c2ceef043->leave($__internal_709bc112272a9061e879823fd3b7a0d73016a134072416e62d42437c2ceef043_prof);

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
