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
        $__internal_987e11b1dad52c9e24ccbc73549646574de3d8d1d237e91bd07fbd7b44c34f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987e11b1dad52c9e24ccbc73549646574de3d8d1d237e91bd07fbd7b44c34f94->enter($__internal_987e11b1dad52c9e24ccbc73549646574de3d8d1d237e91bd07fbd7b44c34f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e2547678e46967265cb2bbabfdee7e8f0db651447b5dd8db1c098016b33beb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2547678e46967265cb2bbabfdee7e8f0db651447b5dd8db1c098016b33beb19->enter($__internal_e2547678e46967265cb2bbabfdee7e8f0db651447b5dd8db1c098016b33beb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_987e11b1dad52c9e24ccbc73549646574de3d8d1d237e91bd07fbd7b44c34f94->leave($__internal_987e11b1dad52c9e24ccbc73549646574de3d8d1d237e91bd07fbd7b44c34f94_prof);

        
        $__internal_e2547678e46967265cb2bbabfdee7e8f0db651447b5dd8db1c098016b33beb19->leave($__internal_e2547678e46967265cb2bbabfdee7e8f0db651447b5dd8db1c098016b33beb19_prof);

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
