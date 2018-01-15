<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fbad433a1ef73f5399780c8c64ddebf907c0bdc71e41b316da4373831e931205 extends Twig_Template
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
        $__internal_cba65d9b45ff26c947cd92675a63fa62e45080fa5bedb8d74aa2b36f3936d6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba65d9b45ff26c947cd92675a63fa62e45080fa5bedb8d74aa2b36f3936d6f4->enter($__internal_cba65d9b45ff26c947cd92675a63fa62e45080fa5bedb8d74aa2b36f3936d6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e5efe47be3cee2dee8d38310c82b2561b478347115d8117b89406410701b6953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5efe47be3cee2dee8d38310c82b2561b478347115d8117b89406410701b6953->enter($__internal_e5efe47be3cee2dee8d38310c82b2561b478347115d8117b89406410701b6953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cba65d9b45ff26c947cd92675a63fa62e45080fa5bedb8d74aa2b36f3936d6f4->leave($__internal_cba65d9b45ff26c947cd92675a63fa62e45080fa5bedb8d74aa2b36f3936d6f4_prof);

        
        $__internal_e5efe47be3cee2dee8d38310c82b2561b478347115d8117b89406410701b6953->leave($__internal_e5efe47be3cee2dee8d38310c82b2561b478347115d8117b89406410701b6953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
