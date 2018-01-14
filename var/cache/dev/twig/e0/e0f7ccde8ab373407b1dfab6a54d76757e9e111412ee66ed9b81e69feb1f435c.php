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
        $__internal_b1bbf5296708fdc0365c7933a92e74d95c4616369b9f13c99e18c614bf68de93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bbf5296708fdc0365c7933a92e74d95c4616369b9f13c99e18c614bf68de93->enter($__internal_b1bbf5296708fdc0365c7933a92e74d95c4616369b9f13c99e18c614bf68de93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5752ffbed698afcfc56466e690cc91b736df050cae50b61a760a6321dbc14ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5752ffbed698afcfc56466e690cc91b736df050cae50b61a760a6321dbc14ff8->enter($__internal_5752ffbed698afcfc56466e690cc91b736df050cae50b61a760a6321dbc14ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b1bbf5296708fdc0365c7933a92e74d95c4616369b9f13c99e18c614bf68de93->leave($__internal_b1bbf5296708fdc0365c7933a92e74d95c4616369b9f13c99e18c614bf68de93_prof);

        
        $__internal_5752ffbed698afcfc56466e690cc91b736df050cae50b61a760a6321dbc14ff8->leave($__internal_5752ffbed698afcfc56466e690cc91b736df050cae50b61a760a6321dbc14ff8_prof);

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
