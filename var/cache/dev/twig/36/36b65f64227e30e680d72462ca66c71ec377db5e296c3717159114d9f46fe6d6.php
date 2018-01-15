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
        $__internal_7c4c7ffd17a4d24e8b47d2595bc40c5d5876ce357ef3e34c07b60206210e905e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4c7ffd17a4d24e8b47d2595bc40c5d5876ce357ef3e34c07b60206210e905e->enter($__internal_7c4c7ffd17a4d24e8b47d2595bc40c5d5876ce357ef3e34c07b60206210e905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fb815558cecbdf660f9dbb49656207d5c863ef18b0662853d47370913e2eeb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb815558cecbdf660f9dbb49656207d5c863ef18b0662853d47370913e2eeb40->enter($__internal_fb815558cecbdf660f9dbb49656207d5c863ef18b0662853d47370913e2eeb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7c4c7ffd17a4d24e8b47d2595bc40c5d5876ce357ef3e34c07b60206210e905e->leave($__internal_7c4c7ffd17a4d24e8b47d2595bc40c5d5876ce357ef3e34c07b60206210e905e_prof);

        
        $__internal_fb815558cecbdf660f9dbb49656207d5c863ef18b0662853d47370913e2eeb40->leave($__internal_fb815558cecbdf660f9dbb49656207d5c863ef18b0662853d47370913e2eeb40_prof);

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
