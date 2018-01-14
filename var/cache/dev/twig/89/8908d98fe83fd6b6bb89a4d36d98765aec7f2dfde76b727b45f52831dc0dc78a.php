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
        $__internal_d3c7fbb37b461c1299104ded3f92c8aeeb51cadd764f5f83ca760b4f881639e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c7fbb37b461c1299104ded3f92c8aeeb51cadd764f5f83ca760b4f881639e6->enter($__internal_d3c7fbb37b461c1299104ded3f92c8aeeb51cadd764f5f83ca760b4f881639e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_75b98136176340d15e7b814b0c8aeda7fd6cf5a9789eea2a4fac62b4bc13d0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b98136176340d15e7b814b0c8aeda7fd6cf5a9789eea2a4fac62b4bc13d0bc->enter($__internal_75b98136176340d15e7b814b0c8aeda7fd6cf5a9789eea2a4fac62b4bc13d0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d3c7fbb37b461c1299104ded3f92c8aeeb51cadd764f5f83ca760b4f881639e6->leave($__internal_d3c7fbb37b461c1299104ded3f92c8aeeb51cadd764f5f83ca760b4f881639e6_prof);

        
        $__internal_75b98136176340d15e7b814b0c8aeda7fd6cf5a9789eea2a4fac62b4bc13d0bc->leave($__internal_75b98136176340d15e7b814b0c8aeda7fd6cf5a9789eea2a4fac62b4bc13d0bc_prof);

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
