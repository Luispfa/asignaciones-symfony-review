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
        $__internal_d4a96c90639ca52f4a2ce36a9823b91d46382eebc34c39a0fa73e834e1338959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a96c90639ca52f4a2ce36a9823b91d46382eebc34c39a0fa73e834e1338959->enter($__internal_d4a96c90639ca52f4a2ce36a9823b91d46382eebc34c39a0fa73e834e1338959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4ea19bb26eb870afb863a3dd5f27e22ef512230172f78254d0d9b12db6b3ba46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea19bb26eb870afb863a3dd5f27e22ef512230172f78254d0d9b12db6b3ba46->enter($__internal_4ea19bb26eb870afb863a3dd5f27e22ef512230172f78254d0d9b12db6b3ba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4a96c90639ca52f4a2ce36a9823b91d46382eebc34c39a0fa73e834e1338959->leave($__internal_d4a96c90639ca52f4a2ce36a9823b91d46382eebc34c39a0fa73e834e1338959_prof);

        
        $__internal_4ea19bb26eb870afb863a3dd5f27e22ef512230172f78254d0d9b12db6b3ba46->leave($__internal_4ea19bb26eb870afb863a3dd5f27e22ef512230172f78254d0d9b12db6b3ba46_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f007140d80f839d805d89769aa10ecfcb060aebf32ad911a28ce6384d387269d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f007140d80f839d805d89769aa10ecfcb060aebf32ad911a28ce6384d387269d->enter($__internal_f007140d80f839d805d89769aa10ecfcb060aebf32ad911a28ce6384d387269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a84939964712ad10374941a7b183c1dde2e83b0e23ed6605e30f50af19324b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84939964712ad10374941a7b183c1dde2e83b0e23ed6605e30f50af19324b61->enter($__internal_a84939964712ad10374941a7b183c1dde2e83b0e23ed6605e30f50af19324b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a84939964712ad10374941a7b183c1dde2e83b0e23ed6605e30f50af19324b61->leave($__internal_a84939964712ad10374941a7b183c1dde2e83b0e23ed6605e30f50af19324b61_prof);

        
        $__internal_f007140d80f839d805d89769aa10ecfcb060aebf32ad911a28ce6384d387269d->leave($__internal_f007140d80f839d805d89769aa10ecfcb060aebf32ad911a28ce6384d387269d_prof);

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
