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
        $__internal_6695b49dca51a6c5be89a859852aa51782b77d41778e027c15642d12e1a7c5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6695b49dca51a6c5be89a859852aa51782b77d41778e027c15642d12e1a7c5e4->enter($__internal_6695b49dca51a6c5be89a859852aa51782b77d41778e027c15642d12e1a7c5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_0a485d250eb80d6b65f6c22056053e57ea5ec4f128e649ee18d0e39a5a3213c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a485d250eb80d6b65f6c22056053e57ea5ec4f128e649ee18d0e39a5a3213c5->enter($__internal_0a485d250eb80d6b65f6c22056053e57ea5ec4f128e649ee18d0e39a5a3213c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6695b49dca51a6c5be89a859852aa51782b77d41778e027c15642d12e1a7c5e4->leave($__internal_6695b49dca51a6c5be89a859852aa51782b77d41778e027c15642d12e1a7c5e4_prof);

        
        $__internal_0a485d250eb80d6b65f6c22056053e57ea5ec4f128e649ee18d0e39a5a3213c5->leave($__internal_0a485d250eb80d6b65f6c22056053e57ea5ec4f128e649ee18d0e39a5a3213c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_394f258f4711ee0e23aad749fc8362895f45c91ecbe1b7f213a42c202a618023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394f258f4711ee0e23aad749fc8362895f45c91ecbe1b7f213a42c202a618023->enter($__internal_394f258f4711ee0e23aad749fc8362895f45c91ecbe1b7f213a42c202a618023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3ba49484e0e59fc45d0100a8fce2cea3d85a295dcec228f985dac712f9cf6877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba49484e0e59fc45d0100a8fce2cea3d85a295dcec228f985dac712f9cf6877->enter($__internal_3ba49484e0e59fc45d0100a8fce2cea3d85a295dcec228f985dac712f9cf6877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3ba49484e0e59fc45d0100a8fce2cea3d85a295dcec228f985dac712f9cf6877->leave($__internal_3ba49484e0e59fc45d0100a8fce2cea3d85a295dcec228f985dac712f9cf6877_prof);

        
        $__internal_394f258f4711ee0e23aad749fc8362895f45c91ecbe1b7f213a42c202a618023->leave($__internal_394f258f4711ee0e23aad749fc8362895f45c91ecbe1b7f213a42c202a618023_prof);

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
