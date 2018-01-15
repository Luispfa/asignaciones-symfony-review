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
        $__internal_cd9cf697915f5896693717e0799ccf59098a1758b764db9241789546e25437b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9cf697915f5896693717e0799ccf59098a1758b764db9241789546e25437b1->enter($__internal_cd9cf697915f5896693717e0799ccf59098a1758b764db9241789546e25437b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7dcc68205dfe6712fc04680fbb686c5723360ed2df148558d6897765d06b1a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcc68205dfe6712fc04680fbb686c5723360ed2df148558d6897765d06b1a16->enter($__internal_7dcc68205dfe6712fc04680fbb686c5723360ed2df148558d6897765d06b1a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9cf697915f5896693717e0799ccf59098a1758b764db9241789546e25437b1->leave($__internal_cd9cf697915f5896693717e0799ccf59098a1758b764db9241789546e25437b1_prof);

        
        $__internal_7dcc68205dfe6712fc04680fbb686c5723360ed2df148558d6897765d06b1a16->leave($__internal_7dcc68205dfe6712fc04680fbb686c5723360ed2df148558d6897765d06b1a16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f01c91fea033c19fbb7c208fc0a935850541c2f2af94465654493c7c1d88ce6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01c91fea033c19fbb7c208fc0a935850541c2f2af94465654493c7c1d88ce6e->enter($__internal_f01c91fea033c19fbb7c208fc0a935850541c2f2af94465654493c7c1d88ce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fded6292c31cbcdb96ec0cc6a47b4a43e15780b1f9975fb6d71d0f7216bb7e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fded6292c31cbcdb96ec0cc6a47b4a43e15780b1f9975fb6d71d0f7216bb7e0e->enter($__internal_fded6292c31cbcdb96ec0cc6a47b4a43e15780b1f9975fb6d71d0f7216bb7e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fded6292c31cbcdb96ec0cc6a47b4a43e15780b1f9975fb6d71d0f7216bb7e0e->leave($__internal_fded6292c31cbcdb96ec0cc6a47b4a43e15780b1f9975fb6d71d0f7216bb7e0e_prof);

        
        $__internal_f01c91fea033c19fbb7c208fc0a935850541c2f2af94465654493c7c1d88ce6e->leave($__internal_f01c91fea033c19fbb7c208fc0a935850541c2f2af94465654493c7c1d88ce6e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6efa3b3e94ced9a5eefbebda59117d3b0bd89cf2c7435885e40ec7721f593939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efa3b3e94ced9a5eefbebda59117d3b0bd89cf2c7435885e40ec7721f593939->enter($__internal_6efa3b3e94ced9a5eefbebda59117d3b0bd89cf2c7435885e40ec7721f593939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd2a0e2e1fecf0d82855cef37c334ce7a02b68c3da8fb5690ea412cb69ed0f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2a0e2e1fecf0d82855cef37c334ce7a02b68c3da8fb5690ea412cb69ed0f57->enter($__internal_dd2a0e2e1fecf0d82855cef37c334ce7a02b68c3da8fb5690ea412cb69ed0f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd2a0e2e1fecf0d82855cef37c334ce7a02b68c3da8fb5690ea412cb69ed0f57->leave($__internal_dd2a0e2e1fecf0d82855cef37c334ce7a02b68c3da8fb5690ea412cb69ed0f57_prof);

        
        $__internal_6efa3b3e94ced9a5eefbebda59117d3b0bd89cf2c7435885e40ec7721f593939->leave($__internal_6efa3b3e94ced9a5eefbebda59117d3b0bd89cf2c7435885e40ec7721f593939_prof);

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
