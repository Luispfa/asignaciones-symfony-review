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
        $__internal_51a451126a37fa2166302233381195d087d109e43f49d0a8fe2dc1ec517c6b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a451126a37fa2166302233381195d087d109e43f49d0a8fe2dc1ec517c6b1c->enter($__internal_51a451126a37fa2166302233381195d087d109e43f49d0a8fe2dc1ec517c6b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b59606eb7d7fbf3569c400a505a39088033cc71279518877e3682f2735b17dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59606eb7d7fbf3569c400a505a39088033cc71279518877e3682f2735b17dde->enter($__internal_b59606eb7d7fbf3569c400a505a39088033cc71279518877e3682f2735b17dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a451126a37fa2166302233381195d087d109e43f49d0a8fe2dc1ec517c6b1c->leave($__internal_51a451126a37fa2166302233381195d087d109e43f49d0a8fe2dc1ec517c6b1c_prof);

        
        $__internal_b59606eb7d7fbf3569c400a505a39088033cc71279518877e3682f2735b17dde->leave($__internal_b59606eb7d7fbf3569c400a505a39088033cc71279518877e3682f2735b17dde_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5614b7d83fd083a9fa22105255fc2a1ed48b2996d2c0d3f78981c670e9111f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5614b7d83fd083a9fa22105255fc2a1ed48b2996d2c0d3f78981c670e9111f5d->enter($__internal_5614b7d83fd083a9fa22105255fc2a1ed48b2996d2c0d3f78981c670e9111f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5326f76ae49bc8bd176be440608d5872c0c481dab4e2c37e367a0a2252c9b3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5326f76ae49bc8bd176be440608d5872c0c481dab4e2c37e367a0a2252c9b3ff->enter($__internal_5326f76ae49bc8bd176be440608d5872c0c481dab4e2c37e367a0a2252c9b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5326f76ae49bc8bd176be440608d5872c0c481dab4e2c37e367a0a2252c9b3ff->leave($__internal_5326f76ae49bc8bd176be440608d5872c0c481dab4e2c37e367a0a2252c9b3ff_prof);

        
        $__internal_5614b7d83fd083a9fa22105255fc2a1ed48b2996d2c0d3f78981c670e9111f5d->leave($__internal_5614b7d83fd083a9fa22105255fc2a1ed48b2996d2c0d3f78981c670e9111f5d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b6971e05f415c4c6780a3ec4e2a437b58bc3f7888308f9fc880bde880c6b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b6971e05f415c4c6780a3ec4e2a437b58bc3f7888308f9fc880bde880c6b9f->enter($__internal_45b6971e05f415c4c6780a3ec4e2a437b58bc3f7888308f9fc880bde880c6b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2976e29bf00b3921dd7ca20a409b0f2faad32ae0f5c6571f201c7ee92fec9a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2976e29bf00b3921dd7ca20a409b0f2faad32ae0f5c6571f201c7ee92fec9a85->enter($__internal_2976e29bf00b3921dd7ca20a409b0f2faad32ae0f5c6571f201c7ee92fec9a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2976e29bf00b3921dd7ca20a409b0f2faad32ae0f5c6571f201c7ee92fec9a85->leave($__internal_2976e29bf00b3921dd7ca20a409b0f2faad32ae0f5c6571f201c7ee92fec9a85_prof);

        
        $__internal_45b6971e05f415c4c6780a3ec4e2a437b58bc3f7888308f9fc880bde880c6b9f->leave($__internal_45b6971e05f415c4c6780a3ec4e2a437b58bc3f7888308f9fc880bde880c6b9f_prof);

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
