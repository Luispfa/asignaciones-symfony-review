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
        $__internal_3ab4a0791b1c79cc3ded3cddd666d561ec68b9d9dcebc48f9e468ca7c2e55ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab4a0791b1c79cc3ded3cddd666d561ec68b9d9dcebc48f9e468ca7c2e55ed0->enter($__internal_3ab4a0791b1c79cc3ded3cddd666d561ec68b9d9dcebc48f9e468ca7c2e55ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8c322bfcc7f930f2ea55b541c13e431985d1886fbc6668b95b8196c31a7ed469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c322bfcc7f930f2ea55b541c13e431985d1886fbc6668b95b8196c31a7ed469->enter($__internal_8c322bfcc7f930f2ea55b541c13e431985d1886fbc6668b95b8196c31a7ed469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_3ab4a0791b1c79cc3ded3cddd666d561ec68b9d9dcebc48f9e468ca7c2e55ed0->leave($__internal_3ab4a0791b1c79cc3ded3cddd666d561ec68b9d9dcebc48f9e468ca7c2e55ed0_prof);

        
        $__internal_8c322bfcc7f930f2ea55b541c13e431985d1886fbc6668b95b8196c31a7ed469->leave($__internal_8c322bfcc7f930f2ea55b541c13e431985d1886fbc6668b95b8196c31a7ed469_prof);

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
