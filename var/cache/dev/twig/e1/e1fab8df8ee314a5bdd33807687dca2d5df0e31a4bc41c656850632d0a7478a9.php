<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_11ffe13876185a541cfe2d04272e93db4e78673b660bd6794edb546d1838e71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d82d78e6e842613c0c1e05cdf36deea99e23e05e5d7f901dcc10401c37c5627b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82d78e6e842613c0c1e05cdf36deea99e23e05e5d7f901dcc10401c37c5627b->enter($__internal_d82d78e6e842613c0c1e05cdf36deea99e23e05e5d7f901dcc10401c37c5627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b0d34dd2a1352edc8f256e46eb05dd4241c1225b82af44ea3e3e8e7964dd9773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d34dd2a1352edc8f256e46eb05dd4241c1225b82af44ea3e3e8e7964dd9773->enter($__internal_b0d34dd2a1352edc8f256e46eb05dd4241c1225b82af44ea3e3e8e7964dd9773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d82d78e6e842613c0c1e05cdf36deea99e23e05e5d7f901dcc10401c37c5627b->leave($__internal_d82d78e6e842613c0c1e05cdf36deea99e23e05e5d7f901dcc10401c37c5627b_prof);

        
        $__internal_b0d34dd2a1352edc8f256e46eb05dd4241c1225b82af44ea3e3e8e7964dd9773->leave($__internal_b0d34dd2a1352edc8f256e46eb05dd4241c1225b82af44ea3e3e8e7964dd9773_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
