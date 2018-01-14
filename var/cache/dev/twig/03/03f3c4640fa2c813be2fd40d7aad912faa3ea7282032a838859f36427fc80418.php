<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d80541cb24e64ee380742031b3a21b44df6a1604d359cb23eeaea5da61174302 extends Twig_Template
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
        $__internal_89253a3bf516daa99a869f82d294bd9d997e87887ef88a8b3075710e26c95fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89253a3bf516daa99a869f82d294bd9d997e87887ef88a8b3075710e26c95fcb->enter($__internal_89253a3bf516daa99a869f82d294bd9d997e87887ef88a8b3075710e26c95fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_16ccee4b5c83a2e850e8b00be8173cf9fd25e470fd1ea01b5bf4af6f6f5ceb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ccee4b5c83a2e850e8b00be8173cf9fd25e470fd1ea01b5bf4af6f6f5ceb5d->enter($__internal_16ccee4b5c83a2e850e8b00be8173cf9fd25e470fd1ea01b5bf4af6f6f5ceb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_89253a3bf516daa99a869f82d294bd9d997e87887ef88a8b3075710e26c95fcb->leave($__internal_89253a3bf516daa99a869f82d294bd9d997e87887ef88a8b3075710e26c95fcb_prof);

        
        $__internal_16ccee4b5c83a2e850e8b00be8173cf9fd25e470fd1ea01b5bf4af6f6f5ceb5d->leave($__internal_16ccee4b5c83a2e850e8b00be8173cf9fd25e470fd1ea01b5bf4af6f6f5ceb5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
