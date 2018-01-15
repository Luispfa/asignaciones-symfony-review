<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_259ea02f55be8520be9066f62683572ce80eef483e8ede44bb8dd64be20a8a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c948f0946c4a2829190e1cd860289055a5c03708f289d6b263aad4638c4539cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c948f0946c4a2829190e1cd860289055a5c03708f289d6b263aad4638c4539cb->enter($__internal_c948f0946c4a2829190e1cd860289055a5c03708f289d6b263aad4638c4539cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4ac884d963a798f0feae31017f3892e07633d2e10945b3828b1f0f61669c76bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac884d963a798f0feae31017f3892e07633d2e10945b3828b1f0f61669c76bb->enter($__internal_4ac884d963a798f0feae31017f3892e07633d2e10945b3828b1f0f61669c76bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c948f0946c4a2829190e1cd860289055a5c03708f289d6b263aad4638c4539cb->leave($__internal_c948f0946c4a2829190e1cd860289055a5c03708f289d6b263aad4638c4539cb_prof);

        
        $__internal_4ac884d963a798f0feae31017f3892e07633d2e10945b3828b1f0f61669c76bb->leave($__internal_4ac884d963a798f0feae31017f3892e07633d2e10945b3828b1f0f61669c76bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aae22f6ccb45d5c5a348d6c987551a981e0af569fbb4b019a0161fe0c7213c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae22f6ccb45d5c5a348d6c987551a981e0af569fbb4b019a0161fe0c7213c20->enter($__internal_aae22f6ccb45d5c5a348d6c987551a981e0af569fbb4b019a0161fe0c7213c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_741e43a238f65acea019fc483a61920fcbbe3155e69d112a28ff1c303cce7ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741e43a238f65acea019fc483a61920fcbbe3155e69d112a28ff1c303cce7ed5->enter($__internal_741e43a238f65acea019fc483a61920fcbbe3155e69d112a28ff1c303cce7ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_741e43a238f65acea019fc483a61920fcbbe3155e69d112a28ff1c303cce7ed5->leave($__internal_741e43a238f65acea019fc483a61920fcbbe3155e69d112a28ff1c303cce7ed5_prof);

        
        $__internal_aae22f6ccb45d5c5a348d6c987551a981e0af569fbb4b019a0161fe0c7213c20->leave($__internal_aae22f6ccb45d5c5a348d6c987551a981e0af569fbb4b019a0161fe0c7213c20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69cf9cf03c0b360e040911e5a44cea8f5c25ac2ec9cd7cf6502b21ad29a28e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cf9cf03c0b360e040911e5a44cea8f5c25ac2ec9cd7cf6502b21ad29a28e2b->enter($__internal_69cf9cf03c0b360e040911e5a44cea8f5c25ac2ec9cd7cf6502b21ad29a28e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7735bdda2edc091bf651fc9507a291046dd5ddd53cdcf37f0efa3faecc40f9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7735bdda2edc091bf651fc9507a291046dd5ddd53cdcf37f0efa3faecc40f9c6->enter($__internal_7735bdda2edc091bf651fc9507a291046dd5ddd53cdcf37f0efa3faecc40f9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7735bdda2edc091bf651fc9507a291046dd5ddd53cdcf37f0efa3faecc40f9c6->leave($__internal_7735bdda2edc091bf651fc9507a291046dd5ddd53cdcf37f0efa3faecc40f9c6_prof);

        
        $__internal_69cf9cf03c0b360e040911e5a44cea8f5c25ac2ec9cd7cf6502b21ad29a28e2b->leave($__internal_69cf9cf03c0b360e040911e5a44cea8f5c25ac2ec9cd7cf6502b21ad29a28e2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8cd9eaf930759e76f5fd91504791fbffdf67ceaec66d03e208c4d12f7b97b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cd9eaf930759e76f5fd91504791fbffdf67ceaec66d03e208c4d12f7b97b73->enter($__internal_f8cd9eaf930759e76f5fd91504791fbffdf67ceaec66d03e208c4d12f7b97b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad3ece29ba88d985e9a7ece4a8219214cb6bc414634482ab1393c6017cbdb820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3ece29ba88d985e9a7ece4a8219214cb6bc414634482ab1393c6017cbdb820->enter($__internal_ad3ece29ba88d985e9a7ece4a8219214cb6bc414634482ab1393c6017cbdb820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ad3ece29ba88d985e9a7ece4a8219214cb6bc414634482ab1393c6017cbdb820->leave($__internal_ad3ece29ba88d985e9a7ece4a8219214cb6bc414634482ab1393c6017cbdb820_prof);

        
        $__internal_f8cd9eaf930759e76f5fd91504791fbffdf67ceaec66d03e208c4d12f7b97b73->leave($__internal_f8cd9eaf930759e76f5fd91504791fbffdf67ceaec66d03e208c4d12f7b97b73_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
