<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0c5fe80b309dc363b491cff0b43b47b71de43d900a4e233106ef18fd4dee94e8 extends Twig_Template
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
        $__internal_e0a03610e5450620508dd362fdc814803d937ecb18c125eb595f74aa46f66a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a03610e5450620508dd362fdc814803d937ecb18c125eb595f74aa46f66a50->enter($__internal_e0a03610e5450620508dd362fdc814803d937ecb18c125eb595f74aa46f66a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_47b3231351bb5591a7924183e9a92ebdc7efb27f3d4a4778a8ea17471904f9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b3231351bb5591a7924183e9a92ebdc7efb27f3d4a4778a8ea17471904f9b6->enter($__internal_47b3231351bb5591a7924183e9a92ebdc7efb27f3d4a4778a8ea17471904f9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e0a03610e5450620508dd362fdc814803d937ecb18c125eb595f74aa46f66a50->leave($__internal_e0a03610e5450620508dd362fdc814803d937ecb18c125eb595f74aa46f66a50_prof);

        
        $__internal_47b3231351bb5591a7924183e9a92ebdc7efb27f3d4a4778a8ea17471904f9b6->leave($__internal_47b3231351bb5591a7924183e9a92ebdc7efb27f3d4a4778a8ea17471904f9b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
