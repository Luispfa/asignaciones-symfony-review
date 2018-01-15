<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_603dd9c11d5e1aaadb44d23a15a5768af40a3d5c76bfbf4931fdf2244d7d501d extends Twig_Template
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
        $__internal_1a0f396021529e94a5df9e705634b76c4010dab284b1a24f6234418480ce2e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0f396021529e94a5df9e705634b76c4010dab284b1a24f6234418480ce2e8e->enter($__internal_1a0f396021529e94a5df9e705634b76c4010dab284b1a24f6234418480ce2e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_dff61740244c5e6800a12b80c82118f14cad4d9289ef087704356d77e13afffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff61740244c5e6800a12b80c82118f14cad4d9289ef087704356d77e13afffb->enter($__internal_dff61740244c5e6800a12b80c82118f14cad4d9289ef087704356d77e13afffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1a0f396021529e94a5df9e705634b76c4010dab284b1a24f6234418480ce2e8e->leave($__internal_1a0f396021529e94a5df9e705634b76c4010dab284b1a24f6234418480ce2e8e_prof);

        
        $__internal_dff61740244c5e6800a12b80c82118f14cad4d9289ef087704356d77e13afffb->leave($__internal_dff61740244c5e6800a12b80c82118f14cad4d9289ef087704356d77e13afffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
