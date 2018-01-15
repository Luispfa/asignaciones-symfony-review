<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cd29e79bb3d7c07ca94ef3cf9001a32db902ef5746459b1e5698a1c665ceb34f extends Twig_Template
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
        $__internal_424665d87e90839d99ba806c9c94d6fee028b4a156c3b0ba73197ba7c94d7141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424665d87e90839d99ba806c9c94d6fee028b4a156c3b0ba73197ba7c94d7141->enter($__internal_424665d87e90839d99ba806c9c94d6fee028b4a156c3b0ba73197ba7c94d7141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c8f4c99b44c4f50aab168275c08b1317e0f224b649ee265e9246b09868d8fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f4c99b44c4f50aab168275c08b1317e0f224b649ee265e9246b09868d8fb36->enter($__internal_c8f4c99b44c4f50aab168275c08b1317e0f224b649ee265e9246b09868d8fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_424665d87e90839d99ba806c9c94d6fee028b4a156c3b0ba73197ba7c94d7141->leave($__internal_424665d87e90839d99ba806c9c94d6fee028b4a156c3b0ba73197ba7c94d7141_prof);

        
        $__internal_c8f4c99b44c4f50aab168275c08b1317e0f224b649ee265e9246b09868d8fb36->leave($__internal_c8f4c99b44c4f50aab168275c08b1317e0f224b649ee265e9246b09868d8fb36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
