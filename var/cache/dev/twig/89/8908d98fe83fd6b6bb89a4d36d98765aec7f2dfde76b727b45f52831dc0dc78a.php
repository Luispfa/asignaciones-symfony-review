<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1c88f661430655ac300d1e9b32492691ea4961cb1c45607f480d2597cf57effc extends Twig_Template
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
        $__internal_06366b0db2772c41c139ab09de845cad7eb5c2e238125ecc9830871ae3338008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06366b0db2772c41c139ab09de845cad7eb5c2e238125ecc9830871ae3338008->enter($__internal_06366b0db2772c41c139ab09de845cad7eb5c2e238125ecc9830871ae3338008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7c6cf6df02b875b7b21c375fe93c8ef4fefead89e0af3691dcc0af221af5da92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6cf6df02b875b7b21c375fe93c8ef4fefead89e0af3691dcc0af221af5da92->enter($__internal_7c6cf6df02b875b7b21c375fe93c8ef4fefead89e0af3691dcc0af221af5da92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_06366b0db2772c41c139ab09de845cad7eb5c2e238125ecc9830871ae3338008->leave($__internal_06366b0db2772c41c139ab09de845cad7eb5c2e238125ecc9830871ae3338008_prof);

        
        $__internal_7c6cf6df02b875b7b21c375fe93c8ef4fefead89e0af3691dcc0af221af5da92->leave($__internal_7c6cf6df02b875b7b21c375fe93c8ef4fefead89e0af3691dcc0af221af5da92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
