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
        $__internal_ae86609d7ee200ccc2cbc4144d9d26e912b1e97252efd8fa45325f9caf6d53da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae86609d7ee200ccc2cbc4144d9d26e912b1e97252efd8fa45325f9caf6d53da->enter($__internal_ae86609d7ee200ccc2cbc4144d9d26e912b1e97252efd8fa45325f9caf6d53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_39097bba6505c89f359890405592bea21a8d2d5eeb939709c861fb4d4f67777f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39097bba6505c89f359890405592bea21a8d2d5eeb939709c861fb4d4f67777f->enter($__internal_39097bba6505c89f359890405592bea21a8d2d5eeb939709c861fb4d4f67777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae86609d7ee200ccc2cbc4144d9d26e912b1e97252efd8fa45325f9caf6d53da->leave($__internal_ae86609d7ee200ccc2cbc4144d9d26e912b1e97252efd8fa45325f9caf6d53da_prof);

        
        $__internal_39097bba6505c89f359890405592bea21a8d2d5eeb939709c861fb4d4f67777f->leave($__internal_39097bba6505c89f359890405592bea21a8d2d5eeb939709c861fb4d4f67777f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12259a37c67dc5368f6bc5498b53cc8696fcb1e8538762c618def21d4647404a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12259a37c67dc5368f6bc5498b53cc8696fcb1e8538762c618def21d4647404a->enter($__internal_12259a37c67dc5368f6bc5498b53cc8696fcb1e8538762c618def21d4647404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1021472d0fa1091864d88fe7e24fbef8c86e509a46774fb92ebb9969d6e15cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1021472d0fa1091864d88fe7e24fbef8c86e509a46774fb92ebb9969d6e15cb6->enter($__internal_1021472d0fa1091864d88fe7e24fbef8c86e509a46774fb92ebb9969d6e15cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1021472d0fa1091864d88fe7e24fbef8c86e509a46774fb92ebb9969d6e15cb6->leave($__internal_1021472d0fa1091864d88fe7e24fbef8c86e509a46774fb92ebb9969d6e15cb6_prof);

        
        $__internal_12259a37c67dc5368f6bc5498b53cc8696fcb1e8538762c618def21d4647404a->leave($__internal_12259a37c67dc5368f6bc5498b53cc8696fcb1e8538762c618def21d4647404a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b162ca4140665ae4f03f9d125b7dd8ce69b4b45b0025bb8e84e4ff01ae7b2393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b162ca4140665ae4f03f9d125b7dd8ce69b4b45b0025bb8e84e4ff01ae7b2393->enter($__internal_b162ca4140665ae4f03f9d125b7dd8ce69b4b45b0025bb8e84e4ff01ae7b2393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3646178ec116c3c1e84b4675867ae4dc4e46e5e28688b8a4327d3ccc64aa5973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3646178ec116c3c1e84b4675867ae4dc4e46e5e28688b8a4327d3ccc64aa5973->enter($__internal_3646178ec116c3c1e84b4675867ae4dc4e46e5e28688b8a4327d3ccc64aa5973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3646178ec116c3c1e84b4675867ae4dc4e46e5e28688b8a4327d3ccc64aa5973->leave($__internal_3646178ec116c3c1e84b4675867ae4dc4e46e5e28688b8a4327d3ccc64aa5973_prof);

        
        $__internal_b162ca4140665ae4f03f9d125b7dd8ce69b4b45b0025bb8e84e4ff01ae7b2393->leave($__internal_b162ca4140665ae4f03f9d125b7dd8ce69b4b45b0025bb8e84e4ff01ae7b2393_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94569f670f6d30cbbb33477d6c353b448f9b6ee3f3523882f6c042bf656bc37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94569f670f6d30cbbb33477d6c353b448f9b6ee3f3523882f6c042bf656bc37d->enter($__internal_94569f670f6d30cbbb33477d6c353b448f9b6ee3f3523882f6c042bf656bc37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f4f9140f47ded12ff6c01cd5dfc94e22cb2f212a64030d04ebf3611aff860a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4f9140f47ded12ff6c01cd5dfc94e22cb2f212a64030d04ebf3611aff860a4->enter($__internal_1f4f9140f47ded12ff6c01cd5dfc94e22cb2f212a64030d04ebf3611aff860a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1f4f9140f47ded12ff6c01cd5dfc94e22cb2f212a64030d04ebf3611aff860a4->leave($__internal_1f4f9140f47ded12ff6c01cd5dfc94e22cb2f212a64030d04ebf3611aff860a4_prof);

        
        $__internal_94569f670f6d30cbbb33477d6c353b448f9b6ee3f3523882f6c042bf656bc37d->leave($__internal_94569f670f6d30cbbb33477d6c353b448f9b6ee3f3523882f6c042bf656bc37d_prof);

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
