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
        $__internal_ddccd3bf0e83fd96f2c0d36a9524eaada36e17980365592abfd2221cc905f191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddccd3bf0e83fd96f2c0d36a9524eaada36e17980365592abfd2221cc905f191->enter($__internal_ddccd3bf0e83fd96f2c0d36a9524eaada36e17980365592abfd2221cc905f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6e048b6349e2063435a6561933454f73b8ee093d1598a8ec6ee1143b152ac6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e048b6349e2063435a6561933454f73b8ee093d1598a8ec6ee1143b152ac6b9->enter($__internal_6e048b6349e2063435a6561933454f73b8ee093d1598a8ec6ee1143b152ac6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddccd3bf0e83fd96f2c0d36a9524eaada36e17980365592abfd2221cc905f191->leave($__internal_ddccd3bf0e83fd96f2c0d36a9524eaada36e17980365592abfd2221cc905f191_prof);

        
        $__internal_6e048b6349e2063435a6561933454f73b8ee093d1598a8ec6ee1143b152ac6b9->leave($__internal_6e048b6349e2063435a6561933454f73b8ee093d1598a8ec6ee1143b152ac6b9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_932487f5f622ae37893eed4ae597cb0fed896108cf011e1aaf27fd525d5c018d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932487f5f622ae37893eed4ae597cb0fed896108cf011e1aaf27fd525d5c018d->enter($__internal_932487f5f622ae37893eed4ae597cb0fed896108cf011e1aaf27fd525d5c018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_426919d6d1f57e37067506799fbbd379de4b54f0e70ddcc07be6ab726b3982f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426919d6d1f57e37067506799fbbd379de4b54f0e70ddcc07be6ab726b3982f9->enter($__internal_426919d6d1f57e37067506799fbbd379de4b54f0e70ddcc07be6ab726b3982f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_426919d6d1f57e37067506799fbbd379de4b54f0e70ddcc07be6ab726b3982f9->leave($__internal_426919d6d1f57e37067506799fbbd379de4b54f0e70ddcc07be6ab726b3982f9_prof);

        
        $__internal_932487f5f622ae37893eed4ae597cb0fed896108cf011e1aaf27fd525d5c018d->leave($__internal_932487f5f622ae37893eed4ae597cb0fed896108cf011e1aaf27fd525d5c018d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0abe9208594bf44e921f7064e87ed9cc65e5a44cc13163d2a999fbb84dc5f785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abe9208594bf44e921f7064e87ed9cc65e5a44cc13163d2a999fbb84dc5f785->enter($__internal_0abe9208594bf44e921f7064e87ed9cc65e5a44cc13163d2a999fbb84dc5f785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79ff8083ea1233b17ce71bd6dc1723a53c760f40ddf03ef72b8dcbf20b9da402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ff8083ea1233b17ce71bd6dc1723a53c760f40ddf03ef72b8dcbf20b9da402->enter($__internal_79ff8083ea1233b17ce71bd6dc1723a53c760f40ddf03ef72b8dcbf20b9da402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_79ff8083ea1233b17ce71bd6dc1723a53c760f40ddf03ef72b8dcbf20b9da402->leave($__internal_79ff8083ea1233b17ce71bd6dc1723a53c760f40ddf03ef72b8dcbf20b9da402_prof);

        
        $__internal_0abe9208594bf44e921f7064e87ed9cc65e5a44cc13163d2a999fbb84dc5f785->leave($__internal_0abe9208594bf44e921f7064e87ed9cc65e5a44cc13163d2a999fbb84dc5f785_prof);

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
