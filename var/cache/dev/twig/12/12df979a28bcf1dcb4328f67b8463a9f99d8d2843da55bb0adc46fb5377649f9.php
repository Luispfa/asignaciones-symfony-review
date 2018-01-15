<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7b195c288838e0725d947567e2ed2a2bfda728c27aa47ab1722ffd78336e3558 extends Twig_Template
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
        $__internal_fba6f79bf85e74066fc7e0663f5d5f94e573c11350938f212cb55febe1423c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba6f79bf85e74066fc7e0663f5d5f94e573c11350938f212cb55febe1423c96->enter($__internal_fba6f79bf85e74066fc7e0663f5d5f94e573c11350938f212cb55febe1423c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8e236730a2f8ad9af0fa31d6bb965d5d49701904fa4cc8cd265f28c668345a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e236730a2f8ad9af0fa31d6bb965d5d49701904fa4cc8cd265f28c668345a8c->enter($__internal_8e236730a2f8ad9af0fa31d6bb965d5d49701904fa4cc8cd265f28c668345a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fba6f79bf85e74066fc7e0663f5d5f94e573c11350938f212cb55febe1423c96->leave($__internal_fba6f79bf85e74066fc7e0663f5d5f94e573c11350938f212cb55febe1423c96_prof);

        
        $__internal_8e236730a2f8ad9af0fa31d6bb965d5d49701904fa4cc8cd265f28c668345a8c->leave($__internal_8e236730a2f8ad9af0fa31d6bb965d5d49701904fa4cc8cd265f28c668345a8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
