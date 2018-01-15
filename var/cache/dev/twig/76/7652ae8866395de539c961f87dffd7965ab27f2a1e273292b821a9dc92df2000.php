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
        $__internal_94ce6c856e4c480d0b9c84d511d5d9f8fa81b6300acd60d8ebd4072d6ceff599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ce6c856e4c480d0b9c84d511d5d9f8fa81b6300acd60d8ebd4072d6ceff599->enter($__internal_94ce6c856e4c480d0b9c84d511d5d9f8fa81b6300acd60d8ebd4072d6ceff599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f5f22560914ecfa15dfbb8588707712ddfb2e41372e385572fc175554d1fc2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f22560914ecfa15dfbb8588707712ddfb2e41372e385572fc175554d1fc2f5->enter($__internal_f5f22560914ecfa15dfbb8588707712ddfb2e41372e385572fc175554d1fc2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_94ce6c856e4c480d0b9c84d511d5d9f8fa81b6300acd60d8ebd4072d6ceff599->leave($__internal_94ce6c856e4c480d0b9c84d511d5d9f8fa81b6300acd60d8ebd4072d6ceff599_prof);

        
        $__internal_f5f22560914ecfa15dfbb8588707712ddfb2e41372e385572fc175554d1fc2f5->leave($__internal_f5f22560914ecfa15dfbb8588707712ddfb2e41372e385572fc175554d1fc2f5_prof);

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
