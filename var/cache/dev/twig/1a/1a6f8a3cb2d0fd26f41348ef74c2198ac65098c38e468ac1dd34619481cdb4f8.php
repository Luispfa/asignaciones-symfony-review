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
        $__internal_8ccc2e1aa5ffe5ff20149ac59bd6d038a3e46cd57434394cc8ffa9222df01391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccc2e1aa5ffe5ff20149ac59bd6d038a3e46cd57434394cc8ffa9222df01391->enter($__internal_8ccc2e1aa5ffe5ff20149ac59bd6d038a3e46cd57434394cc8ffa9222df01391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ea4fa4f130ce6b38f8a59637155f33196374841d2cd2228b332d69bd87451b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4fa4f130ce6b38f8a59637155f33196374841d2cd2228b332d69bd87451b1b->enter($__internal_ea4fa4f130ce6b38f8a59637155f33196374841d2cd2228b332d69bd87451b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ccc2e1aa5ffe5ff20149ac59bd6d038a3e46cd57434394cc8ffa9222df01391->leave($__internal_8ccc2e1aa5ffe5ff20149ac59bd6d038a3e46cd57434394cc8ffa9222df01391_prof);

        
        $__internal_ea4fa4f130ce6b38f8a59637155f33196374841d2cd2228b332d69bd87451b1b->leave($__internal_ea4fa4f130ce6b38f8a59637155f33196374841d2cd2228b332d69bd87451b1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb359495ef686ad6e73fea6e9a658d3660d6dd84da1728febf764f40bc6c41cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb359495ef686ad6e73fea6e9a658d3660d6dd84da1728febf764f40bc6c41cb->enter($__internal_eb359495ef686ad6e73fea6e9a658d3660d6dd84da1728febf764f40bc6c41cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ea0cc5e168ccfce2735cfe9bf808d1402cfc2a6876b54bc5917766461eb4512f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0cc5e168ccfce2735cfe9bf808d1402cfc2a6876b54bc5917766461eb4512f->enter($__internal_ea0cc5e168ccfce2735cfe9bf808d1402cfc2a6876b54bc5917766461eb4512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ea0cc5e168ccfce2735cfe9bf808d1402cfc2a6876b54bc5917766461eb4512f->leave($__internal_ea0cc5e168ccfce2735cfe9bf808d1402cfc2a6876b54bc5917766461eb4512f_prof);

        
        $__internal_eb359495ef686ad6e73fea6e9a658d3660d6dd84da1728febf764f40bc6c41cb->leave($__internal_eb359495ef686ad6e73fea6e9a658d3660d6dd84da1728febf764f40bc6c41cb_prof);

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
