<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9b38824eeb9cf84a7a1040e49c8fc741f2561ef0e9b9f9cb1ec84972ad41b9ca extends Twig_Template
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
        $__internal_555d44457866ae4115843d2b312422af39e3633f320afd520cb7ceee4b18f9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555d44457866ae4115843d2b312422af39e3633f320afd520cb7ceee4b18f9c3->enter($__internal_555d44457866ae4115843d2b312422af39e3633f320afd520cb7ceee4b18f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_75926a2e2dc5e7a12733dd6591727a53536c3537e906f8b6e21a35bbeabc00ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75926a2e2dc5e7a12733dd6591727a53536c3537e906f8b6e21a35bbeabc00ef->enter($__internal_75926a2e2dc5e7a12733dd6591727a53536c3537e906f8b6e21a35bbeabc00ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_555d44457866ae4115843d2b312422af39e3633f320afd520cb7ceee4b18f9c3->leave($__internal_555d44457866ae4115843d2b312422af39e3633f320afd520cb7ceee4b18f9c3_prof);

        
        $__internal_75926a2e2dc5e7a12733dd6591727a53536c3537e906f8b6e21a35bbeabc00ef->leave($__internal_75926a2e2dc5e7a12733dd6591727a53536c3537e906f8b6e21a35bbeabc00ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
