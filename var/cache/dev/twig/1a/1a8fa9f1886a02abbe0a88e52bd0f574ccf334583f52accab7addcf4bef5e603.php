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
        $__internal_c7fa73de1d67a96dee36672d5b41f6f017b79a2ba5a2ec19826ca6bc5956103a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fa73de1d67a96dee36672d5b41f6f017b79a2ba5a2ec19826ca6bc5956103a->enter($__internal_c7fa73de1d67a96dee36672d5b41f6f017b79a2ba5a2ec19826ca6bc5956103a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_23fd98cc3d8370ffb48f3e3aa1d546c401f83e881960eafb0d96a29f770844a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fd98cc3d8370ffb48f3e3aa1d546c401f83e881960eafb0d96a29f770844a2->enter($__internal_23fd98cc3d8370ffb48f3e3aa1d546c401f83e881960eafb0d96a29f770844a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7fa73de1d67a96dee36672d5b41f6f017b79a2ba5a2ec19826ca6bc5956103a->leave($__internal_c7fa73de1d67a96dee36672d5b41f6f017b79a2ba5a2ec19826ca6bc5956103a_prof);

        
        $__internal_23fd98cc3d8370ffb48f3e3aa1d546c401f83e881960eafb0d96a29f770844a2->leave($__internal_23fd98cc3d8370ffb48f3e3aa1d546c401f83e881960eafb0d96a29f770844a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67b8e1ec454cc2d31af8021ffde3311e858cbaba7f27f38347375f93d3988143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b8e1ec454cc2d31af8021ffde3311e858cbaba7f27f38347375f93d3988143->enter($__internal_67b8e1ec454cc2d31af8021ffde3311e858cbaba7f27f38347375f93d3988143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6469e3dcb496846122bf921219c5985da6dfed14e3117a09047bd1a7ccfd283e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6469e3dcb496846122bf921219c5985da6dfed14e3117a09047bd1a7ccfd283e->enter($__internal_6469e3dcb496846122bf921219c5985da6dfed14e3117a09047bd1a7ccfd283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6469e3dcb496846122bf921219c5985da6dfed14e3117a09047bd1a7ccfd283e->leave($__internal_6469e3dcb496846122bf921219c5985da6dfed14e3117a09047bd1a7ccfd283e_prof);

        
        $__internal_67b8e1ec454cc2d31af8021ffde3311e858cbaba7f27f38347375f93d3988143->leave($__internal_67b8e1ec454cc2d31af8021ffde3311e858cbaba7f27f38347375f93d3988143_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0bc87f61aac122ec4ef7f3447d9a6c5594daa6f6e093b30aff05c33c454343f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bc87f61aac122ec4ef7f3447d9a6c5594daa6f6e093b30aff05c33c454343f->enter($__internal_e0bc87f61aac122ec4ef7f3447d9a6c5594daa6f6e093b30aff05c33c454343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34fbc3d3fc34b8aa86535db2ca4978d5de6753e2c8aba28b0632b581791946b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fbc3d3fc34b8aa86535db2ca4978d5de6753e2c8aba28b0632b581791946b9->enter($__internal_34fbc3d3fc34b8aa86535db2ca4978d5de6753e2c8aba28b0632b581791946b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34fbc3d3fc34b8aa86535db2ca4978d5de6753e2c8aba28b0632b581791946b9->leave($__internal_34fbc3d3fc34b8aa86535db2ca4978d5de6753e2c8aba28b0632b581791946b9_prof);

        
        $__internal_e0bc87f61aac122ec4ef7f3447d9a6c5594daa6f6e093b30aff05c33c454343f->leave($__internal_e0bc87f61aac122ec4ef7f3447d9a6c5594daa6f6e093b30aff05c33c454343f_prof);

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
