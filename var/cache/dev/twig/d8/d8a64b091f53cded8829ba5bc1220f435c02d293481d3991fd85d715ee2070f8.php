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
        $__internal_0a4397417017ee0e16ebdea998e4144c979b1a6ce7b90275edb0ea190afece1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4397417017ee0e16ebdea998e4144c979b1a6ce7b90275edb0ea190afece1c->enter($__internal_0a4397417017ee0e16ebdea998e4144c979b1a6ce7b90275edb0ea190afece1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3d3d68e48396a0a18fec93e9daa5e51ea7bc81cc19e1dca8874ad05be3c0c641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3d68e48396a0a18fec93e9daa5e51ea7bc81cc19e1dca8874ad05be3c0c641->enter($__internal_3d3d68e48396a0a18fec93e9daa5e51ea7bc81cc19e1dca8874ad05be3c0c641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4397417017ee0e16ebdea998e4144c979b1a6ce7b90275edb0ea190afece1c->leave($__internal_0a4397417017ee0e16ebdea998e4144c979b1a6ce7b90275edb0ea190afece1c_prof);

        
        $__internal_3d3d68e48396a0a18fec93e9daa5e51ea7bc81cc19e1dca8874ad05be3c0c641->leave($__internal_3d3d68e48396a0a18fec93e9daa5e51ea7bc81cc19e1dca8874ad05be3c0c641_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dc51c14e1c7e9a0e4a7c40eec76c14bb6fd716b21acedc7d03d48545fa83ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc51c14e1c7e9a0e4a7c40eec76c14bb6fd716b21acedc7d03d48545fa83ee3->enter($__internal_6dc51c14e1c7e9a0e4a7c40eec76c14bb6fd716b21acedc7d03d48545fa83ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_668660d237d3772d63d5808a71115c76983fa64a0a76b04b4fdada0f2a400f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668660d237d3772d63d5808a71115c76983fa64a0a76b04b4fdada0f2a400f5d->enter($__internal_668660d237d3772d63d5808a71115c76983fa64a0a76b04b4fdada0f2a400f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_668660d237d3772d63d5808a71115c76983fa64a0a76b04b4fdada0f2a400f5d->leave($__internal_668660d237d3772d63d5808a71115c76983fa64a0a76b04b4fdada0f2a400f5d_prof);

        
        $__internal_6dc51c14e1c7e9a0e4a7c40eec76c14bb6fd716b21acedc7d03d48545fa83ee3->leave($__internal_6dc51c14e1c7e9a0e4a7c40eec76c14bb6fd716b21acedc7d03d48545fa83ee3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0263f39a2eecd0612dcd9183569a1955dfd80b30f032490f2ed4a687ca6423d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0263f39a2eecd0612dcd9183569a1955dfd80b30f032490f2ed4a687ca6423d7->enter($__internal_0263f39a2eecd0612dcd9183569a1955dfd80b30f032490f2ed4a687ca6423d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f508966b463a369cd579d40f36010338880e97d882633d2c337e4216b5f0acb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f508966b463a369cd579d40f36010338880e97d882633d2c337e4216b5f0acb2->enter($__internal_f508966b463a369cd579d40f36010338880e97d882633d2c337e4216b5f0acb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f508966b463a369cd579d40f36010338880e97d882633d2c337e4216b5f0acb2->leave($__internal_f508966b463a369cd579d40f36010338880e97d882633d2c337e4216b5f0acb2_prof);

        
        $__internal_0263f39a2eecd0612dcd9183569a1955dfd80b30f032490f2ed4a687ca6423d7->leave($__internal_0263f39a2eecd0612dcd9183569a1955dfd80b30f032490f2ed4a687ca6423d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d0490875fb8fd14930187363d0bcdbeda83dc73d1214f593a71c8a667d6b4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0490875fb8fd14930187363d0bcdbeda83dc73d1214f593a71c8a667d6b4f0->enter($__internal_4d0490875fb8fd14930187363d0bcdbeda83dc73d1214f593a71c8a667d6b4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3509b8db9388e7aa104ba79ba5ffe1eae04360691f475a24ea1348cdc2fe1b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3509b8db9388e7aa104ba79ba5ffe1eae04360691f475a24ea1348cdc2fe1b66->enter($__internal_3509b8db9388e7aa104ba79ba5ffe1eae04360691f475a24ea1348cdc2fe1b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3509b8db9388e7aa104ba79ba5ffe1eae04360691f475a24ea1348cdc2fe1b66->leave($__internal_3509b8db9388e7aa104ba79ba5ffe1eae04360691f475a24ea1348cdc2fe1b66_prof);

        
        $__internal_4d0490875fb8fd14930187363d0bcdbeda83dc73d1214f593a71c8a667d6b4f0->leave($__internal_4d0490875fb8fd14930187363d0bcdbeda83dc73d1214f593a71c8a667d6b4f0_prof);

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
