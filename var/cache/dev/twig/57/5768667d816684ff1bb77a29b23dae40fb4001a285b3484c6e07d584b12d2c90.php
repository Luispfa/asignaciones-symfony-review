<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fab8212bd6b9d679a8c31be951e734e301a54f66aa87aae437ed92af0a67930b extends Twig_Template
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
        $__internal_a15b7f6ace6dbfa13ca8251405a638d86999f59edd203e34669d82e94c36a3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15b7f6ace6dbfa13ca8251405a638d86999f59edd203e34669d82e94c36a3d6->enter($__internal_a15b7f6ace6dbfa13ca8251405a638d86999f59edd203e34669d82e94c36a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8f4355c6667b57cabd03b021f1d1f02e61c86606baedb2ec05123bec616d0328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4355c6667b57cabd03b021f1d1f02e61c86606baedb2ec05123bec616d0328->enter($__internal_8f4355c6667b57cabd03b021f1d1f02e61c86606baedb2ec05123bec616d0328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a15b7f6ace6dbfa13ca8251405a638d86999f59edd203e34669d82e94c36a3d6->leave($__internal_a15b7f6ace6dbfa13ca8251405a638d86999f59edd203e34669d82e94c36a3d6_prof);

        
        $__internal_8f4355c6667b57cabd03b021f1d1f02e61c86606baedb2ec05123bec616d0328->leave($__internal_8f4355c6667b57cabd03b021f1d1f02e61c86606baedb2ec05123bec616d0328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
