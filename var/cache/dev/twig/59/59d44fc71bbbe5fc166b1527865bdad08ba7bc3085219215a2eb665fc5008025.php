<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6f853e90b5fd81a94ae7895182e48a7b4157d5b2282b3de50029944a0a9aae4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_060e23b1b4709c4b754f824281f61e14dbe65bd23cd434732b6f30e51447c510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060e23b1b4709c4b754f824281f61e14dbe65bd23cd434732b6f30e51447c510->enter($__internal_060e23b1b4709c4b754f824281f61e14dbe65bd23cd434732b6f30e51447c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_40e5abf981f975417472c6873bb72d3f3bd02af4015abaff691c97453ff81424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e5abf981f975417472c6873bb72d3f3bd02af4015abaff691c97453ff81424->enter($__internal_40e5abf981f975417472c6873bb72d3f3bd02af4015abaff691c97453ff81424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060e23b1b4709c4b754f824281f61e14dbe65bd23cd434732b6f30e51447c510->leave($__internal_060e23b1b4709c4b754f824281f61e14dbe65bd23cd434732b6f30e51447c510_prof);

        
        $__internal_40e5abf981f975417472c6873bb72d3f3bd02af4015abaff691c97453ff81424->leave($__internal_40e5abf981f975417472c6873bb72d3f3bd02af4015abaff691c97453ff81424_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fc4399723c6744a893ecd96e0da4f135d8a34d53407868eec35b102edc891844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4399723c6744a893ecd96e0da4f135d8a34d53407868eec35b102edc891844->enter($__internal_fc4399723c6744a893ecd96e0da4f135d8a34d53407868eec35b102edc891844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_541467011ce33ee63a3bef97827f8bfcbf00e23917b9b6a7e4c5c71dbc2041e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541467011ce33ee63a3bef97827f8bfcbf00e23917b9b6a7e4c5c71dbc2041e7->enter($__internal_541467011ce33ee63a3bef97827f8bfcbf00e23917b9b6a7e4c5c71dbc2041e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_541467011ce33ee63a3bef97827f8bfcbf00e23917b9b6a7e4c5c71dbc2041e7->leave($__internal_541467011ce33ee63a3bef97827f8bfcbf00e23917b9b6a7e4c5c71dbc2041e7_prof);

        
        $__internal_fc4399723c6744a893ecd96e0da4f135d8a34d53407868eec35b102edc891844->leave($__internal_fc4399723c6744a893ecd96e0da4f135d8a34d53407868eec35b102edc891844_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8b1e7f436a5fb2f181fb7724a688986e9ecfb03ec04f46f61b3d3b686d242ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b1e7f436a5fb2f181fb7724a688986e9ecfb03ec04f46f61b3d3b686d242ce->enter($__internal_e8b1e7f436a5fb2f181fb7724a688986e9ecfb03ec04f46f61b3d3b686d242ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_baf23fb366bb413e8f030e9ef8f0109f60d42c6fc43bd415b2edb2c2e120422e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf23fb366bb413e8f030e9ef8f0109f60d42c6fc43bd415b2edb2c2e120422e->enter($__internal_baf23fb366bb413e8f030e9ef8f0109f60d42c6fc43bd415b2edb2c2e120422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_baf23fb366bb413e8f030e9ef8f0109f60d42c6fc43bd415b2edb2c2e120422e->leave($__internal_baf23fb366bb413e8f030e9ef8f0109f60d42c6fc43bd415b2edb2c2e120422e_prof);

        
        $__internal_e8b1e7f436a5fb2f181fb7724a688986e9ecfb03ec04f46f61b3d3b686d242ce->leave($__internal_e8b1e7f436a5fb2f181fb7724a688986e9ecfb03ec04f46f61b3d3b686d242ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
