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
        $__internal_7c4819481e365be4f7da0f1e3e977cdbdc52784aa3c56aa0c6378d394327b01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4819481e365be4f7da0f1e3e977cdbdc52784aa3c56aa0c6378d394327b01c->enter($__internal_7c4819481e365be4f7da0f1e3e977cdbdc52784aa3c56aa0c6378d394327b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dd852655e77c75fa3460dd8a5d75593094221755de7d5e3a28f2677621506ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd852655e77c75fa3460dd8a5d75593094221755de7d5e3a28f2677621506ceb->enter($__internal_dd852655e77c75fa3460dd8a5d75593094221755de7d5e3a28f2677621506ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4819481e365be4f7da0f1e3e977cdbdc52784aa3c56aa0c6378d394327b01c->leave($__internal_7c4819481e365be4f7da0f1e3e977cdbdc52784aa3c56aa0c6378d394327b01c_prof);

        
        $__internal_dd852655e77c75fa3460dd8a5d75593094221755de7d5e3a28f2677621506ceb->leave($__internal_dd852655e77c75fa3460dd8a5d75593094221755de7d5e3a28f2677621506ceb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9979fe455a3f0bf11c7561eaece275dcdf19b5db2fddf465be2c96942cb9e4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9979fe455a3f0bf11c7561eaece275dcdf19b5db2fddf465be2c96942cb9e4df->enter($__internal_9979fe455a3f0bf11c7561eaece275dcdf19b5db2fddf465be2c96942cb9e4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7cb8d89bd0268c49409f344bbee49e69c40c50ce7b6e2aa39ecfff2f80707d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cb8d89bd0268c49409f344bbee49e69c40c50ce7b6e2aa39ecfff2f80707d2->enter($__internal_c7cb8d89bd0268c49409f344bbee49e69c40c50ce7b6e2aa39ecfff2f80707d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c7cb8d89bd0268c49409f344bbee49e69c40c50ce7b6e2aa39ecfff2f80707d2->leave($__internal_c7cb8d89bd0268c49409f344bbee49e69c40c50ce7b6e2aa39ecfff2f80707d2_prof);

        
        $__internal_9979fe455a3f0bf11c7561eaece275dcdf19b5db2fddf465be2c96942cb9e4df->leave($__internal_9979fe455a3f0bf11c7561eaece275dcdf19b5db2fddf465be2c96942cb9e4df_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0915d3ae64ec1bd735d43f0e29369ce13bd419c29a45698948a1bd5f74d032f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0915d3ae64ec1bd735d43f0e29369ce13bd419c29a45698948a1bd5f74d032f->enter($__internal_d0915d3ae64ec1bd735d43f0e29369ce13bd419c29a45698948a1bd5f74d032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f36828ba6150d0ce9eadf77a3e0e7758e4edf499fe14a94b70cfcb62d4d40f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f36828ba6150d0ce9eadf77a3e0e7758e4edf499fe14a94b70cfcb62d4d40f6->enter($__internal_1f36828ba6150d0ce9eadf77a3e0e7758e4edf499fe14a94b70cfcb62d4d40f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1f36828ba6150d0ce9eadf77a3e0e7758e4edf499fe14a94b70cfcb62d4d40f6->leave($__internal_1f36828ba6150d0ce9eadf77a3e0e7758e4edf499fe14a94b70cfcb62d4d40f6_prof);

        
        $__internal_d0915d3ae64ec1bd735d43f0e29369ce13bd419c29a45698948a1bd5f74d032f->leave($__internal_d0915d3ae64ec1bd735d43f0e29369ce13bd419c29a45698948a1bd5f74d032f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7f9f4fa2b81ef88c2964b5befb43044e7fa84c7889729e6ae0f1494155c05dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f9f4fa2b81ef88c2964b5befb43044e7fa84c7889729e6ae0f1494155c05dc->enter($__internal_b7f9f4fa2b81ef88c2964b5befb43044e7fa84c7889729e6ae0f1494155c05dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e71ebb017324eeef1fe73392fe3766d201f3121f0713122c7043328df362d786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71ebb017324eeef1fe73392fe3766d201f3121f0713122c7043328df362d786->enter($__internal_e71ebb017324eeef1fe73392fe3766d201f3121f0713122c7043328df362d786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e71ebb017324eeef1fe73392fe3766d201f3121f0713122c7043328df362d786->leave($__internal_e71ebb017324eeef1fe73392fe3766d201f3121f0713122c7043328df362d786_prof);

        
        $__internal_b7f9f4fa2b81ef88c2964b5befb43044e7fa84c7889729e6ae0f1494155c05dc->leave($__internal_b7f9f4fa2b81ef88c2964b5befb43044e7fa84c7889729e6ae0f1494155c05dc_prof);

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
