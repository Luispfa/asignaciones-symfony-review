<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e56b32dde318e3be76b441e4a6de59c3d7a11347044c5b9f4b9a2b09021378e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab68e3d34ba9cc139caf77dd585da7e545dfc092ab0c801d2165716a6b94ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab68e3d34ba9cc139caf77dd585da7e545dfc092ab0c801d2165716a6b94ccc->enter($__internal_4ab68e3d34ba9cc139caf77dd585da7e545dfc092ab0c801d2165716a6b94ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c2a44e213016ff6c445719c3b7cf61fb7f877e9fbac0ccb82e75fd88e111d5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a44e213016ff6c445719c3b7cf61fb7f877e9fbac0ccb82e75fd88e111d5f4->enter($__internal_c2a44e213016ff6c445719c3b7cf61fb7f877e9fbac0ccb82e75fd88e111d5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab68e3d34ba9cc139caf77dd585da7e545dfc092ab0c801d2165716a6b94ccc->leave($__internal_4ab68e3d34ba9cc139caf77dd585da7e545dfc092ab0c801d2165716a6b94ccc_prof);

        
        $__internal_c2a44e213016ff6c445719c3b7cf61fb7f877e9fbac0ccb82e75fd88e111d5f4->leave($__internal_c2a44e213016ff6c445719c3b7cf61fb7f877e9fbac0ccb82e75fd88e111d5f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36a7f95dd9b911648a3d840a2fd1de8c85e2bc5404c8934b6545ebf5331463c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a7f95dd9b911648a3d840a2fd1de8c85e2bc5404c8934b6545ebf5331463c7->enter($__internal_36a7f95dd9b911648a3d840a2fd1de8c85e2bc5404c8934b6545ebf5331463c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff690cb0726bc0a266f56166e2f99da64e7422f4e04e34b15a5fa863c0969c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff690cb0726bc0a266f56166e2f99da64e7422f4e04e34b15a5fa863c0969c6d->enter($__internal_ff690cb0726bc0a266f56166e2f99da64e7422f4e04e34b15a5fa863c0969c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff690cb0726bc0a266f56166e2f99da64e7422f4e04e34b15a5fa863c0969c6d->leave($__internal_ff690cb0726bc0a266f56166e2f99da64e7422f4e04e34b15a5fa863c0969c6d_prof);

        
        $__internal_36a7f95dd9b911648a3d840a2fd1de8c85e2bc5404c8934b6545ebf5331463c7->leave($__internal_36a7f95dd9b911648a3d840a2fd1de8c85e2bc5404c8934b6545ebf5331463c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c1df9334a58bf39c375ab1e8c968d8602c10514d491bbebe8248bfd5db56388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1df9334a58bf39c375ab1e8c968d8602c10514d491bbebe8248bfd5db56388->enter($__internal_6c1df9334a58bf39c375ab1e8c968d8602c10514d491bbebe8248bfd5db56388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8b46303c1bb52700fbb3fa688aea670ad339c86692711eddb603ad4f426cd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b46303c1bb52700fbb3fa688aea670ad339c86692711eddb603ad4f426cd0e->enter($__internal_b8b46303c1bb52700fbb3fa688aea670ad339c86692711eddb603ad4f426cd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b8b46303c1bb52700fbb3fa688aea670ad339c86692711eddb603ad4f426cd0e->leave($__internal_b8b46303c1bb52700fbb3fa688aea670ad339c86692711eddb603ad4f426cd0e_prof);

        
        $__internal_6c1df9334a58bf39c375ab1e8c968d8602c10514d491bbebe8248bfd5db56388->leave($__internal_6c1df9334a58bf39c375ab1e8c968d8602c10514d491bbebe8248bfd5db56388_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
