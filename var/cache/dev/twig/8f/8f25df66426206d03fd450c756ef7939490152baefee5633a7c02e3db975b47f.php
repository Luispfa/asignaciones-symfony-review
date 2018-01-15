<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a5cdb5e8d4f75c3cc25c686611fec8ddb9b71650f3862978444ab6857d148cb4 extends Twig_Template
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
        $__internal_ea5f1a2c22071e9bf337562fa524e538eb4c7e6dc38a8d36522658bfe34a8bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5f1a2c22071e9bf337562fa524e538eb4c7e6dc38a8d36522658bfe34a8bfd->enter($__internal_ea5f1a2c22071e9bf337562fa524e538eb4c7e6dc38a8d36522658bfe34a8bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f278b2f5fbcd2e871e6138b565f8319a605c012b534ffcb5f8c74fe67a87fd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f278b2f5fbcd2e871e6138b565f8319a605c012b534ffcb5f8c74fe67a87fd19->enter($__internal_f278b2f5fbcd2e871e6138b565f8319a605c012b534ffcb5f8c74fe67a87fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ea5f1a2c22071e9bf337562fa524e538eb4c7e6dc38a8d36522658bfe34a8bfd->leave($__internal_ea5f1a2c22071e9bf337562fa524e538eb4c7e6dc38a8d36522658bfe34a8bfd_prof);

        
        $__internal_f278b2f5fbcd2e871e6138b565f8319a605c012b534ffcb5f8c74fe67a87fd19->leave($__internal_f278b2f5fbcd2e871e6138b565f8319a605c012b534ffcb5f8c74fe67a87fd19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
