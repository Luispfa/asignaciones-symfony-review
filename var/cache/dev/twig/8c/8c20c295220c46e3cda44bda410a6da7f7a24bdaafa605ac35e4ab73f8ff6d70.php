<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7960fcaac0b2ab284b2b46168e4ef730a2e8be0f78d9a4147233661423aac945 extends Twig_Template
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
        $__internal_56262748385440dbd29bef14d1d6efd5f3eeaa7d31968ee93c087808ca7eb2e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56262748385440dbd29bef14d1d6efd5f3eeaa7d31968ee93c087808ca7eb2e7->enter($__internal_56262748385440dbd29bef14d1d6efd5f3eeaa7d31968ee93c087808ca7eb2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c01b98963393e83f128e0c05d992d7d51c166a253913f81a905c598f38c1e4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01b98963393e83f128e0c05d992d7d51c166a253913f81a905c598f38c1e4ae->enter($__internal_c01b98963393e83f128e0c05d992d7d51c166a253913f81a905c598f38c1e4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_56262748385440dbd29bef14d1d6efd5f3eeaa7d31968ee93c087808ca7eb2e7->leave($__internal_56262748385440dbd29bef14d1d6efd5f3eeaa7d31968ee93c087808ca7eb2e7_prof);

        
        $__internal_c01b98963393e83f128e0c05d992d7d51c166a253913f81a905c598f38c1e4ae->leave($__internal_c01b98963393e83f128e0c05d992d7d51c166a253913f81a905c598f38c1e4ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
