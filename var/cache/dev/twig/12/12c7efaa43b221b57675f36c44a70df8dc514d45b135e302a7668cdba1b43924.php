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
        $__internal_0351fc98258c373b2bae8f3c1c74b082e1b5d8f5695dba5d3de33e7367aa763f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0351fc98258c373b2bae8f3c1c74b082e1b5d8f5695dba5d3de33e7367aa763f->enter($__internal_0351fc98258c373b2bae8f3c1c74b082e1b5d8f5695dba5d3de33e7367aa763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_671849caaf4beb4372e44a4939c57bc88572253c369ba43a5db2b0c03acd3b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671849caaf4beb4372e44a4939c57bc88572253c369ba43a5db2b0c03acd3b9c->enter($__internal_671849caaf4beb4372e44a4939c57bc88572253c369ba43a5db2b0c03acd3b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0351fc98258c373b2bae8f3c1c74b082e1b5d8f5695dba5d3de33e7367aa763f->leave($__internal_0351fc98258c373b2bae8f3c1c74b082e1b5d8f5695dba5d3de33e7367aa763f_prof);

        
        $__internal_671849caaf4beb4372e44a4939c57bc88572253c369ba43a5db2b0c03acd3b9c->leave($__internal_671849caaf4beb4372e44a4939c57bc88572253c369ba43a5db2b0c03acd3b9c_prof);

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
