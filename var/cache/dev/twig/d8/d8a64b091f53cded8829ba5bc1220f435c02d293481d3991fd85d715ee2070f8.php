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
        $__internal_50db99ea396bd21519bf17e806cac52669803be9c0020532ddc01387ad87590a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50db99ea396bd21519bf17e806cac52669803be9c0020532ddc01387ad87590a->enter($__internal_50db99ea396bd21519bf17e806cac52669803be9c0020532ddc01387ad87590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca09158ab3c4abab961ff300132b0c1f87809d1cf0044bfff40938bd22ce48fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca09158ab3c4abab961ff300132b0c1f87809d1cf0044bfff40938bd22ce48fb->enter($__internal_ca09158ab3c4abab961ff300132b0c1f87809d1cf0044bfff40938bd22ce48fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50db99ea396bd21519bf17e806cac52669803be9c0020532ddc01387ad87590a->leave($__internal_50db99ea396bd21519bf17e806cac52669803be9c0020532ddc01387ad87590a_prof);

        
        $__internal_ca09158ab3c4abab961ff300132b0c1f87809d1cf0044bfff40938bd22ce48fb->leave($__internal_ca09158ab3c4abab961ff300132b0c1f87809d1cf0044bfff40938bd22ce48fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b00a906628de4ce62229c7d35b7b2c7ada036638621eb5a05e8c594ea8a47bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00a906628de4ce62229c7d35b7b2c7ada036638621eb5a05e8c594ea8a47bb2->enter($__internal_b00a906628de4ce62229c7d35b7b2c7ada036638621eb5a05e8c594ea8a47bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_306cafdc646f13e994d69ab3a73d0dd761d8d1b4999dfc3a637ff65ee048f3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306cafdc646f13e994d69ab3a73d0dd761d8d1b4999dfc3a637ff65ee048f3bf->enter($__internal_306cafdc646f13e994d69ab3a73d0dd761d8d1b4999dfc3a637ff65ee048f3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_306cafdc646f13e994d69ab3a73d0dd761d8d1b4999dfc3a637ff65ee048f3bf->leave($__internal_306cafdc646f13e994d69ab3a73d0dd761d8d1b4999dfc3a637ff65ee048f3bf_prof);

        
        $__internal_b00a906628de4ce62229c7d35b7b2c7ada036638621eb5a05e8c594ea8a47bb2->leave($__internal_b00a906628de4ce62229c7d35b7b2c7ada036638621eb5a05e8c594ea8a47bb2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd9e36cfee5061f4e0a0a05889dafac0492537c5109de34d3d61bea80c89a74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9e36cfee5061f4e0a0a05889dafac0492537c5109de34d3d61bea80c89a74a->enter($__internal_cd9e36cfee5061f4e0a0a05889dafac0492537c5109de34d3d61bea80c89a74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23c8c5673dc0c940fdfc88988f7da5b6c969650d7d737fc25dd64c0268c64370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c8c5673dc0c940fdfc88988f7da5b6c969650d7d737fc25dd64c0268c64370->enter($__internal_23c8c5673dc0c940fdfc88988f7da5b6c969650d7d737fc25dd64c0268c64370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23c8c5673dc0c940fdfc88988f7da5b6c969650d7d737fc25dd64c0268c64370->leave($__internal_23c8c5673dc0c940fdfc88988f7da5b6c969650d7d737fc25dd64c0268c64370_prof);

        
        $__internal_cd9e36cfee5061f4e0a0a05889dafac0492537c5109de34d3d61bea80c89a74a->leave($__internal_cd9e36cfee5061f4e0a0a05889dafac0492537c5109de34d3d61bea80c89a74a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aba3c9742c7a0a401d26e9415a4fa91a3db13f1c131d5dbff87638234744afba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba3c9742c7a0a401d26e9415a4fa91a3db13f1c131d5dbff87638234744afba->enter($__internal_aba3c9742c7a0a401d26e9415a4fa91a3db13f1c131d5dbff87638234744afba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2be2710f115a414b65430f235816389cf1d4b1ba04c73fee0f3e27caafbebe72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be2710f115a414b65430f235816389cf1d4b1ba04c73fee0f3e27caafbebe72->enter($__internal_2be2710f115a414b65430f235816389cf1d4b1ba04c73fee0f3e27caafbebe72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2be2710f115a414b65430f235816389cf1d4b1ba04c73fee0f3e27caafbebe72->leave($__internal_2be2710f115a414b65430f235816389cf1d4b1ba04c73fee0f3e27caafbebe72_prof);

        
        $__internal_aba3c9742c7a0a401d26e9415a4fa91a3db13f1c131d5dbff87638234744afba->leave($__internal_aba3c9742c7a0a401d26e9415a4fa91a3db13f1c131d5dbff87638234744afba_prof);

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
