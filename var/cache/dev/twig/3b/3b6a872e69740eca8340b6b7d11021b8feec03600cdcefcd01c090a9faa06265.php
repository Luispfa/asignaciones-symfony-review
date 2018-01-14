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
        $__internal_8f6ec1ce8f7297e62dc6e59cf3fe383c5b29191c52aee53fe6d4e7d42814589b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6ec1ce8f7297e62dc6e59cf3fe383c5b29191c52aee53fe6d4e7d42814589b->enter($__internal_8f6ec1ce8f7297e62dc6e59cf3fe383c5b29191c52aee53fe6d4e7d42814589b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_57fe5d230cc0e7e3afa21ae835b225e0b21d91334df8af07f40d6c8943fb055c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fe5d230cc0e7e3afa21ae835b225e0b21d91334df8af07f40d6c8943fb055c->enter($__internal_57fe5d230cc0e7e3afa21ae835b225e0b21d91334df8af07f40d6c8943fb055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8f6ec1ce8f7297e62dc6e59cf3fe383c5b29191c52aee53fe6d4e7d42814589b->leave($__internal_8f6ec1ce8f7297e62dc6e59cf3fe383c5b29191c52aee53fe6d4e7d42814589b_prof);

        
        $__internal_57fe5d230cc0e7e3afa21ae835b225e0b21d91334df8af07f40d6c8943fb055c->leave($__internal_57fe5d230cc0e7e3afa21ae835b225e0b21d91334df8af07f40d6c8943fb055c_prof);

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
