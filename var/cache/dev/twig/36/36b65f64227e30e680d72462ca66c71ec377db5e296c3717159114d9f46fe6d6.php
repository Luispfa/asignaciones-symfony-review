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
        $__internal_aebbe952577b6c126a243b31cbe8b80470d282ce7dbfb14bf9f0a946f0416d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebbe952577b6c126a243b31cbe8b80470d282ce7dbfb14bf9f0a946f0416d6d->enter($__internal_aebbe952577b6c126a243b31cbe8b80470d282ce7dbfb14bf9f0a946f0416d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_57ad86ff71dc39e78443981a1b69b923c2bf0cff528fa3298c16d88d4d22fd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ad86ff71dc39e78443981a1b69b923c2bf0cff528fa3298c16d88d4d22fd80->enter($__internal_57ad86ff71dc39e78443981a1b69b923c2bf0cff528fa3298c16d88d4d22fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aebbe952577b6c126a243b31cbe8b80470d282ce7dbfb14bf9f0a946f0416d6d->leave($__internal_aebbe952577b6c126a243b31cbe8b80470d282ce7dbfb14bf9f0a946f0416d6d_prof);

        
        $__internal_57ad86ff71dc39e78443981a1b69b923c2bf0cff528fa3298c16d88d4d22fd80->leave($__internal_57ad86ff71dc39e78443981a1b69b923c2bf0cff528fa3298c16d88d4d22fd80_prof);

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
