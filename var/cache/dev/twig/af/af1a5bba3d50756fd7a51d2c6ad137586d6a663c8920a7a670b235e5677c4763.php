<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_961b1db2997f49facd6665a4a7bb597384b78b97e3dc119aa20f52e68f18161c extends Twig_Template
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
        $__internal_fdcf82f7cea5529a7a4b447442e1d352a4273f251e6444f02f17f96a16b7851f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcf82f7cea5529a7a4b447442e1d352a4273f251e6444f02f17f96a16b7851f->enter($__internal_fdcf82f7cea5529a7a4b447442e1d352a4273f251e6444f02f17f96a16b7851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e5b29cdf66970a123ddce5dc5b06eb553b199286f80d6ac8186860a009831fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b29cdf66970a123ddce5dc5b06eb553b199286f80d6ac8186860a009831fc6->enter($__internal_e5b29cdf66970a123ddce5dc5b06eb553b199286f80d6ac8186860a009831fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_fdcf82f7cea5529a7a4b447442e1d352a4273f251e6444f02f17f96a16b7851f->leave($__internal_fdcf82f7cea5529a7a4b447442e1d352a4273f251e6444f02f17f96a16b7851f_prof);

        
        $__internal_e5b29cdf66970a123ddce5dc5b06eb553b199286f80d6ac8186860a009831fc6->leave($__internal_e5b29cdf66970a123ddce5dc5b06eb553b199286f80d6ac8186860a009831fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
