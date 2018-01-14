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
        $__internal_584da3c07316deab1a0171fe7a150a2e983784a45c55b7d722749b96d3d8b8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584da3c07316deab1a0171fe7a150a2e983784a45c55b7d722749b96d3d8b8cd->enter($__internal_584da3c07316deab1a0171fe7a150a2e983784a45c55b7d722749b96d3d8b8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_01c3d0a0337d09dd7bba4f09d4afc39f763d0e4ffbd8a6c072122bc017d7e8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c3d0a0337d09dd7bba4f09d4afc39f763d0e4ffbd8a6c072122bc017d7e8e5->enter($__internal_01c3d0a0337d09dd7bba4f09d4afc39f763d0e4ffbd8a6c072122bc017d7e8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_584da3c07316deab1a0171fe7a150a2e983784a45c55b7d722749b96d3d8b8cd->leave($__internal_584da3c07316deab1a0171fe7a150a2e983784a45c55b7d722749b96d3d8b8cd_prof);

        
        $__internal_01c3d0a0337d09dd7bba4f09d4afc39f763d0e4ffbd8a6c072122bc017d7e8e5->leave($__internal_01c3d0a0337d09dd7bba4f09d4afc39f763d0e4ffbd8a6c072122bc017d7e8e5_prof);

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
