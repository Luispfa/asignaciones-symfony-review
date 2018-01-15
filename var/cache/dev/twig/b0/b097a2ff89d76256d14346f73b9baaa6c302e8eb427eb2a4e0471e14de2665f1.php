<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6e4dd377161056564b43a9d5c43579f263c8bfe4f3b24d78be416e2270e4c35b extends Twig_Template
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
        $__internal_f8fa568b0a6ba9d3565f3a28f5ee6a1d3a973b29ee61b0daeec55f35d74b8284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fa568b0a6ba9d3565f3a28f5ee6a1d3a973b29ee61b0daeec55f35d74b8284->enter($__internal_f8fa568b0a6ba9d3565f3a28f5ee6a1d3a973b29ee61b0daeec55f35d74b8284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_bfcdd798bf62c07e84c24cc5adef6f0869738f93e4213ad875dfb632b6ed916c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcdd798bf62c07e84c24cc5adef6f0869738f93e4213ad875dfb632b6ed916c->enter($__internal_bfcdd798bf62c07e84c24cc5adef6f0869738f93e4213ad875dfb632b6ed916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f8fa568b0a6ba9d3565f3a28f5ee6a1d3a973b29ee61b0daeec55f35d74b8284->leave($__internal_f8fa568b0a6ba9d3565f3a28f5ee6a1d3a973b29ee61b0daeec55f35d74b8284_prof);

        
        $__internal_bfcdd798bf62c07e84c24cc5adef6f0869738f93e4213ad875dfb632b6ed916c->leave($__internal_bfcdd798bf62c07e84c24cc5adef6f0869738f93e4213ad875dfb632b6ed916c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
