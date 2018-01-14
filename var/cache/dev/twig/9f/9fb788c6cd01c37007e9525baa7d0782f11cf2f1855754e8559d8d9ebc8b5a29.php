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
        $__internal_881f23872a5fd134cf53c4bdd2a665667dcd0b9b328ef8cc42f0b5c497a6fcdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881f23872a5fd134cf53c4bdd2a665667dcd0b9b328ef8cc42f0b5c497a6fcdf->enter($__internal_881f23872a5fd134cf53c4bdd2a665667dcd0b9b328ef8cc42f0b5c497a6fcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0dc25230c5d521103f065a41c0eaf63724b7eee1875fd20b992b373973b5bd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc25230c5d521103f065a41c0eaf63724b7eee1875fd20b992b373973b5bd08->enter($__internal_0dc25230c5d521103f065a41c0eaf63724b7eee1875fd20b992b373973b5bd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_881f23872a5fd134cf53c4bdd2a665667dcd0b9b328ef8cc42f0b5c497a6fcdf->leave($__internal_881f23872a5fd134cf53c4bdd2a665667dcd0b9b328ef8cc42f0b5c497a6fcdf_prof);

        
        $__internal_0dc25230c5d521103f065a41c0eaf63724b7eee1875fd20b992b373973b5bd08->leave($__internal_0dc25230c5d521103f065a41c0eaf63724b7eee1875fd20b992b373973b5bd08_prof);

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
