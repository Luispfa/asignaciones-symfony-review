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
        $__internal_5c375500aa1ece1973f03ffb47631c11ab2d4eedf3ed9de228400836051166bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c375500aa1ece1973f03ffb47631c11ab2d4eedf3ed9de228400836051166bc->enter($__internal_5c375500aa1ece1973f03ffb47631c11ab2d4eedf3ed9de228400836051166bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f649ca928f35ac1349337cb52c0c8e415922021bc55042f820c71290aa1c9063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f649ca928f35ac1349337cb52c0c8e415922021bc55042f820c71290aa1c9063->enter($__internal_f649ca928f35ac1349337cb52c0c8e415922021bc55042f820c71290aa1c9063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5c375500aa1ece1973f03ffb47631c11ab2d4eedf3ed9de228400836051166bc->leave($__internal_5c375500aa1ece1973f03ffb47631c11ab2d4eedf3ed9de228400836051166bc_prof);

        
        $__internal_f649ca928f35ac1349337cb52c0c8e415922021bc55042f820c71290aa1c9063->leave($__internal_f649ca928f35ac1349337cb52c0c8e415922021bc55042f820c71290aa1c9063_prof);

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
