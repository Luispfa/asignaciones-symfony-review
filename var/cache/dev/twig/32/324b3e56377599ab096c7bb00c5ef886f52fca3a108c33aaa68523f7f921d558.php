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
        $__internal_73029fc3ca378f6b2d294b05d7518a27df376eeac27d80f139e0045ba55ce4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73029fc3ca378f6b2d294b05d7518a27df376eeac27d80f139e0045ba55ce4a4->enter($__internal_73029fc3ca378f6b2d294b05d7518a27df376eeac27d80f139e0045ba55ce4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_166dc3b5cd510dadd0ed27900c519b97138cb898ae6c64aeb485628473f5613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166dc3b5cd510dadd0ed27900c519b97138cb898ae6c64aeb485628473f5613f->enter($__internal_166dc3b5cd510dadd0ed27900c519b97138cb898ae6c64aeb485628473f5613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_73029fc3ca378f6b2d294b05d7518a27df376eeac27d80f139e0045ba55ce4a4->leave($__internal_73029fc3ca378f6b2d294b05d7518a27df376eeac27d80f139e0045ba55ce4a4_prof);

        
        $__internal_166dc3b5cd510dadd0ed27900c519b97138cb898ae6c64aeb485628473f5613f->leave($__internal_166dc3b5cd510dadd0ed27900c519b97138cb898ae6c64aeb485628473f5613f_prof);

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
