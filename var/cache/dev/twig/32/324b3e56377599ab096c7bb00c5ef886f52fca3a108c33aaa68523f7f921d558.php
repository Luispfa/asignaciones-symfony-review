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
        $__internal_fbee0881d180c11aa97f6da52ac25204eb225538faf13377137672aa12158a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbee0881d180c11aa97f6da52ac25204eb225538faf13377137672aa12158a5b->enter($__internal_fbee0881d180c11aa97f6da52ac25204eb225538faf13377137672aa12158a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b8edafb0313620de9ca2e3382b601d6f4079a463587dc4d9f5ded38f09635fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8edafb0313620de9ca2e3382b601d6f4079a463587dc4d9f5ded38f09635fd2->enter($__internal_b8edafb0313620de9ca2e3382b601d6f4079a463587dc4d9f5ded38f09635fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fbee0881d180c11aa97f6da52ac25204eb225538faf13377137672aa12158a5b->leave($__internal_fbee0881d180c11aa97f6da52ac25204eb225538faf13377137672aa12158a5b_prof);

        
        $__internal_b8edafb0313620de9ca2e3382b601d6f4079a463587dc4d9f5ded38f09635fd2->leave($__internal_b8edafb0313620de9ca2e3382b601d6f4079a463587dc4d9f5ded38f09635fd2_prof);

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
