<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7ee4b7c2555058995d24d96d22144a533e52b96d800513500f04f1f48773b3d1 extends Twig_Template
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
        $__internal_3a94435d062100138d12f0b427cdbf71d1867aba600fa5b56be58dbe87ed2eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a94435d062100138d12f0b427cdbf71d1867aba600fa5b56be58dbe87ed2eff->enter($__internal_3a94435d062100138d12f0b427cdbf71d1867aba600fa5b56be58dbe87ed2eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_07ff4bf16eaa6a0c8e051d16d81d5e5614ea4877ea1c22718f692c683c8a23f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ff4bf16eaa6a0c8e051d16d81d5e5614ea4877ea1c22718f692c683c8a23f1->enter($__internal_07ff4bf16eaa6a0c8e051d16d81d5e5614ea4877ea1c22718f692c683c8a23f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3a94435d062100138d12f0b427cdbf71d1867aba600fa5b56be58dbe87ed2eff->leave($__internal_3a94435d062100138d12f0b427cdbf71d1867aba600fa5b56be58dbe87ed2eff_prof);

        
        $__internal_07ff4bf16eaa6a0c8e051d16d81d5e5614ea4877ea1c22718f692c683c8a23f1->leave($__internal_07ff4bf16eaa6a0c8e051d16d81d5e5614ea4877ea1c22718f692c683c8a23f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
