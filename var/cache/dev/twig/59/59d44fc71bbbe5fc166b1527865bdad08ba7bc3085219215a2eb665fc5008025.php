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
        $__internal_5421799dac222a0e703e95215730b1ac40e6e87641c5a9f9c3708c95ab0c5df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5421799dac222a0e703e95215730b1ac40e6e87641c5a9f9c3708c95ab0c5df0->enter($__internal_5421799dac222a0e703e95215730b1ac40e6e87641c5a9f9c3708c95ab0c5df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0a4585a16b7340865dbc1ff41d2a3a393c9bf8c0ba93669b081aa901b1177876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4585a16b7340865dbc1ff41d2a3a393c9bf8c0ba93669b081aa901b1177876->enter($__internal_0a4585a16b7340865dbc1ff41d2a3a393c9bf8c0ba93669b081aa901b1177876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5421799dac222a0e703e95215730b1ac40e6e87641c5a9f9c3708c95ab0c5df0->leave($__internal_5421799dac222a0e703e95215730b1ac40e6e87641c5a9f9c3708c95ab0c5df0_prof);

        
        $__internal_0a4585a16b7340865dbc1ff41d2a3a393c9bf8c0ba93669b081aa901b1177876->leave($__internal_0a4585a16b7340865dbc1ff41d2a3a393c9bf8c0ba93669b081aa901b1177876_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_92230fbdeff31d8b3bb05e2153036473c4b3068718f7005809c6b98e68074428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92230fbdeff31d8b3bb05e2153036473c4b3068718f7005809c6b98e68074428->enter($__internal_92230fbdeff31d8b3bb05e2153036473c4b3068718f7005809c6b98e68074428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_72c1e10f28d623e3559a854dcf822af26971c7093d789ee39a1a87fa3fb33665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c1e10f28d623e3559a854dcf822af26971c7093d789ee39a1a87fa3fb33665->enter($__internal_72c1e10f28d623e3559a854dcf822af26971c7093d789ee39a1a87fa3fb33665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_72c1e10f28d623e3559a854dcf822af26971c7093d789ee39a1a87fa3fb33665->leave($__internal_72c1e10f28d623e3559a854dcf822af26971c7093d789ee39a1a87fa3fb33665_prof);

        
        $__internal_92230fbdeff31d8b3bb05e2153036473c4b3068718f7005809c6b98e68074428->leave($__internal_92230fbdeff31d8b3bb05e2153036473c4b3068718f7005809c6b98e68074428_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3f4875cf1caaa737d4cd1be1294a7bee64e6427968d5a32fdccdf781386e751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f4875cf1caaa737d4cd1be1294a7bee64e6427968d5a32fdccdf781386e751->enter($__internal_a3f4875cf1caaa737d4cd1be1294a7bee64e6427968d5a32fdccdf781386e751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d39fef64ae2c1cc77fe58bfea0130c9ebfa386c3202b3ab301a168289f5cbda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39fef64ae2c1cc77fe58bfea0130c9ebfa386c3202b3ab301a168289f5cbda1->enter($__internal_d39fef64ae2c1cc77fe58bfea0130c9ebfa386c3202b3ab301a168289f5cbda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d39fef64ae2c1cc77fe58bfea0130c9ebfa386c3202b3ab301a168289f5cbda1->leave($__internal_d39fef64ae2c1cc77fe58bfea0130c9ebfa386c3202b3ab301a168289f5cbda1_prof);

        
        $__internal_a3f4875cf1caaa737d4cd1be1294a7bee64e6427968d5a32fdccdf781386e751->leave($__internal_a3f4875cf1caaa737d4cd1be1294a7bee64e6427968d5a32fdccdf781386e751_prof);

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
