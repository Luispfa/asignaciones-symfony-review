<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bdb5c530e4fe888f1735afe25ec50d9770eb1d71806a6e2e25a86091acbb9cd8 extends Twig_Template
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
        $__internal_2f932a60c2e6ed962c032ecaee703c4aec938b21286d64bc24cb06cbc7b1637e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f932a60c2e6ed962c032ecaee703c4aec938b21286d64bc24cb06cbc7b1637e->enter($__internal_2f932a60c2e6ed962c032ecaee703c4aec938b21286d64bc24cb06cbc7b1637e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ee31143e5879f8df2bcb96b14630f5656c0aeeefba5124991895630fd6e2e3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee31143e5879f8df2bcb96b14630f5656c0aeeefba5124991895630fd6e2e3ef->enter($__internal_ee31143e5879f8df2bcb96b14630f5656c0aeeefba5124991895630fd6e2e3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2f932a60c2e6ed962c032ecaee703c4aec938b21286d64bc24cb06cbc7b1637e->leave($__internal_2f932a60c2e6ed962c032ecaee703c4aec938b21286d64bc24cb06cbc7b1637e_prof);

        
        $__internal_ee31143e5879f8df2bcb96b14630f5656c0aeeefba5124991895630fd6e2e3ef->leave($__internal_ee31143e5879f8df2bcb96b14630f5656c0aeeefba5124991895630fd6e2e3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
