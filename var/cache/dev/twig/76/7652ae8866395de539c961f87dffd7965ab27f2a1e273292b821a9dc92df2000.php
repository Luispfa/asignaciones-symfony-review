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
        $__internal_abc57e60f4e0fc713dbc989b69d62cf87ee158b6e341988e8e6b4f3ec98cae9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc57e60f4e0fc713dbc989b69d62cf87ee158b6e341988e8e6b4f3ec98cae9a->enter($__internal_abc57e60f4e0fc713dbc989b69d62cf87ee158b6e341988e8e6b4f3ec98cae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5fd455234eea0fd832acd5c0049fb5dfad6a2ff07c0c30ec8b25516f201cbc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd455234eea0fd832acd5c0049fb5dfad6a2ff07c0c30ec8b25516f201cbc3e->enter($__internal_5fd455234eea0fd832acd5c0049fb5dfad6a2ff07c0c30ec8b25516f201cbc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_abc57e60f4e0fc713dbc989b69d62cf87ee158b6e341988e8e6b4f3ec98cae9a->leave($__internal_abc57e60f4e0fc713dbc989b69d62cf87ee158b6e341988e8e6b4f3ec98cae9a_prof);

        
        $__internal_5fd455234eea0fd832acd5c0049fb5dfad6a2ff07c0c30ec8b25516f201cbc3e->leave($__internal_5fd455234eea0fd832acd5c0049fb5dfad6a2ff07c0c30ec8b25516f201cbc3e_prof);

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
