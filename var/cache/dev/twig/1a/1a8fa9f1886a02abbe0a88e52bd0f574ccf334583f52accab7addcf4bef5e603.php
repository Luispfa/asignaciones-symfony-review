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
        $__internal_586a4bb6de28543087de7bf68c0b2ed0bf431cea8a44e2923e651a25a258a8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586a4bb6de28543087de7bf68c0b2ed0bf431cea8a44e2923e651a25a258a8dd->enter($__internal_586a4bb6de28543087de7bf68c0b2ed0bf431cea8a44e2923e651a25a258a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_093ed39375c219841cbf24109a3b656fe6bbd6d45be72ee45abed821b514f438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093ed39375c219841cbf24109a3b656fe6bbd6d45be72ee45abed821b514f438->enter($__internal_093ed39375c219841cbf24109a3b656fe6bbd6d45be72ee45abed821b514f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586a4bb6de28543087de7bf68c0b2ed0bf431cea8a44e2923e651a25a258a8dd->leave($__internal_586a4bb6de28543087de7bf68c0b2ed0bf431cea8a44e2923e651a25a258a8dd_prof);

        
        $__internal_093ed39375c219841cbf24109a3b656fe6bbd6d45be72ee45abed821b514f438->leave($__internal_093ed39375c219841cbf24109a3b656fe6bbd6d45be72ee45abed821b514f438_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0871ed9b4c86096aed5f462a2b030dad1d8b337206e4ace002d1afa4d598994a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0871ed9b4c86096aed5f462a2b030dad1d8b337206e4ace002d1afa4d598994a->enter($__internal_0871ed9b4c86096aed5f462a2b030dad1d8b337206e4ace002d1afa4d598994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8992e6f8387d0434ef684dffcd9fd73b68527b4d71195700f15b128ff5a679f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8992e6f8387d0434ef684dffcd9fd73b68527b4d71195700f15b128ff5a679f8->enter($__internal_8992e6f8387d0434ef684dffcd9fd73b68527b4d71195700f15b128ff5a679f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8992e6f8387d0434ef684dffcd9fd73b68527b4d71195700f15b128ff5a679f8->leave($__internal_8992e6f8387d0434ef684dffcd9fd73b68527b4d71195700f15b128ff5a679f8_prof);

        
        $__internal_0871ed9b4c86096aed5f462a2b030dad1d8b337206e4ace002d1afa4d598994a->leave($__internal_0871ed9b4c86096aed5f462a2b030dad1d8b337206e4ace002d1afa4d598994a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f56f6c1686b6f6c61e01e6bad8080c6052c52a38621c967b3a40db61cc1f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f56f6c1686b6f6c61e01e6bad8080c6052c52a38621c967b3a40db61cc1f0e->enter($__internal_60f56f6c1686b6f6c61e01e6bad8080c6052c52a38621c967b3a40db61cc1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9116f3c1884ccf090da374cffad5ba936a340c92f47fb43f7386d5d93ca868c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9116f3c1884ccf090da374cffad5ba936a340c92f47fb43f7386d5d93ca868c->enter($__internal_b9116f3c1884ccf090da374cffad5ba936a340c92f47fb43f7386d5d93ca868c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9116f3c1884ccf090da374cffad5ba936a340c92f47fb43f7386d5d93ca868c->leave($__internal_b9116f3c1884ccf090da374cffad5ba936a340c92f47fb43f7386d5d93ca868c_prof);

        
        $__internal_60f56f6c1686b6f6c61e01e6bad8080c6052c52a38621c967b3a40db61cc1f0e->leave($__internal_60f56f6c1686b6f6c61e01e6bad8080c6052c52a38621c967b3a40db61cc1f0e_prof);

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
