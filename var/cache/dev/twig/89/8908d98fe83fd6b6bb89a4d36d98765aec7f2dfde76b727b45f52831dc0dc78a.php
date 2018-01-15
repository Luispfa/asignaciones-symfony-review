<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1c88f661430655ac300d1e9b32492691ea4961cb1c45607f480d2597cf57effc extends Twig_Template
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
        $__internal_609691bc2e74b8cb1cc4f34d2be1fce7c55ee70df7a55157f98b84ea9ad5d891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609691bc2e74b8cb1cc4f34d2be1fce7c55ee70df7a55157f98b84ea9ad5d891->enter($__internal_609691bc2e74b8cb1cc4f34d2be1fce7c55ee70df7a55157f98b84ea9ad5d891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a0dffb5ebc94a8b185e7a0c80a3321f7ec826ad7a29980b30e8923e45a5f7d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dffb5ebc94a8b185e7a0c80a3321f7ec826ad7a29980b30e8923e45a5f7d43->enter($__internal_a0dffb5ebc94a8b185e7a0c80a3321f7ec826ad7a29980b30e8923e45a5f7d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_609691bc2e74b8cb1cc4f34d2be1fce7c55ee70df7a55157f98b84ea9ad5d891->leave($__internal_609691bc2e74b8cb1cc4f34d2be1fce7c55ee70df7a55157f98b84ea9ad5d891_prof);

        
        $__internal_a0dffb5ebc94a8b185e7a0c80a3321f7ec826ad7a29980b30e8923e45a5f7d43->leave($__internal_a0dffb5ebc94a8b185e7a0c80a3321f7ec826ad7a29980b30e8923e45a5f7d43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
