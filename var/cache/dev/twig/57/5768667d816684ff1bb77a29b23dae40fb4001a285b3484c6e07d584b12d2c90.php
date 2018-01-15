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
        $__internal_7d1edd4ab134db6630b9ddbe3b7e788878c0ce07b34c4786125edead28824837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1edd4ab134db6630b9ddbe3b7e788878c0ce07b34c4786125edead28824837->enter($__internal_7d1edd4ab134db6630b9ddbe3b7e788878c0ce07b34c4786125edead28824837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4d87f5eafdf86b2afb53427139f7c7b42d6c28a28e69cd2b51ba705cc0a0cb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d87f5eafdf86b2afb53427139f7c7b42d6c28a28e69cd2b51ba705cc0a0cb3f->enter($__internal_4d87f5eafdf86b2afb53427139f7c7b42d6c28a28e69cd2b51ba705cc0a0cb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7d1edd4ab134db6630b9ddbe3b7e788878c0ce07b34c4786125edead28824837->leave($__internal_7d1edd4ab134db6630b9ddbe3b7e788878c0ce07b34c4786125edead28824837_prof);

        
        $__internal_4d87f5eafdf86b2afb53427139f7c7b42d6c28a28e69cd2b51ba705cc0a0cb3f->leave($__internal_4d87f5eafdf86b2afb53427139f7c7b42d6c28a28e69cd2b51ba705cc0a0cb3f_prof);

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
