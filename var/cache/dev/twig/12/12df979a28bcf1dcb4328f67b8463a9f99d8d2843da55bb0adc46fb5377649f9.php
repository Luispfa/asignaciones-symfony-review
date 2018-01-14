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
        $__internal_1330d3244a78ed29884f29e55585a70a2c29ed7fd3bce97784957818f26f0da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1330d3244a78ed29884f29e55585a70a2c29ed7fd3bce97784957818f26f0da7->enter($__internal_1330d3244a78ed29884f29e55585a70a2c29ed7fd3bce97784957818f26f0da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3601dfcc359f80e7a9d93a756c55c8acd4f5d673f47e1c1afb371a8f0d47f263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3601dfcc359f80e7a9d93a756c55c8acd4f5d673f47e1c1afb371a8f0d47f263->enter($__internal_3601dfcc359f80e7a9d93a756c55c8acd4f5d673f47e1c1afb371a8f0d47f263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1330d3244a78ed29884f29e55585a70a2c29ed7fd3bce97784957818f26f0da7->leave($__internal_1330d3244a78ed29884f29e55585a70a2c29ed7fd3bce97784957818f26f0da7_prof);

        
        $__internal_3601dfcc359f80e7a9d93a756c55c8acd4f5d673f47e1c1afb371a8f0d47f263->leave($__internal_3601dfcc359f80e7a9d93a756c55c8acd4f5d673f47e1c1afb371a8f0d47f263_prof);

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
