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
        $__internal_c17e85b4353b97fe68614a9a9fc1b124404ada737753fbf9d68ad2ce9b6148a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17e85b4353b97fe68614a9a9fc1b124404ada737753fbf9d68ad2ce9b6148a8->enter($__internal_c17e85b4353b97fe68614a9a9fc1b124404ada737753fbf9d68ad2ce9b6148a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ea160c8c02754aeacb486e35ca35a299bd0f3210a770cbe92cf50e8445c9f8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea160c8c02754aeacb486e35ca35a299bd0f3210a770cbe92cf50e8445c9f8a2->enter($__internal_ea160c8c02754aeacb486e35ca35a299bd0f3210a770cbe92cf50e8445c9f8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17e85b4353b97fe68614a9a9fc1b124404ada737753fbf9d68ad2ce9b6148a8->leave($__internal_c17e85b4353b97fe68614a9a9fc1b124404ada737753fbf9d68ad2ce9b6148a8_prof);

        
        $__internal_ea160c8c02754aeacb486e35ca35a299bd0f3210a770cbe92cf50e8445c9f8a2->leave($__internal_ea160c8c02754aeacb486e35ca35a299bd0f3210a770cbe92cf50e8445c9f8a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f7fd0026f1b53ba6c301aa4772fe1694d478fcf130e6d6ca753176cc777b4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7fd0026f1b53ba6c301aa4772fe1694d478fcf130e6d6ca753176cc777b4b1->enter($__internal_6f7fd0026f1b53ba6c301aa4772fe1694d478fcf130e6d6ca753176cc777b4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33f8250ae2168232ba0f06829ce47adfe24f25101a72bd4f756448699615dd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f8250ae2168232ba0f06829ce47adfe24f25101a72bd4f756448699615dd73->enter($__internal_33f8250ae2168232ba0f06829ce47adfe24f25101a72bd4f756448699615dd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_33f8250ae2168232ba0f06829ce47adfe24f25101a72bd4f756448699615dd73->leave($__internal_33f8250ae2168232ba0f06829ce47adfe24f25101a72bd4f756448699615dd73_prof);

        
        $__internal_6f7fd0026f1b53ba6c301aa4772fe1694d478fcf130e6d6ca753176cc777b4b1->leave($__internal_6f7fd0026f1b53ba6c301aa4772fe1694d478fcf130e6d6ca753176cc777b4b1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2a61124b62e95abf21d402072a41c6d9f0e345104d684e52547750385de72ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a61124b62e95abf21d402072a41c6d9f0e345104d684e52547750385de72ad->enter($__internal_b2a61124b62e95abf21d402072a41c6d9f0e345104d684e52547750385de72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7660907ed3c4e7c6289f8e6f7532b9e6b81f7f99e76fefab533a8cfce2b58324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7660907ed3c4e7c6289f8e6f7532b9e6b81f7f99e76fefab533a8cfce2b58324->enter($__internal_7660907ed3c4e7c6289f8e6f7532b9e6b81f7f99e76fefab533a8cfce2b58324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7660907ed3c4e7c6289f8e6f7532b9e6b81f7f99e76fefab533a8cfce2b58324->leave($__internal_7660907ed3c4e7c6289f8e6f7532b9e6b81f7f99e76fefab533a8cfce2b58324_prof);

        
        $__internal_b2a61124b62e95abf21d402072a41c6d9f0e345104d684e52547750385de72ad->leave($__internal_b2a61124b62e95abf21d402072a41c6d9f0e345104d684e52547750385de72ad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e22ede373b6541691f1ffdadbf037c87c28e6aa20d0c55bc04557dd24511119f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22ede373b6541691f1ffdadbf037c87c28e6aa20d0c55bc04557dd24511119f->enter($__internal_e22ede373b6541691f1ffdadbf037c87c28e6aa20d0c55bc04557dd24511119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df99b03b1e314a767a5c5381993c1b3ffa04214d8efb4df7b534770b5869ddbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df99b03b1e314a767a5c5381993c1b3ffa04214d8efb4df7b534770b5869ddbc->enter($__internal_df99b03b1e314a767a5c5381993c1b3ffa04214d8efb4df7b534770b5869ddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_df99b03b1e314a767a5c5381993c1b3ffa04214d8efb4df7b534770b5869ddbc->leave($__internal_df99b03b1e314a767a5c5381993c1b3ffa04214d8efb4df7b534770b5869ddbc_prof);

        
        $__internal_e22ede373b6541691f1ffdadbf037c87c28e6aa20d0c55bc04557dd24511119f->leave($__internal_e22ede373b6541691f1ffdadbf037c87c28e6aa20d0c55bc04557dd24511119f_prof);

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
