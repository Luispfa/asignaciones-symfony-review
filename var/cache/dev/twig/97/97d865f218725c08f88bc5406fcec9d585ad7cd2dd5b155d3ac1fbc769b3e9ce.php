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
        $__internal_d77f423f9ce25cfff4f754532db6bbcecd5c5ec413c5f485a4afc53186f4ffc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77f423f9ce25cfff4f754532db6bbcecd5c5ec413c5f485a4afc53186f4ffc7->enter($__internal_d77f423f9ce25cfff4f754532db6bbcecd5c5ec413c5f485a4afc53186f4ffc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_85094d228dec75d8624d52c5d2725369fffb0a0d17e7361b8b05e53e9e055d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85094d228dec75d8624d52c5d2725369fffb0a0d17e7361b8b05e53e9e055d8a->enter($__internal_85094d228dec75d8624d52c5d2725369fffb0a0d17e7361b8b05e53e9e055d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d77f423f9ce25cfff4f754532db6bbcecd5c5ec413c5f485a4afc53186f4ffc7->leave($__internal_d77f423f9ce25cfff4f754532db6bbcecd5c5ec413c5f485a4afc53186f4ffc7_prof);

        
        $__internal_85094d228dec75d8624d52c5d2725369fffb0a0d17e7361b8b05e53e9e055d8a->leave($__internal_85094d228dec75d8624d52c5d2725369fffb0a0d17e7361b8b05e53e9e055d8a_prof);

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
