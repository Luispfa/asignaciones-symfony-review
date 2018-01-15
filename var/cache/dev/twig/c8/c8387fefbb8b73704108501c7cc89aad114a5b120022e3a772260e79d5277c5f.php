<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a42c368d2c86c06d8af9502f97aeecf70f9086da5c9b40861facd3da8b48f57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_a1c29fb005b161f3fbcc6653e583cf8e949f0f08b433cf88ec7f7e2ceaa4492a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c29fb005b161f3fbcc6653e583cf8e949f0f08b433cf88ec7f7e2ceaa4492a->enter($__internal_a1c29fb005b161f3fbcc6653e583cf8e949f0f08b433cf88ec7f7e2ceaa4492a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b3510c1317cb5f77afa0dd6948884f9739c95be7c7237b9e2afce6c2f7fa9b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3510c1317cb5f77afa0dd6948884f9739c95be7c7237b9e2afce6c2f7fa9b9b->enter($__internal_b3510c1317cb5f77afa0dd6948884f9739c95be7c7237b9e2afce6c2f7fa9b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c29fb005b161f3fbcc6653e583cf8e949f0f08b433cf88ec7f7e2ceaa4492a->leave($__internal_a1c29fb005b161f3fbcc6653e583cf8e949f0f08b433cf88ec7f7e2ceaa4492a_prof);

        
        $__internal_b3510c1317cb5f77afa0dd6948884f9739c95be7c7237b9e2afce6c2f7fa9b9b->leave($__internal_b3510c1317cb5f77afa0dd6948884f9739c95be7c7237b9e2afce6c2f7fa9b9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18f57681d6abfec111e0f8176bd7d2cca60382cde9ed269e127da77d0537f9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f57681d6abfec111e0f8176bd7d2cca60382cde9ed269e127da77d0537f9f4->enter($__internal_18f57681d6abfec111e0f8176bd7d2cca60382cde9ed269e127da77d0537f9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5df26c19bc045fcda4599f2442fff3ffa0fbe32ff618e42c4de90f1214ad3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5df26c19bc045fcda4599f2442fff3ffa0fbe32ff618e42c4de90f1214ad3c3->enter($__internal_a5df26c19bc045fcda4599f2442fff3ffa0fbe32ff618e42c4de90f1214ad3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a5df26c19bc045fcda4599f2442fff3ffa0fbe32ff618e42c4de90f1214ad3c3->leave($__internal_a5df26c19bc045fcda4599f2442fff3ffa0fbe32ff618e42c4de90f1214ad3c3_prof);

        
        $__internal_18f57681d6abfec111e0f8176bd7d2cca60382cde9ed269e127da77d0537f9f4->leave($__internal_18f57681d6abfec111e0f8176bd7d2cca60382cde9ed269e127da77d0537f9f4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da446ecdb55d4e867a8f0e758f70c2b279795b4bbc46ab043735d5ca8f70fa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da446ecdb55d4e867a8f0e758f70c2b279795b4bbc46ab043735d5ca8f70fa6a->enter($__internal_da446ecdb55d4e867a8f0e758f70c2b279795b4bbc46ab043735d5ca8f70fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_beb42287ae50624053c16a171cc987a2a628ef419480322776d6a3bbfabcdf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb42287ae50624053c16a171cc987a2a628ef419480322776d6a3bbfabcdf59->enter($__internal_beb42287ae50624053c16a171cc987a2a628ef419480322776d6a3bbfabcdf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_beb42287ae50624053c16a171cc987a2a628ef419480322776d6a3bbfabcdf59->leave($__internal_beb42287ae50624053c16a171cc987a2a628ef419480322776d6a3bbfabcdf59_prof);

        
        $__internal_da446ecdb55d4e867a8f0e758f70c2b279795b4bbc46ab043735d5ca8f70fa6a->leave($__internal_da446ecdb55d4e867a8f0e758f70c2b279795b4bbc46ab043735d5ca8f70fa6a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48ab5f45072ae1597f025cdffe44f4586333f664f33de71b3ad7dad29d789e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ab5f45072ae1597f025cdffe44f4586333f664f33de71b3ad7dad29d789e62->enter($__internal_48ab5f45072ae1597f025cdffe44f4586333f664f33de71b3ad7dad29d789e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_757a305df9c94c2dc3564b636ce1771d0f76cad6340ccbd49ac3049d8d5da924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757a305df9c94c2dc3564b636ce1771d0f76cad6340ccbd49ac3049d8d5da924->enter($__internal_757a305df9c94c2dc3564b636ce1771d0f76cad6340ccbd49ac3049d8d5da924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_757a305df9c94c2dc3564b636ce1771d0f76cad6340ccbd49ac3049d8d5da924->leave($__internal_757a305df9c94c2dc3564b636ce1771d0f76cad6340ccbd49ac3049d8d5da924_prof);

        
        $__internal_48ab5f45072ae1597f025cdffe44f4586333f664f33de71b3ad7dad29d789e62->leave($__internal_48ab5f45072ae1597f025cdffe44f4586333f664f33de71b3ad7dad29d789e62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
