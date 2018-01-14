<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d044be0fb1a919237b94bdd3c3c15162773f41546cd4dee054800c83b8d66d59 extends Twig_Template
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
        $__internal_0efcfdf22f299161c0f8bf5176119c25cac924a4e8702551b3ea81c333d653ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efcfdf22f299161c0f8bf5176119c25cac924a4e8702551b3ea81c333d653ec->enter($__internal_0efcfdf22f299161c0f8bf5176119c25cac924a4e8702551b3ea81c333d653ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bbf46fbd2dda727842f0b42e3b7c434d2682185cedebbaddf96c706c49070024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf46fbd2dda727842f0b42e3b7c434d2682185cedebbaddf96c706c49070024->enter($__internal_bbf46fbd2dda727842f0b42e3b7c434d2682185cedebbaddf96c706c49070024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0efcfdf22f299161c0f8bf5176119c25cac924a4e8702551b3ea81c333d653ec->leave($__internal_0efcfdf22f299161c0f8bf5176119c25cac924a4e8702551b3ea81c333d653ec_prof);

        
        $__internal_bbf46fbd2dda727842f0b42e3b7c434d2682185cedebbaddf96c706c49070024->leave($__internal_bbf46fbd2dda727842f0b42e3b7c434d2682185cedebbaddf96c706c49070024_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
