<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bc7d54b7afb954f64b058365c9fe35bc678d685126ac77c83f40fb65913cf522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_757b8d5d9af51634c4a4fb8552400fff58899b9810fc8dc7e083cfa8400d3db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757b8d5d9af51634c4a4fb8552400fff58899b9810fc8dc7e083cfa8400d3db5->enter($__internal_757b8d5d9af51634c4a4fb8552400fff58899b9810fc8dc7e083cfa8400d3db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_059db10b2061b712b191d581befc2a15e854844d036070a3ce4f6bbb5d894db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059db10b2061b712b191d581befc2a15e854844d036070a3ce4f6bbb5d894db6->enter($__internal_059db10b2061b712b191d581befc2a15e854844d036070a3ce4f6bbb5d894db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757b8d5d9af51634c4a4fb8552400fff58899b9810fc8dc7e083cfa8400d3db5->leave($__internal_757b8d5d9af51634c4a4fb8552400fff58899b9810fc8dc7e083cfa8400d3db5_prof);

        
        $__internal_059db10b2061b712b191d581befc2a15e854844d036070a3ce4f6bbb5d894db6->leave($__internal_059db10b2061b712b191d581befc2a15e854844d036070a3ce4f6bbb5d894db6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc0f3c8e2486bb615950566ac5fa9d22471d1808b5a6731e4d3442c42182a6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0f3c8e2486bb615950566ac5fa9d22471d1808b5a6731e4d3442c42182a6c6->enter($__internal_bc0f3c8e2486bb615950566ac5fa9d22471d1808b5a6731e4d3442c42182a6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5bf268b8cda62e079f8b584137ec7d4412a6c66a24ff99b9f2d3a44ed5e22035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf268b8cda62e079f8b584137ec7d4412a6c66a24ff99b9f2d3a44ed5e22035->enter($__internal_5bf268b8cda62e079f8b584137ec7d4412a6c66a24ff99b9f2d3a44ed5e22035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5bf268b8cda62e079f8b584137ec7d4412a6c66a24ff99b9f2d3a44ed5e22035->leave($__internal_5bf268b8cda62e079f8b584137ec7d4412a6c66a24ff99b9f2d3a44ed5e22035_prof);

        
        $__internal_bc0f3c8e2486bb615950566ac5fa9d22471d1808b5a6731e4d3442c42182a6c6->leave($__internal_bc0f3c8e2486bb615950566ac5fa9d22471d1808b5a6731e4d3442c42182a6c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
