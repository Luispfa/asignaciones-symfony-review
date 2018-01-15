<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ec07df6891a8a0c605f826fd84191531c2e124d48d9fa443e07b053d7e67dfcf extends Twig_Template
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
        $__internal_777ac61d7aa8fe970d21c75e15bc02fb1cd8cffd127a944746d8b16a6c4d9231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777ac61d7aa8fe970d21c75e15bc02fb1cd8cffd127a944746d8b16a6c4d9231->enter($__internal_777ac61d7aa8fe970d21c75e15bc02fb1cd8cffd127a944746d8b16a6c4d9231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d1224863052fc0299e89bedbde35d698cc67542e4b81a576d7bcbe73cabe9fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1224863052fc0299e89bedbde35d698cc67542e4b81a576d7bcbe73cabe9fef->enter($__internal_d1224863052fc0299e89bedbde35d698cc67542e4b81a576d7bcbe73cabe9fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_777ac61d7aa8fe970d21c75e15bc02fb1cd8cffd127a944746d8b16a6c4d9231->leave($__internal_777ac61d7aa8fe970d21c75e15bc02fb1cd8cffd127a944746d8b16a6c4d9231_prof);

        
        $__internal_d1224863052fc0299e89bedbde35d698cc67542e4b81a576d7bcbe73cabe9fef->leave($__internal_d1224863052fc0299e89bedbde35d698cc67542e4b81a576d7bcbe73cabe9fef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
