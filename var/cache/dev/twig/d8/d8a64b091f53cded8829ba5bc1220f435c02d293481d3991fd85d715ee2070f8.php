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
        $__internal_896fc64edcf231c563df26c60a2bac0f1f7bfca6e71a50f2583dfbacaa4409c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896fc64edcf231c563df26c60a2bac0f1f7bfca6e71a50f2583dfbacaa4409c5->enter($__internal_896fc64edcf231c563df26c60a2bac0f1f7bfca6e71a50f2583dfbacaa4409c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f4e22dcefac63adcbab3f6a5399b7b0440635fe1176a3c692a035fccec44de10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e22dcefac63adcbab3f6a5399b7b0440635fe1176a3c692a035fccec44de10->enter($__internal_f4e22dcefac63adcbab3f6a5399b7b0440635fe1176a3c692a035fccec44de10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_896fc64edcf231c563df26c60a2bac0f1f7bfca6e71a50f2583dfbacaa4409c5->leave($__internal_896fc64edcf231c563df26c60a2bac0f1f7bfca6e71a50f2583dfbacaa4409c5_prof);

        
        $__internal_f4e22dcefac63adcbab3f6a5399b7b0440635fe1176a3c692a035fccec44de10->leave($__internal_f4e22dcefac63adcbab3f6a5399b7b0440635fe1176a3c692a035fccec44de10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19eb374ff55dbf4f6c2755562566bbfc76f96c0a4b3a2aacf45cf9f275ffaba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19eb374ff55dbf4f6c2755562566bbfc76f96c0a4b3a2aacf45cf9f275ffaba7->enter($__internal_19eb374ff55dbf4f6c2755562566bbfc76f96c0a4b3a2aacf45cf9f275ffaba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7728586c2eec713392e4ce5178217bb465e671e2a510843d5ce4e6ce5f1ad818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7728586c2eec713392e4ce5178217bb465e671e2a510843d5ce4e6ce5f1ad818->enter($__internal_7728586c2eec713392e4ce5178217bb465e671e2a510843d5ce4e6ce5f1ad818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7728586c2eec713392e4ce5178217bb465e671e2a510843d5ce4e6ce5f1ad818->leave($__internal_7728586c2eec713392e4ce5178217bb465e671e2a510843d5ce4e6ce5f1ad818_prof);

        
        $__internal_19eb374ff55dbf4f6c2755562566bbfc76f96c0a4b3a2aacf45cf9f275ffaba7->leave($__internal_19eb374ff55dbf4f6c2755562566bbfc76f96c0a4b3a2aacf45cf9f275ffaba7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3223d7e7375d8ab1b642910946ec6e0dfe3fb9d4b58cfde3ddf42594e53c0d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3223d7e7375d8ab1b642910946ec6e0dfe3fb9d4b58cfde3ddf42594e53c0d95->enter($__internal_3223d7e7375d8ab1b642910946ec6e0dfe3fb9d4b58cfde3ddf42594e53c0d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ded6c13535b4c6ce8b20e519814210b480f343954b482332cd59280648928ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded6c13535b4c6ce8b20e519814210b480f343954b482332cd59280648928ee->enter($__internal_7ded6c13535b4c6ce8b20e519814210b480f343954b482332cd59280648928ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ded6c13535b4c6ce8b20e519814210b480f343954b482332cd59280648928ee->leave($__internal_7ded6c13535b4c6ce8b20e519814210b480f343954b482332cd59280648928ee_prof);

        
        $__internal_3223d7e7375d8ab1b642910946ec6e0dfe3fb9d4b58cfde3ddf42594e53c0d95->leave($__internal_3223d7e7375d8ab1b642910946ec6e0dfe3fb9d4b58cfde3ddf42594e53c0d95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1da987d0c4ce8b9bf39374f6341a1190565424e7f7f5b99b4802b6f31e95d160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da987d0c4ce8b9bf39374f6341a1190565424e7f7f5b99b4802b6f31e95d160->enter($__internal_1da987d0c4ce8b9bf39374f6341a1190565424e7f7f5b99b4802b6f31e95d160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1bb93e1c953b82672d5783f2343b634d73e110ff9233de7a88d12b79a07b974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb93e1c953b82672d5783f2343b634d73e110ff9233de7a88d12b79a07b974e->enter($__internal_1bb93e1c953b82672d5783f2343b634d73e110ff9233de7a88d12b79a07b974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1bb93e1c953b82672d5783f2343b634d73e110ff9233de7a88d12b79a07b974e->leave($__internal_1bb93e1c953b82672d5783f2343b634d73e110ff9233de7a88d12b79a07b974e_prof);

        
        $__internal_1da987d0c4ce8b9bf39374f6341a1190565424e7f7f5b99b4802b6f31e95d160->leave($__internal_1da987d0c4ce8b9bf39374f6341a1190565424e7f7f5b99b4802b6f31e95d160_prof);

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
