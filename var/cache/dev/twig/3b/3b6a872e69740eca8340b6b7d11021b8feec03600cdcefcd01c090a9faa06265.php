<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bdb5c530e4fe888f1735afe25ec50d9770eb1d71806a6e2e25a86091acbb9cd8 extends Twig_Template
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
        $__internal_0c3df185028ff5d5e26099fb0fac6c3180df52e9ec38222ff090647854810e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3df185028ff5d5e26099fb0fac6c3180df52e9ec38222ff090647854810e86->enter($__internal_0c3df185028ff5d5e26099fb0fac6c3180df52e9ec38222ff090647854810e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6c8707ebf112aedb5f9c47cd467885ae64a85e9358366973083cd7d815f19c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8707ebf112aedb5f9c47cd467885ae64a85e9358366973083cd7d815f19c12->enter($__internal_6c8707ebf112aedb5f9c47cd467885ae64a85e9358366973083cd7d815f19c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0c3df185028ff5d5e26099fb0fac6c3180df52e9ec38222ff090647854810e86->leave($__internal_0c3df185028ff5d5e26099fb0fac6c3180df52e9ec38222ff090647854810e86_prof);

        
        $__internal_6c8707ebf112aedb5f9c47cd467885ae64a85e9358366973083cd7d815f19c12->leave($__internal_6c8707ebf112aedb5f9c47cd467885ae64a85e9358366973083cd7d815f19c12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
