<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5f9472ca60a33dead6fde66669cf755c9a5b43a5da1efacea9d99b731e06ef27 extends Twig_Template
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
        $__internal_14e331abe0d60831040c81d71c127d2e4e2d514c14f99dd730c0b6c18086e119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e331abe0d60831040c81d71c127d2e4e2d514c14f99dd730c0b6c18086e119->enter($__internal_14e331abe0d60831040c81d71c127d2e4e2d514c14f99dd730c0b6c18086e119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_30e616c1d6c6cb08e6fa1cfe7a20d54500ac855a6cc23f4477fa18f441c39d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e616c1d6c6cb08e6fa1cfe7a20d54500ac855a6cc23f4477fa18f441c39d8f->enter($__internal_30e616c1d6c6cb08e6fa1cfe7a20d54500ac855a6cc23f4477fa18f441c39d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_14e331abe0d60831040c81d71c127d2e4e2d514c14f99dd730c0b6c18086e119->leave($__internal_14e331abe0d60831040c81d71c127d2e4e2d514c14f99dd730c0b6c18086e119_prof);

        
        $__internal_30e616c1d6c6cb08e6fa1cfe7a20d54500ac855a6cc23f4477fa18f441c39d8f->leave($__internal_30e616c1d6c6cb08e6fa1cfe7a20d54500ac855a6cc23f4477fa18f441c39d8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
