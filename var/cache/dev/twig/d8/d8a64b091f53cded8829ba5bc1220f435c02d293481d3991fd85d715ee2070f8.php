<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_259ea02f55be8520be9066f62683572ce80eef483e8ede44bb8dd64be20a8a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9ca76efbe64c2f36fa9154b55b0bdf3a1aac19b1e81327e9d4b8c059465382ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca76efbe64c2f36fa9154b55b0bdf3a1aac19b1e81327e9d4b8c059465382ab->enter($__internal_9ca76efbe64c2f36fa9154b55b0bdf3a1aac19b1e81327e9d4b8c059465382ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_54b01457c8fc2b687133a369625259e65dc9a882bed4799efc30abe13b69f058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b01457c8fc2b687133a369625259e65dc9a882bed4799efc30abe13b69f058->enter($__internal_54b01457c8fc2b687133a369625259e65dc9a882bed4799efc30abe13b69f058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca76efbe64c2f36fa9154b55b0bdf3a1aac19b1e81327e9d4b8c059465382ab->leave($__internal_9ca76efbe64c2f36fa9154b55b0bdf3a1aac19b1e81327e9d4b8c059465382ab_prof);

        
        $__internal_54b01457c8fc2b687133a369625259e65dc9a882bed4799efc30abe13b69f058->leave($__internal_54b01457c8fc2b687133a369625259e65dc9a882bed4799efc30abe13b69f058_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15991e8b740ee4f630e4b3e54145fbfaaf377e9901339145d08f3fd5f3a5cfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15991e8b740ee4f630e4b3e54145fbfaaf377e9901339145d08f3fd5f3a5cfc5->enter($__internal_15991e8b740ee4f630e4b3e54145fbfaaf377e9901339145d08f3fd5f3a5cfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33281a492b65eec8386e6afe58ef7ef0d4f3a8b11290654773090da6e3931046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33281a492b65eec8386e6afe58ef7ef0d4f3a8b11290654773090da6e3931046->enter($__internal_33281a492b65eec8386e6afe58ef7ef0d4f3a8b11290654773090da6e3931046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33281a492b65eec8386e6afe58ef7ef0d4f3a8b11290654773090da6e3931046->leave($__internal_33281a492b65eec8386e6afe58ef7ef0d4f3a8b11290654773090da6e3931046_prof);

        
        $__internal_15991e8b740ee4f630e4b3e54145fbfaaf377e9901339145d08f3fd5f3a5cfc5->leave($__internal_15991e8b740ee4f630e4b3e54145fbfaaf377e9901339145d08f3fd5f3a5cfc5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27db5d5992783e21a41255d547449861f01494b922e2e1cfd3fe0802d632813d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27db5d5992783e21a41255d547449861f01494b922e2e1cfd3fe0802d632813d->enter($__internal_27db5d5992783e21a41255d547449861f01494b922e2e1cfd3fe0802d632813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5cfe6f842351df40b37e64bf79d93f9740142f0c4ad77aa62312eff017a8021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cfe6f842351df40b37e64bf79d93f9740142f0c4ad77aa62312eff017a8021->enter($__internal_f5cfe6f842351df40b37e64bf79d93f9740142f0c4ad77aa62312eff017a8021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5cfe6f842351df40b37e64bf79d93f9740142f0c4ad77aa62312eff017a8021->leave($__internal_f5cfe6f842351df40b37e64bf79d93f9740142f0c4ad77aa62312eff017a8021_prof);

        
        $__internal_27db5d5992783e21a41255d547449861f01494b922e2e1cfd3fe0802d632813d->leave($__internal_27db5d5992783e21a41255d547449861f01494b922e2e1cfd3fe0802d632813d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_703e8f12dd5aaf60a193fe79380fdbf3e70bbd881ee09e12c591159171966613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703e8f12dd5aaf60a193fe79380fdbf3e70bbd881ee09e12c591159171966613->enter($__internal_703e8f12dd5aaf60a193fe79380fdbf3e70bbd881ee09e12c591159171966613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44aab4bc07319269477edcabbce66f5f5398014736d93b6936201f367e29008a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44aab4bc07319269477edcabbce66f5f5398014736d93b6936201f367e29008a->enter($__internal_44aab4bc07319269477edcabbce66f5f5398014736d93b6936201f367e29008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_44aab4bc07319269477edcabbce66f5f5398014736d93b6936201f367e29008a->leave($__internal_44aab4bc07319269477edcabbce66f5f5398014736d93b6936201f367e29008a_prof);

        
        $__internal_703e8f12dd5aaf60a193fe79380fdbf3e70bbd881ee09e12c591159171966613->leave($__internal_703e8f12dd5aaf60a193fe79380fdbf3e70bbd881ee09e12c591159171966613_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
