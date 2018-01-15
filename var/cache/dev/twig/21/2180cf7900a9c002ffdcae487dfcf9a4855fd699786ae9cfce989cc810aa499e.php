<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_e0eea71637f3a53907152b608c72703738c6568524025bee42c06f8d7cb7e90d extends Twig_Template
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
        $__internal_03fd9e623a6eeb202c3caa636d31e42cc9249c6423572d4122788c921a99f6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fd9e623a6eeb202c3caa636d31e42cc9249c6423572d4122788c921a99f6a3->enter($__internal_03fd9e623a6eeb202c3caa636d31e42cc9249c6423572d4122788c921a99f6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_17cbb56ac66796f0fd116575fcf9d4f1057cb20beed4c5f68990fe3c4a138903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cbb56ac66796f0fd116575fcf9d4f1057cb20beed4c5f68990fe3c4a138903->enter($__internal_17cbb56ac66796f0fd116575fcf9d4f1057cb20beed4c5f68990fe3c4a138903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_03fd9e623a6eeb202c3caa636d31e42cc9249c6423572d4122788c921a99f6a3->leave($__internal_03fd9e623a6eeb202c3caa636d31e42cc9249c6423572d4122788c921a99f6a3_prof);

        
        $__internal_17cbb56ac66796f0fd116575fcf9d4f1057cb20beed4c5f68990fe3c4a138903->leave($__internal_17cbb56ac66796f0fd116575fcf9d4f1057cb20beed4c5f68990fe3c4a138903_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
