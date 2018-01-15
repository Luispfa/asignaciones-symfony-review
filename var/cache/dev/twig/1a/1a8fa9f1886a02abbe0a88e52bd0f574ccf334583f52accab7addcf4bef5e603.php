<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0ca41bba87d539ab7a0f9f52d866b7786e0188cb8b5749f187cfdd6506d8d38a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a9252428f3981148ae19785539a1c147a0acd4f5c0451b537bf106b7336542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a9252428f3981148ae19785539a1c147a0acd4f5c0451b537bf106b7336542->enter($__internal_44a9252428f3981148ae19785539a1c147a0acd4f5c0451b537bf106b7336542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bd847791174bfd7ac8ea1a6f274887980bdfbaf674115334c73f363a3e4133fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd847791174bfd7ac8ea1a6f274887980bdfbaf674115334c73f363a3e4133fa->enter($__internal_bd847791174bfd7ac8ea1a6f274887980bdfbaf674115334c73f363a3e4133fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a9252428f3981148ae19785539a1c147a0acd4f5c0451b537bf106b7336542->leave($__internal_44a9252428f3981148ae19785539a1c147a0acd4f5c0451b537bf106b7336542_prof);

        
        $__internal_bd847791174bfd7ac8ea1a6f274887980bdfbaf674115334c73f363a3e4133fa->leave($__internal_bd847791174bfd7ac8ea1a6f274887980bdfbaf674115334c73f363a3e4133fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3c59234a26d2319065415d5dd876fcf9ea5cf2bc778c8f809759f2458342200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c59234a26d2319065415d5dd876fcf9ea5cf2bc778c8f809759f2458342200->enter($__internal_f3c59234a26d2319065415d5dd876fcf9ea5cf2bc778c8f809759f2458342200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c2d5487b822c8219320d23b4b1e5300b3e5e64a242a8e7c39164439f2fa70310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d5487b822c8219320d23b4b1e5300b3e5e64a242a8e7c39164439f2fa70310->enter($__internal_c2d5487b822c8219320d23b4b1e5300b3e5e64a242a8e7c39164439f2fa70310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c2d5487b822c8219320d23b4b1e5300b3e5e64a242a8e7c39164439f2fa70310->leave($__internal_c2d5487b822c8219320d23b4b1e5300b3e5e64a242a8e7c39164439f2fa70310_prof);

        
        $__internal_f3c59234a26d2319065415d5dd876fcf9ea5cf2bc778c8f809759f2458342200->leave($__internal_f3c59234a26d2319065415d5dd876fcf9ea5cf2bc778c8f809759f2458342200_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_566c06726be2aa90fe08f63848c83571219b8abe34ff4482c10955e7456e3341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566c06726be2aa90fe08f63848c83571219b8abe34ff4482c10955e7456e3341->enter($__internal_566c06726be2aa90fe08f63848c83571219b8abe34ff4482c10955e7456e3341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24171cef3c21288072c3d7c3e60e106d049a47706759fe766ca47ec0dcc980c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24171cef3c21288072c3d7c3e60e106d049a47706759fe766ca47ec0dcc980c2->enter($__internal_24171cef3c21288072c3d7c3e60e106d049a47706759fe766ca47ec0dcc980c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_24171cef3c21288072c3d7c3e60e106d049a47706759fe766ca47ec0dcc980c2->leave($__internal_24171cef3c21288072c3d7c3e60e106d049a47706759fe766ca47ec0dcc980c2_prof);

        
        $__internal_566c06726be2aa90fe08f63848c83571219b8abe34ff4482c10955e7456e3341->leave($__internal_566c06726be2aa90fe08f63848c83571219b8abe34ff4482c10955e7456e3341_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
