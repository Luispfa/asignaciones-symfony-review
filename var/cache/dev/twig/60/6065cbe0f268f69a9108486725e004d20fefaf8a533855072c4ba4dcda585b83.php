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
        $__internal_e8f4969e5d5fc7628a180c66a7d0458b2201c5000300f5d6d2b95c8b871eeacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f4969e5d5fc7628a180c66a7d0458b2201c5000300f5d6d2b95c8b871eeacc->enter($__internal_e8f4969e5d5fc7628a180c66a7d0458b2201c5000300f5d6d2b95c8b871eeacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_96b856fccb2d1b1289d5ebe16712a98caf5dae8098298e291aa3ffc135c83368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b856fccb2d1b1289d5ebe16712a98caf5dae8098298e291aa3ffc135c83368->enter($__internal_96b856fccb2d1b1289d5ebe16712a98caf5dae8098298e291aa3ffc135c83368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e8f4969e5d5fc7628a180c66a7d0458b2201c5000300f5d6d2b95c8b871eeacc->leave($__internal_e8f4969e5d5fc7628a180c66a7d0458b2201c5000300f5d6d2b95c8b871eeacc_prof);

        
        $__internal_96b856fccb2d1b1289d5ebe16712a98caf5dae8098298e291aa3ffc135c83368->leave($__internal_96b856fccb2d1b1289d5ebe16712a98caf5dae8098298e291aa3ffc135c83368_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1aab074ca7dee6fc224b4b91fb5a1b0bfe06ee57b19aaddaf034a500541c431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1aab074ca7dee6fc224b4b91fb5a1b0bfe06ee57b19aaddaf034a500541c431->enter($__internal_a1aab074ca7dee6fc224b4b91fb5a1b0bfe06ee57b19aaddaf034a500541c431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d002556e18593cb53198cb9ae6d9845ab4104888f295d5b8ed49945de6223924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d002556e18593cb53198cb9ae6d9845ab4104888f295d5b8ed49945de6223924->enter($__internal_d002556e18593cb53198cb9ae6d9845ab4104888f295d5b8ed49945de6223924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d002556e18593cb53198cb9ae6d9845ab4104888f295d5b8ed49945de6223924->leave($__internal_d002556e18593cb53198cb9ae6d9845ab4104888f295d5b8ed49945de6223924_prof);

        
        $__internal_a1aab074ca7dee6fc224b4b91fb5a1b0bfe06ee57b19aaddaf034a500541c431->leave($__internal_a1aab074ca7dee6fc224b4b91fb5a1b0bfe06ee57b19aaddaf034a500541c431_prof);

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
