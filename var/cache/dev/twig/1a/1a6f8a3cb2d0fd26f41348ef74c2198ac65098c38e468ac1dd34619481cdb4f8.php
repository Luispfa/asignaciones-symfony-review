<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_bc7d54b7afb954f64b058365c9fe35bc678d685126ac77c83f40fb65913cf522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_412fe4c573938721b25c76e27b5c7e509bd5c3c881f4a0a2814a3a9ad07dd5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412fe4c573938721b25c76e27b5c7e509bd5c3c881f4a0a2814a3a9ad07dd5a7->enter($__internal_412fe4c573938721b25c76e27b5c7e509bd5c3c881f4a0a2814a3a9ad07dd5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_cf874159cedcd41999523b157cdd58224a9c2cd00cebb6db74e7b8936895ab34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf874159cedcd41999523b157cdd58224a9c2cd00cebb6db74e7b8936895ab34->enter($__internal_cf874159cedcd41999523b157cdd58224a9c2cd00cebb6db74e7b8936895ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_412fe4c573938721b25c76e27b5c7e509bd5c3c881f4a0a2814a3a9ad07dd5a7->leave($__internal_412fe4c573938721b25c76e27b5c7e509bd5c3c881f4a0a2814a3a9ad07dd5a7_prof);

        
        $__internal_cf874159cedcd41999523b157cdd58224a9c2cd00cebb6db74e7b8936895ab34->leave($__internal_cf874159cedcd41999523b157cdd58224a9c2cd00cebb6db74e7b8936895ab34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1aea29d5f97594285b59bad36359eeca8556ba300695d4acc7dcbf2c4f955001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aea29d5f97594285b59bad36359eeca8556ba300695d4acc7dcbf2c4f955001->enter($__internal_1aea29d5f97594285b59bad36359eeca8556ba300695d4acc7dcbf2c4f955001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1f496257373c3454b3fb7f3b89f2c389870a3091e9a21d700c53d520d2e5edf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f496257373c3454b3fb7f3b89f2c389870a3091e9a21d700c53d520d2e5edf6->enter($__internal_1f496257373c3454b3fb7f3b89f2c389870a3091e9a21d700c53d520d2e5edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1f496257373c3454b3fb7f3b89f2c389870a3091e9a21d700c53d520d2e5edf6->leave($__internal_1f496257373c3454b3fb7f3b89f2c389870a3091e9a21d700c53d520d2e5edf6_prof);

        
        $__internal_1aea29d5f97594285b59bad36359eeca8556ba300695d4acc7dcbf2c4f955001->leave($__internal_1aea29d5f97594285b59bad36359eeca8556ba300695d4acc7dcbf2c4f955001_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
