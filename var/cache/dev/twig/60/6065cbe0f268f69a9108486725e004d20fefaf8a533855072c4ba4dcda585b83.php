<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4b9126c1cdb920e225a3080f376a5a0a5025336de2099e721115c0885aad449f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbe65eb9a725809f8ab30f0a8670dedec83d94bda115fe254286aa8712535172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe65eb9a725809f8ab30f0a8670dedec83d94bda115fe254286aa8712535172->enter($__internal_dbe65eb9a725809f8ab30f0a8670dedec83d94bda115fe254286aa8712535172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5db723a2dcb3612bcdecbedfa00c9d51d53df1ea05bd4083eae0d6d3abe6e962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db723a2dcb3612bcdecbedfa00c9d51d53df1ea05bd4083eae0d6d3abe6e962->enter($__internal_5db723a2dcb3612bcdecbedfa00c9d51d53df1ea05bd4083eae0d6d3abe6e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dbe65eb9a725809f8ab30f0a8670dedec83d94bda115fe254286aa8712535172->leave($__internal_dbe65eb9a725809f8ab30f0a8670dedec83d94bda115fe254286aa8712535172_prof);

        
        $__internal_5db723a2dcb3612bcdecbedfa00c9d51d53df1ea05bd4083eae0d6d3abe6e962->leave($__internal_5db723a2dcb3612bcdecbedfa00c9d51d53df1ea05bd4083eae0d6d3abe6e962_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a946a4b1c14658950f442dd53b6b8a7c6b1ef7887a2cfc2fa6a20c8977214a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a946a4b1c14658950f442dd53b6b8a7c6b1ef7887a2cfc2fa6a20c8977214a66->enter($__internal_a946a4b1c14658950f442dd53b6b8a7c6b1ef7887a2cfc2fa6a20c8977214a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32ee5b00af9e40b2cccba5ff295ad4dc67f045aa40605449f61755be7a85e8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ee5b00af9e40b2cccba5ff295ad4dc67f045aa40605449f61755be7a85e8e6->enter($__internal_32ee5b00af9e40b2cccba5ff295ad4dc67f045aa40605449f61755be7a85e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_32ee5b00af9e40b2cccba5ff295ad4dc67f045aa40605449f61755be7a85e8e6->leave($__internal_32ee5b00af9e40b2cccba5ff295ad4dc67f045aa40605449f61755be7a85e8e6_prof);

        
        $__internal_a946a4b1c14658950f442dd53b6b8a7c6b1ef7887a2cfc2fa6a20c8977214a66->leave($__internal_a946a4b1c14658950f442dd53b6b8a7c6b1ef7887a2cfc2fa6a20c8977214a66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
