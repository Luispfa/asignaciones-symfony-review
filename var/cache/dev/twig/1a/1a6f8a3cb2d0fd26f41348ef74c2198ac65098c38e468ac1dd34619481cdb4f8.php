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
        $__internal_7496b6d5c5bb73baef89ad8e3868cd8711d42000cf413a58e51108194c379dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7496b6d5c5bb73baef89ad8e3868cd8711d42000cf413a58e51108194c379dec->enter($__internal_7496b6d5c5bb73baef89ad8e3868cd8711d42000cf413a58e51108194c379dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_993a160e2b41423aa91137532b823743099ee3eea46976583e3e5b6c6cffb29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993a160e2b41423aa91137532b823743099ee3eea46976583e3e5b6c6cffb29c->enter($__internal_993a160e2b41423aa91137532b823743099ee3eea46976583e3e5b6c6cffb29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7496b6d5c5bb73baef89ad8e3868cd8711d42000cf413a58e51108194c379dec->leave($__internal_7496b6d5c5bb73baef89ad8e3868cd8711d42000cf413a58e51108194c379dec_prof);

        
        $__internal_993a160e2b41423aa91137532b823743099ee3eea46976583e3e5b6c6cffb29c->leave($__internal_993a160e2b41423aa91137532b823743099ee3eea46976583e3e5b6c6cffb29c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab6fa771826e289395669769bd36cf6f6590a7920b3c129675b420d590d2a100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6fa771826e289395669769bd36cf6f6590a7920b3c129675b420d590d2a100->enter($__internal_ab6fa771826e289395669769bd36cf6f6590a7920b3c129675b420d590d2a100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_321fa31cc354d1af1e1cef831ba72fb5d753fa1d1a72e9702499a906f479f780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321fa31cc354d1af1e1cef831ba72fb5d753fa1d1a72e9702499a906f479f780->enter($__internal_321fa31cc354d1af1e1cef831ba72fb5d753fa1d1a72e9702499a906f479f780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_321fa31cc354d1af1e1cef831ba72fb5d753fa1d1a72e9702499a906f479f780->leave($__internal_321fa31cc354d1af1e1cef831ba72fb5d753fa1d1a72e9702499a906f479f780_prof);

        
        $__internal_ab6fa771826e289395669769bd36cf6f6590a7920b3c129675b420d590d2a100->leave($__internal_ab6fa771826e289395669769bd36cf6f6590a7920b3c129675b420d590d2a100_prof);

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
