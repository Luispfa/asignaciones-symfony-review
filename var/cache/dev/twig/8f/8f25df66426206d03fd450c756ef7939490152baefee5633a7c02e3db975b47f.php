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
        $__internal_f1019cc0cb7117d588d4e95d72e54adce67220d971d79c344c70caa0fecf8308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1019cc0cb7117d588d4e95d72e54adce67220d971d79c344c70caa0fecf8308->enter($__internal_f1019cc0cb7117d588d4e95d72e54adce67220d971d79c344c70caa0fecf8308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e576390563c6f4f250dfb2103575f94ad4b01a3f1afad4c30d62ae449f382984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e576390563c6f4f250dfb2103575f94ad4b01a3f1afad4c30d62ae449f382984->enter($__internal_e576390563c6f4f250dfb2103575f94ad4b01a3f1afad4c30d62ae449f382984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f1019cc0cb7117d588d4e95d72e54adce67220d971d79c344c70caa0fecf8308->leave($__internal_f1019cc0cb7117d588d4e95d72e54adce67220d971d79c344c70caa0fecf8308_prof);

        
        $__internal_e576390563c6f4f250dfb2103575f94ad4b01a3f1afad4c30d62ae449f382984->leave($__internal_e576390563c6f4f250dfb2103575f94ad4b01a3f1afad4c30d62ae449f382984_prof);

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
