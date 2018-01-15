<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a42c368d2c86c06d8af9502f97aeecf70f9086da5c9b40861facd3da8b48f57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9725f73c4ca25eddda95e9be794940487aea13d112a683bb900fd427ca0aac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9725f73c4ca25eddda95e9be794940487aea13d112a683bb900fd427ca0aac0->enter($__internal_f9725f73c4ca25eddda95e9be794940487aea13d112a683bb900fd427ca0aac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_67f8d48825f02705a9927997d74a436b02246f6d085c6cbc01ef4671661bc5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f8d48825f02705a9927997d74a436b02246f6d085c6cbc01ef4671661bc5f5->enter($__internal_67f8d48825f02705a9927997d74a436b02246f6d085c6cbc01ef4671661bc5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9725f73c4ca25eddda95e9be794940487aea13d112a683bb900fd427ca0aac0->leave($__internal_f9725f73c4ca25eddda95e9be794940487aea13d112a683bb900fd427ca0aac0_prof);

        
        $__internal_67f8d48825f02705a9927997d74a436b02246f6d085c6cbc01ef4671661bc5f5->leave($__internal_67f8d48825f02705a9927997d74a436b02246f6d085c6cbc01ef4671661bc5f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f6fbcd0b89982ab405177a4cacd24c62a20fcc117053df5f4149133f75bb245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6fbcd0b89982ab405177a4cacd24c62a20fcc117053df5f4149133f75bb245->enter($__internal_1f6fbcd0b89982ab405177a4cacd24c62a20fcc117053df5f4149133f75bb245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_673d4e64551f76c57ba6cc5405e7b86bb4df8b0c02f337d0a84cfe059ad354c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673d4e64551f76c57ba6cc5405e7b86bb4df8b0c02f337d0a84cfe059ad354c7->enter($__internal_673d4e64551f76c57ba6cc5405e7b86bb4df8b0c02f337d0a84cfe059ad354c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_673d4e64551f76c57ba6cc5405e7b86bb4df8b0c02f337d0a84cfe059ad354c7->leave($__internal_673d4e64551f76c57ba6cc5405e7b86bb4df8b0c02f337d0a84cfe059ad354c7_prof);

        
        $__internal_1f6fbcd0b89982ab405177a4cacd24c62a20fcc117053df5f4149133f75bb245->leave($__internal_1f6fbcd0b89982ab405177a4cacd24c62a20fcc117053df5f4149133f75bb245_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fddfd648af8d3339cd0915d2836a4d7a380004144378c33295d33dfa4336c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fddfd648af8d3339cd0915d2836a4d7a380004144378c33295d33dfa4336c2f->enter($__internal_0fddfd648af8d3339cd0915d2836a4d7a380004144378c33295d33dfa4336c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bc0f83a6a1a0bc1ee3284c84ca453e11fbff0d72494947ee7648a4411ed6679d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0f83a6a1a0bc1ee3284c84ca453e11fbff0d72494947ee7648a4411ed6679d->enter($__internal_bc0f83a6a1a0bc1ee3284c84ca453e11fbff0d72494947ee7648a4411ed6679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bc0f83a6a1a0bc1ee3284c84ca453e11fbff0d72494947ee7648a4411ed6679d->leave($__internal_bc0f83a6a1a0bc1ee3284c84ca453e11fbff0d72494947ee7648a4411ed6679d_prof);

        
        $__internal_0fddfd648af8d3339cd0915d2836a4d7a380004144378c33295d33dfa4336c2f->leave($__internal_0fddfd648af8d3339cd0915d2836a4d7a380004144378c33295d33dfa4336c2f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40b83574c7440a252f847bda3259100af6d19830d63666ca575894c084901b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b83574c7440a252f847bda3259100af6d19830d63666ca575894c084901b10->enter($__internal_40b83574c7440a252f847bda3259100af6d19830d63666ca575894c084901b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26cab6c6659022e7fda7d89436aa1927d8216722527053959b233487107cf37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cab6c6659022e7fda7d89436aa1927d8216722527053959b233487107cf37b->enter($__internal_26cab6c6659022e7fda7d89436aa1927d8216722527053959b233487107cf37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_26cab6c6659022e7fda7d89436aa1927d8216722527053959b233487107cf37b->leave($__internal_26cab6c6659022e7fda7d89436aa1927d8216722527053959b233487107cf37b_prof);

        
        $__internal_40b83574c7440a252f847bda3259100af6d19830d63666ca575894c084901b10->leave($__internal_40b83574c7440a252f847bda3259100af6d19830d63666ca575894c084901b10_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
