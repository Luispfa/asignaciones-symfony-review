<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e1d3da55993cd2f7eccee66d6f440009e422c96093a9fffccad5d7a3f4a47672 extends Twig_Template
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
        $__internal_50b3941b45c972db4efde362ce22bba5f6a1596f832aab1ba1b16b35d34ea7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b3941b45c972db4efde362ce22bba5f6a1596f832aab1ba1b16b35d34ea7ef->enter($__internal_50b3941b45c972db4efde362ce22bba5f6a1596f832aab1ba1b16b35d34ea7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_52b11363c9e823124e3fa4d9ae5ffaaf9fb838ef303f46d6d827c87a22bfe870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b11363c9e823124e3fa4d9ae5ffaaf9fb838ef303f46d6d827c87a22bfe870->enter($__internal_52b11363c9e823124e3fa4d9ae5ffaaf9fb838ef303f46d6d827c87a22bfe870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_50b3941b45c972db4efde362ce22bba5f6a1596f832aab1ba1b16b35d34ea7ef->leave($__internal_50b3941b45c972db4efde362ce22bba5f6a1596f832aab1ba1b16b35d34ea7ef_prof);

        
        $__internal_52b11363c9e823124e3fa4d9ae5ffaaf9fb838ef303f46d6d827c87a22bfe870->leave($__internal_52b11363c9e823124e3fa4d9ae5ffaaf9fb838ef303f46d6d827c87a22bfe870_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
