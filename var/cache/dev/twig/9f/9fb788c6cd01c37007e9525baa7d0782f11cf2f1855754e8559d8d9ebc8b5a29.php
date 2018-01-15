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
        $__internal_8d0825b68afe3f448d6eb40730606ebad33c1772d8548c1c963f97620ea8f98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0825b68afe3f448d6eb40730606ebad33c1772d8548c1c963f97620ea8f98f->enter($__internal_8d0825b68afe3f448d6eb40730606ebad33c1772d8548c1c963f97620ea8f98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8a328727f34dfe4854add4845d94b80219623c135b3fe75c2b0eb24a573e6465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a328727f34dfe4854add4845d94b80219623c135b3fe75c2b0eb24a573e6465->enter($__internal_8a328727f34dfe4854add4845d94b80219623c135b3fe75c2b0eb24a573e6465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8d0825b68afe3f448d6eb40730606ebad33c1772d8548c1c963f97620ea8f98f->leave($__internal_8d0825b68afe3f448d6eb40730606ebad33c1772d8548c1c963f97620ea8f98f_prof);

        
        $__internal_8a328727f34dfe4854add4845d94b80219623c135b3fe75c2b0eb24a573e6465->leave($__internal_8a328727f34dfe4854add4845d94b80219623c135b3fe75c2b0eb24a573e6465_prof);

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
