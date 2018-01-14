<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b0bab6857aabfa1fcfd2bc92c01113f853ccea3b44ed4ec0a3e96d9c6587dfeb extends Twig_Template
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
        $__internal_209584599cda026a1a0bd878109ba774054d758bbf69a3e5400ee62d53ad4b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209584599cda026a1a0bd878109ba774054d758bbf69a3e5400ee62d53ad4b1a->enter($__internal_209584599cda026a1a0bd878109ba774054d758bbf69a3e5400ee62d53ad4b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_89bf3a934f9043181fcff9f35f94c7f5e98eb4f20637d2fc699b67fe751c0316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bf3a934f9043181fcff9f35f94c7f5e98eb4f20637d2fc699b67fe751c0316->enter($__internal_89bf3a934f9043181fcff9f35f94c7f5e98eb4f20637d2fc699b67fe751c0316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_209584599cda026a1a0bd878109ba774054d758bbf69a3e5400ee62d53ad4b1a->leave($__internal_209584599cda026a1a0bd878109ba774054d758bbf69a3e5400ee62d53ad4b1a_prof);

        
        $__internal_89bf3a934f9043181fcff9f35f94c7f5e98eb4f20637d2fc699b67fe751c0316->leave($__internal_89bf3a934f9043181fcff9f35f94c7f5e98eb4f20637d2fc699b67fe751c0316_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
